<?php
include 'connect1.php';

?>     
<html>


<head>
	
    <link rel="stylesheet" href="../css/footer.css">
    	<script src="../js/js.js"> </script>
    <title>Sussex Examination</title>
    <link rel="stylesheet" href="../css/Display.css">
	<link rel="stylesheet" href="../css/css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>


    
    <section>
         <div class = "header">
		   SUSSEX BANK EXAMINATION 
			</div>
        <div class="navbar">

                <div class="logo">
                    <img src="src/img2.png">
                </div>
    
                <div class="navlinks">
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">EXAMINATION</a></li>
                        <li><a href="#">RESOURSES</a></li>
                        <li><a href="#">ABOUT US</a></li>
                        <li ><a href="#">SUPPORT</a></li>
                        <li ><input type="text" class = "sea" placeholder="Search.."><li>
                            <div class="login-cont">
                                <form action="/action_page.php">
                                 
                                  <button type="submit" class ="btu1" >Login</button>
                                  <button type ="submit" class ="btu1">SignUp</button>
                                </form>
                              </div>
                        </ul>
                </div>

              

        </div>
		 
	
		
		
            <div class ="display">
                <div id = "clock" > 8:10:12</div>
                </div>
   
                
    </section>
    <body>


        <div class="content1">
            <table class="table1">
              
                <tr>
                  <th scope="col">Admin ID</th>
                  <th scope="col">Admin Name</th>
                  <th scope="col">Admin Type</th>
                  <th scope="col">Admin Email</th>
                  <th scope="col">Login Username</th>
                  <th scope="col">Option</th>
                </tr>
              
              <tbody>
             
               <?php
            
               $sql="Select * from administrator";
               $result=mysqli_query($con,$sql);
               if($result){
                  while($row=mysqli_fetch_assoc($result))
                  {
                    //login_username, login_password, login_email, account_type
                      $admin_ID=$row['admin_ID'];
                      $admin_name=$row['admin_name'];
                      $admin_type=$row['admin_type'];
                      $admin_email=$row['admin_email'];
                      $login_username=$row['login_username'];
                     
            
                      echo '<tr>
                      <td>'.$admin_ID.'</td>
                      <td>'.$admin_name.'</td>
                      <td>'.$admin_type.'</td>
                      <td>'.$admin_email.'</td> 
                      <td>'.$login_username.'</td> 
                      <td>
                      <button class ="btn btn-primary"><a href = "AdminUpdate.php? Updateid='.$admin_ID.'" style="color:Black">Update</a></button>
                      <button class ="btn btn-danger"><a href = "AdminDelete.php? deleteid='.$admin_ID.'" style="color:Black">Delete</a></button>


                     </td>
                      </tr>';
                  }
                   
            
            
               }
            
            
            
            ?>
            
            
              </tbody>
            </table>
            </div>
            
   
    </body>
               

	
	
 <section>
    <footer>
	    <div class="container">
			<div class="sec quickLinks">
			    <h2>Quick Links</h2>
			    <ul>
				<li><a href='#'>About Us</a></li>
			     <li><a href='#'>Contact Us</a></li>
				 <li><a href='#'>FAQ</a></li>
				 <li><a href='#'>Privacy Policy</a></li>
				 <li><a href='#'>Help & Support </a></li>
				 <li><a href='#'>Terms & Conditions</a></li>
				</ul>
			</div>	
			<div class="sec contact">
			   <h2>Contact Info</h2>
			   <ul class="info">
			       <li>
				         <span> <i class="fa-solid fa-location-dot"></i></span>
						 <span>57, Highlevel Road<br>
							Kirulapona,Colombo 06,<br>Sri Lanka</span>
				   </li>
				   <li>
				         <span><i class="fa-solid fa-envelope"></i></span>
						 <p><a href="mailto:sussexbankexam@gmail.com">sussexbankexam@gmail.com</a></p>
				   </li>
			        <li>
				         <span><i class="fa-solid fa-phone"></i></span>
						 <p><a href="tel:12345678900">+94 77 576 7654</a><br>
						 <a href="tel:12345678900">+94 77 443 9800</a>
						 </P>
				   </li>
				</ul>
			</div>
			
			<div class="wrapper">
             <div id="calendari"></div>
		     </div>
			
			

			 <div class="sec followuson">
			    <h2>Follow Us On</h2>
				<ul class="sci">
			    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
				<li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
				<li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
			    </ul>
			</div>
			
			<div class="mapouter">
			    <div class="gmap_canvas">
				<iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=372&amp;height=335&amp;hl=en&amp;q=57, Highlevel Road Kirulapona, Colombo 06. Sri Lanka&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
				<a href="https://mcpepro.com/">MCPE</a>
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
</section>

<script src="js/js.js"></script>
</html>


