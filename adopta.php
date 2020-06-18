<?php
  $usuaris = array(
       'matilda' => 'adlitam',
       'grassoneta' => 'fresc',
       'piguellada' => 'llet',
       'conxita' => 'energy',
       'blanca' => '121212',
       'flor' => 'basura',
       'marieta' => '123456',
       'peppa' => 'xavier',
       'ramona' => 'tomate',
       'peluda' => 'password'
  );
  $password="";
  $myusername=$_POST['vaca'];
  $mypassword=$_POST['password'];

  $myusername=stripslashes($myusername);
  $mypassword=stripslashes($mypassword);

  $myusername = strtolower($myusername);

  if (isset($usuaris[$myusername])) {
          if ( $usuaris[$myusername] == $mypassword  ) {
              session_start();
              $_SESSION['usuari'] = $myusername;
              $_SESSION['contrasenya']= $mypassword;
              header("location:vaca.php");
          }
          else
          {
            header("location:login.php?error=true");
          }
  } else
  {
    header("location:login.php?error=true");
  }
?>