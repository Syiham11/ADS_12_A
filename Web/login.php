<!doctype html>
<php>
<div id="id01" class="modallg">
  <form class="modal-contentlg animatelg" action="/Home.php">
    <div class="imgcontainerlg"> <span onclick="document.getElementById('id01').style.display='none'" class="closelg" title="Close Modal">&times;</span> <img src="img_avatar2.png" alt="Avatar" class="avatarlg"> </div>
    <div class="containerlg">
      <div class="lg">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
        <button id="lgbutton" type="submit">Login</button>
        <label  >
          <input type="checkbox" checked="checked" name="remember" >
          Remember me 
          </label></br>
          <label for="sUp"><b>Doesn't Have Account yet?</b></label>
          <button id="subutton" name="sUp" type="submit">Sign Up</button>
      </div>
    </div>
    <div class="containerlg" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button> 
      <span class="psw">Forgot <a href="#">password?</a></span> </div>
  </form>
</div>
</php>
