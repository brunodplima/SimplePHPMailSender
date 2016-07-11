<?php

/**
 * @file
 * Sends an email according to the parameters in ./config/config.php
 * No changes required
 *
 * @author Bruno Lima <brunolima.uece@gmail.com>
 */

require_once __DIR__.'/vendor/autoload.php';

$config = include(__DIR__.'/config/config.php');
if(!isset($config['host']) or !isset($config['port']) or !isset($config['security']) or !isset($config['name']) or !isset($config['username']) or !isset($config['password']) or !isset($config['html_file']) or !is_array($config['to']))
    die("Bad configuration");

$transport = Swift_SmtpTransport::newInstance($config['host'], $config['port'], $config['security'])
  ->setUsername($config['username'])
  ->setPassword($config['password'])
  ;

$mailer = Swift_Mailer::newInstance($transport);
$message = Swift_Message::newInstance($config['subject'])
  ->setFrom(array($config['username'] => $config['name']))
  ->setTo($config['to'])
  ->setBody(file_get_contents($config['html_file']), 'text/html')
  ;


if (!$mailer->send($message, $failures)) {
    echo "Failures:\n";
    print_r($failures);
    echo "\n";
}
else
    echo "Success!\n";
