<html>


    <head>

    <style>
        /*slide show style */
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  width : 100%;
  height  100%;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
 /*slide show style */
</style>
      
         
        <link rel="stylesheet" href="../css/footer.css">
        <script src="../js/js.js"> </script>
        <title>Sussex Examination</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
 
    <body>
 
        <div class="header"> 
       
            <div class="containerh1">
    
                <div class="logo">
                    <img src="../images/img2.png">
                </div> 
                <div class="titleh">
                    <H1 class="bank">SUSSEX BANK</H1><H1 class="exm"> EXAMINATION</H1> 
                </div> 
                <div class ="display">
                    <div id = "clock" > 8:10:12</div>
                </div>
           
        </div>
            <div class="containerh2">
                <div class="navlinks">
                    <ul class="navigation">
                        <li><a href="#">HOME</a></li>
                        <li><a href="Examination.php">EXAMINATION</a></li>
                        <li><a href="../IT21215988/Resources.html">RESOURSES</a></li>
                        <li><a href="about.html">ABOUT US</a></li>
                        <li><a href="Feedbackform.php">SUPPORT</a></li>
                     </ul>
                </div>
                <div class="serach">
                    <input type="text" class = "sea" placeholder="Search..">
                </div>
               
                <div class="login-cont">
                    <ul>
					<?php

						session_start();

						if(isset($_SESSION['empId'])||isset($_SESSION['admin'])||isset($_SESSION['supervisor'])) { 
							echo "<li><button type='submit' class ='btu1'><a href=profile.php>Profile</a></button></li>";
							echo "<li><button type='submit' class ='btu1'><a href=logout.php>Logout</a></button></li>";
						}
						else
						{
							echo "<li><button type='submit' class ='btu1'><a href=login.php>login</a></button></li>";
							echo "<li><button type='submit' class ='btu1'><a href=userRegister.php>signup</a></button></li>";
						}

					?>

                    </ul>
                 </div>
            </div>
        </div>
        
      <div>


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="../images/img7.jpg" style="width:100%" height =100%;>
  <div class="text" style = "color : black";>ACCURATE RESULTS</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="../images/img10.jpg" style="width:100%" height = 100%;>
  <div class="text"  style = "color : black";>RESOURCE DATABASE</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="../images/img9.jpg" style="width:100%" height = 100%;>
  <div class="text"  style = "color : black";>TAKE NOTES</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="../images/img15.jpg" style="width:100%" height = 100%;>
  <div class="text" style = "color : black"; > REAL COMPITION </div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="../images/img6.jpg" style="width:100%" height = 100%;>
  <div class="text" style = "color : black"; > STUDY ONLINE </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="../images/img12.jpg" style="width:100%" height = 100%;>
  <div class="text"  style = "color : black"; > QUIZ</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="../images/img11.jpg" style="width:100%" height = 100%;>
  <div class="text"  style = "color : black";>MAKE YOUR OWN NOTES</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="../images/img4.jpg" style="width:100%" height = 100%;>
  <div class="text">PROFFESIONAL EXAM PANNEL</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class = "dot"></span>
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class = "dot"></span>
</div>

      </div>

      <script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

        <footer class="footer">
            <div class="containerf">
                <div class="row">
                    <div class="footer-col">
                        <h2>Quick Links</h2>
                        <ul>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href='../kumarn/ContactUS.php'>Contact Us</a></li>
                            <li><a href='faq.html'>FAQ</a></li>
                            <li><a href='#'>Privacy Policy</a></li>
                            <li><a href='#'>Help & Support </a></li>
                            <li><a href='#'>Terms & Conditions</a></li>
                        </ul>

                    </div>
                    <div class="footer-col">
                        <h2>Contact Info</h2>
                        <ul class="info">
                            <li>
                                  <span class="address"> <i class="fa-solid fa-location-dot"></i>
                                   57, Highlevel Road<br>
                                     Kirulapona,Colombo 06,<br>Sri Lanka</span>
                            </li>
                            <li>
                                  
                                  <p><a href="mailto:sussexbankexam@gmail.com"><span><i class="fa-solid fa-envelope"></i></span>sussexbankexam@gmail.com</a></p>
                            </li>
                             <li>
                                  
                                  <a href="tel:12345678900"><i class="fa-solid fa-phone"></i>+94 77 576 7654</a>
                                  <a href="tel:12345678900"><i class="fa-solid fa-phone"></i>+94 77 443 9800</a>
                                  
                            </li>
                         </ul>
                        
                    </div>

                    <div class="footer-col">
                        <h2>Follow Us On</h2>
                        <ul class="sci">
                            <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                    </div>

                    <div class="footer-col1">
                        <div class="calender">
                            <div class="wrapper">
                                <div id="calendari"></div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

       
        <script >
  
            var mesos = [
              'January',
              'February',
              'March',
              'April',
              'May',
              'June',
              'July',
              'August',
              'September',
              'October',
              'November',
              'December'
          ];
          var dies = [
              'Sunday',
              'Monday',
              'Tuesday',
              'Wednesday',
              'Thersday',
              'Friday',
              'Saturday'
          ];
          var dies_abr = [
              'Su',
              'Mo',
              'Tu',
              'We',
              'Th',
              'Fr',
              'Sa'
          ];
          Number.prototype.pad = function(num) {
              var str = '';
              for(var i = 0; i < (num-this.toString().length); i++)
                  str += '0';
              return str += this.toString();
          }
          
          function calendari(widget, data)
          {
              var original = widget.getElementsByClassName('actiu')[0];
              if(typeof original === 'undefined')
              {
                  original = document.createElement('table');
                  original.setAttribute('data-actual',
                            data.getFullYear() + '/' +
                            data.getMonth().pad(2) + '/' +
                            data.getDate().pad(2))
                  widget.appendChild(original);
              }
              var diff = data - new Date(original.getAttribute('data-actual'));
              diff = new Date(diff).getMonth();
              var e = document.createElement('table');
              e.className = diff  === 0 ? 'amagat-esquerra' : 'amagat-dreta';
              e.innerHTML = '';
              widget.appendChild(e);
              e.setAttribute('data-actual',
                             data.getFullYear() + '/' +
                             data.getMonth().pad(2) + '/' +
                             data.getDate().pad(2))
              var fila = document.createElement('tr');
              var titol = document.createElement('th');
              titol.setAttribute('colspan', 7);
              var boto_prev = document.createElement('button');
              boto_prev.className = 'boto-prev';
              boto_prev.innerHTML = '&#9666;';
              var boto_next = document.createElement('button');
              boto_next.className = 'boto-next';
              boto_next.innerHTML = '&#9656;';
              titol.appendChild(boto_prev);
              titol.appendChild(document.createElement('span')).innerHTML = 
                  mesos[data.getMonth()] + '<span class="any">' + data.getFullYear() + '</span>';
              titol.appendChild(boto_next);
              boto_prev.onclick = function() {
                  data.setMonth(data.getMonth() - 1);
                  calendari(widget, data);
              };
              boto_next.onclick = function() {
                  data.setMonth(data.getMonth() + 1);
                  calendari(widget, data);
              };
              fila.appendChild(titol);
              e.appendChild(fila);
              fila = document.createElement('tr');
              for(var i = 1; i < 7; i++)
              {
                  fila.innerHTML += '<th>' + dies_abr[i] + '</th>';
              }
              fila.innerHTML += '<th>' + dies_abr[0] + '</th>';
              e.appendChild(fila);
          
              var inici_mes =
                  new Date(data.getFullYear(), data.getMonth(), -1).getDay();
              var actual = new Date(data.getFullYear(),
                        data.getMonth(),
                        -inici_mes);
              
              for(var s = 0; s < 6; s++)
              {
                  var fila = document.createElement('tr');
                  for(var d = 1; d < 8; d++)
                  {
                  var cela = document.createElement('td');
                  var span = document.createElement('span');
                  cela.appendChild(span);
                      span.innerHTML = actual.getDate();
                      if(actual.getMonth() !== data.getMonth())
                          cela.className = 'fora';
                     
                      if(data.getDate() == actual.getDate() &&
                     data.getMonth() == actual.getMonth())
                  cela.className = 'avui';
                  actual.setDate(actual.getDate()+1);
                      fila.appendChild(cela);
                  }
                  e.appendChild(fila);
              }
              setTimeout(function() {
                  e.className = 'actiu';
                  original.className +=
                  diff === 0 ? ' amagat-dreta' : ' amagat-esquerra';
              }, 20);
              original.className = 'inactiu';
              setTimeout(function() {
                  var inactius = document.getElementsByClassName('inactiu');
                  for(var i = 0; i < inactius.length; i++)
                      widget.removeChild(inactius[i]);
              }, 1000);
          }
          calendari(document.getElementById('calendari'), new Date());
          </script>
        
    </body>
    </html>
    
    
    