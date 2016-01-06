<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title ?></title>
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="styles/style.css">
        <link rel="stylesheet" type="text/css" href="styles/homeSlider.css">
        <script type="text/javascript" src="JS/bannerSlider.js"></script>
    </head>
    <body>
        <div id="wrapper">
            <div id="logo"></div>
            <!--<div id="banner"></div> -->
            
                <div id="slider_container_3">

				<div id="SliderName_3" class="SliderName_3">
					<img src="images/spices-banner.jpg" alt="" title="" />
					<img src="images/spices-banner1.jpg" alt="" title="" />
					<img src="images/spices-banner2.jpg" alt="" title="" />
					<img src="images/white-pepper.jpg" alt="" title="" />
					<img src="images/carom-seeds.jpg" alt="" title="" />
				</div>
				

				<script type="text/javascript">

					demo3Effect1 = {name: 'myEffect31', top: true, move: true, duration: 400};
					demo3Effect2 = {name: 'myEffect32', right: true, move: true, duration: 400};
					demo3Effect3 = {name: 'myEffect33', bottom: true, move: true, duration: 400};
					demo3Effect4 = {name: 'myEffect34', left: true, move: true, duration: 400};
					demo3Effect5 = {name: 'myEffect35', rows: 3, cols: 9, delay: 50, duration: 100, order: 'random', fade: true};
					demo3Effect6 = {name: 'myEffect36', rows: 2, cols: 4, delay: 100, duration: 400, order: 'random', fade: true, chess: true};

					effectsDemo3 = [demo3Effect1,demo3Effect2,demo3Effect3,demo3Effect4,demo3Effect5,demo3Effect6,'blinds'];

					var demoSlider_3 = Sliderman.slider({container: 'SliderName_3', width: 1080, height: 400, effects: effectsDemo3, display: {autoplay: 3000}});
				</script>
			</div>
    
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