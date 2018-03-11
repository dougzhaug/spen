<?php
/**
 * Created by PhpStorm.
 * User: coolong
 * Date: 2018/3/11
 * Time: 10:29
 */

if (! function_exists('asset_home')) {
    /**
     * Generate an asset path for the application.
     *
     * @param  string  $path
     * @param  bool    $secure
     * @return string
     */
    function asset_home($path, $secure = null)
    {
        $path = 'assets/home/'.$path;
        return app('url')->asset($path, $secure);
    }
}