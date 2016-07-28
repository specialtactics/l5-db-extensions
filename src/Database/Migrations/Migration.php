<?php

namespace SCM\L5DB\Database\Migrations;

abstract class Migration extends \Illuminate\Database\Migrations\Migration
{
    /**
     * Create a trigger to set the date for every field provided to now, on record creation
     *
     * Note: Currently MariaDB/MySQL only for now
     *
     * @param $tableName
     * @param array $fieldNames
     */
    public function createDateTimeTrigger($tableName, $fieldNames) {
        if (!is_array($fieldNames)) {
            $fieldNames = [$fieldNames];
        }

        $fieldsString = '';
        foreach ($fieldNames as $fieldName) {
            $fieldsString .= sprintf('SET NEW.`%s` = NOW(); ', $fieldName);
        }

        \DB::unprepared(sprintf('
            CREATE TRIGGER `%s_BINS` BEFORE INSERT ON `%s` FOR EACH ROW
            BEGIN
            %s
            END
        ', $tableName, $tableName, $fieldsString));
    }
}
