<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tabs</title>
    <link rel="stylesheet" type="text/css" href="../css/catagory.css">
	<link rel="icon" type="image/x-icon" href="favicon.png">
</head>
<body style="padding: 20px">
    <h1 class="title">Tabs</h1>
            <div class="tabContainer">
                        <div class="buttonContainer">
                            <button onclick="showPanel(0,'none')">WOMEN</button>
                            <button onclick="showPanel(1,'none')">MEN</button>
                            <button onclick="showPanel(2,'none')">KIDS</button>
                            <button onclick="showPanel(3,'#ff5722')">SPORTS</button>
                            <button onclick="showPanel(4,'#ff9800')">BEAUTY</button>
                            <button onclick="showPanel(5,'#9c27b0')">HOME & LIFESTYLE</button>
                            <button onclick="showPanel(6,'#795548')">FOOTWEAR</button>
                            <button onclick="showPanel(7,'#607d8b')">JEWELLERY</button>
                        </div>
                        <div class="panel" id="hoverPanel">
                            
                                    <div class="tabPanel">
                                            <div class="item-column">
                                                <ul>
                                                    <h4 class="subtitle">Casualwear</h4>
                                                    <li><a href="#">Dresses</a></li>
                                                    <li><a href="#">Tops & T Shirts</a></li>
                                                    <li><a href="#">Shirts</a></li>
                                                    <li><a href="#">Skirts & Shorts</a></li>
                                                    <li><a href="#">Bottoms</a></li>
                                                    <li><a href="#">Jackets</a></li>
                                                    <li><a href="#">Bodysuits</a></li>
                                                </ul>
                                            

                                            <div class="item-column">
                                                <ul>
                                                    <h4 class="subtitle">Formalwear</h4>
                                                    <li><a href="#">Dresses</a></li>
                                                    <li><a href="#">Shirts & Tops</a></li>
                                                    <li><a href="#">Pants & Trousers</a></li>
                                                    <li><a href="#">Skirts</a></li>
                                                </ul>
                                            </div>

                                            <div class="item-column">
                                                <ul>
                                                    <h4 class="subtitle">Nightwear</h4>
                                                    <li><a href="#">Night Dress</a></li>
                                                    <li><a href="#">Loungewear Sets</a></li>
                                                    <li><a href="#">Night Shirts</a></li>
                                                    <li><a href="#">Bed Slippers</a></li>
                                                    <li><a href="#">Camisoles</a></li>
                                                    <li><a href="#">Nightgowns & Chemises</a></li>
                                                    <li><a href="#">Robes</a></li>
                                                    <li><a href="#">Pyjama Sets</a></li>
                                                    <li><a href="#">Pyjama Tops</a></li>
                                                    <li><a href="#">Pyjama Bottoms</a></li>
                                                </ul>
                                            </div>

                                            <div class="item-column">
                                                
                                                <ul>
                                                    <h4 class="subtitle">Swim & Beachwear</h4>
                                                    <li><a href="#">Swim Tops</a></li>
                                                    <li><a href="#">Swim Bottoms</a></li>
                                                    <li><a href="#">Swim Sets</a></li>
                                                    <li><a href="#">Swimsuits</a></li>
                                                    <li><a href="#">Tankinis</a></li>
                                                    <li><a href="#">Bikini Tops</a></li>
                                                    <li><a href="#">Bikini Bottoms</a></li>
                                                    <li><a href="#">One Piece</a></li>
                                                </ul>
                                            </div>

                                            <div class="item-column">
                                                <h4 class="subtitle">Winterwear</h4>
                                                <ul>
                                                    <li><a href="#">Tops & T Shirts</a></li>
                                                    <li><a href="#">Cardigans</a></li>
                                                </ul>
                                            </div>

                                            <div class="item-column">
                                                <ul>
                                                    <h4 class="subtitle">Accessories</h4>
                                                    <li><a href="#">Caps & Hats</a></li>
                                                    <li><a href="#">Scarves & Shawls</a></li>
                                                    <li><a href="#">Hair Accessories</a></li>
                                                    <li><a href="#">Belts</a></li>
                                                </ul>
                                            </div>
                                    </div>

                        </div>

                <div class="tabPanel">MEN: Content</div>
                <div class="tabPanel">KIDS: Content</div>
                <div class="tabPanel">SPORTS: Content</div>
                <div class="tabPanel">BEAUTY: Content</div>
                <div class="tabPanel">HOME & LIFESTYLE: Content</div>
                <div class="tabPanel">FOOTWEAR: Content</div>
                <div class="tabPanel">JEWELLERY: Content</div>
            </div>
        <script src="../js/catagory.js"></script>
</body>
</html>
