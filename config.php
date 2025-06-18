<?php
// URL base do seu site online
define("BASE_URL", "https://aula1.free.nf");

// Caminho raiz no servidor (usado para includes e requires)
define("ROOT_PATH", __DIR__);

// Inicia a sessão caso ainda não esteja iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Define o fuso horário padrão
date_default_timezone_set('America/Sao_Paulo');
