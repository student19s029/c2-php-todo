<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    const STATUS_NOT_YET = 0;
    const STATUS = [
        '未対応',
        '作業中',
        '完了',
        '中止',
    ];

    protected $fillable = ['title', 'due_date', 'status'];
    
    /**
     * 状態の表示テキストを返す
     *
     * @return string
     */
    public function getStatusText(): string
    {
        if (empty(self::STATUS[$this->status])) {
            return  "";
        }

        return self::STATUS[$this->status];
    }
}