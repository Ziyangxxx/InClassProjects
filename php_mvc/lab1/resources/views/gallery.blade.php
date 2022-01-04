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
        height: 735px;
        background-color: #171b1c;
        display: grid;
        padding: 50px 0 50px 0;
      }/* styling section1 box */
      
      div.section1 img{
        border: 0.5px solid rgba(60,0,255,0.6);
        box-shadow: -5px -5px 12px rgba(60,0,255,0.4), 
                    5px 5px 12px rgba(60,0,255,0.4), 
                    -5px 5px 12px rgba(60,0,255,0.4), 
                    5px -5px 12px rgba(60,0,255,0.4);
      }/* styling section1 img box*/
      
      /* styling masks */
      div.mask1{
        position: relative;
        background-color: rgba(0,0,0,0.4);
        display: block;
        width: 281px;
        height: 403px;
        z-index: 99;
        transition: all .3s ease-in-out;
      }
      div.mask2{
        position: relative;
        background-color: rgba(0,0,0,0.4);
        display: block;
        width: 281px;
        height: 375px;
        z-index: 99;
        transition: all .3s ease-in-out;
      }
      div.mask3{
        position: relative;
        background-color: rgba(0,0,0,0.4);
        display: block;
        width: 281px;
        height: 381px;
        z-index: 99;
        transition: all .3s ease-in-out;
      }
      div.mask4{
        position: relative;
        background-color: rgba(0,0,0,0.4);
        display: block;
        width: 281px;
        height: 300px;
        z-index: 99;
        transition: all .3s ease-in-out;
      }
      div.mask5{
        position: relative;
        background-color: rgba(0,0,0,0.4);
        display: block;
        width: 281px;
        height: 330px;
        z-index: 99;
        transition: all .3s ease-in-out;
      }
      div.mask6{
        position: relative;
        background-color: rgba(0,0,0,0.4);
        display: block;
        width: 281px;
        height: 319px;
        z-index: 99;
        transition: all .3s ease-in-out;
      }
      
      /* styling hover effect for masks */
      div.mask1:hover{
        background-color: rgba(0,0,0,0);
      }
      div.mask2:hover{
        background-color: rgba(0,0,0,0);
      }
      div.mask3:hover{
        background-color: rgba(0,0,0,0);
      }
      div.mask4:hover{
        background-color: rgba(0,0,0,0);
      }
      div.mask5:hover{
        background-color: rgba(0,0,0,0);
      }
      div.mask6:hover{
        background-color: rgba(0,0,0,0);
      }
      
      /* grid layout for pics & masks */
      img.pic1,
      div.mask1{
        grid-row: 1;
        grid-column: 1;
        margin-left: 29px;
      }
      img.pic2,
      div.mask2{
        grid-row: 1;
        grid-column: 2;
      }
      img.pic3,
      div.mask3{
        grid-row: 1;
        grid-column: 3;
      }
      img.pic4,
      div.mask4{
        grid-row: 2;
        grid-column: 1;
        margin: 30px 0 0 29px;
      }
      img.pic5,
      div.mask5{
        grid-row: 2;
        grid-column: 2;
      }
      img.pic6,
      div.mask6{
        grid-row: 2;
        grid-column: 3;
        margin: 11px 0 0 0;
      }
      
      @media all and (max-width: 889px){
        
        div.section1{
          display: block;
          width: 960px;
          max-width: 100%;
          height: 1165px;
          background-color: #171b1c;
          display: grid;
          padding: 50px 0 50px 0;
        }
        
        img.pic1,
        div.mask1{
          grid-row: 1;
          grid-column: 1;
          margin-left: 85px;
        }
        img.pic2,
        div.mask2{
          grid-row: 1;
          grid-column: 2;
        }
        img.pic3,
        div.mask3{
          grid-row: 2;
          grid-column: 1;
          margin: 30px 0 0 85px;
        }
        img.pic4,
        div.mask4{
          grid-row: 3;
          grid-column: 1;
          margin: 30px 0 0 85px;
        }
        img.pic5,
        div.mask5{
          grid-row: 2;
          grid-column: 2;
          margin: 30px 0 0 0;
        }
        img.pic6,
        div.mask6{
          grid-row: 3;
          grid-column: 2;
          margin: 30px 0 0 0;
        }
      }
      
      @media print{
        div.section1 img{
          box-shadow: none;
        }
        
        div.mask1,
        div.mask2,
        div.mask3,
        div.mask4,
        div.mask5,
        div.mask6{
          display: none;
        }
        
        nav{
          display: none;
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
        <div class="mask1"></div>
        <img class="pic1" src="/images/ga/duanfalaoren.jpg" alt="duanfalaoren" />
        
        <div class="mask2"></div>
        <img class="pic2" src="/images/ga/maozilaoren.jpg" alt="maozilaoren" />
        
        <div class="mask3"></div>
        <img class="pic3" src="/images/ga/nvqingnian.jpg" alt="nvqingnian" />
        
        <div class="mask4"></div>
        <img class="pic4" src="/images/ga/nvzhongian.jpg" alt="nvzhongnian" />
        
        <div class="mask5"></div>
        <img class="pic5" src="/images/ga/nvzhonglaonian.jpg" alt="nvzhonglaonian" />
        
        <div class="mask6"></div>
        <img class="pic6" src="/images/ga/xianmiao.jpg" alt="xianmiao" />
      </div><!-- end of section1 -->
      
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
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  