<?php
//$first_name = $last_name = $middle_name = $address = $contactnum = $DOB = $placeofBirth = $gender = $guardian = $civilStatus = $yearLevel = $course = $schoolYear = $email = ""; 
$fname = $_POST['first_name'];
$lname=$_POST['last_name'];
$mname=$_POST['middle_name'];
$address=$_POST['address'];
$contact=$_POST['contactnum'];
$bday=$_POST['DOB'];
$pbirth=$_POST['placeofBirth'];
$select_gender = $_POST['gender'];
if ($select_gender == 'male') {
    //echo "male";
}
else if ($select_gender == 'female') {
   // echo "female";
}
$guardian=$_POST['guardian'];
$civilstatus=$_POST['civilStatus'];
$yearlevel=$_POST['yearLevel'];
$course=$_POST['course'];
$schoolyear=$_POST['schoolYear'];
$email=$_POST['email'];

include("conditions.php");

 //1. insputs shoud not be empty or null.
function isEmpty($str){
    if($str){
        $cleanStr = trim($str);
        return (strlen($cleanStr)<= 0)? true : false;
    }
}
//2. date format should mm/dd/year
function Newdateformat($str = null){
    if($str){
        $newFormat = DateTime::createFromFormat('Y-d-m', $str);
        return($newFormat->format('m-d-Y'))? true : false;
    }



//3.contact number should be string
function isANumber($str = null){
    if($str){
        return (is_numeric($str))? false : true;
    }
}
//4.contact pattern +63 prefix
function checkcontact($str = null){
    if($str){
        return (substr($str, 0, 3) == '+63' && strlen($str)==13 && preg_match('/[\+]{0,1}(\d{10,13}|[\(][\+]{0,1}\d{2,}[\13)]*\d{5,13}|\d{2,6}[\-]{1}\d{2,13}[\-]*\d{3,13})/',$str))? false : true;
    }
}



//5.first and last name should not be less 2 in the string.
function correctLength($str = null){
    if($str){
        return(strlen($str)>2)? false : true;
    }
}
//6.inputs should not start in special character.
function startWithSpecialChar($str = null){
    if($str){
        $firstchar = substr($str, 0, 1);
        return (preg_match('/[^a-zA-Z\d]/', $firstchar))? true : false;
    }
}


//7.input should not start with a number.
function startWithNumber($str = null){
    $firstchar = substr($str, 0, 1);
    return (is_numeric($firstchar))? true : false;
}
//8.should not contain html tag.
function containHtmlTags($str = null){
    if($str){
        return (preg_match('/>(?:(?<t>[^<]*))/', $str))? true : false;
    }
}

//9. validate email
function checkEmail($str = null){
    if($str){
       return (preg_match('/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/', $str))? false : true;
    }
}

?>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         