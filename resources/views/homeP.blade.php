@extends('layouts.index')
@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=League+Spartan:wght@600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;600&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        .row.section_1{
            margin-left: 0;
            margin-top: 90px;
            padding: 0;
            width: 100vw;
            height: 100vh;
            background-color: black;
        }
        .row.section_1 > .video_section{
            margin: 0;
            padding: 0;
            width: 100%;
            height: 70%;
            background-color: cadetblue;
        }
        .row.section_1 > .title{
            margin-bottom: 24px;
            margin-top: 70px;
            font-family: 'League Spartan', sans-serif;
            color: #fff;
            font-size: 50px;
            line-height: 55px;
            font-weight: 400;
            text-align: center;
            letter-spacing: 5px;
            text-transform: uppercase
        }
        .row.section_2{
            margin-left:0;
            margin-right:0;
            padding: 0;
            width: 100%;
            min-height: 250vh;
            background-color: black;
        }
        .part_1_main{
            margin-left: 0;
            margin-bottom: 10vh;
            width: 100vw;
            min-height: 62vh;
            padding: 0;
        }
        .row.parts.part_2,
        .row.parts.part_3{
            position: relative;
            display: flex;
            align-items: center;
            min-height: 62vh;
            margin-left: 0;
            margin-right: 0;
            margin-top: 10vh; 
            margin-bottom: 10vh; 
        }
        .parts > .picture{
            display: flex;
            justify-content: center;
            align-content: center;
            height: 62vh;
        }
        .parts > .picture > img{
            position: inherit;
            width: 100%;
            height: 100%; 
            border : solid 3.5px #fff;

        }
        .parts > .text{
            margin-top: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .parts.part_1 > .text,
        .parts.part_3 > .text{
            height: 100%;
            padding-left: 4.026354319180088%;
            padding-right: 4.758418740849195%;
        }
        .parts.part_2 > .text{
            padding-left: 4.026354319180088%;
            padding-left: 4.758418740849195%;

        }
        .parts > .text > div > .text_heading{
            font-family: 'League Spartan', sans-serif;
            font-size: 50px;
            top: 0;
            color: #fff;
            font-weight: 400;
            margin-bottom: 10px;
        }

        .parts > .text > p{
            opacity: .5;
            Color : white;
            max-width: 100%;
            max-height: 62vh;
            font-size: 22px;
            font-weight: 400;
            font-family: 'League Spartan', sans-serif;
            line-height: 31px;
            text-align: left;
        }
        .parts > .text > .button_text{
            background-color: brown;
            border: solid 2px #fff;
            font-family: 'League Spartan', sans-serif;
            font-size: 22px;
            border-radius: 2px;
            padding-left: 30px;
            padding-right: 30px;
            padding-top: 12px;
            padding-bottom: 9px;
            margin-top: 5px;
            margin-bottom: 5vh;
        }
        .part_1 > .picture,
        .part_3 > .picture{
            padding-left: 0;
            padding-right: 50px;
        }
        .part_2 > .picture{
            padding-left: 50px;
            padding-right: 0;
        }
        .nav_opions{
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            margin-bottom: 34px;
            padding-bottom: 15px;
            justify-content: center;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }
        .horizon_nav{
            display: flex;
            height: auto;
            margin-right: 12px; 
            margin-bottom: 0px;
            padding-right: 10px;
            padding-left: 10px; 
            font-size: 22px;
            justify-content: center;
            align-items: center;
            align-self: auto;
            border-style: none none solid;
            border-width: 3px;
            border-color: #fff;
            border-radius: 0;
            background-color: hsla(0, 0%, 100%, 0);
            opacity: .5;
            transition: color .2s, background-color .2s;
            font-family: Spartan, sans-serif;
            color: #fff;
            text-transform: uppercase;
            cursor: pointer;

        }
        .horizon_nav:hover {
            background-color: hsla(0, 0%, 100%, 0);
            color: #fff
        }
        .horizon_nav.current {
            height: auto;
            border-style: none none solid;
            border-bottom-color: #cc334f;
            border-radius: 0;
            background-color: transparent;
            opacity: 1;
            -webkit-transition: .2s;
            transition: .2s;
            font-family: Spartan, sans-serif;
            color: #fff;
            font-weight: 600;
            text-transform: uppercase
        }
        .parts.part_1{
            position: relative;
            height: 0;
            opacity: 0;
            margin: 0;
        }
        .parts.part_1 > .text{
            transform: translateX(-100.67%);
        }
        .parts.part_1 > .picture{
            transform: translateX(100.33%);
        }
        .parts.active_part{
            opacity: 1;
            height: 62vh;
            transform: none;
            transition: all 5ms ease-out;
        }
        .parts.active_part > .text,
        .parts.active_part > .picture{
            transform: translateX(0);
            transition: all 600ms ease-out;

        }

        .text.to_left{
            transform: translateX(-80%) !important;
            opacity: 1;
            transition: opacity 1000ms linear , transform 1000ms ease-out;

        }
        .text.to_right{
            transform: translateX(80%);
            opacity: 1;
            transition: opacity 1000ms linear , transform 1000ms ease-out;

        }
        .picture.to_left{
            transform: translateX(-90%) !important;
            opacity: 0.3;
            transition: opacity 1000ms linear , transform 1000ms ease-out;

        }
        .picture.to_right{
            transform: translateX(90%) !important;
            opacity: 0.3;
            transition: opacity 1000ms linear , transform 1000ms ease-out;

        }
        .picture.in-view_r,
        .picture.in-view_l,
        .text.in-view_r,
        .text.in-view_l{
            transform: none;
            opacity: 1;
            transition: opacity 1000ms linear , transform 1000ms ease-out;

        }
        @media only screen and (max-width:909px){
            .row.parts.part_1,
            .row.parts.part_3{
                display: flex;
                flex-direction: column-reverse;
                width: 100%;

            }
            .row.active_part{
                height: auto;
            }
            .row.parts.part_2{
                display: flex;
                flex-direction: column;
                width: 100%;

            }
            .row.active_part .text,
            .row.part_2 .text,
            .row.part_3 .text{
                top: auto;
                width: 100%;
                height: auto;
            }
            .row .picture{
                top: 0;
                width: 100%;
                padding: 0 20px 0 20px;
                
            }
            .row.active_part .picture,
            .row.part_2 .picture,
            .row.part_3 .picture{
                height: 62vh;
            }
        }
        @media only screen and (max-width:1100px){


            .parts > .text > p{
                font-size: 18px;
                font-family: 'League Spartan', sans-serif;
                line-height: 29px;
                text-align: center;
            }
            .parts > .text > .button_text{
                font-family: 'League Spartan', sans-serif;
                font-size: 18px;
                padding-left: 25px;
                padding-right: 25px;
                padding-top: 7px;
                padding-bottom: 4px;
            }
        }
        @media only screen and (max-width:700px){
            .row.section_1{
                margin-top: 60px;
            }
        }
        @media only screen and (max-width:750px){
            .row.section_1 .title{
                margin-bottom: 24px;
                margin-top: 70px;
                font-family: 'League Spartan', sans-serif;
                font-size: 40px;
                line-height: 50px;
                font-weight: 400;
            }
        }
    </style>
    <div class="container-wrapper" style="overflow-x: hidden !important;">
        <div class="row section_1">
            <div class="video_section">

            </div>
            <h1 class="title">
                <strong>TEACHERS</strong> ARE <strong>ESSENTIAL</strong>
            </h1>
        </div>
        <div class="row section_2">
            <div class="nav_opions">
                <div class="horizon_nav">Option 1</div>
                <div class="horizon_nav">Option 2</div>
                <div class="horizon_nav current">Option 3</div>
            </div>
            <div class="row part_1_main">

                <div class="row parts part_1 clearfix">
                    <div class="p_el text to_left col-sm-12 col-md-5 ">
                        <div>
                            <div class="text_heading">Money Money</div>
                        </div>
                        <p class="text_body">Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Deserunt ipsam tempora dolorum ratione dolores hic ipsum aliquid, eligendi laudantium magni cumque similique. </p>
                        <button type="" class="button_text">Watch now</button>
                    </div>
                    <div class="p_el picture to_right col-sm-12 col-md-7">
                        <img src="{{ URL::secure_asset('storage/1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="row parts part_1 clearfix">
                    <div class="p_el text to_left col-sm-12 col-md-5 ">
                        <div>
                            <div class="text_heading">Money Money</div>
                        </div>
                        <p class="text_body">Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Deserunt ipsam tempora dolorum ratione dolores hic ipsum aliquid, eligendi laudantium magni cumque similique. </p>
                        <button type="" class="button_text">Watch now</button>
                    </div>
                    <div class="p_el picture to_right col-sm-12 col-md-7">
                        <img src="{{ URL('storage/1-2.jpg') }}" alt="">
                    </div>
                </div>
                <div class="row parts part_1 clearfix active_part">
                    <div class="p_el text to_left col-sm-12 col-md-5 ">
                        <div>
                            <div class="text_heading">Money Money</div>
                        </div>
                        <p class="text_body">Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Deserunt ipsam tempora dolorum ratione dolores hic ipsum aliquid, eligendi laudantium magni cumque similique. </p>
                        <button type="" class="button_text">Watch now</button>
                    </div>
                    <div class="p_el picture to_right col-sm-12 col-md-7">
                        <img src="{{ URL('storage/1-3.jpg') }}" alt="">
                    </div>
                </div>
                
            </div>
            <div class="row parts part_2 clearfix">
                <div class=" p_el picture to_left col-sm-12 col-md-7 ">
                    <img src="{{ URL('storage/2.jpg') }}" alt="">
                </div>
                <div class="p_el text to_right col-sm-12 col-md-5 ">
                    <div>
                        <div class="text_heading">Money Money</div>
                    </div>
                    <p class="text_body">Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                    Deserunt ipsam tempora dolorum ratione dolores hic ipsum aliquid, eligendi laudantium magni cumque similique. </p>
                    <button type="" class="button_text">Watch now</button>
                </div>
            </div>
            <div class="row parts part_3 clearfix">
                <div class="p_el text to_left col-sm-12 col-md-5 ">
                    <div>
                        <div class="text_heading">Money Money</div>
                    </div>
                    <p class="text_body">Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                    Deserunt ipsam tempora dolorum ratione dolores hic ipsum aliquid, eligendi laudantium magni cumque similique. </p>
                    <button type="" class="button_text">Watch now</button>
                </div>
                <div class="p_el picture to_right col-sm-12 col-md-7 ">
                    <img src="{{ URL('storage/3.webp') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <script>
        let button = document.querySelectorAll('.horizon_nav');
        let content_inside = document.querySelectorAll('.part_1');
        
        Array.from(button).forEach(function(buttonArray, i) {
        buttonArray.addEventListener('click', function() {
                    
             Array.from(button).forEach(buttonAll => buttonAll.classList.remove('current'));

            Array.from(content_inside).forEach(content_insideAll => content_insideAll.classList.remove('active_part'));

            button[i].classList.add('current'); 

            content_inside[i].classList.add('active_part');  
          });
        });
    </script>

    <!-- //////////////////////////////////////////////// -->

    <script>
        const observerOptions = {
            root: null,
            threshold: 0,
            rootMargin: '-50px 100px -50px 0px'
        };

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.replace('to_right' , 'in-view_r');
                    entry.target.classList.replace('to_left' , 'in-view_l');
                    // entry.target.classList.replace('right-text' , 'in-view');
                    // observer.unobserve(entry.target);
                    console.log(entry);
                }else{
                    entry.target.classList.replace('in-view_r' , 'to_right');
                    entry.target.classList.replace('in-view_l' , 'to_left');
                    // entry.target.classList.replace('in-view' , 'right-text');
                }
            
            });
        }, observerOptions);

        window.addEventListener('DOMContentLoaded', (event) => {
        
            const sections = Array.from(document.querySelectorAll('.p_el'));
            // const sections_left = Array.from(document.querySelectorAll('.wf-left'));
        
            for (let section of sections) {
                observer.observe(section);
            }
            // for (let section of sections_left) {
            //     observer.observe(section);
            // }
        });
    </script>
@endsection