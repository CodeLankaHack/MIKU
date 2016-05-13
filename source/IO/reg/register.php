<!DOCTYPE html >
<html >
<head>

<title>Conference Register</title>
	   <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	  
      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	  
      <!-- Latest compiled JavaScript -->
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	  
	  <link rel="stylesheet" href="../ahome.css">

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

      <!-- jquery library included -->
      <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
      <!-- jquery validation library included-->
      <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
      <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
      <!-- Twitter bootstrap java script files included-->
      <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>

      <!-- java script functions for the name and the email field validation -->
	  
	   <?php include '../navbar1.php' ;?>
	<div class="row artical1">
	  <div class="col-md-3"></div>
       <div class="col-md-6">
		 
	<h3><font color="#000000">Register Your Conference Here</font></h3>
      <hr noshade>
	  
  <form role="form">
    <div class="form-group">
      <label for="name">Name of the conference:</label>
	  <input type="text" class="form-control" id="name">
    </div>
	<div class="form-group">
	  <label for="Category">Related Category:</label><br>
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
	<div class="form-group">
	  <label for="Pnum">Phone Number:</label>
	  <input type="text" class="form-control" id="pnum">
	</div>
	<div class="form-group">
	  <label for="email">Email:</label>
	  <input type="email" class="form-control" id="email">
	</div>
	<div class="form-group">
	  <label for="venue">Venue:</label>
	  <input type="text" class="form-control" id="venue">
	</div>
	<div class="form-group">
	  <label for="Date">Date:</label>
	  <input type="Date" class="form-control" id="date">
	</div>
	<div class="form-group">
	  <label for="Time">Time:</label>
	  <input type="time" class="form-control" id="time">
	</div>
	<div class="form-group">
		<label for="list">Related District:</label>
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
		<label for="username">Description:</label>
		<textarea class="form-control" id="Description"></textarea>
	</div>
	<div class="form-group">
		<label for="check_box">Ticket Prices:</label><br>
		<input type="checkbox" name="tic1" value="tic1"> Rs.500<br>
		<input type="checkbox" name="tic2" value="tic2"> Rs.1000<br>
		<input type="checkbox" name="tic3" value="tic3"> Rs.1500<br>
		<input type="checkbox" name="tic4" value="tic4"> Rs.2000<br>
		<input type="checkbox" name="tic5" value="tic5"> Rs.2500<br>
		<input type="checkbox" name="tic6" value="tic6"> Rs.5000<br>
		<input type="checkbox" name="tic7" value="tic7"> Rs.10000<br>
		<input type="checkbox" name="tic8" value="tic8"> Rs.20000<br>
	</div>
	<div class="form-group">
		<label for="crowd">Number of crowd you expect:</label>
		<input type="Number" class="form-control" id="crowd">
	</div>
	<div class="form-group">
	  <label for="img">Image:</label>
	</div>
	<div class="fileupload fileupload-new" data-provides="fileupload">
      <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
    <div>
      <span class="btn btn-file"><span class="fileupload-new"></span>
	  <span class="fileupload-exists">Change</span><input type="file" /></span>
      <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
    </div>
	<div style="margin-left:100px">
		<button type="submit" class="btn btn-default">Submit</button>
	</div>
  </form>
</div>
</div>
</div>
</body>
</html>
