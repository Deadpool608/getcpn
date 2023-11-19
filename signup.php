<?php

include('header.php');
require('connect.php');
?>

<head>
  <link href="sign.css" type="text/css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet" />
  </asp:Content>
</head>
<br><br>
<br>
<div class="body">

  <div class="main">
    <div class="container b-container form" id="b-container">

      <form action="signpro.php" method="post">
        <h2 class="form_title title">Create Account</h2>

        <input placeholder="Name" class="form__input" name="name" type="text">
        <input type="number" placeholder="Phone" class="form__input" name="phone">
        <input type="email" class="form__input" placeholder="Email" name="email"></input>
        <input type="password" class="form__input" placeholder="Password" name="pass"></input>

        <Button class="form__button button switch-btn" type='submit' name="signup">SIGN UP</Button>
      </form>

    </div>

    <div class="container a-container form" id="a-container">
      
      <h2 class="form_title title">Log in to Website</h2>
      <form action="logpro.php" method="post">

        <input class="form__input" type="text" placeholder="Email" name="email"></input>
        <input class="form__input" type="password" placeholder="Password" name="pass"></input>
        <br>
        <Button type="submit" class="form__button button switch-btn" name="login">Login</Button>
        <p id="err"></p>

      </form>
    </div>

    <div class="switch" style="background:url('images/custom/signbg.png');" id="switch-cnt">
      <div class="switch__circle"></div>
      <div class="switch__circle switch__circle--t"></div>
      <div class="switch__container" id="switch-c1">
        <h2 class="switch__title title">Hello Friend !!</h2>

        <button type="button" class="switch__button button switch-btn"> GO TO SIGN IN</button>
      </div>
      <div class="switch__container is-hidden" id="switch-c2">
        <h2 class="switch__title title">Welcome back !!</h2>

        <button type="button" class="switch__button button switch-btn">GO TO SIGN UP</button>
      </div>
    </div>


  </div>
</div>
<script src="sign.js"></script>


<?php

include('footer.php');
?>