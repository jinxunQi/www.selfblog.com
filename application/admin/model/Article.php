<?php
namespace app\admin\model;
use think\Model;
class Article extends Model{
    protected $pk = 'id';
    protected $autoWriteTimestamp = true;
    protected $updateTime = false;
}