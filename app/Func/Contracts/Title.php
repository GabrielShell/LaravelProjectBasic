<?php

namespace Func\Contracts;

interface Title
{

    /**
     * 设置标题
     *
     * @return string $_title
     * @return void
     */
    public static function setTitle($_title);

    /**
     * 获取标题
     *
     * @return string
     */
    public static function getTitle()

    /**
     *  添加后缀
     *
     *  @param string $_suffix
     *  @return void
     */
    public static function addSuffix($_suffix)
}
