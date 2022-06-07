<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rcv extends Model
{
    use HasFactory;
    protected $fillable = [
        'graduateid',
        'companyphone',
        'companyname',
        'companyemail',
        'companyregion',
        'companycity',
        'date',
        'reasonofverification',
        ];
}
