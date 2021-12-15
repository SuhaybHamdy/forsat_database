<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['comment','question_id', 'created_by'];

    public function question(){
        return $this->belongsTo(Question::class);
    }

    public function createdBy(){
        return $this->belongsTo(User::class,'created_by');
    }
}
