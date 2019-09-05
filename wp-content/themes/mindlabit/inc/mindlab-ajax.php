<?php

  add_action( 'wp_ajax_mindlab_contact_frm_send', 'mindlab_contact_frm');
  add_action( 'wp_ajax_nopriv_mindlab_contact_frm_send', 'mindlab_contact_frm');


  function mindlab_contact_frm(){
    $name = wp_strip_all_tags( $_POST["name"] );
    $email = wp_strip_all_tags( $_POST["email"] );
    $phone = wp_strip_all_tags( $_POST["phone"] );
    $msg = wp_strip_all_tags( $_POST["msg"] );

    //send email function
    $to = "salihanmridha@gmail.com";
    $subject = $name ." contacted from " . get_bloginfo( 'name' );
    $headers[] = "From: " . get_bloginfo( 'name' ) . '<' . get_bloginfo('admin_email') . '>';
    $headers[] = "Reply-To: " . $name . '<' . $email . '>';
    $headers[] = "Content-Type: text/html: charset=UTF-8";

    wp_mail( $to, $subject, $msg, $headers);

    die();
  }
?>
