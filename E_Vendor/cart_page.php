<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>E-Vendor|Cart</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/cart_style.css">
    </head>
    <body>
        <?php
        include 'include/header.php';
        ?>
        <div class="container">
            <div class="page-header">
                <h2 style="text-align: center; font:italic bold 30px serif;">CART</h2>
            </div>
            <div class="table-responsive">          
  <table class="table table-bordered">
    <thead>
      <tr>
        <th style='background-color: #112d32;text-align: center;color: white;'>No.</th>
        <th style='background-color: #112d32;text-align: center;color: white;'>Item Id</th>
        <th style='background-color: #112d32;text-align: center;color: white;'>Item Name</th>
        <th style='background-color: #112d32;text-align: center;color: white;'>Item Price</th>
        <th style='background-color: #112d32;text-align: center;color: white;'>Quantity</th>
      </tr>
    </thead>
    <tbody style="text-align: center;">
      <tr>
        <td>1</td>
        <td>XYZ</td>
        <td>XYZ</td>
        <td>2000/-</td>
        <td>1</td>
      </tr>
      <tr>
        <td>2</td>
        <td>ABC</td>
        <td>ABC</td>
        <td>3500/-</td>
        <td>1</td>
      </tr>
       <tr>
        <td></td>
        <td></td>
        <td style="font-weight:bold;">Total</td>
        <td style="font-weight:bold;">5500/-</td>
        <td><a href="payment_page.php"><input type="submit" value="Confirm Order" class="btn" style="background-color: #112d32;text-align: center;color: white;"></a></td>
      </tr>
    </tbody>
  </table>
  </div>
        </div> 
        <?php
        include 'include/footer.php';
        ?>
    </body>
</html>
