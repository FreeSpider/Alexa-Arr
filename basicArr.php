<?php 

class basicArr
{
    
    /**
     * ���������ֶ�
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
     * ���������ֶ�
     * @param unknown $arr
     * @param unknown $str
     * @return unknown[]
     */
    function abandonField($arr, $str)
    {
        $str_arr = explode(',', $str);
        foreach ($str_arr as $k => $v){
            //ɾ���ü�����Ӧֵ
            if (array_key_exists($v, $arr)) unset($arr[$v]);
        }
        return $arr;
    }
}



?>