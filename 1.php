<?php
include('connection.php');

if(isset($_POST['save']))
{
    $fullname = $_POST['full_name'];
    $email = $_POST['email_address'];
    $phone = $_POST['phoneno'];
    $age = $_POST['age_']; 
    $add = $_POST['Address'];
    $city = $_POST['cityname'];
    $Qual = $_POST['Qualifications'];
    $Exp = $_POST['Experience'];

    $sql_query ="insert  Into  applicationform (full_name, email_address, phoneno, age_, Address,  cityname, Qualifications,Experience) VALUES('$fullname','$email','$phone','$age','$add','$city','$Qual','$Exp')";

    if(mysqli_query($conn,$sql_query))
    {
    echo "New Details Has Been Uploaded";
    }
    else{
    echo "Eror";
    }
    mysqli_close($conn);

}
header("location:list.php");

?>