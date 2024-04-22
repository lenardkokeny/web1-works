<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 my-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/web1-works/lab-07">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/web1-works/lab-07/admin.php">Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/web1-works/lab-07/login.php">Login</a>
        </li>
      </ul>
     

      <?php if(isset($_SESSION['isloggedin']) && $_SESSION['isloggedin'] === true){ ?>
        <span>Belépve: <?php echo $_SESSION['email']; ?></span>
        <a href="logout.php" class="btn btn-warning ml-3">
          logout
        </a>
      <?php } ?>
    </div>
  </div>
</nav>