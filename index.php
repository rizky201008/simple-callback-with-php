<?php
$url = "https://webhook.site/afdf81b5-5c8a-43ba-8569-85701a519f57";
$headers = ['Content-Type: application/json; charset=utf-8'];
$POST = [
    "username" => "username",
    "commands" => "topup",
    "ref_id" => "some1d",
    "hp" => "087800001233",
    "pulsa_code" => "xld25",
    "sign" => "740b00a1b8784e028cc8078edf66d12b"
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
$response = curl_exec($ch);
