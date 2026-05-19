<div class="pe-lg-4">
    <div class="mb-4 text-muted small d-flex align-items-center">
        <i class="bi bi-house-door-fill me-2"></i> Portal
        <i class="bi bi-chevron-right mx-2" style="font-size: 0.7rem;"></i>
        <span class="text-dark fw-medium">Ouvidoria - Atendimento ao Cidadão</span>
    </div>

    <div class="d-inline-flex align-items-center mb-3 badge-official">
        <i class="bi bi-shield-check me-2"></i> Canal Oficial de Comunicação
    </div>

    <h2 class="display-5 fw-bold text-primary-dark mb-4" style="letter-spacing: -0.02em; line-height: 1.1;">
        Sua voz é<br />
        fundamental para<br />
        nossa evolução.
    </h2>

    <p class="text-secondary mb-5 fs-6" style="line-height: 1.6;">
        A Ouvidoria é o seu canal seguro e direto para registrar
        elogios, sugestões, solicitações, reclamações e
        denúncias. Garantimos total sigilo e acompanhamento
        de cada caso.
    </p>

        <!-- Informações da Ouvidoria Presencial -->
    <div class="card border-0 custom-border rounded-4 mb-4 bg-white shadow-sm" style="max-width: 500px;">
        <div class="card-body p-4">
            <h6 class="fw-bold text-dark mb-3"><i class="bi bi-geo-alt-fill text-primary me-2"></i> Ouvidoria Presencial</h6>
            <ul class="list-unstyled text-muted small mb-0 lh-lg">
                <li><strong>Rua:</strong> Rua Exemplo / <strong>Número:</strong> 123</li>
                <li><strong>Bairro:</strong> Centro / <strong>Cidade:</strong> Cidade Exemplo</li>
                <li><strong>UF:</strong> UF / <strong>CEP:</strong> 00000-000</li>
                <li><strong>Horário de Funcionamento:</strong> Segunda a Sexta, das 08h às 17h</li>
                <li><strong>Ouvidor Responsável:</strong> João da Silva</li>
            </ul>
        </div>
    </div>

    <!-- Regulamentação Local -->
    <div class="d-flex justify-content-center mb-4">
        <button type="button" class="btn btn-outline-primary rounded-pill px-4 py-2 fw-medium d-inline-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#regulamentacaoModal">
            <i class="bi bi-file-earmark-pdf"></i> Regulamentação Local
        </button>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-sm-6">
            <div class="feature-box">
                <div class="icon-wrapper green">
                    <i class="bi bi-shield-lock-fill fs-5"></i>
                </div>
                <h6 class="fw-bold mb-2">Sigilo Absoluto</h6>
                <p class="text-muted small mb-0" style="font-size: 0.8rem;">
                    Seus dados são protegidos por criptografia de ponta a ponta.
                </p>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="feature-box">
                <div class="icon-wrapper blue">
                    <i class="bi bi-clock-history fs-5"></i>
                </div>
                <h6 class="fw-bold mb-2" style="font-size: 0.9rem;">Acompanhamento</h6>
                <p class="text-muted small mb-0" style="font-size: 0.8rem;">
                    Acompanhe o status do seu protocolo em tempo real.
                </p>
            </div>
        </div>
    </div>


</div>
<!-- Modal Regulamentação Local -->
<div class="modal fade" id="regulamentacaoModal" tabindex="-1" aria-labelledby="regulamentacaoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 rounded-4 shadow-lg">
            <div class="modal-header border-bottom-0 pb-0 px-4 pt-4">
                <h5 class="modal-title fw-bold text-dark" id="regulamentacaoModalLabel"><i class="bi bi-file-earmark-pdf text-danger me-2"></i> Regulamentação Local da Ouvidoria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="ratio ratio-4x3 rounded-3 overflow-hidden border">
                    <iframe src="<?= $this->Url->build('/pdf/regulamentacao.pdf') ?>" title="Regulamentação Local" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
