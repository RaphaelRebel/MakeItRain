<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/buy.css">
    <script src="../script/script.js"></script>
    <script src="../script/location.js"></script>
    <title>Comicbook shop</title>
</head>
<body>
    <div class="logo-layout">logo</div>
    <div class="nav-phone-layout"> 
        <div id="menu-bar">
        <div id="menu" onClick="onClickMenu()">
          <div class="bar" id="bar1"></div>
          <div class="bar" id="bar2"></div>
          <div class="bar" id="bar3"></div>
        </div>
        <ul class="nav" id="nav" onClick="onClickMenu()">
            <div id="phone-nav">
                <li><a href="../main.php" target="_blank">Home</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="pages/about-us.html" target="_blank">About us</a></li>
                <li><a href="pages/search.html" target="_blank">Search</a></li>
                <li><a href="pages/contact.html" target="_blank">Contact</a></li>
            </div>
        </ul>
      </div>
    </div>
    <div class="nav-desk-layout">
        

            <div id="container-animate">
              <div class="center" id="container">
                <div id="balk">
                  <ul class="center" id="nav-text">
                    <li class="bol-outer"><a href="pages/about-us.html" target="_blank">About us</a></li>
                    <li class="bol-outer"><a href="#">Shop</a></li>
        
                    <div class="center" id="bol-inner">
                      <p><a href="../main.php" target="_blank">Home</a></p>
                    </div>
        
                    <li class="bol-outer"><a href="pages/search.html" target="_blank">Search</a></li>
                    <li class="bol-outer"><a href="pages/contact.html" target="_blank">Contact</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
    </div>
    <div class="login-layout">
        <?php include("../inlog/username.php") ?>
        
    </a></div>
    <div class="location-layout"><p id="locate">Recommended</p></div>
  

    <div class="container-layout">
        <div class="overview-layout">
            <p>Overview</p>
            <a href="#" target="_blank">Search</a>
            <a onclick="recommendedFunction()" target="_blank">Recommended</a>
            <a onclick="marvelFunction()" target="_blank">Marvel</a>
            <a onclick="dcFunction()" target="_blank">DC</a>
            <a onclick="otherFunction()" target="_blank">Other</a>
        </div>
        <div class="comicgrid-layout">
            <div class="comic-layout">
                <img class="comic-image" src="../images/Test.jpeg" alt="Comicbook" />
            <p class="comic-description">Here is my awesome title!</p>
            <p class="comic-prize">$10</p>
            </div>
            <div class="comic-layout">
                <img class="comic-image" src="../images/Test.jpeg" alt="Comicbook" />
            <p class="comic-description">Here is my awesome title!</p>
            <p class="comic-prize">$10</p>
            </div>
            <div class="comic-layout">
                <img class="comic-image" src="../images/Test.jpeg" alt="Comicbook" />
            <p class="comic-description">Here is my awesome title!</p>
            <p class="comic-prize">$10</p>
            </div>
            <div class="comic-layout">
                <img class="comic-image" src="../images/Test.jpeg" alt="Comicbook" />
            <p class="comic-description">Here is my awesome title!</p>
            <p class="comic-prize">$10</p>
            </div>
            <div class="comic-layout">
                <img class="comic-image" src="../images/Test.jpeg" alt="Comicbook" />
            <p class="comic-description">Here is my awesome title!</p>
            <p class="comic-prize">$10</p>
            </div>
            <div class="comic-layout">
                <img class="comic-image" src="../images/Test.jpeg" alt="Comicbook" />
            <p class="comic-description">Here is my awesome title!</p>
            <p class="comic-prize">$10</p>
            </div>
            <div class="comic-layout">
                <img class="comic-image" src="../images/Test.jpeg" alt="Comicbook" />
            <p class="comic-description">Here is my awesome title!</p>
            <p class="comic-prize">$10</p>
            </div>
            <div class="comic-layout">
                <img class="comic-image" src="../images/Test.jpeg" alt="Comicbook" />
            <p class="comic-description">Here is my awesome title!</p>
            <p class="comic-prize">$10</p>
            </div>
            <div class="comic-layout">
                <img class="comic-image" src="../images/Test.jpeg" alt="Comicbook" />
            <p class="comic-description">Here is my awesome title!</p>
            <p class="comic-prize">$10</p>
            </div>
            <div class="comic-layout">
                <img class="comic-image" src="../images/Test.jpeg" alt="Comicbook" />
            <p class="comic-description">Here is my awesome title!</p>
            <p class="comic-prize">$10</p>
            </div>
            <div class="comic-layout">
                <img class="comic-image" src="../images/Test.jpeg" alt="Comicbook" />
            <p class="comic-description">Here is my awesome title!</p>
            <p class="comic-prize">$10</p>
            </div>
            <div class="comic-layout">
                <img class="comic-image" src="../images/Test.jpeg" alt="Comicbook" />
            <p class="comic-description">Here is my awesome title!</p>
            <p class="comic-prize">$10</p>
            </div>
        </div>
    </div>

    <div class="load-layout">  <a href=""> Load more</a></div>
    <div class="footer-layout">
        <div class="footer-row-1">ACOMIC</div>
        <div class="footer-row-2">
        <a href="" target="_blank">Marvel</a>
        <a href="" target="_blank">DC</a>
        <a href="" target="_blank">Other comics</a>
        <a href="" target="_blank">Sell</a>
        <a href="" target="_blank">Buy</a>
        <a href="" target="_blank">Trade</a>
    </div>
    <div class="footer-row-3">
        <a href="" target="_blank">About us</a>
        <a href="" target="_blank">Contact</a>
        <a href="" target="_blank">Info</a>
    </div>
    <div class="footer-row-4">
        <a href="" target="_blank">Facebook</a>
        <a href="" target="_blank">Instagram</a>
        <a href="" target="_blank">Twitter</a>
    </div>
    </div>

</body>
</html>