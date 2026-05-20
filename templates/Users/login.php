<?php
$this->assign('title', 'Acesso Restrito');
?>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white text-center py-3">
                    <h4 class="mb-0">Acesso Restrito</h4>
                </div>
                <div class="card-body p-4">
                    <?= $this->Flash->render() ?>
                    <?= $this->Form->create(null, ['class' => 'needs-validation']) ?>

                    <div class="mb-3">
                        <?= $this->Form->control('email', [
                            'required' => true,
                            'class' => 'form-control',
                            'placeholder' => 'seu@email.com'
                        ]) ?>
                    </div>

                    <div class="mb-4">
                        <?= $this->Form->control('password', [
                            'required' => true,
                            'class' => 'form-control',
                            'label' => 'Senha'
                        ]) ?>
                    </div>

                    <div class="d-grid">
                        <?= $this->Form->submit(__('Entrar'), ['class' => 'btn btn-primary btn-lg']) ?>
                    </div>

                    <?= $this->Form->end() ?>
                </div>
            </div>
            <div class="text-center mt-3">
                <a href="<?= $this->Url->build('/') ?>" class="text-decoration-none text-muted">
                    <i class="bi bi-arrow-left"></i> Voltar para a página inicial
                </a>
            </div>
        </div>
    </div>
</div>
