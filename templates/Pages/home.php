<?php
/**
 * @var \App\View\AppView $this
 */
$this->assign('title', $siteSettings['tab_title'] ?? 'Ouvidoria Digital');

// Helper to safely display settings
$getSetting = function($key, $default = '') use ($siteSettings) {
    return !empty($siteSettings[$key]) ? h($siteSettings[$key]) : $default;
};

?>
<div class="container pb-5">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb bg-transparent p-0 m-0 text-muted small">
            <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-muted"><i class="bi bi-house-door-fill me-1"></i> Portal</a></li>
            <li class="breadcrumb-item active text-dark fw-medium" aria-current="page">Ouvidoria - Atendimento ao Cidadão</li>
        </ol>
    </nav>

    <div class="row g-5">
        <!-- Left Column: Info & Context -->
        <div class="col-lg-5">
            <?= $this->element('hero_section') ?>
        </div>

        <!-- Right Column: Interactive Actions -->
        <div class="col-lg-7">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body p-4 p-md-5">

                    <ul class="nav nav-tabs mb-4" id="ouvidoriaTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active fw-medium text-primary fs-5" id="nova-tab" data-bs-toggle="tab" data-bs-target="#nova" type="button" role="tab" aria-controls="nova" aria-selected="true">Nova Manifestação</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-muted fw-medium fs-5" id="acompanhar-tab" data-bs-toggle="tab" data-bs-target="#acompanhar" type="button" role="tab" aria-controls="acompanhar" aria-selected="false">Acompanhar Protocolo</button>
                        </li>
                    </ul>

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <a href="<?= $this->Url->build('/admin') ?>" class="text-decoration-none">Acesso Restrito</a>
                    </div>

                    <div class="tab-content" id="ouvidoriaTabsContent">
                        <!-- Nova Manifestação Tab -->
                        <div class="tab-pane fade show active" id="nova" role="tabpanel" aria-labelledby="nova-tab">
                            <?= $this->Form->create(null, ['url' => ['controller' => 'Manifestacoes', 'action' => 'add'], 'type' => 'file', 'class' => 'needs-validation']) ?>
                                <div class="row g-3 mb-4">
                                    <div class="col-md-6">
                                        <?= $this->Form->control('tipo_manifestacao', [
                                            'type' => 'select',
                                            'label' => ['text' => 'Tipo de Manifestação <span class="text-danger">*</span>', 'escape' => false, 'class' => 'form-label fw-bold small'],
                                            'options' => ['' => 'Selecione...', 'reclamacao' => 'Reclamação', 'denuncia' => 'Denúncia', 'elogio' => 'Elogio', 'sugestao' => 'Sugestão', 'solicitacao' => 'Solicitação'],
                                            'class' => 'form-select bg-light border-0',
                                            'required' => true
                                        ]) ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?= $this->Form->control('identificacao', [
                                            'type' => 'select',
                                            'label' => ['text' => 'Identificação <span class="text-danger">*</span>', 'escape' => false, 'class' => 'form-label fw-bold small'],
                                            'options' => ['' => 'Selecione...', 'identificado' => 'Identificado', 'sigiloso' => 'Sigiloso', 'anonimo' => 'Anônimo'],
                                            'class' => 'form-select bg-light border-0',
                                            'required' => true,
                                            'id' => 'identificacao-select'
                                        ]) ?>
                                    </div>
                                </div>

                                <!-- Conditional Fields Container (Hidden by default) -->
                                <div id="conditional-fields" class="mb-4 d-none">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <?= $this->Form->control('nome', [
                                                'label' => ['text' => 'Nome Completo <span class="text-danger">*</span>', 'escape' => false, 'class' => 'form-label fw-bold small'],
                                                'class' => 'form-control bg-light border-0',
                                                'placeholder' => 'Seu nome'
                                            ]) ?>
                                        </div>
                                        <div class="col-md-6">
                                            <?= $this->Form->control('cpf', [
                                                'label' => ['text' => 'CPF <span class="text-danger">*</span>', 'escape' => false, 'class' => 'form-label fw-bold small'],
                                                'class' => 'form-control bg-light border-0',
                                                'placeholder' => '000.000.000-00'
                                            ]) ?>
                                        </div>
                                        <div class="col-md-6">
                                            <?= $this->Form->control('email', [
                                                'type' => 'email',
                                                'label' => ['text' => 'E-mail <span class="text-danger">*</span>', 'escape' => false, 'class' => 'form-label fw-bold small'],
                                                'class' => 'form-control bg-light border-0',
                                                'placeholder' => 'seu@email.com'
                                            ]) ?>
                                        </div>
                                        <div class="col-md-6">
                                            <?= $this->Form->control('telefone', [
                                                'label' => ['text' => 'Telefone/WhatsApp', 'escape' => false, 'class' => 'form-label fw-bold small'],
                                                'class' => 'form-control bg-light border-0',
                                                'placeholder' => '(00) 00000-0000'
                                            ]) ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <?= $this->Form->control('assunto', [
                                        'label' => ['text' => 'Assunto / Título <span class="text-danger">*</span>', 'escape' => false, 'class' => 'form-label fw-bold small'],
                                        'class' => 'form-control bg-light border-0',
                                        'placeholder' => 'Resumo do que se trata',
                                        'required' => true
                                    ]) ?>
                                </div>

                                <div class="mb-4">
                                    <?= $this->Form->control('descricao', [
                                        'type' => 'textarea',
                                        'label' => ['text' => 'Descrição Detalhada <span class="text-danger">*</span>', 'escape' => false, 'class' => 'form-label fw-bold small'],
                                        'class' => 'form-control bg-light border-0',
                                        'rows' => 5,
                                        'placeholder' => 'Descreva o ocorrido com o máximo de detalhes possível...',
                                        'required' => true
                                    ]) ?>
                                </div>

                                <div class="mb-4 p-4 border border-dashed rounded text-center bg-light" style="border-style: dashed !important; border-width: 2px !important; border-color: #dee2e6 !important;">
                                    <i class="bi bi-cloud-arrow-up-fill fs-3 text-secondary mb-2 d-block"></i>
                                    <div class="fw-bold">Anexar arquivos (opcional)</div>
                                    <div class="small text-muted mb-3">PDF, JPG, PNG até 10MB</div>
                                    <input type="file" name="arquivo" class="d-none" id="fileUpload">
                                    <label for="fileUpload" class="btn btn-outline-secondary btn-sm">Selecionar arquivos</label>
                                </div>

                                <?= $this->Form->button('Registrar Manifestação <i class="bi bi-arrow-right ms-2"></i>', [
                                    'class' => 'btn btn-dark w-100 py-3 fw-bold fs-6',
                                    'escapeTitle' => false
                                ]) ?>

                                <div class="text-center mt-3 small text-muted">
                                    Ao registrar, você concorda com nossos <a href="#" class="text-secondary text-decoration-underline">Termos de Uso</a> e <a href="#" class="text-secondary text-decoration-underline">Política de Privacidade</a>.
                                </div>
                            <?= $this->Form->end() ?>
                        </div>

                        <!-- Acompanhar Protocolo Tab -->
                        <div class="tab-pane fade" id="acompanhar" role="tabpanel" aria-labelledby="acompanhar-tab">
                            <div class="p-4 bg-light rounded text-center my-5">
                                <i class="bi bi-search fs-1 text-primary mb-3 d-block"></i>
                                <h5>Consulte o andamento da sua manifestação</h5>
                                <p class="text-muted mb-4">Insira o número de protocolo gerado no momento do registro e o CPF/CNPJ (se identificado) para acompanhar o status.</p>

                                <?= $this->Form->create(null, ['url' => ['controller' => 'Manifestacoes', 'action' => 'consulta'], 'class' => 'max-w-md mx-auto']) ?>
                                    <div class="mb-3 text-start">
                                        <?= $this->Form->control('protocolo', [
                                            'label' => ['text' => 'Número do Protocolo', 'class' => 'form-label fw-bold small'],
                                            'class' => 'form-control border-0',
                                            'placeholder' => 'Ex: 20231015-001'
                                        ]) ?>
                                    </div>
                                    <div class="mb-4 text-start">
                                        <?= $this->Form->control('documento', [
                                            'label' => ['text' => 'CPF / CNPJ (Opcional para denúncias anônimas)', 'class' => 'form-label fw-bold small'],
                                            'class' => 'form-control border-0',
                                            'placeholder' => 'Somente números'
                                        ]) ?>
                                    </div>
                                    <?= $this->Form->button('Consultar Status', ['class' => 'btn btn-primary w-100 py-2 fw-bold']) ?>
                                <?= $this->Form->end() ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const identificacaoSelect = document.getElementById('identificacao-select');
        const conditionalFields = document.getElementById('conditional-fields');
        const requiredInputs = conditionalFields.querySelectorAll('input[required]');

        // Store initial required state
        const initialRequired = Array.from(requiredInputs).map(input => input.name);

        // Disable required attributes initially
        requiredInputs.forEach(input => input.required = false);

        identificacaoSelect.addEventListener('change', function() {
            if (this.value === 'identificado' || this.value === 'sigiloso') {
                conditionalFields.classList.remove('d-none');
                // Re-enable required attributes for essential fields
                conditionalFields.querySelectorAll('input').forEach(input => {
                    if (['nome', 'cpf', 'email'].includes(input.name)) {
                        input.required = true;
                    }
                });
            } else {
                conditionalFields.classList.add('d-none');
                // Disable required attributes
                conditionalFields.querySelectorAll('input').forEach(input => {
                    input.required = false;
                });
            }
        });
    });
</script>
