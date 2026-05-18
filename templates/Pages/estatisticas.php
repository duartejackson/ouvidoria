<?php
$this->assign('title', 'Estatísticas - Ouvidoria Digital');
?>
<div class="container-fluid bg-light min-vh-100 py-5">
    <div class="container">
        <!-- Breadcrumb & Title -->
        <div class="mb-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" class="text-muted text-decoration-none"><i class="bi bi-house-door-fill"></i> Portal</a></li>
                    <li class="breadcrumb-item active fw-medium" aria-current="page">Estatísticas</li>
                </ol>
            </nav>
            <h2 class="fw-bold text-dark mb-3">Painel de Estatísticas</h2>
            <p class="text-muted">Acompanhe os números e a transparência da Ouvidoria Municipal.</p>
        </div>

        <div class="row g-4">
            <!-- Tipologia Chart -->
            <div class="col-md-6">
                <div class="card border-0 shadow-sm rounded-4 h-100">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold text-dark mb-4">Manifestações por Tipologia</h5>
                        <canvas id="tipologiaChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Situação Chart -->
            <div class="col-md-6">
                <div class="card border-0 shadow-sm rounded-4 h-100">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold text-dark mb-4">Manifestações por Situação</h5>
                        <canvas id="situacaoChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Por Ano Chart -->
            <div class="col-md-6">
                <div class="card border-0 shadow-sm rounded-4 h-100">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold text-dark mb-4">Volume por Ano</h5>
                        <canvas id="anoChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Por Mês Chart -->
            <div class="col-md-6">
                <div class="card border-0 shadow-sm rounded-4 h-100">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold text-dark mb-4">Evolução em <?= date('Y') ?> (Por Mês)</h5>
                        <canvas id="mesChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Shared Colors
    const primaryColor = '#0d6efd';
    const successColor = '#198754';
    const warningColor = '#ffc107';
    const dangerColor = '#dc3545';
    const infoColor = '#0dcaf0';

    // 1. Tipologia Chart (Pie or Doughnut)
    const ctxTipologia = document.getElementById('tipologiaChart').getContext('2d');
    new Chart(ctxTipologia, {
        type: 'doughnut',
        data: {
            labels: ['Denúncias', 'Elogios', 'Reclamações', 'Solicitações', 'Sugestões'],
            datasets: [{
                data: [30, 15, 45, 20, 10], // Mock Data
                backgroundColor: [dangerColor, successColor, warningColor, primaryColor, infoColor],
                borderWidth: 0
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'bottom' }
            }
        }
    });

    // 2. Situação Chart (Pie or Doughnut)
    const ctxSituacao = document.getElementById('situacaoChart').getContext('2d');
    new Chart(ctxSituacao, {
        type: 'pie',
        data: {
            labels: ['Registrada', 'Em Análise', 'Respondida'],
            datasets: [{
                data: [50, 30, 120], // Mock Data
                backgroundColor: ['#6c757d', warningColor, successColor],
                borderWidth: 0
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'bottom' }
            }
        }
    });

    // 3. Por Ano Chart (Bar)
    const ctxAno = document.getElementById('anoChart').getContext('2d');
    new Chart(ctxAno, {
        type: 'bar',
        data: {
            labels: ['2020', '2021', '2022', '2023', '2024'],
            datasets: [{
                label: 'Total de Manifestações',
                data: [120, 190, 300, 250, 180], // Mock Data
                backgroundColor: primaryColor,
                borderRadius: 4
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: false } },
            scales: { y: { beginAtZero: true } }
        }
    });

    // 4. Por Mês Chart (Line)
    const ctxMes = document.getElementById('mesChart').getContext('2d');
    new Chart(ctxMes, {
        type: 'line',
        data: {
            labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
            datasets: [{
                label: 'Manifestações em <?= date('Y') ?>',
                data: [65, 59, 80, 81, 56, 55, 40, 70, 85, 90, 60, 45], // Mock Data
                borderColor: primaryColor,
                backgroundColor: 'rgba(13, 110, 253, 0.1)',
                borderWidth: 2,
                fill: true,
                tension: 0.3
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: false } },
            scales: { y: { beginAtZero: true } }
        }
    });
});
</script>
