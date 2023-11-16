<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    include("banco_dados_conexao.php");
    try {
        $stmt = $dbh->prepare("INSERT INTO post (titulo, texto) VALUES (?,?);");
        $stmt->bindParam( 1, $_POST["titulo"] );
        $stmt->bindParam( 2, $_POST["body"] );
        if($stmt->execute()) {
            echo "Dado cadastrado com sucesso!";
        }
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage();
        die();
    }
?>

<br><br>

    
<br><br><a href="index.php">Voltar</a>

</body>
</html>