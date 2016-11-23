<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	  public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');                    /***** LOADING HELPER TO AVOID PHP ERROR ****/
        $this->load->model('Welcome_model','welcome'); /* LOADING MODEL * Welcome_model as welcome */
    }


    /**************************  START FETCH OR VIEW FORM DATA ***************/
	
	
	
	public function index()
	{
		 $this->data['view_data']= $this->welcome->view_data();
		 $this->load->view('welcome_message',$this->data, FALSE);
	}
	/****************************  END FETCH OR VIEW FORM DATA ***************/


    /****************************  START OPEN ADD FORM FILE ******************/
	
	public function add_data()
    {
        $this->load->view('add');
		<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2 class="text-center">Insert Add data Form in codeignter sample </h2>
            <br><br>
          <form method="post" action="<?php echo site_url('Welcome/submit_data'); ?>" name="data_register">
            <label for="Name">Enter you name</label>
              <input type="text" class="form-control" name="username" required >
            <br>
            <label for="Email">Enter you Email</label>
              <input type="email" class="form-control" name="email" required>
            <br>
            <label for="Sex">Select Sex</label><br>
              <input type="radio" name="sex" checked value="Male" required > Male &nbsp;  
              <input required type="radio" name="sex" value="Female" > Female
            <br><br>
            <label for="Email">Address</label>
              <textarea name="address" class="form-control" rows="6" required ></textarea>
            <br><br>
              <button type="submit" class="btn btn-primary pull-right">Submit</button>
            <br><br>
          </form>
        </div>
    </div>
</div>
    }
    /****************************  END OPEN ADD FORM FILE ********************/

    
    /****************************  START INSERT FORM DATA ********************/
    public function submit_data()
    {
    $data = array('username'                   => $this->input->post('username'),
                  'email'                      => $this->input->post('email'),
                  'sex'                        => $this->input->post('sex'),
                  'address'                    => $this->input->post('address'),
                  'created_date'               => date("m/d/y h:i:s"),
                  'status'                     => 'Y');
    
    $insert = $this->welcome->insert_data($data);
    $this->session->set_flashdata('message', 'Your data inserted Successfully..');
    redirect('welcome/index');
    }
    /****************************  END INSERT FORM DATA ************************/


    /****************************  START FETCH OR VIEW FORM DATA ***************/
    public function view_data()
    {
    $this->data['view_data']= $this->welcome->view_data();
    $this->load->view('welcome_message', $this->data, FALSE);
	
	<div id="container" class="container" >

<!--******************** START SESSION SETFLASH MESSAGES *****************************-->
       <?php if($this->session->flashdata('message')){?>
          <div class="alert alert-success">      
            <?php echo $this->session->flashdata('message')?>
          </div>
        <?php } ?>
<!--************************* END SESSION SETFLASH MESSAGES   ************************-->


        <br>
        <div align="center"> 
          <a href="<?php echo site_url('Welcome/add_data'); ?>">Click to add new Record</a>
        </div>
        <br>


<!--*************************  START  DISPLAY ALL THE RECODEDS *************************-->
        <table class="table table-bordered table-hover table-striped" >
            <thead>
            <tr>
                <th>No.</th>
                <th>User name</th>
                <th>Email</th>
                <th>Sex</th>
                <th>Address</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>

            <tbody>
              <?php
                if(isset($view_data) && is_array($view_data) && count($view_data)): $i=1;
                foreach ($view_data as $key => $data) { 
                ?>
                <tr <?php if($i%2==0){echo 'class="even"';}else{echo'class="odd"';}?>>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $data['username']; ?></td>            
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['sex']; ?></td>
                    <td><?php echo $data['address']; ?></td>
                    <td><a href="<?php echo site_url('Welcome/edit_data/'. $data['id'].''); ?>">Edit</a></td>            
                    <td><a href="<?php echo site_url('Welcome/delete_data/'. $data['id'].''); ?>">Delete</a></td>
                </tr>
                <?php
                    $i++;
                      }
                    else:
                ?>
                <tr>
                    <td colspan="7" align="center" >No Records Found..</td>
                </tr>
                <?php
                    endif;
                ?>

            </tbody>                                
        </table>
<!--*********************  END  DISPLAY ALL THE RECODEDS ******************************-->
</div>
    }
    /****************************  END FETCH OR VIEW FORM DATA ***************/

    
    /****************************  START OPEN EDIT FORM WITH DATA *************/
    public function edit_data($id)
    {
    $this->data['edit_data']= $this->welcome->edit_data($id);
    $this->load->view('edit', $this->data, FALSE);
	
	<div id="container" class="container">

<div class="row">
 <div class="col-md-8 col-md-offset-2">
        <h2 class="text-center">Edit data Form in codeignter sample </h2>
        <br><br>
    <?php
      if(isset($view_data) && is_array($view_data) && count($view_data)): $i=1;
      foreach ($edit_data as $key => $data) { 
    ?>
    <form method="post" action="<?php echo site_url('Welcome/update_data/'.$data['id'].''); ?>" name="data_register">
        <label for="Name">Enter you name</label>
        <input type="text" class="form-control" name="username" value="<?php echo $data['username']; ?>" required >
        <br>
        <label for="Email">Enter you Email</label>
        <input type="email" class="form-control" name="email" value="<?php echo $data['email']; ?>" required>
        <br>
        <label for="Sex">Select Sex</label><br>
        <input type="radio" name="sex" <?php if($data['sex'] == 'Male' ) { echo 'checked'; } ?> value="Male" required > Male 
        &nbsp;  <input required type="radio" name="sex" <?php if($data['sex'] == 'Female' ) { echo 'checked'; } ?> value="Female" > Female
        <br><br>
        <label for="Email">Address</label>
        <textarea name="address" class="form-control" rows="6" required ><?php echo $data['address']; ?></textarea>
        <br><br>
        <button type="submit" class="btn btn-primary pull-right">Submit</button>
        <br><br>
    </form>
     <?php
        }endif;
     ?>
    <br><br>
 </div>
</div>
  
</div>
    }
    /****************************  END OPEN EDIT FORM WITH DATA ***************/


    /****************************  START UPDATE DATA *************************/
    public function update_data($id)
    {
    $data = array('username'                   => $this->input->post('username'),
                  'email'                      => $this->input->post('email'),
                  'sex'                        => $this->input->post('sex'),
                  'address'                    => $this->input->post('address'),
                  'created_date'               => date("m/d/y h:i:s"),
                  'status'                     => 'Y');
    $this->db->where('id', $id);
    $this->db->update('user_data', $data);
    $this->session->set_flashdata('message', 'Your data updated Successfully..');
    redirect('welcome/index');
    }
    /****************************  END UPDATE DATA ****************************/


    /****************************  START DELETE DATA **************************/
    public function delete_data($id)
    {  
    $this->db->where('id', $id);
    $this->db->delete('user_data');
    $this->session->set_flashdata('message', 'Your data deleted Successfully..');
    redirect('welcome/index');
    }
    /****************************  END DELETE DATA ***************************/

}


