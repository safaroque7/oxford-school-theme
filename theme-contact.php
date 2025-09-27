<?php get_header()
    /**
     * Template Name: Template Contact
    */
 ?>

    <!-- body start -->
    <div class="container bg-light py-3">
        <div class="committee-banner">
            <div class="text-center py-5 text-light banner-text">
                <h1>যোগাযোগ</h1>
            </div>
        </div>
        <section class="banner-section">
            <div class="row py-3">
                <div class="col-lg-8 mb-3">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="contact-topper position-sticky" style="top: 1rem;">
                                <div class="top-title bg-info text-center text-light py-1 mb-3">
                                    <p class="mb-0">যোগাযোগের ঠিকানা</p>
                                </div>
                                <div class="contact-content">
                                    <p class="mb-3"><i class="fa-solid fa-building-columns i-info"></i> এখানে স্কুলের / কলেজের নাম হবে। </p>
                                    <p class="mb-3"><i class="fa-solid fa-location-dot i-info"></i> ঠিকানা, ঠিকানা, ঠিকানা</p>
                                    <p class="mb-3"><i class="fa-solid fa-phone i-info"></i> ফোনঃ ০১৫৭৮-******</p>
                                    <p><i class="fa-solid fa-envelope i-info"></i> ই-মেইলঃ example@gmail.com</p>
                                </div>
                                <div class="iframe-content">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233711.69642763954!2d90.96824488686707!3d23.756461949475106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37540cadbd490b2d%3A0x2b968cb2ece46966!2sKasba%20Upazila!5e0!3m2!1sen!2sbd!4v1757746838093!5m2!1sen!2sbd" class="d-block w-100 rounded-3" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="top-title bg-info text-center text-light py-1 mb-3">
                                <p class="mb-0">বার্তা পাঠান</p>
                            </div>
                            <div class="contact-form">
                                <form action="#">
                                    <div class="mb-2">
                                        <label for="name" class="form-label">আপনার নাম</label>
                                        <input type="text" class="form-control" id="name" required>
                                    </div>
                                    <div class="mb-2">
                                        <label for="email" class="form-label">আপনার ই-মেইল</label>
                                        <input type="email" class="form-control" id="email" required>
                                    </div>
                                    <div class="mb-2">
                                        <label for="subject" class="form-label">বিষয়</label>
                                        <input type="text" class="form-control" id="subject" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="message" class="form-label">আপনার ম্যাসেজ (অপশনাল)</label>
                                        <textarea class="form-control" id="message" rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-info text-light px-4">সাবমিট</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                   <div  class="top-content position-sticky" style="top: 1rem;">
                        <?php 
                            //gallery part
                            get_template_part('parts/notice');
                        ?>
                   </div>
                </div>
            </div>
        </section>

        <?php 
            //gallery part
            get_template_part('parts/gallery');
        ?>
    </div>
    <!-- body end -->

<?php get_footer()?>