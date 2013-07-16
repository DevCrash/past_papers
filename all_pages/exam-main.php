<?php
include('../local.inc.php');
session_start();

if (isset($_POST['login_button'])) {
    usernamePasswordVerification();
}
if(isset( $_SESSION['error_login'])) {

}
echo getHtmlHeader();
echo upperNavigation();
echo '<div id="page_body">
</div>';
echo printLoginForm();


echo getHtmlFooter();
?>