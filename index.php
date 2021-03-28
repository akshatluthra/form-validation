<?php
  $message_sent = false;
  if(isset($_POST['email']) && $_POST['email'] != ''){
    if( filter_var($_POST['name'], FILTER_VALIDATE_EMAIL)){

      $userName = $_POST['name'];
      $userEmail = $_POST['email'];
      $messageSubject = $_POST['subject'];
      $message = $_POST['message'];
    
      $to = "akshatluthra981@gmail.com";
      $body = "";
    
      $body .= "From: ".$userName. "\r\n";
      $body .= "Email: ".$userEmail. "\r\n";
      $body .= "Message: ".$message. "\r\n";
    
      mail($to,$messageSubject,$body);

      $message_sent = true;
    }
    else {
      $invalid_class_name = "form-invalid";
    }
  }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
    .form-invalid{
      outline: 2px solid red !important;
    }
    </style>

    <title>Document</title>
</head>
<body>
<?php
if($message_sent):
?>
    <h3>Thanks We'll be in touch</h3>

    <?php
    else:
      ?>
<div class = "container">
    <form action = "index.php" method = "post" class = "form">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name" class = "form-label">Your Name</label>
      <input type="text" class="form-control <?= $invalid_class_name ?? "" ?>" id="name" name="name" placeholder="Akshat Luthra" tabindex="1" required>
    </div>
    <div class="form-group col-md-6">
      <label for="email" class = "form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="akshatluthra@gmail.com" tabindex="2" required>
    </div>
  </div>
  <div class="form-group">
    <label for="subject" class = "form-label">Subject</label>
    <input type="text" class="form-control" id="subject" name = "subject" placeholder="Your Subject" tabindex="3" required>
  </div>
  <div class="form-group">
    <label for="message" class = "form-label">Message</label>
    <textarea class = "form-control" rows = "5" cols = "50" id  ="message" name = "message" placeholder = "enter your message..." tabindex="4"></textarea>
   
  </div>
  <div>
  <button type="submit" class="btn btn-primary">Submit</button></div>
</form></div>
<?php
endif;
?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</html>