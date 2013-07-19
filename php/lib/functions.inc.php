<?php
function getFile($file){
    if(file_exists(LOCAL_PATH_ROOT.$file)){
        return LOCAL_PATH_ROOT.$file;

    }else{
        return false;
    }
}

function getUrl($file) {
    return LOCAL_PATH_URL . $file;
}
function d($val) {
    echo "<pre>";
    print_r($val);
    echo "</pre>";
}
function usernamePasswordVerification()
{
    $username= $_POST['username'];
    $password= $_POST['password'];
    $_SESSION['error_login'] = array();

    if(empty($password) && empty($username))
    {
        $_SESSION['error_login'][] = '<div id="username_error"> Please enter both fields</div>';
    }elseif(empty($username))
    {
        $_SESSION['error_login'][] = '<div id="username_error">Please enter username</div>';
    }elseif(empty($password))
    {
         $_SESSION['error_login'][] = '<div id="password_error"> Please enter password</div>';
    }

}

?>