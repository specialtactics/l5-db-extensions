<?php

namespace SCM\L5DB\Database;

use SCM\L5DB\Database\Schema\Grammars\MySqlGrammar as SchemaGrammar;

class MySqlConnection extends \Illuminate\Database\MySqlConnection
{
    /**
     * Get the default schema grammar instance.
     *
     * @return \Illuminate\Database\Schema\Grammars\MySqlGrammar
     */
    protected function getDefaultSchemaGrammar()
    {
        return $this->withTablePrefix(new SchemaGrammar);
    }
}
