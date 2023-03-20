<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
</head>
<body>
    <h1><b>DATA CUSTOMERS</b></h1>

    <table border="1">
        <tr>
            <th>customerNumber</th>
            <th>customerName</th>
            <th>contactLastName</th>
            <th>contactFirstName</th>
            <th>phone</th>
            <th>addressLine1</th>
            <th>addressLine2</th>
            <th>city</th>
            <th>state</th>
            <th>postalCode</th>
            <th>country</th>
            <th>salesRepEmployeeNumber</th>
            <th>creditLimit</th>
            <th colspan="2">Aksi</th>
        </tr>

<?php
    include "conn.php"; ?>

   <?php $ambildata = mysqli_query($conn, "select * from customers"); ?>
    <?php while ($tampil = mysqli_fetch_array($ambildata))?>
        <tr>
            <td><?php echo $tampil[customerNumber]?></td>
            <td>$tampil[customerName]</td>
            <td>$tampil[contactLastName]</td>
            <td>$tampil[contactFirstName]</td>
            <td>$tampil[phone]</td>
            <td>$tampil[addressLine1]</td>
            <td>$tampil[addressLine2]</td>
            <td>$tampil[city]</td>
            <td>$tampil[state]</td>
            <td>$tampil[postalCode]</td>
            <td>$tampil[country]</td>
            <td>$tampil[salesRepEmployeeNumber]</td>
            <td>$tampil[creditLimit]</td>
            <td><a href = '?kode=$tampil[customerNumber]'>Hapus </a></td>
            <td><a href = 'UpdateCustomers.php?kode =$tampil[customerNumber]'>Ubah</a></td>
        </tr>;

    

    </table>

<?php
    if (isset($_GET ['kode'])){
        mysqli_query($conn, "delete from barang where customerNumber = '$_GET [kode]'");
        echo "Data telah terhapus";
        echo "<meta http-equiv=refresh content=2;url='Customers.php'>";
    }
?>
</body>
</html>