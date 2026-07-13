<?php
include("dbconnect.php");
include("header2.php");
include("dashboardverticalcontent.php");
?>
<div class="container mt-5 "
     style= "max-width: 400px;">
       <form action="" method="post">
    <h3 class="mb-3">updateprofile</h3>
    <input type="text" name="name" class="form-control mb-3" placeholder="Old password" value="<?=$_SESSION["user_name"]?>">
    <input type="file" name="file"  >
    //purani file se lena h code yaha

    

    <button type="submit" class="btn btn-primary w-100">
    login
</button>
</form>
</div>
<?php
include("dashboardfooter.php");
include("footer.php");
?>
