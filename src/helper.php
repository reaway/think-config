<?php
declare (strict_types=1);

use Think\Component\Config\Facade\ConfigFacade;

if (!function_exists('config')) {
    /**
     * 获取和设置配置参数
     * @param string|array $name 参数名
     * @param mixed $value 参数值
     * @return mixed
     */
    function config($name = '', $value = null)
    {
        if (is_array($name)) {
            return ConfigFacade::set($name, $value);
        }

        return str_starts_with($name, '?') ? ConfigFacade::has(substr($name, 1)) : ConfigFacade::get($name, $value);
    }
}
