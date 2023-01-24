
<?php

include("./config/db.php");

if (isset($_POST['resetpsw']) ) {

    $email = $_POST['email'];
    $newpassword = $_POST['newpassword'];
    $confirmpassword = $_POST['confirmpassword'];

    if (empty($newpassword) || empty($confirmpassword)) {

        echo "Empty Fields";
    } else {
        if ($newpassword == $confirmpassword) {
            $hashed = md5($newpassword);
            $query = "UPDATE user SET User_Password = '$hashed' WHERE User_Email = '$email' ";
            $res = mysqli_query($conn, $query);

            $query_dlt = "DELETE FROM forgot_password WHERE email = '$email' ";
            $res_dlt = mysqli_query($conn, $query_dlt);

            echo "Password is updated successfully! Click <a href='http://localhost/project/signin.php' > here </a> to login again. ";
        } else {
            echo "Passwords do not match";
        }
    }
}
?>