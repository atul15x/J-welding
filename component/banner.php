<style>
    /* Banner */
    .banner_section {
        position: relative;
        height: 95vh;
        overflow: hidden;
    }

    .banner_section video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .shadowEffect {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
    }

    .banner_content {
        position: absolute;
        top: 50%;
        /* Center content vertically */
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: white;
        width: 100%;
        line-height: 1.5;
        /* Adjust line-height for better readability */
    }

    .banner_content h1 {
        font-size: 7rem;
        font-weight: 800;
    }

    .banner_content h1 span {
        color: #bc2b28;
    }

    .banner_content p {
        font-size: 1.5rem;
    }

    .banner_content button {
        padding: 0px 60px;
        background: #bc2b28;
        color: white;
        border: 1px solid white;
        transition: 1s ease;
        padding: 20px 20px;
        /* Adjust padding for smaller screens */
        font-size: 0.9rem;
        /* Reduce font size for smaller screens */
    }

    .banner_content button:hover {
        background: white;
        color: black;
    }

    /* Responsive adjustments for smaller screens */
    @media (max-width: 768px) {
        .banner_content {
            top: 50%;
            /* Further adjust vertical positioning */
        }

        .banner_content h1 {
            font-size: 4.5rem;
            /* Further reduce font size for smaller screens */
        }

        .banner_content p {
            font-size: 1.3rem;
            /* Further reduce font size for smaller screens */
        }

        .banner_content button {
            padding: 15px 15px;
            /* Further adjust padding for smaller screens */
            font-size: 0.8rem;
            /* Further reduce font size for smaller screens */
        }
    }

    These adjustments should help make your banner section more responsive on mobile devices. Test the changes on various screen sizes to ensure that the content is displayed correctly and maintains a good user experience.
</style>


<!-- Banner -->
<section class="banner_section">
    <video src="https://shopsource.singoo.cc/929/video/XJBjwie8J4XcWXHh.mp4" autoplay muted loop></video>
    <!-- Shadow div for visual effect -->
    <div class="shadowEffect"></div>

    <!-- Content within the banner -->
    <div class="banner_content">
        <h1>Think Big. <span>We do.</span></h1>
        <p>
            Become the best welding equipment manufacturer For Better Welding
            Quality
        </p>
        <button class="">OUR PORTFOLIO</button>
    </div>
</section>