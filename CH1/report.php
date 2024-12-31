<!DOCTYPE html>
<html lang="pt-BR"></html></html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Fui Abduzido por Alienígenas - Relatar uma Abdução</title>
</head>
    <body>
        <h1>Fui Abduzido por Alienígenas - Relatar uma Abdução</h1>
        <?php
            $nome = $_POST["nome"];
            $sobrenome = $_POST["sobrenome"];
            $quandoaconteceu = $_POST["quandoaconteceu"];
            $quantotempo = $_POST["quantotempo"];
            $quantos = $_POST["quantos"];
            $descricaodosaliens = $_POST["descricaodosaliens"];
            $oqueelesfizeram = $_POST["oqueelesfizeram"];
            $viumeucachorro = $_POST["viumeucachorro"];
            $outraobservacao = $_POST["outraobservacao"];

            echo "<p>Olá, " . htmlspecialchars($nome) . " " . htmlspecialchars($sobrenome) . ". Você relatou que foi abduzido em " . htmlspecialchars($quandoaconteceu) . " e ficou desaparecido por " . htmlspecialchars($quantotempo) . ".</p>";
            echo "<p>Você mencionou que estava com mais " . htmlspecialchars($quantos) . " pessoas e descreveu os alienígenas como: " . htmlspecialchars($descricaodosaliens) . ".</p>";
            echo "<p>Os alienígenas " . htmlspecialchars($oqueelesfizeram) . " com você e, felizmente, você " . htmlspecialchars($viumeucachorro) . " viu seu cachorro.</p>";
            echo "<p>Outras observações: " . htmlspecialchars($outraobservacao) . "</p>";
        ?>
        <footer>
            <p>&copy; <?php echo date("Y"); ?> LamonSantos. Todos os direitos reservados.</p>
        </footer>
    </body>
</html>