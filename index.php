<?php
session_start();
require_once 'header.php';

echo "<h3 style='text-align: center; margin-top: 100px'>Welcome to $clubstr. </h3>";
echo "<div style='text-align: center; margin-bottom: 40px'>";

if ($loggedin) 
    echo " $user, you are logged in";
else           
    echo 'Please sign up, or log in if you\'re already a member.';

echo "<div class='row'>";

echo "<div class='column'>";
echo "<p></p>";
echo "<h3 class='upload-header'>Create unique profiles!</h3>";
echo "<img src = 'img/Screen%20Shot%202021-10-13%20at%209.15.37%20PM.png' alt='Profile preview' style='width: 100%'>";
echo "</div>";

echo "<div class='column'>";
echo "<h3 class='upload-header'>Message friends</h3>";
echo "<img src = 'img/messages.png' alt='Profile preview' style='width: 100%'>";
echo "</div>";

echo "</div>";

echo "<div class='row'>";

echo "<div class='column'>";
echo "<h3 class='upload-header'>Post images for everyone to see!</h3>";
echo "<img src = 'img/vault.png' alt='Profile preview' style='width: 100%'>";
echo "</div>";

echo "<div class='column'>";
echo "<h3 class='upload-header'>Most importantly play games in the arcade</h3>";
echo "<img src = 'img/game.png' alt='Profile preview' style='width: 400px'>";
echo "</div>";

echo "</div>";
echo <<<_END
    </div><br>
_END;

require_once 'footer.php';
?>