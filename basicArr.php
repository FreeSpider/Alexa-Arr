<?php 

class basicArr
{
    
    /**
     * 保留数组字段
     * @param unknown $arr
     * @param unknown $str
     * @return unknown[]
     */
    function keepField($arr, $str)
    {
        $keep_arr = array();
        $str_arr  = explode(',', $str);
        foreach ($str_arr as $k => $v){
            if (array_key_exists($v, $arr)) $keep_arr[$v] = $arr[$v];
        }
        return $keep_arr;
    }
    
    /**
     * 舍弃数组字段
     * @param unknown $arr
     * @param unknown $str
     * @return unknown[]
     */
    function abandonField($arr, $str)
    {
        $str_arr = explode(',', $str);
        foreach ($str_arr as $k => $v){
            //删除该键名对应值
            if (array_key_exists($v, $arr)) unset($arr[$v]);
        }
        return $arr;
    }
}



?>