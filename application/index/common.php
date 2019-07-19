<?php
function arr_unique($arr2rd){
    foreach ($arr2rd as $k=>$v) {
        $v = implode('@',$v);
        $temp[] = $v;
    }

    $temp = array_unique($temp);
    foreach ($temp as $k=>$v) {
        $new_temp[] = explode('@',$v);
    }
    return $new_temp;
}

