<?php

namespace SCM\L5DB\Database;

use SCM\L5DB\Database\Schema\Grammars\PostgresGrammar as SchemaGrammar;

class PostgresConnection extends \Illuminate\Database\PostgresConnection
{
    /**
     * Get the default schema grammar instance.
     *
     * @return \Illuminate\Database\Schema\Grammars\PostgresGrammar
     */
    protected function getDefaultSchemaGrammar()
    {
        return $this->withTablePrefix(new SchemaGrammar);
    }
}
