<?phl 


if(isset($_SERVER['HTTPS'])&&$_SERVER['HTTPS']=='on')||
(isset($_SERVER['HTTP_X_FORWARDED_PROTO'])&&$_SERVER['HTTP_X_FORWARDED_PROTO']=='https')){
    $protocol='https://';

}
else{
    $protocol='http://';
}
$app_url=($protocol)"{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";