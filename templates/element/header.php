<?php
$currentPath = $this->request->getPath();

$isHome = $currentPath === '/';
$isStats = $currentPath === '/estatisticas';
$isFaq = $currentPath === '/faq';
$isPanel = $currentPath === '/admin' || str_starts_with($currentPath, '/settings');
?>
<header class="py-3 border-bottom mb-4 bg-white">
    <div class="container d-flex flex-wrap align-items-center justify-content-center justify-content-md-between">
        <a href="<?= $this->Url->build('/') ?>" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <?php if (!empty($siteSettings['logo'])): ?>
                <?= $this->Html->image('/' . h($siteSettings['logo']), ['class' => 'me-2', 'style' => 'max-height: 40px;']) ?>
            <?php else: ?>
                <div class="bg-primary text-white rounded p-2 me-2 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                    <i class="bi bi-megaphone-fill fs-5"></i>
                </div>
            <?php endif; ?>

            <div class="lh-sm">
                <div class="fw-bold fs-5">Ouvidoria Digital</div>
                <div class="text-muted small"><?= h($siteSettings['entity_name'] ?? 'Canal Transparente') ?></div>
            </div>
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 fw-medium">
            <li><a href="<?= $this->Url->build('/') ?>" class="nav-link px-3 <?= $isHome ? 'text-primary' : 'text-dark' ?>">Início</a></li>
            <li><a href="<?= $this->Url->build('/estatisticas') ?>" class="nav-link px-3 <?= $isStats ? 'text-primary' : 'text-dark' ?>">Estatísticas</a></li>
            <li><a href="<?= $this->Url->build('/faq') ?>" class="nav-link px-3 <?= $isFaq ? 'text-primary' : 'text-dark' ?>">FAQ</a></li>
        </ul>

        <div class="col-md-3 text-end">
            <?php if ($this->request->getAttribute('identity')): ?>
                <a href="<?= $this->Url->build('/users/logout') ?>" class="btn btn-outline-danger px-4">Sair</a>
                <a href="<?= $this->Url->build('/admin') ?>" class="btn btn-primary bg-primary-subtle text-primary border-0 px-4 ms-2">Painel</a>
            <?php else: ?>
                <a href="<?= $this->Url->build('/admin') ?>" class="btn btn-primary bg-primary-subtle text-primary border-0 px-4">Acessar Painel</a>
            <?php endif; ?>
        </div>
    </div>
</header>
