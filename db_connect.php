<?php

class DB_Connect
{
    function __construct()
    {}

    function __destruct()
    {}

    /**
     * Connecting to database
     */
    public function connect()
    { 
        require_once 'config.php';
		// connecting to mysql
        $con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
		// selecting database
        mysql_select_db(DB_DATABASE);
        mysql_query("SET NAMES 'utf8';");
        mysql_query("SET CHARACTER SET 'utf8';");
        // return database handler
        return $con;
    }

    /**
     * Closing database connection
     */
    public function close ()
    {
        mysql_close();
    }

}
?>