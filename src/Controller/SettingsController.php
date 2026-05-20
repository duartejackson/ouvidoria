<?php
declare(strict_types=1);

namespace App\Controller;

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

            // Handle logo upload
            $logo = $this->request->getData('logo_file');
            if ($logo && $logo->getError() === UPLOAD_ERR_OK) {
                $filename = $logo->getClientFilename();
                $targetPath = WWW_ROOT . 'img' . DS . $filename;
                $logo->moveTo($targetPath);
                $data['logo'] = 'img/' . $filename;
            }

            // Handle favicon upload
            $favicon = $this->request->getData('favicon_file');
            if ($favicon && $favicon->getError() === UPLOAD_ERR_OK) {
                $filename = $favicon->getClientFilename();
                $targetPath = WWW_ROOT . $filename; // usually favicon is in root
                $favicon->moveTo($targetPath);
                $data['favicon'] = $filename;
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
