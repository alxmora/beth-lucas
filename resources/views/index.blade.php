<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beth Lucas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
</head>
<body>

    <!------------------------------------------------------------------------ HERO --------------------------------------------------->

    <section class="hero">
        <div class="navbar d-flex justify-content-start flex-row">
            <img class="logo" id="logo" src="{{asset('assets/png/logo.png')}}" alt="">
            <ul id='main-menu'>
                <li><a href="#" class="bl-a">Services</a></li>
                <li><a href="#" class="bl-a">About me</a></li>
                <li><a href="#" class="bl-a">Gallery</a></li>
                <li><a href="#" class="bl-a">Testimonials</a></li>
                <div class="icons d-flex flex-row justify-content-center align-items-center">
                    <a href="#"><img src="{{asset('assets/png/facebook.png')}}" alt=""></a>
                    <a href="#"><img src="{{asset('assets/png/twitter.png')}}" alt=""></a>
                    <a href="#"><img src="{{asset('assets/png/instagram.png')}}" alt=""></a>
                </div>
            </ul>
            <button class="bl-btn">schedule a consultation</button>
            <input type="checkbox" id="checkbox" class="checkbox d-none">
            <label for="checkbox">
                <div class="hamburger hamburger" onclick='activeMenu()'>
                    <span class="bar bar1"></span>
                    <span class="bar bar2"></span>
                    <span class="bar bar3"></span>
                    <span class="bar bar4"></span>
                </div>
            </label>
        </div>
        <div class="cta" id='hero-cta-container'>
            <h1>LET YOURSELF <br> TO BE BEAUTIFUL</h1>
            <div class="controls-mobile">
                <span class="control-mobile active"></span>
                <span class="control-mobile"></span>
                <span class="control-mobile"></span>
            </div>
            <button class="bl-btn-outline" id='hero-cta'>schedule appointment</button>
        </div>
        <div class="social-media">
            <p>Follow Our Social</p>
            <a href="#"><img src="{{asset('assets/png/instagram.png')}}" alt=""></a>
            <a href="#"><img src="{{asset('assets/png/facebook.png')}}" alt=""></a>
            <a href="#"><img src="{{asset('assets/png/twitter.png')}}" alt=""></a>
        </div>
        <div class="controls">
            <span class="left"><img src="{{asset('assets/png/left-control.png')}}" alt=""></span>
            <span class="right"><img src="{{asset('assets/png/right-control.png')}}" alt=""></span>
        </div>
    </section>


    <!--------------------------------------------------------------------- SERVICES --------------------------------------------------->

    <section class="services container">

        <div class="model">
            <img src="{{asset('assets/png/woman.png')}}" alt="">
            <div class="cta">
                <p><span><span id="click-tap"></span> on which face parts you’d like to consult on.</span> Go through easy five steps to get your best consultation result.</p>
                <button class="bl-btn">Get the Result</button>
            </div>
        </div>

        <div class="services-info-list">
            <div class="row">
                <div class="col-xl-3 col-lg-12 service-info-container">
                    <div class="service-info service-info-eyes">
                        <div class="description">
                            <span class="title">Eyes</span>
                            <span class="subtitle">Treatment</span>
                        </div>
                        <div class="overlay">
                            <div class="list">
                                <ul>
                                    <li>Thin Lips</li>
                                    <li>Gummy Smile</li>
                                    <li>Irregular Lips</li>
                                    <li>Smile Lines</li>
                                    <li>Asymmetric Smile</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-12 service-info-container">
                    <div class="service-info service-info-nose">
                        <div class="description">
                            <span class="title">Nose</span>
                            <span class="subtitle">Treatment</span>
                        </div>
                        <div class="overlay">
                            <div class="list">
                                <ul>
                                    <li>Thin Lips</li>
                                    <li>Gummy Smile</li>
                                    <li>Irregular Lips</li>
                                    <li>Smile Lines</li>
                                    <li>Asymmetric Smile</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-12 service-info-container">
                    <div class="service-info service-info-mouth">
                        <div class="description">
                            <span class="title">Mouth</span>
                            <span class="subtitle">Treatment</span>
                        </div>
                        <div class="overlay">
                            <div class="list">
                                <ul>
                                    <li>Thin Lips</li>
                                    <li>Gummy Smile</li>
                                    <li>Irregular Lips</li>
                                    <li>Smile Lines</li>
                                    <li>Asymmetric Smile</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-12 service-info-container">
                    <div class="service-info service-info-chin">
                        <div class="description">
                            <span class="title">Chin Jaw</span>
                            <span class="subtitle">Treatment</span>
                        </div>
                        <div class="overlay">
                            <div class="list">
                                <ul>
                                    <li>Thin Lips</li>
                                    <li>Gummy Smile</li>
                                    <li>Irregular Lips</li>
                                    <li>Smile Lines</li>
                                    <li>Asymmetric Smile</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!---------------------------------------------------------------------- ABOUT ----------------------------------------------------->

    <section class="about container">
            <div class="row d-flex align-items-center">
                <div class="col-xl-6 col-lg-5">
                    <h1 class="text-lg-start text-center">Meet Beth</h1>   
                    <p class="d-lg-block d-none" id="about-text">The Oaks Plastic Surgery is a premier plastic surgery practice planted in the heart of Houston, Texas. With a primary office based in the high-end Museum District of Houston, Texas, the plastic surgeons at The Oaks Plastic Surgery (TOPS) offer a variety of both cosmetic and reconstructive surgery services for patients in Houston, The Woodlands, Katy, Humble, Sugar Land, Pearland, Clear Lake, and other surrounding areas. Along with plastic surgery procedures, the plastic surgeons at The Oaks Plastic Surgery also offer a variety of non-surgical cosmetic services including Botox, Dysport, Juvederm, Restalyne, and other fillers.</p>             
                </div>
                <div class="col-xl-6 offset-xl-0 offset-lg-1 col-lg-6 col-12 d-flex justify-content-center">
                    <img src="{{asset('assets/jpg/about.jpg')}}" alt="">
                </div>
            </div>
            <div class="row d-lg-none d-block">
                <div class="col-12">
                    <button onclick="openAboutModal()" class="bl-btn">About Beth</button>
                </div>
            </div>

            <div class="about-modal" id="about-modal">
                <div class="about-modal-body">
                    <h1 class="text-start">About Beth</h1>   
                    <p id="about-modal-text"></p>
                    <img onclick="closeAboutModal()" src="{{asset('assets/png/close.png')}}" alt="">
                </div>
            </div>
    </section>


    <!-------------------------------------------------------------------- TESTIMONIALS ------------------------------------------------>

    <section class="testimonials container">
            <h1 class="text-center">Testimonials</h1>
            <div class="row">
                <div class="col-lg-6 col-12 testimonial">
                    <div class="testimonial-1">
                        <p>“These guys are awesome!  On Time, on Budget, perfect installation!”</p>
                        <small>-Johhny D Katy, TX</small>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="row testimonial">
                        <div class="testimonial-2">
                            <p>“These guys are awesome!  On Time, on Budget, perfect installation!”</p>
                            <small>-Johhny D Katy, TX</small>
                        </div>
                    </div>
                    <div class="row testimonial">
                        <div class="testimonial-3">
                            <p>“These guys are awesome!  On Time, on Budget, perfect installation!”</p>
                            <small>-Johhny D Katy, TX</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="controls d-lg-flex d-none">
            <span class="left"><img src="{{asset('assets/png/left-control.png')}}" alt=""></span>
            <span class="right"><img src="{{asset('assets/png/right-control.png')}}" alt=""></span>
        </div>
        <div class="more-link d-lg-none d-block mt-5">
            <a href="#" class="d-flex justify-content-center align-items-start flex-row">
                <p>View more testimonials</p>
                <img class="ms-3 mt-1" src="{{asset('assets/png/right-control-dark.png')}}" alt="">
            </a>
    </section>

    <!-------------------------------------------------------------------- INSTAGRAM ------------------------------------------------>

    <section class="instagram container">
            <h1 class="text-center">MORE INTERESTING IN MY INSTAGRAM</h1>
            <div class="gallery">
                <img src="{{asset('assets/jpg/Rectangle 2.12.jpg')}}" alt="">
                <img src="{{asset('assets/jpg/Rectangle 2.13.jpg')}}" alt="">
                <img src="{{asset('assets/jpg/Rectangle 2.14.jpg')}}" alt="">
                <img src="{{asset('assets/jpg/Rectangle 2.15.jpg')}}" alt="">
                <img src="{{asset('assets/jpg/Rectangle 2.16.jpg')}}" alt="">
                <img src="{{asset('assets/jpg/Rectangle 2.17.jpg')}}" alt="">
                <img src="{{asset('assets/jpg/Rectangle 2.18.jpg')}}" alt="">
                <img src="{{asset('assets/jpg/Rectangle 2.19.jpg')}}" alt="">
                <img src="{{asset('assets/jpg/Rectangle 2.20.jpg')}}" alt="">
                <img src="{{asset('assets/jpg/Rectangle 2.21.jpg')}}" alt="">
            </div>
            <div class="row d-flex justify-content-center">
                <button class="bl-btn">Follow Me On Instagram</button>
            </div>
    </section>

    <!------------------------------------------------------------------------- FOOTER ------------------------------------------------->

    <section class="footer">
        <div class="row">   
            <h1 class="text-center">
                CONTACT <br> BETH
            </h1>
            <form class="d-flex flex-column align-items-center">
                <input class="bl-input" type="text" placeholder="Your Name" name="name" id="name" onkeyup="activeInput(this)">
                <p class="error-message" id="error-message-name">This field is required</p>
                <input class="bl-input" type="text" placeholder="Your Phone" name="phone" id="phone" onkeyup="activeInput(this)">
                <p class="error-message" id="error-message-phone">This field is required</p>
                <div class="validation-message" id="validation-message">
                    <img onclick="closeValidationMessage()" src="{{asset('assets/png/close.png')}}" alt="">
                    <p></p>
                </div>
            </form>
            <button onclick="sendEmail()" class="bl-btn-outline bl-btn-outline-light mx-auto">Get in touch</button>
        </div>
        <div class="links flex-row justify-content-center align-items-center">
            <a href="#" class="bl-a bl-a-light">Services</a>
            <a href="#" class="bl-a bl-a-light">About me</a>
            <a href="#" class="bl-a bl-a-light">Gallery</a>
            <a href="#" class="bl-a bl-a-light">Testimonials</a>
        </div>
        <img class="logo" id="logo" src="{{asset('assets/png/logo.png')}}" alt="">
        <div class="contact d-flex justify-content-end flex-column text-end p-5">
            <div class="info">
                13333 Street Rd. #100 Houston TX 77070 <br>
                Email: <a href="mailto:bethlucas@gmail.com">bethlucas@gmail.com</a> <br>
                Tel: <a href="tel:8324112200">(832) 411-2200</a>
            </div>
            <div class="icons d-flex flex-row justify-content-center align-items-center">
                <a href="#"><img src="{{asset('assets/png/facebook.png')}}" alt=""></a>
                <a href="#"><img src="{{asset('assets/png/twitter.png')}}" alt=""></a>
                <a href="#"><img src="{{asset('assets/png/instagram.png')}}" alt=""></a>
            </div>
        </div>
        <img class="logo" id="power-to-beauty" src="{{asset('assets/png/power-to-beauty.png')}}" alt="">
    </section>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js'></script>
    <script src="{{asset('assets/js/scripts.js')}}"></script>
</body>
</html>