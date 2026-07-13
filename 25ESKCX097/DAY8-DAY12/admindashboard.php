<?php
include("header2.php");
include("dbconnect.php");
?>

<div class="container mt-5">
    <h3 class="mb-3">User List</h3>

    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>

        <?php
        $selectQuery = "SELECT * FROM user";
        $result = mysqli_query($conn, $selectQuery);

        while($user = mysqli_fetch_assoc($result))
        {
        ?>
            <tr>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['email']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>

<?php
include("footer.php");
include("dashboardfooter.php");
?>
