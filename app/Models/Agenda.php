<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agenda extends Model
{
    use HasFactory, HasUuids;

    protected $primaryKey = 'id';

    public $increamenting = false;

    protected $keyType = 'string';

    protected $fillable = [
        'title',
        'image',
        'agenda_date',
        'description'
    ];

}
