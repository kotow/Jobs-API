<?php

namespace Lib;

class Database {

    private static $db = null;

    private function __construct() {
        $host = DB_HOST;
        $username = DB_USERNAME;
        $password = DB_PASSWORD;
        $database = DB_DATABASE;

        $db = new \mysqli( $host, $username, $password, $database );

        self::$db = $db;
    }

    public static function get_instance() {
        static $instance = null;

        if( null === $instance ) {
            $instance = new static();
        }

        return $instance;
    }

    public static function get_db() {
        return self::$db;
    }
}
