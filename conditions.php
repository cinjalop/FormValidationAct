<?php
global $fname, $lname , $mname, $address, $contact, $bday, $pbirth, $select_gender, $guardian, $civilstatus, $yearlevel, $course, $schoolyear, $email; 



if(isEmpty($fname) || isEmpty($lname) || isEmpty($mname)|| isEmpty($address) 
    || isEmpty($contact) || isEmpty($bday) || isEmpty($pbirth) || isEmpty($select_gender)
    || isEmpty($guardian)|| isEmpty($civilstatus) || isEmpty($yearlevel)
    || isEmpty($course)|| isEmpty($schoolyear) || isEmpty($email)) 
{
    echo " Null input is not valid. <br>";
}
//2.
if(Newdateformat($bday)){
    
}

//3.
if (isANumber($contact)){
    echo "Contact Number should only contain numbers. <br>";
} 
//4.
if (Checkcontact($contact)){
    echo "Invalid input pattern of contact number. <br>";
}

//5.
if (correctLength($fname)){
    echo "First name is too short. <br>";
}
if (correctLength($lname)){
    echo "Last name is too short. <br>";
}

if (startWithSpecialChar($fname)){
    echo "First name should not start with special character (ex. !,#,*..) <br>";
}
if (startWithSpecialChar($lname)){
    echo "Last name should not start with special character (ex. !,#,*..) <br>";
}
if (startWithSpecialChar($mname)){
    echo "Middle name should not start with special character (ex. !,#,*..) <br>";
}
if (startWithSpecialChar($address)){
    echo "Address should not start with special character (ex. !,#,*..) <br>";
}
if (startWithSpecialChar($pbirth)){
    echo "Place of birth should not start with special character (ex. !,#,*..) <br>";
}
if (startWithSpecialChar($guardian)){
    echo "Guardian name should not start with special character (ex. !,#,*..) <br>";
}
if (startWithSpecialChar($civilstatus)){
    echo "Civil status should not start with special character (ex. !,#,*..) <br>";
}
if (startWithSpecialChar($schoolyear)){
    echo "School Year should not start with special character, it is year. (ex. !,#,*..) <br>";
}
if (startWithSpecialChar($email)){
    echo "E-mail should not start with special character. (ex. !,#,*..) <br>";
}


//7.
if (startWithNumber($fname) || startWithNumber($lname) || startWithNumber($mname)
|| startWithNumber($pbirth) || startWithNumber($select_gender)
|| startWithNumber($guardian)|| startWithNumber($civilstatus)
|| startWithNumber($course) || startWithNumber($email)){
    echo "Inputs must not start with number. <br>";
}
//8.
if (containHtmlTags($fname) || containHtmlTags($lname) || containHtmlTags($mname)|| containHtmlTags($address) 
|| containHtmlTags($contact) || containHtmlTags($pbirth) || containHtmlTags($guardian)|| containHtmlTags($civilstatus) 
|| containHtmlTags($yearlevel)|| containHtmlTags($email)){
    echo "HTML Tags are not allowed. <br>";
}


//9.
if (checkEmail($email)){
    echo "Invalid email format. <br>";
}

else{
    echo "success";
}

?>