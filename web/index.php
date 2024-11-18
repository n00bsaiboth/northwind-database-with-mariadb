<?php
    namespace App;

    require_once "src/initialize.php";

    use App\Database\Database;
    use App\Customer\Customer;

    $database = new Database();
    
    $pdo = $database->connect();

    $customer = new Customer($pdo);

    $singleCustomer = $customer->getSingleCustomer(validateInt(1));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Northwind database with MariaDB</title>
</head>
<body>
    <?php
        // var_dump($singleCustomer);

        echo "Hello, " . validateString($singleCustomer["first_name"]) . " " . validateString($singleCustomer["last_name"]) . "!";
    ?>
</body>
</html>