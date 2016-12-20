<!DOCTYPE html>
<head>
<h1>Exercise 6.4</h1>	


<p>Hobbies:</p>
					<img class="basketball" alt="Play Basketball" src="<?php echo base_url('/image/basketball.jpg'); ?>" />
					<img class="video" alt="Play video games" src="<?php echo base_url('/image/controller.jpg'); ?>"/>
					<img class="books" alt="Read books" src="<?php echo base_url('/image/books.jpg'); ?>"/> 
					<img class="food" alt="Eat Food" src="<?php echo base_url('/image/food.jpg'); ?>"/>
					<img class="dog" alt="Dogs" src="<?php echo base_url('/image/dog.jpg'); ?>"/>
					<img class="friends" alt="Hanging with friends" src="<?php echo base_url('/image/friends.gif'); ?>"/>
					<img class="dance" alt="A little of dancing" src="<?php echo base_url('/image/pop.jpg'); ?>"/>
					<img class="csgo" alt="Counter-Strike: Global Offensive" src="<?php echo base_url('/image/csgo.jpg'); ?>"/>
			<br/></br>
				<p>Favorite Websites:</p>	
					<a href="http://youtube.com"><img class="youtube" alt="Youtube Icon" <?php echo base_url('/images/youtube.png'); ?>/> </a>
					<a href="http://google.com"><img class="google" alt="Google Icon"<?php echo site_url('/images/google.png'); ?>/> </a>
					<a href="http://reddit.com"><img class="reddit" alt="Reddit Icon" <?php echo site_url('/images/reddit.jpg'); ?>/> </a>
					<a href="http://nba.com"><img class="nba" alt="NBA Icon" <?php echo site_url('/images/nba.jpg'); ?>/> </a>
					<a href="http://hltv.org"><img class="hltv" alt="HLTV Icon" /> </a>
					<a href="http://facebook.com"><img class="facebook" alt="Facebook Icon" <?php echo site_url('/images/facebook.png'); ?>/> </a>
					<a href="http://9gag.com"><img class="gag" alt="9gag Icon" <?php echo site_url('/images/9gag.png'); ?>/> </a>
					<a href="http://moodle2.apc.edu.ph"><img class="moodle" alt="Moodle Icon" <?php echo site_url('/images/moodle.png'); ?>/> </a>
					<a href="http://mangafox.com"><img class="mangafox" alt="Mange Icon" <?php echo site_url('/images/mangafox.png'); ?>/> </a>
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
