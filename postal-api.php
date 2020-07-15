<?php
header("Content-Type: application/json; charset=UTF-8");
function sendMail($event)
{
    $curl = curl_init("https://jashtsserie.com/api/v1/send/message/");
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($event));
    $headers = [
        'Sender: raw@systemroot.dev',
        'X-Server-API-Key: **************************',
        'Content-Type: application/json',
        'Accept: application/json'

    ];
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    return curl_exec($curl);
}
$event = array(
  'from' => 'raw@systemroot.dev',
  'to' => array(
      'dkqowkdoqwd@google.com' 
  ),
  'subject' => 'Test Subject.',
  'plain_body' => 'Test decs.',
);
print_r(sendMail($event));
?>
