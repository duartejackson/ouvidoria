<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Utility\Text;

class ManifestacoesController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        $this->Authentication->addUnauthenticatedActions(['add', 'consulta']);
    }

    public function add()
    {
        $manifestacao = $this->Manifestacoes->newEmptyEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $manifestacao = $this->Manifestacoes->patchEntity($manifestacao, $data);

            // Generate Protocol
            $manifestacao->protocolo = date('Ymd') . '-' . strtoupper(Text::uuid());
            $manifestacao->protocolo = substr($manifestacao->protocolo, 0, 16); // Shorten for display

            $manifestacao->status = 'Aberto';

            // Handle file upload
            $arquivo = $this->request->getData('arquivo');
            if ($arquivo && $arquivo->getError() === UPLOAD_ERR_OK) {
                $maxSize = 10 * 1024 * 1024; // 10MB
                $extension = strtolower(pathinfo($arquivo->getClientFilename(), PATHINFO_EXTENSION));
                $allowedExtensions = ['pdf', 'jpg', 'jpeg', 'png'];

                if (!in_array($extension, $allowedExtensions) || $arquivo->getSize() > $maxSize) {
                    $this->Flash->error(__('O arquivo deve ser PDF, JPG ou PNG e ter no máximo 10MB.'));
                    return $this->redirect(['controller' => 'Pages', 'action' => 'display', 'home']);
                }

                // Safe filename
                $filename = Text::uuid() . '.' . $extension;
                $targetPath = WWW_ROOT . 'uploads' . DS . $filename;

                // Ensure directory exists
                if (!is_dir(WWW_ROOT . 'uploads')) {
                    mkdir(WWW_ROOT . 'uploads', 0777, true);
                    // Add an empty index.html or .htaccess to prevent directory listing/execution ideally
                    file_put_contents(WWW_ROOT . 'uploads/.htaccess', "Options -Indexes\nphp_flag engine off");
                }

                $arquivo->moveTo($targetPath);
                $manifestacao->arquivo_anexo = $filename;
            }

            if ($this->Manifestacoes->save($manifestacao)) {
                $this->Flash->success(__('Manifestação registrada com sucesso. Seu protocolo é: ' . $manifestacao->protocolo));
                return $this->redirect(['controller' => 'Pages', 'action' => 'display', 'home']);
            }
            $this->Flash->error(__('Não foi possível registrar a manifestação. Tente novamente.'));
        }
        return $this->redirect(['controller' => 'Pages', 'action' => 'display', 'home']);
    }

    public function consulta()
    {
        if ($this->request->is('post')) {
            $protocolo = $this->request->getData('protocolo');
            $documento = $this->request->getData('documento');

            $query = $this->Manifestacoes->find()->where(['protocolo' => $protocolo]);

            if (!empty($documento)) {
                $query->where(['cpf' => $documento]);
            }

            $manifestacao = $query->first();

            if ($manifestacao) {
                $this->set(compact('manifestacao'));
            } else {
                $this->Flash->error(__('Protocolo não encontrado ou documento incorreto.'));
                return $this->redirect(['controller' => 'Pages', 'action' => 'display', 'home']);
            }
        } else {
             return $this->redirect(['controller' => 'Pages', 'action' => 'display', 'home']);
        }
    }
}
