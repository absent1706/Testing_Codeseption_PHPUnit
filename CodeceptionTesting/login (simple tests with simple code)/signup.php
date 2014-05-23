<?php
include("config.php"); 
//including config.php in our file

if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['firstname']) && !empty($_POST['lastname']) 
  && !empty($_POST['email'])){
// Now checking user name and password is entered or not.
  $first_name= mysql_real_escape_string($_POST['firstname']);
$last_name= mysql_real_escape_string($_POST['lastname']);
$username = mysql_real_escape_string(stripslashes($_POST['username']));
$user=$username;
$password = mysql_real_escape_string(stripslashes(md5($_POST['password'])));
$mail = mysql_real_escape_string($_POST['email']);
$check = "SELECT * from users where username = '".$user."'";
var_dump($check);
$qry = mysql_query($check);
var_dump($qry);
$num_rows = mysql_num_rows($qry); 

if($num_rows > 0){
// Here we are checking if username is already exist or not.

  echo "The username you have entered is already exist. Please try another username.";
  echo '<a href="signup.php">Try Again</a>';
  exit;
}

// Now inserting record in database.
$query = "INSERT INTO users (firstname,lastname,username,password,email,is_active) VALUES ('".$first_name."','".$last_name."','".$username."','".$password."','".$mail."','1');";
mysql_query($query);
echo "Thank You for Registration.";
echo '<a href="login.php">Click Here</a> to login you account.';
exit;
}

?>
<html>
<head>
  <title>Registration Page | Simple login form</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <div id="containt" align="center">
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post" class="form-signup">
      <div id="header"><h2 class="sansserif">Create an account</h2></div>
      <table>
        <tr>
          <td>Select Your Firstname:</td>
          <td> <input type="text" name="firstname" size="20" placeholder="First name"><span class="required">*</span></td>
        </tr>

        <tr>
          <td>Select Your Lastname:</td>
          <td> <input type="text" name="lastname" size="20" placeholder="Last name"><span class="required">*</span></td>
        </tr>

        <tr>
          <td>Select Your Username:</td>
          <td> <input type="text" name="username" size="20" placeholder="User name"><span class="required">*</span></td>
        </tr>

        <tr>
          <td>Select Your Password:</td>
          <td><input type="password" name="password" size="20" placeholder="Password"><span class="required">*</span></td>
        </tr>

        <tr>
          <td>Select Your Email:</td>
          <td> <input type="text" name="email" size="20" placeholder="Email"><span class="required">*</span></td>
        </tr>
        <tr>
         <td><input type="submit" value="Sign Up" class="btn btn-large btn-primary"></td>

       </tr>
     </table>
   </form>
 </div>
</body>
</html>