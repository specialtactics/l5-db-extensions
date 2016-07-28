<?php

namespace SCM\L5DB\Database\Schema\Grammars;

use Illuminate\Support\Fluent;

class MySqlGrammar extends \Illuminate\Database\Schema\Grammars\MySqlGrammar
{
    /**
     * Create an 'updated_at' timestamp
     *
     * @param Fluent $column
     * @return string
     */
    protected function typeUpdatedTimeStamp(Fluent $column) {
        $column['nullable'] = true;
        return 'TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NULL DEFAULT NULL';
    }
    /**
     * Create a Set data type
     *
     * @param Fluent $column
     * @param array $elements
     * @return string
     */
    protected function typeSet(Fluent $column) {
        return "set('".implode("', '", $column->allowed)."')";
    }
}
