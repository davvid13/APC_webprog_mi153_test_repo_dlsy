<h2><?php echo $title; ?></h2>
 
<table border='1' cellpadding='4'>
    <tr>
        <td><strong>Firstname</strong></td>
        <td><strong>Lastname</strong></td>
        <td><strong>Nickname</strong></td>
		<td><strong>E-mail</strong></td>
		<td><strong>Gender</strong></td>
    </tr>
<?php foreach ($news as $news_item): ?>
        <tr>
            <td><?php echo $news_item['first_name']; ?></td>
            <td><?php echo $news_item['last_name']; ?></td>
			<td><?php echo $news_item['nick_name']; ?></td>
			<td><?php echo $news_item['email']; ?></td>
			<td><?php echo $news_item['gender']; ?></td>
            <td>
                <a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View</a> | 
                <a href="<?php echo site_url('news/edit/'.$news_item['id']); ?>">Edit</a> | 
                <a href="<?php echo site_url('news/delete/'.$news_item['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
</table>
