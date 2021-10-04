<?php

$controllers = array('pages'=>['home', 'error'],
'Quotation'=>['index','newQuotation','addQuotation','search','updateForm','updateQuotation','deleteConfirm','delete'],
'QuotationDetail'=>['index','newQuotationDetail','addQuotationDetail','search','updateForm','update','deleteConfirm','delete'],
'ProductRate'=>['index','newProductRate','addProductRate','search','updateForm','updateProductRate','deleteConfirm','delete']); //list controller

function call($controller, $action){
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case "pages":  $controller = new PagesController();
                      break;
        case "Quotation": //echo "routeQuotation1";
                          require_once("./models/QuotationModel.php");
                          //echo "routeQuotation2";
                          require_once("./models/CustomerModel.php");
                          require_once("./models/EmployeeModel.php");
                          $controller = new QuotationController();  
                         break;
        case "ProductRate": require_once("./models/ProductRateModel.php");
                            require_once("./models/ProductModel.php");
                            $controller = new ProductRateController();
                            break;
        case "QuotationDetail" : 
                    require_once("./models/QuotationDetailModel.php");
                    require_once("./models/productColorModel.php");
                    require_once("./models/ProductModel.php");
                        $controller = new QuotationDetailController();
                        break;

    }

    $controller->{$action}();
}

if(array_key_exists($controller, $controllers)) 
{    if(in_array($action, $controllers [$controller]))
    {    call($controller, $action); }
    else
    {    call('pages', 'error'); }

}
else
{    call('pages', 'error');} 
?>