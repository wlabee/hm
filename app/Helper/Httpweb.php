<?php
namespace App\Helper;

/**
 * 
 * @filesource http和web相关方法
 * @author byco
 * @date 2016-09
 */
class Httpweb
{
    public static function getIP(){
        $ip = NULL;
        if (getenv('HTTP_CLIENT_IP')) {
            $ip = getenv('HTTP_CLIENT_IP');
        }
        elseif (getenv('HTTP_X_FORWARDED_FOR')) {
            $ip = getenv('HTTP_X_FORWARDED_FOR');
        }
        elseif (getenv('HTTP_X_FORWARDED')) {
            $ip = getenv('HTTP_X_FORWARDED');
        }
        elseif (getenv('HTTP_FORWARDED_FOR')) {
            $ip = getenv('HTTP_FORWARDED_FOR');
        }
        elseif (getenv('HTTP_FORWARDED')) {
            $ip = getenv('HTTP_FORWARDED');
        }
        else {
            $ip = @$_SERVER['REMOTE_ADDR'];
        }
        if ($pos=strpos($ip, ',')){
            $ip = substr($ip,0,$pos);
        }

        return $ip;
    }
    
    public static function curl($url, $message, $method = 'POST', $header=NULL)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $message);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
        if(!is_null($header)){
        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
        }
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($curl, CURLOPT_TIMEOUT, 10);
        $curl_get = curl_exec($curl);

        $curl = null;
        return $curl_get;
    }

    public static function shortUrl($url)
    {
        $strRes = self::curl('http://dwz.cn/create.php', array('url' => $url), 'POST');

        $arrResponse=json_decode($strRes,true);
        if($arrResponse['status']==0)
        {
            /**错误处理*/
            //$arrResponse['err_msg']
        }
        /** tinyurl */
       return $arrResponse['tinyurl'];
    }
   
}

