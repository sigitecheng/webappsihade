@include('frontend.header ')
<body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    <i class="ri-leaf-line nav__logo-icon"></i> SIHADE
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">BERANDA</a>
                        </li>
                        <li class="nav__item">
                            <a href="#about" class="nav__link">TENTANG KAMI</a>
                        </li>
                        <li class="nav__item">
                            <a href="#products" class="nav__link">PRODUK</a>
                        </li>
                        <li class="nav__item">
                            <a href="#faqs" class="nav__link">MITRA</a>
                        </li>
                        <li class="nav__item">
                            <a href="#contact" class="nav__link">KONTAK KAMI</a>
                        </li>
                        
                    </ul>

                    <div class="nav__close" id="nav-close">
                        <i class="ri-close-line">Login</i>
                    </div>
                </div>

                <div class="nav__btns">
                    <!-- Theme change button -->
                    <i class="ri-moon-line change-theme" id="theme-button"></i>

                    <div class="nav__toggle" id="nav-toggle">
                        <i class="ri-menu-line"></i>
                    </div>
                </div>
            </nav>
        </header>

        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <div class="home__container container grid">
                    <img src="/assets/sihade/img/home.png" alt="" class="home__img">

                    <div class="home__data">
                        <h1 class="">
                            Pupuk Hayati <br> Untuk Dunia Yang Lebih Baik
                        </h1>
                        <br>
                        <p class="home__description">


Pupuk Hayati mendukung pertumbuhan tanaman yang lebih sehat dan meningkatkan kualitas tanah, menjadikannya pilihan ideal untuk menciptakan lingkungan yang lebih subur dan berkelanjutan. Pilih pupuk hayati untuk masa depan bumi yang lebih baik.
                        </p>
                        
                        @foreach ($data_berkas as $item)
    <!-- Link untuk mengunduh atau melihat brosur PDF -->
    <a href="{{ $item->brosur }}" class="button button--flex" target="_blank" download id="download-link-{{ $loop->index }}">
        Brosure<i class="ri-arrow-right-down-line button__icon"></i>
    </a>
@endforeach

<script>
document.addEventListener('DOMContentLoaded', function() {
    @foreach ($data_berkas as $index => $item)
        // Mendapatkan elemen link unduhan berdasarkan ID
        const link = document.getElementById('download-link-{{ $index }}');

        // Menambahkan event listener untuk mengunduh file
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah tindakan default (navigasi)

            // Membuat elemen <a> untuk memicu unduhan
            const a = document.createElement('a');
            a.href = this.href;
            a.download = ''; // Nama file default untuk unduhan
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
        });
    @endforeach
});
</script>


                    </div>

                    <div class="home__social">
                        <span class="home__social-follow">Follow Us</span>

                        <div class="home__social-links">
                            <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                                <i class="ri-facebook-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                                <i class="ri-instagram-line"></i>
                            </a>
                            <a href="https://twitter.com/" target="_blank" class="home__social-link">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section container" id="about">
                <div class="about__container grid">
                    <img src="/assets/sihade/img/about.png" alt="" class="about__img">

                    <div class="about__data">
                        <h2 class="section__title about__title">
                            Who we really are & <br> why choose us
                        </h2>

                        <p class="about__description">
                            We have over 4000+ unbiased reviews and our customers 
                            trust our plant process and delivery service every time
                        </p>

                        <div class="about__details">
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                We always deliver on time.
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                We give you guides to protect and care for your plants.
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                We always come over for a check-up after sale.
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                100% money back guaranteed.
                            </p>
                        </div>

                        <a href="#" class="button--link button--flex">
                            Shop Now <i class="ri-arrow-right-down-line button__icon"></i>
                        </a>
                    </div>
                </div>
            </section>

            <!--==================== STEPS ====================-->
            <section class="steps section container">
                <div class="steps__bg">
                    <h2 class="section__title-center steps__title">
                        Steps to start your <br> plants off right
                    </h2>

                    <div class="steps__container grid">
                        <div class="steps__card">
                            <div class="steps__card-number">01</div>
                            <h3 class="steps__card-title">Choose Plant</h3>
                            <p class="steps__card-description">
                                We have several varieties plants you can choose from.
                            </p>
                        </div>

                        <div class="steps__card">
                            <div class="steps__card-number">02</div>
                            <h3 class="steps__card-title">Place an order</h3>
                            <p class="steps__card-description">
                                Once your order is set, we move to the next step which is the shipping.
                            </p>
                        </div>

                        <div class="steps__card">
                            <div class="steps__card-number">03</div>
                            <h3 class="steps__card-title">Get plants delivered</h3>
                            <p class="steps__card-description">
                                Our delivery process is easy, you receive the plant direct to your door.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== PRODUCTS ====================-->
            <section class="product section container" id="products">
                <h2 class="section__title-center">
                    Check out our <br> products
                </h2>

                <p class="product__description">
                    Here are some selected plants from our showroom, all are in excellent 
                    shape and has a long life span. Buy and enjoy best quality.
                </p>

                <div class="product__container grid">
                    <article class="product__card">
                        <div class="product__circle"></div>

                        <img src="/assets/sihade/img/product1.png" alt="" class="product__img">

                        <h3 class="product__title">Cacti Plant</h3>
                        <span class="product__price">$19.99</span>

                        <button class="button--flex product__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>

                    <article class="product__card">
                        <div class="product__circle"></div>

                        <img src="/assets/sihade/img/product2.png" alt="" class="product__img">

                        <h3 class="product__title">Cactus Plant</h3>
                        <span class="product__price">$11.99</span>

                        <button class="button--flex product__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>

                    <article class="product__card">
                        <div class="product__circle"></div>

                        <img src="/assets/sihade/img/product3.png" alt="" class="product__img">

                        <h3 class="product__title">Aloe Vera Plant</h3>
                        <span class="product__price">$7.99</span>

                        <button class="button--flex product__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>

                    <article class="product__card">
                        <div class="product__circle"></div>

                        <img src="/assets/sihade/img/product4.png" alt="" class="product__img">

                        <h3 class="product__title">Succulent Plant</h3>
                        <span class="product__price">$5.99</span>

                        <button class="button--flex product__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>

                    <article class="product__card">
                        <div class="product__circle"></div>

                        <img src="/assets/sihade/img/product5.png" alt="" class="product__img">

                        <h3 class="product__title">Succulent Plant</h3>
                        <span class="product__price">$10.99</span>

                        <button class="button--flex product__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>

                    <article class="product__card">
                        <div class="product__circle"></div>

                        <img src="/assets/sihade/img/product6.png" alt="" class="product__img">

                        <h3 class="product__title">Green Plant</h3>
                        <span class="product__price">$8.99</span>

                        <button class="button--flex product__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>
                </div>
            </section>

            <!--==================== QUESTIONS ====================-->
            <section class="questions section" id="faqs">
                <h2 class="section__title-center questions__title container">
                    Some common questions <br> were often asked
                </h2>

                <div class="questions__container container grid">
                    <div class="questions__group">
                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    My flowers are falling off or dying?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Plants are easy way to add color energy and transform your 
                                    space but which planet is for you. Choosing the right plant.
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    What causes leaves to become pale?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Plants are easy way to add color energy and transform your 
                                    space but which planet is for you. Choosing the right plant.
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    What causes brown crispy leaves?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Plants are easy way to add color energy and transform your 
                                    space but which planet is for you. Choosing the right plant.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="questions__group">
                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    How do i choose a plant?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Plants are easy way to add color energy and transform your 
                                    space but which planet is for you. Choosing the right plant.
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    How do I change the pots?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Plants are easy way to add color energy and transform your 
                                    space but which planet is for you. Choosing the right plant.
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    Why are gnats flying around my plant?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Plants are easy way to add color energy and transform your 
                                    space but which planet is for you. Choosing the right plant.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== CONTACT ====================-->
            <section class="contact section container" id="contact">                
                <div class="contact__container grid">
                    <div class="contact__box">
                        <h2 class="section__title">
                            Reach out to us today <br> via any of the given <br> information
                        </h2>

                        <div class="contact__data">
                            <div class="contact__information">
                                <h3 class="contact__subtitle">Call us for instant support</h3>
                                <span class="contact__description">
                                    <i class="ri-phone-line contact__icon"></i>
                                    +999 888 777
                                </span>
                            </div>

                            <div class="contact__information">
                                <h3 class="contact__subtitle">Write us by mail</h3>
                                <span class="contact__description">
                                    <i class="ri-mail-line contact__icon"></i>
                                    user@email.com
                                </span>
                            </div>
                        </div>
                    </div>

                    <form action="" class="contact__form">
                        <div class="contact__inputs">
                            <div class="contact__content">
                                <input type="email" placeholder=" " class="contact__input">
                                <label for="" class="contact__label">Email</label>
                            </div>

                            <div class="contact__content">
                                <input type="text" placeholder=" " class="contact__input">
                                <label for="" class="contact__label">Subject</label>
                            </div>

                            <div class="contact__content contact__area">
                                <textarea name="message" placeholder=" " class="contact__input"></textarea>                              
                                <label for="" class="contact__label">Message</label>
                            </div>
                        </div>

                        <button class="button button--flex">
                            Send Message
                            <i class="ri-arrow-right-up-line button__icon"></i>
                        </button>
                    </form>
                </div>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content">
                    <a href="#" class="footer__logo">
                        <i class="ri-leaf-line footer__logo-icon"></i> SIHADE
                    </a>
                    
                    <a href="#" class="footer__logo">
                        <i class="ri-leaf-line footer__logo-icon"></i> SIHADE
                    </a>
                    
                    <a href="#" class="footer__logo">
                        <i class="ri-leaf-line footer__logo-icon"></i> SIHADE
                    </a>
                    
                    <h3 class="footer__title">
                        Subscribe to our newsletter <br> to stay update
                    </h3>

                    <div class="footer__subscribe">
                        <input type="email" placeholder="Enter your email" class="footer__input">

                        <button class="button button--flex footer__button">
                            Subscribe
                            <i class="ri-arrow-right-up-line button__icon"></i>
                        </button>
                    </div>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Our Address</h3>

                    <ul class="footer__data">
                        <li class="footer__information">1234 - Peru</li>
                        <li class="footer__information">La Libertad - 43210</li>
                        <li class="footer__information">123-456-789</li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Contact Us</h3>

                    <ul class="footer__data">
                        <li class="footer__information">+999 888 777</li>
                        
                        <div class="footer__social">
                            <a href="https://www.facebook.com/" class="footer__social-link">
                                <i class="ri-facebook-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/" class="footer__social-link">
                                <i class="ri-instagram-line"></i>
                            </a>
                            <a href="https://twitter.com/" class="footer__social-link">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </div>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">
                        We accept all credit cards
                    </h3>

                    <div class="footer__cards">
                        <img src="/assets/sihade/img/card1.png" alt="" class="footer__card">
                        <img src="/assets/sihade/img/card2.png" alt="" class="footer__card">
                        <img src="/assets/sihade/img/card3.png" alt="" class="footer__card">
                        <img src="/assets/sihade/img/card4.png" alt="" class="footer__card">
                    </div>
                </div>
            </div>

            <p class="footer__copy">&#169; @2024 Designed By <a href="https://wa.me/081321455855" target="_blank">Sarigit.com</a></p>
   
            @include('frontend.footer')