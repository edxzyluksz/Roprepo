<?php

// .env -> Mantém informações sensíveis seguras (sem push no GitHub)
function loadEnv(string $path): bool {
    if (!file_exists($path)) {
        return false;
    }

    // Lê o arquivo em um array, ignorando quebras de linha e linhas vazias
    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $line) {
        // Ignora linhas de comentários que começam com '#'
        if (strpos(trim($line), '#') === 0) {
            continue;
        }

        // Divide a linha em nome e valor no primeiro '=' que encontrar
        list($name, $value) = explode('=', $line, 2);

        // Salva a chave e o valor limpos dentro da superglobal $_ENV
        $_ENV[trim($name)] = trim($value);
    }

    return true;
}

// Executa o carregamento apontando para a raiz (fora da pasta public)
loadEnv(__DIR__ . '/../.env');

session_start();

define('ROOT', realpath(__DIR__ . '/../'));
define('INCLUDES', ROOT . '/includes');
define('BACKEND', ROOT . '/backend');

// Conexão com o Banco de Dados
require_once BACKEND . '/config/database.php';


// Ajax do Login
$action = $_GET['action'] ?? '';

if ($action === 'login' || $action === 'register') {
    // Esse arquivo processa o banco e encerra com exit devolvendo um JSON
    require_once BACKEND . '/auth.php'; 
    exit; 
}


// Barreira de segurança
// if (!isset($_SESSION["user_logged"])) {
//     // Se não estiver logado, exibe a tela de login/registro e para o script
//     require_once 'login.html'; 
//     exit; 
// }


// Roteador GET
$page = $_GET['page'] ?? 'home';
$username = $_SESSION["username"] ?? 'Profile';

// Mapa de páginas do sistema c/ Nome para title
$routes = [
    'home'    => [__DIR__ . '/app/main/home.php', 'Home'],
    'profile' => [__DIR__ . '/app/main/profile.php', $username],
    'catalog' => [__DIR__ . '/app/main/catalog.php', 'Marketplace'],
    'plus' => [__DIR__ . '/app/main/plus.php', 'Plus'],
    'robux' => [__DIR__ . '/app/main/robux.php', 'Robux'],
    'charts'  => [__DIR__ . '/app/main/charts.php', 'Charts'],
];

// Se a página digitada na URL não existir no mapa, renderiza o 404.php
if (!array_key_exists($page, $routes)) {
    http_response_code(404);
    require_once __DIR__ . '/404.php';
    exit;
}

// Extrai o conteúdo da página desejada
$component = $routes[$page][0];
$pageName = $routes[$page][1];

require_once INCLUDES . '/head.php'; 
require_once INCLUDES . '/header.php';
require_once $component;
require_once INCLUDES . '/footer.php';