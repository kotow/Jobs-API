<?php

namespace Controllers;

class Jobs_Controller extends Master_Controller {

    protected $layout = 'default.php';

    public function __construct() {
        parent::__construct( get_class(), 'jobs', '/views/jobs/' );
    }

    public function index() {
        $jobs = $this->model->find();

        $template_file = DX_ROOT_DIR . $this->views_dir . 'index.php';

        include_once DX_ROOT_DIR . '/views/layouts/' . $this->layout;
    }
}