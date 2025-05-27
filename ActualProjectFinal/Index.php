<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagens/Icone-Pagina.png" type="image/x-icon">
    <title>Página Inicial - Pokédex Wiki</title>
    <style>
        body {
            background: url('imagens/Background-PaginaPrincipal.png') no-repeat center center fixed;
            background-size: cover;
        }
    </style>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="main-header">
        <div class="header-content">
            <h1 class="site-title">BEM-VINDO À POKÉWIKI</h1>
            </div>
    </header>

    <main class="main-content">
        <?php 
            include_once("Classes.php");
            if (empty($_SERVER['QUERY_STRING'])) {
                // Se a URL não tiver query string, exibe a página principal.
                // O include_once("index.php") aqui não faz sentido, pois já estamos em index.php.
                // Provavelmente você quer exibir algo como uma mensagem de boas-vindas inicial,
                // ou simplesmente aguardar o clique no botão para "ListarPokemons".
                // Deixei o código original, mas é algo a ser revisado.
                $var = "index.php"; // Isso causará um loop se não for tratado corretamente
                // Considerar remover essa linha ou exibir uma mensagem de boas-vindas
                // echo "<p class='welcome-message'>Clique em 'Acessar Catálogo' para ver os Pokémons!</p>";
                // include_once($var); // Remover ou ajustar
            } else {
                $pg = $_GET['pg'];
                if ($pg == "Listarpokemons") {
                    include_once("$pg.php");
                } else {
                    // Tratar outras páginas ou erro
                    echo "<p class='error-message'>Página não encontrada!</p>";
                }
            }
        ?>
        <nav class="main-nav">
            <a href="?pg=Listarpokemons">Acessar Catálogo</a>
        </nav>
    </main>

</body>
</html>