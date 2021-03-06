<?php
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function validate_not_empty($data) {
        if(empty($data))
            return false;
        return true;
    }

    function validate_email($email) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            return false;
        return true;
    }

    // * Only letters allowed
    function validate_text($data) {
        if (!preg_match("/^[a-zA-Z]*$/",$data)) 
            return false;
        return true;
    }
    
    function validate_text_with_space($data) {
        if (!preg_match("/^[a-zA-Z ]*$/",$data)) 
            return false;
        return true;
    }

    function validate_number($data) {
        if(!preg_match("/^[0-9]*$/",$data))
            return false;
        return true;
    }
?> 