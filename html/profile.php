    
<html>


<head>

	
	
	<link rel="stylesheet" href="../css/footer.css">
	<script src="../js/js.js"> </script>
	<title>Sussex Examination</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Registration Form</title>
	<script src="../js/userRegister.js"></script>
	<link rel="stylesheet" type="text/css" href="userRegister.css">
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
				   <li><a href="home.php">HOME</a></li>
				   <li><a href="#">EXAMINATION</a></li>
				   <li><a href="#">RESOURSES</a></li>
				   <li><a href="#">ABOUT US</a></li>
				   <li><a href="#">SUPPORT</a></li>
				</ul>
		   </div>
		   <div class="serach">
			   <input type="text" class = "sea" placeholder="Search..">
		   </div>
		  
		   <div class="login-cont">
			   <ul>
				   <li><button type="submit" class ="btu1" ><a href="#" >LogIn</a></button></li>
				   <li><button type="submit" class ="btu1" ><a href="#">SignUp</a></button></li>
			   </ul>
			</div>
	   </div>
   </div>


	  
<?php
 include 'config.php';
 echo "<script src='../js/checkDelete.js'></script>";
 echo "<link rel='stylesheet' type='text/css' href='../css/profile.css'>";
?>

<?php
	
	session_start();
	

   	if(isset($_SESSION['empId'])) { 

   	

       $username = $_SESSION['empId'];
 

	    	$sql="SELECT * FROM users WHERE login_username=?;";
	    	$stmt=$conn->prepare($sql);
			$stmt->bind_param("s" , $username);
	   	    $stmt->execute();
	        $stmt_result=$stmt->get_result();
		    if($stmt_result->num_rows>0)
		    {

		        while($data=$stmt_result->fetch_assoc())
		        {	echo "<div class='container2'><div class='container'>";

					echo "<form action='editProfile.php'  method='POST'>";
					echo ("<div class='title'> User Profile</div>");
					echo ("<div class='user-details'>");
					
					
		        		
					echo ("<div class='input-box'><span class='details' >First name  </span> " ."<input  type='text' name='firstname' value='". $data['First_Name'] ."'>" ."</div>");
					echo ("<div class='input-box'><span class='details' >Last name  " ."<input  type='text' name='lastname' value='". $data['Last_Name'] ."'>" ."</span></div>");
					echo ("<div class='input-box'><span class='details' >Date of Birth  " ."<input  type='text' name='DOB' value='". $data['DOB'] ."'>" ."</span></div>");
					echo ("<div class='input-box'><span class='details' >Gender  " ."<input  type='text' name='gender' value='". $data['Gender'] ."'>" ."</span></div>");
					echo ("<div class='input-box'><span class='details' >Post  " ."<input  type='text' name='post' value='". $data['job_Role'] ."'>" ."</span></div>");
					echo ("<div class='input-box'><span class='details' >branch  " ."<input type='text' name='branch' value='". $data['branch'] ."'>" ."</span></div></br>");

					
					echo "<div class='button'><center><input type='submit' name='editBtn'  value='Update' >
					<input type='submit' name='editBtn' id='delete' value='Delete' onclick='enableButton()' ></center></div>";
					
					echo "</div>";
					echo "</form>";

					echo "</div></div>";
					
		        }
		    }

		    }
		    elseif (isset($_SESSION['admin'])) {

			    	$username=$_SESSION['admin'];

			    	$sql="SELECT * FROM administrator WHERE login_username=?;";
			    	$stmt=$conn->prepare($sql);
					$stmt->bind_param("s" , $username);
			   	    $stmt->execute();
			        $stmt_result=$stmt->get_result();
				    if($stmt_result->num_rows>0)
				    {
				        while($data=$stmt_result->fetch_assoc())
				        {
							echo "<div class='container2'><div class='container'>";
							echo ("<div class='title'>Admin Profile</div>");
							echo ("<div class='user-details'>");
				            echo ("</br><div class='input-box'><span class='details' >User Name  =  " . $data['login_username'] . "</div></br>");
							echo ("<div class='input-box'><span class='details' >Admin ID  =  ". $data['admin_ID']. "</div></br>");
							echo ("<div class='input-box'><span class='details' >Name  =  " . $data['admin_name'] . "</div></br>");
							echo ("<div class='input-box'><span class='details' >Job Role  =  " . $data['admin_type'] . "</div></br>");
							echo ("<div class='input-box'><span class='details' >Email  =  " . $data['admin_email'] . "</div></br>");

							echo "<div class='button'><center><a href='../kumarn/AdminDU.php'>Edit Profile</a></center></div>";

							echo "</div>";
							echo "</div></div>";


				        }
				    }
		    }
		    elseif(isset($_SESSION["supervisor"])){

		    		$username=$_SESSION["supervisor"];
		    		$sql="SELECT * FROM exam_panel WHERE login_username=?;";
			    	$stmt=$conn->prepare($sql);
					$stmt->bind_param("s" , $username);
			   	    $stmt->execute();
			        $stmt_result=$stmt->get_result();
				    if($stmt_result->num_rows>0)
				    {
				        while($data=$stmt_result->fetch_assoc())
				        {
							echo "<div class='container2'><div class='container'>";
							echo ("<div class='title'>Supervisor Profile</div>");
							echo ("<div class='user-details'>");
				            echo ("<div class='input-box'><span class='details' >User Name = " . $data['login_username'] . "</div></br>");
							echo ("<div class='input-box'><span class='details' >Panel ID = ". $data['panel_ID']. "</div></br>");
							echo ("<div class='input-box'><span class='details' >Name = " . $data['ep_name'] . "</div></br>");
							echo ("<div class='input-box'><span class='details' >Job Role = " . $data['exam_role'] . "</div></br>");
							echo ("<div class='input-box'><span class='details' >Email = " . $data['ep_email'] . "</div></br>");
							echo ("<div class='input-box'><span class='details' >Contact number = " . $data['contact_no'] . "</div></br>");
							echo "</div>";
							echo "</div></div>";
				        }
				    }

		    }
		    else
		    { 
		    
		         echo "session not set";

		        
		    }




    
    mysqli_close($conn);



?>

	


	
	<footer class="footer">
		<div class="containerf">
			<div class="row">
				<div class="footer-col">
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


