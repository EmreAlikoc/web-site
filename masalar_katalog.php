<?php
session_start();
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coşkun Akçay Ahşap</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Castoro:ital@0;1&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Castoro:ital@0;1&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="proje.css" />
    <link rel="shortcut icon" href="img/logo favicon.png" type="image/x-icon" />
</head>
<body>
    <header>
        <div id="bas">
          <a href="proje.php" id="logokaplama"><img id="logoheader" src="img/logo header 3.png" alt=""></a>  <!--ahşap yakınlaşacak--> 
          <a id="ana" class="hdr" href="#header">Ana Sayfa</a> <!--animasyonlu aşağı geçiş olacak-->
          <a class="hdr" href="sandalyeler_katalog.php">Sandalyeler</a>
          <a class="hdr" href="masalar_katalog.php">Masalar</a>
          <a class="hdr" href="koltuklar_katalog.php">Koltuklar</a>
          <a class="hdr" href="raflar_katalog.php">Raflar</a>
          <a id="hakk" class="hdr" href="proje.php/#hakkımda">Hakkımda</a> 
          
          <!-- <a href="#" class="hdr" id="btn">Giriş Yap</a> -->
          <?php if (isset($_SESSION['isim'])): ?>
            <a href="#" class="hdr" >  
              <?php echo htmlspecialchars($_SESSION['isim']); ?>
            </a>
            <a href="logout.php" class="hdr" id="btn-cikis" style="margin-left:10px;">Çıkış Yap</a>
          <?php else: ?>
            <a href="#" class="hdr" id="btn">Giriş Yap</a>
          <?php endif; ?>
          

        </div>
    </header>
    
    <div id="selamlar"><h1>Masalar</h1></div>
    

    <div class="fotomenu">
      <div class="fotokutu">
        <div class="image-container">
          <a href="minimal_masa.php"><img src="img/masalar/minimal masalar/minimal-masa-2.jpg" alt="First Image" class="image first"></a>
          <a href="minimal_masa.php"><img src="img/masalar/minimal masalar/minimal-masa-1.jpg" alt="Second Image" class="image second"></a>
      </div>
        <p> Ahşap Minimal Masa</p>
      </div>

        <div class="fotokutu">
          <div class="image-container">
            <a href="düz_masa.php"><img src="img/masalar/düz masalar/düzmasa-2.jpg" alt="First Image" class="image first"></a>
            <a href="düz_masa.php"><img src="img/masalar/düz masalar/düzmasa-1.jpg" alt="Second Image" class="image second"></a>
        </div>
          <p>Ahşap Düz Masa</p>
        </div>

        <div class="fotokutu">
          <div class="image-container">
            <a href="diğer_masa.php"><img src="img/masalar/kütük masalar/diğermasa-1.jpg" alt="First Image" class="image first"></a>
            <a href="diğer_masa.php"><img src="img/masalar/kütük masalar/diğermasa-2.jpg" alt="Second Image" class="image second"></a>
        </div>
          <p>Diğer Ahşap Masalar</p>
        </div>
    </div>


    <div id="authModal" class="modal">
  <div class="close" id="closeModal">&times;</div>
  <div class="ortala" >
  <div class="login-container" id="signIn">
    <h2>Sign In</h2>
    <form id="loginForm">  <!-- action="register.php" method="post" -->
      <input type="email" name="email" id= "email" placeholder="Email" required>
      <input type="password" name="password" id= "password" placeholder="Password" required>
      <input type="submit" name="signIn" value="Sign In"> <!-- name="signIn" olarak düzelttim -->
      <div id="loginError" style="color:red;text-align:center;"></div>
   </form>
    <p>Hesabınız yok mu?</p>
    <input type="button" id="changeUp" value="Sign Up">
</div>
</div>



<div class="ortala" >
<div class="login-container" style="display: none;"  id="signUp">
    <h2>Sign Up</h2>
    <form  action="register.php" method="post">  <!--  -->
      <input type="text" name="username" placeholder="Username" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="submit" name="signUp" value="Sign Up"> <!-- name="signUp" olarak düzelttim -->
   </form>
   <p>Hesabınız var mı?</p>
   <input type="button" id="changeIn" value="Sign In">
</div>
</div>
</div>

<script>
  var authModal = document.getElementById("authModal");

  var openModalBtn = document.getElementById("btn");
  var otherOpenBtn = document.getElementById("btn");
  var closeModalBtn = document.getElementById("closeModal");

  var signInForm = document.getElementById("signIn");
  var signUpForm = document.getElementById("signUp");
  
  var switchToSignUp = document.getElementById("changeUp");
  var switchToSignIn = document.getElementById("changeIn");

openModalBtn.onclick = function() {
  authModal.style.display = "block";
}
otherOpenBtn.onclick = function() {
  authModal.style.display = "block";
}

switchToSignUp.onclick = function() {
  signInForm.style.display = "none";
  signUpForm.style.display = "block";
}
switchToSignIn.onclick = function() {
  signUpForm.style.display = "none";
  signInForm.style.display = "block";
}

closeModalBtn.onclick = function() {
  authModal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == authModal) {
    authModal.style.display = "none";
  }
}
</script>

<script>
  document.getElementById("loginForm").addEventListener("submit", function(e) {
    e.preventDefault();

    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "register.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && xhr.status == 200) {
            if(xhr.responseText.trim() === "success") {
                authModal.style.display = "none";
                location.reload();
            } else {
                document.getElementById("loginError").innerText = xhr.responseText;
            }
        }
    };

    xhr.send("signIn=1&email=" + encodeURIComponent(email) + "&password=" + encodeURIComponent(password));
});

</script>
    <footer>
      <div id="ftmain">

          <div class="ft">
            <a href="proje.php#bas"><img id="logofooter" src="img/logo header 3.png" alt=""></a> 
            <h3>Ahşap Zarafeti</h3>
          </div>
          
          <div class="ft" id="hakkımda">
            <h2>Hakkımda</h2>
            <h3 id="coskunpp"><img src="img/coskunpp.jpg" alt=""></h3>
            <h3>Coşkun Akçay</h3>
            <h3><a href="https://www.instagram.com/coskunakcy.ahsap/" target="_blank"><i class="fa-brands fa-instagram"></i>Instagram</a></h3>
          </div>
          <div class="ft">
            <h2>İletişim</h2>
            <h3>Trabzon</h3>
            <h3>+90 123 456 78 89</h3>
            <h3><a href="mailto:omer.karpz@gmail.com" target="_blank">Email</a></h3>
            
          
          </div>


      </div>
    </footer>



    <script
    src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"
    integrity="sha512-HzAEuXwhLxwm/Jj+5ecdjzrRVrjuh2ZeIxyT1Ln37TO5pWNMnKBuU7cfd1wvRQ/k86w1oC174Yk1T7aRlBpIcA=="
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"
    integrity="sha512-A98SmLRZISk4eIxQBeCm8k0jAcwN3A3lBx4hr7baoMpV1VpxcxlZIhi5fJIZN50sQ5RlCzx8yV+Voy2cR6x0aA=="
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"
    integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ=="
    crossorigin="anonymous"
  ></script>



    <script src="proje.js"></script>
</body>
</html>