<!-- HEADER HERE -->

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    .topnav {
        overflow: hidden;
        background-color: #8FBC8F;
    }

    .topnav a {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 20px 20px;
        text-decoration: none;
        font-size: 17px;
    }

    .topnav a:hover {
        background-color: #FFFACD;
        color: black;
    }

    .topnav a.active {
        background-color: #FFC0CB;
        color: white;
    }


    #bg {
        background-image: "/samples/bg.PNG";
        display: block;
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        overflow: hidden;
        text-indent: 100%;
        white-space: nowrap;
        width: 100%;
    }
</style>

<body background="/samples/field.PNG">


    <div class="topnav">
        <a class="active" href="#home">Home</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
        <a href="/login">

            Admin Login

        </a>


    </div>

    <br>

    <!-- GALLERY -->


    <style>
        div.gallery {
            margin: 5px;
            border: 1px solid #ccc;
            float: left;
            width: 180px;
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            width: 100%;
            height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        }
    </style>



    <body>

        <div class="gallery">
            <a target="_blank" href="/uploads/one.PNG">
                <img src="/uploads/one.PNG" alt="one" width="600" height="400">
            </a>
            <div class="desc">Add a description of the image here</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="/uploads/two.PNG">
                <img src="/uploads/two.PNG" alt="two" width="600" height="400">
            </a>
            <div class="desc">Add a description of the image here</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="/uploads/three.PNG">
                <img src="/uploads/three.PNG" alt="three" width="600" height="400">
            </a>
            <div class="desc">Add a description of the image here</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="/uploads/four.PNG">
                <img src="/uploads/four.PNG" alt="four" width="600" height="400">
            </a>
            <div class="desc">Add a description of the image here</div>
        </div>

    </body>

    
    
    <br>




    <style>
        .button {
            display: inline-block;
            border-radius: 4px;
            background-color: #AFCD9C;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 20px;
            padding: 20px;
            width: 300px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
        }

        .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        .button:hover span {
            padding-right: 25px;
        }

        .button:hover span:after {
            opacity: 1;
            right: 0;
        }
    </style>
    </head>

    <body>
        <div>

            <a href="/terms">

                <button class="button" style="vertical-align:middle"><span> BUY NOW! </span></button>

            </a>

            <br>

        </div>
    </body>

    <H1>CUSTOMER PAGE</H1>

</body>

</html>