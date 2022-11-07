
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nutella®</title>
    <link rel="stylesheet" href="style-login.css" />
    <link rel="stylesheet" href="stylesheet.css" />
  </head>
  <body>
    <header class="header">
      <a href="index.php" class="logo">
        <img src="images/nutella-logo.png" alt="" />
      </a>

      <nav class="navbar">
        <li><a href="index.php"> Home</a></li>
        <li><a href="index.php"> About Us</a></li>
        <li><a href="index.php"> Gallery</a></li>
      </nav>
      <nav class="logreg">
        <li><a href="index.php">Log In </a></li>
      </nav>
    </header>

    <div class="hero">
      <div class="form-box">
        <div class="button-box">
          <div id="btn"></div>
          <button type="button" class="toggle-btn">
            Register
          </button>
          </div>
        <form action="register.php" method="POST" id="register" class="input-group" style="left: 50px;" >
          <input
            type="text"
			      name="username"
            class="input-field"
            placeholder="Enter Username"
            required
          />
          <input
            type="email"
			      name="email"
            class="input-field"
            placeholder="Enter Email Address"
            required
          />
          <input
            type="password"
			      name="password"
            class="input-field"
            placeholder="Enter Password"
            required
          />
          <input type="checkbox" class="check-box" /><span
            >I agree to Terms & Conditions.</span
          >
          <button type="submit" class="submit-btn"  >Register</button>
          
        </form>
      </div>
    </div>
  </body>
</html>