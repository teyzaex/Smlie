<?php
$access_token = 'vQpLKiAyKSmmWvWYQmJWiaELngPc71RCjptMh0ty5uanVE3GZdcmLRQ1+Cv3jlCKC+EHI5jJNDFQXhURpuYPrzr8sUe1Fp12ifzqbOLL7Gf4X5BV+qVo+U0hDAiwa+Ja/vbnU8HGdsocz3VlcItdDAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>