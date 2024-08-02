<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $adress = $_POST['adress'];
    $country = $_POST['country'];
    $gender = $_POST['gender'];
    $skills = $_POST['skills'];
    $userName = $_POST['userName'];
    $password = $_POST['password'];

    $regexName = '/^[a-zA-Z ]*$/';
    $regexUsername = '/^[a-zA-Z\d]*$/';
    $regexPassword = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[?\!@#$%^&*])[a-zA-Z\d?\!@#$%^&*]{8,}$/';


    if(empty($firstname) || empty($lastname)){
        echo("the first and last name must by enter<br>");
        return;
    }
    if(preg_match($regexName, $firstname) == 0 || preg_match($regexName, $lastname) == 0) {
        echo("Place Enter vaild name withot number or special chars"
            ." regular expression <br>");
        return;
    }
    if(empty($gender)){
        echo("please select gender");
        return;
    }

    if(!preg_match($regexUsername, $userName)){
        echo("UserName must not containt special chars!<br>"); 
        return;
    }else{
        if(empty($userName)){
            echo("Username is required<br>");
            return;
        }
    }

    if(empty($password)){
        echo("password is required<br>");
        return;
    }else{
        if(!preg_match($regexPassword, $password)){
            echo("password must containt atleast one special char, one capital char, one number and 8 chars<br>");
            return;
        }
    }


    if($gender == 'male'){
        echo "Thanks Mr " . $firstname . " " .$lastname . "<br><br>";
    }
    elseif($gender == 'female'){
        echo "Thanks Miss " . $firstname . " " .$lastname . "<br><br>";
    }

    echo('<br>please Review Your information<br>');

    echo "<br><br>";

    echo "Your Name is " . $firstname . " " . $lastname . "<br><br>";

    echo "Adress is " . $adress . "<br><br>";

    echo "Your skills is <br>";

    for($i = 0; $i< sizeof($skills);$i++){
        echo $skills[$i] . "<br>";
    }

    echo "Your country is " . $country . "<br><br>";

    echo "Your department is " . $_POST['dapart'];
}
?>