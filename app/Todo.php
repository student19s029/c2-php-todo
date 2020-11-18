<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    const STATUS_NOT_YET = 0;

    protected $fillable = ['title', 'due_date', 'status'];
}