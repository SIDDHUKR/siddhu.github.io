<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="web development, seo, pay per use, ppu, social media advertisement,app">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="image/favicon.ico" type="image/x-icon">

    <title>Home</title>
</head>

<body>
    <?php echo e(View::make('header')); ?>

    <div class="box">
        <div class="imgbox">

            <div class="imgbox1">
                <button class="btn btn-primary" onclick="greet()">Book Slot</button>
                <div class="slotbox">
                    <form action="/add">
                        <?php echo csrf_field(); ?>
                        <h3><span>Book For Ad & Web ap</span></h3>
                        <br>
                        <label>Name</label>
                        <input name="name" type="name" placeholder="Name"><br><br>
                        <label>E-mail</label>
                        <input name="email" type="email" placeholder="E-mail"><br><br>
                        <label>Phone no</label>
                        <input name="number" type="number" placeholder="Phone no"><br><br>
                        <label>Service</label>
                        <select>
                            <option name="text" type="text" placeholder="Service">Choose</option>
                            <option name="text" type="text" placeholder="Service">Web app</option>
                            <option name="text" type="text" placeholder="Service">SEO</option>
                            <option name="text" type="text" placeholder="Service">PPU</option>
                            <option name="text" type="text" placeholder="Service">DM</option>
                        </select><br><br>
                        <label>Budget</label>
                        <select>
                            <option name="text" type="text" placeholder="Service">Choose</option>
                            <option name="text" type="text" placeholder="Service">$150 - $1000</option>
                            <option name="text" type="text" placeholder="Service">$50 - $100</option>
                            <option name="text" type="text" placeholder="Service">$10 - $100</option>
                            <option name="text" type="text" placeholder="Service">$100 - $500</option>
                        </select><br><br>
                        <label>Time</label>
                        <input name="time" type="number" placeholder="Time (In Weeks)"><br><br>
                        <div class="formbutton">
                            <a href="#">
                                <p class="btn btn-danger" value="customer">Book your Slot</p>
                            </a>
                            <p class="btn btn-danger" onclick="hide()">Cancel</p>

                        </div>
                    </form>
                </div>

                <script type="text/javascript">
                    function greet() {
                        document.getElementsByClassName('slotbox')[0].style.display = 'inline';
                    }

                    function hide() {
                        document.getElementsByClassName('slotbox')[0].style.display = "none";
                    }
                </script>

                <div class="boxsp">
                    <h1><span>Kampritech Digital Marketing<br>Social Media Advertisement & SEO</span></h1>
                </div>
            </div>
        </div>


        

        <h2><span>Web Applications & App</span></h2>
        <div class="dmbox" id="webbox">
            <div class="dmbox2">
                <a href="/webdev">
                    <div class="dmbox1">
                        <img src="image/img.jfif" alt="error!">
                        <p>websites <a href="www.google.com">kumar groups</a></p>
                    </div>
                    <div class="dmbox1">
                        <img src="image/img2.jfif" alt="error!">
                        <p>websites <a href="www.google.com">kumar groups</a></p>
                    </div>
                    <div class="dmbox1">
                        <img src="image/img3.jfif" alt="error!">
                        <p>websites <a href="www.google.com">kumar groups</a></p>
                    </div>
            </div>

            <div class="dmbox2">
                <div class="dmbox1">
                    <img src="image/img4.jfif" alt="error!">
                    <p>websites <a href="www.google.com">kumar groups</a></p>
                </div>
                <div class="dmbox1">
                    <img src="image/img5.jfif" alt="error!">
                    <p>websites <a href="www.google.com">kumar groups</a></p>
                </div>
                <div class="dmbox1">
                    <img src="image/img6.jfif" alt="error!">
                    <p>websites <a href="www.google.com">kumar groups</a></p>
                </div>
            </div>
        </div>
        </a>

        
        <h2><span>Digital Marketing & SEO</span></h2>
        <a href="/webdev">
            <div class="webbox" id="dmbox">
                <div class="webbox1">
                    <img src="image/img7.jfif" alt="error!">
                    
                </div>
                
            <div class="webbox2">
                        <a href="/webdev">
                        <p>SEO stands for search engine optimization, which is a set of practices designed to improve
                            the appearance and positioning of web pages in organic search results. Because organic
                            search is the most prominent way for people to discover and access online content, a good
                            SEO strategy is essential for improving the quality and quantity of traffic to your website.
                        </p>
                        </a>
                    </div>
            </div>
        </a>

        
        <h2><span>Testimonial</span></h2>
        <div class="tech">
            <div class="techbox">
                <img src="image/twitter.png" alt="error!">
                <p>This is social marketing, digital marketing, web & apps development, seo & ppu based company.
                    We are also providing counculting and we are also teaching our upcoming generation in seo etc...
                </p>
            </div>
            <div class="techbox">
                <img src="image/twitter.png" alt="error!">
                <p>This is social marketing, digital marketing, web & apps development, seo & ppu based company.
                    We are also providing counculting and we are also teaching our upcoming generation in seo etc...
                </p>
            </div>
            <div class="techbox">
                <img src="image/twitter.png" alt="error!">
                <p>This is social marketing, digital marketing, web & apps development, seo & ppu based company.
                    We are also providing counculting and we are also teaching our upcoming generation in seo etc...
                </p>
            </div>
            <div class="techbox">
                <img src="image/twitter.png" alt="error!">
                <p>This is social marketing, digital marketing, web & apps development, seo & ppu based company.
                    We are also providing counculting and we are also teaching our upcoming generation in seo etc...
                </p>
            </div>
        </div>

        
        <div class="contact" id="contact">

            <div class="add">
                <h3><span>Address</span></h3>
                <a
                    href=" https://www.google.com/maps/place/Red+Fort/@28.6564214,77.2365717,16.1z/data=!4m14!1m7!3m6!1s0x390cfce26ec085ef:0x441e32f4fa5002fb!2sRed+Fort!8m2!3d28.6561592!4d77.2410203!16zL20vMDVteXN2!3m5!1s0x390cfce26ec085ef:0x441e32f4fa5002fb!8m2!3d28.6561592!4d77.2410203!16zL20vMDVteXN2"><img
                        src="image/map1.png"></a>
                <p>RedFort New Delhi<br>New Delhi India<br>800016</p>
            </div>
            <div class="service">
                <h3><span>Services</span></h3>
                <p><a href="#webbox">Web & App Development</a><br>
                    <a href="#dmbox">Digital Marketing</a><br>
                    <a href="#seobbox">Search Engine op</a><br>
                    <a href="#ppubox">Pay Per Use</a>
                </p>
            </div>
            <div class="contact1">
                <h3><span>Career</span></h3>
                <p>Digital marketing<br>Social media marketing<br>Graphics Designer<br>SEO<br>PPU</p>
            </div>
            <div class="project">
                <h3><span>Projects</span></h3>
                <p>Digital marketing<br>Social media marketing<br>SEO<br>PPU</p>
            </div>
            <div class="company">
                <h3><span>About us</span></h3>
                <p>This is social marketing, digital marketing, web & apps development, seo & ppu based company.
                    We are also providing counculting and we are also teaching our upcoming generation in seo etc...
                </p>
                <div class="icon1">
                    <a href="www.facebook.com"><img src="image/fb.webp"></a>
                    <a href="www.linkedin.com"><img src="image/linkedIn.png"></a>
                    <a href="www.twitter.com"><img src="image/twitter.png"></a>
                    <a href="www.instagram.com"><img src="image/insta.webp"></a>
                </div>
            </div>
        </div>

        <?php echo e(View::make('footer')); ?>

    </div>
</body>

<style>
    .box {
        background-color: transparent;
        color: rgb(132, 130, 130);
        width: 100vw;
        height: 81vh;
        overflow: scroll;
    }

    .imgbox {
        background-image: url('image/viewimg1.jpeg');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        width: 98.9vw;
        height: 90vh;
    }

    .imgbox1 {
        background-color: transparent;
        color: rgb(112, 173, 118);
        width: 30vw;
        height: 30vh;
        position: relative;
        animation: numanim 5s ease-in-out infinite forwards;
    }

    @keyframes numanim{
        from{
            color: #98af64;
        }
        to{
            color: #9e6194;
        }
    }

    .imgbox1 button {
        margin-left: 85vw;
        margin-top: -6vh;
        position: fixed;
    }

    .slotbox h3 span {
        margin-left: 10vw;
    }

    .slotbox {
        background-color: rgb(255, 255, 255);
        color: black;
        width: 40vw;
        height: 60vh;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        display: none;
        position: fixed;
        margin-left: 50vw;
        margin-top: 6vh;
        border-radius: 1vw;
    }

    .slotbox form input {
        float: right;
        margin-right: 10vw;
    }

    .slotbox form label {
        float: left;
        margin-left: 10vw;
    }

    .slotbox select {
        float: right;
        width: 12vw;
        height: 4vh;
        margin-right: 10vw;
    }

    .formbutton {
        margin-left: 12vw;
    }

    .boxsp {
        width: 35vw;
        height: 30vh;
        margin-left: 10vw;
        margin-top: 30vh;
        position: absolute;
    }

    .dmbox {
        background-color: transparent;
        color: rgb(169, 163, 163);
        width: 98.9vw;
        height: 110vh;
        /* display: inline-flex; */
    }

    h2 span {
        margin-left: 40vw;
    }

    .dmbox2 {
        background-color: transparent;
        color: rgb(169, 163, 163);
        width: 98.9vw;
        height: 55vh;
        display: inline-flex;
        /* filter: blur(4px); */
    }

    .dmbox1 {
        background-color: transparent;
        color: rgb(100, 97, 97);
        width: 30vw;
        height: 50vh;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        margin-left: 2.5vw;
        margin-top: 2.5vh;
    }

    .dmbox1 img {
        width: 30vw;
        height: 35vh;
    }

    .webbox {
        background-color: transparent;
        color: white;
        width: 98.9vw;
        height: 55vh;
        display: inline-flex;
        /* filter: blur(4px); */
    }

    .webbox1 {
        background-color: transparent;
        color: rgb(100, 97, 97);
        width: 30vw;
        height: 50vh;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        margin-left: 2.5vw;
        margin-top: 2.5vh;
    }

    .webbox2 {
        background-color: transparent;
        color: rgb(100, 97, 97);
        width: 60vw;
        height: 50vh;
        /* box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px; */
        margin-left: 2.5vw;
        margin-top: 2.5vh;
        font-size: 1.5vw;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .webbox2 a p {
        text-decoration: none;
        color: rgb(100, 97, 97);
    }

    .webbox1 img {
        width: 30vw;
        height: 50vh;
    }

    .tech {
        background-color: transparent;
        color: rgb(100, 97, 97);
        width: 98.9vw;
        height: 35vh;
        display: inline-flex;
        padding: 1vw;
    }

    .techbox {
        background-color: transparent;
        color: rgb(115, 112, 112);
        width: 20vw;
        height: 30vh;
        margin-left: 2vw;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }

    .techbox img {
        width: 5vw;
        height: 10vh;
        margin-left: 7.5vw;
        border-radius: 5vw;
    }

    .contact {
        background-color: #bbbbbb;
        color: rgb(36, 35, 35);
        width: 98.9vw;
        height: 30vh;
        display: inline-flex;
    }

    .add {
        background-color: transparent;
        color: rgb(36, 35, 35);
        width: 15vw;
        height: 30vh;
        margin-left: .5vw;
    }

    .add img {
        width: 2vw;
        height: 4vh;
        border-radius: 1vw;
        float: left;
    }

    .add p {
        float: right;
        margin-right: 4vw;
    }

    .service {
        background-color: transparent;
        color: rgb(36, 35, 35);
        width: 15vw;
        height: 30vh;
        margin-left: 2vw;
    }

    .service p a {
        text-decoration: none;
        color: rgb(36, 35, 35);
    }

    .contact1 {
        background-color: transparent;
        color: rgb(36, 35, 35);
        width: 15vw;
        height: 30vh;
        margin-left: 2vw;
    }

    .project {
        background-color: transparent;
        color: rgb(36, 35, 35);
        width: 15vw;
        height: 30vh;
        margin-left: .5vw;
    }

    .company {
        background-color: transparent;
        color: rgb(36, 35, 35);
        width: 30vw;
        height: 30vh;
        margin-left: .5vw;
        position: relative;
    }

    .icon1 {
        background-color: transparent;
        color: black;
        width: 15vw;
        height: 5vh;
        text-align: center;
        display: inline-flex;
        margin-left: 5vw;
        position: absolute;
    }

    .icon1 img {
        width: 3vw;
        height: 3vh;
        margin-left: .5vw;
        border-radius: 1vw;
    }


    /* ---------For Mobile--------- */
    @media (max-width:650px) {

        .box {
            width: 100vw;
            height: 100vh;
            font-size: 3.5vw;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        .imgbox1 button {
            display: none;
        }

        .imgbox {
            width: 100vw;
            height: 70vh;
        }

        .imgbox1 {
            width: 30vw;
            height: 20vh;
        }

        .dmbox {
            width: 100vw;
            height: 110vh;
        }

        .dmbox2 {
            width: 100vw;
            height: 55vh;
        }

        .dmbox1 {
            width: 30vw;
            height: 45vh;
        }




        .webbox {
            width: 100vw;
            height: 101vh;
            display: inline-block;
        }

        .webbox1 {
            width: 70vw;
            height: 30vh;
            margin-top: 3vh;
            margin-left: 15vw;
        }

        .webbox1 img {
            width: 70vw;
            height: 25vh;
        }

        .tech {
            display: inline-block;
            height: 140vh;
            width: 100vw;
        }

        .techbox {
            width: 70vw;
            height: 30vh;
            margin-left: 15vw;
            margin-top: 3vh;
        }

        .techbox img {
            width: 15vw;
            height: 10vh;
            margin-left: 27vw;
            margin-top: 1vh;
        }

        .contact {
            display: none;
        }

    }
</style>

</html>
<?php /**PATH C:\xampp\htdocs\DigitalMarketingProject\resources\views/home.blade.php ENDPATH**/ ?>