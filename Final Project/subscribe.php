<!DOCTYPE html>

<html lang="en">
<head>
  	<meta charset="utf-8" />
  	<title>Emerald City Boom</title>
  	<link rel="stylesheet" href="styles/photo.css">
</head>

<body>
      <header>
		 <img src="images/main_logo.jpg" alt="Drum" width="180">
		 <hgroup>
			 <h1>Emerald City Boom</h1>
          	 <h2>Indoor Marching Percussion</h2>
		 </hgroup>
		 <nav>
			 <ul>
				 <li><a href="main.html">Home</a></li>
                   	 <li><a href="photo.html">Photos</a></li>
				 <li><a href="video.html">Videos</a></li>
				 <li><a href="member.html">Members</a></li>
				 <li><a href="contact.html">Contact</a></li>
				 <li><a href="sign_up.html">Sign Up</a></li>
			 </ul>
        	</nav>
      </header>
	 <section>
		 <h2>Thank you <?php
		 $first_name = $_POST['first_name'];
		 $email = $_POST['email'];
		 echo $first_name;
		 $dsn =
 		'mysql:host=cssgate.insttech.washington.edu;dbname=kevinp98';
		$username = 'kevinp98';
  		$password = 'Fajpat';
  		// creates PDO object
  		$db = new PDO($dsn, $username, $password);
  		$query = "INSERT INTO email
		VALUES
  		('$email')";
		$insert_count = $db->exec($query);
  		//echo $insert_count;
  		?> for signing up!</h2>
		<p>You will be hearing from us soon! We would be sending information regarding
			our practice schedule, and events that we are doing!
		</p>
	</section>
</body>
</html>
