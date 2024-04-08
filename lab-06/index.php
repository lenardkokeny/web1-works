<?php
    define('DB_NAME', 'pdo');
    define('DB_PASS', 'g3w@[qkBUz.GvOl-');

    $conn = new PDO(
        "mysql:host=localhost;dbname".DB_NAME.";charset=utf8", 
        DB_NAME,
        DB_PASS
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); 

    $sql = "SELECT * FROM pdo.roles";
    $res = $conn->query($sql);
    $roles = [];
    while($record = $res->fetch(PDO::FETCH_ASSOC)){
        array_push($roles, $record);
    }
    $conn=null;

    ?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Roles</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Active</th>
                    <th>Created</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($roles as $key => $row){
                        echo '<tr>';
                        echo "<td>{$row['id']}</td>";
                        echo "<td>{$row['name']}</td>";
                        echo "<td>{$row['active']}</td>";
                        echo "<td>{$row['created_at']}</td>";
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </body>
</html>