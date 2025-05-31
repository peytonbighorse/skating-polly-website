<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register/ Login | Skating Polly</title>
</head>
<body>
    <!--Registration Modal-->
    <div id="registration-modal" class="modal">
      <div class="modal-content">
        <div class="registration-container">
          <span class="close close-registration">&times;</span>

          <h2 class="join-us">♥ Join us ♥</h2>

          <form action="../backend/register.php" method="post" class="register">
            <input
              type="text"
              name="username"
              placeholder="Username"
              required
              class="input-field"
            /><br />
            <input
              type="email"
              name="email"
              placeholder="Email"
              required
              class="input-field"
            /><br />
            <input
              type="password"
              name="password"
              placeholder="Password"
              required
              class="input-field"
            /><br />
            <button type="submit">Sign Up</button>
          </form>

        </div>
      </div>
    </div>


    <!--Login Modal-->
    <div id="login-modal" class="modal">
      <div class="modal-content">
        <div class="login-container">
          <span class="close close-login">&times;</span>

          <h2 class="login">♥ Welcome Back ♥</h2>

          <form action="../backend/login.php" method="post" class="login">
            <input
              type="email"
              name="email"
              placeholder="Email"
              required
              class="input-field"
            /><br />
            <input
              type="password"
              name="password"
              placeholder="Password"
              required
              class="input-field"
            /><br />
            <button type="submit">Login</button>
          </form>
        </div>
      </div>
    </div>
</body>
</html>

<!--Quiz Modal-->