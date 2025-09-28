<?php
function oxford_school_theme()
{
    // === ১. ডিফল্ট পেইজ তৈরি ===
    $pages = array(
        'আমাদের সম্পর্কে'        => 'আমাদের সম্পর্কে পেইজ',
        'কমিটি'                 => 'কমিটি পেইজ',
        'ফটো গ্যালারি'           => 'ফটো গ্যালারি পেইজ',
        'ভিডিও গ্যালারি'          => 'ভিডিও গ্যালারি পেইজ',
        'প্রাইভেসি পলিসি'         => 'প্রাইভেসি পলিসি পেইজ',
        'পরীক্ষার ফল'           => 'পরীক্ষার ফল পেইজ',
        'যোগাযোগ'              => 'যোগাযোগ পেইজ',
    );

    foreach ($pages as $title => $content) {
        // get_page_by_title এর পরিবর্তে WP_Query ব্যবহার
        $query = new WP_Query(array(
            'post_type'      => 'page',
            'title'          => $title,
            'posts_per_page' => 1,
            'post_status'    => 'draft'
        ));

        if (!$query->have_posts()) {
            // পেইজ না থাকলে নতুন তৈরি হবে
            wp_insert_post(array(
                'post_title'   => $title,
                'post_content' => $content,
                'post_status'  => 'draft',
                'post_type'    => 'page'
            ));
        }
        wp_reset_postdata();
    }


    // === ২. ডিফল্ট ক্যাটাগরি তৈরি ===
    $categories = array(
        'স্লাইডার',
        'নোটিশ',
        'নিউজ ও ইভেন্টস',
    );

    foreach ($categories as $cat) {
        if (!term_exists($cat, 'category')) {
            wp_insert_term($cat, 'category');
        }
    }
}
add_action('after_switch_theme', 'oxford_school_theme');
