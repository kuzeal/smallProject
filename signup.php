<!DOCTYPE html>
  <html>
    <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    </head>

    <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="signup.php">Sign Up</a>
            <a class="nav-item nav-link" href="#">Pricing</a>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown link
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </div>
        </div>
      </nav>

      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <form action="signup.php" method="post">
            <div class="form-group">
              <label for="emailInput">Email address</label>
              <input type="email" class="form-control" id="emailInput" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <label for="passwordInput">Password</label>
            <input type="password" id="passwordInput" class="form-control" aria-describedby="passwordHelpBlock">
            <small id="passwordHelpBlock" class="form-text text-muted">
              Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
            </small>
            <br>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>


          <?php

            if(isset($_POST['signup'])){

              $email = $_POST['emailInput'];
              $password = $_POST['passwordInput'];

              $conn = new PDO("mysql:host=localhost;dbname=website", "root", "");

              $newUser = $conn->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");

              $newUser->bindParam(":email", $email);
              $newUser->bindParam(":password", $password);
              $newUser->execute();
            }

           ?>

          <br>
          <p class="font-weight-normal">Already a member? Log in <a href="">here.</a></p>

        </div>
      </div>


    </body>

  </html>
