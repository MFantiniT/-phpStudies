<?php
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];
      
      $to = 'example@example.com';
      $subject = 'Novo Contato';
      $message = "Nome: $name\nEmail: $email\nMensagem: $message";
      $headers = "De: $email";
      
      if (mail($to, $subject, $message, $headers)) {
         echo "Sua mensagem foi enviada com sucesso!";
      } else {
         echo "Ocorreu um erro ao enviar sua mensagem.";
      }
   }
?>
