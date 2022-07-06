<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Employee extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable = [
        'id_employee',
        'name',
        'email',
        'gender',
        'address'
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $date = Carbon::now();
            $count = $model->whereMonth('created_at', $date)->first();

            if($model->whereMonth('created_at', $date)->first() == NULL) {
                $id_employee = 'SSI/'.$date->format('d').$date->format('m').$date->format('Y').'/'.'0001';
            } else {
                $id_employee = 'SSI/'.$date->format('d').$date->format('m').$date->format('Y').'/'.'000'.$count;
            }

            $model->id_employee = $id_employee;
        });
    }
}
