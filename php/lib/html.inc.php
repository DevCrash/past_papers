<?php
function getHtmlHeader()
{
    $html = '<!DOCTYPE html>

<head>
    <title>past examination</title>
    <link type="text/css" rel="stylesheet" href="' . getUrl('/public/css/page-style.css') . '">
    <link type="text/css" rel="stylesheet" href="' . getUrl('/public/css/main.css') . '">
    <link type="text/css" rel="stylesheet" href="' . getUrl('/public/css/login.css') . '">
    <script type="text/javascript" src="../public/js/js.js"></script>
    <script type="text/javascript" src="../public/js/js_login_pop_up.js"></script>
    <script type="text/javascript" src="../public/js/main.js"></script>

</head>
<body class="body">';
    return $html;
}
function getHtmlFooter()
{
    $form= '</body>
            </html>';
    return $form;
}
function upperNavigation()
{
    $sessionShowForm ='';
    $nav= '<div class="center navigation">'.
          ' <a href="news.php" > IT news</a>'.
          ' <a href="final_year_project_ideas.php" > Final year project ideas</a>'.
          ' <a href="past_exams.php">Available papers</a>'.
          ' <a href="#" id="activator">Login</a>'.
          '</div>';
    if(isset($_POST['pop'])) {
      $sessionShowForm = $_SESSION['showForm'];
    }
    return $nav;
}
function printLoginForm()
{

  $form= '<form method="post" action="'.$_SERVER['PHP_SELF'].'" id="loginForm">
    <a href="#" id="boxclose">Close</a>

     <div class="login_text">Please enter username and password</div>';

    if(isset($_POST['close']))
    {
        unset($_SESSION['error_login']);
    }

  $form .='<label for="username" class="label_username">Username: </label>
         <input type="text" name="username" id="username" placeholder="Username" value="'.(isset($_POST['username'])? $_POST['username'] : '').'"/><br/><br/>

         <label for="password" class="label_password">Password: </label>
         <input type="password" name="password" id="password" placeholder="Password" value="'.(isset($_POST['password'])? $_POST['password'] : '').'"/><br/>
         <input type="submit" value="Login" id="login_button" name="login_button"/>


</form>';

    return $form;
}

?>