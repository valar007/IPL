<?php
    require 'header.php';
?>

<div class="main-container">
  <button onclick="document.getElementById('id01').style.display='block'" style="width:100%; margin: 5% auto 5% auto;">Login</button>

  <div id="id01" class="modal">
    
    <form class="modal-content animate" action="#">

      <div class="container">
        <label for="uname"><b>Email ID</b></label>
        <input type="text" placeholder="Enter Email ID" name="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
          
        <button type="submit">Login</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </div>

      <div class="container" style="background-color:#000000">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <span class="psw"><a href="#" style="color: white; text-decoration: none;">Forgot password?</a></span>
      </div>
    </form>
  </div>
  <br>
  <button onclick="document.getElementById('id02').style.display='block'" style="width:100%; margin: 5% auto 5% auto;">Register</button>
  <div id="id02" class="modal">
    
    <form class="modal-content animate" action="#">
      <div class="container">
        <label for="uname"><b>Email ID</b></label>
        <input type="text" placeholder="Enter Email ID" name="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
        <label for="psw"><b>Re-type Password</b></label>
        <input type="password" placeholder="Enter Password" name="repsw" required>
          
        <button type="submit">Register</button>
        <label>
          <input type="checkbox" name="checked"> Accept Terms & Conditions
        </label>
      </div>

      <div class="container" style="background-color:#000000">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      </div>
    </form>
  </div>
</div>


<script>

</script>