<style>
    /* ContactUs */
    .ContactUs {
        padding: 50px 0px;
        background: url("https://industrial.bold-themes.com/red-factory/wp-content/uploads/sites/8/2016/10/background-footer.jpg");
        color: white;
    }


    .ContactUs .leftside {
        /* background: #06121c; */
        background: rgba(6, 18, 28, 0.2);
        color: white;
    }

    .contactUs_from {
        background: rgba(6, 18, 28, 0.2);
        padding: 40px;
    }

    .leftside h5 {
        font-size: 2rem;
        font-weight: bolder;
        padding: 10px 0;
    }

    /* Assuming you have Font Awesome icons properly linked */

    .contact-info {
        padding-top: 20px;
        display: flex;
        align-items: center;
        margin-bottom: 10px;
        cursor: pointer;
        /* Add a pointer cursor on hover to indicate interactivity */
    }

    .icon-left {
        font-size: 24px;
        /* You can adjust the icon size as needed */
        margin-right: 10px;
        transition: color 0.3s ease;
        /* Adding transition effect for smooth color change on hover */
    }

    .contact-text {
        transition: color 0.3s ease;
        /* Adding transition effect for smooth color change on hover */
    }

    /* Add hover styles to change the icon and text color to blue */
    .contact-info:hover .icon-left {
        color: #bc2b28;
    }

    .ContactUs hr {
        border: 5px solid #2066df;
        width: 22%;
        margin-top: -25px;
    }

    .ContactUs h2 {
        padding-bottom: 10px;
        font-size: 3rem;
        font-weight: bold;
        color: #bc2b28;
    }

    .ContactUs h4 {
        font-weight: bolder;
    }
</style>

<?php


?>

<!-- ContactUs -->
<section data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" id="contactus" class="ContactUs">
    <div class="container mt-5">
        <h4>Feel Free to</h4>
        <h2 class="">Contact US</h2>
        <p>We warmly welcome any inquiries you may have! Please don't hesitate to reach out to us. Our team is here to
            assist you and provide the information you need. Feel free to contact us at your convenience. We look
            forward to hearing from you!</p>
        <br>
        <div class="row justify-content-between wow animate__animated animate__fadeInUpBig">
            <!-- Left Column -->
            <div class="col-md-4 leftside">
                <div class="bg-gray p-4">
                    <h5>Changzhou China Welding Equipment Co., Ltd.</h5>
                    <div class="contact-info">
                        <i class="fas fa-home icon-left"></i>
                        <div class="contact-text">
                            No. 9, Huadong Road, Yaoguan Town, Changzhou, Jiangsu
                        </div>
                    </div>
                    <div class="contact-info">
                        <i class="fas fa-phone icon-left"></i>
                        <div class="contact-text">
                            +86 13357889573, +86 13357880572
                        </div>
                    </div>
                    <div class="contact-info">
                        <i class="fas fa-envelope icon-left"></i>
                        <div class="contact-text">
                            official@j-welding.com
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-md-8 contactUs_from">
                <form id="contactUsFrom">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="firstName">First Name</label>
                            <input name="first_name" type="text" class="form-control" id="firstName"
                                placeholder="First Name" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastName">Last Name</label>
                            <input name="last_name" type="text" class="form-control" id="lastName"
                                placeholder="Last Name" />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="phone">Phone</label>
                            <input name="phone" type="tel" class="form-control" id="phone" placeholder="Phone" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="Email" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" required class="form-control" id="message" rows="5"
                            placeholder="Type your message here"></textarea>
                    </div>
                    <button id="SendMailBtn" name="mail" type="submit" class="btn btn-danger">Send <i
                            class="fa-solid fa-paper-plane"></i></button>
                    <button id="loadbtn" style="display: none;" class="btn btn-primary" type="button" disabled>
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        Loading...
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>