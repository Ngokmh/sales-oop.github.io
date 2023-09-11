<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Register</title>
</head>
<body>
    <div style= "height: 100vh">
        <div class = "row h-100 m-0">
            <div class="card w-50 my-auto mx-auto">
                <div class="card-header bg-white border-0 py-3">
                    <h1 class="text-center text-danger fw-bold"><i class="fa-solid fa-user-plus"></i> Registration</h1>
                </div>

                <div class="card-body">
                    <form action="../actions/register.php" method="post">
                        <div class = "row mb-3">
                                <div class="col">
                                <label for="first-name" class="form-label">First Name</label>
                                <input type="text" name="first_name" id="first-name" class="form-control" required>
                            </div>

                            <div class="col">
                                <label for="last-name" class="form-label">Last Name</label>
                                <input type="text" name="last_name" id="last-name" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" id="username" class="form-control fw-bold" maxlength="15" required>
                            </div>
                        </div>
                        
                        <div class="row mb-5">
                            <div class="col">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control fw-bold" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-danger text-white w-100">Register</button>
                            </div>
                        </div>
                    </form>
                    <p class="text-center mt-3 small">Registered already? <a href="../views/login.php">Log in.</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>