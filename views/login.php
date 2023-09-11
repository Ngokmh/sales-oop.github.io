<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login</title>
</head>
<body>
    <div style="height: 100vh">
        <div class="row h-100 m-0">
            <div class="card w-50 my-auto mx-auto">
                <div class="card-header bg-white border-0 py-3">
                    <h1 class="text-center text-primary fw-bold"><i class="fa-solid fa-right-to-bracket"></i> LOGIN</h1>
                </div>
                <div class="card-body">
                    <form action="../actions/login.php" method="post">
                        <table class="w-75">
                            <tr class="row">
                                <td class="col-4 text-end">
                                    <label for="username" class="form-label text-secondary">Username</label>
                                </td>
                                <td class="col">
                                    <input type="text" name="username" class="form-control" id = "username" placeholder="USERNAME" required>
                                </td>
                            </tr>

                            <tr class="row">
                                <td class="col-4 text-end">
                                    <label for="password" class="form-label text-secondary">Password</label>
                                </td>
                                <td class="col">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="PASSWORD" required>
                                </td>
                            </tr>

                            <tr class="row mt-3">
                                <td class="col-4"></td>
                                <td class="col">
                                    <button type="submit" class="btn btn-primary w-100">Log in</button>
                                </td>
                            </tr>
                            <tr class="row mt-2">
                                <td class="col-4"></td>
                                <td class="col text-center">
                                    <a class="text-white btn btn-danger" href="register.php">Create Account</a>
                                </td>
                            </tr>

                        </table>
                    </form>

                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>