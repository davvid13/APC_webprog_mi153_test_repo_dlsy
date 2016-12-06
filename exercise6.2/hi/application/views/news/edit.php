<h2><?php echo $name; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('news/edit/'.$news_item['user_id']); ?>
<td><label for="text">Gender</label></td>   
   <table>
        <tr>
            <td><label for="name">Name</label></td>
            <td><input type="input" name="name" size="50" value="<?php echo $news_item['name'] ?>" /></td>
        </tr>
        
		
		<tr>
            <td><label for="nickname">Nickname</label></td>
            <td><input type="input" name="nickname" size="50" value="<?php echo $news_item['nickname'] ?>"/></textarea></td>
        </tr>
		   <tr>
            <td><label for="address">Address</label></td>
            <td><input type="input" name="address" size="150" value="<?php echo $news_item['address'] ?>"/></textarea></td>
        </tr>
		 <tr>
		 
		<tr>
                  <input type="radio" name="gender" value="male"> Male
	   <input type="radio" name="gender" value="female"> Female<br> 
		 </tr>
		 
		 <tr>
           
		   <td><label for="website">Website</label></td>
<td><input type="input" name="website" size="50" value="<?php echo $news_item['website'] ?>"/></textarea></td>
        </tr>
		 
		   
            <td><label for="email">Email</label></td>
            <td><input type="input" name="email" size="50" value="<?php echo $news_item['email'] ?>"/></textarea></td>
        </tr>
		 <tr>
            <td><label for="comment">Comment</label></td>
            <td><textarea name="comment" rows="10" cols="40" value="<?php echo $news_item['comment'] ?>"/></textarea></td>
        </tr>
		 <tr>
            <td><label for="cellphone">Cellphone</label></td>
            <td><input type="input" name="cellphone" size="50" value="<?php echo $news_item['cellphone'] ?>"/></textarea></td>
        </tr>
		
		
		
		<tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit news item" /></td>
        </tr>
    </table>
</form>