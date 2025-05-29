<?php
include "partials/header.html";
include "partials/navbar.html";
?>

<!-- Cadastro de Produto -->
<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <!-- Card de cadastro de produto -->
      <div class="card">
        <div class="card-header text-center">
          <h4>Cadastro de Produto</h4>
        </div>
        <div class="card-body">
          <form>
            <div class="mb-3">
              <label for="productName" class="form-label">Nome do Produto</label>
              <input type="text" class="form-control" id="productName" placeholder="Digite o nome do produto" required>
            </div>

            <div class="mb-3">
              <label for="productPrice" class="form-label">Preço</label>
              <input type="number" class="form-control" id="productPrice" value="10.00" step="0.01" required>
            </div>

            <div class="mb-3">
              <label for="productQuantity" class="form-label">Quantidade</label>
              <input type="number" class="form-control" id="productQuantity" value="1" min="1" required>
            </div>

            <div class="mb-3">
              <label for="productImage" class="form-label">Imagem do Produto (URL)</label>
              <input type="url" class="form-control" id="productImage" placeholder="URL da imagem" required>
            </div>

            <div class="mb-3">
              <label for="productObservations" class="form-label">Observações</label>
              <textarea class="form-control" id="productObservations" rows="3" placeholder="Observações sobre o produto"></textarea>
            </div>

            <div class="text-center">
              <button type="submit" class="btn">Cadastrar Produto</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include "partials/footer.html";
?>
