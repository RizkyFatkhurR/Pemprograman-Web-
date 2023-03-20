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
    $sql= mysqli_query($conn, "select * from products where productCode ='$_GET [kode]'");
    $data=mysqli_fetch_array($sql);
    ?>


    <h1><b>Tambah Data Products</b></h1>

    <form action = "" method = "post">

    <table>
        <tr>
            <td> Product Code</td>
            <td><input type = "text" name = "productCode" value = "<?php echo  $data ['productCode'];?>"></td> 
        </tr>
        <tr>
            <td> Product Name </td>
            <td> <input type = "text" name = "productName" value = "<?php echo  $data ['productName'];?>"></td>
        </tr>
        <tr>
            <td>Product Line</td>
            <td> <input type = "text" name = "productLine" value = "<?php echo  $data ['productLine'];?>"></td>
        </tr>
        <tr>
            <td>Product Scale</td>
            <td> <input type = "text" name = "productScale" value = "<?php echo  $data ['productScale'];?>"></td>
        </tr>
        <tr>
            <td>Product Vendor</td>
            <td> <input type = "text" name = "productVendor" value = "<?php echo  $data ['productVendor'];?>"></td>
        </tr>
        <tr>
            <td>Product Description</td>
            <td> <input type = "text" name = "productDescription" value = "<?php echo  $data ['productDescription'];?>"></td>
        </tr>
        <tr>
            <td>Quantity In Stock</td>
            <td> <input type = "text" name = "quantityInStock" value = "<?php echo  $data ['quantityInStock'];?>"></td>
        </tr>
        <tr>
            <td>Buy Price</td>
            <td> <input type = "text" name = "buyPrice" value = "<?php echo  $data ['buyPrice'];?>"></td>
        </tr>
        <tr>
            <td>MSRP</td>
            <td> <input type = "text" name = "MSRP" value = "<?php echo  $data ['MSRP'];?>"></td>
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
            mysqli_query ($conn, "update products set
            productName = '$_POST[productName]',
            productLine = '$_POST[productLine]',
            productScale = '$_POST[productScale]',
            productVendor = '$_POST[productVendor]',
            productDescrription = '$_POST[productDescription]',
            quantityInStock = '$_POST[quantityInStock]',
            buyPrice = '$_POST[buyPrice]',
            MSRP = '$_POST[MSRP]'
            where productCode = '$_GET[kode]',");

            echo "Data Products Berhasil diperbarui";
            echo "<meta http-equiv=refresh content=1;url='Products.php'>";
        }
    ?>
</body>
</html>