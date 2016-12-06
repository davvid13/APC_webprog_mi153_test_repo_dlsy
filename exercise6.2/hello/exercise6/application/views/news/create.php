<h2><?php echo $name; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('news/create'); ?>    
Gender:
	<table>
          
		  
		  
 

	   <tr>
            <td><label for="title">Name</label></td>
            <td><input type="input" name="name" size="50" /></td>
        </tr>
		    <tr>
            <td><label for="text">Nickname</label></td>
            <td><input type="input" name="nickname" size="50" /></td>
        </tr>
 <tr>
       <input type="radio" name="gender" value="male"> Male
	   <input type="radio" name="gender" value="female"> Female<br>       
</tr>
 	  <tr>
            <td><label for="text">Website</label></td>
         <td><input type="input" name="website" size="50" /></td>
        </tr>
		 	  <tr>
            <td><label for="text">Address</label></td>
            <td><textarea name="address" rows="10" cols="40"></textarea></td>
        </tr>
		 <tr>
            <td><label for="text">E-mail</label></td>
            <td><input type="input" name="email" size="50" /></td>
        </tr>
	
		        <tr>
            <td><label for="text">Comment</label></td>
            <td><textarea name="comment" rows="10" cols="40"></textarea></td>
        </tr>
		        
    
        
		       <tr>
            <td><label for="text">Cellphone Number</label></td>
     <td><input type="input" name="cellphone" size="50" /></td>
        </tr>
		
         
		 
		 
		 
		 
		 
		 
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="ADD TO DATABASE" /></td>
        </tr>
    </table>    
</form>
