<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Recent | Gokyo Cuijk</title>
        <link rel="stylesheet" href="../../styles.css">
        <link rel="icon" type="image/x-icon" href="../../files/images/favicon.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Hanalei+Fill&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    </head>

    <body id="recent">
        
        <header>
            <?php include("../../files/components/navbar-info.php"); ?>
        </header>

        <main class="recent">
            <div class="recent-hero">
                <div class="overlay">
                    <div class="hero-text">
                        <h1>Recent</h1>
                    </div>
                </div>
            </div>
            <div class="main-block">
                <h2>Aan deze pagina word nog gewerkt, kom binnenkort terug!</h2>
                <div class="photo-galery heumen" style="display: none;">
                    <h2>Heumen 6-11-2022</h2>

                    <div class="container">
                        <div class="mySlides">
                            <div class="numbertext">1 / 6</div>
                            <img class="slidesImg" src="../../files/images/informatie/recent/heumen_06-11-2022/DSC_0234.jpg">
                        </div>
                        
                        <div class="mySlides">
                            <div class="numbertext">2 / 6</div>
                            <img class="slidesImg" src="../../files/images/informatie/recent/heumen_06-11-2022/DSC_0230.jpg">
                        </div>
                        
                        <div class="mySlides">
                            <div class="numbertext">3 / 6</div>
                            <img class="slidesImg" src="../../files/images/informatie/recent/heumen_06-11-2022/DSC_0228.jpg">
                        </div>
                            
                        <div class="mySlides">
                            <div class="numbertext">4 / 6</div>
                            <img class="slidesImg" src="../../files/images/informatie/recent/heumen_06-11-2022/DSC_0234.jpg">
                        </div>
                        
                        <div class="mySlides">
                            <div class="numbertext">5 / 6</div>
                            <img class="slidesImg" src="../../files/images/informatie/recent/heumen_06-11-2022/DSC_0234.jpg">
                        </div>
                            
                        <div class="mySlides">
                            <div class="numbertext">6 / 6</div>
                            <img class="slidesImg" src="../../files/images/informatie/recent/heumen_06-11-2022/DSC_0234.jpg">
                        </div>
                            
                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>
                        

                        <div class="row">
                            <div class="column">
                            <img class="demo cursor" src="../../files/images/informatie/recent/heumen_06-11-2022/DSC_0234.jpg" style="width:100%" onclick="currentSlide(1)">
                            </div>
                            <div class="column">
                            <img class="demo cursor" src="../../files/images/informatie/recent/heumen_06-11-2022/DSC_0234.jpg" style="width:100%" onclick="currentSlide(2)">
                            </div>
                            <div class="column">
                            <img class="demo cursor" src="../../files/images/informatie/recent/heumen_06-11-2022/DSC_0234.jpg" style="width:100%" onclick="currentSlide(3)">
                            </div>
                            <div class="column">
                            <img class="demo cursor" src="../../files/images/informatie/recent/heumen_06-11-2022/DSC_0234.jpg" style="width:100%" onclick="currentSlide(4)">
                            </div>
                            <div class="column">
                            <img class="demo cursor" src="../../files/images/informatie/recent/heumen_06-11-2022/DSC_0234.jpg" style="width:100%" onclick="currentSlide(5)">
                            </div>    
                            <div class="column">
                            <img class="demo cursor" src="../../files/images/informatie/recent/heumen_06-11-2022/DSC_0234.jpg" style="width:100%" onclick="currentSlide(6)">
                            </div>
                        </div>
                    </div>
                    
                    <script>
                        let slideIndex = 1;
                        showSlides(slideIndex);
                        
                        function plusSlides(n) {
                        showSlides(slideIndex += n);
                        }
                        
                        function currentSlide(n) {
                        showSlides(slideIndex = n);
                        }
                        
                        function showSlides(n) {
                        let i;
                        let slides = document.getElementsByClassName("mySlides");
                        let dots = document.getElementsByClassName("demo");
                        let captionText = document.getElementById("caption");
                        if (n > slides.length) {slideIndex = 1}
                        if (n < 1) {slideIndex = slides.length}
                        for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";
                        }
                        for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" active", "");
                        }
                        slides[slideIndex-1].style.display = "block";
                        dots[slideIndex-1].className += " active";
                        captionText.innerHTML = dots[slideIndex-1].alt;
                        }
                    </script>
                </div>
            </div>
        </main>

        <footer>
            <?php include("../../files/components/footer-info.php"); ?>
        </footer>

    </body>
</html>