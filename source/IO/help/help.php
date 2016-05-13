<!DOCTYPE>
<html>
   <head>
   
	<script src="http://maps.googleapis.com/maps/api/js"></script>
	<script
	src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.3/angular.min.js"></script>
	<script
	src="http://ajax.googleapis.com/maps/api/js?sensor=false&language=en"></script>
   
      <title>Help</title>
	  
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

      <!-- Nav bar file-->
	  
     
	  
	  
      <!-- jquery library included -->
      <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
      <!-- jquery validation library included-->
      <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
      <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
      <!-- Twitter bootstrap java script files included-->
      <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>

      <!-- java script functions for the name and the email field validation -->
	  
	   <?php include '../navbar1.php' ;?>
   
      <script type="text/javascript">
         function validatename(){
           var name = document.getElementById("name").value;
           var letters = /^[a-zA-Z\s]*$/;
           if(name.match(letters)){
             return true;
           
           }
         
           else{
             notif({
               type : 'warning',
               msg  : 'Invalid Name',
               bgcolor: "#F80000 ",
               width: 200,
               height: 40
             });
             return false
           }
         }
         
         function ValidateEmail() 
         {
           var $email = $('form input[name="email'); //change form to id or containment selector
           var re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
           if ($email.val() == '' || !re.test($email.val()))
           {
              notif({
               type : 'warning',
               msg  : 'Invalid Email address',
               bgcolor: "#F80000 ",
               width: 200,
                 height: 40
             });
             document.getElementById("email").value = "";
             return false
           }
         
         }
         
      </script>

      <!-- 'Contact us' information starts-->
      <div class="row artical1">
         <div class="container">
            <div class="col-md-4">
               <h3>Call Us</h3>
               <hr noshade>
               <p>Wishwa Dileepa Hettige</p>
               <p>Manager</p>
               <p>011- 2913870</p>
               <p>071-4884320</p>
            </div>
            <div class="col-md-4">
               <h3>Visit Us</h3>
               <hr noshade>
               <p>EVENT BASH</p>
               <p>UCSC</p>
               <p>Reid Avenue</p>
               <p>Colombo 07</p>
               <p>SriLanka</p>
            </div>
            <div class="col-md-4">
               <h3>Mail Us</h3>
               <hr noshade>
               <p>b.wathsala.bw@gmail.com</p>
            </div>
         </div>
    
      <!-- 'Contact us' information ends-->


      <!-- 'Contact us' form starts-->
      <div class="row">
         <div class="container">
            <div class="col-md-6">
               <h3 class="text-center">Contact Us</h3>
               <hr noshade>
               <p>If you have anymore problems regarding Registration,Reservation,Cancellation, Payments or any other don't hesitate to contact us.</p>
               <form class="form-horizontal" method="post" action="help1.php">
                  <div class="form-group">
                     <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                     <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" required onchange="validatename();">
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="inputPassword3" class="col-sm-2 control-label">Email Address</label>
                     <div class="col-sm-10">
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email" required onchange="ValidateEmail();">
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="inputPassword3" class="col-sm-2 control-label">Subject</label>
                     <div class="col-sm-10">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="inputPassword3" class="col-sm-2 control-label">Add Your Query</label>
                     <div class="col-sm-10">
                        <textarea class="form-control" name="query" id="query" rows="3" required></textarea>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="send" class="btn btn-info">Send</button>
                     </div>
                  </div>
               </form>
               <!-- contact us form ends -->


               <!-- Java script function of the validation for the null values using jquery and tooltips-->
               <script type="text/javascript">
                  $("form").validate({
                        
                    showErrors: function(errorMap, errorList) {
                        // Clean up any tooltips for valid elements
                        $.each(this.validElements(), function (index, element) {
                            var $element = $(element);
                            $element.data("title", "") // Clear the title - there is no error associated anymore
                                .removeClass("error")
                                .tooltip("destroy");
                        });
                        // Create new tooltips for invalid elements
                        $.each(errorList, function (index, error) {
                            var $element = $(error.element);
                            $element.tooltip("destroy") // Destroy any pre-existing tooltip so we can repopulate with new tooltip content
                                .data("title", error.message)
                                .addClass("error")
                                .tooltip(); // Create a new tooltip based on the error messsage we just set in the title
                        });
                    },
                  
                  });
               </script>  
            </div>

            <!-- Included the google map to the page-->
            <div class="col-md-6">
               <h3 class="text-center">Get Directions</h3>
               <hr noshade>
               <script>
var centered_pos=new google.maps.LatLng(6.9271, 79.8612);

function initialize() {
  var mapProp = {
    center: new google.maps.LatLng(6.9271, 79.8612),
    zoom:10,
    panControl:true,
    zoomControl:true,
    mapTypeControl:true,
    scaleControl:true,
    streetViewControl:true,
    overviewMapControl:true,
    rotateControl:true,    
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var mapProp = {
    center:centered_pos,
    zoom:10,
    mapTypeId:google.maps.MapTypeId.ROADMAP


  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

  

  var marker=new google.maps.Marker({
  position:centered_pos,
  animation:google.maps.Animation.BOUNCE
  });


marker.setMap(map);
flightPath.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);




</script>

<div id="googleMap" style="width:500px;height:380px;"></div>
            </div>
         </div>
      </div>
	  </div>
   </body>
</html>