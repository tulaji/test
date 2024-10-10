<?php
/**
 * @param string $l
 * @return bool|string
 */
function _raid($l = '6')
{
    $r = substr(str_shuffle(str_repeat('0123456789', $l)), 0, $l);
    return $r;
}

function current_number_would_be($string)
{
    $next_code = preg_replace("/[^0-9]/", '', $string);

    if ($next_code == '') {
        $next_code = 0;
    } else {
        $next_code = (int) $next_code;
    }

    $next_code = $next_code + 1;

    return $next_code;
}

/**
 * @param $option
 * @param $value
 * @return bool
 */
function update_option($option, $value)
{
    $config_exist = AppConfig::where('setting', $option)->first();

    if ($config_exist) {
        $config_exist->value = $value;
        $config_exist->save();
    } else {
        $config_create = new AppConfig();
        $config_create->setting = $option;
        $config_create->value = $value;
        $config_create->save();
    }
    return true;
    //    $d = ORM::for_table('sys_appconfig')
    //        ->where('setting', $option)
    //        ->find_one();
    //    if ($d) {
    //        $d->value = $value;
    //        $d->save();
    //        return true;
    //    } else {
    //        // return false;
    //        $c = ORM::for_table('sys_appconfig')->create();
    //        $c->setting = $option;
    //        $c->value = $value;
    //        $c->save();
    //        return true;
    //    }
}
