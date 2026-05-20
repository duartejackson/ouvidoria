<?php
$getSetting = function($key, $default = '') use ($siteSettings) {
    return !empty($siteSettings[$key]) ? h($siteSettings[$key]) : $default;
};

// Configurable values
$ouvidoriaRua = $getSetting('ouvidoria_rua', 'Rua Exemplo');
$ouvidoriaNumero = $getSetting('ouvidoria_numero', '123');
$ouvidoriaBairro = $getSetting('ouvidoria_bairro', 'Centro');
$ouvidoriaCidade = $getSetting('ouvidoria_cidade', 'Cidade Exemplo');
$ouvidoriaUf = $getSetting('ouvidoria_uf', 'UF');
$ouvidoriaCep = $getSetting('ouvidoria_cep', '00000-000');
$ouvidoriaHorario = $getSetting('ouvidoria_horario', 'Segunda a Sexta, das 08h às 17h');
$ouvidoriaResponsavel = $getSetting('ouvidoria_responsavel', 'João da Silva');
$regulamentacaoUrl = $getSetting('regulamentacao_url', '#');
?>
<div class="pe-lg-4">
    <div class="d-inline-flex align-items-center bg-success bg-opacity-10 text-success px-3 py-1 rounded-pill mb-4 small fw-medium">
        <i class="bi bi-shield-check me-2"></i> Canal Oficial de Comunicação
    </div>

    <h1 class="display-5 fw-bold mb-4" style="letter-spacing: -1px; line-height: 1.1;">Sua voz é fundamental para nossa evolução.</h1>

    <p class="lead text-muted mb-5 fs-5">A Ouvidoria é o seu canal seguro e direto para registrar elogios, sugestões, solicitações, reclamações e denúncias. Garantimos total sigilo e acompanhamento de cada caso.</p>

    <div class="card bg-white border shadow-sm mb-4">
        <div class="card-body p-4">
            <h5 class="fw-bold mb-3 d-flex align-items-center">
                <i class="bi bi-geo-alt-fill text-primary me-2"></i> Ouvidoria Presencial
            </h5>
            <div class="small text-muted mb-2">
                <strong>Rua:</strong> <?= $ouvidoriaRua ?> / <strong>Número:</strong> <?= $ouvidoriaNumero ?>
            </div>
            <div class="small text-muted mb-2">
                <strong>Bairro:</strong> <?= $ouvidoriaBairro ?> / <strong>Cidade:</strong> <?= $ouvidoriaCidade ?>
            </div>
            <div class="small text-muted mb-2">
                <strong>UF:</strong> <?= $ouvidoriaUf ?> / <strong>CEP:</strong> <?= $ouvidoriaCep ?>
            </div>
            <div class="small text-muted mb-2">
                <strong>Horário de Funcionamento:</strong> <?= $ouvidoriaHorario ?>
            </div>
            <div class="small text-muted">
                <strong>Ouvidor Responsável:</strong> <?= $ouvidoriaResponsavel ?>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center mb-5">
        <a href="<?= $regulamentacaoUrl ?>" class="btn btn-outline-primary px-4 py-2 rounded-pill d-inline-flex align-items-center bg-white">
            <i class="bi bi-file-earmark-pdf me-2"></i> Regulamentação Local
        </a>
    </div>

    <div class="row g-4">
        <div class="col-sm-6">
            <div class="p-3 border rounded bg-white">
                <div class="bg-success bg-opacity-10 text-success rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 40px; height: 40px;">
                    <i class="bi bi-shield-lock-fill"></i>
                </div>
                <h6 class="fw-bold mb-2">Sigilo Absoluto</h6>
                <p class="text-muted small mb-0">Seus dados são protegidos por criptografia de ponta a ponta.</p>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="p-3 border rounded bg-white">
                <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 40px; height: 40px;">
                    <i class="bi bi-clock-history"></i>
                </div>
                <h6 class="fw-bold mb-2">Acompanhamento</h6>
                <p class="text-muted small mb-0">Acompanhe o status do seu protocolo em tempo real.</p>
            </div>
        </div>
    </div>
</div>
