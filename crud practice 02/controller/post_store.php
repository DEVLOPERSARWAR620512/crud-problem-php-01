<?php

   session_start();
  if(isset($_POST['submit'])){

    $errors = [];     // error msg
    $request = $_POST; //request from



    $title = $request['title'];
    $detail = $request['detail'];
    $author = $request['author'];
     if(empty($title)){
        echo "please write the title";
     }elseif(strlen($title) > 10){
        $msg = "your over writtng title";
        $errors['title'] = $msg;
     }
     if(empty($detail)){
         echo "writting detail";
     }elseif(strlen($detail) > 100){
        $msg = "your over writtng title";
        $errors['title'] = $msg;
     }
     if(empty($author)){
       echo "wrtting the author name";
     }elseif(strlen($author) > 10){
        $msg = "your over writtng title";
        $errors['title'] = $msg;
     }
     if(count($errors) > 0){
        $_SESSION['errors'] = $errors;
        header('location: ../index.php');
     }else{
        echo "not found";
     }
  }else{
    echo "click the submit button";
  }
?>