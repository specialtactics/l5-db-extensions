<?php

namespace SCM\L5DB\Database\Schema\Grammars;

use Illuminate\Support\Fluent;

class PostgresGrammar extends \Illuminate\Database\Schema\Grammars\PostgresGrammar
{
    /**
     * Create an 'updated_at' timestamp
     *
     * @param Fluent $column
     * @return string
     */
    protected function typeUpdatedTimeStamp(Fluent $column) {
        //@todo
    }
    /**
     * Create a Set data type
     *
     * @param Fluent $column
     * @param array $elements
     * @return string
     */
    protected function typeSet(Fluent $column) {
        //@todo
    }
}
