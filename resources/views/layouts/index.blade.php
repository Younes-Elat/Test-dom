<!DOCTYPE html><!-- Last Published: Wed Aug 03 2022 19:32:18 GMT+0000 (Coordinated Universal Time) -->
<html>

<head>
    <meta charset="utf-8" />
    <title>Title of website</title>
    {{-- <meta content="I&#x27;m Andrew Tate - World champion kickboxer &amp; multi-millionaire. People used to tell me that a lifestyle like the one I live today is impossible to achieve, but I made it. It&#x27;s not easy, but with a few secrets, and a lot of hard work, you can join me at the top." name="description" />
    <meta content="Cobratate | Live What You Dream" property="og:title" />
    <meta content="I&#x27;m Andrew Tate - World champion kickboxer &amp; multi-millionaire. People used to tell me that a lifestyle like the one I live today is impossible to achieve, but I made it. It&#x27;s not easy, but with a few secrets, and a lot of hard work, you can join me at the top." property="og:description" />
    <meta content="https://assets.website-files.com/6181b0b1a9ba753863f1b595/61f53bc944e9e5365ebe90b2_yacht.png" property="og:image" />
    <meta content="Cobratate | Live What You Dream" property="twitter:title" />
    <meta content="I&#x27;m Andrew Tate - World champion kickboxer &amp; multi-millionaire. People used to tell me that a lifestyle like the one I live today is impossible to achieve, but I made it. It&#x27;s not easy, but with a few secrets, and a lot of hard work, you can join me at the top." property="twitter:description" />
    <meta content="https://assets.website-files.com/6181b0b1a9ba753863f1b595/61f53bc944e9e5365ebe90b2_yacht.png" property="twitter:image" />
    <meta property="og:type" content="website" />
    <meta content="summary_large_image" name="twitter:card" />
    <link href="./cobratate-v3.3a86c24b6.min.css" rel="stylesheet" type="text/css" /> --}}
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script> --}}
    {{-- <script src="{{ URL::asset('js/app.js') }}" type="text/javascript"  defer></script> --}}
    {{-- <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}"> --}}
    @vite(['resources/js/app.js'])
    <meta content="width=device-width, initial-scale=1" name="viewport" />

    {{-- @vite(['resources/css/main.css']) --}}
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Cardo:regular", "Spartan:200,regular,600,800"]
            }
        });
    </script>
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
    <script type="text/javascript">
        ! function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
        }(window, document);
    </script>
    {{-- <link href="https://assets.website-files.com/6181b0b1a9ba753863f1b595/6181b0b1a9ba75fdbef1b5fe_ctfavicon.png" rel="shortcut icon" type="image/x-icon" />
    <link href="https://assets.website-files.com/img/webclip.png" rel="apple-touch-icon" />
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-TZ21KQ0VFH"></script> --}}
    <script type="text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-TZ21KQ0VFH', {
            'anonymize_ip': false
        });
    </script>

    {{-- <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="https://drive.google.com/uc?export=view&id=1zL1A_3CYV17JRN70OkRpgyjsHRCnHwrf"></script> --}}
    <style>
        .w-webflow-badge {
            display: none !important;
        }
    </style>


    <script>
        if (document.getElementsByClassName) {
            // Safari 3+ and Firefox 3+
            var itms = document.getElementsByClassName('w-webflow-badge');
            for (var i = 0; i < itms.length; i++) {
                var it = itms[i];
                if (it.tagName == "DIV") {
                    it.parentNode.removeChild(it);
                    i = i - 1; //It actually gets removed from the array, so we need to drop our count
                }

            }
        } else {
            // All other browsers
            var itms = document.getElementsByTagName('div');
            for (var i = 0; i < itms.length; i++) {
                var it = itms[i];
                // Test that className contains your class
                if (/w-webflow-badge/.test(it.className)) it.parentNode.removeChild(it);
            }
        }
    </script>

    <script type="text/javascript">
        window.__WEBFLOW_CURRENCY_SETTINGS = {
            "currencyCode": "GBP",
            "$init": true,
            "symbol": "£",
            "decimal": ".",
            "fractionDigits": 2,
            "group": ",",
            "template": "@{{wf {\"path\":\"symbol\",\"type\":\"PlainText\"} }} @{{wf {\"path\":\"amount\",\"type\":\"CommercePrice\"} }} @{{wf {\"path\":\"currencyCode\",\"type\":\"PlainText\"} }}",
            "hideDecimalForWholeNumbers": false
        };
    </script>
</head>
<body class="body" >
    @include('layouts.header')
        @yield('content')
    {{-- @include('layouts.footer') --}}

    
    <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
    {{-- <script>
        // Check if user has seen the popup already
        if (localStorage.getItem("seenPopup") === null) {
            setTimeout(function() {

                document.getElementById("Popup").style.display = "Flex";

                localStorage.setItem("seenPopup", true);
            }, 2000);
        }
    </script> --}}

    <!--<script src="//code.tidio.co/a95kidymc70ygjkrkqhtuxyp8pmgudrk.js" async></script>-->


    
</body>

</html>