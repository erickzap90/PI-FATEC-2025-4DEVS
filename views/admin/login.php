<?php
  require_once "../../config.php";
  include ROOT_PATH . "/views/partials/header.php";
  include ROOT_PATH . "/views/partials/navbar.php";


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($email === "adm" && $senha === "adm") {
        $_SESSION['tipo_usuario'] = "admin";
        header("Location: " . BASE_URL . "/index.php");
        exit;
    } elseif ($email === "funcionario" && $senha === "funcionario") {
        $_SESSION['tipo_usuario'] = "funcionario";
        header("Location: " . BASE_URL . "/index.php");
        exit;
    } else {
        $erro = "Credenciais inválidas.";
    }
}
?>

<div class="mt-5">
    <form class="login-form p-4 border rounded shadow-sm" method="POST" action="">
        <h2 class="text-center">Login</h2>
        <?php if (isset($erro)) echo "<p class='text-danger'>$erro</p>"; ?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Funcionário</label>
            <input type="text" class="form-control" name="email" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Senha</label>
            <input type="password" class="form-control" name="senha" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Conectar-se</button>
    </form>
</div>

<?php   include ROOT_PATH . "/views/partials/footer.html";?>
