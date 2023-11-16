<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table border=1>
        <tr>
        <th>Id</th>
        <th>Titulo</th>
        <th></th>
        </tr>

    <?php
          include("banco_dados_conexao.php");
          try {
            $sth = $dbh->prepare('SELECT * FROM post');
            $sth->execute();
            $result = $sth->fetchAll(PDO::FETCH_ASSOC);
            if(!empty($result)) {
              foreach($result as $row) {
                echo "<tr>";
                echo "<td>". $row["id"] ."</td>";
                echo "<td>". $row["titulo"] ."</td>";
                echo "<td><a href='post.php?id=".$row["id"]."'>Abrir</a></td>";
                echo "</tr>";
              }
            } 
            $dbh = null;
          } catch (PDOException $e) {
            print "Error!: " . $e->getMessage();
            die();
          }
        ?>

</table>

    <br><br>
<a href="index.php">Voltar</a>
    
</body>
</html>