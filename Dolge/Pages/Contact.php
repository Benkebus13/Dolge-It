<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Kontakt</title>
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
    <a href="https://icons8.com/icon/wFfu6zXx15Yk/home"></a>
    <link rel="stylesheet" type="text/css" href="../css/Dolge.css" />
    <link rel="stylesheet" type="text/css" href="../css/Carusell.css"/>
    <link rel="stylesheet" type="text/css" href="../css/burger.css" />
    <link rel="stylesheet" href="../css/Contact-form.css">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>

<div class="wrapper">
    <div class="nav-container">
        <div class="logga"><b>Dolge IT & Support</b></div>

        <div class="menu-btn">
            <div class="menu-btn_burger"></div>
        </div>

        <div class="navbar-links">
          <ul>
            <li><a href="../index.html">Dolge</a></li>
            <li><a href="Exempel.html">Exempel</a></li>
            <li><a href="#">Sidor</a></li>
            <li><a href="Contact.php" class="active">Kontakt</a></li>
            <li><a href="#">Länkar</a></li>
          </ul>
        </div>
    </div>

    <div class="main-container">
     <div class="content">     
      
    <div class="contact-form">
    <h2>Kontakta mig!</h2>
    <form method="post" action="">
    <input type="text" class="form-control" name="name" placeholder="Ditt Namn" required>
    <input type="text" class="form-control" name="phone" placeholder="Ditt telefon nummer" required>
    <input type="email" class="form-control" name="email" placeholder="Ditt mail" required>
    <textarea name="message" placeholder="Ditt meddelande" required></textarea>    

    <div class="g-recaptcha" data-sitekey="6LfJ-7oZAAAAAL3zBJdZdbPWFdRYBi15fQ0P7xfs"></div>

    <input type="submit" name="submit" class="form-control"  value="Skicka meddelande" class="submit-btn">
    </form>

                <div class="status">
        <?php
        if(isset($_POST['submit']))
        {
            $User_name = $_POST['name'];
            $phone = $_POST['phone'];
            $user_email = $_POST['email'];
            $user_message = $_POST['message'];

            $email_from = 'noreply@dolge.se';
            $email_subject = "Nytt formulär inskickat";
            $email_body = "Namn: $User_name.\n". 
                          "Telefon nr: $phone.\n".  
                          "Email: $user_email.\n".  
                          "Meddelande: $user_message.\n";

                $to_email = "it@dolge.se";
                $headers = "From: $email_from \r\n";  
                $headers .= "Reply-To: $user_email\r\n";          

                $secretKey = "6LfJ-7oZAAAAADcJR7JQq2XxVU0qw-AH4_bdiaQk";
                $responseKey = $_POST['g-recaptcha-response'];
                $UserIP = $_SERVER['REMOTE_ADDR'];
                $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$UserIP";

                $response = file_get_contents($url);
                $response = json_decode($response);

                if ($response->success)
                {
                    mail($to_email,$email_subject,$email_body,$headers);
                    echo "Meddelandet har skickats!";
                }
                else
                {
                    echo "<span>Felaktig Captcha, Försök igen!</span>";
                }
        }
        ?>



            </div>

            
        </div>
        
</div>


<div class="right-side">
    <h2>Layouter</h2>
    <h3>Fast startsida</h3>
    <a href="../Pages/Fixed-img.html" target="_blank">
      <img src="../Img/icons/Landingpage.png" alt="Websida" />
    </a>

    <h3>Friends</h3>
    <img src="../Img/icons/friends300squere.png" alt="Whiskey" />
  </div>




  </div>

  

    <div class="footer">
        <p><b>Dolge IT & Support &copy; 2020 </b></p>
    </div>
</div>

    <script src="../js/Burger.js"></script>
    <script src="../js/Carusell.js"></script>
    <script src="https://use.fontawesome.com/1088e0c346.js"></script>

    </body>
</html>