<?php
$this->assign('title', ($siteSettings['tab_title'] ?? 'Ouvidoria Digital') . ' - FAQ');
?>
<div class="container pb-5">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb bg-transparent p-0 m-0 text-muted small">
            <li class="breadcrumb-item"><a href="<?= $this->Url->build('/') ?>" class="text-decoration-none text-muted"><i class="bi bi-house-door-fill me-1"></i> Portal</a></li>
            <li class="breadcrumb-item active text-dark fw-medium" aria-current="page">Perguntas Frequentes (FAQ)</li>
        </ol>
    </nav>

    <div class="row mb-5">
        <div class="col-12 text-center">
            <h2 class="fw-bold mb-3">Como podemos ajudar?</h2>
            <p class="text-muted lead">Encontre respostas rápidas para as dúvidas mais comuns sobre o uso da nossa plataforma.</p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="accordion accordion-flush bg-white rounded shadow-sm p-3" id="faqAccordion">

                <!-- FAQ Item 1 -->
                <div class="accordion-item border-bottom">
                    <h2 class="accordion-header" id="faq-heading-1">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="false" aria-controls="faq-collapse-1">
                            Como faço para registrar uma manifestação?
                        </button>
                    </h2>
                    <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-heading-1" data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-muted">
                            Para registrar uma manifestação, vá até a página inicial, selecione a aba "Nova Manifestação", preencha os campos obrigatórios (como Tipo de Manifestação, Identificação, Assunto e Descrição) e clique no botão "Registrar Manifestação". Você receberá um número de protocolo para acompanhar o caso.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="accordion-item border-bottom">
                    <h2 class="accordion-header" id="faq-heading-2">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="false" aria-controls="faq-collapse-2">
                            Posso fazer uma denúncia anônima?
                        </button>
                    </h2>
                    <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-heading-2" data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-muted">
                            Sim. Ao registrar uma nova manifestação, escolha a opção "Anônimo" no campo de Identificação. Nesse caso, seus dados pessoais não serão solicitados. No entanto, é importante fornecer o máximo de detalhes possível na descrição para que possamos investigar a denúncia adequadamente.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="accordion-item border-bottom">
                    <h2 class="accordion-header" id="faq-heading-3">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="false" aria-controls="faq-collapse-3">
                            Como acompanho o status da minha solicitação?
                        </button>
                    </h2>
                    <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-heading-3" data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-muted">
                            Acesse a página inicial e clique na aba "Acompanhar Protocolo". Insira o número do protocolo gerado no momento do seu registro e o seu CPF/CNPJ (caso não tenha sido uma manifestação anônima) e clique em "Consultar Status".
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="accordion-item border-bottom">
                    <h2 class="accordion-header" id="faq-heading-4">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-4" aria-expanded="false" aria-controls="faq-collapse-4">
                            Qual é o prazo de resposta da Ouvidoria?
                        </button>
                    </h2>
                    <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-heading-4" data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-muted">
                            O prazo padrão para a primeira resposta é de até 20 dias, podendo ser prorrogado por mais 10 dias, mediante justificativa expressa, conforme determina a Lei de Acesso à Informação (LAI).
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq-heading-5">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-5" aria-expanded="false" aria-controls="faq-collapse-5">
                            Quais tipos de arquivos posso anexar?
                        </button>
                    </h2>
                    <div id="faq-collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-heading-5" data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-muted">
                            Nossa plataforma aceita o envio de documentos nos formatos PDF, bem como imagens em JPG e PNG. O tamanho máximo permitido por arquivo anexado é de 10MB.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
