<?php
  include "partials/header.html";
  include "partials/navbar.html";
?>
    <!-- Container for cards -->
    <div class="container my-5">
      <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4">
          <div class="card">
            <img src="https://www.sabornamesa.com.br/media/k2/items/cache/7a0c9d8bd9eadf879f0011817e8c2396_XL.jpg" class="card-img-top" alt="Imagem do produto">
            <div class="card-body">
              <h5 class="card-title">Nome do Produto</h5>
              <div class="mb-3 row">
                <div class="col-6">
                  <label for="price1" class="form-label">Preço</label>
                  <input type="number" class="form-control" id="price1" value="10.00">
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
        
        <!-- Card 2 -->
        <div class="col-md-4">
          <div class="card">
            <img src="https://www.sabornamesa.com.br/media/k2/items/cache/7a0c9d8bd9eadf879f0011817e8c2396_XL.jpg" class="card-img-top" alt="Imagem do produto">
            <div class="card-body">
              <h5 class="card-title">Nome do Produto</h5>
              <div class="mb-3 row">
                <div class="col-6">
                  <label for="price2" class="form-label">Preço</label>
                  <input type="number" class="form-control" id="price2" value="12.00">
                </div>
                <div class="col-6">
                  <label for="quantity2" class="form-label">Quantidade</label>
                  <input type="number" class="form-control" id="quantity2" value="1">
                </div>
              </div>
              <div class="mb-3">
                <label for="observations2" class="form-label">Observações</label>
                <textarea class="form-control" id="observations2" rows="1"></textarea>
              </div>
              <button class="btn btn-primary">Adicionar ao Carrinho</button>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4">
          <div class="card">
            <img src="https://www.sabornamesa.com.br/media/k2/items/cache/7a0c9d8bd9eadf879f0011817e8c2396_XL.jpg" class="card-img-top" alt="Imagem do produto">
            <div class="card-body">
              <h5 class="card-title">Nome do Produto</h5>
              <div class="mb-3 row">
                <div class="col-6">
                  <label for="price3" class="form-label">Preço</label>
                  <input type="number" class="form-control" id="price3" value="15.00">
                </div>
                <div class="col-6">
                  <label for="quantity3" class="form-label">Quantidade</label>
                  <input type="number" class="form-control" id="quantity3" value="1">
                </div>
              </div>
              <div class="mb-3">
                <label for="observations3" class="form-label">Observações</label>
                <textarea class="form-control" id="observations3" rows="1"></textarea>
              </div>
              <button class="btn btn-primary">Adicionar ao Carrinho</button>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php
  include "partials/footer.html";
?>
