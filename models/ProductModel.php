<?php
class product{
    public $productID;
    public $productName;
    public $description;
    public $minstock;
    public $type;

    public function __construct($productID,$productName,$description,$minstock,$type)
    {
        $this->productID = $productID;
        $this->productName=$productName;
        $this->description=$description;
        $this->minstock=$minstock;
        $this->type=$type;  
    }
    
    public static function getAll(){
        $productList = [];
        require("./connection_connect.php");
        $sql ="SELECT * FROM Product";
        $result = $conn->query($sql);
        while($my_rom == $result->fetch_assoc()){
            $productID = $my_rom[productID];
            $productName = $my_rom[productName ];
            $description = $my_rom[description];
            $minstock = $my_rom[minstock];
            $type = $my_rom[type];
            $productList[]= new product($productID,$productName,$description,$minstock,$type);
        }
        require("./connection_close.php");
        return $productList;
    }
}
?>
