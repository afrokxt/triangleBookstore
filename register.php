<?php 
//Connect database
//Set cookie
//Set session
?>
<!--
TODO:

- Replace Header text with logo
- add action to forms
- Add link to Home page
-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/main.css" />
    <link rel="stylesheet" href="includes/bootstrap/css/bootstrap.css" />
    <title>Register | Bookstore</title>
  </head>
  <body>
    <header class="container titleSection">
      <h1 class="title">Triangle Bookstore</h1>
    </header>
    <section class="container formContainer">
      <form method="POST" id="registerForm" class="formRegister">
        <!--FIRST NAME & LAST NAME-->
        <input
          name="firstName"
          id="firstName"
          class="formInput"
          type="text"
          placeholder="First Name e.g Bart"
          required
        />
        <br />
        <input
          name="lastName"
          id="lastName"
          class="formInput"
          type="text"
          placeholder="Last Name e.g Simpson"
        />
        <br />
        <!--EMAIL-->
        <input
          name="email"
          id="email"
          class="formInput"
          type="email"
          placeholder="Email e.g BartSimpson@gmail.com"
        />
        <br />
        <!--USERNAME-->
        <input
          name="username"
          id="username"
          class="formInput"
          type="text"
          placeholder="Username e.g BartyBoy1"
        />
        <br />

        <!--AGE-->
        <input
          name="DOB"
          id="DOB"
          class="formInput"
          type="date"
          placeholder="Age"
        />
        <br />

        <!--PASSWORD-->
        <input
          name="pwd"
          id="pwd"
          class="formInput"
          type="password"
          placeholder="Password 6+ charcters, at least; 1 capital letter, 1 lowercase letter, 1 number"
        />
        <br />

        <!--CONFIRM PASSWORD-->
        <input
          name="confirmPwd"
          id="confirmPwd"
          class="formInput"
          type="password"
          placeholder="Confirm Password"
        />
        <br />
        <!--GENDER optional-->
        <select name="gender" id="gender" class="select">
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
        <!--SECURITY QUESTIONS-->
        <select name="sQuestion" id="sQuestion" class="select">
          <option value="0" selected>Security Question</option>
          <option value="1">What is your mother's maiden name?</option>
          <option value="2">Who was your childhood bestfriend?</option>
          <option value="3">What middle school did you go to?</option>
          <option value="4">Favorite sports team?</option>
        </select>
        <textarea
          class="formInput"
          name="sAnswer"
          id="sAnswer"
          cols="30"
          rows="1"
          placeholder="Security Answer"
        ></textarea>
        <!--EMAIL CHECKBOX-->
        <input type="checkbox" name="newsletter" id="newsletter" />
        <label for="newsletter">Receive deals and announcements?</label>
        <!--FORGOT PASSWORD-->
        <div class="container formLinkContainer">
          <a class="formLink" href="#">Privacy policy</a>
          <a class="formLink" href="login.php">Sign-in instead</a>
        </div>

        <!--SUBMIT BUTTON-->
        <button
          name="registerBtn"
          id="registerBtn"
          class="formButton"
          type="submit"
        >
          Register
        </button>
      </form>
    </section>
  </body>
</html>
