<?php
$this->assign('title', ($siteSettings['tab_title'] ?? 'Ouvidoria Digital') . ' - Consulta');
?>
<div class="container py-5">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb bg-transparent p-0 m-0 text-muted small">
            <li class="breadcrumb-item"><a href="<?= $this->Url->build('/') ?>" class="text-decoration-none text-muted"><i class="bi bi-house-door-fill me-1"></i> Portal</a></li>
            <li class="breadcrumb-item active text-dark fw-medium" aria-current="page">Consulta de Protocolo</li>
        </ol>
    </nav>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white py-3">
                    <h5 class="mb-0">Detalhes da Manifestação</h5>
                </div>
                <div class="card-body p-4">
                    <div class="row mb-4">
                        <div class="col-sm-4 text-muted fw-bold">Protocolo:</div>
                        <div class="col-sm-8 fs-5"><?= h($manifestacao->protocolo) ?></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-4 text-muted fw-bold">Status:</div>
                        <div class="col-sm-8">
                            <span class="badge bg-<?= $manifestacao->status == 'Aberto' ? 'warning text-dark' : 'success' ?> fs-6">
                                <?= h($manifestacao->status) ?>
                            </span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-4 text-muted fw-bold">Data de Registro:</div>
                        <div class="col-sm-8"><?= h($manifestacao->created->format('d/m/Y H:i')) ?></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-4 text-muted fw-bold">Tipo:</div>
                        <div class="col-sm-8 text-capitalize"><?= h($manifestacao->tipo) ?></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-4 text-muted fw-bold">Assunto:</div>
                        <div class="col-sm-8"><?= h($manifestacao->assunto) ?></div>
                    </div>

                    <hr>

                    <h6 class="fw-bold mb-3">Descrição</h6>
                    <div class="bg-light p-3 rounded text-muted">
                        <?= nl2br(h($manifestacao->descricao)) ?>
                    </div>

                    <div class="mt-4 text-center">
                        <a href="<?= $this->Url->build('/') ?>" class="btn btn-outline-secondary">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
