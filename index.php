<html>
<head>
    <style>
        * {box-sizing: border-box}

        /* Add padding to containers */
        .container {
            padding: 16px;
        }

        /* Full-width input fields */
        input[type=text], input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus, input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Overwrite default styles of hr */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Set a style for the submit/register button */
        .registerbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .registerbtn:hover {
            opacity:1;
        }

        /* Add a blue text color to links */
        a {
            color: dodgerblue;
        }

        /* Set a grey background color and center the text of the "sign in" section */
        .signin {
            background-color: #f1f1f1;
            text-align: center;
        }
    </style>
</head>
<body>
<h1> Instructions </h1>
<ul>
       <li>Create a database called myapplication.</li>
       <li>Create a table called users. (Id,username,password,email,phone_number). Those fields should have the right datatype and right size.
       <li>Connect the form to the database, When the user insert the information in the registration form, those information should stored in the database.</li>
       <li>After submission, the page should be redirect to new page.</li>
       <li>The new page should display, "Hello (username)" </li>
</ul>
<form  action="welcome.php" method="POST">
    <div class="container">
        <h1>Register</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="username"><b>username</b></label>
        <input type="text" placeholder="Enter Email" name="username" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Email" name="email" required>

        <label for="phone_number"><b>Phone Number</b></label>
        <input type="text" placeholder="phone_number" name="phone_number" required>
        <hr>

        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
        <button type="submit" class="registerbtn">Register</button>
    </div>

    <div class="container signin">
        <p>Already have an account? <a href="#">Sign in</a>.</p>
    </div>
</form>
</body>
<?php
session_start();
require_once "config.php";
$username = $email = $password = $phone_number ="";
$username_err = $email_err= $password_err= $phone_number_err  = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
           
        $sql = "SELECT id FROM users WHERE username = :username";
        
    }
    }
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter a username.";
    } else{
        
        $sql = "SELECT id FROM users WHERE email = :email";
    }


    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }



    if(empty(trim($_POST["phone_number"]))){
        $phone_number_arr = "Please enter a phone number.";
    } else{
       
        $sql = "SELECT id FROM users WHERE phone_number = :phone_number";
    }

    if(empty($username_err) && empty($email_err) && empty($$phone_number) && empty($password_err)){
        
   
        $sql = "INSERT INTO users (username, email,phone_number,password) VALUES (:username, :email, :phone_phone, :password)";
         
    }


?>



<!-- CREATE TABLE `users` (
  `id` int(25) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` int(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone_number` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `phone_number`) VALUES
(1, 'Ayham', 123456789, 'email', 0);

-- -->

