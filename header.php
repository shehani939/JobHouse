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
     
	 <a href="login.php" style="--i:4;">Loging</a>
	 <a href="singup.php" style="--i:5;">Singup</a>
	 </nav>
	
	 </header>
	<br>
	<br>
	<br>

   <!-- ***** Header Area end ***** -->
   
   
     <!-- ***** body Area Start ***** -->
<style>

.main{
  height:50vh;
  width:100%;  
  display:flex;
  align-items:center;
  justify-content:center;
  text-align:center;
  
  
}


h4{
font-family: 'Arvo';
  text-align:center;
  text-transform: uppercase;
  color: black; 
  font-size: 4rem;
     opacity:0;
				   animation:slideBottom 1s ease forwards;
				   animation-delay:1s;
}

.roller{
font-family: 'serif';
  height: 4.125rem;
  line-height: 6rem;
  position: relative;
  overflow: hidden; 
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  
  color: red;
}


#spare-time{
  font-size: 1rem;
  font-style: italic;
  letter-spacing: 1rem;
  margin-top: 0;
  color: #A8DADC;
  
}

.roller #rolltext {
  position: absolute;
  top: 0;
  animation: slide 5s infinite;  
}

@keyframes slide {
  0%{
    top:0;
  }
  25%{
    top: -4rem;    
  }
  50%{
    top: -8rem;
  }
  72.5%{
    top: -12.25rem;
  }
}

@media screen and (max-width: 600px){
  h1{
  text-align:center;
  text-transform: uppercase;
  color: #F1FAEE; 
  font-size: 2.125rem;
  
}

  
  .roller{
  height: 3.6rem; 
  line-height: 2.125rem;  
  }
  
  #spare-time {
    font-size: 1rem;
    letter-spacing: 0.1rem;
  }
  
  .roller #rolltext {  
  animation: slide-mob 5s infinite;  
}
  
  @keyframes slide-mob {
  0%{
    top:0;
  }
  25%{
    top: -2.125rem;    
  }
  50%{
    top: -4.25rem;
  }
  72.5%{
    top: -6.375rem;
  }
}
}
</style>
<br><br><br><br>

<div class="main">
  <h4 style="font-size:65px;color:#000000; font:Garamond;" ><b>Let's Find Your Dream Job In</b>
 <div class="roller">
    <span id="rolltext">R & D/Research<br/>
    IT <br/>
    Scieance Agriculture<br/>
    <span id="spare-time">too much spare time?</span><br/>
    </div>
    </h1>
    
  </div>
  
 
 
 <center>
 <h3 style="font-size:15px;color:#696969; font:Trebuchet MS;"> Empty chairs wait for the talented to arrive. When you seek a job vacancy, they might be looking for a person <br>like you. So apply immediately.
 Choose your most passionate career from below </h3></center>
 
 <br>
 <br>
 
  <!-- ***** body Area end ***** -->
 
 
   <!-- ***** card category Start ***** -->
  <style>

.services {
  padding-bottom: 3rem;
}

.services h1 {
  font-size: 2.5rem;
  text-transform: uppercase;
  text-align: center;
  margin: 2rem 0;
}

.services .services-box {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 1rem;
  margin-bottom: 3rem;
}

.services .services-box .box {
  display: flex;
  justify-content: space-between;
  aling-items: center;
  padding: 1rem 1rem;
  box-shadow: rgba(50, 50, 93, 0.25) 1px 7px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
  align-self: normal;
  background: #B5EAAA;
       
}

.services .services-box .box:hover  {
  transform: scale(1.2);
  z-index: 2;
}

.services .services-box .box .box-content h3 {
  margin-bottom: .5rem;
}

.services .services-box .box i {
  margin-right: 1.5rem;
  color: #D90429;
}

.about {
  background: #161C31 ;
  padding-top: 4rem;
  padding-bottom: 3rem;
}

.about .about-content {
  display: flex;
  gap: 2rem;
}

.about .about-content .about-text {
  flex: 1 1 50%;
}

.about .about-content .about-text h1 {
  text-transform: uppercase;
  color: #fff;
  letter-spacing: .5rem;
  font-size: 2rem;
}

.about .about-content .about-text p {
  padding: 1rem 0;
  font-size: 1.2rem;
  color: #fff;
}

.about .about-content .about-text a {
  display: inline-block;
  padding: 1rem 2rem;
  background: #8D99AE;
  border-radius: .5rem;
  margin-top: 1rem;
  color: #EDF2F4;
  text-transform: uppercase;
}

.about .about-content .about-text a:hover {
  background: #D90429;
  letter-spacing: .5rem;
}

.about .about-content .about-img {
  flex: 1 1 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.about .about-content .about-img img {
  width: 90%;
  border-radius: .6rem;
  box-shadow: rgba(0, 0, 0, 0.15) 2px 25px 25px, rgba(0, 0, 0, 0.05) 0px 5px 10px;
}



  </style>
  
 
  <section class="services" id="services">
 <br><br>
    <div class="services-box">
      <div class="box">
        <i class="fas fa-code fa-2x"></i>
        <div class="box-content">
          <h3  style="font-size:35px;color:black; font:Garamond;"  > Corporates</h3>
        
        </div>
      </div>
      <div class="box">
        <i class="fas fa-pencil fa-2x"></i>
        <div class="box-content">
          <h3 style="font-size:35px;color:black; font:Garamond;"  > Jobseekers</h3>
         
        </div>
      </div>
	   <div class="box">
        <i class="fas fa-pencil fa-2x"></i>
        <div class="box-content">
          <h3 style="font-size:35px;color:black; font:Garamond;" >  Freelancers</h3>
         
        </div>
      </div>
      <div class="box">
        <i class="fas fa-shopping-cart fa-2x"></i>
        <div class="box-content">
          <h3 style="font-size:35px;color:black; font:Garamond;" >  Job Vacancy</h3>
         
        </div>
      </div>
    </div>
  </section>

  
  </section>
 
	  <!-- ***** card category end ***** -->
	  
	  
	  
	   <!-- ***** image and text Start ***** -->
	 <style>
	 .home{
	     position:relative;
	     width:100%;
		 height:100vh;
		 display:flex;
		 justify-content:space-between;
		 align-items:center;
		 padding:50px 8% 0;
		 overflow:hidden;
		 }
		 
		 .home-content{
		 max-width:600px;
		 }
		 
		 .home-content h1{
		  font-size:50px;
		  line-height:1.2;
		   opacity:0;
				   animation:slideBottom 1s ease forwards;
				   animation-delay:1s;
		  }
		  
		
		  .home-content p{
		  font-family:Gill Sans;
		    font-size:18px;
			margin:15px 0 30px;
			 opacity:0;
				   animation:slideleft 1s ease forwards;
				   animation-delay:1.6s;
			}
		  
		  .btn{
		   display:inline-block;
		   padding:10px 2px;
		   background:#1743e3;
		   border:2px solid #1743e3;
		   border-radius:6px;
		   box-shadow:0 0 10px rgba(0,0,0,.1);
		   font-size:16px;
		   color:#eaeaea;
		   letter-spacing:1px;
		   text-decoration:none;
		   font-weight:600;
		   transition:.5s;
		    opacity:0;
				   animation:slideTop 1s ease forwards;
				   animation-delay:2s;
		   }
		   
		   .btn:hover{
		   background:transparent;
		   color:#1743e3;
		   }
		  
		  
	 </style>
	 
 <section class="home">
     <div class="home-content">
	 <h1 style="font-size:35px;color:green; font:Tahoma;">Innovatively built for recruiters and applicants.<br><br>WELCOME !</h1>
	
	 <p >We create an engaging Experience with our dedicated tool, post an 
	 application and let your candidates self-checkout their way towards an interview.

We have activated an efficient system to select the most preferred profession
 and the most suitable candidate. Through authenticity and transparency, we can
 ensure successful outcomes for both parties as well as facilitate the achievement of the objectives.</p>

 
 <a href="#" class="btn">Learn More</a>
 </div>
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
 
 <div class="Home-img">
 <div class="rhombus">
  <img src="img/3.png" alt="">
  </div>

</div> 

 
 <div class="rhombus2">
     
	   
 
 
 </div>
 </section>
 
 
 
 <br> <br> <br> <br>
 
  
 

<style>
@import url('https://fonts.googleapis.com/css?family=Lato:300,400|Poppins:300,400,800&display=swap');

* {
  margin: 0;
  padding: 0;
}

body {
  font-family: 'Poppins';
}

.container {
  width: 100%;
  height: 80vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background: #FFFFF4;
  position: relative;

  .box {
    width: 0%;
    height: 500px;
    background: #FFFFF4;
    position: absolute;
    animation: openBox 1s cubic-bezier(.74, .06, .4, .92) forwards;

    .product__img {
      width: 600px;
      position: absolute;
      left: -150px;
      top: 50px;
      opacity: 0;
      animation: fadeImg 1s ease-in-out forwards;
      animation-delay: 1s;
    }

    .product__video {
      width: 320px;
      height: 100px;
      position: absolute;
      left: 50px;
      bottom: 50px;

      .video {
        display: flex;
        align-items: center;
        position: absolute;
        bottom: 0px;
        opacity: 0;
        animation: upVideo 1s cubic-bezier(.74, .06, .4, .92) forwards;
        animation-delay: 1.6s;


        i {
          width: 70px;
          height: 70px;
          display: flex;
       

          &:hover {
            background: #FFFFF4;
            color: #FFFFF4;
            box-shadow: 0 0 26px #FFFFF4;
          }
        }
        p {
          margin-left: 25px;
             font-family: 'Poppins';

        }
      }
    }

    .product__disc {
      width: 0px;
      height: 430px;
      background: #FFFFF4;
      display: flex;
      align-items: center;
      justify-content: center;
      position: absolute;
      left: 0px;
      top: 50px;
      animation: showDisc 1s cubic-bezier(.74, .06, .4, .92) forwards;

      .product__disc--content {
        width: 80%;
        height: 80%;
        display: flex;
        justify-content: space-between;
        flex-direction: column;
        animation: fadeContent 1s ease-in-out forwards;
        animation-delay: 1s;
        opacity: 0;

        .disc__content--about {
          width: 100%;

          h1 {
            font-size: 32px;
               font-family: 'Poppins';

          }
          span {
            font-family: 'Lato';
            font-size: 14px;
            letter-spacing: 2px;
            text-transform: uppercase;
            display: flex;
            opacity: 0.5;
          }
          p {
            margin-top: 35px;
            font-size: 14px;
               font-family: 'Poppins';

          }
        }

        .product__view--more {
          width: 100%;
          display: flex;
          align-items: center;
          position: relative;
          cursor: pointer;

          &:hover {
            .view__more--block {
              width: 220px;
              height: 35px;
            }
          }

          .view__more--block {
            width: 10px;
            height: 15px;
            position: absolute;
            background: #FFFFF4;
            z-index: 1;
            transition: cubic-bezier(0.68, -0.55, .27, 01.55) 320ms;
          }
          p {
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 2px;
            display: flex;
            z-index: 2;
            margin-left: 15px;
               font-family: 'Poppins';

          }
        }
      }
    }

    .product_buttons {
      width: 500px;
      height: 100px;
      bottom: 50px;
      right: -50px;
      position: absolute;

      .btn {
        width: 300px;
        height: 70%;
        font-size: 16px;
        font-weight: bold;
        font-family: 'Poppins';
        -webkit-transition: ease-in-out 220ms;
        -moz-transition: ease-in-out 220ms;
        -ms-transition: ease-in-out 220ms;
        -o-transition: ease-in-out 220ms;
        transition: ease-in-out 220ms;
        cursor: pointer;
      }

      

      .buy {
        border: none;
        background: #151B54;
        color: #FFF;
        position: absolute;
        right: 0;
        bottom: 0;
        opacity: 0;
        animation: fadeBuy 1s cubic-bezier(.74, .06, .4, .92) forwards;
        animation-delay: 1s;

        &:hover {
          box-shadow: 0 0 26px #E8ADAA;
        }
      }
    }
  }
}

/*
  keyframes
 */

@keyframes openBox {
  0% {
    width: 0px;
    left: 15%;
  }
  100% {
    width: 900px;
    left: 15%;
  }
}

@keyframes fadeImg {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@keyframes upVideo {
  0% {
    opacity: 0;
    bottom: -20px;
  }
  100% {
    opacity: 1;
    bottom: 0px;
  }
}

@keyframes showDisc {
  0% {
    width: 0px;
    left: 450px;
  }
  100% {
    width: 500px;
    left: 450px;
  }
}

@keyframes fadeContent {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@keyframes fadeWish {
  0% {
    opacity: 0;
    bottom: -25px;
  }
  100% {
    opacity: 1;
    bottom: 0;
  }
}

@keyframes fadeBuy {
  0% {
    opacity: 0;
    bottom: -25px;
  }
  100% {
    opacity: 1;
    bottom: 0;
  }
}



  }
}

@keyframes top {
  0% {
    opacity: 0;
     bottom: -80px
  }
  100% {
    opacity: 1;
     bottom: 0px

  }
}

@keyframes icon {
  0% {
    opacity: 0;
     transform: scale(0.0);
  }
   50% {
      opacity: 1;
     transform: scale(1.3) rotate(-02deg);
      
   }
  100% {
    opacity: 1;
     bottom: 0px;
  }
}



</style>


    <div class="container">
        <div class="box">
            <div class="product__img">
                <img src="img/2.png" alt="" style="width:96%">
            </div>

            <div class="product__video">
                <div class="video">
                  
                </div>
            </div>

            <div class="product__disc">
                <div class="product__disc--content">
                    <div class="disc__content--about">
                        <h1>Experience and support that no one else can give you</h1>
                        <span>get ready to step into a new world</span>
                        <p>We constantly assist you with unique experiences and features already close to you.
						We strive to achieve something extraordinary rather 
						than a traditional and virtual job market through guaranteed user compromises.

</p>
                    </div>

                </div>
            </div>

        </div>
    </div>



<!-- ignore -->

    </div>

   </a>
 <!-- new edit -->
	 <style>
	 .home{
	     position:relative;
	     width:100%;
		 height:100vh;
		 display:flex;
		 justify-content:space-between;
		 align-items:center;
		 padding:50px 8% 0;
		 overflow:hidden;
		 }
		 
		 .home-content{
		 max-width:630px;
		 }
		 
		 .home-content h1{
		  font-size:50px;
		  line-height:1.2;
		   opacity:0;
				   animation:slideBottom 1s ease forwards;
				   animation-delay:1s;
		  }
		  
		 
		  
		  .home-content p{
		    font-size:18px;
			margin:15px 0 30px;
			 opacity:0;
				   animation:slideleft 1s ease forwards;
				   animation-delay:1.6s;
			}
		  
		  .btn{
		   display:inline-block;
		   padding:10px 2px;
		   background:#1743e3;
		   border:2px solid #1743e3;
		   border-radius:6px;
		   box-shadow:0 0 10px rgba(0,0,0,.1);
		   font-size:16px;
		   color:#eaeaea;
		   letter-spacing:1px;
		   text-decoration:none;
		   font-weight:600;
		   transition:.5s;
		    opacity:0;
				   animation:slideTop 1s ease forwards;
				   animation-delay:2s;
		   }
		   
		   .btn:hover{
		   background:transparent;
		   color:#1743e3;
		   }
		  
		  
	 </style>
	 
 <section class="home">
     <div class="home-content">
	 <h1>Easy steps to use the job.LK</h1>
	 
	 <p style="font-size:25px;color:green">Download and Register<p>
<p>First, you can easily download the app in the Play Store, App Store, Huawei App Gallery, or 
this site. Then create and activate your job.lk account with accurate data</p>
<br>
<p style="font-size:25px;color:green">Complete Profile<p>
<p>Create your gig by documenting your accurate information. Expect guaranteed results by 
including your greatest qualifications, skills and other details.</p>
 

 </div>
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
	border:25px solid #1743e3;
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
	background:#1743e3;
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
 
 <div class="Home-img">
 <div class="rhombus">
  <img src="img/lk.png" alt="">
  </div>

</div> 

 
 <div class="rhombus2">
     
	   
 
 
 </div>
 </section>
 
 <br><br><br>
 <center>
 
 <h2 style="font-size:25px;color:blue; font:Tahoma;"> Read our latest blog</h2>
 <p style="font-size:18px;color:#696969; font:Arial Black;">Join with job.LK blog today to get equipped with information inline with Job opportunities<br> and Freelancing opportunities. 
 More time spends you on reading,<br> makes you more perfect, and your character.</p>
 
 
 </center>
 
 <br><br>
 
  
	   <!-- ***** image and text end ***** -->
 