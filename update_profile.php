<form action="profile.php" method="POST">
<table class="Profiletable" border="1">
    
    <tr>
    <td>Avartar</td>
    <td>   <input type="text" name="avatar" value="<?php echo $row_user['image'] ?>"> <img src="<?php echo $row_user['image'] ?>" ></td>
    </tr>
    <tr>
    <td>User name</td>
    <td><input type="text" name="username" value="<?php echo $row_user['username'] ?>"></td>
    </tr>
    <tr>
    <td>Full name</td>
    <td><input type="text" name="fullname" value="<?php echo $row_user['fullname'] ?>"></td>
    </tr>
    <tr>
    <td>Phone</td>
    <td><input type="text" name="phone" value="<?php echo $row_user['phone'] ?>"></td>
    </tr>
    
</table>
<input type="submit" name="updatebut" value="Save">
</form>
