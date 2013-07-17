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
?>

<div id="page_body" class="center">
    <div class="overlay" id="overlay" style="display:none;"></div>
    <div class="box" id="box">
        <h1>Login Form</h1>
        <?php echo printLoginForm(); ?>
    </div>
</div>
<?php



echo getHtmlFooter();
?>