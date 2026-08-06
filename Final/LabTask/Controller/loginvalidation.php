<?php
$name ="";
$email ="";
$website ="";
$comment ="";
$gender ="";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $website = trim($_POST["website"] ?? "");
    $comment = trim($_POST["comment"] ?? "");
    $gender = trim($_POST["gender"] ?? "");

    if(!empty($name))
    {
        echo "Name: " . $name;
        echo "<br>";
    }
    else
    {
        echo "Name is Required";
        echo "<br>";
    }
    if(!empty($email))
    {
        echo "Email: " . $email;
        echo "<br>";
    }
    else
    {
        echo "Email is Required";
        echo "<br>";
    }
    if(!empty($website))
    {
        echo "Website: " . $website;
        echo "<br>";
    }
    else
    {
        echo "Website cannot be empty";
        echo "<br>";
    }
    if(!empty($comment) && strlen($comment)>=8)
    {
        echo "Comment: " . $comment;
        echo "<br>";
    }
    else
    {
        echo "Comment must be at least 8 characters";
        echo "<br>";
    }
    if(!empty($gender))
    {
        echo "Gender: " . $gender;
        echo "<br>";
    }
    else
    {
        echo "Gender is Requied";
        echo "<br>";
    }
    
}
?>
