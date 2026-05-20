<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Utility\Text;

class SettingsController extends AppController
{
    public function edit()
    {
        $settingsQuery = $this->Settings->find('all');
        $settingsArray = [];
        foreach ($settingsQuery as $setting) {
            $settingsArray[$setting->key] = $setting->value;
        }

        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();
            $allowedImageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
            $allowedIconExtensions = ['ico', 'png'];

            // Handle logo upload
            $logo = $this->request->getData('logo_file');
            if ($logo && $logo->getError() === UPLOAD_ERR_OK) {
                $extension = strtolower(pathinfo($logo->getClientFilename(), PATHINFO_EXTENSION));
                if (in_array($extension, $allowedImageExtensions)) {
                    $filename = 'logo_' . Text::uuid() . '.' . $extension;
                    $targetPath = WWW_ROOT . 'img' . DS . $filename;
                    $logo->moveTo($targetPath);
                    $data['logo'] = 'img/' . $filename;
                } else {
                    $this->Flash->error(__('Formato de logo inválido. Use JPG, PNG ou GIF.'));
                }
            }

            // Handle favicon upload
            $favicon = $this->request->getData('favicon_file');
            if ($favicon && $favicon->getError() === UPLOAD_ERR_OK) {
                 $extension = strtolower(pathinfo($favicon->getClientFilename(), PATHINFO_EXTENSION));
                 if (in_array($extension, $allowedIconExtensions)) {
                    $filename = 'favicon_' . Text::uuid() . '.' . $extension;
                    $targetPath = WWW_ROOT . $filename;
                    $favicon->moveTo($targetPath);
                    $data['favicon'] = $filename;
                 } else {
                    $this->Flash->error(__('Formato de favicon inválido. Use ICO ou PNG.'));
                 }
            }

            $success = true;
            foreach ($data as $key => $value) {
                // Ignore file upload fields
                if (in_array($key, ['logo_file', 'favicon_file'])) {
                    continue;
                }

                $setting = $this->Settings->find()->where(['key' => $key])->first();
                if (!$setting) {
                    $setting = $this->Settings->newEmptyEntity();
                    $setting->key = $key;
                }

                // Do not update password if it's empty
                if ($key === 'smtp_password' && empty($value)) {
                    continue;
                }

                $setting->value = $value;
                if (!$this->Settings->save($setting)) {
                    $success = false;
                }
            }

            if ($success) {
                $this->Flash->success(__('As configurações foram salvas com sucesso.'));
                return $this->redirect(['action' => 'edit']);
            }
            $this->Flash->error(__('Não foi possível salvar as configurações. Por favor, tente novamente.'));
        }

        $this->set(compact('settingsArray'));
    }
}
