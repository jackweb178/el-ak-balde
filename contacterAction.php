<?php 
     include("connexion.php");
     // if(empty($_POST['nom'])      ||
     //    empty($_POST['email'])     ||
     //    empty($_POST['tel'])     ||
     //    empty($_POST['msg'])   ||
     //    !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
     // {
     //    // echo "Aucun argument fourni!";
     //  header('Location: contact.php?no_valid=success');
     //    return false;
     // } 
     function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = strip_tags(htmlspecialchars($data));
        return $data;
     }
     if (isset($_POST['submit']))
     {
          if (!empty($_POST['nom']))
          { 
               if (preg_match("/^[a-zA-Z ]*$/",$_POST['nom'])) {
                    $name= test_input($_POST['nom']);
               }else{
                     $erreur_remplissage_nom='Veillez un nom valde';
                    // header('Location: contact.php?formulaire=non valid');
               }

          }else{
               $erreur_remplissage_nom='Veillez remplire ce champs';
               // header('Location: contact.php?formulaire=non valide');
          }
          if (!empty($_POST['tel']))
          { 
               if (is_numeric($_POST['tel'])) {
                    $phone= test_input($_POST['tel']);
               }else{
                    $erreur_remplissage_phone='Veillez entrer des chiffres ';
                    // header('Location: contact.php?formulaire=non valide');
               }

          }else{
               $erreur_remplissage_phone='Veillez remplire ce champs';
               // header('Location: contact.php?formulaire=non valide');
          }
          if (!empty($_POST['email']))
          { 
               if (filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
                    $email_address= test_input($_POST['email']);
               }else{
                    $erreur_remplissage_email='Veillez une addresse email valide ';
                    // header('Location: contact.php?formulaire=non valide');
               }      
          }else{
               $erreur_remplissage_email='Veillez remplire ce champs';
               // header('Location: contact.php?formulaire=non valide');
          }

          if (!empty($_POST['msg']))
          { 
               $msg= test_input($_POST['msg']);
          }else{
               $erreur_remplissage_msg='Veillez saisir votre message ';
               // header('Location: contact.php?formulaire=non valide');
          }

          $date = date("Y-m-d H:i:s");
      
     if (isset($name) AND isset($phone) AND isset($email_address) AND isset($msg) AND isset($date))
     {
          $to   = 'cherifbalde1996@gmail.com,jackweb178@gmail.com';
          $subject = 'Soumission du formulaire de contacte';
          $message ="Vous avez reçu un nouveau message depuis votre site web.\n\n"."Voici les détails:\n\nNom: $name\n\nEmail: $email_address\n\nTelephone: $phone\n\nMessage:\n$msg";
          $headers = 'From: '.$email_address . "\r\n" .
          'X-Mailer: PHP/' . phpversion();

           $req = $bdd->prepare("INSERT INTO `user`(`nom_prenom`,`tel`, `email`, `msg`,`date_enregistrement`) VALUES(:nom,:phone,:mail, :message,:date_enreg)");
           $req->execute(
                array(
                     'nom' => $name,
                     'phone' => $phone,
                     'mail' => $email_address,
                     'message' => $msg,
                     'date_enreg' => $date,
                ));
          $req->closeCursor();
          mail($to, $subject, $message, $headers);

          header('Location: index.php?Soumission=success');
          // return true;
     }else{
          header('Location: contact.php?formulaire=non valide');
     }
}

?>