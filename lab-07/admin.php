<?php
  require_once('config.php');

  $users = [];

  if($is_logged_in){

    $conn = get_connection();
    $sql= "SELECT * FROM users";
    $result = $conn->query($sql);
    $users = $result->fetchAll(PDO::FETCH_ASSOC);
  }
?>

<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <?php include 'common/nav.php'; ?>

    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1>User Table</h1>
          <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php
                foreach( $users as $key=>$user){
                  echo '<tr>';
                  echo '<td>' . $user['id'] . '</td>';
                  echo '<td>' . $user['name'] . '</td>';
                  echo '<td>' . $user['email'] . '</td>';
                  echo '<td><button class="btn btn-info">edit</button></td>';
                  echo  '</tr>';
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>