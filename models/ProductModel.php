<?php

    class Product{

        public $PID;
        public $PName;

        public function __construct($PID, $PName){
            $this->PID = $PID;
            $this->PName = $PName;
        }

        public static function getAll(){
            $productList = [];
            require("connection_connect.php");
            $sql = "SELECT * FROM Product";
            $result = $conn->query($sql);
            while ($my_row = $result->fetch_assoc()) {
                $PID = $my_row[P_ID];
                $PName = $my_row[P_Name];
                $productList[] = new Product($PID ,$PName);
            }
            require("connection_close.php");
            return $productList;
        }

    }