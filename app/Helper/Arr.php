<?php
namespace App\Helper;


class Arr
{
    public static function changeKey($arr, $column)
    {
        if (empty($arr)) {
            return $arr;
        }
        $newArr = array();

        foreach ($arr as &$val) {
            if (!isset($val[$column])) {
                continue;
            }
            $newArr[$val[$column]] = &$val;
        }
        if (!empty($newArr)) {
            $arr = $newArr;
        }
        return $arr;
    }

    public static function partialCopy($source, $keys)
    {
        $dest = array();
        foreach ($source as $key => $val) {
            if (in_array($key, $keys)) {
                $dest[$key] = $val;
            }
        }

        return $dest;
    } 

    public static function getColumn($arr, $column)
    {
        if (empty($arr)) {
            return array();
        }

        $res = array();
        foreach ($arr as &$val) {
            $res[] = $val[$column];
        }
        return $res;
    }

    public static function getrequest($name, $default_value = '')
    {
        $request_value = @$_REQUEST[$name];
        if (empty($request_value)) {
            return $default_value;
        } else {
            return $request_value;
        }
    }

    /**
     * 生成邀请码
     */
    public static function generateCode($count = 6){
        $random_alphabet = [
            'A','B','C','D','E','F','G','H','I','J','K','L',
            'M','N','O','P','Q','R','S','T','U','V','W','X','Y',
            'Z','a','b','c','d','e','f','g','h','i','j','k','l',
            'm','n','o','p','q','r','s','t','u','v','w','x','y',
            'z','0','1','2','3','4','5','6','7','8','9'
        ];
        $code = '';
        for ((int)$i=0;$i<$count;$i++){
            $rand = mt_rand(0, 61);
            $code .= $random_alphabet[$rand];
        }
        return $code;
    }


    public static function safeVar($str, $type = 'string') {
        if (!$str || !is_string($str)) {
            return $str;
        }
        $_str = trim($str);
        switch ($type) {
            case 'string': //字符处理
                //这儿可以做个xss过滤
                $_str = self::cleanXss($_str);
                break;
            case 'int':
                $_str = (int)$_str;
                break;
            case 'float':
                $_str = (float)$_str;
                break;
            default: //默认当做字符处理
                $_str = strip_tags($_str);
        }
        return $_str;
    }

    //XSS过滤
    public static function cleanXss($data)
    {
        //https://www.owasp.org/index.php/XSS_Filter_Evasion_Cheat_Sheet
        //https://gist.github.com/mbijon/1098477
        // Fix &entity\n;
        $data = str_replace(array('&amp;','&lt;','&gt;'), array('&amp;amp;','&amp;lt;','&amp;gt;'), $data);
        $data = preg_replace('/(&#*\w+)[\x00-\x20]+;/u', '$1;', $data);
        $data = preg_replace('/(&#x*[0-9A-F]+);*/iu', '$1;', $data);
        $data = html_entity_decode($data, ENT_COMPAT, 'UTF-8');

        // Remove any attribute starting with "on" or xmlns
        $data = preg_replace('#(<[^>]+?[\x00-\x20"\'])(?:on|xmlns)[^>]*+>#iu', '$1>', $data);

        // Remove javascript: and vbscript: protocols
        $data = preg_replace('#([a-z]*)[\x00-\x20]*=[\x00-\x20]*([`\'"]*)[\x00-\x20]*j[\x00-\x20]*a[\x00-\x20]*v[\x00-\x20]*a[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2nojavascript...', $data);
        $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*v[\x00-\x20]*b[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2novbscript...', $data);
        $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*-moz-binding[\x00-\x20]*:#u', '$1=$2nomozbinding...', $data);

        // Only works in IE: <span style="width: expression(alert('Ping!'));"></span>
        $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?expression[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
        $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?behaviour[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
        $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:*[^>]*+>#iu', '$1>', $data);

        // Remove namespaced elements (we do not need them)
        $data = preg_replace('#</*\w+:\w[^>]*+>#i', '', $data);

        do
        {
            // Remove really unwanted tags
            $old_data = $data;
            $data = preg_replace('#</*(?:applet|b(?:ase|gsound|link)|embed|frame(?:set)?|i(?:frame|layer)|l(?:ayer|ink)|meta|object|s(?:cript|tyle)|title|xml)[^>]*+>#i', '', $data);
        }
        while ($old_data !== $data);

        // we are done...
        return $data;
    }

    public static function exportCsv($filename,$data)
    {
        header("Content-type:text/csv;charset=utf-8");
        header("Content-Disposition:attachment;filename=".$filename);
        header('Cache-Control:must-revalidate,post-check=0,pre-check=0');
        header('Expires:0'); header('Pragma:public');
        echo $data;
    }

}

