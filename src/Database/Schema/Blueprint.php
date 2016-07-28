<?php

namespace SCM\L5DB\Database\Schema;

class Blueprint extends \Illuminate\Database\Schema\Blueprint
{
    /**
     * Create an 'updated_at' timestamp on the table
     *
     * @param $column
     * @return mixed
     */
    public function updatedTimeStamp($column) {
        return $this->addColumn('updatedTimeStamp', $column);
    }

    /**
     * Create a set column on the table
     *
     * @param $column
     * @param array $allowed
     * @return mixed
     */
    public function set($column, array $allowed) {
        return $this->addColumn('set', $column, compact('allowed'));
    }
}
