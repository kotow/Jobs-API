<?php

namespace Models;

class Jobs_Model extends Master_Model {

    public function __construct( $args = array() ) {
        parent::__construct( array(
            'table' => 'jobs'
        ) );
    }

    public function get_jobs() {
        return parent::find( );
    }
}