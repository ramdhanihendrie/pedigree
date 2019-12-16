<form action="?module=addfamilyproc#pos" method="post" enctype="multipart/form-data">
    <input type="hidden" name="stat" value="<?php echo $_POST['stat'] ?>">
    <input type="hidden" name="no_family" value="<?php echo $_SESSION['no_family']?>">
    <table>
        <tr>
            <td>First Name</td>
            <td><input type="text" name="firstname"></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="lastname"></td>
        </tr>
        <tr>
            <td>Date of Birth</td>
            <td><input type="date" name="birthdate"></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="female">Female</td>
        </tr>
        <tr>
            <td>Photo</td>
            <td><input type="file" name="file" style="margin-left: 90px;"></td>
        </tr>
    </table>
    <input type="submit" value="Save">
</form>