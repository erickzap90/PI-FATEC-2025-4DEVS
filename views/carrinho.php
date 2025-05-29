<?php
  include "partials/header.html";
  include "partials/navbar.html";
?>

<div class="container mt-5">
    <div class="card">
        <div class="card-header text-center">
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
            <table class="table table-striped">
                <thead>
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
                        <td><button class="btn btn-danger-style">Deletar</button></td>
                    </tr>
                    <tr>
                        <td>Fritas</td>
                        <td>R$ 10,00</td>
                        <td>Grande</td>
                        <td>1</td>
                        <td><button class="btn btn-danger-style">Deletar</button></td>
                    </tr>
                </tbody>
            </table>

            <!-- Total -->
            <div class="d-flex justify-content-between align-items-center mt-4">
                <h4><strong>Total:</strong></h4>
                <h4><span class="text-success">R$ 30,00</span></h4>
            </div>

            <!-- Botão para continuar comprando -->
            <div class="d-flex justify-content-end mt-3">
                <a href="index.php" class="btn btn-login">Adicione Mais Itens</a>
            </div>
        </div>
    </div>
</div>

<?php
  include "partials/footer.html";
?>
