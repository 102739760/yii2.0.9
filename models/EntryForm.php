<?php
/**
 * Created by PhpStorm.
 * User: yg
 * Date: 2016/10/11
 * Time: 下午3:18
 */

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{

    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name','email'],'required'],
            ['email','email'],
        ];
    }
}