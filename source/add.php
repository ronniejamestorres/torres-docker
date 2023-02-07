<?php

if(isset($_POST['submit'])) {
    echo htmlspecialchars($_POST['email']);
    echo htmlspecialchars($_POST['title']);
    echo htmlspecialchars($_POST['ingredients']);
   
}
        
        ?>

        <!DOCTYPE html>
        <html>
        <?php include('templates/header.php');?>

    <section class="container">
        <h4 class="center">Add a Pizza</h4>
        <form class="white" action="add.php" method="POST">
            <label>Your Email:</label>
            <input type="text" name="email">
            <label>Your title:</label>
            <input type="text" name="title">
            <label>Ingredients (comma separated):</label>
            <input type="text" name="ingredients">
            <div>
                <input type="submit" name="submit" value="submit" class="">
            </div>
        </form>
    </section>

        <?php include('templates/footer.php');?>
    
        </html>

