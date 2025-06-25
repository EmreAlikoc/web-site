<?php
session_start();
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sallanan Sandalye</title>

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
          <a href="proje.html" id="logokaplama"><img id="logoheader" src="img/logo header 3.png" alt=""></a>  <!--ahşap yakınlaşacak--> 
          <a id="ana" class="hdr" href="#header">Ana Sayfa</a> <!--animasyonlu aşağı geçiş olacak-->
          <a class="hdr" href="sandalyeler_katalog.html">Sandalyeler</a>
          <a class="hdr" href="masalar_katalog.html">Masalar</a>
          <a class="hdr" href="koltuklar_katalog.html">Koltuklar</a>
          <a class="hdr" href="raflar_katalog.html">Raflar</a>
          <a id="hakk" class="hdr" href="proje.html/#hakkımda">Hakkımda</a> 
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



    <div class="uruncontainer">
        <div class="urunsayfasi">
            <div>

              
              <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                  <div class="numbertext">1 / 3</div>
                  <img src="img/salsandalye-1.jpg" style="width:100%">
                  
                </div>
              
                <div class="mySlides fade">
                  <div class="numbertext">2 / 3</div>
                  <img src="img/salsandalye-2.jpg" style="width:100%">
                  
                </div>
              
                <div class="mySlides fade">
                  <div class="numbertext">3 / 4</div>
                  <img src="img/salsandalye3.jpg" style="width:100%">
                
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">4 / 4</div>
                    <img src="img/salsandalye4.jpg" style="width:100%">
                  
                  </div>
              
                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
              </div>
              <br>
              
              <!-- The dots/circles -->
              <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
              </div>
            
              
            </div>

            <div>
                <div>
                    <h1>Ahşap Sallanan Sandalye</h1>
                    <p>Ladin ve sarıçamdan özenle yapılan ahşap sandalyelerimiz. </p>
                </div>
                <div>
                    <a href="#toggle"><button class="sipariş" role="button" id="tıkla">Sipariş İçin Tıkla</button></a>
                </div>
            </div>
    
        </div>
    </div>

    <div id="toggle-container">
      <div id="toggle">
         <h1 id="toggleButton">Sipariş Alanı</h1> 
      </div>
    </div>

    <div id="formdiv" class="collapsed">

    <table>
      <form action="https://formspree.io/omer.karpz@gmail.com" method="post">
        <tr>
          <td>İsim:</td>
          <td><input type="text" name="isim" placeholder="İsim giriniz" required></td>
        </tr>
        <tr>
          <td>Soyisim:</td>
          <td><input type="text" name="soyisim" placeholder="Soyisim giriniz" required></td>
        </tr>
        <tr>
          <td>E Posta:</td>
          <td><input type="email" name="email" placeholder="E posta giriniz" required></td>
        </tr>
        <tr>
          <td>Şehir:</td>
          <td>
            <select name="sehir" required>
              <option value="">Seçiniz</option>	
              <option value="Trabzon">Trabzon</option>
              <option value="Giresun">Giresun</option>
              <option value="Rize">Rize</option>
              <option value="Bayburt">Bayburt</option>
              <option value="Gümüşhane">Gümüşhane</option>
            </select>
          </td>
        </tr>
        <tr>
          <td colspan="2">Size özel üretilecek siparişinizin detaylarını girebilirsiniz:</td>
        </tr>
        <tr>
          <td colspan="2"><textarea name="detaylar" rows="10" cols="20"></textarea></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" value="Gönder"></td>
        </tr>
      </form>
    </table>

    </div>


    <script>
      
  document.getElementById('toggle').onclick = function() {
    var formDiv = document.getElementById('formdiv');
    if (formDiv.classList.contains('collapsed')) {
      formDiv.classList.remove('collapsed');
      formDiv.classList.add('expanded');
    } else {
      formDiv.classList.remove('expanded');
      formDiv.classList.add('collapsed');
    }
  };
  
    </script>

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

  var openModalBtn = document.getElementById("tıkla");
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


    <script>
      let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
  </script>






    <footer>
        <div id="ftmain">
  
            <div class="ft">
              <a href="#"><img id="logofooter" src="img/logo header 3.png" alt=""></a> 
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