<?php
     $message_sent = false;
    if(isset($_POST['email']) && $_POST['email'] != ''){

        if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){

    // submit the form
    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $messageSubject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "it@dolge.se";
    $body = "";

    $body .= "From: ".$userName. "\r\n";
    $body .= "Email: ".$userEmail. "\r\n";
    $body .= "Message: ".$message. "\r\n";

    mail($to,$messageSubject,$body);
    
    $message_sent = true;
}
    else{
        $invalid_class_name = "form-invalid";
    }
        

    }

    
?>

<?php
        if ($message_sent);
    ?>
     
            

        <?php
        T_ELSE:
        ?>


<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kontakt</title>
    <script src="../js/mail.js"></script>
    <link rel="stylesheet" href="../css/webform.css" media="all">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
    


    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
    <a href="https://icons8.com/icon/wFfu6zXx15Yk/home"></a>
    <link rel="stylesheet" type="text/css" href="../css/Dolge.css"/>
    <link rel="stylesheet" type="text/css" href="../css/Carusell.css"/>
    <link rel="stylesheet" type="text/css" href="../css/burger.css" />

  

  </head>
  
  <body>
      
       

<div class="wrapper">
    <div class="nav-container">
        <div class="logga"><b>Dolge IT & Support</b>
        </div>

        <div class="menu-btn">
            <div class="menu-btn_burger">
            </div>
        </div>

        <div class="navbar-links">
          <ul>
            <li><a href="../index.html">Dolge</a></li>
            <li><a href="Exempel.html">Exempel</a></li>
            <li><a href="Sidor.html">Sidor</a></li>
            <li><a href="Kontakt.html" class="active">Kontakt</a></li>
            <li><a href="Links.html">Länkar</a></li>
          </ul>
        </div>
    </div>

    <div class="main-container">
        <div class="content">
          <h1>Dolge IT & Support</h1>


          <div class="container">
            <form action="Kontakt.php" method="POST" class="form">
                <div class="form-group">
                    <label  for="name" class="form-label">Ditt Namn</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Jane Doe" tabindex="1" required>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Din Email</label>
                    <input  type="email" class="form-control <?=$invalid_class_name ?? "" ?>" id="email" name="email" placeholder="jane@doe.com" tabindex="2" required>
                </div>
                <div class="form-group">
                    <label for="subject" class="form-label">Vad du vill ha hjälp med.</label>
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Websida, fakturering " tabindex="3" required>
                </div>
                <div class="form-group">
                    <label for="message" class="form-label">Meddelande</label>
                    <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Skriv ditt meddelande..." tabindex="4"></textarea>
                </div>
                <div>
                    <button type="submit" class="btn">Skicka meddelande!</button>
                </div>
            </form>
        </div>
         
        </div>
        <div class="right-side">
          
        </div>
    </div>

    <div class="footer">
        <p><b>Dolge IT & Support &copy; 2020 </b></p>
    </div>
</div>

    <script src="Js/Burger.js"></script>
    <script src="https://use.fontawesome.com/1088e0c346.js"></script>

   <?php
    T_ENDIF;
   ?>
  </body>
</html>
