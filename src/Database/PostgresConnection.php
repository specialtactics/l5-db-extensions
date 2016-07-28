<?php

namespace SCM\L5DB\Database;

use SCM\L5DB\Database\Schema\Grammars\PostgresGrammar as SchemaGrammar;
use SCM\L5DB\Database\Schema\PostgresBuilder;

class PostgresConnection extends \Illuminate\Database\PostgresConnection
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

        return new PostgresBuilder($this);
    }

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
