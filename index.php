<?php
require_once __DIR__ . '/vendor/autoload.php';

$paubox = new Paubox();
$message = new Paubox\Mail\Message();
$content = new Paubox\Mail\Content();
$content->setPlainText("Hello World");

$header = new Paubox\Mail\Header();
$header->setSubject("Testing!");
$header->setFrom("sender@domain.com");

$recipients = array();
array_push($recipients,'recipient@example.com');

$message->setHeader($header);
$message->setContent($content);
$message->setRecipients($recipients);

$sendMessageResponse = new Paubox\Mail\SendMessageResponse();
$sendMessageResponse = $paubox->sendMessage($message);
print_r($sendMessageResponse);