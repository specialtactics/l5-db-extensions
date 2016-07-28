<?php

namespace SCM\L5DB\Database\Schema;

use Closure;

class Builder extends \Illuminate\Database\Schema\Builder
{
    /**
     * Execute the blueprint to build / modify the table.
     *
     * @param  \SCM\L5DB\Database\Schema\Blueprint  $blueprint
     * @return void
     */
    protected function build(\Illuminate\Database\Schema\Blueprint $blueprint)
    {
        $blueprint->build($this->connection, $this->grammar);
    }

    /**
     * Create a new command set with a Closure.
     *
     * @param  string  $table
     * @param  \Closure|null  $callback
     * @return \SCM\L5DB\Database\Schema\Blueprint
     */
    protected function createBlueprint($table, Closure $callback = null)
    {
        if (isset($this->resolver)) {
            return call_user_func($this->resolver, $table, $callback);
        }

        return new Blueprint($table, $callback);
    }
}
