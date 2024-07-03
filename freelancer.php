<?php
include_once 'header1.php';

?>

<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding:20 px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.button {
  background-color:#00008B ; 
  border: none;
  color: white;
  padding: 15px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 2px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}


.button2:hover {
  box-shadow: 0 13px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>



<div class="row">
  <div class="column" style="background-color:white;">
 <center> <img src="img/Freelancers.jpg"style="width:80%"></center>
  
  </div>
  <div class="column" style="background-color:white;">
  <center> <h2 style="font-size:40px;color:black; font:Trebuchet MS;">Join with JOB HOUSE to begin a new journey as a freelancer</h2></center>
    <br>
    <p style="font-size:18px;color:#808080; font:Times New Roman;" >Let's add the real value to your profession that you've been practicing with JOB HOUSE
        and begin a new journey to new destiny. We, at JOB HOUSE offer you the best tailored 
        platform that suits especially to you all Sri Lankans. Through our massive, strategize 
        marketing campaigns we always ensure that all the registered freelancers of JOB HOUSE,
         meets the target audience of their genres regularly and accurately. As the pure Sri Lankan 
         and nation's number one platform for all the freelancers we want you
         to achieve the utmost success you deserved. The level of success you achieved is the same of ours.</p>

<br><br><br>

<button class="button button2">Shadow on Hover</button>

  </div>
</div>

<br><br><br><br><br><br>

<br><br><br>
<center><h4 style="font-size:40px;color:black; font:Times New Roman;" >  Let JOB HOUSE to bring you the success that you've <br>been looking for...   </h4><br>
<p style="font-size:18px;color:#808080; font:Times New Roman;">We, at job house dedicated to assist you to firmly establish within the area you choose to provide
     your services and of<br> course to attract new clientele by expanding your services into new geographical
      landscapes. job house wants to make<br>
     you a brand in the category you cater and you've the blessings of team job house, always.</p>
</center>
<br><br><br><br><br><br>







<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>



<div class="row">
  <div class="column" style="background-color:white;">
 <center> <h4>keywords</h4> </center>
  <style type="text/css">
.form-style-1 {
	margin:10px auto;
	max-width: 400px;
	padding: 20px 12px 10px 20px;
	font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.form-style-1 li {
	padding: 0;
	display: block;
	list-style: none;
	margin: 10px 0 0 0;
}
.form-style-1 label{
	margin:0 0 3px 0;
	padding:0px;
	display:block;
	font-weight: bold;
}
.form-style-1 input[type=text], 
.form-style-1 input[type=date],
.form-style-1 input[type=datetime],
.form-style-1 input[type=number],
.form-style-1 input[type=search],
.form-style-1 input[type=time],
.form-style-1 input[type=url],
.form-style-1 input[type=email],
textarea, 
select{
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	border:1px solid #BEBEBE;
	padding: 7px;
	margin:0px;
	-webkit-transition: all 0.30s ease-in-out;
	-moz-transition: all 0.30s ease-in-out;
	-ms-transition: all 0.30s ease-in-out;
	-o-transition: all 0.30s ease-in-out;
	outline: none;	
}
.form-style-1 input[type=text]:focus, 
.form-style-1 input[type=date]:focus,
.form-style-1 input[type=datetime]:focus,
.form-style-1 input[type=number]:focus,
.form-style-1 input[type=search]:focus,
.form-style-1 input[type=time]:focus,
.form-style-1 input[type=url]:focus,
.form-style-1 input[type=email]:focus,
.form-style-1 textarea:focus, 
.form-style-1 select:focus{
	-moz-box-shadow: 0 0 8px #88D5E9;
	-webkit-box-shadow: 0 0 8px #88D5E9;
	box-shadow: 0 0 8px #88D5E9;
	border: 1px solid #88D5E9;
}
.form-style-1 .field-divided{
	width: 49%;
}

.form-style-1 .field-long{
	width: 100%;
}
.form-style-1 .field-select{
	width: 100%;
}
.form-style-1 .field-textarea{
	height: 100px;
}
.form-style-1 input[type=submit], .form-style-1 input[type=button]{
	background: #4B99AD;
	padding: 8px 15px 8px 15px;
	border: none;
	color: #fff;
}
.form-style-1 input[type=submit]:hover, .form-style-1 input[type=button]:hover{
	background: #4691A4;
	box-shadow:none;
	-moz-box-shadow:none;
	-webkit-box-shadow:none;
}
.form-style-1 .required{
	color:red;
}
</style>

  <form>
<ul class="form-style-1">
    <li><label>Full Name <span class="required">*</span></label><input type="text" name="field1" class="field-divided" placeholder="First" /> <input type="text" name="field2" class="field-divided" placeholder="Last" /></li>
    <li>
        <label>Email <span class="required">*</span></label>
        <input type="email" name="field3" class="field-long" />
    </li>
    <li>
        <label>category</label>
        <select name="field4" class="field-select">
        <option value="Advertise">ALL</option>
        <option value="Partnership">Partnership</option>
        <option value="Partnership">  Accounting Auditing or Finance </option>
        <option value="Partnership"> International Development   </option>
        <option value="Partnership">   Imports/Exports    </option>
        <option value="Partnership">     Imports/Exports  </option>
        <option value="Partnership">  Banking/Insurance     </option>
        <option value="Partnership">   Banking/Insurance  </option>
        <option value="Partnership">  IT software/DB/QA/Web/Graphics/GIS/AI     </option>
        <option value="Partnership">  others....     </option>
     
        </select>
    </li>


    <li>
        <label>Sub category</label>
        <select name="field4" class="field-select">
        <option value="Advertise">ALL</option>
        <option value="Partnership">Partnership</option>
        <option value="General Question">General</option>
        </select>
    </li>



    
    <li>
        <label>Province</label>
        <select name="field4" class="field-select">
        <option value="Advertise">ALL</option>
        <option value="Partnership">westen</option>
        <option value="General Question">southern</option>
        <option value="Partnership">North center</option>
        <option value="Partnership">Uva</option>
        <option value="Partnership">northern</option>
        </select>
    </li>



    <li>
        <input type="submit" value="Submit" />
    </li>
</ul>
</form>



  </div>
  <div class="column" style="background-color:white;">

  <style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 700px;
  margin: auto;
  text-align: center;
  font-family: arial;
}



.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #797979;
  text-align: center;
  cursor: pointer;
  width: 40%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
</style>



<div class="card">

  <h1>Tailored Jeans</h1>
  <p class="price">Freelancer</p>
  <p>Tailored@gmail.com</p>
  <p><button>show details</button></p>
</div>

<br><br>


<br><br>
<div class="card">

  <h1>salitha shehan kodithuwakku </h1>
<br>
  <p>halithashehan40@gmail.com
</p>
<br><p class="price">Freelancer</p>
  <p><button>show details</button></p>
</div>








<br><br>
<br><br>
<br><br>
<div class="card">

 
<h1>Arun Sahan </h1>
<br>
  <p>Arunn40@gmail.com
</p>
<br><p class="price">Freelancer</p>
  <p><button>show details</button></p>
</div>




<br><br>
<br><br>
<br><br>
<div class="card">

<h1>kaveensha sawindra </h1>
<br>
  <p>kavee40@gmail.com
</p><br><p class="price">Freelancer</p>
  <p><button>show details</button></p>
</div>


  

  </div>
</div>










<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>

<?php
include_once 'footer.php';

?>