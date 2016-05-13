
<html>
   <head>
      <script type="text/javascript" src="js/notifIt.js"></script>
      <link rel="stylesheet" type="text/css" href="css/notifIt.css">
      <title>Home</title>
      <script type="text/javascript" language="javascript">
         function submitlogin() {
             var form = document.login;
         if(form.emailusername.value == ""){
         notif({
         title: "Welcome:",
         bgcolor: "#F80000 ",
         width: 200,
         height: 40,
         color:"white",
         msg: "Enter email or username",
         
         });
         //alert("Invalid Name");
         document.getElementById("exampleInputEmail1").value = "";
         return false;		
         
         }
         else if(form.password.value == ""){
         notif({
         title: "Welcome:",
         bgcolor: "#F80000 ",
         width: 200,
         height: 40,
         color:"white",
         msg: "Enter The Password",
         
         });
         //alert("Invalid Name");
         document.getElementById("exampleInputPassword1").value = "";
         return false;		
         }
         }
         
      </script>
   </head>
   <body style="background-color:#FFCC66;">
      <?php include 'navbar.php'?>
      <div class="row artical1">
         <div class="container">
            <div class="row">
			
               <!-- Login form starts-->
               <div class="col-md-3">
                  <p style="font-size:21px;margin-top:13px;">Login</p>
                  <hr noshade>
                  <div class="panel panel-info">
                     <div class="panel-heading">Login</div>
                     <div class="panel-body">
                        <form method="post" action="home.php" name="login">
                           <div class="form-group">
                              <label for="exampleInputEmail1">User Name</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" name="emailusername" placeholder="Email">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                           </div>
                           <button type="submit" onclick="return(submitlogin());" name="submit" class="btn btn-info">Login</button>
                           <a style="margin-left:20px;"href="register/reglogin_form.php" >Register Now</a>
                           <p class="change_link" style="margin-top:10px;">
                              <a href="forgotpasswrd/rcvrpasswrd.php" class="to_register">Forgot Your Password?</a>
                           </p>
                        </form>
                     </div>
                  </div>
               </div>
			   
               <!-- Login form ends-->
			   
			   <!--content-->
			   
               <div class="col-md-6">
                  <p style="font-size:21px;margin-top:13px;">Conference Management System</p>
                  <hr noshade>
                  <p style="font-size:21px;margin-top:13px;">Who are we</p>
                  <p>EVENT BASH is a Conference Managment System, offering a web based solution for managing delegate registration, payment, paper submission, review and the book of abstracts. It is a comprehensive and powerful, yet easy to use sofware for online conference management including event planning and creation of the detailed agenda.
                  </p>
               </div>
               <div class="col-md-3">
                  <img src="Templates/p5.jpg" width="400" height="400" class="img-responsive center-block" style="padding-top:67px" />
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <h3>Event Registration</h3>
                  <hr noshade>
                  <p>Event organizers can register and advertise their events through this website. After defining the conference sessions (date, time, venue, category) other users able to see the event timetable. The contents can be modified by see event calendar and available event locations surrounding the user. </p>
                  <img src="Templates/p6.jpg" width="250"  height="150" class="img-responsive center-block" />
               </div>
               <div class="col-md-4">
                  <h3>Handling of payments</h3>
                  <hr noshade>
                  <p>The conference registration module supports comprehensive registration form/s, automatic invoicing, the collection of online payments by credit card, bookkeeping, related email communications and data exports. Auxiliary items such as conference dinner, excursions, workshops, etc. can be booked together with the event registration or later. Quotas can be applied.</p>
                  <img src="Templates/p7.jpg" width="250" height="150" class="img-responsive center-block" />
               </div>
               <div class="col-md-4">
                  <h3>Well organized communication</h3>
                  <hr noshade>
                  <p>The communication module can be configured to send automatic sms for mentioned the events that he have according to user's flavour. When event planner register an event to the website, system filterout the user belongs to the category to send sms. After the event the event planner can get feedback through the website by comments.</p>
                  <img src="Templates/p8.jpg" width="250" height="150" class="img-responsive center-block" />
               </div>
            </div>
         </div>
      </div>
   </body>
</html>