<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/main.css" />
    <link rel="stylesheet" href="includes/bootstrap/css/bootstrap.css" />
    <title>Login | Bookstore</title>
</head>
<body>
    <header class="container titleSection">
      <h1 class="title">Triangle Bookstore</h1>
    </header>
    <section class="container formContainer">
      <form method="POST" id="loginForm" class="formRegister">
        <!--USERNAME-->
        <input
          name="userName"
          id="userName"
          class="formInput"
          type="text"
          placeholder="Username"
        />
        <br />
        <!--PASSWORD-->
        <input
          name="pwd"
          id="pwd"
          class="formInput"
          type="password"
          placeholder="Password"
        />
        <br />
        <br />
        <!--FORGOT PASSWORD-->
        <div class="container formLinkContainer">
          <!--PRIVACY POLICY-->
          <a class="formLink" href="#">Forgot Password</a>
          <a class="formLink" href="register.php">Don't have an account?</a>

        </div>
        <!--EMAIL CHECKBOX-->
        <!--SUBMIT BUTTON-->
        <button
          name="loginBtn"
          id="loginBtn"
          class="formButton"
          type="submit"
        >
          Login
        </button>
      </form>
    </section>
</body>
</html>