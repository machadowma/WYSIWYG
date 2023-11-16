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
            $stmt = $dbh->prepare('SELECT * FROM post WHERE id = ?');
            $stmt->bindParam( 1, $_GET["id"] );
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if(!empty($result)) {
                echo "<h1>".$result[0]["titulo"]."</h1>";
                echo $result[0]["texto"];
            } 
            $dbh = null;
          } catch (PDOException $e) {
            print "Error!: " . $e->getMessage();
            die();
          }
        ?>


    <br><br>
<a href="lista.php">Voltar</a>
    
</body>
</html>