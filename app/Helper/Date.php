<?php
namespace App\Helper;

class Date
{
    public static function Str($time_stamp = NULL, $format = 'Y-m-d H:i:s')
    {
        if (is_null($time_stamp)) {
            $time_stamp = time();
        }
        return date($format, $time_stamp);
    }

    //检查0000-00-00 00:00:00
    public static function isEmpty($date)
    {
        if (empty($date)) {
            return TRUE;
        }

        if ($date === '0000-00-00' || $date === '0000-00-00 00:00:00' || $date === '00:00:00') {
            return TRUE;
        }

        return FALSE;
    }

    public static function isDateTime($date)
    {
        $pattern = '/\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2}/i';
        if(!preg_match($pattern, $date)) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public static function isDate($date)
    {
        if (!is_string($date)) {
            return FALSE;
        }

        $pattern = '/\d{4}-\d{2}-\d{2}/i';
        if(!preg_match($pattern, $date)) {
            return FALSE;
        } else {
            return TRUE;
        }
    }


    //时间转为已经经过多少时间的形式
    // 1秒前 1分前 1小时前 1天前用format表示
    public static function toPastFormat($date, $format = 'Y-m-d')
    {
        static $max_second_compare = 86400;
        static $compares = array(
                '60' => array(
                        'base' => 1,
                        'f' => '%d 秒前',
                    ),

                '3600' => array(
                        'base' => 60,
                        'f' => '%d 分前',
                    ),

                '86400' => array(
                        'base' => 3600,
                        'f' => '%d 小时前',
                    ),

            );

        $time = time();
        if (!is_numeric($date)) {
            $date = strtotime($date);
        }
        $date = (int) $date;

        if (empty($date) || $date > $time) {
            return 'unknow';
        }

        $delta = $time - $date;

        $ret = NULL;
        foreach ($compares as $t => $c) {
            if ($delta < $t) {
                $num = floor($delta / $c['base']);
                $ret = sprintf($c['f'], $num);
                break;
            }
        }

        if (is_null($ret)) {
            $ret = self::Str($date, $format);
        }
        return $ret;
    }
}