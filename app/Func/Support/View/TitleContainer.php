<?php

namespace Func\Support\View;


class TitleContainer
{
    static private $title;

    /**
     *  设置标题
     *
     *  @param string $_title
     *  @return void
     */

    public static function setTitle($_title)
    {
        Self::$title = $_title;
    }

    /**
     *  获得标题
     *
     *  @return string
     */

    public static function getTitle()
    {
        return Self::$title;
    }

    /**
     *  添加后缀
     *
     *  @param string $_suffix
     *  @return void
     */
    public static function addSuffix($_suffix)
    {
        Self::$title.=$_suffix;
    }


    /**
     *  添加前缀
     *
     *  @param string $_preffix
     *  @return void
     */
    public static function addPreffix($_preffix)
    {
        Self::$title = $_preffix.Self::$title;
    }
}
