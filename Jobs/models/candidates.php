<?php

namespace Models;

class Candidates_Model extends Master_Model {

    public function __construct( $args = array() ) {
        parent::__construct( array(
            'table' => 'candidates'
        ) );
    }

    public function get() {
        return parent::find( );
    }
    public function review($id){
        return parent::get($id);
    }
}