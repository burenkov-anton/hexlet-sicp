<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Chapter extends Model
{
    public const MARKABLE_COUNT = 101;

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'read_chapters');
    }

    public function comments(): MorphMany
    {
        return $this->morphMany('\App\Comment', 'commentable');
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(self::class);
    }

    public function children(): HasMany
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function exercises(): HasMany
    {
        return $this->hasMany(Exercise::class);
    }

    public function getCanReadAttribute(): bool
    {
        return $this->children->count() === 0;
    }

    public function getChapterLevel(): int
    {
        return count(explode('.', $this->path));
    }
}
