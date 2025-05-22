<?php
    include "../partials/header.html";
    include "../partials/navbar.html";
?>
<style>
        .login-form {
        background-color: #ffffff; /* Branco */
        border: 1px solid #ced4da; /* Borda padrão */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Sombra suave */
        border-radius: 5px; /* Bordas arredondadas */
        max-width: 400px; /* Limita a largura */
        margin: auto; /* Centraliza */
        padding: 20px; /* Espaçamento interno */
    }
</style>

<div class="container mt-5">
    <form class="login-form p-4 border rounded shadow-sm" method="POST" action="index.php">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Funcionário</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="senha" required>
        </div>
        <p class="text-center">
            <a class="link-signup" href="new.php">Não possui uma conta? Cadastre-se</a>
        </p>
        <p class="text-center">
            <a class="link-signup" href="esqueci_senha.php">Esqueceu Sua Senha?</a>
        </p>

        <button type="submit" class="btn btn-primary w-100">Conectar-se</button>
    </form>
</div>



<?php
include "../partials/footer.html";
?>


