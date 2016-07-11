<?php

return array(
    # GMail configuration as a sample
    'host' => 'smtp.gmail.com',
    'port' => 465,
    'security' => 'ssl',

    # Sender's information
    'name' => '',
    'username' => '',
    'password' => '',

    # Receiver's information
    'subject' => 'SimplePHPMailSender | '.date('Y/m/d H:i:s'),
    'to' => array(
        'brunolima.uece@gmail.com.br' => 'Bruno Lima'
    ),
    'html_file' => '', // Path to HTML file
);