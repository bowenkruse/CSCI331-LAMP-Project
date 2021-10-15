<?php
session_start();

$clubstr = 'Bowen Kruse\'s LAMP Online Arcade';
$userstr = 'Welcome!';

echo <<<_INIT
<!DOCTYPE html> 
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'> 
        <script src='javascript.js'></script>
        <link href="https://fonts.googleapis.com/css?family=Arsenal|Lora|Muli|Source+Sans+Pro|Playfair+Display&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
        <link rel='stylesheet' href='css/styles.css'>

        <title>$clubstr: $userstr</title>
        </head>
_INIT;

require_once 'functions.php';

if (isset($_SESSION['user'])) {
    $user     = $_SESSION['user'];
    $loggedin = TRUE;
    $userstr  = "Logged in as: $user";
}
else $loggedin = FALSE;

echo <<<_HEADER_OPEN
    
    <body>
            <header>
            
_HEADER_OPEN;

if ($loggedin) {
echo <<<_LOGGEDIN

            <nav><ul>
                <li><a href='members.php?view=$user'>Home</a></li>
                <li><a href='members.php'>Members</a></li>
                <li><a href='friends.php'>Friends</a></li>
                <li><a href='messages.php'>Messages</a></li>
                <li><a href='profile.php'>Edit Profile</a></li>
                <li><a href='vault.php'>File Vault</a></li>
                <div class="dropdown">
                <li>
                <a href=''>Games</a>
                <div class="dropdown-content">
                <a href="game1.php">Pac-Man</a>
                <a href="game2.php">Frogger</a>
                <a href="game3.php">Connect 4</a>
                </div>
                </li>
                </div>
                <li><a href='logout.php'>Log out</a></li>
                
            </ul></nav>
_LOGGEDIN;
} else {
echo <<<_GUEST

            <nav><ul>
                <li><a href='index.php'>Home</a></li>
                <li><a href='signup.php'>Sign Up</a></li>
                <li><a href='login.php'>Log In</a></li>
            </ul>
            </nav>
_GUEST;
 }

echo <<<_HEADER_CLOSE

        </header>
<!--        <div class='username'>$userstr</div>-->
        <div id="content">
        
_HEADER_CLOSE;


