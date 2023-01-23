        <footer class="container-fluid p-4 footer">
            <div class="container">
                <div class="row">
                    <div class="">
                        <div class="d-flex bd-highlight bullets footer col-lg-12 col-sm-12">
                            <div class="p-2 me-2 flex-fill bd-highlight col-lg-4 col-md-4 col-sm-4">
                                <div class="">
                                    <?php
                                    if ( function_exists( 'the_custom_logo' ) ) {
                                        the_custom_logo();
                                    }
                                    ?>
                                    <!-- <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt=""> -->
                                </div>
                                <?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
                                <!-- <p class="mt-3">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                                <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed.</p>
                                </p> -->
                            </div>
                            <div class="p-2 flex-fill bd-highlight col-lg-3 col-md-3 col-sm-12">
                                <?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
                                <!-- <h5 class="">Contacts</h5>
                                <ul class=" footer-ul">
                                    <li> Blog</li>
                                    <li>Sustainability</li>
                                    <li> Distributor Info</li>
                                    <li> Privacy Policy</li>
                                    <li> Sitemap</li>
                                </ul> -->
                            </div>
                            <div class="p-2 flex-fill bd-highlight col-lg-3 col-md-3 col-sm-12">
                                <?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
                                <!-- <h5 class="">Support</h5>
                                <ul class=" footer-ul">
                                    <li> Contact Us</li>
                                    <li> Returns</li>
                                    <li> My Account</li>
                                    <li> Help Center</li>
                                    <li> Artwork </li>
                                    <li> Services </li>
                                    <li> Give Us Feedback </li>
                                </ul> -->
                            </div>
                            <div class="p-2 flex-fill bd-highlight col-lg-3 col-md-3 col-sm-12">
                                <?php dynamic_sidebar( 'footer-sidebar-4' ); ?>
                                <!-- <h5 class="">Catalog</h5>
                                <ul class=" footer-ul">
                                    <li> PDF Catalog</li>
                                    <li> Interactive Catalog</li>
                                </ul> -->
                                <div>
                                    <h3 class="subscribe"> Subscribe</h3>
                                    <div class="input-group-lg input-group mb-3 ">
                                        <input type="text" class="input-box form-control" placeholder="Enter address"
                                        aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <div class="input-group-append"><button class="btn btn-success" type="button"
                                        id="button-addon2"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.png" class="img-fluid"
                                        alt=""></button></div>
                                    </div>
                                    <!-- <div class="search">
                                    <input type="text" class="searchTerm" placeholder="Email address">
                                    <button type="submit" class="searchButton">
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    </button>
                                    </div> -->
                                    <span class="follow-us mx-2 me-4">Follow Us</span>
                                    <span class="fs-4">
                                        <!-- <i class="fa fa-facebook facebook mx-2" aria-hidden="true"></i> -->
                                        <!-- <i class="fa fa-facebook" aria-hidden="true"></i> -->
                                        <img src="./assets/img/facebook (3).png">
                                    </span>
                                    <span class="fs-5">
                                        <i class="social-icon fa fa-twitter" aria-hidden="true"></i></span>
                                        <span class="fs-5">
                                        <i class="fa fa-linkedin social-icon mx-2" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </footer>
        <div class="container-fluid footer-end">
            <div class="row py-
            2">
                <div class="col-md-12">
                    <div class="row py-2 footer">
                        <div class="col-12 d-flex justify-content-center text-white">© 2022 International Plastics Inc. All Rights Reserved</div>
                    </div>
                </div>
            </div>
        </div>
   </main>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>

   <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->

   <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>

    <?php wp_footer(); ?>
</body>

</html>