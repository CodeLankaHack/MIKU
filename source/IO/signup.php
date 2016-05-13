<html>
   <head>
      <title>Sign Up</title>
	  
	   <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	  
      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	  
      <!-- Latest compiled JavaScript -->
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	  
	  <link rel="stylesheet" href="ahome.css">

      <!-- Error message style of the Data validation for the null characters-->
      <style>
         .error { border: 1px solid #b94a48!important; background-color: #fee!important; }
      </style>

      <!-- java script file for thenotification plugin-->
      <script type="text/javascript" src="js/notifIt.js"></script>

      <!-- CSS file for the notification plugin-->
      <link rel="stylesheet" type="text/css" href="css/notifIt.css">


   </head>


   <body style="background-color:#FFCC66;">

      <!-- Nav bar file-->
	  
     
	  
	  
      <!-- jquery library included -->
      <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
      <!-- jquery validation library included-->
      <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
      <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
      <!-- Twitter bootstrap java script files included-->
      <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>

      <!-- java script functions for the name and the email field validation -->
	  
	   <?php include 'navbar.php' ;?>

      <!-- 'Contact us' information starts-->
      <div class="row artical1">
	  <div class="col-md-3"></div>
       <div class="col-md-6">
		 
	<h3><font color="#000000">Sign Up</font></h3>
      <hr noshade>
	  
	<form role="form">
    <div class="form-group">
      <label for="name">Name:</label>
	  <input type="text" class="form-control" id="name">
    </div>
	<div class="form-group">
	  <label for="NIC">NIC:</label>
	  <input type="text" class="form-control" id="NIC">
	</div>
	<div class="form-group">
	  <label for="Pnum">Phone Number:</label>
	  <input type="text" class="form-control" id="pnum">
	</div>
	<div class="form-group">
	  <label for="email">Email:</label>
	  <input type="email" class="form-control" id="email">
	</div>
	<div class="form-group">
		<label for="username">Username :</label>
		<input type="text" class="form-control" id="username">
	</div>
	<div class="form-group">
		<label for="password">Password :</label>
		<input type="password" class="form-control" id="password">
	</div>
	<div class="form-group">
		<label for="check_box">Join here as:</label><br>
		<input type="checkbox" name="vehicle1" value="Guest"> Guest<br>
		<input type="checkbox" name="vehicle2" value="planner"> Event Planner
	</div>
	<div class="form-group">
		<label for="list">Preffered Area:</label>
		<input list="p_area">
		<datalist id="p_area">
		<option value="Ampara">
		<option value="Anuradhapura">
		<option value="Badulla">
		<option value="Batticaloa">
		<option value="Colombo">
		<option value="Galle">
		<option value="Gampaha">
		<option value="Hambanthota">
		<option value="Jaffna">
		<option value="Kaluthara">
		<option value="Kandy">
		<option value="Kegalle">
		<option value="Kilinochchi">
		<option value="Kurunagala">
		<option value="Mannar">
		<option value="Matale">
		<option value="Matara">
		<option value="Moneragala">
		<option value="Mullativu">
		<option value="Nuwareliya">
		<option value="Puttalam">
		<option value="Rathnapura">
		<option value="Trincomalee">
		<option value="Vavniya">
		</datalist>
	</div>
	<div class="form-group">
		<label for="subjects">Select the areas you like:</label><br>
		<input type="checkbox" name="area1" value="Graphic_Designing"> Graphic Designing
		<input type="checkbox" style="margin-left:150px;" name="area2" value="DBMS">Database managment<br>
		<input type="checkbox" name="area3" value="Maths">Maths 
		<input type="checkbox" style="margin-left:233px;" name="area4" value="Knitting">Knitting<br>
		<input type="checkbox" name="area5" value="Sawing">Sawing
		<input type="checkbox" style="margin-left:225px;" name="area6" value="Marketing">Marketing<br>
		<input type="checkbox" name="area7" value="Economics">Economics
		<input type="checkbox" style="margin-left:200px;" name="area8" value="Chemistry">Chemistry<br>
		<input type="checkbox" name="area9" value="biological">Biological
		<input type="checkbox" style="margin-left:210px;" name="area0" value="ProLang">Programming Languages<br> 
	</div>
	<div style="margin-left:100px">
		<button type="submit" class="btn btn-info">Submit</button>
	</div>
  </form>      
      </div>
	  <div class="col-md-2"></div>
	  </div>
   </body>
</html>