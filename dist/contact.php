<?php
//define variables and set to empty values
$success="";

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$to = 'sangyetenphel@gmail.com';
	$subject = "Client";
	$body = '
					<h2>Message </h2>
					<hr>
					<p>Name:<br>'.$name.'</p>
					<p>Email:<br>'.$email.'</p>
					<p>Message:<br>'.$message.'</p>
	';
//headers
	$headers = "MIME-Version: 1.0" ."\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1"."\r\n";
	$headers .= "From: ".$name."<".$email.">"."\r\n";
	$headers .= "Reply-To:" .$email. "\r\n";
	$headers .= "X-Mailer:PHP/" . phpversion();
	$headers .= "X-Priority: 1"."\r\n";
	
//send
$send = mail($to, $subject, $body, $headers);
if($send){
	echo '<br>';
	echo '<div class="alert alert-primary alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Thanks for contacting me. I will be with you shortly.
</div>';
	}
}
?>

  
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
  <link rel="stylesheet" href="css/main.css">
  <link rel="icon" href="img/logo.png" type="image/icon type">
  <title>Contact | Sangye Tenphel</title>
</head>

<body id='contact'>
  <header>
    <div class="menu-btn">
      <div class="btn-line"></div>
      <div class="btn-line"></div>
      <div class="btn-line"></div>
    </div>

    <nav class="menu">
      <div class="menu-branding">
        <div class="portrait"></div>
      </div>
      <ul class="menu-nav">
        <li class="nav-item">
          <a href="index.html" class="nav-link">
            Home
          </a>
        </li>
        <li class="nav-item">
          <a href="about.html" class="nav-link">
            About Me
          </a>
        </li>
        <li class="nav-item">
          <a href="work.html" class="nav-link">
            My Work
          </a>
        </li>
        <li class="nav-item current">
          <a href="contact.html" class="nav-link">
            How To Reach Me
          </a>
        </li>
      </ul>
    </nav>
  </header>

  <div class="container">
    <div class="wrapper animated bounceInLeft">
      <div class="company-info">
        <ul>
          <li><i class="fa fa-road"></i> Queens, New York</li>
          <li><i class="fa fa-phone"></i> (917) 455-4936</li>
          <li><i class="fa fa-envelope"></i> sangyetenphel@gmail.com</li>
        </ul>
        <hr>
        <div class="social">
          <a href="https://www.faceebook.com/sangyetenphel"><i class="fab fa-facebook fa-2x"></i></a>
          <a href="https://www.instagram.com/sangyetenphel"><i class="fab fa-instagram fa-2x"></i></a>
          <a href="https://github.com/sangyetenphel"><i class="fab fa-github fa-2x"></i></a>
          <a href="https://www.linkedin.com/in/sangyetenphel/"><i class="fab fa-linkedin fa-2x"></i></a>
          <a href="mailto:sangyetenphel@gmail.com"><i class="fab fa-google-plus-g fa-2x"></i></a>
		    </div>
      </div>
      <div class="contact">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          <p class="full">
            <label>Name</label>
            <input type="text" name="name" required='required'>
          </p>
          <p class="full"> 
            <label>Email Address</label>
            <input type="email" name="email" required="required">
          </p>
          <p class="full">
            <label>Message</label>
            <textarea name="message" rows="5"></textarea>
          </p>
          <p class="full">
            <button type="submit">SEND</button>
          </p>
        </form>
      </div>
    </div>
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
</body>

</html>