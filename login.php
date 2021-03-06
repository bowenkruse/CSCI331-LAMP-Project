<?php
require_once 'header.php';
$error = $user = $pass = "";

if (isset($_POST['user'])) {
    $user = sanitizeString($_POST['user']);
    $pass = sanitizeString($_POST['pass']);

    if ($user == "" || $pass == "")
        $error = 'Not all fields were entered';
    else {
        $result = queryMySQL("SELECT user,pass FROM members WHERE user='$user' AND pass='$pass'");

        if ($result->num_rows == 0) {
            $error = "Invalid login attempt";
        }
        else {
            $_SESSION['user'] = $user;
            $_SESSION['pass'] = $pass;
            die("<h3 style='text-align: center;' >Welcome back, $user.</h3><button class='button-continue' role='button'><a href='members.php?view=$user' style='color: whitesmoke'>Continue</a></button></div><footer></footer></body></html>");

        }
    }
}

echo <<<_END
<div id="login">
    <form method='post' action='login.php'>
        <div data-role='fieldcontain'>
            <label></label>
            <span class='error'>$error</span>
        </div>
        <div data-role='fieldcontain'>
            <label></label>
            <h3>Enter username and password</h3>
        </div>
        <div data-role='fieldcontain'>
            <label>Username</label>
            <input type='text' maxlength='16' name='user' value='$user'>
        </div>
        <div data-role='fieldcontain'>
            <label>Password</label>
            <input type='password' maxlength='16' name='pass' value='$pass'>
        </div>
        <div data-role='fieldcontain'>
            <label></label>
            <input data-transition='slide' type='submit' value='Log me in!' class="button-continue">
        </div>
    </form>
</div>
_END;
require_once 'footer.php';
?>
