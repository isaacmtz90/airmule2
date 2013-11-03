<?php
session_start();
  // Remember to copy files from the SDK's src/ directory to a
  // directory in your application on the server, such as php-sdk/
  require_once('../php-sdk/facebook.php');

  $config = array(
    'appId' => '738099589550780', //garner: '464540060329220',
    'secret' =>  '13ef58d035c2801bd862ade8b848cd26', //garner: f75c73e6012693bd4c2ec11782f31b53',
  );
   $_SESSION['user'];
  $facebook = new Facebook($config);
  $user_id = $facebook->getUser();

   if($user_id) {
       // We have a user ID, so probably a logged in user.
      // If not, we'll get an exception, which we handle below.
      try {
        $user_profile = $facebook->api('/me','GET');
        $_SESSION['user'] =  json_encode($user_profile);
      // echo json_encode($user_profile);
         session_write_close();
         header('Location: '. '../profile.php');


      } catch(FacebookApiException $e) {
        // If the user is logged out, you can have a 
        // user ID even though the access token is invalid.
        // In this case, we'll get an exception, so we'll
        // just ask the user to login again here.
        $login_url = $facebook->getLoginUrl(); 
       header('Location: '. $login_url);
        error_log($e->getType());
        error_log($e->getMessage());
      }   
    } else {

      // No user, print a link for the user to login
      $login_url = $facebook->getLoginUrl();
      header('Location: '. $login_url);

    }

?>

