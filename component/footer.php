<style>
    /* 
---------------------------------------------
footer
--------------------------------------------- 
*/
    footer .social {
        overflow: hidden;
        margin-top: 10px;
        text-align: center;
    }

    footer .social li {
        margin: 0px 10px;
        display: inline-block;
    }

    footer .social li a {
        color: #06121c;
        text-align: center;
        background-color: #fff;
        width: 36px;
        height: 36px;
        line-height: 36px;
        border-radius: 50%;
        display: inline-block;
        font-size: 16px;
        -webkit-transition: all 0.3s ease 0s;
        -moz-transition: all 0.3s ease 0s;
        -o-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
    }

    footer .social li a:hover {
        background-color: blue;
        color: #fff;
    }

    footer .copyright {
        text-align: center;
        border-top: 1px solid rgba(250, 250, 250, 0.2);
        margin-top: 30px;
        padding-top: 30px;
        padding-bottom: 30px;
        font-weight: 400;
        font-size: 12px;
        color: #fff;
        letter-spacing: 0.88px;
        text-transform: uppercase;
    }

    @media (max-width: 991px) {
        footer .text {
            margin-bottom: 30px;
        }

        footer h5 {
            margin-bottom: 15px;
        }

        footer .footer-nav {
            margin-bottom: 30px;
        }
    }

    /* 
---------------------------------------------
footer
--------------------------------------------- 
*/
    footer {
        background-color: #bc2b28;
        padding-top: 30px;
    }

    footer .social {
        overflow: hidden;
        margin-top: 10px;
        text-align: center;
    }

    footer .social li {
        margin: 0px 10px;
        display: inline-block;
    }

    footer .social li a {
        color: #06121c;
        text-align: center;
        background-color: #fff;
        width: 36px;
        height: 36px;
        line-height: 36px;
        border-radius: 50%;
        display: inline-block;
        font-size: 16px;
        -webkit-transition: all 0.3s ease 0s;
        -moz-transition: all 0.3s ease 0s;
        -o-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
    }

    footer .social li a:hover {
        background-color: #bc2b28;
        color: #fff;
    }

    footer .copyright {
        text-align: center;
        border-top: 1px solid rgba(250, 250, 250, 0.2);
        margin-top: 30px;
        padding-top: 30px;
        padding-bottom: 30px;
        font-weight: 400;
        font-size: 12px;
        color: #fff;
        letter-spacing: 0.88px;
        text-transform: uppercase;
    }

    @media (max-width: 991px) {
        footer .text {
            margin-bottom: 30px;
        }

        footer h5 {
            margin-bottom: 15px;
        }

        footer .footer-nav {
            margin-bottom: 30px;
        }
    }
</style>

<!-- ***** Footer Start ***** -->
<footer>
    <div class="container">
        <div class="row">
            <div data-aos="slide-up" class="col-lg-12 col-md-12 col-sm-12">
                <ul class="social">
                    <li><a href="https://www.facebook.com/TitaniumDioxiedeTIO2" target="__blank"><i
                                class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p class="copyright">Changzhou Jinchengrui New Materials Technology
                    Co., Ltd</p>
            </div>
        </div>
    </div>
</footer>








<!-- Bootstrap JS and jQuery (Optional, only needed for certain Bootstrap components) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
<!-- typedjs -->
<script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
<script>
    var typed = new Typed("#element", {
        strings: ["<i>TITANIUM DIOXIDE</i>"],
        typeSpeed: 120,
        loop: true,
    });
</script>
<!-- Include Owl Carousel 2 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: true,
            autoplay: true, // Enable autoplay
            autoplayTimeout: 3000, // Set autoplay timeout to 2 seconds
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 4,
                },
            },
        });
    });
</script>

<script>
    // JavaScript to activate the carousel and set the interval
    $(document).ready(function () {
        $("#carouselExample").carousel({
            interval: 5000, // Change slide every 1 second
        });
    });
</script>

<!-- AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>


</body>

</html>