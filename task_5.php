<?php
function generatePassword($length) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $password = '';
    
    // at least one lowercase, uppercase, special character, numbers
    $password .= $chars[rand(0, 25)]; 
    $password .= $chars[rand(26, 51)]; 
    $password .= $chars[rand(52, 61)]; 
    $password .= $chars[rand(62, strlen($chars) - 1)]; 
    
    // Generating the remaining characters
    for ($i = 4; $i < $length; $i++) {
        $randomIndex = rand(0, strlen($chars) - 1);
        $password .= $chars[$randomIndex];
    }
    
    // shuffling for randomness of the generated password
    $password = str_shuffle($password);
    
    return $password;
}

$length = 12;
$password = generatePassword($length);

echo "Generated Password: $password";

?>


/* 
Task 5: Password Generator

Create a PHP function called generatePassword($length) that generates a random password of 
the specified length. The password should include lowercase letters, uppercase letters, numbers, 
and special characters (!@#$%^&*()_+). Write a PHP program to generate a password with a length 
of 12 characters using this function and print the password.
*/