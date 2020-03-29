<!DOCTYPE html>
<html>
  <?php
// define variables and set to empty values
$name = $fname= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    echo '<script>alert("Name required")</script>';
  } 
  else {
    if (empty($_POST["fname"])) {
        echo '<script>alert("Full Name required")</script>';
      } 
    $fname = test_input($_POST["fname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
        echo '<script>alert("Only letters and whitespace allowed")</script>';
    }
  }
   

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<head>
    <link href='css\header.css' rel='stylesheet' type='text/css'>
    <link href='css\index.css' rel='stylesheet' type='text/css'>
    <link href='css\font.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css\bootstrap.min.css">

</head>
<body link="blue">
    <div id="main-container-div">

        <div class="header">

            <input class="topButtons1" type="button" value="Sign Up" data-toggle="modal" data-target="#exampleModalSignUp">
            <input class="topButtons2" type="button" value="Sign In" data-toggle="modal" data-target="#exampleModal">
            <a id="pageTitle" class="logo-title">WeEBlY</a>
            <p class="middleText">Explore Imagine Create</p>
          
        </div>
        <div class="postButtons">
          
          <button type="button" id="allpost">All Posts</button>
          <button type="button" id="createpost">Create Post</button>
          
        </div>
    </div>
    
    <div >
    
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title1">Welcome Back!</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
              <div class="form-group">
                                    <label  class="label">Full Name</label>
                                    <input  type="text" name="fname" class="form-control"  placeholder="Enter Full Name" required="required">
                                   
                                </div>  
                        <div class="form-group">
                                <label class="label">Username</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Username" required="required">
                                
                            </div>
                        <div class="form-group">
                                <label  class="label">Password</label>
                                <input type="password" name="pass" class="form-control"  placeholder="Enter Password" required="required">
                            </div>
                                 <button type="submit" name="submit" value="Submit" class="btn btn-primary" id="signinbtn">Sign In</button>
                        <div class="form-group">
                                 <label id="notamember">Not a member?</label><a data-toggle="modal" href="#exampleModalSignUp" id="lnk">Sign Up</a>
                            </div>
                  
                   </form>
            </div>
 
          </div>
        </div>
      </div>
     

    </div>
    
    <div>
      <div class="modal fade" id="exampleModalSignUp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title2" >Get Started</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <div class="form-group">
                                    <label  class="label">Full Name</label>
                                    <input  type="text" name="fname" class="form-control"  placeholder="Enter Full Name" required="required">
                                   
                                </div>
                            <div class="form-group">
                                     <label   class="label">Username</label>
                                     <input type="text" name="name" class="form-control"  placeholder="Enter Username" required="required">
                                    
                                </div>
                            <div class="form-group">
                                     <label  class="label">Password</label>
                                     <input type="password" name="pass" class="form-control" id="password1" placeholder="Enter Password" required="required">
                                </div>
                            <div class="form-group">
                                     <label  class="label" >Confirm Password</label>
                                     <input type="password" name="confpass" class="form-control" id="password2" placeholder="Confirm Password"required="required">
                                </div>
                                      <button type="submit" name="submit" value="Submit" class="btn btn-primary" id="signupbtn"  >Sign Up</button>
                      </form>
            </div>
           
          </div>
        </div>
      </div>
    </div>
    <div>

   

    </div>
    <script src="js/jquery.js"></script>
 
    <script src="js/bootstrap.min.js"></script>
	<!-- Place all Javascript for header in this file -->
	<script src="js\header.js"></script>
	<!-- Place all Javascript for rest of the elements in this file -->
    <script src="js\index.js"></script>
    
</body>
</html>



