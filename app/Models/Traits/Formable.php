<?php

namespace App\Models\Traits;
use App\Models\FormBuilder\Form;
use App\Models\FormBuilder\FormGroupField;

trait Formable{
    public function form()
    {
        return $this->belongsTo(Form::class,'form_id');
    }

    public function records()
    {
        return $this->belongsToMany(FormGroupField::class,'formable_records','formable_id','field_id')->withPivot('value');;
    }
}