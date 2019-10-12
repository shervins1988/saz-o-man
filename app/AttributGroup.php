<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributGroup extends Model
{
    protected $table = "attributesgroup";

    public function attributesValue(){
        return $this->hasMany(AttributeValue::class, 'attributeGroup_id');
    }
}
