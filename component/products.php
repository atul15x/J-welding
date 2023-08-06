<style>
    .products {
        padding: 50px 0px;
        background-color: white;
    }

    .product {
        color: black;
    }

    .products h2 {
        padding-bottom: 10px;
        font-size: 3rem;
        font-weight: bold;
        color: #bc2b28;
    }

    .products h4 {
        font-weight: bolder;
    }

    .products p {}

    .products h5 {
        font-size: 1rem;
    }

    .product a {

        padding: 10px;
        text-decoration: none;
        transition: 1s ease;
        background-color: white;
        color: #bc2b28;
        border: 1px solid #bc2b28;
    }

    .product a:hover {
        background-color: #bc2b28;
        color: white;
    }

    /* Add shadow and border to cards */
    .card {
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        border: 1px solid #ccc;
        transition: box-shadow 0.3s, transform 0.3s, z-index 0.3s;
        position: relative;
        cursor: pointer;
        line-height: 2;
    }

    /* Pop-up effect on hover */
    .card:hover {
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
        transform: scale(1.05) translateY(-5px);
        z-index: 1;
    }

    /* Add a smooth transition to the image */
    .card-img-top {
        transition: transform 0.3s;
    }

    /* Remove zoom effect on the image on hover */
    .card:hover .card-img-top {
        transform: scale(1);
    }
</style>

<?php
$product_section = "select * from products where p_categories = 3 ";
$product_section = mysqli_query($con, $product_section);


?>


<section data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" id="products" class="products">
    <div class="container mt-4">
        <h4>Product</h4>
        <h2>Mig & Tig Welding Torch</h2>

        <div class="owl-carousel owl-theme ">
            <?php
            while ($product_section_row = mysqli_fetch_assoc($product_section)) {
                ?>
                <div class="item">
                    <div class="card">
                        <img src="<?= $product_section_row['p_image']; ?>" class="card-img-top" alt="Product 1" />
                        <div class="card-body product">
                            <h5 class="card-title">
                                <?php echo $product_section_row['p_name']; ?>
                            </h5>
                            <a href="./Pages/ProductPage/ProductTR-708.php" class="">Learn More</a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>

            <!-- Add more items for additional products -->
        </div>
    </div>
</section>