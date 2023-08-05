<style>
    /* feature */

    #features {
        text-align: center;
        background-color: #172025;
        display: flex;
        text-align: center;
        justify-content: center;
        color: white;
    }

    #features .row {
        display: flex;
        justify-content: center;
    }

    #features .col-md-3 {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 0 10px;
        /* Adjust the spacing between columns as needed */
    }

    #features i {
        font-size: 48px;
        /* Adjust the icon size as needed */
        margin-bottom: 20px;
        color: #bc2b28;
        transition: color 0.3s;
        /* Add a transition for smooth color change */
    }

    #features h3 {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    #features p {
        font-size: 16px;
    }

    /* Additional style for icon color change on hover */
    #features .col-md-3:hover i {
        color: white;
    }
</style>

<!-- feature -->
<section id="features" class="p-4 features">
    <div class="container">
        <div data-aos="fade-up" data-aos-duration="1500" class="row">
            <div class="col-md-3">
                <i class="fa-solid fa-gear"></i>
                <h3>Comprehensive</h3>
                <p>Integrating production, research and development, and trade</p>
            </div>
            <div class="col-md-3">
                <i class="fa-solid fa-file-shield"></i>
                <h3>Core</h3>
                <p>
                    Strict and systematic quality and protection of green environment
                </p>
            </div>
            <div class="col-md-3">
                <i class="fa-solid fa-crosshairs"></i>
                <h3>The Goal</h3>
                <p>Research and Development of Technological Innovation</p>
            </div>
            <div class="col-md-3">
                <i class="fa-solid fa-globe"></i>
                <h3>Foreign Markets</h3>
                <p>
                    Exported to Europe, America, Middle East, Asia Pacific and Other
                    Countries and Regions
                </p>
            </div>
        </div>
    </div>
</section>