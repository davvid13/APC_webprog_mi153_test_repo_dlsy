<html>
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
	<style/>
		<title>My Website</title>
	</head>
	<body>
		<h1>Exercise 6.4</h1>
		<p><a href="<?php echo site_url('news'); ?>">Home</a> | <a href="<?php echo site_url('news/create'); ?>">Add</a></p>
