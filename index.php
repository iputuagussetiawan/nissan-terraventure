<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nissan Terraventure</title>
    <link rel="icon" type="image/png" href="./images/logo/favicon.png">
    <link href="assets/css/layout.css" rel="stylesheet" >
    <link href="assets/css/home.css" rel="stylesheet" >
</head>
<body>
    <?php 
        include_once('header.php');
    ?>
    <main>
        <section class="banner">
            <div class="swiper bannerSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="banner__image-container">
                            <img class="banner__image ratio-item" src="/images/pages/home/banner/banner-image.jpg" alt="banner image">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="banner__image-container">
                            <img class="banner__image ratio-item" src="/images/pages/home/banner/banner-image2.jpg" alt="banner image">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="banner__image-container">
                            <img class="banner__image ratio-item" src="/images/pages/home/banner/banner-image3.jpg" alt="banner image">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="banner__image-container">
                            <img class="banner__image ratio-item" src="/images/pages/home/banner/banner-image4.jpg" alt="banner image">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="banner__image-container">
                            <img class="banner__image ratio-item" src="/images/pages/home/banner/banner-image5.jpg" alt="banner image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container banner__container">
                <div class="banner__info">
                    <div class="banner__title-wrapper">
                        <h2 class="banner__title">TERRAVENTURE</h2>
                        <p class="banner__subtitle">ELEVATE YOUR JOURNEY</p>
                    </div>
                    <div class="banner__action-wrapper">
                        <a href="#" class="btn btn-danger mb-2">promo nissan terra</a>
                        <a href="#" class="btn btn-danger">DOWNLOAD BROCHURE</a>
                    </div>
                </div>
                <div class="banner__location">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M12 2C8.13 2 5 5.13 5 9C5 14.25 12 22 12 22C12 22 19 14.25 19 9C19 5.13 15.87 2 12 2ZM12 11.5C10.62 11.5 9.5 10.38 9.5 9C9.5 7.62 10.62 6.5 12 6.5C13.38 6.5 14.5 7.62 14.5 9C14.5 10.38 13.38 11.5 12 11.5Z" fill="white"/>
                    </svg>
                    Papuma Beach - Jember 
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </section>
        <section class="home-about section-padding">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-8">
                        <h2 class="home-about__title">
                            EXPLORING EAST JAVA
                        </h2>
                        <iframe width="700" height="450" src="https://www.youtube.com/embed/kKQxkBYCcqI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <div class="home-about__description">
                            <img class="home-about__art" src="./images/pages/home/about/java.png" alt="java map">
                            <p>Berpetualang menelusuri medan dan rintangan untuk mengeksplorasi Timur Pulau Jawa tentang <br>
                            sisi budaya, sejarah, dan keindahan alam bersama Nissan New Terra dan Ramon Y Tungka.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home-performance section-padding--top">
            <div class="container">
                <h2 class="section-title text-center">
                    READY FOR TERRAVENTURE
                </h2>
            </div>
            <div class="home-performance__inner">
                <div class="home-performance__specifications">
                    <div class="card-specifications">
                        <div class="card-specifications__label">
                            distance
                        </div>
                        <div class="card-specifications__value">
                            <span class="card-specifications__plus-minus">&#177;</span>
                            <span class="card-specifications__amount">2000</span>
                            <span class="card-specifications__unit">Km</span>
                        </div>
                    </div>

                    <div class="card-specifications">
                        <div class="card-specifications__label">
                            fuel
                        </div>
                        <div class="card-specifications__value">
                            <span class="card-specifications__plus-minus"></span>
                            <span class="card-specifications__amount">1:12</span>
                            <span class="card-specifications__unit">liter</span>
                        </div>
                    </div>

                    <div class="card-specifications">
                        <div class="card-specifications__label">
                            MAX SPEED
                        </div>
                        <div class="card-specifications__value">
                            <span class="card-specifications__plus-minus"></span>
                            <span class="card-specifications__amount">160</span>
                            <span class="card-specifications__unit">Km/jam</span>
                        </div>
                    </div>
                </div>
                <div class="home-performance__image-container">
                    <img src="./images/pages/home/performance/2.jpg" alt="READY FOR TERRAVENTURE" class="home-performance__image ratio-item">
                </div>                
            </div>
        </section>
        <section class="gallery section-padding">
            <div class="container">
                <h2 class="section-title gallery__title">
                    CONQUER EVERY TERRAIN WITH CONFIDENCE
                </h2>
                <div class="gallery__grid">
                    <div class="gallery__image-container">
                        <img class="gallery__image ratio-item" src="./images/pages/home/gallery/01.jpg" alt="gallery 01">
                    </div>
                    <div class="gallery__image-container">
                        <img class="gallery__image ratio-item" src="./images/pages/home/gallery/02.jpg" alt="gallery 02">
                    </div>
                    <div class="gallery__image-container">
                        <img class="gallery__image ratio-item" src="./images/pages/home/gallery/03.jpg" alt="gallery 03">
                    </div>
                </div>
           </div>
        </section>
        <section class="collaboration section-padding">
            <h2 class="section-title collaboration__title">
                NEW JOURNEY, NEW TERRAIN OF RAMON Y. TUNGKA
            </h2>
            <div class="collaboration__grid">
                <div class="collaboration__image-container">
                    <img class="collaboration__image ratio-item" src="/images/pages/home/collaboration/image.jpg" alt="NEW JOURNEY, NEW TERRAIN OF RAMON Y. TUNGKA">
                </div>
                <div class="collaboration__info-container">
                    <p>
                        Perjalanan selalu menjadi proses belajar dalam banyak hal, mewujudkan mimpi yang terlukis di langit dengan kaki yang tetap berpijak di bumi. Petualangan adalah perihal menaklukkan diri dengan berkenalan dan bercengkrama untuk terus menemukan inspirasi dari segi tradisi maupun budaya. Setiap proses perjalanan yang kita hadapi, bumi akan mengajarkan kita apa itu arti ketulusan dan kerendahan hati dalam menghadapi tantangan.
                    </p>
                </div>
            </div>
        </section>
        <section class="journey section-padding">
            <div class="journey__title">
                <h2 class="section-title">EASY FOR EVERY JOURNEY</h2>
            </div>
            <div class="journey__inner">
                <div class="journey__specification">
                    <div class="card-specifications">
                        <div class="card-specifications__label">
                            POWER
                        </div>
                        <div class="card-specifications__value">
                            <span class="card-specifications__amount">190 Ps</span>
                        </div>
                    </div>
                    <div class="card-specifications">
                        <div class="card-specifications__label">
                            Torque
                        </div>
                        <div class="card-specifications__value">
                            <span class="card-specifications__amount">450 Nm</span>
                        </div>
                    </div>
                    <div class="card-specifications">
                        <div class="card-specifications__value mb-2">
                            <span class="card-specifications__amount">2.5L</span>
                        </div>
                        <div class="card-specifications__label">
                            TURBODIESEL ENGINE
                        </div>
                        
                    </div>
                </div>
                <div class="journey__image-container">
                    <img src="/images/pages/home/journey/image-journey.jpg" alt="EASY FOR EVERY JOURNEY" class="journey__image ratio-item">
                </div>
            </div>
        </section>
        <section class="adventure section-padding">
            <div class="container">
                <div class="adventure__title">
                    <h2 class="section-title">
                        Simplify Your Adventure
                    </h2>
                </div>
                <div class="adventure__grid">
                    <div class="adventure__image-container big">
                        <img src="/images/pages/home/adventure/01.jpg" alt="gallery 01" class="adventure__image ratio-item">
                    </div>
                    <div class="adventure__image-container">
                        <img src="/images/pages/home/adventure/02.jpg" alt="gallery 02" class="adventure__image ratio-item">
                    </div>
                    <div class="adventure__image-container">
                        <img src="/images/pages/home/adventure/03.jpg" alt="gallery 03" class="adventure__image ratio-item">
                    </div>
                    <div class="adventure__image-container">
                        <img src="/images/pages/home/adventure/04.jpg" alt="gallery 04" class="adventure__image ratio-item">
                    </div>
                    <div class="adventure__image-container">
                        <img src="/images/pages/home/adventure/05.jpg" alt="gallery 05" class="adventure__image ratio-item">
                    </div>
                    <div class="adventure__image-container">
                        <img src="/images/pages/home/adventure/06.jpg" alt="gallery 06" class="adventure__image ratio-item">
                    </div>
                    <div class="adventure__image-container">
                        <img src="/images/pages/home/adventure/07.jpg" alt="gallery 07" class="adventure__image ratio-item">
                    </div>
                </div>
            </div>
        </section>
        <section class="photo-competition section-padding">
            <div class="container">
                <div class="photo-competition__title">
                    <h2 class="section-title">
                        Photo Upload Competition
                    </h2>
                </div>
                <div class="photo-competition__grid">
                    <div class="photo-competition__images">
                        <div class="photo-competition__image-one-container">
                            <img class="photo-competition__image-one ratio-item" src="/images/pages/home/photo-competition/01.jpg" alt="Photo Upload Competition 01">
                        </div>
                        <div class="photo-competition__image-two-container">
                            <img class="photo-competition__image-two ratio-item" src="/images/pages/home/photo-competition/02.jpg" alt="Photo Upload Competition 02">
                        </div>
                        <div class="photo-competition__image-three-container">
                            <img class="photo-competition__image-three ratio-item" src="/images/pages/home/photo-competition/03.jpg" alt="Photo Upload Competition 03">
                        </div>
                    </div>
                    <div class="photo-competition__info-container">
                        <p>Grand Winner : Get GOPRO HERO 11 black creator edition. 
                        2nd Winner & Others : Merchandise Travel like Camping tent / bag / T-Shirt.
                        Create social media campaign to get UGC (User Generated Content) with Adventure Competition Photo Challenge with terms & conditions :
                        </p>
                        <ul>
                            <li>Followed Instagram @nissan.id</li>
                            <li>Post on Feeds with interesting caption where do you want to travel if you could ride Nissan Terra with you. Must included hashtag #elevatethejourney & #terraventure and tag 5 people to join this competition</li>
                            <li>Post the Story with Caption “I want to ride Nissan Terra to … “, and tag @nissan.id with the hashtag #elevatethejourney & #terraventure.tag 5 people to join this competition </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php 
        include_once('footer.php');
    ?>
    <script src="assets/js/home.js"></script>
</body>

</html>