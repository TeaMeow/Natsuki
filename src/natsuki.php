<?php

class Natsuki
{
    public $time;
    

    function __construct($time = null)
    {
        $this->time = $time ?: time();
        $this->lang = require('langs/zh_TW.php');
    }
    
    function now($time)
    {
        $this->time = is_string($time) ? strtotime($time) : $time;
        
        return $this;
    }
    
    
    
    function relative($target, $overYear = false)
    {
        $isPast = $target < $this->time;
        $second = $isPast ? $this->time - $target
                          : $target - $this->time;
                                      
        $minute = floor($second / 60);
        $hour   = floor($minute / 60);
        $day    = floor($hour   / 24);
        $week   = floor($day    / 7);
        $month  = floor($week   / 4);
        $year   = floor($month  / 12);

        if($year >= 1 && !$overYear)
            return date('Y-m-d H:i:s', $target);
        elseif($year >= 1 && $overYear)
            $string = sprintf($this->n($year, $this->lang['year'], $this->lang['years']), $year);
        elseif($month >= 1)
            $string = sprintf($this->n($month, $this->lang['month'], $this->lang['months']), $month);
        elseif($week >= 1)
            $string = sprintf($this->n($week, $this->lang['week'], $this->lang['weeks']), $week);
        elseif($day >= 1)
            $string = sprintf($this->n($day, $this->lang['day'], $this->lang['days']), $day);
        elseif($hour >= 1)
            $string = sprintf($this->n($hour, $this->lang['hour'], $this->lang['hours']), $hour);
        elseif($minute >= 1)
            $string = sprintf($this->n($minute, $this->lang['minute'], $this->lang['minutes']), $minute);
        elseif($second >= 1)
            $string = sprintf($this->n($second, $this->lang['second'], $this->lang['seconds']), $second);
        elseif($second <= 0)
            return $this->lang['justNow'];
        
        return $isPast ? sprintf($this->lang['ago'], $string) : sprintf($this->lang['fromNow'], $string);
    }
    
    function n($number, $single, $plural)
    {
        return $number === 1 || $number === -1 ? $single : $plural;
    }
    
    function age($time)
    {
        $datatime = is_string($time) ? $time : date('Y-m-d H:i:s', $time);
        
        return intval(date('Y', time() - strtotime($datatime))) - 1970;
    }
}
?>