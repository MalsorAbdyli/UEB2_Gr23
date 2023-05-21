<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investimet</title>
    <link rel = "icon" href = "../img/icon.png" type = "image/png">
    <link rel="stylesheet" href="../css/style.css" />
    <link href='https://fonts.googleapis.com/css?family=Imprima' rel='stylesheet'>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://kit.fontawesome.com/ccbf4afaaa.js" crossorigin="anonymous"></script>
    <style>
        #designs{
            background: linear-gradient(to right, #422500, #7a4c00);
            background-size:cover;
            background-position: center;
            height:100%;
            padding-bottom: 80px;
        }

        .section-design {
            text-align: center;
            padding-top: 120px;
        }
        .video{
            background-image: url(../img/gradient.png);
            background-color: #7a4c00;
            
        }
        div.center{
            text-align:center;
        }
        .Drag{
            height:65vh;
            width:100%;
            background-color: rgb(247, 245, 238);

        }
        .Drag img{
            height:200px;
            width:200px;
        }

        #div1, #div2 ,#div3, #div4 { 
             float:left;
             padding:71px;
             margin:10px;
             border:black dashed;
         }
          
         #div1{ background-color: #5f1419; width:200px; height:200px; }
         #div2{ background-color: #ac7f55; width:200px; height:200px; }
         #div3{ background-color: #d6c2aa; width:200px; height:200px; }
         #div4{ background-color: #653a2f; width:200px; height:200px; }
        
      
    </style>
</head>
<body>
    <header>
            <div class="logo">
                <img src="../img/logo.png" style="width:90px;" />
            </div>
            <ul>
                <li><a href="../html/index.php">Home</li></a>
                <li><a href="../html/rrethnesh.php">Porosite</li></a>
                <li><a href="../html/investimet.php">Investimet</li></a>
                <li><a href="../html/kontakti.php">Kontakti</li></a>
                <li><a href="https://heyzine.com/flip-book/8b2a28de50.html">Menu </li></a>
                <li><a href="../html/investimet.html">Logout</a></li>
                <li><a href="../html/cart.php"><img src="../img/cart.png" alt="cart" style="height:25px"/></a></li>
            </ul>
        </header>
            <section id="designs" class="samples">
                <div class="section-design">
                    <h2>INTERIERI I RESTAURANTIT TONË</h2>
                    <p >Shiko investimet tona të bëra në dizajnin e brendshëm!</p>
                </div>
                <br>
                <br>
                
                <div class="Featured">
                    <div class="Work">
                        <figure>
                            <img src="../img/holli.jpg" alt="holli i restaurantit.jpg">
                            <figcaption>
                                <a> HOLLI </a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="Work">
                        <figure>
                            <img src="../img/kuzhina.jpg" alt="kuzhina e restaurantit.jpg">
                            <figcaption>
                                <a> KUZHINA </a>
                            </figcaption>

                        </figure>
                    </div>
                    <div class="Work">
                        <figure>
                            <img src="../img/tavolinat.jpg" alt="tavolinat e restaurantit.jpg">
                            <figcaption>
                                <a> TAVOLINAT E NGRËNIES </a>
                            </figcaption>

                        </figure>
                    </div>
                    <div class="Work">
                        <figure>
                            <img src="../img/tualeti.jpg" alt="tualeti i restaurantit.jpg">
                            <figcaption>
                                <a> TUALETET </a>
                            </figcaption>

                        </figure>
                    </div>
                    <div class="Work">
                        <figure>
                            <img src="../img/salla.jpg" alt="salla e konferencave.jpg">
                            <figcaption>
                                <a> SALLA E KONFERENCAVE </a>
                            </figcaption>

                        </figure>
                    </div>
                    <div class="Work">
                        <figure>
                            <img src="../img/pjata.jpg" alt="pjatat e restaurantit">
                            <figcaption>
                                <a> DETAJE </a>
                            </figcaption>

                        </figure>
                    </div>
                </div>
            </section>
            <!--PERSHTATMERIJA E NGJYRAVE-->
            <section class="Drag">
                <div>
                    <h2 style="color:rgba(244, 247, 242, 0.733);text-align:center ; letter-spacing:7px ;
                    font-size:33px;text-shadow:2px 1px 2px #081605fd; font-weight: bolder;">PËRSHTATSHMËRIA E NGJYRAVE</h2>
<p style="color:rgb(248, 242, 242);text-align:center ; height: 50px; font-size:20px;letter-spacing:3px ;text-shadow:2px 1px 2px #422500;background-color: #7A4C00;">Ne mund të ju tregojmë
përshtatshmërinë e ngjyrave në restaurantin tonë, duke marrë fotot nga <br> ngjyra e parë dhe duke i futur në ngjyrat e tjera.</p>

                  <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
                  <img src="../img/ngjyratpjata.png" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
                  </div>
                  <div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                  </div>
                  <div id="div3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                  </div>
                  <div id="div4" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                  </div>
              </section>

            <section>
                <div class="materialet">
                    <header class="main-header clearfix">
                        <h1 class="name" style="color:#7a4c00">Materialet shërbyese </h1>
                    </header>
                <div class="content clearfix">

                    <div class="cube-container">
                        <div class="photo-cube">
        
                            <img class="front" src="../img/gotat.jpg" alt="gotat.jpg">
                            <div class="back photo-desc">
                              <h3 style="color:black">Gotat e kristalta</h3>
                              <p style="color:black"> Ju mund të përdorni me siguri gotat tona të kristalta për tu shërbyer me verë, ujë dhe pije të tjera. Asnjë lëng nuk qëndron në gotë aq gjatë gjatë çdo vakti për të nxjerrë plumbin që tejkalon çdo standard EPA.</p>
                            </div>
                            <img class="left" src="../img/gotat.jpg" alt="gotat.jpg">
                            <img class="right" src="../img/gotat.jpg" alt="gotat.jpg">
        
                        </div>
                    </div>
                    <div class="cube-container">
                        <div class="photo-cube">
        
                            <img class="front" src="../img/enet.jpg" alt="enet qeramike.jpg">
                            <div class="back photo-desc">
                              <h3 style="color:black">Enët qeramike</h3>
                              <p style="color:black">Qeramika është vërtetuar se është e sigurt si për gatimin ashtu edhe për servirjen e ushqimit. Balta nga e cila bëhen enët qeramike është një material natyral, jo toksik.</p>
                            </div>
                            <img class="left" src="../img/enet.jpg" alt="enet qeramike.jpg">
                            <img class="right" src="../img/enet.jpg" alt="enet qeramike.jpg">
        
                        </div>
                    </div>	
        
                    <div class="cube-container">
                        <div class="photo-cube">
        
                            <img class="front" src="../img/lugat.jpg" alt="lugat.jpg">
                            <div class="back photo-desc">
                              <h3 style="color:black">Lugët</h3>
                              <p style="color:rgb(14, 13, 14)">Përdorimi i materialit me cilësi të lartë, të qëndrueshme dhe miqësore me mjedisin.
                                Elegante dhe me sipërfaqe të lëmuar.
                                Mund të përdoret për kafe, çaj, akullore, krem dhe kështu me radhë.</p>
                            </div>
                            <img class="left" src="../img/lugat.jpg" alt="lugat.jpg">
                            <img class="right" src="../img/lugat.jpg" alt="lugat.jpg">
        
                        </div>
                    </div>	
        
                </div>
            </div>
             </section>
 

            <section class="video">
                <div class="center">
                <video  style="border:solid black" width="500" height="240" controls>
                    <source src="../video/video.mp4" type="video/mp4">
                  Your browser does not support the video tag.
                  </video>
                  <figcaption style="color:rgb(19, 18, 18);letter-spacing:5px;"><strong>PROMO</strong></figcaption>
            </section>

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
                            <a href="../html/home.php">HOME</a>
                        </li>
                        <li> 
                          <a href="../html/rrethnesh.php">POROSITE</a>
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
                      <li><a href="../html/investimet.html">Logout</a></li>
  
  
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
         
