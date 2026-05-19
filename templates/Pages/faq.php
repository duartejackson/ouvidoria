<?php
/**
 * @var \App\View\AppView $this
 */
$this->assign('title', 'Perguntas Frequentes (FAQ)');
?>
<div class="pe-lg-4 pb-5">
    <!-- Breadcrumb -->
    <div class="mb-4 text-muted small d-flex align-items-center">
        <a href="<?= $this->Url->build('/') ?>" class="text-muted text-decoration-none hover-primary">
            <i class="bi bi-house-door-fill me-2"></i> Portal
        </a>
        <i class="bi bi-chevron-right mx-2" style="font-size: 0.7rem;"></i>
        <span class="text-dark fw-medium">Perguntas Frequentes (FAQ)</span>
    </div>

    <!-- Header Section -->
    <div class="mb-5 text-center text-lg-start">
        <h2 class="display-6 fw-bold text-primary-dark mb-3">Perguntas Frequentes</h2>
        <p class="text-secondary fs-6" style="line-height: 1.6;">
            Encontre respostas para as dúvidas mais comuns sobre o uso da nossa Ouvidoria Digital.
            Se não encontrar o que procura, sinta-se à vontade para registrar uma manifestação.
        </p>
    </div>

    <!-- FAQ Accordion -->
    <div class="accordion accordion-flush bg-white rounded-4 shadow-sm custom-border overflow-hidden" id="faqAccordion">

        <!-- Question 1 -->
        <div class="accordion-item border-0 border-bottom">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button bg-white text-dark fw-bold py-4 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <i class="bi bi-question-circle text-primary me-3 fs-5"></i>
                    O que é a Ouvidoria e para que serve?
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                <div class="accordion-body text-secondary lh-lg pt-0 pb-4 px-4 ms-4">
                    A Ouvidoria é um canal direto de comunicação entre o cidadão e a administração pública.
                    Serve para registrar elogios, sugestões, solicitações, reclamações e denúncias sobre os serviços prestados,
                    garantindo que sua voz seja ouvida e ajudando a melhorar continuamente o atendimento.
                </div>
            </div>
        </div>

        <!-- Question 2 -->
        <div class="accordion-item border-0 border-bottom">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed bg-white text-dark fw-bold py-4 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <i class="bi bi-shield-lock text-primary me-3 fs-5"></i>
                    Posso fazer uma manifestação anônima?
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                <div class="accordion-body text-secondary lh-lg pt-0 pb-4 px-4 ms-4">
                    Sim! Você pode optar por não se identificar ao registrar uma manifestação.
                    No formulário de "Nova Manifestação", basta alterar o campo "Identificação" de "Quero me identificar" para "Sigiloso" ou "Anônimo".
                    Lembramos que, no caso de denúncias anônimas, pode haver limitações no acompanhamento e no retorno sobre o caso.
                </div>
            </div>
        </div>

        <!-- Question 3 -->
        <div class="accordion-item border-0 border-bottom">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed bg-white text-dark fw-bold py-4 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <i class="bi bi-clock-history text-primary me-3 fs-5"></i>
                    Qual o prazo para receber uma resposta?
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                <div class="accordion-body text-secondary lh-lg pt-0 pb-4 px-4 ms-4">
                    O prazo legal padrão para resposta é de até <strong>20 dias</strong> (podendo ser prorrogado por mais 10 dias, mediante justificativa).
                    Nossa equipe trabalha para responder o mais rápido possível. Você pode acompanhar o andamento a qualquer momento usando o número do seu protocolo na aba "Acompanhar Protocolo".
                </div>
            </div>
        </div>

        <!-- Question 4 -->
        <div class="accordion-item border-0 border-bottom">
            <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed bg-white text-dark fw-bold py-4 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <i class="bi bi-file-earmark-arrow-up text-primary me-3 fs-5"></i>
                    Quais tipos de arquivos posso anexar?
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                <div class="accordion-body text-secondary lh-lg pt-0 pb-4 px-4 ms-4">
                    Para complementar sua manifestação, você pode anexar documentos, fotos ou capturas de tela.
                    Os formatos suportados são <strong>PDF, JPG e PNG</strong>, com tamanho máximo de <strong>10MB</strong> por arquivo.
                </div>
            </div>
        </div>

        <!-- Question 5 -->
        <div class="accordion-item border-0">
            <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed bg-white text-dark fw-bold py-4 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    <i class="bi bi-geo-alt text-primary me-3 fs-5"></i>
                    Existe atendimento presencial?
                </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                <div class="accordion-body text-secondary lh-lg pt-0 pb-4 px-4 ms-4">
                    Sim. Se preferir, você pode ser atendido presencialmente.
                    Nossa Ouvidoria fica localizada na <strong>Rua Exemplo, 123 - Centro</strong>.
                    O horário de funcionamento é de <strong>Segunda a Sexta, das 08h às 17h</strong>.
                </div>
            </div>
        </div>

    </div>
</div>

<style>
/* Accordion custom styling to match UI theme */
.accordion-button:not(.collapsed) {
    background-color: #fff;
    color: #000;
    box-shadow: none;
}
.accordion-button:focus {
    box-shadow: none;
    border-color: rgba(0,0,0,0.125);
}
.accordion-button::after {
    filter: invert(50%); /* make chevron gray */
}
.hover-primary:hover {
    color: var(--bs-primary) !important;
}
</style>
