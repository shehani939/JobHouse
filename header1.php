<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOB HOUSE</title>
</head>
<body>
<!-- ***** Header Area Start ***** -->

<style>
*{
				   margin:0;
padding:1;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
			   }
			   
			   boddy{
				   background:#eaeaea;
			   }
			   
			   .header{
				   position:fixed;
				   top:0;
				   left:0;
				   width:100%;
				   padding:28px 8%;
				   background:#FFFFFF;
				   display:flex;
				   justify-content:space-between;
				   align-items:center;
				   z-index:90;
			   }
			   .logo{
				   font-size:15px;
				   color:#222;
				   text-decoration:none;
				   font-weight:220;
				   opacity:0;
				   animation:slideRight 1s ease forwards;
				   
			   }
			   
			   
			   
			   .navbar a{
			   display:inline-block;
				   font-size:20px;
				   color:#0000FF;
				   text-decoration:none;
				   font-weight:500;
				   margin:0 20px;
				   transition:.3S;
				    opacity:0;
				     animation:  slideTop 0.5s ease forwards;
					 animation-delay: calc(.2s * var(--i));
				   
				  
			   }
			   
			   .navbar a:hover,
			   .navbar a.active
			   {
			   color:#FF4500;
			   font:bold;
			   }
			   
			   .social-media{
			   display:flex;
			   justify-content:space-between;
			   width:150px;
			   height:40px;
			 
			   }
			   
			   .social-media a{
			   display:inline-flex;
			   justify-content:center;
			   align-items:center;
			   width:40px;
			   height:40px;
			   background:transparent;
			   border:2px solid transparent;
			   text-decoration:none;
			   transform:rotate(45deg);
			   transition:.5S;
			   opacity:0;
				     animation:  slideSci 0.5s ease forwards;
					 animation-delay: calc(.2s * var(--i));
				   
			   }
			   
			   
			    .social-media a:hover{
				    border-color:#228B22;
					}
				
			   
			   
			   .social-media a i{
			   font-size:34px;
			   color:black;
			     transform:rotate(-45deg);
			   }
			   
				   
</style>
<style>
    .Home-img{
	position:relative;
	right:-7%;
	width:450px;
	height:450px;
	transform:rotate(45deg);
	}
	
	.Home-img .rhombus{
	Poppins:absolute;
	width:100%;
	height:100%;
	background:#eaeaea;
	border:25px solid red;
	box-shadow:-15px 15px 15px rgba(0,0,0,.3);
	 opacity:0;
				   animation:zoomOut 1s ease forwards;
				   animation-delay:1.6s;
	}
	
	.Home-img .rhombus img{
  position:absolute;
  top:160px;
  left:-80px;
  max-width:750px;
  transform:rotate(-45deg);
  }
  
  	.Home.rhombus2{
	position:absolute;
	top:-25%;
	right:-25%;
	width:700px;
	height:700px;
	background:red;
	transform:rotate(-45deg);
	}
  
  /*KEYFRAMES animation*/
  @keyframes slideRight{
  0%{
  transform:translateX(-100px);
  opacity:0;
  }
  100%{
  transform:translateX(0px);
  opacity:1;
  }
  }
  
   @keyframes slideleft{
  0%{
  transform:translateX(100px);
  opacity:0;
  }
  100%{
  transform:translateX(0px);
  opacity:1;
  }
  }
  
  
    @keyframes slideTop{
  0%{
  transform:translatey(100px);
  opacity:0;
  }
  100%{
  transform:translateY(0px);
  opacity:1;
  }
  }
  
        @keyframes slideBottom{
  0%{
  transform:translatey(-100px);
  opacity:0;
  }
  100%{
  transform:translateY(0px);
  opacity:1;
  }
  }
 
 
  
     @keyframes  slideSci{
  0%{
  transform:translateX(100px) rotate(45deg);
  opacity:0;
  }
  100%{
  transform:translateX(0px) rotate(45deg);
  opacity:1;
  }
  }
  
     @keyframes zoomOut{
  0%{
  transform:scale(1.1);
  opacity:0;
  }
  100%{
  transform:scale(1);
  opacity:1;
  }
  }
  
     @keyframes slideleft{
  0%{
  transform:translateX(100px);
  opacity:0;
  }
  100%{
  transform:translateX(0px);
  opacity:1;
  }
  }
  
  



	
 </style>
<!-- *** form***-->
<style>
input[type=text],input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

button {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #45a049;
}


.form{
	width: 65%;
    margin-left:auto;
	margin-right:auto;
	text-align:center;
}

 

</style>
<!-- **form end***-->

 <body>
 
     <header class="header">
	 <a href="#" class="logo">.</a>
	            <img src="img/5.png "alt="Snow" style="width:11%">
	 
	 <nav class="navbar">
	 <a href="index.php" style="--i:1;" class="active">Home</a>
	 <a href="about us.php" style= "--i:2;">About Us</a>
	 <a href="vacancies.php" style="--i:3;">Vacancies</a>
	 <a href="freelancer.php" style="--i:4;">Freelancers</a>
	 <a href="corparate.php" style="--i:5;">Corparate</a>


     <a href="#" style="--i:3;"></a>
     <a href="#" style="--i:3;"></a>
	 <a href="login.php" style="--i:4;">Loging</a>
	 <a href="singup.php" style="--i:5;">Singup</a>
	 </nav>
	
	 </header>
	<br>
	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	
	
