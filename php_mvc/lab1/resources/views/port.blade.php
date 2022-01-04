<!doctype html>
<!--This is html flower box
____  ___       __________.__                               
\   \/  /__ __  \____    /|__|___.__._____    ____    ____  
 \     /|  |  \   /     / |  <   |  |\__  \  /    \  / ___\ 
 /     \|  |  /  /     /_ |  |\___  | / __ \|   |  \/ /_/  >
/___/\  \____/  /_______ \|__|/ ____|(____  /___|  /\___  / 
      \_/               \/    \/          \/     \//_____/ 
_________              .__                
\_   ___ \_____ _______|  |   ____  ______
/    \  \/\__  \\_  __ \  |  /  _ \/  ___/
\     \____/ __ \|  | \/  |_(  <_> )___ \ 
 \______  (____  /__|  |____/\____/____  >
        \/     \/                      \/
-->
<html lang="en">
  <head>
    <title>Carlos's Page</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="old_ie.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700%7cSen:700&display=swap" rel="stylesheet">
    <link rel="stylesheet" media="all and (min-width: 769px)" type="text/css" href="/Style/desktop_other.css" />
    <link rel="stylesheet" media="all and (max-width: 768px)" type="text/css" href="/Style/mobile_other.css" />
    <link rel="stylesheet" media="print" type="text/css" href="/Style/print.css" />
    <style>
      
      p.describe{
        background-color: #171b1c;
        color: #fff;
        display: block;
        padding: 0 30px 0 30px;
        margin: 0;
        text-align: justify;
      }
      
      p.describe2{
        background-color: #171b1c;
        color: #aaa;
        display: block;
        padding: 0 30px 40px 30px;
        margin: 0;
        text-align: center;
        font-weight: 700;
      }
      
      div.line1{
        display: block;
        background-color: #5d48c8;
        width: 100%;
        height: 2px;
      }/* styling line1 */
      div.line2{
        display: block;
        background-color: #5d48c8;
        width: 100%;
        height: 2px;
      }/* styling line2 */
      
      div.section1{
        display: block;
        width: 960px;
        max-width: 100%;
        height: 100%;
        background-color: #171b1c;
        display: grid;
        padding: 50px 0 25px 0;
      }/* styling section1 box */
      
      div.section2{
        display: block;
        width: 960px;
        max-width: 100%;
        height: 100%;
        background-color: #171b1c;
        display: grid;
        padding: 25px 0 50px 0;
      }/* styling section2 box */
      
      div.section1 img,
      div.section2 img{
        border: 0.5px solid rgba(60,0,255,0.6);
        box-shadow: -5px -5px 12px rgba(60,0,255,0.4), 
                    5px 5px 12px rgba(60,0,255,0.4), 
                    -5px 5px 12px rgba(60,0,255,0.4), 
                    5px -5px 12px rgba(60,0,255,0.4);
      }/* styling section1 img box*/
      
      /* grid layout for pics & masks */
      img.pic1{
        grid-column: 1;
        margin: 0 0 0 50px;
      }
      img.pic2{
        grid-column: 2;
      }
      img.pic3{
        grid-column: 1;
        margin: 0 0 0 30px;
      }
      img.pic4{
        grid-column: 2;
      }
      img.pic5{
        grid-column: 3;
      }
      
      @media all and (max-width: 889px){
        p.describe{
          background-color: #171b1c;
          color: #fff;
          display: block;
          padding: 0 150px 0 150px;
          margin: 0;
          text-align: justify;
        }
        
        img.pic1{
          grid-row: 1;
          grid-column: 2;
          margin: 0 0 30px 0;
        }
        img.pic2{
          grid-row: 2;
          grid-column: 2;
          margin: 0;
        }
        img.pic3{
          grid-row: 1;
          grid-column: 2;
          margin: 0 0 30px 0;
        }
        img.pic4{
          grid-row: 2;
          grid-column: 2;
          margin: 0 0 30px 0;
        }
        img.pic5{
          grid-row: 3;
          grid-column: 2;
        }
      }
      
      @media print{
        div.section1,
        div.section2{
          box-shadow: none;
        }
      }
      
    </style>
  </head>
  
  <body>
    <div id="wrapper"><!-- Contains the entire page -->
      <header><!-- start of top section -->
        <div style="background-color: #000;"></div>
      </header><!-- end of top section -->
      
      <div id="wrapper2"><!-- start of nav menu -->
        <nav>
          <a href="#" id="menubutton">
            <span id="top"></span>
            <span id="middle"></span>
            <span id="bottom"></span>
            <div id="topcube">
              <span id="topcube1"></span>
              <span id="topcube2"></span>
              <span id="topcube3"></span>
              <span id="topcube4"></span>
              <span id="topcube5"></span>
              <span id="topcube6"></span>
              <span id="topcube7"></span>
              <span id="topcube8"></span>
              <span id="topcube9"></span>
              <span id="topcube10"></span>
            </div>
            <div id="bottomcube">
              <span id="bottomcube1"></span>
              <span id="bottomcube2"></span>
              <span id="bottomcube3"></span>
              <span id="bottomcube4"></span>
              <span id="bottomcube5"></span>
              <span id="bottomcube6"></span>
              <span id="bottomcube7"></span>
              <span id="bottomcube8"></span>
              <span id="bottomcube9"></span>
              <span id="bottomcube10"></span>
            </div>
          </a>

          <div id="border1"></div>
          <div id="border2"></div>
          <div id="border3"></div>
          <div id="border4"></div>
          <ul>
            <li id="nav1"><a href="/">HOME</a></li>
            <li id="nav2"><a href="intro">INTRODUCTION</a></li>
            <li id="nav3"><a href="port">PORTFOLIO</a></li>
            <li id="nav4"><a href="gallery">GALLERY</a></li>
            <li id="nav5"><a href="contact">CONTACT</a></li>
          </ul>
        </nav>
      </div><!-- end of nav menu -->
      
      <div class="line1"></div>
      
      <div class="section1"><!-- start of section1 -->
        <img class="pic1" src="/images/port/No%201.jpg" alt="diagram1" />
        
        <img class="pic2" src="/images/port/No%202.jpg" alt="diagram2" />
      </div><!-- end of section1 -->
      
      <p class="describe">
        The project is to redesign a plaza in a city called "Chongqing" in 
        China. The plaza is located at the intersection of 2 rivers called 
        "Jialing" and "Changjiang". The place exists since 314 BC, covering 
        over 1.2 million square meters, which is an important landmark of 
        the city.
      </p>
      
      <div class="section2"><!-- start of section2 -->
        <img class="pic3" src="/images/port/No%203.jpg" alt="diagram3" />
        
        <img class="pic4" src="/images/port/No%204.jpg" alt="diagram4" />
        
        <img class="pic5" src="/images/port/No%205.jpg" alt="diagram5" />
      </div><!-- end of section2 -->
      
      <p class="describe2">
        For higher resolution pictures, please click links down 
        below for contact.
      </p>
      
      <div class="line2"></div>
      
      <div class="section4"><!-- start of section4 -->
          <a href="#" class="email">
            <img src="/images/email.png" alt="email" />
          </a>

          <a href="#" class="ins">
            <img src="/images/ins.png" alt="instagram" />
          </a>

          <a href="#" class="wechat">
            <img src="/images/wechat.png" alt="wechat" />
          </a>
        </div><!-- end of section4 -->


        <footer>
          <p>© 2020 Cgroup, Inc.<br /> Term<br /> Privacy</p>
          
          <div id="last_modified">
            <script>
            document.scripts[document.scripts.length-1].parentNode.innerHTML = "Last Modified: " + document.lastModified;
            </script>
          </div>
          
        </footer>
    </div>
  </body>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  