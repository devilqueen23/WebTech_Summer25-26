<?php
include "../Controller/loginvalidation.php";
echo "<h1> PHP Form Validation Example </h1>";
?>
<!DOCTYPE html>
<html>
<head>
    <script>
        function collect_data()
        {
            let name =document.getElementById("name").value.trim();
            let email = document.getElementById("email").value.trim();
            let website = document.getElementById("website").value.trim();
            let comment = document.getElementById("comment").value.trim();
            let gender = document.getElementById("gender");
            let valid = true;
            if(name.length <5)
                {
                    message+="Name Should be 5 Char";
                    valid = false;
                }
            if(email.length <5)
                {
                    message+="User Name Should be 5 Char";
                    valid = false;
                }
            if(!valid)
                {
                    alert(message);
                }
                return valid;
        }
    </script>
</head>
<body>
    <font color="red">* required field</font>
    <form method="post" action="" onsubmit="return collect_data()">
        <table>
            <tr>
                <td><label for ="name">Name: </label></td>
                <td><input type ="text" id="name" name="name">
                <font color="red">*</font>
                <?php echo $name ?>
                </td>
            </tr>
            <tr>
                <td><label for ="email">E-mail: </label></td>
                <td><input type ="text" id="email" name="email">
                <font color="red">*</font>
                <?php echo $email ?>
                </td>
            </tr>
            <tr>
                <td><label for ="website">Website: </label></td>
                <td><input type ="text" id="website" name="website">
                <?php echo $website ?>
                </td>
            </tr>
            <tr>
                <td><label for="comment">Comment: </label></td>
                <td><textarea id="comment" name="comment" rows="6" cols="40"></textarea>
                <?php echo $comment ?>
                </td>
            </tr>
            <tr>
                <td><label for gendder>Gender: </label></td>
                <td>
                    <input type ="radio" id="Male" name="Gender" value="Male">
                    <label for ="Male">Male</label>
                    <input type ="radio" id="Female" name="Gender" value="Female">
                    <label for ="Female">Female</label>
                    <input type ="radio" id="Other" name="Gender" value="Other">
                    <label for ="Other">Other</label>
                    <font color="red">*</font>
                    <?php echo $gender ?>
                </td>    
            </tr>
            <tr>
                <td>
                <input type="submit" id="submit" value="Submit">
            </td>
            </tr>
            


        </table>
    </form>
</body>
</html>