<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
 $result_set=mysqli_query($con,$sql_query);
 $fetched_row=mysqli_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
 $first_name = $_POST['first_name'];
 $last_name = $_POST['last_name'];
 $nick_name = $_POST['nick_name'];
 $email = $_POST['email'];
 $gender = $_POST['gender'];
 // variables for input data

 // sql query for update data into database
 $sql_query = "UPDATE users SET first_name='$first_name',last_name='$last_name',nick_name='$nick_name', email='$email', gender='$gender' WHERE user_id=".$_GET['edit_id'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysqli_query($con,$sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='index.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: index.php");
}
?>
<!DOCTYPE html>
<head>
<style>
			h1, h2 				{text-align:center; 
								 color:white;
								 font-family:courier new;}
					
			img.me 				{float:right;
								 width:100px;}
					
			table 				{width:100%;}
			
			th					{color:white;
								 font-family:georgia}
					 
			p					{color:white;
								 font-family:georgia}
								 					 
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
			
			{
 margin:0;
 padding:0;
}
body
{
 background:black;
 font-family:"Courier New", Courier, monospace;
}
#header
{
 width:100%;
 height:50px;
 background:#00a2d1;
 color:#f9f9f9;
 font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
 font-size:35px;
 text-align:center;
}
#header a
{
 color:#fff;
 text-decoration:blink;
}
#body
{
 margin-top:50px;
}
table
{
 width:80%;
 font-family:Tahoma, Geneva, sans-serif;
 font-weight:bolder;
 color:#999;
 margin-bottom:80px;
}
table a
{
 text-decoration:none;
 color:#00a2d1;
}
table,td,th
{
 border-collapse:collapse;
 border:solid #d0d0d0 1px;
 padding:20px;
}
table td input
{
 width:97%;
 height:35px;
 border:dashed #00a2d1 1px;
 padding-left:15px;
 font-family:Verdana, Geneva, sans-serif;
 box-shadow:0px 0px 0px rgba(1,0,0,0.2);
 outline:none;
}
table td input:focus
{
 box-shadow:inset 1px 1px 1px rgba(1,0,0,0.2);
 outline:none;
}
table td button
{
 border:solid #f9f9f9 0px;
 box-shadow:1px 1px 1px rgba(1,0,0,0.2);
 outline:none;
 background:#00a2d1;
 padding:9px 15px 9px 15px;
 color:#f9f9f9;
 font-family:Arial, Helvetica, sans-serif;
 font-weight:bolder;
 border-radius:3px;
 width:49.5%;
}
table td button:active
{
 position:relative;
 top:1px;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WEBPROGMI153_SY</title>
<center>
</head>
<body>

<h1>Webprog_Exercise2</h1>
			<h2>What You Do Today Can Improve All Your Tomorrow -Ralph Martson</h2>	
				<img class="me" src="picture.jpg" alt="Me">
			
			
			
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
			
			
				<p>Hobbies:</p>
					<img class="basketball" src="basketball.jpg" alt="Play Basketball"/>
					<img class="video" src="controller.jpg" alt="Play video games"/>
					<img class="books" src="book.jpg" alt="Read books"/> 
					<img class="food" src="food.jpg" alt="Eat Food"/>
					<img class="dog" src="dog.jpg" alt="Dogs"/>
					<img class="friends" src="friends.gif" alt="Hanging with friends"/>
					<img class="dance" src="pop.jpg" alt="A little of dancing"/>
					<img class="csgo" src="csgo.jpg" alt="Counter-Strike: Global Offensive"/>
			<br/></br>
				<p>Favorite Websites:</p>	
					<a href="http://youtube.com"><img class="youtube" src="youtube.png" alt="Youtube Icon"/> </a>
					<a href="http://google.com"><img class="google" src="google.png" alt="Google Icon"/> </a>
					<a href="http://reddit.com"><img class="reddit" src="reddit.jpg" alt="Reddit Icon" /> </a>
					<a href="http://nba.com"><img class="nba" src="nba.jpeg" alt="NBA Icon" /> </a>
					<a href="http://hltv.org"><img class="hltv" src="hltv.png" alt="HLTV Icon" /> </a>
					<a href="http://facebook.com"><img class="facebook" src="facebook.png" alt="Facebook Icon" /> </a>
					<a href="http://9gag.com"><img class="gag" src="9gag.png" alt="9gag Icon" /> </a>
					<a href="http://moodle2.apc.edu.ph"><img class="moodle" src="moodle.png" alt="Moodle Icon" /> </a>
					<a href="http://mangafox.com"><img class="mangafox" src="mangafox.png" alt="Mange Icon" /> </a>
					<p>Click on icon to see websites!</p></br>


<div id="header">
 <div id="content">
    <label>CRUD Operations With PHP and MySql - By Cleartuts</label>
    </div>
</div>

<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td><input type="text" name="first_name" placeholder="First Name" value="<?php echo $fetched_row['first_name']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="last_name" placeholder="Last Name" value="<?php echo $fetched_row['last_name']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="nick_name" placeholder="City" value="<?php echo $fetched_row['nick_name']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="email" placeholder="E-mail" value="<?php echo $fetched_row['email']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="gender" placeholder="Gender" value="<?php echo $fetched_row['gender']; ?>" required /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>