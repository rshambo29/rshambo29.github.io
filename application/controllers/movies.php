<?php
class Movies extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('movie_model', 'movie');
        $this->load->helper('url_helper');
    }

    public function index(){
        $data['title'] = 'Movies';
        $data['movies'] = $this->movie->get_movies();

        $this->load->view('templates/header', $data);
        $this->load->view('movies/index', $data);
        $this->load->view('templates/footer');
    }
}