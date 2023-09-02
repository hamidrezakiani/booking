<?php

namespace App\Models\FormBuilder;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FormGroupFieldOption extends Model
{
    use HasFactory,SoftDeletes;
    protected $connection = 'form_builder_mysql';
    protected $fillable = ['value','form_group_field_id'];
    public function field()
    {
        return $this->belongsTo(FormGroupField::class,'form_group_field_id');
    }
}
