<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class TaskResult extends Model
{


    public function task() : BelongsTo {
        return $this->belongsTo(Task::class);
    }
}
