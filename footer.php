<!-- footer start -->
<footer class="footer">
    <div class="container bg-info">
        <div class="footer-top">
            <div class="row p-3">
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
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233711.69642763954!2d90.96824488686707!3d23.756461949475106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37540cadbd490b2d%3A0x2b968cb2ece46966!2sKasba%20Upazila!5e0!3m2!1sen!2sbd!4v1757746838093!5m2!1sen!2sbd" class="d-block w-100 rounded-3" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12 bg-light">
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center text-lg-start">
            <p class="text-light mb-0 pb-3 px-1">Design & Developed by: <a class="text-warning" href="https://www.webnewsdesign.com/" target="_blank">webnewsdesign.com</a></p>
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