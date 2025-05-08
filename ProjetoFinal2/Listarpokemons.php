<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Catálogo de Pokémons</title>
    <link rel="stylesheet" href="rascunho.CSS">
    <style>
        body {
            background-color: #f0f8ff;
            font-family: Arial, sans-serif;
            margin-top: 250px;
            text-align: center;
            padding: 40px 20px;
        }

        h1 {
            color: #003A70;
            margin-bottom: 30px;
        }

        .catalogo-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .pokemon-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 200px;
            transition: transform 0.2s ease-in-out;
        }

        .pokemon-card:hover {
            transform: scale(1.05);
        }

        .pokemon-name {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: #2a75bb;
        }

        .ver-detalhes {
            text-decoration: none;
            background-color: #003A70;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        .ver-detalhes:hover {
            background-color: #002855;
        }
    </style>
</head>
<body>

    <h1>Catálogo de Pokémons</h1>

    <div class="catalogo-container">
        <?php
        include_once("Dados.php");

        foreach ($pokemonsData as $pokemon) {
            echo '<div class="pokemon-card">';
            echo '<div class="pokemon-name">' . $pokemon['Name'] . '</div>';
            echo '<a class="ver-detalhes" href="Catalogo.php?id=' . $pokemon['id'] . '">Ver detalhes</a>';
            echo '</div>';
        }
        ?>
    </div>

</body>
</html>