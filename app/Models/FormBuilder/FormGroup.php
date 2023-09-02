<?php

namespace App\Models\FormBuilder;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FormGroup extends Model
{
    use HasFactory,SoftDeletes;
    protected $connection = 'form_builder_mysql';
    protected $fillable = ['title','form_id','row_number','col_number'];
    public function fields()
    {
        return $this->hasMany(FormGroupField::class,'form_group_id');
    }

    public function form()
    {
        return $this->belongsTo(Form::class,'form_id');
    }
}
