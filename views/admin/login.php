<?php
    include "../partials/header.html";
    include "../partials/navbar.html";
?>

<div class="mt-5">
    <form class="login-form p-4 border rounded shadow-sm" method="POST" action="index.php">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Funcionário</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="senha" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Conectar-se</button>
    </form>
</div>

<?php
include "../partials/footer.html";
?>


