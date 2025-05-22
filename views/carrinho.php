<?php
  include "partials/header.html";
  include "partials/navbar.html";
?>

<style>
  /* CSS personalizado */
.container {
    max-width: 1200px; /* Aumentando a largura da container */
    margin-top: 50px;
}

.card {
    border-radius: 15px;
}

.card-header {
    border-radius: 15px 15px 0 0;
    background-color: #007bff;
    color: white;
}

.card-body {
    padding: 30px;
}

.table {
    margin-bottom: 20px;
}

.table-bordered {
    border: 1px solid #dee2e6;
}

.table-striped tbody tr:nth-child(odd) {
    background-color: #f9f9f9;
}

.table-dark {
    background-color: #343a40;
    color: white;
}

.table th, .table td {
    text-align: center;
    vertical-align: middle;
}

.btn {
    padding: 10px 20px;
    border-radius: 5px;
}

.btn-danger {
    background-color: #dc3545;
    color: white;
    border: none;
}

.btn-danger:hover {
    background-color: #c82333;
}

.btn-primary {
    background-color: #007bff;
    color: white;
    border: none;
}

.btn-primary:hover {
    background-color: #0056b3;
}

.d-flex {
    display: flex;
}

.justify-content-between {
    justify-content: space-between;
}

.mt-5 {
    margin-top: 3rem;
}

.mb-4 {
    margin-bottom: 2rem;
}

.text-success {
    color: #28a745;
}

h4 {
    font-weight: bold;
}

</style>

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header text-center bg-primary text-white">
            <h2>Carrinho de Compras</h2>
        </div>
        <div class="card-body">
            <!-- Número do Pedido -->
            <div class="d-flex justify-content-between mb-4">
                <div>
                    <h4><strong>Número do Pedido:</strong> #12345</h4>
                </div>
                <div>
                    <h4><strong>Cliente:</strong> João Silva</h4>
                </div>
            </div>

            <!-- Tabela do Carrinho -->
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Itens</th>
                        <th>Preço</th>
                        <th>Observações</th>
                        <th>Quantidade</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Exemplo de uma linha do carrinho -->
                    <tr>
                        <td>Hamburguer</td>
                        <td>R$ 20,00</td>
                        <td>Médio</td>
                        <td>2</td>
                        <td><button class="btn btn-danger">Deletar</button></td>
                    </tr>
                    <tr>
                        <td>Fritas</td>
                        <td>R$ 10,00</td>
                        <td>Grande</td>
                        <td>1</td>
                        <td><button class="btn btn-danger">Deletar</button></td>
                    </tr>
                </tbody>
            </table>

            <!-- Total -->
            <div class="d-flex justify-content-between align-items-center mt-4">
                <h4><strong>Total:</strong></h4>
                <h4><span class="text-success">R$ 50,00</span></h4>
            </div>

            <!-- Botão para continuar comprando -->
            <div class="d-flex justify-content-end mt-3">
                <a href="index.php" class="btn btn-primary">Adicione Mais Itens</a>
            </div>
        </div>
    </div>
</div>

<?php
  include "partials/footer.html";
?>

