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
<style/>
								 
<h2><?php echo $name; ?></h2>
 
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
