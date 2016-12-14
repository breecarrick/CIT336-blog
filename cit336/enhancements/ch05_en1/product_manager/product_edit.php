<?php include '../view/header.php'; ?>
    <main>
        <h1>Edit Product</h1>
        <form action="index.php" method="post" id="edit_product_form">
            <input type="hidden" name="action" value="update_product">

            <label>Category:</label>
            <select name="category_id">
            <?php foreach ($categories as $category) : ?>
                <option value="<?php echo $category['categoryID']; ?>">
                    <?php echo $category['categoryName']; ?>
                </option>
            <?php endforeach; ?>
            </select><br>

            <label>Code:</label>
            <input type="text" name="code" value="<?php echo $code ?>"><br>

            <label>Name:</label>
            <input type="text" name="name" value="<?php echo $name ?>"><br>

            <label>List Price:</label>
            <input type="text" name="price" value="<?php echo $list_price ?>"><br>

            <label>&nbsp;</label>
            <input type="submit" value="Edit Product"><br>
        </form>
        <p><a href="index.php?action=list_products">View Product List</a></p>
    </main>
<?php include '../view/footer.php'; ?>