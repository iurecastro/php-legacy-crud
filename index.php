<?php include 'config.php' ;?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>CRUD PHP Exemple</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container mt-5">
            <h2>User Management</h2>

            <form id="userForm" class="mb-4">
                <input type="hidden" id="userId" >
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name"  require>
                 </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email"  require>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>


        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody id="userTable">
                <?php 
                $sql = "select * from users";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    echo "
                    <tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td><button class='btn btn-sm btn-warning edit' data-id='{$row['id']}'>Edit</button></td>

                        <td><button class='btn btn-sm btn-danger delete' data-id='{$row['id']}'>Delete</button></td>

                    </tr>
                    ";
                }
                
                ?>


            </tbody>


        </table>

        </div>


         <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/script.js"></script>
    </body>



</html>