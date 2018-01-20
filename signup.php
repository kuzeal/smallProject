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
        <a class="navbar-brand" href="#">Contact Manager</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link " href="index.php">Home</a>
            <a class="nav-item nav-link" href="login.php">Log In</a>
            <a class="nav-item nav-link" href="logout.php">Log Out</a>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Manage Contacts
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="addcontact.php">Add Contact</a>
                <a class="dropdown-item" href="#">Search Contacts</a>
                <a class="dropdown-item" href="#">Delete Contacts</a>
              </div>
            </li>
          </div>
        </div>
      </nav>


      <div class="jumbotron jumbotron-fluid">
        <div class="container">

          <form>
            <div class="form-row">
              <div class="form-group col-md-5">
                <label for="inputUsername">Username</label>
                <input type="text" class="form-control" id="iputUsername" placeholder="">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-5">
                <label for="inputFirstName">First Name</label>
                <input type="text" class="form-control" id="inputFirstName" placeholder="First Name">
              </div>
              <div class="form-group col-md-5">
                <label for="inputLasttName">Last Name</label>
                <input type="text" class="form-control" id="inputLastName" placeholder="Last Name">
              </div>
              <div class="form-group col-md-5">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
              </div>
              <div class="form-group col-md-5">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-5">
                <label for="inputCity">Phone Number</label>
                <input type="text" class="form-control" id="inputPhoneNum" placeholder="">
              </div>

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>


          <br>
          <p class="font-weight-normal">Already a member? Log in <a href="login.php"><u>here.</u></a></p>

        </div>
      </div>




    </body>

  </html>
