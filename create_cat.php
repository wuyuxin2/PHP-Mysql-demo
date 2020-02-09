<?php
//create_cat.php
include 'connect.php';
include 'header.php';

echo '<h2>Create a category</h2>';
if ($_SESSION['signed_in'] == false | $_SESSION['user_level'] != 1) {
    //the user is not an admin
    echo 'Sorry, you do not have sufficient rights to access this page.';
} else {
    //the user has admin rights
    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        //the form hasn't been posted yet, display it
        echo '<form method="post" action="">
        Category name: <input type="text" name="cat_name" />
        Category description: <textarea name="cat_description"/></textarea>
        <input type="submit" value="Add category" />
     </form>';
    } else {
        //the form has been posted, so save it
        $sql = "INSERT INTO categories(cat_name, cat_description)
       VALUES('" . mysqli_real_escape_string($con, $_POST["cat_name"]) . "', 
       '" . mysqli_real_escape_string($con, $_POST['cat_description']) . "')";
        $result = mysqli_query($con, $sql);
        if (!$result) {
            //something went wrong, display the error
            echo 'Error' . mysqli_error($con);
        } else {
            echo 'New category successfully added.';
        }
    }
}



include 'footer.php';
