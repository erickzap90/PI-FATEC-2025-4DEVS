<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<nav class="navbar navbar-expand-lg navbar-doceria">
  <div class="container-fluid">
    <a class="navbar-brand text-logo d-flex align-items-center" href="/PI-FATEC-2025-4DEVS/views/index.php">
      DaluDoces
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link nav-doceria-link" href="/PI-FATEC-2025-4DEVS/views/new.php">Cadastrar</a>
        </li>

        <?php if (isset($_SESSION['tipo_usuario']) && $_SESSION['tipo_usuario'] === 'admin'): ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle nav-doceria-link" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Admin
          </a>
          <ul class="dropdown-menu dropdown-doceria">
            <li><a class="dropdown-item" href="/PI-FATEC-2025-4DEVS/views/admin/pedidos.php">Pedidos</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/PI-FATEC-2025-4DEVS/views/admin/dashboard.php">Dashboard</a></li>
          </ul>
        </li>
        <?php endif; ?>

        <li class="nav-item">
          <a class="nav-link nav-doceria-link" href="/PI-FATEC-2025-4DEVS/views/admin/pedidosCozinha.php">Cozinha</a>
        </li>
      </ul>

      <div class="d-flex align-items-center">
        <?php if (isset($_SESSION['tipo_usuario'])): ?>
          <span class="me-3 fw-semibold text-dark">Bem-vindo, <?= htmlspecialchars(ucwords($_SESSION['tipo_usuario'])) ?></span>
          <a href="/PI-FATEC-2025-4DEVS/views/admin/logout.php" class="btn btn-carrinho me-2">Sair</a>
        <?php else: ?>
          <a href="/PI-FATEC-2025-4DEVS/views/admin/login.php" class="btn btn-login me-2" role="button">Login</a>
        <?php endif; ?>
        <a href="/PI-FATEC-2025-4DEVS/views/carrinho.php" class="btn btn-carrinho" role="button">Novo Pedido</a>
      </div>
    </div>
  </div>
</nav>
