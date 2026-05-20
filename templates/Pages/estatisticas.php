<?php
$this->assign('title', ($siteSettings['tab_title'] ?? 'Ouvidoria Digital') . ' - Estatísticas');
?>
<div class="container pb-5">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb bg-transparent p-0 m-0 text-muted small">
            <li class="breadcrumb-item"><a href="<?= $this->Url->build('/') ?>" class="text-decoration-none text-muted"><i class="bi bi-house-door-fill me-1"></i> Portal</a></li>
            <li class="breadcrumb-item active text-dark fw-medium" aria-current="page">Estatísticas da Ouvidoria</li>
        </ol>
    </nav>

    <div class="row mb-4">
        <div class="col-12 text-center">
            <h2 class="fw-bold mb-3">Painel de Transparência</h2>
            <p class="text-muted lead">Acompanhe os números e o desempenho do nosso atendimento à população.</p>
        </div>
    </div>

    <!-- Summary Cards -->
    <div class="row g-4 mb-5">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm bg-primary text-white h-100">
                <div class="card-body text-center p-4">
                    <i class="bi bi-inboxes-fill fs-1 mb-2"></i>
                    <h3 class="fw-bold mb-1">1.245</h3>
                    <div class="small opacity-75">Total de Manifestações</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm bg-success text-white h-100">
                <div class="card-body text-center p-4">
                    <i class="bi bi-check-circle-fill fs-1 mb-2"></i>
                    <h3 class="fw-bold mb-1">85%</h3>
                    <div class="small opacity-75">Taxa de Resolução</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm bg-warning text-dark h-100">
                <div class="card-body text-center p-4">
                    <i class="bi bi-clock-history fs-1 mb-2"></i>
                    <h3 class="fw-bold mb-1">5 dias</h3>
                    <div class="small opacity-75">Tempo Médio de Resposta</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm bg-info text-white h-100">
                <div class="card-body text-center p-4">
                    <i class="bi bi-people-fill fs-1 mb-2"></i>
                    <h3 class="fw-bold mb-1">980</h3>
                    <div class="small opacity-75">Cidadãos Atendidos</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <!-- Chart 1: Manifestations by Type -->
        <div class="col-md-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <h5 class="fw-bold mb-4 text-center">Manifestações por Tipo</h5>
                    <div style="position: relative; height:300px; width:100%">
                        <canvas id="typeChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Chart 2: Manifestations by Month -->
        <div class="col-md-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <h5 class="fw-bold mb-4 text-center">Volume Mensal (Últimos 6 meses)</h5>
                    <div style="position: relative; height:300px; width:100%">
                        <canvas id="monthChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Chart 1: Types (Doughnut)
        const ctxType = document.getElementById('typeChart').getContext('2d');
        new Chart(ctxType, {
            type: 'doughnut',
            data: {
                labels: ['Reclamação', 'Solicitação', 'Denúncia', 'Sugestão', 'Elogio'],
                datasets: [{
                    data: [45, 25, 15, 10, 5],
                    backgroundColor: [
                        '#dc3545', // danger
                        '#0dcaf0', // info
                        '#ffc107', // warning
                        '#6c757d', // secondary
                        '#198754'  // success
                    ],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                }
            }
        });

        // Chart 2: Months (Bar)
        const ctxMonth = document.getElementById('monthChart').getContext('2d');
        new Chart(ctxMonth, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun'],
                datasets: [{
                    label: 'Registros',
                    data: [150, 180, 210, 190, 240, 275],
                    backgroundColor: '#0d6efd', // primary
                    borderRadius: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            display: true,
                            drawBorder: false
                        }
                    },
                    x: {
                        grid: {
                            display: false,
                            drawBorder: false
                        }
                    }
                }
            }
        });
    });
</script>
