function checkPalindrome($inputString) {
 if (strrev($inputString) == $inputString){ 
        return true; 
    }
    else{
        return false;
    }
}