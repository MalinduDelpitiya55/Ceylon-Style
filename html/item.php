<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FashionFix | Online Clothing Store</title>
    <link rel="stylesheet" href="css/oneitemstyle.css" />
</head>

<body>
    <!-- item -->
    
    <section>
        
        <div class="container flax"> 
            <div class="left">
                <div class="main_image">
                    <img src="img/item/skirtp_01.jpg" alt="" class="slide">
                </div>
                <div class="option flex">
                    <img src="img/item/skirtp_01.jpg" onclick="img('img/item/skirtp_01.jpg')">
                    <img src="img/item/skirtp_02.jpg" onclick="img('img/item/skirtp_02.jpg')">
                    <img src="img/item/skirtp_03.jpg" onclick="img('img/item/skirtp_03.jpg')">
                </div>
            </div>

            <div class="right">
                <h3>WOMEN PLEATED MIDI SKIRT</h3>
                <h4><small>Rs </small> 1,790.00</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat ratione quisquam ipsum ducimus deserunt nemo totam hic cupiditate cumque autem veritatis eum earum, et ipsa sapiente illum neque quae quod.</p>
                <form>
                    <div class="size-select">
                        <h5>Size</h5>
                        <label for="small">
                            <input type="radio" name="size" id="small">
                            <span>S</span>
                        </label>
                        <label for="medium">
                            <input type="radio" name="size" id="medium">
                            <span>M</span>
                        </label>
                        <label for="large">
                            <input type="radio" name="size" id="large">
                            <span>L</span>
                        </label>
                        <label for="x-large">
                            <input type="radio" name="size" id="x-large">
                            <span>XL</span>
                        </label>
                        <label for="xx-large">
                            <input type="radio" name="size" id="xx-large">
                            <span>XXL</span>
                        </label>
                    </div>

                    <div class="quantity-select">
                        <h5>Quantity</h5>
                            <input type="number" value="1" min="1">
                    </div>   
                        
                        <center><button>ADD TO CART</button></center>

                </form>
                
            </div>
        </div>
    </section>

    <script>
        function img(anything){
            document.querySelector('.slide').src = anything;
        }

        function change(change){
            const line = document.querySelector('.home');
            line.style.background = change;
        }

    </script>

    <p></p>

    <!-- item -->

         <!-- Footer --> 
         <footer>    
            <div class="footer-column">
                <h4>Product Category</h4>
                <ul>
                  <li><a href="#">Women's Fashion</a></li>
                  <li><a href="#">Men's Fashion</a></li>
                  <li><a href="#">Kid's Fashion</a></li>
                  <li><a href="#">Fashion Pria</a></li>
                  <li><a href="#">Beauty</a></li>
                </ul>
            </div>
    
            <div class="footer-column">
                <h4>Payment</h4>
                <ul>
                  <li><a href="#">E-Wallet</a></li>
                  <li><a href="#">Cash on Delivery</a></li>
                  <li><a href="#">Transfer Bank</a></li>
                  <li><a href="#">Paypal</a></li>
                </ul>
            </div>
    
            <div class="footer-column">
              <h4>Help & Contacts</h4>
              <ul>
                <li><a href="#">My account</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">News & Events</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Terms and Conditions</a></li>
                <li><a href="#">Contact Customer Support</f></li>
              </ul>
          </div>
          
          <div class="footer-column">
              <h4>About Us</h4>
                <ul>
                  <li><a href="#">Career</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Company Info</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Legal Statement</a></li>
                </ul>
          </div>
    
      <p class="mini-text">
        &copy; Copyright 2023 Group 8. All right reserved
      </p>
    </footer>
     <!-- Footer -->
</body>

</html>