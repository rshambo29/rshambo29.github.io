<?php
class Movie_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }
    
    public function get_movies(){
        $query = $this->db->query(
        'select m.title_txt, c.cat_txt AS category, d.full_name, m.legnth, m.year 
        from movies as m, category as c, directors as d
        where m.cat_id = c.cat_id AND d.director_id = m.director_id');

        return $query->result_array();
    }
}
?>
