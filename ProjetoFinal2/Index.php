<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"  content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagens/Icone-Pagina.png" type="image/x-icon">
    <title>Página Inicial - Pokédex Wiki</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            width: 100vw;
            height: 100vh;
            background: url('imagens/Background-PaginaPrincipal.png') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', sans-serif;
            color:rgb(0, 70, 135);
            text-align: center;
        }

        h1 {
            font-size: 3rem;
            margin-bottom: 30px;
            text-shadow: 2px 2px 6px rgba(4, 43, 202, 0.5);
            background-color: rgba(255, 255, 255, 0.7);
            padding: 10px 20px;
            border-radius: 10px;
        }

        nav a {
            text-decoration: none;
            font-size: 1.5rem;
            color: #fff;
            background-color: #003A70;
            padding: 15px 30px;
            border-radius: 8px;
            transition: background-color 0.3s ease;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
        }

        nav a:hover {
            background-color: #002855;
        }
    </style>
</head>
<body>

    <h1>BEM-VINDO À POKÉWIKI</h1>

    <?php 
        include_once("Classes.php");
        if (empty($_SERVER['QUERY_STRING'])) {
            $var = "index.php";
            include_once($var);
        } else {
            $pg = $_GET['pg'];
            if ($pg == "Listarpokemons") {
                include_once("$pg.php");
            }
        }
    ?>
    <nav>
        <a href="?pg=Listarpokemons">Acessar Catálogo</a>
    </nav>
</body>
</html>
