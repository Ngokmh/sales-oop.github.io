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

    <title>EDIT PRODUCT</title>
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
        <div class="col-4">
            <h2 class="text-warning fw-bold text-center mb-2"><i class="fa-solid fa-pen-to-square"></i> EDIT USER</h2>

        <table>
            <form action="../actions/edit-product.php?prod_id=<?= $prod['id']?>" method="post">
                <tr class="row">
                    <td class="col mb-3">
                        <label for="prod-name" class="form-label text-secondary">Product Name</label>
                        <input type="text" name="prod_name" id="prod-name" class="form-control" value="<?= $prod['product_name']?>">
                    </td>
                </tr>
                <tr class="row">
                    <td class="col mb-3">
                        <label for="price" class="form-label text-secondary">Price</label>
                        <input type="text" name="price" id="price" class="form-control" value="<?= $prod['price']?>">
                    </td>
                    <td class="col mb-4">
                        <label for="quantity" class="form-label text-secondary">Quantity</label>
                        <input type="text" name="quantity" id="quantity" class="form-control" value="<?= $prod['quantity']?>"required>
                    </td>
                </tr>
                <tr class="row">
                    <td class="col mb-4">
                        <button type="submit" class="btn btn-warning btn-sm px-5 w-100">Edit</button>
                    </td>
                </tr>
                

                

                

                
            </form>
        </table>
        </div>
    </main>

    
</body>
</html>