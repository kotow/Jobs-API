<?php

namespace Controllers;

class Master_Controller {

    protected $layout = 'default.php';

    protected $views_dir =  '/views/master/';

    protected $model = null;

    protected $class_name = null;

    public function __construct( $class_name = '\Controllers\Master_Controller', $model = 'master', $views_dir = '/views/master/' ) {
        // Get caller classes
        $this->class_name = $class_name;

        $this->model = $model;
        $this->views_dir = $views_dir;

        include_once DX_ROOT_DIR . "models/{$this->model}.php";
        $model_class = "Models\\" . ucfirst( $this->model ) . "_Model";

        $this->model = new $model_class( array( 'table' => 'none' ) );

    }

    public function home() {
        $template_file = DX_ROOT_DIR . $this->views_dir . 'home.php';

        include_once DX_ROOT_DIR . '/views/layouts/' . $this->layout;
    }

    public function index() {
    }

}