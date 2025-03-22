<?php

/**
 * Author: khanhfe <khanhfe2020@gmail.com>
 * Last Edited: 08 April 2024
 * Edited By: khanhfe
 */

add_action('phpmailer_init', 'custom_mail_smtp_server');
function custom_mail_smtp_server($phpmailer)
{
    $phpmailer->isSMTP();
    $phpmailer->IsHTML(true);
    $phpmailer->Host = 'smtp.gmail.com';
    $phpmailer->SMTPAuth = true; // Force it to use Username and Password to authenticate
    $phpmailer->Port = 587;
    $phpmailer->Username = ' khanhfe.dev@gmail.com';
    $phpmailer->Password = 'vgxuqzldntoxonir';
    $phpmailer->SMTPSecure = "tls"; // Choose SSL or TLS, if necessary for your server
    $phpmailer->From = ' khanhfe.dev@gmail.com';
    $phpmailer->FromName = 'khanhfe';
    $phpmailer->setfrom(" khanhfe.dev@gmail.com", "khanhfe");
    //$phpmailer->SMTPDebug  = 1;
}
