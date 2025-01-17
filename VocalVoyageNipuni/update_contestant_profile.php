<?php
include_once 'config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    
    // Perform the update operation (replace this with your actual logic)
    // ...
    
    // Redirect the user to the updated profile page
    header('Location: contestantprofile.html');
    exit();
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vocal Voyage | Contestant Profile Page</title>

     <!--Favicon-->
     <link rel="icon" type="image/x-icon" href="logo.png">

    <!--linking css file-->
    <link rel="stylesheet" href="styles_main.css"> 
    <link rel="stylesheet" href="styles_contestant.css"> 
    
    <!--linking fonts from google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <!-- Header-->
    <header>
        <ul>
            <li><a href="../Dhanuka/index.html">Home</a></li>
            <li><a href="../Dhanuka/leaderboard.php">Leaderboard</a></li>
            <li><a href="vote.html">Vote</a></li>
            <li><a href="../New folder/About us.html">About us</a></li>
            <li style="float:right;"><a class="HomeLogout" href="../Dhanuka/index.html">Logout</a></li>
            
        </ul>
    </header>
</head>

<body>
    <center>
        <div class="box">
            <form action="update_contestant_profile.php" method="POST">
            <h1>Contestant Account Overview</h1>
            <img src="contestantprofileimage.png" class="profilepic">
            <input type="file" name="" id="file" class="img_icon"  accept="image">
            <label for="file" id="uploadBtn">Choose image</label>
            <input type="text" name="" placeholder="First name" class="text">
            <input type="text" name="" placeholder="Last name" class="text">
            <input type="email" name="" placeholder="Email" class="text">
            <input type="text" name="" placeholder="Date of birth" class="text">
            <button style="float: left; margin: 20px 0 0 18.2%;">CANCLE</button>
            <button type="submit" style="float: right; margin: 20px 18.2% 0 0;">DONE</button>
        </form>

             <br><br><br>
             <hr>

            <div class="box1">
                <h1>Your Voting percentage</h1>
                <div class="percent">
                    <svg>
                        <circle cx="70" cy="70" r="70"></circle>
                        <circle cx="70" cy="70" r="70"></circle>
                    </svg>
        
                    <div class="number">
                        <h2>87<span>%</span></h2>
                    </div>
                </div>
               
                
            </div>

            

        </div>
    </center>

 
</body>
    
    <footer>
        <img src="logo.png" height="60px" style="float: left;" class="ftrlogo">
        <p class="ftrmenu"><a href="">Contact us</a>&nbsp;&nbsp;&nbsp;
            <a href="../t&cHasangi/terms.html">Terms and Conditions</a>&nbsp;&nbsp;&nbsp;
            <a href="../t&cHasangi/privacy.html">Privacy policy</a>&nbsp;&nbsp;&nbsp;
            <a href="../t&cHasangi/index.php">FAQ</a></p>
        
            <!--Subscribe-->
        <div class="subscribe">
            <input type="email" class="email" id="Email" name="Email" placeholder="Email" autocomplete="off">
            <input class="emailsubmit" value="Subscribe" type="submit">
        </div>
    </footer>

</html>