<?php


include("dbconnect.php");

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  echo "Form Submitted";

    $oldpassword = mysqli_real_escape_string($conn, $_POST["old_password"]);
    $newpassword = mysqli_real_escape_string($conn, $_POST["new_password"]);
    $confirmpassword = mysqli_real_escape_string($conn, $_POST["confirm_password"]);

    if (empty($oldpassword) || empty($newpassword) || empty($confirmpassword)) {

        $error = "All fields are required.";

    } elseif ($newpassword != $confirmpassword) {

        $error = "New password and confirm password do not match.";

    } elseif (strlen($newpassword) < 8) {

        $error = "Password must be at least 8 characters.";

    } elseif (!isset($_SESSION['user_id'])) {

        $error = "Please login again.";

    } else {

        $user_id = $_SESSION['user_id'];

        $selectQuery = "SELECT * FROM user WHERE id='$user_id'";
        $result = mysqli_query($conn, $selectQuery);

        if (mysqli_num_rows($result) == 1) {

            $user = mysqli_fetch_assoc($result);
             $_SESSION['user_id'] = $user['id'];

            if ($user['password'] == $oldpassword) {

                $updateQuery = "UPDATE user SET password='$newpassword' WHERE id='$user_id'";

                if (mysqli_query($conn, $updateQuery)) {

                    echo "Password updated successfully.";

                    header("Location: dashboard.php");
                     exit();

                } else {

                    $error = "Password update failed.";
                }

            } else {

                $error = "Old password is incorrect.";
            }

        } else {

            $error = "User not found.";
        }
    }
}

if (!empty($error)) {
    echo $error;
}
?>
