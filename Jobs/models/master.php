<?php

namespace Models;

use Lib\Database;

class Master_Model {

    protected $table;
    protected $where;
    protected $columns;
    protected $limit;
    protected $dbconn;

    public function __construct( $args = array() ) {
        $args = array_merge( array(
            'where' => '',
            'columns' => '*',
            'limit' => 0
        ), $args );

        if ( ! isset( $args['table'] ) ) {
            die( 'Table not defined. Please define a model table.' );
        }

		$this->table = $args['table'];
		$this->where = $args['where'];
		$this->columns = $args['columns'];
		$this->limit = $args['limit'];

        $db = Database::get_instance();
        $this->dbconn = $db::get_db();
    }

    public function get( $id ) {
        $results = $this->find( array( 'where' => 'id = ' .$id ) );

        return $results;
    }


    public function find( $args = array() ) {
        $args = array_merge( array(
            'table' => $this->table,
            'where' => '',
            'columns' => '*',
            'limit' => 0
        ), $args );

        $query = "select {$args['columns']} from {$args['table']}";

        if( ! empty( $where ) ) {
            $query .= ' where ' . $where;
        }

        if( ! empty( $limit ) ) {
            $query .= ' limit ' . $limit;
        }

        $result_set = $this->dbconn->query( $query );

        $results = $this->process_results( $result_set );

        return $results;
    }

    protected function process_results( $result_set ) {
        $results = array();

        if( ! empty( $result_set ) && $result_set->num_rows > 0) {
            while($row = $result_set->fetch_assoc()) {
                $results[] = $row;
            }
        }

        return $results;
    }
}