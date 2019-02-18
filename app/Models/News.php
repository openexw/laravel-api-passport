<?php

namespace App\Models;

class News extends BaseModel {


    protected $fillable = [
        'title'
    ];
    protected $dates = ['published_at', 'created_at', 'updated_at'];

    public function content() {
        return $this->morphOne(Content::class, 'contentable');
    }

    public function scopePublished($query) {
        /*$query->where('published_at', '<=', now())
            // user 已经激活，并且用户没有被禁用
            ->whereHas('user', function ($q) {
                $q->whereNotNull('activated_at')->whereNull('banned_at');
            });*/
        $query->where('published_at', '<=', now());
    }
}
