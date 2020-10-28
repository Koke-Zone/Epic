<?php
add_filter( 'rwmb_meta_boxes', 'wpepicpk_register_meta_boxes' );
function wpepicpk_register_meta_boxes( $meta_boxes ) {
    $meta_boxes[] = array(
        'id'         => 'wpepic_gallary',
        'title'      => 'Post Gallary',
        'post_types' => 'post',

        'fields' => array(
            array(
                'name'  => 'Gallary',
                'desc'  => 'Introduce your Gallary here',
                'id'    => 'epicWP_post_gallary',
                'type'  => 'image_upload',

                // Delete file from Media Library when remove it from post meta?
                // Note: it might affect other posts if you use same file for multiple posts
                'force_delete'     => false,
            
                // Maximum file uploads.
                'max_file_uploads' => 5,
            
                // Do not show how many files uploaded/remaining.
                'max_status'       => 'false',
            
                // Image size that displays in the edit page.
                'image_size'       => 'thumbnail',
            )
        )
    );
  

    // Add more meta boxes if you want
    // $meta_boxes[] = ...

    return $meta_boxes;
}
?>