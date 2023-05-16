<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

    class Statistic extends Model
{
    use HasFactory;
    public $timestamps =false;
    protected $fillable = [
        'order_date','quantity','total_order','sales'
    ];
    protected $primaryKey = 'id';
    protected $table  = 'statistic';
}
