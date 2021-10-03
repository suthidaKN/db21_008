<?php
class productColor{
    public $productColorID;
    public $productID;
    public $color;

    public function __construct($productColorID,$productID,$color)
    {
        $this->color=$color;
        $this->productColorID=$productColorID;
        $this->productID=$productID;
    }

    public static function getAll(){
        $producColortList = [];
        require("./connection_connect.php");
        $sql ="SELECT * FROM ProductColor";
        $result = $conn->query($sql);
        while($my_rom == $result->fetch_assoc()){
            $productID = $my_rom[productID];
            $productColorID = $my_rom[productColorID ];
            $color = $my_rom[color];
            $producColortList[]= new productColor($productColorID,$productID,$color);
        }
        require("./connection_close.php");
        return $producColortList;
    }
}