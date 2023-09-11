<?php
    session_start();

    require "../classes/User.php";
    require "../classes/Product.php";

    $prod_obj = new Product;
    $all_products = $prod_obj->getAllProducts();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="../assets/css/style.css">

    <title>DASHBOARD</title>
</head>
<body>
    <nav class="nav mt-2 mx-2">
        
        <div class="nav-bar w-100">
            <table class="w-100">
                <tr class="row">
                    <td class="col">
                        <a href="dashboard.php" class="h2"><i class="fa-solid fa-house"></i></a>
                    </td>
                    <td class="col text-center">
                        <h2 class="h3 pt-2 text-secondary">Welcome <?= $_SESSION['full_name'] ?></h2>
                    </td>
                    <td class="col text-end">
                        <form action="../actions/logout.php" method="post">
                            <button type="submit" class="h2 text-danger bg-transparent border-0"><i class="fa-solid fa-user-minus"></i></button>
                        </form>
                    </td>
                </tr>
            </table>
            
            
        </div>
        
        
    </nav>

    <main class="row justify-content-center gx-0 mt-3">
        <div class="col-6">
            

            <table class="table table-hover align-middle">
                <h1>Product List</h1>
                <thead>
                    <tr>
                        <th class="bg-dark text-white">ID</th>
                        <th class="bg-dark text-white">Product NAME</th>
                        <th class="bg-dark text-white">Price</th>
                        <th class="bg-dark text-white">Quantity</th>
                        <th class="bg-dark text-white"></th>
                        <th class="bg-dark text-white"></th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php
                    while($prod = $all_products->fetch_assoc()){
                    ?>
                    <tr>
                        <td><?= $prod['id']?></td>
                        <td><?= $prod['product_name']?></td>
                        <td><?= $prod['price']?></td>
                        <td><?= $prod['quantity']?></td>
                        <td>
                            <form action="../actions/delete-product.php?prod_id=<?= $prod['id']?>" method="post">
                                <a href="edit-product.php?prod_id=<?= $prod['id']?>" class="btn btn-warning" title="Edit"><i class="fa-solid fa-pen"></i></a>
                                
                                <button type="submit" class="btn btn-danger border-0">
                                    <a href="#" class="text-white"><i class="bg-danger fa-solid fa-trash"></i></a>
                                </button>
                            </form>
                        </td>
                        <td>
                            <a href="buy-product.php?prod_id=<?= $prod['id']?>" class="btn btn-success"><i class="fa-solid fa-cart-shopping"></i></a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
    
</body>
</html>