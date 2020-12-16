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
    ];

    const WEEK = [
        '日',
        '月',
        '火',
        '水',
        '木',
        '金',
        '土',
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
    
    /**
     * Y年m月d日(w) の文字列を返す
     * @return string
     */
    public function getDisplayDate(): string
    {
        $timestamp = strtotime($this->due_date);
        return Date('Y年m月d日', $timestamp) . '('. self::WEEK[Date('w', $timestamp)] .')';
    }
}