<?php

require_once "Database.php";

class Product extends Database{
    public function addProduct($request)
    {
        $prod_name = $request['prod_name'];
        $price = $request['price'];
        $quantity = $request['quantity'];


        $sql = "INSERT INTO products (`product_name`, `price`, `quantity`)
                VALUES ('$prod_name', '$price', '$quantity')";

        if ($this->conn->query($sql)){
            header('location: ../views/dashboard.php'); // GO TO THE INDEX PAGE
            exit; //TERMINATE THE SCRIPT
        } else{
            die('Error adding the product: ' . $this->conn->error);
        }
    }

    public function getAllProducts()
    {
        $sql = "SELECT id, product_name, price, quantity FROM products";

        if($result = $this->conn->query($sql)){
            return $result;
        } else{
            die('Error retrieving all products: ' . $this->conn->error);
        }
    }

    public function getProduct($id)
    {
        $sql = "SELECT * FROM products WHERE id = $id";

        if($result = $this->conn->query($sql)){
            return $result->fetch_assoc();
        } else{
            die('Error retrieving the product: ' . $this->conn->error);
        }
    }

    public function update($request)
    {
        $prod_name = $request['prod_name'];
        $price = $request['price'];
        $quantity = $request['quantity'];
        $id = $_GET['prod_id'];

        $sql = "UPDATE products SET product_name = '$prod_name', price = '$price', quantity = '$quantity' WHERE id = $id";

        if($this->conn->query($sql)){
            header('location: ../views/dashboard.php');
            exit;
        } else{
            die('Error updating the product: ' . $this->conn->error);
        }

    }

    public function delete()
    {
        $id = $_GET['prod_id'];

        $sql = "DELETE FROM products WHERE id = $id";

        if($this->conn->query($sql)){
            header('location: ../views/dashboard.php');
        } else{
            die('Error deleting the product: ' . $this->conn->error);
        }
    }

    public function checkQty()
    {
        $prod_name = $request['product_name'];
        $price = $request['price'];
        $quantity = $request['quantity'];
        $buy_quantity = $request['buy_quantity'];
        $id = $_GET['prod_id'];

        return $total = $price * $buy_quantity;
    }

}