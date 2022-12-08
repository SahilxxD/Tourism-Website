<?php include "login.php"; session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive tour and travel agency website design</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>

        <div id="menu-bar" class="fas fa-bars"></div>

        <a href="#" class="logo"><span>7</span>Heaven's</a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#book">book</a>
            <a href="#packages">packages</a>
            <a href="#services">services</a>
            <a href="gallery">gallery</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
        </nav>

        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <a class="btn" id="login-btn"><?php if($_SESSION['login'] != 1){
                echo "Log In";
            }else {echo($_SESSION['f_name']);} ?></a>
        </div>


        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>



    </header>




    <div class="login-form-container">

        <i class="fas fa-times" id="form-close"></i>

        <form action="login.php" method="post">
            <h3>login</h3>
            <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
            <input type="email" class="box" name="email" placeholder="enter your email">
            <input type="password" class="box" name="password" placeholder="enter your password">
            <input type="submit" value="login now" class="btn">
            <input type="checkbox" id="remember">
            <label for="remember">remember me</label>
            <p>don't have an account? <a href="registerPage.php">register now</a></p>

        </form>
    </div>
    
     <div class="login2-form-container">

        <i class="fas fa-times" id="form-close"></i>

        <form action="logout.php" method="post">
            <h3>log out</h3>
            <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
            <input type="submit" value="log out" class="btn">
        </form>
    </div>

   

    
   

    <!--home section-->
    <section class="home" id="home">

        <div class="content">
            <h3>Adventure is Worthwhile !</h3>
            <p>discover new places with us, adventure awaits.</p>
            <a href="#" class="btn">discover more</a>

        </div>

        <div class="controls">
            <span class="vid-btn active" data-src="tour and travel website\\images\\vid-1.mp4"></span>
            <span class="vid-btn" data-src="tour and travel website\\images\\vid-2.mp4"></span>
            <span class="vid-btn" data-src="tour and travel website\\images\\vid-3.mp4"></span>
            <span class="vid-btn" data-src="tour and travel website\\images\\vid-4.mp4"></span>
            <span class="vid-btn" data-src="tour and travel website\\images\\vid-5.mp4"></span>

        </div>

        <div class="video-container">
            <video src="tour and travel website\\images\\vid-1.mp4" id="video-slider" loop autoplay muted></video>
        </div>

    </section>

    <!--home section end-->

    <!--book section-->
    <section class="book" id="book">

        <h1 class="heading">
            <span>b</span>
            <span>o</span>
            <span>o</span>
            <span>k</span>
            <span class="space"></span>
            <span>n</span>
            <span>o</span>
            <span>w</span>
        </h1>

        <div class="row">

            <div class="image">
                <img src="tour and travel website\images\book-img.svg" alt="">
            </div>

            <form action="book.php" method="post">
                <div class="inputBox">
                    <h3>where to</h3>
                    <input type="text" placeholder="place name" name="location">
                </div>
                <div class="inputBox">
                    <h3>how many</h3>
                    <input type="number" placeholder="number of guests" name="guest">
                </div>
                <div class="inputBox">
                    <h3>arrivals</h3>
                    <input type="date" name="arr_date">
                </div>
                <div class="inputBox">
                    <h3>leaving</h3>
                    <input type="date" name="lev_date">
                </div>
                <input type="submit" class="btn" value="book now"  >

            </form>
        </div>




    </section>
    <!--book section end-->

    <!--packages section-->
    <section class="packages" id="packages">
        <h1 class="heading">
            <span>p</span>
            <span>a</span>
            <span>c</span>
            <span>k</span>
            <span>a</span>
            <span>g</span>
            <span>e</span>
            <span>s</span>
        </h1>

        <div class="box-container">

            <div class="box">
                <img src="tour and travel website\images\p-1.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i>Mumbai</h3>
                    <p>Mumbai is in all ways a mega-city driven by power, wealth, glamour and fame. It is also a city
                        with strong historical links, wonderful architecture, museums, beaches, places of worship, and
                        above all, a true galaxy of stars where Bollywood reigns supreme.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="price">Rs 7166.70<span>Rs 9555.60</span></div>
                    <a href="#book" class="btn">book now</a>
                </div>
            </div>



            <div class="box">
                <img src="tour and travel website\images\p-2.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i>Hawaii</h3>
                    <p>Hawaii is the only state to claim a royal history and palaces—three of them, in fact: Hulihee
                        Palace in Kailua-Kona on Hawaii island.</p>
                    <p></p>
                    <p></p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price">Rs 10351.90<span>Rs 11192.64</span></div>
                    <a href="#book" class="btn">book now</a>
                </div>
            </div>


            <div class="box">
                <img src="tour and travel website\images\p-3.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i>Tokyo</h3>
                    <p>Tokyo (東京, Tōkyō) is Japan's capital and the world's most populous metropolis. It is also one of
                        Japan's 47 prefectures, consisting of 23 central city wards and multiple cities, towns and
                        villages west of the city center.</p>
                    <p></p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price">Rs 8351<span>Rs 9192.6</span></div>
                    <a href="#book" class="btn">book now</a>
                </div>
            </div>



            <div class="box">
                <img src="tour and travel website\images\p-4.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i>Eiffel Tower</h3>
                    <p>What symbolizes Paris better than the Eiffel Tower? Soaring 324 meters (1,063 feet) into the air,
                        La Grande Dame en Fer - or Grand Iron Lady - defines the city's skyline. The tower is situated
                        in 7th arrondissement, one of the French capital's chicest districts, and was originally built
                        for the 1889 World's Fair in Paris. </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="price">Rs 11351<span>Rs 11692</span></div>
                    <a href="#book" class="btn">book now</a>
                </div>
            </div>


            <div class="box">
                <img src="tour and travel website\images\p-5.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i>China</h3>
                    <p>China is the single most populated nation and one of the largest countries in the world. The
                        country is so diverse that it makes up a long list of interesting facts that go could on and on.
                        From its ancient old civilization to its breathtaking sites, unique culture, and traditions.</p>
                    <p></p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price">Rs 7351<span>Rs 8192</span></div>
                    <a href="#book" class="btn">book now</a>
                </div>
            </div>




            <div class="box">
                <img src="tour and travel website\images\p-6.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i>Egypt</h3>
                    <p>Located on the northeast corner of Africa, Egypt is home to one of the world's earliest and
                        greatest civilizations, with a unified kingdom first surfacing around 3,200 B.C.</p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price">Rs 12351<span>Rs 13192</span></div>
                    <a href="#book" class="btn">book now</a>
                </div>
            </div>

        </div>

    </section>


    <!--packages section end-->


    <!--service section-->

    <section class="services" id="services">

        <h1 class="heading">
            <span>s</span>
            <span>e</span>
            <span>r</span>
            <span>v</span>
            <span>i</span>
            <span>c</span>
            <span>e</span>
            <span>s</span>
        </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-hotel"></i>
                <h3>affordable hotels</h3>
                <p>Two basic services provided by a hotel are room and board.
                    Thus, room (or the official term hotel accommodation) is the main service of the enterprise that
                    belong to hotel business.
                    Checking-in and checking-out are held round-the-clock. Besides providing an accommodation for
                    temporary staying, related services such as changing bedclothes, giving towels and hygiene items,
                    the opportunity to use appliances and TV set, cleaning and sanitation are available.
                    All these services are included into the cost of a hotel room in accordance with contractual
                    obligations.Meals are provided by dining facilities, restaurant, cafes, bars that work in a hotel or
                    in collaboration with it.
                    Foods can be also delivered to a hotel room.</p>
            </div>

            <div class="box">
                <i class="fas fa-utensils"></i>
                <h3>food and drinks</h3>
                <p>The food and beverage service is a process of preparing, presenting, and serving food and beverages
                    to customers.
                    Food can include a wide range of styles and cuisine types.
                    These can be classified by country.
                    Beverages include all alcoholic and non-alcoholic drinks.
                    Alcoholic beverages include wines and all other types of alcoholic drinks such as Cocktails, Beer,
                    Ciders, Spirits, and Liqueurs.</p>
            </div>
            <div class="box">
                <i class="fas fa-bullhorn"></i>
                <h3>safety guide</h3>
                <p>The guest, who comes to a particular hotel, comes with an understanding that he and his belongings
                    both will be safe and secure during his stay at the hotel.
                    At the same time it is also quite important that the hotel staff and assets are protected and
                    secure.
                    Hence it is very important to have a proper Safety and Security system in place to protect staff,
                    guests and physical resources and assets such as equipment, appliances buildings, gardens of the
                    hotel and also the belongings of the guest.
                    Safety and Security is always the first priority towards guest service.</p>
            </div>
            <div class="box">
                <i class="fas fa-globe-asia"></i>
                <h3>around the world</h3>
                <p>While we can’t go out and discover the world in person right now, we can still enjoy planning our
                    next trip for when it’s safe to travel.
                    To help fuel your planning, we’ve found facts from destinations around the world – oddities and
                    unknowns that will inspire your inner explorer.</p>
            </div>
            <div class="box">
                <i class="fas fa-plane"></i>
                <h3>fastest travel</h3>
                <p>The role of an online travel agency, or OTA for short, has become increasingly important within the
                    hotel industry, because they provide a convenient way for customers to compare hotels and to book
                    them over the internet, from the comfort of their own home, or on the go.
                    In this you will find out more about online travel agents and the best platforms to turn to in order
                    to increase the number of hotel bookings you attract from customers.</p>
            </div>
            <div class="box">
                <i class="fas fa-hiking"></i>
                <h3>adventures</h3>
                <p> Resorts strategically making it the most ideal destination for corporate outings & corporate events.
                    Spread hills, valley Resorts offers a perfect environment for corporate training & events with
                    stunning architecture and distinctive hospitality.</p>
            </div>
        </div>


    </section>

    <!--service section ends -->

    <!--gallery section-->

    <section class="gallery" id="gallery">

        <h1 class="heading">
            <span>g</span>
            <span>a</span>
            <span>l</span>
            <span>l</span>
            <span>e</span>
            <span>r</span>
            <span>y</span>
        </h1>

        <div class="box-container">

            <div class="box">
                <img src="tour and travel website\images\g-1.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>If you are in a beautiful place where you can enjoy sunrise and sunset, then you are living like
                        a lord.</p>
                    <a href="#" class="btn">See More</a>
                </div>
            </div>


            <div class="box">
                <img src="tour and travel website\images\g-2.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>If you are in a beautiful place where you can enjoy sunrise and sunset, then you are living like
                        a lord.</p>
                    <a href="#" class="btn">See More</a>
                </div>
            </div>



            <div class="box">
                <img src="tour and travel website\images\g-3.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>If you are in a beautiful place where you can enjoy sunrise and sunset, then you are living like
                        a lord.</p>
                    <a href="#" class="btn">See More</a>
                </div>
            </div>



            <div class="box">
                <img src="tour and travel website\images\g-4.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>If you are in a beautiful place where you can enjoy sunrise and sunset, then you are living like
                        a lord.</p>
                    <a href="#" class="btn">See More</a>
                </div>
            </div>



            <div class="box">
                <img src="tour and travel website\images\g-5.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>If you are in a beautiful place where you can enjoy sunrise and sunset, then you are living like
                        a lord.</p>
                    <a href="#" class="btn">See More</a>
                </div>
            </div>



            <div class="box">
                <img src="tour and travel website\images\g-6.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>If you are in a beautiful place where you can enjoy sunrise and sunset, then you are living like
                        a lord.</p>
                    <a href="#" class="btn">See More</a>
                </div>
            </div>



            <div class="box">
                <img src="tour and travel website\images\g-7.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>If you are in a beautiful place where you can enjoy sunrise and sunset, then you are living like
                        a lord.</p>
                    <a href="#" class="btn">See More</a>
                </div>
            </div>



            <div class="box">
                <img src="tour and travel website\images\g-8.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>If you are in a beautiful place where you can enjoy sunrise and sunset, then you are living like
                        a lord.</p>
                    <a href="#" class="btn">See More</a>
                </div>
            </div>


            <div class="box">
                <img src="tour and travel website\images\g-9.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>If you are in a beautiful place where you can enjoy sunrise and sunset, then you are living like
                        a lord.</p>
                    <a href="#" class="btn">See More</a>
                </div>
            </div>

        </div>

    </section>

    <!--gallery section ends-->

    <!--review section-->

    <section class="review" id="review">

        <h1 class="heading">
            <span>r</span>
            <span>e</span>
            <span>v</span>
            <span>i</span>
            <span>e</span>
            <span>w</span>
        </h1>

        <div class="swiper mySwiper review-slider">

            <div class="swiper-wrapper">

                <div class="slider">
                    <div class="box">
                        <img src="tour and travel website\images\pic1.png" alt="">
                        <h3>Suzy Lautze</h3>
                        <p>The holiday of a life time - our gulet adventure in the Dodecanese Greek Islands was without
                            a doubt our favourite family trip.
                            The comfort and beauty of the gulet, the incredibly caring crew, the delicious food, the
                            history we learned from our competent and friendly leader, along with the stunning beauty of
                            the islands. </p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>

            </div>

            <div class="slider">
                <div class="box">
                    <img src="tour and travel website\images\pic2.png" alt="">
                    <h3>Sanjay R Bhat</h3>
                    <p>We have safely reached Mumbai.
                        Our trip was enjoyable and stay comfortable except at Raniket and Nainital and the goofup of
                        Hotel at Binsar.
                        The people at all the Hotels were good.
                        The driver and the vehicle was also good.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>


        </div>

        <div class="slider">
            <div class="box">
                <img src="tour and travel website\images\pic3.png" alt="">
                <h3>Patricia Partridge</h3>
                <p>This was the first time I had travelled
                    The company specialises in expert-led cultural and gulet tours in Europe. Group numbers are small,
                    accommodation comfortable and food excellent.
                    The expert guide who accompanied us was outstanding - passionate, informative, engaging and
                    entertaining.
                </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div>


        </div>

        <div class="swiper-slider">
            <div class="box">
                <img src="tour and travel website\images\pic4.png" alt="">
                <h3>Steve Scheid</h3>
                <p>Excellent. Our best tour operator yet. The itinerary was carefully thought through and well balanced
                    The trip represented great travel for the cost. Our booking was easy, the pre-information packet was
                    timely and thorough
                </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div>


        </div>


        </div>



    </section>


    <!--review section ends-->

    <!--contact section-->

    <section class="contact">

        <h1 class="heading">
            <span>c</span>
            <span>o</span>
            <span>n</span>
            <span>t</span>
            <span>a</span>
            <span>c</span>
            <span>t</span>

        </h1>
        <div class="row">

        <div class="image">
            <img src="tour and travel website\images\contact-img.svg" alt="">
        </div>

        <form>
            <div class="inputBox">
                <input type="text" placeholder="Name" id="name">
                <input type="email" placeholder="Email" id="email">
            </div>
            <div class="inputBox">
                <input type="number" placeholder="Number" id="number">
                <input type="text" placeholder="Subject" id="subject">
            </div>
            <textarea placeholder="Message" name="" id="message" cols="30" rows="10"></textarea>
            <input type="submit" class="btn" value="send message" onclick="sendMail()">
        </form>

        </div>


    </section>



    </section>

    <!--footer section-->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>about us</h3>
                <p>We've been travelling the world for over many years, building a reputation for providing quality
                    travel content that,s inspiring, engaging and informative.
                    With all of our guides and features written and updated by a global network of expert travel writers
                    that includes some of the best names in the business, we pride ourselves on producing content that
                    stands out from the crowd.</p>
            </div>
            <div class="box">
                <h3>branch locations</h3>
                <a href="#">India</a>
                <a href="#">USA</a>
                <a href="#">Japan</a>
                <a href="#">France</a>
            </div>
            <div class="box">
                <h3>quick links</h3>
                <a href="#">home</a>
                <a href="#">book</a>
                <a href="#">packages</a>
                <a href="#">services</a>
                <a href="#">gallery</a>
                <a href="#">review</a>
                <a href="#">contact</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#">facebook</a>
                <a href="#">instagram</a>
                <a href="#">twitter</a>
                <a href="#">linkedin</a>
            </div>
        </div>

        <h1 class="credit"> created by <span> Sameer,Sahil,Amey,Adharsh </span> | all rights reserved! </h1>
    </section>
    <!--brand section ends-->


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!--custom js file link-->
    <script type="text/javascript">
    var myvar='<?php echo $_SESSION['login'];?>';
    </script>
    <script src="script.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!--custom js file link-->
<script src = "https://smtpjs.com/v3/smtp.js"></script>

<script type="text/javascript"
    src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
</script>
<script type="text/javascript">
(function(){
    emailjs.init("EWIJC4ITXY5iMQqF4");
})();
</script>

</body>

</html>