<?php
 function connectToDatabase(){
     $username = $_POST['username'];
     $password = $_POST['password'];
     try {
         $pdo= new PDO('mysql:host='.LOCAL_DB_HOST.';dbname='.LOCAL_DB_NAME.';', LOCAL_DB_USER, LOCAL_DB_PASS);
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

         $stmt= $pdo->prepare( 'SELECT *FROM '.TABLE_STUDENTS.' WHERE username =:username AND password =:password');
         $stmt-> execute(array($username, $password));

        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
         if($row ==1){
             $_SESSION['login'] =true;
             header('Location: modules.php');
             exit;
         }else{
             echo '<div> Wrong username or password</div>';
         }



     }
     catch(PDOException $e){
         echo $e->getMessage();

     }

 }
?>