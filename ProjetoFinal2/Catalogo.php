<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Pokémon</title>
    <style>
        /* Aqui você coloca o CSS fornecido acima */
        Estilo geral para a página
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(50, 250, 245);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
        }

        h1 {
            font-size: 2.5rem;
            color: #333;
            text-align: center;
            margin-bottom: 2rem;
        }

        .pokemon-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px;
            overflow: hidden;
        }

        .pokemon-name {
            font-size: 2rem;
            color: rgb(80, 120, 150);
            margin-bottom: 10px;
        }

        .pokemon-id {
            font-size: 1rem;
            color: #777;
        }

        .pokemon-attributes,
        .pokemon-powers,
        .pokemon-evolutions {
            font-size: 1rem;
            color: #555;
            margin: 10px 0;
        }

        .pokemon-section-title {
            font-size: 1.2rem;
            color: #333;
            margin-top: 20px;
        }

        .pokemon-attacks {
            list-style-type: none;
            padding-left: 0;
        }

        .pokemon-attacks li {
            font-size: 1rem;
            color: #555;
            margin-bottom: 5px;
        }

        .pokemon-card:hover {
            transform: scale(1.05);
            transition: transform 0.2s ease-in-out;
        }
        
        .Charizard {
            width: 100vw;
            height: 100vh;
            background-image: url(imagens/Charizard.png);
        }

        .Blastoise {
            width: 100vw;
            height: 100vh;
            background-image: url(imagens/Blastoise.png);
        }

        .Pikachu {
            width: 100vw;
            height: 100vh;
            background-image: url(imagens/Pikachu.png);
        }

        .Bulbasaur {
            width: 100vw;
            height: 100vh;
            background-image: url(imagens/Bulbasaur.png);
        }

        .Gengar {
            width: 100vw;
            height: 100vh;
            background-image: url(imagens/Gengar.png);
        }

        .Machamp {
            width: 100vw;
            height: 100vh;
            background-image: url(imagens/Machamp.png);
        }

        .Snorlax {
            width: 100vw;
            height: 100vh;
            background-image: url(imagens/Snorlax.png);
        }

        .Dragonite {
            width: 100vw;
            height: 100vh;
            background-image: url(imagens/Dragonite.png);
        }

        .Eevee {
            width: 100vw;
            height: 100vh;
            background-image: url(imagens/Eevee.png);
        }

        .Mewtwo {
            width: 100vw;
            height: 100vh;
            background-image: url(imagens/Mewtwo.png);
        }

        .Jigglypuff {
            width: 100vw;
            height: 100vh;
            background-image: url(imagens/Jigglypuff.png);
        }

        .Onix {
            width: 100vw;
            height: 100vh;
            background-image: url(imagens/Onix.png);
        }

        .Lapras {
            width: 100vw;
            height: 100vh;
            background-image: url(imagens/Lapras.png);
        }

        .Arcanine {
            width: 100vw;
            height: 100vh;
            background-image: url(imagens/Arcanine.png);
        }

        .Alakazam {
            width: 100vw;
            height: 100vh;
            background-image: url(imagens/Alakazam.png);
        }

        .Scyther {
            width: 100vw;
            height: 100vh;
            background-image: url(imagens/Scyther.png);
        }

        .Electabuzz {
            width: 100vw;
            height: 100vh;
            background-image: url(imagens/Electabuzz.png);
        }

        .Magmar {
            width: 100vw;
            height: 100vh;
            background-image: url(imagens/Magmar.png);
        }

        .Gyarados {
            width: 100vw;
            height: 100vh;
            background-image: url(imagens/Gyarados.png);
        }

        .Ditto {
            width: 100vw;
            height: 100vh;
            background-image: url(imagens/Ditto.png);
        }

        .Kabutops {
            width: 100vw;
            height: 100vh;
            background-image: url(imagens/Kabutops.png);
        }

        .Togekiss {
            width: 100vw;
            height: 100vh;
            background-image: url(imagens/Togekiss.png);
        }

    </style>
</head>
<body>
    <h1>Catálogo de Pokémon</h1>

<?php

    include_once("Classes.php");
    $id = $_REQUEST['id'];
    $pokemon = new Pokemon($id);
    $name = $pokemon->Name;
    echo "<body class = $name>";
    Catalogo::ShowPokemon($pokemon);
    echo "</body>";


















?>


<nav>
    <a class='pokemon-card' href="index.php">Voltar</a>
</nav>

</body>
</html>