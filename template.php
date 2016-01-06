<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="styles/style.css">
    </head>
    <body>
        <div id="wrapper">
            <div id="logo"></div>
            <!--<div id="banner"></div> -->
               
    
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="spices.php">Store</a></li>
                    <li><a href="recipe.php">Recipe</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>

                
            </nav>
            <div id="main-content">
                <?php echo $content; ?>          
            </div>
            <div id="sidebar">
                
            </div>
            <footer>
                <p>All rights reserved.</p>
            </footer>
        </div>
    </body>
</html>
