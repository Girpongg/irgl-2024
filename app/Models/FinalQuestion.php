<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class FinalQuestion extends Model
{
    use HasFactory;

    protected $table = 'final_questions';

    public function teams()
    {
        return $this->belongsToMany(Team::class, 'final_answers', 'question_id', 'team_id');
    }
}