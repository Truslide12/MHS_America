<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class SimpleSoftDeletes implements Scope
{
    /**
     * Restrict results to users not banned.
     *
     * @param Builder $builder
     * @param Model  $model
     */
    public function apply(Builder $builder, Model $model)
    {
        $builder->whereNull('users.deleted_at');
    }

    /**
     * Extend the query builder with the needed functions.
     *
     * @param Builder $builder
     */
    public function extend(Builder $builder)
    {
        $builder->macro('withTrashed', function (Builder $builder) {
            return $builder->withoutGlobalScope($this);
        });
    }
}