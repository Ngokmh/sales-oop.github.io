<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/style.css">

    <title>ADD PRODUCT</title>
</head>
<body>

    <main class="row justify-content-center gx-0">
        <div class = "row h-100">
            <div class="card w-50 my-auto mx-auto mt-3">
                <div class="card-header bg-white border-0 py-3">
                    <h1 class="text-center text-info fw-bold"><i class="fa-solid fa-box"></i> Add Product</h1>
                </div>

                <div class="card-body">
                    <form action="../actions/add-product.php" method="post">
                        <div class = "row mb-3">
                                <div class="col">
                                <label for="prod-name" class="form-label text-secondary">Product Name</label>
                                <input type="text" name="prod_name" id="prod-name" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label for="price" class="form-label text-secondary">Price</label>
                                <div class="input-group">
                                    <div class="input-group-text bg-light">$</div>
                                    <input type="text" name="price" id="price" class="form-control fw-bold" required>
                                </div>
                            </div>
                            <div class="col">
                                <label for="quantity" class="form-label text-secondary">Quantity</label>
                                <input type="number" name="quantity" id="quantity" class="form-control fw-bold" required>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col">
                                <button type="submit" class="btn btn-info text-white w-100">Add</button>
                            </div>
                        </div>
                    </form>
                        <div class="row">
                            <div class="col">
                                <a href="../views/dashboard.php" class="btn btn-secondary w-100">Cancel</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        </div>
    </main>

    
</body>
</html>