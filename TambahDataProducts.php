 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1><b>Tambah Data Products</b></h1>

    <form action = "" method = "post">

    <table>
        <tr>
            <td> Product Code</td>
            <td><input type = "text" name = "productCode"></td> 
        </tr>
        <tr>
            <td> Product Name </td>
            <td> <input type = "text" name = "productName"></td>
        </tr>
        <tr>
            <td>Product Line</td>
            <td> <input type = "text" name = "productLine"></td>
        </tr>
        <tr>
            <td>Product Scale</td>
            <td> <input type = "text" name = "productScale"></td>
        </tr>
        <tr>
            <td>Product Vendor</td>
            <td> <input type = "text" name = "productVendor"></td>
        </tr>
        <tr>
            <td>Product Description</td>
            <td> <input type = "text" name = "productDescription"></td>
        </tr>
        <tr>
            <td>Quantity In Stock</td>
            <td> <input type = "text" name = "quantityInStock"></td>
        </tr>
        <tr>
            <td>Buy Price</td>
            <td> <input type = "text" name = "buyPrice"></td>
        </tr>
        <tr>
            <td>MSRP</td>
            <td> <input type = "text" name = "MSRP"></td>
        </tr>
    </table>
    </form>

    <?php
            include "conn.php";
            if (isset  ($_POST ['proses'])){
            mysqli_query ($conn, "insert into products set
            productCode = '$_POST[productCode]',
            productName = '$_POST[productName]',
            productLine = '$_POST[productLine]',
            productScale = '$_POST[productScale]',
            productVendor = '$_POST[productVendor]',
            productDescrription = '$_POST[productDescription]',
            quantityInStock = '$_POST[quantityInStock]',
            buyPrice = '$_POST[buyPrice]',
            MSRP = '$_POST[MSRP]'");

            echo "Data Products Baru Berhasil ditambahkan";
        }
    ?>
</body>
</html>