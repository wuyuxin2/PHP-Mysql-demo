<?php
// signout.php
include 'connect.php';
include 'header.php';

echo '<h2>Sign out</h2>';

if($_SEEION['signed_in'] == true)
{
    $_SESSION['signed_in'] = NULL;
    $_SESSION['user_name'] = NULL;
    $_SESSION['user_id'] = NULL;

    echo 'Succesfully signed out, thank you for visiting.';
}
else
{
	echo 'You are not signed in. Would you <a href="signin.php">like to</a>?';
}

include 'footer.php';
?>