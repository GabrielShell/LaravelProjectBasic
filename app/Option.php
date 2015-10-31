<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $table='options';

    public $timestamps=false;

    /**
     *  获取指定设置选项的值
     *
     *  @param $option_name
     *
     *  @return string,boolean
     */

    public static function get($option_name)
    {
        $option = Self::where('name',$option_name)->first();
        return $option?$option->value:false;
    }


    /**
     *  设置指定设置选项的值
     *
     *  @param $option_name
     *  @param $value
     *
     *  @return boolean
     */

    public static function set($option_name,$value)
    {
        $option = Self::where('name',$option_name)->first();

        if(!$option){return false;} //如果没有查到相应的选项名

        $option->value = $value;
        $option->save();
    }

    /**
     *  添加设置选项
     *
     *  @param $option_name
     *  @param $init_value
     *
     *  @return boolean
     */
    public static function add($option_name,$init_value = '')
    {
        if(!$option_name){return false;} //选项名不合法

        $init_value = $init_value ? $init_value : '';
        
        $option = Self::where('name',$option_name)->first();

        if($option){return false;} //已经存在该设置选项

        $option = new Self;
        $option->name = $option_name;
        $option->value = $init_value;
        $option->save();
    }


    /**
     *  删除设置选项
     *
     *  @param $option_name
     *
     *  @return boolean
     */

    public static function del($option_name)
    {
        $option = Self::where('name',$option_name)->first();

        if(!$option){return false;} //不存在该设置选项

        $option->delete();
        return true;
    }
}
