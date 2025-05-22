<?php
  include "../partials/header.html";
  include "../partials/navbar.html";
?>

<style>
     .table {
        width: 100%;
        margin: 20px 0;
        border-collapse: collapse;
        background-color: #f8f9fa;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .table th,
    .table td {
        padding: 15px;
        text-align: center;
        border: 1px solid #dee2e6;
    }

    .table thead {
        background-color: #007bff;
        color: white;
    }

</style>

<h1 class="text-center">Histórico de pedidos</h1>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Pedido Nº</th>
      <th scope="col">Cliente</th>
      <th scope="col">Itens</th>
      <th scope="col">Observações</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td class="text-capitalize">joão</td>
      <td  class="text-capitalize">hamburguer</td>
      <td  class="text-capitalize">completo</td>

    </tr>
    <tr>
      <th scope="row">2</th>
      <td class="text-capitalize">Jacob</td>
      <td class="text-capitalize">fritas</td>
      <td  class="text-capitalize">com cheddar e bacon</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td class="text-capitalize">jefferson</td>
      <td class="text-capitalize">cachorro-quente</td>
      <td  class="text-capitalize">sem salada</td>
    </tr>
  </tbody>
</table>

<?php
  include "../partials/footer.html";
?>
