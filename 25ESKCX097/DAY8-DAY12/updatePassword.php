<?php
include("header2.php");
include("checkupdate.php");
include("dashboardverticalcontent.php");
?>

<div class="container mt-5 "
     style= "max-width: 400px;">
       <form action="" method="post">
    <h3 class="mb-3">registration</h3>
    <input type="password" name="old_password" class="form-control mb-3" placeholder="Old password" >
    <input type="password" name="new_password" class="form-control mb-3" placeholder=" new password" >
    <input type="password" name="confirm_password" class="form-control mb-3" placeholder="confirm password" >

    <button type="submit" class="btn btn-primary w-100">
    login
</button>
</form>
</div>




<?php include("footer.php");
include("dashboardfooter.php");
?>
