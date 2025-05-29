<?php
include "../partials/header.html";
include "../partials/navbar.html";

?>
<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<body>

  <div class="container">
    <div class="row">
      <!-- Título do Dashboard -->
      <div class="col-12 text-center mb-4">
        <h1 class="display-4">Dashboard de Vendas - Evento</h1>
        <p class="lead">Análise de Vendas e Performance dos Produtos</p>
      </div>

      <!-- Total de Vendas e Lucro -->
      <div class="col-md-6 col-lg-3">
        <div class="card">
          <div class="card-header">
            Total de Vendas
          </div>
          <div class="card-body text-center">
            <h3>R$ 20,500</h3>
            <p>Total de vendas realizadas no evento</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="card">
          <div class="card-header">
            Lucro
          </div>
          <div class="card-body text-center">
            <h3>R$ 12,300</h3>
            <p>Total de lucro líquido no evento</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="card">
          <div class="card-header">
            Custo
          </div>
          <div class="card-body text-center">
            <h3>R$ 8,200</h3>
            <p>Total de custos com os produtos</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="card">
          <div class="card-header">
            Produtos Mais Vendidos
          </div>
          <div class="card-body text-center">
            <h3>Hamburguer X</h3>
            <p>O produto que mais vendeu durante o evento</p>
          </div>
        </div>
      </div>

      <!-- Gráficos -->
      <div class="col-md-6 col-lg-4">
        <div class="card">
          <div class="card-header">
            Vendas por Hora
          </div>
          <div class="card-body">
            <canvas id="salesByHourChart"></canvas>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="card">
          <div class="card-header">
            Produtos Mais Vendidos
          </div>
          <div class="card-body">
            <canvas id="bestSellingProductsChart"></canvas>
          </div>
        </div>
      </div>

      <div class="col-md-12 col-lg-4">
        <div class="card">
          <div class="card-header">
            Vendas Totais por Produto
          </div>
          <div class="card-body">
            <canvas id="totalSalesByProductChart"></canvas>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Custom JS -->
  <script>
    // Gráfico de Vendas por Hora
    var ctx = document.getElementById('salesByHourChart').getContext('2d');
    var salesByHourChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00'],
        datasets: [{
          label: 'Vendas (R$)',
          data: [500, 800, 1200, 1500, 1800, 2200, 2500, 2300, 2000, 1900],
          borderColor: 'rgba(75, 192, 192, 1)',
          fill: false,
          tension: 0.1
        }]
      },
      options: {
        responsive: true,
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });

    // Gráfico de Produtos Mais Vendidos
    var ctx2 = document.getElementById('bestSellingProductsChart').getContext('2d');
    var bestSellingProductsChart = new Chart(ctx2, {
      type: 'bar',
      data: {
        labels: ['Hamburguer X', 'Fritas', 'Refrigerante', 'Pizza'],
        datasets: [{
          label: 'Quantidade Vendida',
          data: [300, 150, 180, 120],
          backgroundColor: 'rgba(54, 162, 235, 0.2)',
          borderColor: 'rgba(54, 162, 235, 1)',
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });

    // Gráfico de Vendas Totais por Produto
    var ctx3 = document.getElementById('totalSalesByProductChart').getContext('2d');
    var totalSalesByProductChart = new Chart(ctx3, {
      type: 'pie',
      data: {
        labels: ['Hamburguer X', 'Fritas', 'Refrigerante', 'Pizza'],
        datasets: [{
          label: 'Vendas Totais (R$)',
          data: [8000, 4000, 4500, 2500],
          backgroundColor: ['#FF5733', '#33FF57', '#3357FF', '#FF33A8']
        }]
      },
      options: {
        responsive: true
      }
    });
  </script>

<?php
  include "../partials/footer.html";
?>
