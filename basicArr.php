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
    
    /**
     * ����������Ϊ���ַ���ֵ
     * @param unknown $arr
     * @param unknown $str
     * @return unknown
     */
    function setEmptyStr($arr, $str)
    {
        foreach ($arr as $k => $v){
            if (empty($v)) $arr[$k] = $str;
        }
        return $arr;
    }
    
    /**
     * �¾�����ĸ���(���ڱ����)
     * @param unknown $old_arr
     * @param unknown $new_arr
     * @return unknown
     */
    function checkUpdateArr($old_arr, $new_arr)
    {
        foreach ($old_arr as $k => $v){
            if (array_key_exists($k, $new_arr) && !empty($new_arr[$k])){
                $old_arr[$k] = $new_arr[$k];
            }
        }
        return $old_arr;
    }
}



?>