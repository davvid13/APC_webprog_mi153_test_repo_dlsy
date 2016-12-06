<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Website</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<
</script>
</head>
<body>
<center>
<body>
        <div id="header">
        <h1>My Website</h1>
        </div>
        <h2>Excercise</h2>
        <hr/>
        <p>My name is Ray Miguel Hidalgo. </p>
        <p>I am usually called Ray</p>
        <p>I do have a typical hobby for a college student</p>
        <p>Play games, either computer based or android based</p>
        <p>I also like multiplayer games like steam offers</p>

        <img src="image.jpg" width="200" height= "250px" alt="My Photo" />
        <br>
        <br>
        <a href="https://www.facebook.com/rayhidalgo96">Facebook</a>
        <br>
        <a href="https://twitter.com/Rmiguelhidalgo">Twitter</a>
        
        <p id="demo">what is my favorite color</p>

        <button type="button" onclick="document.getElementById('demo').innerHTML = 'Blue!'">Answer</button>

        <p id="demo1">do i like pets?</p>

        <button type="button" onclick="document.getElementById('demo1').innerHTML = 'Yes!'">Answer</button>

        <p id="demo2">What pet do I have?</p>

        <button type="button" onclick="document.getElementById('demo2').innerHTML = 'Dogs!'">Answer</button>

        <p id="demo3">How many dogs do i have?</p>

        <button type="button" onclick="document.getElementById('demo3').innerHTML = 'I Have six of them!'">Answer</button>

        <p id="demo4">Who among them you like the most?</p>

        <button type="button" onclick="document.getElementById('demo4').innerHTML = 'The labrador retriever, because it is the most expensive among them.'">Answer</button>
</div>
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
