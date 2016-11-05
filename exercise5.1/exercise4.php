<!DOCTYPE HTML>  
<html>
<head>
<style>
			h1, h2 				{text-align:center; 
								 color:blue;
								 font-family:courier new;}
					
			img.me 				{float:right;
								 width:60px;}
					
			table 				{width:100%;}
			
			th					{color:blue;
								 font-family:georgia}
					 
			p					{color:blue;
								 font-family:georgia}
								 
			body				{background:black}
					 
			img.basketball		{width:130px;}
			img.video			{width:130px;
								 height:81.2px;}
			img.books			{width:137px;
								 height:81px;}
			img.food			{width:136px;
								 height:81px;}
			img.dog				{width:130px;
								 height:81px;}
			img.friends			{width:130px;
								 height:83px;}
			img.dance			{width:133px;
								 height:85px;}
			img.csgo			{width:138px;
								 height:85px;}
			img.youtube			{width:130px;
								 height:105px;}
			img.google			{width:130px; 
								 height:95px;}
			img.reddit			{width:130px;
								 height:100px;}
			img.nba				{width:130px;
								 height:100px;}			
			img.hltv			{width:132px;
								 height:100px;}
			img.facebook		{width:125px;
								 height:100px;}
			img.gag				{width:130px;
								 height:100px;}
			img.moodle			{width:130px;
								 height:100px;}
			img.mangafox		{width:130px;
								 height:110px;}
			.error  			{color: #FF0000;}
</style>
</head>
<body>  

		<h1>Webprog_Exercise2</h1>
			<h2>What You Do Today Can Improve All Your Tomorrow -Ralph Martson</h2>	
				<img class="me" src="picture.jpg" alt="Me">
			
			<p></p>
			
			<table>
				<tr>
					<th>Fullname:</th>
					<th>Davvid Sy</th>
				</tr>
				
				<tr>
					<th>Nickname:</th>
					<th>Davvid</th>
				</tr>	
			</table>
			
			<p></p><br/>
				<p>Hobbies:</p>
					<img class="basketball" src="basketball.jpg" alt="Play Basketball"/>
					<img class="video" src="controller.jpg" alt="Play video games"/>
					<img class="books" src="book.jpg" alt="Read books"/> 
					<img class="food" src="food.jpg" alt="Eat Food"/>
					<img class="dog" src="dog.jpg" alt="Dogs"/>
					<img class="friends" src="friends.gif" alt="Hanging with friends"/>
					<img class="dance" src="pop.jpg" alt="A little of dancing"/>
					<img class="csgo" src="csgo.jpg" alt="Counter-Strike: Global Offensive"/>
			<br/>
				<p>Favorite Websites:</p>
					<p>Click on icon to see websites!</p></br>
					<a href="http://youtube.com"><img class="youtube" src="youtube.png" alt="Youtube Icon"/> </a>
					<a href="http://google.com"><img class="google" src="google.png" alt="Google Icon"/> </a>
					<a href="http://reddit.com"><img class="reddit" src="reddit.jpg" alt="Reddit Icon" /> </a>
					<a href="http://nba.com"><img class="nba" src="nba.jpeg" alt="NBA Icon" /> </a>
					<a href="http://hltv.org"><img class="hltv" src="hltv.png" alt="HLTV Icon" /> </a>
					<a href="http://facebook.com"><img class="facebook" src="facebook.png" alt="Facebook Icon" /> </a>
					<a href="http://9gag.com"><img class="gag" src="9gag.png" alt="9gag Icon" /> </a>
					<a href="http://moodle2.apc.edu.ph"><img class="moodle" src="moodle.png" alt="Moodle Icon" /> </a>
					<a href="http://mangafox.com"><img class="mangafox" src="mangafox.png" alt="Mange Icon" /> </a>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <p>Name: 		<input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span></p>
  
  <p>E-mail: 	<input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span></p>
  
  <p>Website: 	<input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span></p>
  <br><br>
  <p>Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea></p>
  <br><br>
  Gender:
  <p><input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span></p>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo "<p>$name</p>";
echo "<br>";
echo "<p>$email</p>";
echo "<br>";
echo "<p>$website</p>";
echo "<br>";
echo "<p>$comment</p>";
echo "<br>";
echo "<p>$gender</p>";
?>

</body>
</html>