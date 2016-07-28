<?php

namespace SCM\L5DB\Database;

use SCM\L5DB\Database\Schema\MySqlBuilder;
use SCM\L5DB\Database\Schema\Grammars\MySqlGrammar as SchemaGrammar;

class MySqlConnection extends \Illuminate\Database\MySqlConnection
{
    /**
     * Get a schema builder instance for the connection.
     *
     * @return \Illuminate\Database\Schema\MySqlBuilder
     */
    public function getSchemaBuilder()
    {
        if (is_null($this->schemaGrammar)) {
            $this->useDefaultSchemaGrammar();
        }

        return new MySqlBuilder($this);
    }

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
