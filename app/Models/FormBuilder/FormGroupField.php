<?php

namespace App\Models\FormBuilder;

use App\Models\Examination\Examination;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FormGroupField extends Model
{
    use HasFactory,SoftDeletes;
    protected $connection = 'form_builder_mysql';
    protected $fillable = ['title','type','form_group_id'];
    public function options()
    {
        return $this->hasMany(FormGroupFieldOption::class,'form_group_field_id');
    }

    public function group()
    {
        return $this->belongsTo(FormGroup::class,'form_group_id');
    }

    public function examinations()
    {
        return $this->belongsToMany(Examination::class,'formable_records','field_id','formable_id');
    }
}
