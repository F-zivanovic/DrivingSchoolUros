<!DOCTYPE html>
<html lang="sr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto škola - UROŠ</title>

    <link rel="shortcut icon" href="assets/images/about-icon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/images/about-icon.png">
    <meta name="author" content="Filip Zivanovic">
    <meta name="tittle" content="Auto škola - UROŠ">
    <meta name="keywords"
        content="Auto škola. Vozačka dozvola. Vozački ispit. Dozvola. Polaganja vožnje. Auto skola. autoskola borca. autoskola uros. autoskola uros borca. auto skola uros borca. Auto Skola Uros Borca. Borca autoskola. Borca Skola. AutoSkola UROS. UROS autoskola. Autoskola BORCA. autoskola uros. autoskola borca">
    <meta name="description" content="Auto škola UROŠ. Kvalitet
    obuke i opšta bezbednost u saobraćaju podigne na vrhunski nivo.
    Uz našu pomoć i način prenošenja znanja, kao novi polaznik, nalazite se u pravim i sigurnim rukama.">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Font awesome link -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
</head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-232956834-1">
</script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-232956834-1');
</script>

<body>

    <!-- Top bar section -->
    <div class="top-bar">
        <div class="top-bar__item">
            <i class="top-bar__item__icon fas fa-location-arrow"></i>
            <span class="top-bar__item__span"><a href="https://goo.gl/maps/zftwKGkptm6wtiWv7">Bratstva i jedinstva 89,
                    Borča</a></span>
        </div>
        <div class="top-bar__item">
            <i class="top-bar__item__icon fas fa-envelope"></i>
            <span class="top-bar__item__span"><a
                    href="mailto:kontakt@autoskolauros.rs">kontakt@autoskolauros.rs</a></span>
        </div>
        <div class="top-bar__item">
            <i class="top-bar__item__icon fas fa-clock"></i>
            <span class="top-bar__item__span">Pon - Pet: 09:00 - 17:00</span>
            <span class="top-bar__item__span">Sub: 09:00 - 14:00</span>
        </div>
    </div>
    <!-- Emd top bar section -->




    <!-- Navbar section -->
    <nav class="nav container">
        <a href="/" class="nav__logo">
            Auto <span class="nav__logo__span">Škola</span> - UROŠ
        </a>
        <ul class="nav__list">
            <li class="nav__list__item">
                <a href="index.php" class="nav__list__item__link">Početna</a>
            </li>
            <li class="nav__list__item">
                <a href="#about" class="nav__list__item__link">O nama</a>
            </li>
            <li class="nav__list__item">
                <a href="#pricing" class="nav__list__item__link">Cenovnik</a>
            </li>
            <li class="nav__list__item">
                <a href="#car" class="nav__list__item__link">Vozni park</a>
            </li>
            <li class="nav__list__item">
                <a href="#gallery" class="nav__list__item__link">Galerija</a>
            </li>
            <li class="nav__list__item">
                <a href="#contact" class="nav__list__item__link">Kontakt</a>
            </li>
        </ul>

        <div class="nav__hamburger" id="hamburger">
            <i class="nav__hamburger__icon fas fa-bars"></i>
        </div>

        <div class="nav__mobile hidden" id="mobile-menu">
            <i class="nav__mobile__icon fas fa-bars" id="mobile-hamburger"></i>
            <ul class="nav__mobile__list">
                <li class="nav__mobile__list__item">
                    <a href="index.php" class="nav__mobile__list__item__link">Početna</a>
                </li>
                <li class="nav__mobile__list__item">
                    <a href="#about" class="nav__mobile__list__item__link">O nama</a>
                </li>
                <li class="nav__mobile__list__item">
                    <a href="#pricing" class="nav__mobile__list__item__link">Cenovnik</a>
                </li>
                <li class="nav__mobile__list__item">
                    <a href="#car" class="nav__mobile__list__item__link">Vozni park</a>
                </li>
                <li class="nav__mobile__list__item">
                    <a href="#gallery" class="nav__mobile__list__item__link">Galerija</a>
                </li>
                <li class="nav__mobile__list__item">
                    <a href="#contact" class="nav__mobile__list__item__link">Kontakt</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End navbar section -->




    <!-- Banner section -->
    <section class="banner">
        <div class="banner__body container">
            <h3 class="banner__body__subheading">Najbolja opcija za vas</h3>
            <h2 class="banner__body__heading">vozi bezbedno i uzmi dozvolu <br> bez čekanja!</h2>
            <div class="banner__body__cta">
                <a class="banner__body__cta__link" href="tel:+381604072016">Pozovite nas</a>
                <a class="banner__body__cta__link" href="#online">Online upis</a>
            </div>
        </div>
    </section>
    <!-- End banner section -->




    <!-- Advertising section -->
    <section class="advertising container">
        <h3 class="advertising__heading">Nova škola u borči</h3>
        <p class="advertising__paragraph">B KATEGORIJA</p>
        <p class="advertising__paragraph">PROMO CENA 70.000 RSD</p>
        <p class="advertising__paragraph">KOMPLETNA OBUKA</p>
        <small>+ BESPLATNO LEKARSKO UVERENJE I PRVA POMOĆ</small>
        <p class="advertising__paragraph">NOVA GRUPA TEORIJSKE NASTAVE KREĆE 01.08.2022.</p>
        <p class="advertising__paragraph">Termini ispita:</p>
        <div class="advertising__exam container">
            <div class="advertising__exam-theory">
                <h5>Teorijski ispit:</h5>
                <p>02.08.2022.</p>
                <p>17.08.2022.</p>
            </div>
            <div class="advertising__exam-intern">
                <h5>Praktičan ispit:</h5>
                <p>09.08.2022.</p>
                <p>24.08.2022.</p>
            </div>
        </div>
        <a href="#online" class="advertising__link">Online upis</a>
    </section>
    <!-- Advertising section end -->




    <!-- About section -->
    <section class="about container" id="about">
        <div class="about__body">
            <article class="about__body__item" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400">
                <img src="assets/images/about-img.JPG" alt="about-img" class="about__body__item__img">
                <div class="about__body__item__icon">
                    <img src="assets/images/about-icon.png" alt="logo_about">
                </div>
            </article>
            <article class="about__body__item" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400">
                <div class="about__body__item__title section-title">O nama</div>
                <div class="about__body__item__title section-subtitle">Nauči da voziš bezbedno</div>
                <p class="about__body__item__text">
                    <strong>Auto škola UROŠ</strong> osnovana je 2022. godine sa misijom da se znanje vozača, kvalitet
                    obuke i opšta bezbednost u saobraćaju podigne na vrhunski nivo.
                    Dugogodišnje iskustvo naših predavača i instruktora nam je potvrdilo da je kvalitet obuke, način
                    predavanja i zadovoljstvo polaznika recept za bezbednu i sigurnu vožnju svakog polaznika.
                    Uz našu pomoć i način prenošenja znanja, kao novi polaznik, nalazite se u pravim i sigurnim rukama.
                </p>
                <a href="tel:+381604072016" class="about__body__item__link">
                    <i class="about__body__item__link__icon far fa-phone-plus"></i>
                    +381 60 407 2016
                </a>
            </article>
        </div>
    </section>
    <!-- End About section -->




    <!-- Info section -->
    <section class="info container">
        <div class="info__title section-title">Kako do dozvole</div>
        <div class="info__title section-subtitle">Najbrži način</div>
        <div class="info__body">
            <article class="info__body__item" data-aos="flip-left" data-aos-duration="800">
                <h2 class="info__body__item__header">01</h2>
                <div class="info__body__item__box">
                    <h3 class="info__body__item__box__heading">Teorijska nastava</h3>
                    <p class="info__body__item__box__text">
                        Svaki dan imamo po dva termina teorijske nastave, prepodnevni i popodnevni. Teorijska
                        nastava traje 40 časova. Dnevno kandidat može imati maksimalno 3 časa teorije. Održava se u
                        prostorijama auto škole. Prisustvo časovima je obavezno. Optimalno vreme za završetak nastave je
                        13 radnih dana. Nastava se odvija 6 dana u nedelji u dva termina. <span
                            class="info__body__item__box__text__span">Lična karta je obavezna.
                            Kandidat mora imati navršenih 16 godina</span>
                    </p>
                </div>
            </article>
            <article class="info__body__item" data-aos="flip-left" data-aos-duration="800">
                <h2 class="info__body__item__header">02</h2>
                <div class="info__body__item__box">
                    <h3 class="info__body__item__box__heading">Teorijski ispit</h3>
                    <p class="info__body__item__box__text">
                        Nakon završetka teorijske nastave kandidat pristupa polaganju teorijskog ispita u auto školi.
                        Polaže se pred ispitnom komisijom u prostorijama auto škole. Položen teorijski ispit važi godinu
                        dana i u tom roku se mora završiti praktična obuka i položiti kompletan vozački ispit.
                        <span class="info__body__item__box__text__span">Lična karta je obavezna.
                            Kandidat mora imati navršenih 16 godina</span>
                    </p>
                </div>
            </article>
            <article class="info__body__item" data-aos="flip-left" data-aos-duration="800">
                <h2 class="info__body__item__header">03</h2>
                <div class="info__body__item__box">
                    <h3 class="info__body__item__box__heading">Lekarsko uverenje</h3>
                    <p class="info__body__item__box__text">
                        Sledeći korak je vađenje lekarskog uverenja. Lekarsko je neophodan uslov za početak praktične
                        obuke u auto školi. Vadi se u ovlašćenoj zdravstvenoj ustanovi (medicina rada). Važnost
                        lekarskog uverenja je godinu dana za obuku a 6 meseci za vađenje vozačke dozvole.

                        <span class="info__body__item__box__text__span"> Auto škola ne sme započeti obuku bez važećeg
                            lekarskog uverenja</span>
                    </p>
                </div>
            </article>
            <article class="info__body__item" data-aos="flip-left" data-aos-duration="800">
                <h2 class="info__body__item__header">04</h2>
                <div class="info__body__item__box">
                    <h3 class="info__body__item__box__heading">Praktična obuka</h3>
                    <p class="info__body__item__box__text">
                        Vreme časova vožnje prilagođavamo vama. Na raspolaganju u našoj auto školi Vam stoji naš tim
                        licenciranih instruktora. Maksimalno se može voziti dva časa dnevno. Optimalno
                        vreme za završetak obuke je 20 radnih dana.
                        <span class="info__body__item__box__text__span">Kandidat može početi obuku sa navršenih 16
                            godina.
                            Lična karta je obavezna na svakom času voznje</span>
                    </p>
                </div>
            </article>
            <article class="info__body__item" data-aos="flip-left" data-aos-duration="800">
                <h2 class="info__body__item__header">05</h2>
                <div class="info__body__item__box">
                    <h3 class="info__body__item__box__heading">Polaganje vožnje</h3>
                    <p class="info__body__item__box__text">
                        Auto škola UROŠ poseduje 15 ispitnih zadataka. Slučajnim izborom kandidat dobija jedan od 15
                        ispitnih zadataka. Nakon upoznavanja sa relacijom kojom će se kretati ispit počinje, sastoji se
                        iz poligonskog dela i vožnje u saobraćaju ispitnom trasom. Trajanje ispita je oko 45 minuta.
                        <span class="info__body__item__box__text__span"> Starosni uslov za praktičan ispit je navršenih
                            17 godina.
                            Obavezna lična karta, pasoš ne može</span>
                    </p>
                </div>
            </article>
        </div>
    </section>
    <!-- End info section -->




    <!-- Pricing section -->
    <section class="pricing" id="pricing">
        <header class="pricing__header container">
            <div class="pricing__header__title section-title ">Specijalna ponuda</div>
            <div class="pricing__header__title section-subtitle">Cenovnik</div>
        </header>
        <article class="pricing__body container" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400">
            <article class="pricing__body__item">
                <div class="pricing__body__item__header">
                    70 000 Din. B kategorija
                </div>
                <ul class="pricing__body__item__list">
                    <li class="pricing__body__item__list-item">
                        <i class="fas fa-check-double"></i>Teorijska obuka - 15.000din.
                    </li>
                    <li class="pricing__body__item__list-item">
                        <i class="fas fa-check-double"></i>Praktična obuka -
                        45.000din
                    </li>
                    <li class="pricing__body__item__list-item">
                        <i class="fas fa-check-double"></i>Teorijski ispit -
                        5.000din
                    </li>
                    <li class="pricing__body__item__list-item">
                        <i class="fas fa-check-double"></i> Praktični ispit -
                        5.000din
                    </li>
                    <li class="pricing__body__item__list-item">* kadnidat sam plaća takse MUP-u</li>
                </ul>
                <a class="pricing__body__item__cta" href="#online">Upiši se na kurs</a>
            </article>
            <article class="pricing__body__item" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400">
                <div class="pricing__body__item__header">
                    Korisna dokumenta
                </div>
                <a class="pricing__body__item__link"
                    href="https://autoskolauros.rs/korisna_dokumenta/Pravilnik-o-P-oznakama.pdf">
                    <i class="pricing__body__item__link__icon far fa-file-pdf"></i>
                    Pravilnik o P oznakama
                </a>
                <a class="pricing__body__item__link"
                    href="https://autoskolauros.rs/korisna_dokumenta/Pravilnik-o-vozackim-dozvolama-2010.pdf">
                    <i class="pricing__body__item__link__icon far fa-file-pdf"></i>
                    Pravilnik o vozačkim dozvolama
                </a>
                <a class="pricing__body__item__link"
                    href="https://autoskolauros.rs/korisna_dokumenta/pravilnik-o-zdravstvenim-uslovima.pdf">
                    <i class="pricing__body__item__link__icon far fa-file-pdf"></i>
                    Pravilnik o zdravstvenim uslovima
                </a>
                <a class="pricing__body__item__link"
                    href="https://autoskolauros.rs/korisna_dokumenta/SAOBRACAJNA-SIGNALIZACIJA-PRAVILNIK.pdf">
                    <i class="pricing__body__item__link__icon far fa-file-pdf"></i>
                    Pravilnik o saobraćajnoj signalizaciji
                </a>
                <a class="pricing__body__item__link"
                    href="https://autoskolauros.rs/korisna_dokumenta/Zakon-o-bezbednosti-saobracaja-na-putevima.pdf">
                    <i class="pricing__body__item__link__icon far fa-file-pdf"></i>
                    Zakon o bezbednosti saobraćaja
                </a>
            </article>
            </div>
    </section>
    <!-- End pricing section -->




    <!-- Car section -->
    <section class="car" id="car" data-aos="fade-up" data-aos-duration="700">
        <header class="car__title container">
            <div class="car__title__heading section-title">Vozni park</div>
            <div class="car__title__heading section-subtitle">Galerija vozila</div>
        </header>
        <div class="car__body">
            <article class="car__body__item show">
                <img class="car__body__item__img" src="assets/images/gallery-img1 (1).jpg" alt="car-img">
                <div class="car__body__item__overlay"></div>
            </article>
            <article class="car__body__item">
                <img class="car__body__item__img" src="assets/images/gallery-img1 (2).jpg" alt="car-img">
                <div class="car__body__item__overlay"></div>
            </article>
            <article class="car__body__item">
                <img class="car__body__item__img" src="assets/images/gallery-img1 (3).jpg" alt="car-img">
                <div class="car__body__item__overlay"></div>
            </article>
            <article class="car__body__item">
                <img class="car__body__item__img" src="assets/images/gallery-img1 (4).jpg" alt="car-img">
                <div class="car__body__item__overlay"></div>
            </article>
            <article class="car__body__item">
                <img class="car__body__item__img" src="assets/images/gallery-img1 (5).jpg" alt="car-img">
                <div class="car__body__item__overlay"></div>
            </article>
            <article class="car__body__item">
                <img class="car__body__item__img" src="assets/images/gallery-img1 (6).jpg" alt="car-img">
                <div class="car__body__item__overlay"></div>
            </article>
        </div>
    </section>
    <!-- End car section -->


    <!-- Gallery section -->
    <section class="gallery" id="gallery" data-aos="fade-up" data-aos-duration="700">
        <header class="gallery__title container">
            <div class="gallery__title__heading section-title">Učionica</div>
            <div class="gallery__title__heading section-subtitle">Galerija slika</div>
        </header>
        <div class="gallery__body">
            <article class="gallery__body__item show">
                <img class="gallery__body__item__img" src="assets/images/class-img1.JPG" alt="class-img">
                <div class="gallery__body__item__overlay"></div>
            </article>
            <article class="gallery__body__item">
                <img class="gallery__body__item__img" src="assets/images/class-img2.JPG" alt="class-img">
                <div class="gallery__body__item__overlay"></div>
            </article>
            <article class="gallery__body__item">
                <img class="gallery__body__item__img" src="assets/images/class-img3.JPG" alt="class-img">
                <div class="gallery__body__item__overlay"></div>
            </article>
            <article class="gallery__body__item">
                <img class="gallery__body__item__img" src="assets/images/class-img4.JPG" alt="class-img">
                <div class="gallery__body__item__overlay"></div>
            </article>
            <article class="gallery__body__item">
                <img class="gallery__body__item__img" src="assets/images/class-img5.JPG" alt="class-img">
                <div class="gallery__body__item__overlay"></div>
            </article>
        </div>
    </section>
    <!-- End gallery section -->




    <!-- Contact section -->
    <section class="contact" data-aos="fade-up" data-aos-duration="700" id="contact">
        <header class="contact__header container">
            <div class="contact__header__heading section-title">Kontakt</div>
            <div class="contact__header__heading section-subtitle">Postavite pitanje</div>
        </header>

        <article class="contact__info container" id="online">
            <div class="contact__info__item">
                <i class="fas fa-location-circle"></i>
                <h3 class="contact__info__item__heading">Adresa</h3>
                <p class="contact__info__item__text"> Bratstva i jedinstva 89, Borča</p>
            </div>
            <div class="contact__info__item">
                <i class="far fa-phone-plus"></i>
                <h3 class="contact__info__item__heading">Telefon</h3>
                <p class="contact__info__item__text"> +381 60 407 2016</p>
                <p class="contact__info__item__text"> +381 11 424 4178</p>
            </div>
            <div class="contact__info__item">
                <i class="fas fa-envelope-open-text"></i>
                <h3 class="contact__info__item__heading">Email</h3>
                <p class="contact__info__item__text">kontakt@autoskolauros.rs</p>
            </div>
        </article>

        <article class="contact__form container">
            <h3 class="contact__form-title">On-line upis kandidata</h3>
            <div class="contact__form__body">
                <form method="post" action="assets/php/reachout.php" name="contact">
                    <!-- honeypotfield -->
                    <input name="fullName" class="contact__form__input" type="text" placeholder="Ime i prezime"
                        required>
                    <input name="jbmg" class="contact__form__input" type="number" placeholder="JMBG" required>
                    <input name="telephoneNumber" class="contact__form__input" type="tel" placeholder="Broj telefona"
                        required>
                    <input name="email" class="contact__form__input" type="email" placeholder="Email" required>
                    <p class="contact__form__body__paragraph">*Pri slanju online prijave, proverite Vaš
                        mejl za potvrdu prijave!</p>
                    <button type="submit" name='contact' class="submit-btn">Posalji</button>

                </form>
                <div class="contact__form__body__map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2827.0688697932!2d20.453689!3d44.8812474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a6350a3bab8fd%3A0x710819f380c176a4!2zQXV0byDFoWtvbGEgVXJvxaE!5e0!3m2!1ssr!2srs!4v1655904853892!5m2!1ssr!2srs"
                        style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        id="map"></iframe>
                </div>
            </div>
        </article>

    </section>
    <!-- End contact section -->




    <!-- Footer section -->
    <footer class="footer">
        <div class="footer__body container">
            <article class="footer__body__item">
                <strong class="footer__body__item__logo">Auto <span>Škola</span> - Uroš</strong>
            </article>
            <article class="footer__body__item">
                <h4 class="footer__body__item__heading">Radno vreme</h4>
                <ul class="footer__body__item__list">
                    <li class="footer__body__list__item">Pon: 09:00 - 17:00</li>
                    <li class="footer__body__list__item">Uto: 09:00 - 17:00</li>
                    <li class="footer__body__list__item">Sre: 09:00 - 17:00</li>
                    <li class="footer__body__list__item">Čet: 09:00 - 17:00</li>
                    <li class="footer__body__list__item">Pet: 09:00 - 17:00</li>
                    <li class="footer__body__list__item">Sub: 09:00 - 14:00</li>
                </ul>
            </article>
            <article class="footer__body__item">
                <h4 class="footer__body__item__heading">Navigacija</h4>
                <ul class="footer__body__item__list">
                    <li class="footer__body__list__item">
                        <i class="fas fa-angle-right"></i>
                        <a href="index.php">Pocetna</a>
                    </li>
                    <li class="footer__body__list__item">
                        <i class="fas fa-angle-right"></i>
                        <a href="#about" class="">O nama</a>
                    </li>
                    <li class="footer__body__list__item">
                        <i class="fas fa-angle-right"></i>
                        <a href="#pricing">Cenovnik</a>
                    </li>
                    <li class="footer__body__list__item">
                        <i class="fas fa-angle-right"></i>
                        <a href="#car">Vozni park</a>
                    </li>
                    <li class="footer__body__list__item">
                        <i class="fas fa-angle-right"></i>
                        <a href="#gallery">Galerija</a>
                    </li>
                    <li class="footer__body__list__item">
                        <i class="fas fa-angle-right"></i>
                        <a href="#contact">Kontakt</a>
                    </li>
                </ul>
            </article>
            <article class="footer__body__item">
                <h4 class="footer__body__item__heading">Kontakt</h4>
                <ul class="footer__body__item__list">
                    <li class="footer__body__list__item"><i class="fas fa-map-marker-alt"></i>Bratstva i jedinstva 89,
                        Beograd 11211, Borča</li>
                    <li class="footer__body__list__item"><i class="fas fa-mobile-alt"></i>+381 60 407 2016</li>
                    <li class="footer__body__list__item"><i class="fas fa-phone-alt"></i>+381 11 424 4178</li>
                    <li class="footer__body__list__item"><i class="fas fa-envelope"></i>kontakt@autoskolauros.rs</li>
                </ul>
            </article>
        </div>
    </footer>
    <!-- Footer section -->




    <!-- Right bottom corner -->
    <button type="button" class="card">
        <p class="card__text">Kontakt</p>
    </button>

    <div class="card-info">
        <div class="card-info__body">
            <p class="card-info__body__text">+381 60 407 2016</p>
            <p class="card-info__body__text">+381 11 424 4178</p>
            <p class="card-info__body__text">kontakt@autoskolauros.rs</p>
        </div>
        <i class="card-info__icon far fa-times-circle"></i>
    </div>
    <!-- End right bottom corner -->


    <!-- Custom JS -->
    <script src="assets/js/main.js"></script>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>