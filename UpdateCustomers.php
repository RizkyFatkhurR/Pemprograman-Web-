<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
<?php

    include "conn.php";
    $sql= mysqli_query($conn, "select * from customers where customerNumber ='$_GET [kode]'");
    $data=mysqli_fetch_array($sql);
    ?>

    <h1><b>Tambah Data Customers</b></h1>

    <form action = "" method = "post">

    <table>
        <tr>
            <td> Customer Number </td>
            <td><input type = "text" name = "customerNumber" value = "<?php echo  $data ['customerNumber'];?>"></td> 
        </tr>
        <tr>
            <td> Customer Name </td>
            <td> <input type = "text" name = "customerName" value = "<?php echo  $data ['customerName'];?>"></td>
        </tr>
        <tr>
            <td>Contact Last Name</td>
            <td> <input type = "text" name = "contactLastName" value = "<?php echo  $data ['contactLastName'];?>"></td>
        </tr>
        <tr>
            <td>Contact First Name</td>
            <td> <input type = "text" name = "contactFirstName" value = "<?php echo  $data ['contactFirstName'];?>"></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td> <input type = "text" name = "phone" value = "<?php echo  $data ['phone'];?>"></td>
        </tr>
        <tr>
            <td>Address Line 1</td>
            <td> <input type = "text" name = "addressLine1" value = "<?php echo  $data ['addressLine1'];?>"></td>
        </tr>
        <tr>
            <td>Address Line 2</td>
            <td> <input type = "text" name = "addressLine2" value = "<?php echo  $data ['addressLine2'];?>"></td>
        </tr>
        <tr>
            <td>City</td>
            <td> <input type = "text" name = "city" value = "<?php echo  $data ['city'];?>"></td>
        </tr>
        <tr>
            <td>State</td>
            <td> <input type = "text" name = "state" value = "<?php echo  $data ['state'];?>"></td>
        </tr>
        <tr>
            <td>Postal Code</td>
            <td> <input type = "text" name = "postalCode" value = "<?php echo  $data ['postalCode'];?>"></td>
        </tr>
        <tr>
            <td>Country</td>
            <td> <input type = "text" name = "country" value = "<?php echo  $data ['country'];?>"></td>
        </tr>
        <tr>
            <td>Sales Rep Employee Number</td>
            <td> <input type = "text" name = "salesRepEmployeeNumber" value = "<?php echo  $data ['salesRepEmployeeNumber'];?>"></td>
        </tr>
        <tr>
            <td>Credit Limit</td>
            <td> <input type = "text" name = "creditLimit" value = "<?php echo  $data ['creditLimit'];?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type = "submit" value = "simpan" name = "proses"></td>
        </tr>
    </table>
    </form>

    <?php
            include "conn.php";
            if (isset  ($_POST ['proses'])){
            mysqli_query ($conn, "insert into customers set
            customerNumber = '$_POST[customerNumber]',
            customerName = '$_POST[customerName]',
            contactLastName = '$_POST[contactLastName]',
            contactFirstName = '$_POST[contactFirstName]',
            phone = '$_POST[phone]',
            addressLine1 = '$_POST[addressLine1]',
            addressLine2 = '$_POST[addressLine2]',
            city = '$_POST[city]',
            state = '$_POST[state]',
            postalCode = '$_POST[postalCode]',
            country = '$_POST[country]',
            salesRepEmployeeNumber = '$_POST[salesRepEmployeeNumber]',
            creditLimit = '$_POST[creditLimit]'");

            echo "Data Customers Berhasil diperbarui";
            echo "<meta http-equiv=refresh content=1;url='Products.php'>";
        }
    ?>
</body>
</html>