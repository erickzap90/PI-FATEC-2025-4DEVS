<?php
  include "partials/header.html";
  include "partials/navbar.php";

if (!isset($_SESSION['tipo_usuario'])) {
    header("Location: /PI-FATEC-2025-4DEVS/views/admin/login.php");
    exit;
}
?>

    <!-- Container for cards -->
    <div class="container my-5">
<div class="row">
  <!-- Card 1 -->
  <div class="col-md-4">
    <div class="card">
      <img src="../img/hotdog.jpeg" class="card-img-top" alt="Imagem do produto">
      <div class="card-body">
        <h5 class="card-title">Hot Dog Coreano</h5>
        <div class="mb-3 row">
          <div class="col-6">
          <label for="price1" class="form-label">Preço</label>
          <div class="input-group">
            <span class="input-group-text">R$</span>
            <input type="number" class="form-control" id="price1" value="20.00" disabled>
          </div>
          </div>
          <div class="col-6">
            <label for="quantity1" class="form-label">Quantidade</label>
            <input type="number" class="form-control" id="quantity1" value="1" min="1" max="50">
          </div>
        </div>
        <div class="mb-3">
          <label for="observations1" class="form-label">Observações</label>
          <textarea class="form-control" id="observations1" rows="1"></textarea>
        </div>
        <button class="btn btn-primary">Adicionar ao Carrinho</button>
      </div>
    </div>
  </div>

  <!-- Card 2 -->
  <div class="col-md-4">
    <div class="card">
      <img src="../img/cachorroquente.jpeg" class="card-img-top" alt="Imagem do produto">
      <div class="card-body">
        <h5 class="card-title">Cachorro Quente</h5>
        <div class="mb-3 row">
          <div class="col-6">
          <label for="price1" class="form-label">Preço</label>
          <div class="input-group">
            <span class="input-group-text">R$</span>
            <input type="number" class="form-control" id="price1" value="15.00" disabled>
          </div>
          </div>
          <div class="col-6">
            <label for="quantity1" class="form-label">Quantidade</label>
            <input type="number" class="form-control" id="quantity1" value="1">
          </div>
        </div>
        <div class="mb-3">
          <label for="observations1" class="form-label">Observações</label>
          <textarea class="form-control" id="observations1" rows="1"></textarea>
        </div>
        <button class="btn btn-primary">Adicionar ao Carrinho</button>
      </div>
    </div>
  </div>

  <!-- Card 3 -->
  <div class="col-md-4">
    <div class="card">
      <img src="../img/batatasimplescopia.jpg" class="card-img-top" alt="Imagem do produto">
      <div class="card-body">
        <h5 class="card-title">Batata Simples</h5>
        <div class="mb-3 row">
          <div class="col-6">
          <label for="price1" class="form-label">Preço</label>
          <div class="input-group">
            <span class="input-group-text">R$</span>
            <input type="number" class="form-control" id="price1" value="20.00" disabled>
          </div>
          </div>
          <div class="col-6">
            <label for="quantity1" class="form-label">Quantidade</label>
            <input type="number" class="form-control" id="quantity1" value="1">
          </div>
        </div>
        <div class="mb-3">
          <label for="observations1" class="form-label">Observações</label>
          <textarea class="form-control" id="observations1" rows="1"></textarea>
        </div>
        <button class="btn btn-primary">Adicionar ao Carrinho</button>
      </div>
    </div>
  </div>

  <!-- Card 5 -->
  <div class="col-md-4">
    <div class="card">
      <img src="../img/cheddarebaconcopia.png" class="card-img-top" alt="Imagem do produto">
      <div class="card-body">
        <h5 class="card-title">Batata com Cheddar e Bacon</h5>
        <div class="mb-3 row">
          <div class="col-6">
          <label for="price1" class="form-label">Preço</label>
          <div class="input-group">
            <span class="input-group-text">R$</span>
            <input type="number" class="form-control" id="price1" value="25.00" disabled>
          </div>
          </div>
          <div class="col-6">
            <label for="quantity1" class="form-label">Quantidade</label>
            <input type="number" class="form-control" id="quantity1" value="1">
          </div>
        </div>
        <div class="mb-3">
          <label for="observations1" class="form-label">Observações</label>
          <textarea class="form-control" id="observations1" rows="1"></textarea>
        </div>
        <button class="btn btn-primary">Adicionar ao Carrinho</button>
      </div>
    </div>
  </div>

  <!-- Card 5 -->
  <div class="col-md-4">
    <div class="card">
      <img src="../img/macadoamor.jpeg" class="card-img-top" alt="Imagem do produto">
      <div class="card-body">
        <h5 class="card-title">Maçã do Amor</h5>
        <div class="mb-3 row">
          <div class="col-6">
          <label for="price1" class="form-label">Preço</label>
          <div class="input-group">
            <span class="input-group-text">R$</span>
            <input type="number" class="form-control" id="price1" value="10.00" disabled>
          </div>
          </div>
          <div class="col-6">
            <label for="quantity1" class="form-label">Quantidade</label>
            <input type="number" class="form-control" id="quantity1" value="1">
          </div>
        </div>
        <div class="mb-3">
          <label for="observations1" class="form-label">Observações</label>
          <textarea class="form-control" id="observations1" rows="1"></textarea>
        </div>
        <button class="btn btn-primary">Adicionar ao Carrinho</button>
      </div>
    </div>
  </div>
  
  <!-- Card 6 -->
  <div class="col-md-4">
    <div class="card">
      <img src="../img/onigiri.jpg" class="card-img-top" alt="Imagem do produto">
      <div class="card-body">
        <h5 class="card-title">Onigiri</h5>
        <div class="mb-3 row">
          <div class="col-6">
          <label for="price1" class="form-label">Preço</label>
          <div class="input-group">
            <span class="input-group-text">R$</span>
            <input type="number" class="form-control" id="price1" value="13.00" disabled>
          </div>
          </div>
          <div class="col-6">
            <label for="quantity1" class="form-label">Quantidade</label>
            <input type="number" class="form-control" id="quantity1" value="1">
          </div>
        </div>
        <div class="mb-3">
          <label for="observations1" class="form-label">Observações</label>
          <textarea class="form-control" id="observations1" rows="1"></textarea>
        </div>
        <button class="btn btn-primary">Adicionar ao Carrinho</button>
      </div>
    </div>
  </div>
  
  <!-- Card 6 -->
  <div class="col-md-4">
    <div class="card">
      <img src="../img/hotroll.webp" class="card-img-top" alt="Imagem do produto">
      <div class="card-body">
        <h5 class="card-title">Hot Roll (7 Unidades)</h5>
        <div class="mb-3 row">
          <div class="col-6">
          <label for="price1" class="form-label">Preço</label>
          <div class="input-group">
            <span class="input-group-text">R$</span>
            <input type="number" class="form-control" id="price1" value="20.00" disabled>
          </div>
          </div>
          <div class="col-6">
            <label for="quantity1" class="form-label">Quantidade</label>
            <input type="number" class="form-control" id="quantity1" value="1">
          </div>
        </div>
        <div class="mb-3">
          <label for="observations1" class="form-label">Observações</label>
          <textarea class="form-control" id="observations1" rows="1"></textarea>
        </div>
        <button class="btn btn-primary">Adicionar ao Carrinho</button>
      </div>
    </div>
  </div>

  <!-- Card 7 -->
  <div class="col-md-4">
    <div class="card">
      <img src="../img/refrigerante.jpg" class="card-img-top" alt="Imagem do produto">
      <div class="card-body">
        <h5 class="card-title">Refrigerante Lata</h5>
        <div class="mb-3 row">
          <div class="col-6">
          <label for="price1" class="form-label">Preço</label>
          <div class="input-group">
            <span class="input-group-text">R$</span>
            <input type="number" class="form-control" id="price1" value="6.00" disabled>
          </div>
          </div>
          <div class="col-6">
            <label for="quantity1" class="form-label">Quantidade</label>
            <input type="number" class="form-control" id="quantity1" value="1">
          </div>
        </div>
        <div class="mb-3">
          <label for="observations1" class="form-label">Observações</label>
          <textarea class="form-control" id="observations1" rows="1"></textarea>
        </div>
        <button class="btn btn-primary">Adicionar ao Carrinho</button>
      </div>
    </div>
  </div>
  
  <!-- Card 7 -->
  <div class="col-md-4">
    <div class="card">
      <img src="../img/agua.webp" class="card-img-top" alt="Imagem do produto">
      <div class="card-body">
        <h5 class="card-title">Água 500ml</h5>
        <div class="mb-3 row">
          <div class="col-6">
          <label for="price1" class="form-label">Preço</label>
          <div class="input-group">
            <span class="input-group-text">R$</span>
            <input type="number" class="form-control" id="price1" value="4.00" disabled>
          </div>
          </div>
          <div class="col-6">
            <label for="quantity1" class="form-label">Quantidade</label>
            <input type="number" class="form-control" id="quantity1" value="1">
          </div>
        </div>
        <div class="mb-3">
          <label for="observations1" class="form-label">Observações</label>
          <textarea class="form-control" id="observations1" rows="1"></textarea>
        </div>
        <button class="btn btn-primary">Adicionar ao Carrinho</button>
      </div>
    </div>
  </div>

    

    <!-- Toast Container (adicione no footer.html ou logo após o body) -->
<div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div id="pedidoToast" class="toast align-items-center text-white bg-success border-0" role="alert" data-bs-delay="2000">
    <div class="d-flex">
      <div class="toast-body">
        Pedido adicionado com sucesso!
      </div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
    </div>
  </div>
</div>

<script>
  const botoes = document.querySelectorAll(".btn");
  botoes.forEach(btn => {
    btn.addEventListener("click", () => {
      const toast = new bootstrap.Toast(document.getElementById("pedidoToast"));
      toast.show();
    });
  });
</script>


<?php
  include "partials/footer.html";
?>
