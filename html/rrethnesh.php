<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Rreth nesh</title>
    <link rel = "icon" href = "../img/icon.png" type = "image/png">
    <link rel="stylesheet" href="../css/style.css" />
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/ccbf4afaaa.js" crossorigin="anonymous"></script>
    <script>
        function redirectToLogin() {
          window.location.href = "../html/login.php";
        }
      </script>
<script>
  function addToCart(itemName, itemPrice) {
  // Check if the cart already exists in local storage
  let cartItems = localStorage.getItem('cartItems');
  if (cartItems) {
    // If the cart exists, parse its contents from JSON to an array
    cartItems = JSON.parse(cartItems);
  } else {
    // If the cart doesn't exist, initialize an empty array
    cartItems = [];
  }

  // Create an object representing the item with name and price
  const item = {
    name: itemName,
    price: itemPrice
  };

  // Add the item to the cart
  cartItems.push(item);

  // Store the updated cart in local storage
  localStorage.setItem('cartItems', JSON.stringify(cartItems));

  // Provide visual feedback to the user (optional)
  alert('Item added to cart!');
}


</script>

    <style>

    body{
        background-image: linear-gradient(rgba(0,0,0,0.5 ),rgba(0,0,0,0.5)),url(../img/restaurant.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: scroll;
        background-position: center;
        height: 100vh;
    }
        ol1 {
            color:rgb(57, 65, 39);
            font-size:17px;
            letter-spacing:5px;
            text-decoration:underline rgba(38, 44, 38, 0.664);
        }
         section{
    background-image:linear-gradient(rgba(0,0,0,0.5 ),rgba(0,0,0,0.5)),url(../img/restaurant.jpg);
    background-size:cover;
    background-repeat: no-repeat;
    height:100%;
    padding-top: 78px;
        }
        .quote {
            background-image:linear-gradient(#7a4c00 ,#7a4c00);
            background-color: #7a4c00;
            text-align: center;
            color:rgb(240, 243, 235);
            font-size: 30px;
            margin-top: -100px;
            height:30vh;
            font-family:cursive;
            text-shadow:4px 4px 7px #101f14;
        }
            .food {
            background-image:linear-gradient(#7a4c00 ,#7a4c00);
            background-color: #7a4c00;
            text-align: center;

        }
        svg{
            position:absolute;
            top:202%;
           
            right:90%;
        }
        .service button {
  background-color: #ff8c00;
  color: white;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  font-size: 14px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.service button:hover {
  background-color: #e67300;
}

.service button:focus {
  outline: none;
}

.service button:disabled {
  background-color: #ccc;
  cursor: not-allowed;
}

    </style>
</head>
<body>
    <header> 
        <div class="logo">
            <div class="logo">
                <img src="../img/logo.png" style="width:90px;" />
            </div>
            <ul>
                <li><a href="../html/index.php">Home</li></a>
                <li><a href="../html/rrethnesh.php">Porosite</li></a>
                <li><a href="../html/investimet.php">Investimet</li></a>
                <li><a href="../html/kontakti.php">Kontakti</li></a>
                <li><a href="https://heyzine.com/flip-book/8b2a28de50.html">Menu </li></a>
                <li><a href="../html/rrethnesh.html">Logout</a></li>
                <li><a href="../html/cart.php">Cart</a></li>
            </ul>
            </div>
            
            </header>
            <section class="pjesa1">
                <div class="container">
                    <br>
                    <br>
                    <br>
                    <div class="row">
                        <br />
                        <br />
                        <div class="service">
                            <i class="fas fa-history"></i>
                            <h3>Historiku</h3>
                            <p>
                                Restoranti ynë u themelua në vitin 2010 nga një grup miqsh që ishin të apasionuar pas sjelljes së kuzhinës autentike italiane në zonë.
                                Që atëherë, ne jemi bërë një vend i dashur vendas, i njohur për përbërësit tanë të freskët dhe atmosferën e ngrohtë e mikpritëse.
                        </div>
                        <br />
                        <br />
                        <div class="service">
                            <i class="fas fa-book"></i>
                            <h3>Menyja</h3>
                            <p>
                                Në restorantin tonë, ne krenohemi që përdorim vetëm përbërësit më të freskët dhe me cilësi më të lartë në të gjitha pjatat tona. 
                                Menuja jonë përmban një shumëllojshmëri të pjatave klasike italiane, të tilla si makarona, pica dhe panine, 
                                si dhe një përzgjedhje speciale sezonale. Picat tona të djegura me dru, të bëra me përbërës vendas, duhet t'i provoni!
                            </p>
                        </div>
                        <br />
                        <br />
                        <div class="service">
                            <i class="fas fa-users"></i>
                            <h3>Ekipi</h3>
                            <p>
                                Ekipi ynë në restorant është i përkushtuar për të ofruar një përvojë të jashtëzakonshme ngrënieje për çdo klient. 
                                Kuzhinierët tanë kanë vite përvojë në krijimin e pjatave të shijshme italiane dhe stafi ynë i shtëpisë është miqësor dhe i vëmendshëm. 
                                Të gjithë jemi të përkushtuar për të ofruar shërbimin më të mirë të mundshëm për të siguruar që çdo vizitë në restorantin tonë të jetë e paharrueshme.
                            </p>
                        </div>
                    </section>
                   

            <div class="food">      
                <div class="row">
                    <div class="service">
                        <i></i>
                        <h3>MENU 1</h3>
                        <p>Pije <br>
                        Supë <br>
                        Long <br>
                        Pogaqe<br>
                        Sallatë Mix<br>
                        Ramstek<br>
                        10.00€<br>
                        </p>
                        <button id="menu1Button" onclick="addToCart('MENU 1','10.00€')">Add to Cart</button>

                    </div>
                    <div class="service">
                        <i class="fas fa-utensils"></i>
                        <h3>MENU 2</h3>
                        <p>Pije <br>
                            Supë <br>
                            Long <br>
                            Pogaqe<br>
                            Sallatë Mix<br>
                            Kombinim<br>
                            9.00€<br>
                            </p>
                            <button id="menu2Button" onclick="addToCart('MENU 2','9.00€')">Add to Cart</button>

                    </div>
                    <div class="service">
                        <i class="fas fa-utensils"></i>
                        <h3>MENU 3</h3>
                        <p>Pije <br>
                            Supë <br>
                            Long <br>
                            Pogaqe<br>
                            Sallatë Mix<br>
                            Troftë<br>
                            8.00€<br>
                            </p>
                            <button id="menu3Button" onclick="addToCart('MENU 3','8.00€')">Add to Cart</button>

                    </div>
                    <div class="service">
                        <i class="fas fa-utensils"></i>
                        <h3>MENU 4</h3>
                        <p>Pije <br>
                            Supë <br>
                            Long <br>
                            Pogaqe<br>
                            Sallatë Mix<br>
                            File pule<br>
                            7.00€<br>
                            </p>
                            <button id="menu4Button" onclick="addToCart('MENU 4','7.00€')">Add to Cart</button>

                    </div>
                    <div class="service">
                        <i class="fas fa-utensils"></i>
                        <h3>MENU 5</h3>
                        <p>Pije <br>
                            Supë <br>
                            Long <br>
                            Pogaqe<br>
                            Sallatë Mix<br>
                            Biftek<br>
                            10.00€<br>
                            </p>
                            <button id="menu5Button" onclick="addToCart('MENU 5','10.00€')">Add to Cart</button>

                    </div>
                    <div class="service">
                        <i class="fas fa-utensils"></i>
                        <h3>MENU 6</h3>
                        <p>Pije <br>
                            Supë <br>
                            Long <br>
                            Pogaqe<br>
                            Sallatë Mix<br>
                            Karkaleca<br>
                            12.00€<br>
                        </p>
                            <button id="menu6Button" onclick="addToCart('MENU 6','12.00€')">Add to Cart</button>
                        
                        </div>
                </div>
            </div>
    
                   <footer>
                    <section class="footer">
                        <div class="social">
                            <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.snapchat.com"><i class="fab fa-snapchat"></i></a>
                            <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a>
                        </div>
                        <nav>
                        <ol class="listat">
                            <li> 
                                <a href="../html/index.php">HOME</a>
                            </li>
                            <li> 
                              <a href="../html/rrethnesh.php">RRETH NESH</a>
                          </li>
                          <li> 
                              <a href="../html/investimet.php">INVESTIMET</a>
                          </li>
                          <li> 
                              <a href="../html/kontakti.php">KONTAKTI</a>
                          </li>
                          <li> 
                              <a href="https://heyzine.com/flip-book/8b2a28de50.html">MENU</a>
                          </li>
                          <li><a href="../html/rrethnesh.html">LOGOUT</a></li>
      
                        </ol>
                      </nav>
                        <p class="copyright">
                            kuizinë &#169 2023
                        </p>
                    </section>
                </footer>
                    <script  type="text/javascript" src="../js/script.js"></script>
</body>
</html>
                 