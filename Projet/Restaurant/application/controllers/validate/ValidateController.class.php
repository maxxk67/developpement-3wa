<?php

class ValidateController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        $validate = new Validate();
        $validate->insertOrder( $_SESSION['cart'], $_SESSION['connected_user']['id']);
        
        unset($_SESSION['cart']);
    }
}