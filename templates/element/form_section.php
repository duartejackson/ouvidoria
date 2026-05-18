<div class="card border-0 custom-border rounded-4 h-100">
    <div class="card-body p-4 p-md-5">

        <ul class="nav nav-tabs custom-tabs mb-4 border-bottom d-flex flex-row">
            <li class="nav-item">
                <a class="nav-link active fw-medium px-0 pb-3 me-4" href="#">Nova Manifestação</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-muted fw-medium px-0 pb-3 me-4 border-0" href="#">Acompanhar Protocolo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-muted fw-medium px-0 pb-3 border-0" href="#">Acesso Restrito</a>
            </li>
        </ul>

        <?= $this->Form->create(null) ?>
            <div class="row g-4 mb-4">
                <div class="col-md-6">
                    <label class="form-label fw-bold small text-dark mb-2">Tipo de Manifestação <span class="text-danger">*</span></label>
                    <?= $this->Form->select('tipo', ['Elogio' => 'Elogio', 'Sugestão' => 'Sugestão', 'Solicitação' => 'Solicitação', 'Reclamação' => 'Reclamação', 'Denúncia' => 'Denúncia'], ['empty' => 'Selecione...', 'class' => 'form-select custom-input border-0 text-secondary']) ?>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-bold small text-dark mb-2">Identificação <span class="text-danger">*</span></label>
                    <?= $this->Form->select('identificacao', ['Quero me identificar' => 'Quero me identificar', 'Anônimo' => 'Anônimo'], ['class' => 'form-select custom-input border-0 text-secondary']) ?>
                </div>
            </div>

            <div class="mb-4">
                <label class="form-label fw-bold small text-dark mb-2">Assunto / Título <span class="text-danger">*</span></label>
                <?= $this->Form->control('assunto', ['label' => false, 'class' => 'form-control custom-input border-0', 'placeholder' => 'Resumo do que se trata']) ?>
            </div>

            <div class="mb-4">
                <label class="form-label fw-bold small text-dark mb-2">Descrição Detalhada <span class="text-danger">*</span></label>
                <?= $this->Form->control('descricao', ['type' => 'textarea', 'label' => false, 'rows' => '4', 'class' => 'form-control custom-input border-0', 'placeholder' => 'Descreva o ocorrido com o máximo de detalhes possível...']) ?>
            </div>

            <div class="upload-zone text-center p-4 rounded-3 mb-4 d-flex flex-column align-items-start justify-content-center">
                <div class="icon-circle bg-secondary text-white mb-3 d-flex align-items-center justify-content-center mx-auto" style="width: 32px; height: 32px; border-radius: 50%;">
                    <i class="bi bi-cloud-arrow-up-fill"></i>
                </div>
                <h6 class="fw-bold mb-1 w-100 text-center">Anexar arquivos (opcional)</h6>
                <p class="text-muted small mb-0 w-100 text-center">PDF, JPG, PNG até 10MB</p>
            </div>

            <button type="submit" class="btn btn-primary-dark w-100 py-3 rounded-2 fw-medium mb-3 d-flex align-items-center justify-content-center gap-2" style="font-size: 0.95rem;">
                Registrar Manifestação <i class="bi bi-arrow-right"></i>
            </button>

            <p class="text-center text-muted small mb-0" style="font-size: 0.75rem;">
                Ao registrar, você concorda com nossos <a href="#" class="text-muted text-decoration-underline">Termos de Uso</a> e <a href="#" class="text-muted text-decoration-underline">Política de Privacidade</a>.
            </p>
        <?= $this->Form->end() ?>
    </div>
</div>