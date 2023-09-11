<?php
session_start();
require "../classes/User.php";
require "../classes/Product.php";

    $prod_obj = new Product;
    $id = $_GET['prod_id'];
    $prod = $prod_obj->getProduct($id);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/style.css">

    <title>BUY PRODUCT</title>
</head>
<body>
    <div class="nav mt-2 mx-2">
        <div class="home">
            <a href="dashboard.php" class="h2"><i class="fa-solid fa-house"></i></a>
        </div>
        
        <div class="logout ms-auto">
            <form action="../actions/logout.php" method="post">
                <button type="submit" class="h2 text-danger bg-transparent border-0"><i class="fa-solid fa-user-minus"></i></button>
            </form>
        </div>
        
    </div>

    <main class="row justify-content-center gx-0">
        <table class="w-50">
            <thead class="rpw">
                <th class="col"><h1 class="text-success fw-bold mb-2"><i class="fa-solid fa-cart-shopping"></i> BUY PRODUCT</h1></th>
            </thead>
            <form action="pay-product.php?prod_id=<?= $prod['id']?>" method="post" class="w-100">
                <tr class="row">
                    <td class="col mb-3">
                        <label for="prod-name" class="form-label text-secondary">Product Name</label>
                        <h1 name="product_name"><?= $prod['product_name']?></h1>
                    </td>
                </tr>
                <tr class="row">
                    <td class="col mb-3">
                        <label for="price" class="form-label text-secondary">Price</label>
                        <h1 name="price">$ <?= $prod['price']?></h1>
                    </td>
                    <td class="col mb-4">
                        <label for="quantity" class="form-label text-secondary">Quantity</label>
                        <h1 name="quantity"><?= $prod['quantity']?></h1>
                    </td>
                </tr>
                <tr class="row">
                    <td class="col mb-3">
                        <label for="quantity" class="form-label text-secondary">Buy Quantity</label>
                        <input type="number" name="buy_quantity" id="quantity" class="form-control w-75 mx-auto">
                    </td>
                </tr>
                <tr class="row">
                    <td class="col mb-4">
                        <button type="submit" class="btn btn-success btn-sm px-5 w-100">Pay</button>
                    </td>
                </tr>
            </form>
        </table>
        
    </main>

    
</body>
</html>