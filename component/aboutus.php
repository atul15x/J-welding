<style>
    /* about_us */

    .About_Company {
        padding: 50px 0px;
    }

    .About_Company h2 {
        padding: 5px 0;
        letter-spacing: 3px;
        font-size: 2rem;
        color: #bc2b28;
        font-weight: bold;
    }

    .About_Company p {
        text-align: justify;
        font-weight: bold;
        padding: 20px 0px;
    }

    /* button Style */

    .button1 {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 5px;
        background: #183153;
        font-family: "Montserrat", sans-serif;
        box-shadow: 0px 6px 24px 0px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        border: none;
        margin-bottom: 20px;
        cursor: pointer;
    }

    .button1:after {
        content: " ";
        width: 0%;
        height: 100%;
        background: #bc2b28;
        position: absolute;
        transition: all 0.4s ease-in-out;
        right: 0;
    }

    .button1:hover::after {
        right: auto;
        left: 0;
        width: 100%;
    }

    .button1 span {
        text-align: center;
        text-decoration: none;
        width: 100%;
        padding: 12px 20px;
        color: #fff;
        font-size: 1.125em;
        font-weight: 700;
        letter-spacing: 0.3em;
        z-index: 20;
        transition: all 0.3s ease-in-out;
    }

    .button1:hover span {
        color: #183153;
        animation: scaleUp 0.3s ease-in-out;
        color: white;
    }

    @keyframes scaleUp {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(0.95);
        }

        100% {
            transform: scale(1);
        }
    }

    @media (max-width: 768px) {
        .right-column img {
            max-width: 100%;
            height: auto;
        }
    }
</style>

<!-- About-US Section -->
<section id="aboutus" class="two-column-section About_Company">
    <div class="container">
        <div class="row">
            <!-- Left Column -->
            <div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine"
                class="col-md-6 left-column">
                <h2 class="wow animate__animated animate__slideInLeft">
                    Changzhou China Welding Equipment Co., Ltd.
                </h2>
                <p>
                    J-welding is known as Changzhou China welding and cutting
                    equipment Co., Ltd. Which is a modern enterprise integrating
                    development, production and sales. The company was established in
                    2011. With strong technical force, strong production and perfect
                    testing equipment. Our company is well-known in the domestic and
                    foreign markets for its perfect quality assurance system and
                    excell Professional production of domestic, Euro and American
                    carbon dioxide welding torch, welding torch and accessories, TIG
                    welding machine, TIG welding torch, plasma cutting torches , CO2
                    welding wire, and various welding equipment accessories, and is a
                    member of China Welding Association. J-welding is the best
                    provider to the steel fabrication, shipyards and related
                    industries. We are excellent partner for distributors and final
                    customers interested in welding consumables, personal safety,
                    abrasives and all spare parts to welding equipment. J-welding is a
                    preferable professional partner for the customers looking for
                    reliable supplier of welding solutions with best customer service
                    form Far East.
                    <!-- Add more content here (up to 300 words) -->
                </p>
                <a href="catalogue.pdf" target="_blank">
                    <button class="button1 wow animate__animated animate__zoomInUp animate__delay-1s">
                        <span>Download Catalog</span>
                    </button>
                </a>
            </div>
            <!-- Right Column -->
            <div class="col-md-6 right-column ">
                <img data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" width="600"
                    src="https://shopsource.singoo.cc/929/general/cptdFfPDMPwpZKi8.jpg?x-oss-process=image/resize,w_800/quality,q_100"
                    alt="Company Image" />
            </div>
        </div>
    </div>
</section>