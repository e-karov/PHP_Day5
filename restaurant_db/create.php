<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once 'components/boot.php' ?>
    <title>Restaurant | Add Dish</title>
    <style>
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 60%;
        }
    </style>
</head>

<body>
    <fieldset>
        <legend class='h2'>Add Dish</legend>
        <form action="actions/a_create.php" method="post" enctype="multipart/form-data">
            <table class='table'>
                <tr>
                    <th>Name</th>
                    <td><input class='form-control' type="text" name="name" placeholder="Dish Name" /></td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td><input class='form-control' type="number" name="price" placeholder="Price" step="any" /></td>
                </tr>
                <tr>
                    <th>ingredients</th>
                    <td><input class='form-control' type="text" name="ingredients" placeholder="ingredients"></td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td><input class='form-control' type="file" name="image" /></td>
                </tr>
                <tr>
                    <td><button class='btn btn-success' type="submit">Add Product</button></td>
                    <td><a href="index.php"><button class='btn btn-warning' type="button">Home</button></a></td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>