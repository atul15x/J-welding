<style>
    /* Feature_product */
    .Feature_product {
        background-color: #bc2b28;
    }

    .Feature_product h1 {
        color: white;
        font-weight: bold;
        font-size: 4.4rem;
    }

    .Feature_product span {
        font-weight: bold;
        font-size: 1.2rem;
    }

    .Feature_product_tagLine {
        margin-bottom: 80px;
    }

    .Feature_product h2 {
        color: white;
        font-weight: bold;
    }

    .Feature_product p {
        color: white;
    }

    .Feature_product button {
        width: 40%;
        height: 40px;
        padding: 5px;
        background: transparent;
        color: white;
        border: 1px solid white;
        margin-top: 50px;
        transition: 1s ease;
        font-weight: bold;
    }

    .Feature_product button:hover {
        background-color: white;
        color: black;
    }
</style>

<?php
$profile = "select * from s_product where s_product_id = 1 ";
$profile_query = mysqli_query($con, $profile);

$profile_result = mysqli_fetch_assoc($profile_query);

$profile2 = "select * from s_product where s_product_id = 2 ";
$profile_query2 = mysqli_query($con, $profile2);

$profile_result2 = mysqli_fetch_assoc($profile_query2);

$profile3 = "select * from s_product where s_product_id = 3 ";
$profile_query3 = mysqli_query($con, $profile3);

$profile_result3 = mysqli_fetch_assoc($profile_query3);

?>

<!-- Feature_product -->

<section data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" class="Feature_product">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class=" p-5 carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <!-- Product details on the left side -->
                            <div class="Feature_product_tagLine">
                                <span>what we do</span>
                                <h1>Product</h1>
                            </div>
                            <h2>
                                <?php echo $profile_result['s_product_name']; ?>
                            </h2>
                            <button class="">View Details</button>
                        </div>
                        <div class="col-md-6">
                            <!-- Product image on the right side -->
                            <img class="d-block w-100" src="<?php echo $profile_result['s_product_image']; ?>"
                                alt="Product 1" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <!-- Product details on the left side -->
                            <div class="Feature_product_tagLine">
                                <span>what we do</span>
                                <h1>Product</h1>
                            </div>
                            <h2>
                                <?php echo $profile_result2['s_product_name']; ?>
                            </h2>
                            <button class="">View Details</button>
                        </div>
                        <div class="col-md-6">
                            <!-- Product image on the right side -->
                            <img class="d-block w-100" src="<?php echo $profile_result2['s_product_image']; ?>"
                                alt="Product 1" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <!-- Product details on the left side -->
                            <div class="Feature_product_tagLine">
                                <span>what we do</span>
                                <h1>Product</h1>
                            </div>
                            <h2>
                                <?php echo $profile_result3['s_product_name']; ?>
                            </h2>
                            <button class="">View Details</button>
                        </div>
                        <div class="col-md-6">
                            <!-- Product image on the right side -->
                            <img class="d-block w-100" src="<?php echo $profile_result3['s_product_image']; ?>"
                                alt="Product 1" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>