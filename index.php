<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Everest</title>
    <link rel="stylesheet" href="css/login.css" />
  </head>
  <body>
    <!-- Start of Login -->

    <div id="container">
      <div id="login" class="form-box active">
        <form action="">
          <h2 id="login-h2">Welcome To Everest</h2>
          <input
            class="input-look"
            type="email"
            name="email"
            placeholder="Email"
            required
          />

          <input
            class="input-look"
            type="password"
            name="password"
            placeholder="Password"
            required
          />
          <button class="input-look" id="login-btn" type="submit" name="login">
            Login
          </button>
          <p id="p-register">
            Dont have an account? <a id="a-register" href="#">Register</a>
          </p>
        </form>
      </div>
    </div>

    <!-- End of Login -->
    <!-- Start of Register  -->
    <div id="container">
      <div id="register" class="form-box">
        <form action="">
          <h2 id="login-h2">Register</h2>
          <input
            class="input-look"
            type="text"
            name="user-ame"
            placeholder="User Name"
            required
          />
          <input
            class="input-look"
            type="email"
            name="email"
            placeholder="Email"
            required
          />

          <input
            class="input-look"
            type="password"
            name="password"
            placeholder="Password"
            required
          />
          <button
            class="input-look"
            id="register-btn"
            type="submit"
            name="register"
          >
            Register
          </button>
          <p id="p-login">
            Already Have an account? <a id="a-login" href="#">Login</a>
          </p>
        </form>
      </div>
    </div>

    <!-- End of Register  -->
    <!-- Start Of footing  -->
    <!-- End of Footing -->

    <script src="script.js"></script>
  </body>
</html>
