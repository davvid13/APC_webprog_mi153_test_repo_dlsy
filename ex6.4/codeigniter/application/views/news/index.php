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
