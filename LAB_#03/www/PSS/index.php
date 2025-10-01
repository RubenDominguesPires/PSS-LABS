<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8"> <!-- Character encoding UTF-8 -->
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Responsive design on mobile -->
  <title>Bootstrap demo</title>

  <!-- Bootstrap CSS from CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS file -->
  <link rel="stylesheet" href="styles/style.css">
</head>

<body>
  <!-- Full height container, flexbox used to center content both horizontally and vertically -->
  <div class="container min-vh-100 d-flex justify-content-center align-items-center">

    <div>
      <!-- Centered logo -->
      <div class="text-center mb-4">
        <a href="index.php">
          <img src="images/estg_h.png" alt="estglogo" class="img-fluid">
        </a>
      </div>

      <!-- Form with Bootstrap validation -->
      <form class="was-validated" method="post">

        <!-- Username field -->
        <div class="mb-3 text-start">
          <label for="exampleInputUsername" class="form-label">Username</label>
          <input type="text" class="form-control" id="exampleInputUsername" name="username"
            aria-describedby="usernameHelp" placeholder="Example: CarlosJuninho123gamer" required>
          <div id="usernameHelp" class="form-text">We'll never share your username with anyone else.</div>
        </div>

        <!-- Password field -->
        <div class="mb-3 text-start">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary w-auto">Submeter</button>

        <!-- PHP: display submitted values -->
        <?php
        if (isset($_POST['username'])) {
          echo "<br>Submitted username: " . $_POST['username'] . "<br>";
        }
        if (isset($_POST['password'])) {
          echo "Submitted password: " . $_POST['password'] . "<br>";
        }
        ?>
      </form>
    </div>
  </div>

  <!-- Bootstrap JavaScript bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>