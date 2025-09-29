<!-- footer start -->
<footer class="footer">
    <div class="container footer-bg-color">
        <div class="footer-top">
            <div class="row px-md-3 pt-md-3 px-2 pt-2">
                <div class="col-md-4 col-12 bg-light">
                    <div class="col-content">
                        <div class="top-title py-2 border-bottom border-danger mb-3">
                            <p class="mb-0 text-danger fw-bold">যোগাযোগ</p>
                        </div>
                        <div class="contact-content">
                            <p class="mb-2"><i class="fa-solid fa-building-columns i-info"></i> <?php
                                                                                                $school_name =  get_theme_mod('name-of-school', 'জিয়া ভাই উচ্চ বিদ্যালয়');
                                                                                                echo $school_name;
                                                                                                ?> </p>
                            <p class="mb-2"><i class="fa-solid fa-location-dot i-info"></i> <?php
                                                                                            $establish_and_eiin = get_theme_mod('address', 'ঢাকা');
                                                                                            echo $establish_and_eiin;
                                                                                            ?> </p>
                            <p class="mb-2"><i class="fa-solid fa-phone i-info"></i> <?php
                                                                                        $school_name =  get_theme_mod('phone', '০১৯১৫৩৪৪৪১৮');
                                                                                        echo $school_name;
                                                                                        ?> </p>
                            <p><i class="fa-solid fa-envelope i-info"></i> <?php
                                                                            $email =  get_theme_mod('email', 'faroque.computer@gmail.com');
                                                                            echo $email;
                                                                            ?> </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12 bg-light px-0 overflow-hidden">
                    <div class="col-content p-2">
                        <div class="iframe-content">
                            <iframe src="<?php echo get_theme_mod('npa_footer_map_url', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.074605392548!2d90.40690178576378!3d23.744718834022915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c79e9e166e75%3A0xe8bfc6d579d79114!2swebnewsdesign.com!5e0!3m2!1sen!2sbd!4v1759137110236!5m2!1sen!2sbd'); ?>" class="d-block w-100 rounded-3" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12 bg-light">
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center py-md-3 py-2">
            <p class="text-light mb-0 text-center">Design & Developed by: <a class="text-warning" href="https://www.webnewsdesign.com/" target="_blank">webnewsdesign.com</a></p>
        </div>
    </div>
</footer>
<!-- footer end -->




<?php wp_footer(); ?>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll('.gallery-wrap').forEach(gallery => {
            lightGallery(gallery, {
                selector: '.card-item',
                download: false
            });
        });
    });
</script>
</body>

</html>