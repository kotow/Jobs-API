<?php

// Define root dir and root path
define( 'DX_DS', DIRECTORY_SEPARATOR );
define( 'DX_ROOT_DIR', dirname( __FILE__ ) . DX_DS );
define( 'DX_ROOT_PATH', basename( dirname( __FILE__ ) ) . DX_DS );
define( 'DX_ROOT_URL', 'http://' . $_SERVER['HTTP_HOST'] . DX_DS );


include 'config/db.php';

// Define the request home that will always persist in REQUEST_URI
$request_home = DX_DS ;

// Read the request
$request = $_SERVER['REQUEST_URI'];
$components = array();
$controller = 'Master';
$method = 'index';
$param = array();
include_once 'lib/database.php';

include_once 'controllers/master_controller.php';

$master_controller = new \Controllers\Master_Controller();
if ( ! empty( $request ) ) {
    if( !strpos( $request, $request_home ) ) {
        // Clean the request
        $request = substr( $request, strlen( $request_home ) );
        // Fetch the controller, method and params if any
        $components = explode( '/', $request);

        // Get controller and such
        if ( 1 < count( $components ) ) {
            list( $controller, $method ) = $components;
            $param = isset( $components[2] ) ? $components[2] : array();
        }
    }
}

// If the controller is found
if ( isset( $controller ) && file_exists( 'controllers/' . $controller . '.php' ) ) {
    include_once 'controllers/'  . $controller . '.php';

    // Form the controller class
    $controller_class = '\Controllers\\' . ucfirst( $controller ) . '_Controller';

    $instance = new $controller_class();
    var_dump(method_exists( $instance, $method ));
    // Call the object and the method
    if( method_exists( $instance, $method ) ) {
        //call_user_func_array( array( $instance, $method ), array( $param ) );
 		$instance->$method();
    } else {
        // fallback to index
        call_user_func_array( array( $instance, 'index' ), array() );
    }
} else {

    $master_controller->home();
}
