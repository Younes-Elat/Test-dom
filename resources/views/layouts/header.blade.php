{{-- <style>
    .div-block-4 {
        position: fixed;
        left: 0;
        top: 0;
        right: 0;
        bottom: auto;
        z-index: 100;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        max-height: 90px;
        min-height: 90px;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        border-style: none none solid;
        border-width: 1px 1px 3px;
        border-color: #0d1216 #0d1216 #fff;
        background-color: #0d1216
    }
    .navbar {
        position: static;
        left: auto;
        top: 0;
        right: auto;
        bottom: auto;
        width: 100%;
        max-width: 1200px;
        padding-top: 16px;
        padding-bottom: 16px;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        background-color: transparent
    }    
    .navbar {
        padding: 12px 20px;
        background-color: #0d1216
    }
    .w-nav {
        position: relative;
        background: #ddd;
        z-index: 1000
    }    
    .navbar-row {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
    }
    
    .div-block-2 {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center
    }
    .nav-menu {
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        margin-top: auto;
        display: flex;
        -webkit-box-align: center;
        margin-bottom: auto;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center
    }
    .nav-menu {
        padding: 12px;
        border-bottom-left-radius: 12px;
        border-bottom-right-radius: 12px;
        background-color: #12141d
    }
    .w-nav-menu {
        position: relative;
        float: right
    }
    .w-nav[data-collapse=all] .w-nav-menu {
        display: none
    }
    .w-nav:after,
    .w-nav:before {
        content: " ";
        display: table;
        grid-column-start: 1;
        grid-row-start: 1;
        grid-column-end: 2;
        grid-row-end: 2
    }

    .w-nav:after {
        clear: both
    }
    .w-nav-overlay [data-nav-menu-open] {
        top: 0
    }

    .w-nav[data-animation=over-left] .w-nav-overlay {
        width: auto
    }

    .w-nav[data-animation=over-left] .w-nav-overlay,
    .w-nav[data-animation=over-left] [data-nav-menu-open] {
        right: auto;
        z-index: 1;
        top: 0
    }

    .w-nav[data-animation=over-right] .w-nav-overlay {
        width: auto
    }

    .w-nav[data-animation=over-right] .w-nav-overlay,
    .w-nav[data-animation=over-right] [data-nav-menu-open] {
        left: auto;
        z-index: 1;
        top: 0
    }
    .w-nav[data-collapse=all] .w-nav-menu {
        display: none
    }
    @media screen and (max-width:991px) {
        .w-nav[data-collapse=medium] .w-nav-menu {
            display: none
        }

        .w-nav[data-collapse=medium] .w-nav-button {
            display: block
        }
    }

    @media screen and (max-width:767px) {
        .w-nav[data-collapse=small] .w-nav-menu {
            display: none
        }

        .w-nav[data-collapse=small] .w-nav-button {
            display: block
        }

        .w-nav-brand {
            padding-left: 10px
        }
    }
    @media screen and (max-width:479px) {
        .w-nav[data-collapse=tiny] .w-nav-menu {
            display: none
        }
    
        .w-nav[data-collapse=tiny] .w-nav-button,
        .w-tab-link {
            display: block
        }
    }
    .nav-link {
        margin-right: 15px;
        margin-left: 15px;
        padding: 0;
        opacity: .5;
        -webkit-transition: opacity .2s;
        transition: opacity .2s;
        font-family: Spartan, sans-serif;
        color: #fff;
        font-size: 13px;
        font-weight: 600;
        text-transform: uppercase
    }

    .nav-link:hover {
        opacity: 1
    }

    .nav-link:visited {
        opacity: 1;
        font-weight: 800
    }

    .nav-link.w--current {
        color: #fff;
        font-size: 12px
    }

    .nav-link.pink.hide {
        display: none
    }
    .nav-link {
        padding-top: 6px;
        padding-bottom: 6px
    }
    .nav-link.pink {
        width: 100%
    }
    .w-nav-link {
        position: relative;
        display: inline-block;
        vertical-align: top;
        text-decoration: none;
        color: #222;
        padding: 20px;
        text-align: left;
        margin-left: auto;
        margin-right: auto
    }
    .nav-link.pink {
        width: 100%;
        opacity: 1;
        color: #e82561
    }
    .nav-link.pink.hide {
        display: block
    }
    .nav-link.pink {
        color: #cc334f
    }

    .nav-link.pink.hide {
        color: #e82561
    }
    .w-nav-link.w--current {
        color: #0082f3
    }
</style>
<div class="div-block-4">
    <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar w-nav">
        <div class="navbar-row">
            <div class="div-block-2"><a href="/" aria-current="page" class="navbar-1-brand w-nav-brand w--current"><img src="https://assets.website-files.com/6181b0b1a9ba753863f1b595/6181b0b1a9ba758c6df1b5d9_Tate-Logo-Web3.png" alt="" class="image-9" /></a>
                <nav role="navigation" class="nav-menu w-nav-menu">
                    <a href="/" aria-current="page" class="nav-link w-nav-link w--current">Home</a>
                    <a href="/hustlers-university-2-0" class="nav-link w-nav-link">
                        <strong class="bold-text">HU 2.0</strong>
                    </a>
                    <a href="/war-room" class="nav-link w-nav-link">THE War room</a>
                    <a href="/the-tales-of-wudan" class="nav-link w-nav-link">Tales of wudan</a>
                    <a href="/bio" class="nav-link w-nav-link">about</a>
                    <a href="https://cobratatemembers.com/" class="nav-link w-nav-link">My Account</a>
                    <a href="/shop" class="nav-link pink hide w-nav-link">SHOP</a>
                </nav>
            </div>
            <div class="navbar-controls">
                <div class="navbar-buttons">
                    <div class="modal-container">
                        <div class="modal-background"></div>
                        <div class="content-width-medium modal-content">
                            <div class="panel-2 modal-panel">
                                <div class="modal-panel-bg"></div>
                                <div class="panel-body modal-panel-body">
                                    <form action="/search" class="search-form w-form"><input type="search" class="form-input form-input-large search-modal-input w-input" autofocus="true" maxlength="256" name="query" placeholder="Type your search" id="search" required="" /><input type="submit" value="Search" class="button search-form-button w-button" /></form>
                                </div>
                            </div>
                        </div>
                    </div><a href="/shop" class="button w-button">Shop</a>
                </div>
                <div class="menu-button w-nav-button">
                    <img src="https://assets.website-files.com/5ee73e3ba21f7b59cc1f69fc/5ee73e3bab90cfb4579d8d4f_icon-menu.svg" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>    --}}

<style>
    @import url('https://fonts.googleapis.com/css2?family=League+Spartan:wght@600&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;600&display=swap');
    header{
        font-family: 'League Spartan', sans-serif;
        max-height: 90px;
        min-height: 90px;
        width: 100vw;
        position: fixed;
        border-bottom: 3px solid #fff;
        top: 0;
        left: 0;
        right: 0;
        z-index: 100;
        bottom: auto;
        background-color: black;
    }
    header > .input_toggle{
        display: none;
    }
    header > .navbar{
        position: relative;
        min-width: 100%;
        min-height: 90px;
        max-width: 100%;
        max-height: 90px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-left: 4%;
        padding-right: 5.710102489019034%;

        /* background-color: #222; */
    }

    header > .navbar > *{
        margin-bottom: 0;
    }
    header > .navbar > .logo{
        color: #fff;
        font-size: 28px;
    }
    header > .navbar > ul{
        left: 20vw;
        margin-bottom: 0;
        display: inline-block;
    }
    header > .navbar > ul > li{
        display: inline-block;
        list-style-type: none;
        margin-left: 15px;
        margin-right: 15px;
    }
    header > .navbar > ul > li > .a_link{
        text-decoration: none;
        text-transform: uppercase;
        opacity: .5;
        transition: opacity .2s;
        color: #fff;
        font-size: 15px;
        font-weight: bold;
    }
    header > .navbar > ul > li > .a_link:hover{
        opacity: 1;
    }
    header > .navbar > .a_btn {
      color: #fff;
      cursor: pointer;
      font-size: 15px;
      font-weight: 600;
      max-width: 130px;
      position: relative;
      text-decoration: none;
      text-transform: uppercase;
      width: 100%;
      display: flex;
      margin-left: 8px;
      justify-content: center;
      align-items: center;
    }
    .a_btn:hover {
      text-decoration: none;
    }

    header > .navbar > .a_btn-1 {
      background: black;
      font-weight: 100;
    }
    header > .navbar > .a_btn-1 svg {
      height: 45px;
      position: absolute;
      width: 100%;
    }
    header > .navbar > .a_btn-1 rect {
      fill: none;
      stroke: #e82561;
      stroke-width: 3;
      stroke-dasharray: 422, 0;
      transition: all 0.35s linear;
    }

    header > .navbar > .a_btn-1:hover {
      background: rgba(225, 51, 45, 0);
      font-weight: 900;
      letter-spacing: 1px;
    }
    header > .navbar > .a_btn-1:hover rect {
      stroke-width: 5;
      stroke-dasharray: 45, 310;
      stroke-dashoffset: 225;
      transition: all 1.35s cubic-bezier(0.19, 1, 0.22, 1);
    }
    header > .label_toggle{
        display: none;
    }


    @media only screen and (max-width : 880px){
        header > .navbar{
            display: block;
        }
        header > .navbar > .logo{
            position: absolute;
            left: 8.99890697%;
            top: 28.205px;
        }
        header > .navbar > ul{
            position: absolute;
            top: 90px;
            transform: scale(1 , 0);
            display: flex;
            flex-direction: column;
            margin: 0;
            padding: 12px;
            position: absolute;
            width: 100%;
            height: auto;
            top: 90px;
            left: 0;
            background-color: #12141d;
            border-bottom-left-radius: 12px;
            border-bottom-right-radius: 12px;
            /* opacity: 0; */
            transform-origin: top;
            transition: transform 300ms ease-in-out ;
        }
        header > .navbar > ul > li{
            margin: 0;
            padding: 0;
            padding-top: 10px;
        }

        header > .navbar > ul > li > .a_link{
            opacity: 0;
            transition: opacity 150ms ease-in-out;
            font-size: 1.2rem;
            margin-left: 16px; 
            font-weight: 400;
        }

        header > .navbar > .a_btn{
            max-width: 100px;
            position: absolute;
            top: 32px;
            right: 8.99890697%;
            margin-right: 48px;
        }
        header > .navbar > .a_btn-1 rect {
          stroke-width: 3;
          stroke-dasharray: 422, 0;
          transition: all 0.35s linear;
        }
        header > .navbar >   .a_btn-1:hover rect {
          stroke-width: 5;
          stroke-dasharray: 45, 310;
          stroke-dashoffset: 255;
          transition: all 1.35s cubic-bezier(0.19, 1, 0.22, 1);
        }
        header > .label_toggle{
            position: absolute;
            top: 33px;
            right: 8.99890697%;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
            width: 24px;
            height: 22px;
            cursor: pointer;
            margin-left: 10px;
        }

        header > .label_toggle > .s_bar{
            background-color: #fff;
            color: #fff;
            width: 24px;
            height: 2px;
            cursor: pointer;
            transform: rotate(0);
            transition: transform 300ms;

        }
        header > .label_toggle:hover > .s_bar{
            background-color: #e82561;
            
        }
        header > .input_toggle:checked ~ .label_toggle > .s_bar{
            transform: rotate(360deg);
            background-color: #e82561;
            transition: transform 300ms;

        }
        header > .input_toggle:checked ~ .label_toggle:hover > .s_bar{
            background-color: #fff;
        }

        header > .input_toggle:checked ~ .navbar ul{
            transform: scale(1,1);
            transition: transform 350ms ease-in;

        }
        header > .input_toggle:checked ~ .navbar ul li > .a_link{
            opacity: .7;
            transition: opacity 150ms ease-out 250ms;
        }
        header > .input_toggle:checked ~ .navbar ul li:hover > .a_link{
            opacity: 1;
            transition: opacity 100ms linear;
        }

    }
    @media only screen and (max-width:700px){
        header , 
        header > .navbar{
            min-height: 60px;
            max-height: 60px;
        }
        header > .navbar > ul{
            top: 60px;
        }
        header > .navbar > ul > li > .a_link{
            font-size: 14px;
        }
        header > .navbar > .logo{
            position: absolute;
            left: 5%;
            top: 13.205px;
        }
        header > .navbar > .a_btn{
            top: 16.5px;
            right: 8.99890697%;;
        }
        header > .navbar > .a_btn svg{
            height: 30px;
        }
        header > .navbar >   .a_btn-1:hover rect {
          stroke-dasharray: 30, 310;
          stroke-dashoffset: 240;
        }
        header > .label_toggle{
            top: 18px;
        }

    }
</style>
<header>
    <input type="checkbox" name="input_toggle" id="input_toggle" class="input_toggle">

    <nav class="navbar">
        <h2 class="logo">John Doe</h2>
        <ul>
            <li><a class="a_link" href="#">Home</a></li>
            <li><a class="a_link" href="#"><strong>Home</strong>2.0</a></li>
            <li><a class="a_link" href="#">The room</a></li>
            <li><a class="a_link" href="#">Studies</a></li>
            <li><a class="a_link" href="#">About</a></li>
        </ul>
        <a href="https://twitter.com/Dave_Conner" class="a_btn a_btn-1">
            <svg>
              <rect x="0" y="0" fill="none" width="100%" height="100%"/>
            </svg>
           Sign-in
        </a>

    </nav>
    <label class="label_toggle" for="input_toggle">
        <span class="s_bar"></span>
        <span class="s_bar"></span>
        <span class="s_bar"></span>
    </label>
</header>