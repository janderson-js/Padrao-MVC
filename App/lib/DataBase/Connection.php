<?php

    abstract class Connection
    {
        private static $con;

        public static function getCon()
        {
            if(self::$con == null){
                self::$con = new PDO('mysql: host=localhost; dbname=mini-blog;', 'root', '');
            }
            return self::$con;
        }
    }