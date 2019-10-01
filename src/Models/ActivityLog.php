<?php

namespace Wikichua\SimpleControlPanel\Models;

use Illuminate\Database\Eloquent\Model;
use Wikichua\SimpleControlPanel\Traits\DynamicFillable;
use Wikichua\SimpleControlPanel\Traits\UserTimezone;

class ActivityLog extends Model
{
    use DynamicFillable, UserTimezone;

    const UPDATED_AT = null;

    protected $casts = [
        'data' => 'array',
    ];

    // user relationship
    public function user()
    {
        return $this->belongsTo(config('auth.providers.users.model'))->withDefault(['name' => null]);
    }

    // dynamic model
    public function model()
    {
        return $this->model_class ? app($this->model_class)->find($this->model_id) : null;
    }
}