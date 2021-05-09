<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Farmer extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public $table = 'farmers';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
        'id_number',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // public static function boot()
    // {
    //     parent::boot();
    //     Farmer::observe(new \App\Observers\FarmerActionObserver());
    // }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
