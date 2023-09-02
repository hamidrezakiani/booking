<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExaminationRecord extends Model
{
    use HasFactory,SoftDeletes;
    protected $connection = 'examination_mysql';

    protected $table = 'formable_records';

}
