<?php
namespace Costa92\Hasher;
/**
 * Created by PhpStorm.
 * User: costa92
 * Date: 2017/7/3
 * Time: 下午10:31
 */
class MD5Hasher
{
    public function make($value,array $option=[])
    {
        $salt = isset($option['salt'])?$option['salt']:"";
        return hash('md5',$value.$salt);
    }

    public function check($value,$hasValue,$option =[])
    {
        $salt = isset($option['salt'])?$option['salt']:"";
        return hash('md5',$value.$salt)  === $hasValue;
    }
}