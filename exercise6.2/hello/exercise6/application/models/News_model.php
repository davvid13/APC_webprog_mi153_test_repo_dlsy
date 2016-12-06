<?php
class News_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_news($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('news');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('news', array('slug' => $slug));
        return $query->row_array();
    }
    
    public function get_news_by_id($user_id = 0)
    {
        if ($user_id === 0)
        {
            $query = $this->db->get('news');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('news', array('user_id' => $user_id));
        return $query->row_array();
    }
    
    public function set_news($user_id = 0)
    {
        $this->load->helper('url');
 
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
 
        $data = array(
            'name' => $this->input->post('name'),
            'slug' => $slug,
            'nickname' => $this->input->post('nickname'),
		 
			   'address' => $this->input->post('address'),
          
            'email' => $this->input->post('email'),
		 
			   'website' => $this->input->post('website'),
            
            'comment' => $this->input->post('comment'),
			 
			   'gender' => $this->input->post('gender'),
            
            'cellphone' => $this->input->post('cellphone')
			 
			
        );
        
        if ($user_id == 0) {
            return $this->db->insert('news', $data);
        } else {
            $this->db->where('user_id', $user_id);
            return $this->db->update('news', $data);
        }
    }
    
    public function delete_news($user_id)
    {
        $this->db->where('user_id', $user_id);
        return $this->db->delete('news');
    }
}
