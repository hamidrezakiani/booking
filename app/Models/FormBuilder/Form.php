<?php

namespace App\Models\FormBuilder;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Form extends Model
{
    use HasFactory,SoftDeletes;
    protected $connection = 'form_builder_mysql';
    
    protected $fillable = ['name'];
    public function groups()
    {
        return $this->hasMany(FormGroup::class,'form_id');
    }

}
