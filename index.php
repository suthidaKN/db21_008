<?php

if(isset($_GET['controller'])&&isset($_GET['action']))
{
    $controller = $_GET['controller'];
    $action = $_GET['action'];
}else
{
    $controller = 'pages';
    $action = 'home';
}
?>
<html>
<head></head>
    <body>
    <?php echo "controller = ".$controller.", action = ".$action;?>
    <br>[<a href="http://158.108.207.4/db21/db21_008/?controller=pages&action=home">Home </a>] 
        [<a href="http://158.108.207.4/db21/db21_008/?controller=quotation&action=index">quotation</a>]
        [<a href="http://158.108.207.4/db21/db21_008/?controller=quotationDetail&action=index">quotationDetail</a>]
        [<a href="http://158.108.207.4/db21/db21_008/?controller=product&action=index">product</a>]
      
    <br>

   

    <?php require_once("./routes.php"); ?>
    
</body>   
</html>