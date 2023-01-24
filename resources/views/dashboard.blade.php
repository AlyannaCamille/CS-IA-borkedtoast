<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>

                <H1>SEE GALLERY BELOW</H1>

                <html>

                <head>
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
                </head>

                <!-- START OF GALLERY UPLOAD FORM -->

                <form action="one.php" method="post" enctype="multipart/form-data">

                    @csrf

                    GALLERY SLOT 1
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Upload Image" name="submit">
                </form>

                <form action="two.php" method="post" enctype="multipart/form-data">

                    @csrf

                    GALLERY SLOT 2
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Upload Image" name="submit">
                </form>

                <form action="three.php" method="post" enctype="multipart/form-data">

                    @csrf

                    GALLERY SLOT 3
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Upload Image" name="submit">
                </form>

                <form action="four.php" method="post" enctype="multipart/form-data">

                    @csrf

                    GALLERY SLOT 4
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Upload Image" name="submit">
                </form>


                <!-- START OF GALLERY DISPLAY -->


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

                </html>

            </div>

            <html>

            <head>
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
                        width: 250px;
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

                <a href="/users">

                    <button class="button" style="vertical-align:middle"><span> MANAGE USERS </span></button>

                </a>

                <a href="/contacts">

                    <button class="button" style="vertical-align:middle"><span> CONTACTS </span></button>

                </a>

                <a href="/orders">

                    <button class="button" style="vertical-align:middle"><span> MANAGE ORDERS </span></button>

                </a>

                <a href="/statuses">

                    <button class="button" style="vertical-align:middle"><span> STATUS </span></button>

                </a>

                <a href="/main">

                    <button class="button" style="vertical-align:middle"><span> VIEW PAGE AS CUSTOMER </span></button>

                </a>





            </body>

            </html>



        </div>

    </div>


</x-app-layout>