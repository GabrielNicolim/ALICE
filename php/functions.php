<?php
    function cleanString($string) {
        $badWords = array('SELECT','select' ,'DROP','drop','TABLE','table','INSERT','insert','GROUP BY','group by','DELETE','delete');
        return trim(preg_replace('/[^A-Za-zà-úÀ-Ú0-9\@\#\.\,\s]/', '', str_replace($badWords, '', $string)));
    }

    function cleanNumber($string) {
        return preg_replace('/[^0-9\.\,\e]/', '', $string);
    }

    function cleanEmail($badString) {
        return cleanString(filter_var($badString, FILTER_SANITIZE_EMAIL));
    }

    function generateFakePassword() {
        return password_hash("something", PASSWORD_BCRYPT);
    }

    function getUserIP() {
        $ip = $_SERVER['REMOTE_ADDR'];
 
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? null;
        }
    
        return $ip;
    }

    function isPasswordSecure($password_user) {
        $letterCount = 0; 
        $numberCount = 0;

        for($i = 0; $i < strlen($password_user); $i++) {
            if( ctype_upper($password_user[$i]) ) {
                $letterCount++;
            }
            else if ( is_numeric($password_user[$i]) ) {
                $numberCount++;
            }
        }
        
        if($letterCount < 1 || $numberCount < 1 || strlen($password_user) < 6 || strlen($password_user) > 256 ) {
            return false;
        } else {
            return true;
        }
        
    }
    