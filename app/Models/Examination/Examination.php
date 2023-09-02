<?php

namespace App\Models\Examination;

use App\Models\FormBuilder\Form;
use App\Models\Traits\Formable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Examination extends Model
{
    use HasFactory,Formable,SoftDeletes;
    protected $connection = 'examination_mysql';
    protected $fillable = ['name','form_id'];
}
