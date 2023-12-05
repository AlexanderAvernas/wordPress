<footer class="bg-dark text-light text-center py-4">
            <div class="container">
                <div class="row">
                    <!-- Column 1 -->
                    <div class="col-md-4">
                    <div class="container custom-footer-container">
                        <h5>About</h5>
                        <div class="inner-footer-container">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fermentum turpis sed neque feugiat, et fermentum justo pharetra.</p>
                        </div>
                    </div>
                    </div>
                    <!-- Column 2 -->
                    <div class="col-md-4">
                        <!-- <div class="container custom-footer-container">
                        <h5>Contact Information</h5>
                        <div class="inner-footer-container">
                        <p>Email: info@sportsnewsletter.com</p>
                        <p>Phone: +1 (555) 123-4567</p>
                        </div>
                        </div> -->
                        <?php if (is_active_sidebar("adress widget")) {
                            dynamic_sidebar("adress widget");
                        }  ?>
                    </div>
                    <!-- Column 3 -->
                    <div class="col-md-4">
    <div class="container custom-footer-container">
        <h5>Follow us on social media</h5>
        <div class="inner-footer-container">
            <p class="fab fa-facebook-f social-logo"> Facebook</p>
            <p class="fab fa-twitter social-logo"> Twitter</p>
            <p class="fab fa-instagram social-logo"> Instagram</p>
            <p class="fab fa-linkedin-in social-logo"> LinkedIn</p>
        </div>
    </div>
</div>

                </div>
            </div>
            <p>&copy; 2023 Sports Newsletter. All rights reserved.</p>
        </footer>

        <?php
        wp_footer();
        ?>
    </body>
</html>
