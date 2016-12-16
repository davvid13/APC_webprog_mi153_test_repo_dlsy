<!DOCTYPE html>
<head>
<h1>Exercise 6.4</h1>	


<p>Hobbies:</p>
					<img class="basketball" src="/image/basketball.jpg" alt="Play Basketball"/>
					<img class="video" src="/image/controller.jpg" alt="Play video games"/>
					<img class="books" src="/images/book.jpg" alt="Read books"/> 
					<img class="food" src="/images/food.jpg" alt="Eat Food"/>
					<img class="dog" src="/images/dog.jpg" alt="Dogs"/>
					<img class="friends" src="/images/friends.gif" alt="Hanging with friends"/>
					<img class="dance" src="/images/pop.jpg" alt="A little of dancing"/>
					<img class="csgo" src="/images/csgo.jpg" alt="Counter-Strike: Global Offensive"/>
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

<table border='1' cellpadding='9'>
    <tr>
        <td><strong>Name</strong></td>
        <td><strong>Nickname</strong></td>
        <td><strong>Address</strong></td>
		 <td><strong>E-mail</strong></td>
        <td><strong>Website</strong></td>
        <td><strong>Comment</strong></td>
		 <td><strong>Gender</strong></td>
        <td><strong>Cellphone</strong></td>
        <td><strong>Action</strong></td>
    </tr>
<?php foreach ($news as $news_item): ?>
        <tr>
            <td><?php echo $news_item['name']; ?></td>
            <td><?php echo $news_item['nickname']; ?></td>
			<td><?php echo $news_item['address']; ?></td>
            <td><?php echo $news_item['email']; ?></td>
			<td><?php echo $news_item['website']; ?></td>
            <td><?php echo $news_item['comment']; ?></td>
			<td><?php echo $news_item['gender']; ?></td>
            <td><?php echo $news_item['cellphone']; ?></td>
            <td>
                <a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View</a> 
                <a href="<?php echo site_url('news/edit/'.$news_item['user_id']); ?>">Edit</a>  
                <a href="<?php echo site_url('news/delete/'.$news_item['user_id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
</table>
