<div class="px-4 py-3 border-bottom d-flex align-items-center justify-content-between header-bg">
    <div class="d-flex align-items-center">
        <div class="logo-icon me-3 bg-primary text-white rounded d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
            <i class="bi bi-megaphone-fill fs-4"></i>
        </div>
        <div>
            <h5 class="mb-0 fw-bold text-dark">Ouvidoria Digital</h5>
            <small class="text-muted">Canal Transparente</small>
        </div>
    </div>

    <div class="d-none d-lg-flex gap-4">
        <a href="<?= $this->Url->build('/') ?>" class="nav-link <?= ($this->request->getParam('pass')[0] ?? '') !== 'estatisticas' ? 'active text-dark' : 'text-muted' ?> fw-medium" style="font-size: 0.9rem;">Início</a>
        <a href="<?= $this->Url->build('/estatisticas') ?>" class="nav-link <?= ($this->request->getParam('pass')[0] ?? '') === 'estatisticas' ? 'active text-dark' : 'text-muted' ?> fw-medium" style="font-size: 0.9rem;">Estatísticas</a>
        <a href="#" class="nav-link text-muted fw-medium" style="font-size: 0.9rem;">FAQ</a>
    </div>

    <div>
        <button class="btn btn-light text-primary fw-medium px-4 py-2" style="font-size: 0.9rem; background-color: #f0f7ff;">
            Acessar Painel
        </button>
    </div>
</div>