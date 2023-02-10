<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Digital Marketing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="image/favicon.ico" type="image/x-icon">
</head>
<body>
    {{ View::make('header') }}

    <div class="box">

        {{-- -------------------------Digital Marketing----------------------------- --}}

        <div class="digital" id="digital">
            <h1><span>Digital Marketing</span></h1>
            <div class="digital1">
                <p>
                    Kampritech Team Holds The Key Competencies In Trafficking And Conversion For Their Client’s
                    Business. They Research Intensively To Improve The Digital Marketing Services And Meet Their
                    Clients’ Needs.
                    Every Business Needs A Strategic Platform To Get Shifted To The Next Level Of Achievements. The
                    Retention Of Growth Can Be Managed With The Appropriate Services Required To Hold Presence Through
                    The Internet-Based Source. Our Result-Oriented Digital Marketing Services Include The Following:-
                </p>
            </div>
            <div class="web">
                <div class="web1">
                    <img src="image/img.jfif" alt="error!">
                    <h2><span>SEARCH ENGINE OPTIMIZATION</span></h2>
                    <p>
                        We Offer The Standard Search Engine Optimization Services To Improve The Visibility Of Our
                        Client’s Websites To Let Them Reach Out To The Targeted Audiences Easily. We Optimize The
                        Website Using The SEO Rules To Increase Trafficking And To Enhance The Accessibility To The
                        People When They Search For Your Products And Services.
                    </p>
                    <button class="btn btn-primary">Get Started</button>
                </div>
                <div class="web1">
                    <img src="image/img.jfif" alt="error!">
                    <h2><span>PAY PER CLICK MARKETING</span></h2>
                    <p>
                        We At Kampritech Believe In Adopting An Online Advertising Strategy Through Google Ads To
                        Provide You With A Systematic Strategy For Online Businesses. Work Through Pay-Per-Click
                        Services To Increase The Trafficking On Your Website Within A Short Span.
                    </p>
                    <button class="btn btn-primary">Get Started</button>
                </div>
                <div class="web1">
                    <img src="image/img.jfif" alt="error!">
                    <h2><span>SOCIAL MEDIA MARKETING</span></h2>
                    <p>
                        The Promotion Of Services And Products Through Social Media Platforms Is Quite Prevalent In
                        Recent Days. Thus We Value The Importance Of Facebook, LinkedIn, Instagram, And Other Social
                        Media Sites Through Which Our Client’s Business Can Be Promoted. We Have Developed A
                        Well-Defined Stray To Optimize Social Media To Offer The Best Result To Our Clients.
                    </p>
                    <button class="btn btn-primary">Get Started</button>
                </div>
                <div class="web1">
                    <img src="image/img.jfif" alt="error!">
                    <h2><span>SECURE WEB DEVELOPMENT</span></h2>
                    <p>
                        Our Website Development Services Are Based On Complete Security And We Enter Your Data Along
                        With Applying Authentication. Kampritech Takes Care Of The Strategic Design To Develop An
                        Effective Website With Complete Security.
                    </p>
                    <button class="btn btn-primary">Get Started</button>
                </div>
            </div>

        </div>

        {{-- ----------------------------Navbar--------------------------------- --}}
        <div class="add">
            <div class="message">
                <div class="message1">
                    <h2><span>Get Instant Your Requirement</span></h2>
                    <form>
                        <label>Name</label>
                        <input name="name" type="name" placeholder="Name"><br><br>
                        <label>Email</label>
                        <input name="email" type="email" placeholder="Email"><br><br>
                        <label>Number</label>
                        <input name="number" type="number" placeholder="Number"><br><br>
                        <label>text (optional)</label>
                        <textarea name="text" type="text" placeholder="text"></textarea><br><br><br>
                        <button class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <div class="add1">
                <h2><span>Get In Touch</span></h2>
                <h3><span>Contact Us We'll Give You a Solution</span></h3>
                <div class="cont">
                    <h5>Contact No</h5>
                    <p>+91 9874563210</p>
                    <p>+91 9630215487</p>
                </div>
                <div class="cont1">
                    <h5>Email Id</h5>
                    <p>kampritechdigital@gmail.com</a></p>
                </div>
                <div class="cont">
                    <h5>Address</h5>
                    <p>A-1108, GD Colony, Mayur Vihar Phase 3, New Delhi-110096
                    </p>

                </div>
                <div class="cont1">
                    <h5>Skype Id</h5>
                    <p>kampritechdigital96302587410.skype</p>

                </div>
            </div>
        </div>
        {{ View::make('footer') }}
    </div>
</body>
<style>
.box {
    background-color: #ffffff;
    color: rgb(132, 130, 130);
    width: 100vw;
    height: 81vh;
    position: relative;
    overflow: scroll;
}

.web {
    background-color: transparent;
    color: rgb(255, 255, 255);
    width: 98.9vw;
    height: 72vh;
    display: inline-flex;
}

.web1 {
    background-color: #ffffff;
    color: rgb(0, 0, 0);
    width: 18vw;
    height: 62vh;
    margin-left: 5.6vw;
    margin-top: 2vh;
    font-size: 1vw;
}

.web1 p {
    padding: 1vw;
}

.web1 img {
    width: 5vw;
    height: 5vh;
}

.digital {
    background-color: #a98cdd;
    color: rgb(255, 255, 255);
    width: 98.9vw;
    height: 101vh;
    text-align: center;
    font-size: 1.5vw;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

.digital1 {
    background-color: transparent;
    width: 80vw;
    height: 20vh;
    margin-left: 10vw;
}

.add {
    background-color: #5f539d;
    color: black;
    width: 98.9vw;
    height: 55vh;
    text-align: none;
    display: inline-flex
}

.message {
    background-color: #3d3c3d;
    color: rgb(255, 255, 255);
    width: 40vw;
    height: 55vh;
}

.message1 {
    background-color: transparent;
    color: rgb(255, 255, 255);
    width: 30vw;
    height: 45vh;
    margin-top: 5vh;
    margin-left: 5vw;
}

.message1 label {
    float: left;
    margin-left: 5vw;
}

.message1 input {
    float: right;
    margin-right: 5vw;
}

.message1 textarea {
    float: right;
    margin-right: 6vw;
}

.add1 {
    background-color: transparent;
    color: black;
    width: 58.9vw;
    height: 55vh;
}

.cont {
    background-color: transparent;
    color: rgb(0, 0, 0);
    width: 20vw;
    height: 15vh;
    float: left;
    margin-left: 8vw;
    margin-top: 3vh;
}

.add h5 {
    color: #ffffff;
}

.add1 span {
    color: #ffffff;
}

.cont1 {
    background-color: transparent;
    color: rgb(0, 0, 0);
    width: 20vw;
    height: 15vh;
    float: right;
    margin-right: 8vw;
    margin-top: 3vh;
}


@media (max-width:750px) {

    .box {
        width: 100vw;
        height: 100vh;
    }

    .head {
        margin-top: 3vh;
    }

    .about {
        font-size: 2.5vw;
        height: 55vh;
    }

    .about1 {
        width: 100vw;
        height: 86vh;
        display: block;
    }

    .about2 {
        width: 100vw;
        height: 45vh;
        font-size: 3.5vw;
    }

    .aboutimg img {
        width: 70vw;
        height: 35vh;
        margin-left: -2vw;
    }

    .belive {
        width: 100vw;
    }

}
</style>

</html>
