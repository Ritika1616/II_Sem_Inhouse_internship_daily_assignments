<?php
include("header.php");
include("checkregistration.php");

?>

    <div class="container mt-5 "
     style= "max-width: 400px;">
       <form action="" method="post">
    <h3 class="mb-3">registration</h3>
    <input type="text" name="name" class="form-control mb-3" placeholder="name" value="<?=$name?>">
    <input type="email" name="email" class="form-control mb-3" placeholder="email" value="<?=$email?>">
    <input type="password" name="password" class="form-control mb-3" placeholder="password" value="<?=$password?>">
    <input type="password" name="currentpassword" class="form-control mb-3" placeholder="confirm password" value="<?=$checkpass?>">
    <label>Skills</label><br>

<input type="checkbox" name="skills[]" value="dsa"> dsa<br>

<input type="checkbox" name="skills[]" value="c++">c++ <br>

<input type="checkbox" name="skills[]" value="c"> c <br>

<input type="checkbox" name="skills[]" value="power bi">power bi <br>
 
<input type="checkbox" name="skills[]" value="bootstrap">bootstrap<br>

<input type="checkbox" name="skills[]" value="json">json<br>

<input type="checkbox" name="skills[]" value="excel">excel<br>

<input type="checkbox" name="skills[]" value="full stack developer">full stack developer<br>

<input type="checkbox" name="skills[]" value="mySQL">my SQL<br>

<input type="checkbox" name="skills[]" value="python">python<br>

    </input>
    <button type="submit" class="btn btn-primary w-100">
    Register
</button>
</form>
</div>

<?php
include ("footer.php");
?>
