<?php
function getHtmlHeader()
{
    $html = '<!DOCTYPE html>

<head>
    <title>past examination</title>
    <link type="text/css" rel="stylesheet" href="' . getUrl('/public/css/page-style.css') . '">
    <script type="text/javascript" src="../public/js/js.js"></script>
    <script type="text/javascript" src="../public/js/js_login_pop_up.js"></script>

</head>
<body>';
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
    $nav= '<div id="navigation"><a href="current_news.php" id="it_news" > IT news</a>
          <a href="final_year_project_ideas.php" id="project_ideas" > Final year project ideas</a>
          <a href="past_exams.php" id="papers" >Available papers</a>

          <input type="button" value="Login" id="pop" onclick="formPopup();"/>';

    return $nav;
}
function printLoginForm()dwjqidjiqwd
{
    $error ='';
  $form= '<form id="overlay_form" style="display:none" method="post" action="'.$_SERVER['PHP_SELF'].'" >
    <input onclick="clear_form_elements(this.form); formFadeOut();" type="submit" value="Close" id="close" name="close"/>

     <div class="login_text">Please enter username and password</div>';

    if(!isset($_POST['login_button'])) {
        count($_SESSION['error_login'] = '');
    } else {
        if(isset($_SESSION['error_login'])) {
        if(count($_SESSION['error_login']) > 0)
        {

            foreach($_SESSION['error_login'] AS $value) {
                $error .= $value;
            }

            $form .=$error;
        }


    }
}
    if(isset($_POST['close']))
    {
        unset($_SESSION['error_login']);
    }
  $form .='<label for="username" class="label_username">Username: </label>
         <input type="text" name="username" id="username" placeholder="Username" value="'.(isset($_POST['username'])? $_POST['username'] : '').'"/><br /><br/>

         <label for="password" class="label_password">Password: </label>
         <input type="password" name="password" id="password" placeholder="Password" value="'.(isset($_POST['password'])? $_POST['password'] : '').'"/><br/>
         <input type="submit" value="Login" id="login_button" name="login_button"/>


</form>';

    return $form;
}

?>