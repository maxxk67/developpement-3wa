<?php

require 'connect.php';

if(isset($_POST['customer'])) {

    $string = $_POST['customer'];

    $query = "SELECT customerNumber, customerName
              FROM customers
              WHERE customerName
              LIKE '%$string%'";

    $request = $pdo->prepare($query);

    $request->execute([$_POST['customer']]);

    $customers = $request->fetchAll(PDO::FETCH_ASSOC);


    header("Content-Type: Application/json");
    echo json_encode($customers);
}

if(isset($_GET['cust'])) {

    $customerNumber = $_GET['cust'];

    $query = "
        SELECT
            customerNumber,
            customerName,
            contactFirstName,
            contactLastName,
            city,
            addressLine1,
            phone,
            postalCode,
            IFNULL(addressLine2, '') AS addressLine2,
            IFNULL(state, '') AS state,
            country
        FROM customers
        WHERE customerNumber = {$customerNumber}";

    $request = $pdo->prepare($query);

    $request->execute();

    $customer = $request->fetch(PDO::FETCH_ASSOC);

    header("Content-Type: Application/json");
    echo json_encode($customer);

    //include'customer.php';
    //https://live-33.sites.3wa.io/customer-search/index.php?cust=103
}

if(isset($_POST['customerupdate'])) {
    $customer = json_decode($_POST['customerupdate']);

    $request = '
        UPDATE `customers`
        SET `customerName` = ' . "'$customer->customerName'" . ',
            `contactFirstName` = ' . "'$customer->contactFirstName'" . ',
            `contactLastName` = ' . "'$customer->contactLastName'"  . ',
            `city` = ' . "'$customer->city'" . ',
            `addressLine1` = ' . "'$customer->addressLine1'" . ',
            `addressLine2` = ' . "'$customer->addressLine2'" . ',
            `phone` = ' . "'$customer->phone'" . ',
            `postalCode` = ' . "'$customer->postalCode'" . ',
            `state` = ' . "'$customer->state'" . ',
            `country` = ' . "'$customer->country'" .'
        WHERE `customerNumber` = ' . $customer->customerNumber;

    $stmt = $pdo->prepare($request);

    if($stmt->execute()) {
        $message = ['success' => 'Client mis a jour'];

        header("Content-Type: Application/json");

        echo json_encode($message);
    }


}
