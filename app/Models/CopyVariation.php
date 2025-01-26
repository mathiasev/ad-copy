<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CopyVariation extends Model
{
    /** @use HasFactory<\Database\Factories\CopyVariationFactory> */
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['data', 'status', 'created_by_id', 'copy_group_id'];

    public function createdBy()
    {
        return $this->belongsTo(User::class);
    }

    public function copyGroup()
    {
        return $this->belongsTo(CopyGroup::class);
    }
}
