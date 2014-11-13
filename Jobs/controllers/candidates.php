<?php

namespace Controllers;

class Candidates_Controller extends Master_Controller {

    protected $layout = 'default.php';

    public function __construct() {
        parent::__construct( get_class(), 'candidates', '/views/candidates/' );
    }

    public function index() {
        $candidates = $this->model->find();

        $template_file = DX_ROOT_DIR . $this->views_dir . 'index.php';
        include_once DX_ROOT_DIR . '/views/layouts/' . $this->layout;
    }
    public function review() {
        $candidates = $this->model->review($GLOBALS['param']);
        $template_file = DX_ROOT_DIR . $this->views_dir . 'index.php';

        include_once DX_ROOT_DIR . '/views/layouts/' . $this->layout;

    }
}