<?php

namespace Mindy\Tests\QueryBuilder;

class MysqlSchemaTest extends SchemaTest
{
    protected $driver = 'mysql';

    public function testLimitOffset()
    {
        $sql = $this->getQueryBuilder()->from('profile')->offset(1)->toSQL();
        $this->assertEquals($this->quoteSql('SELECT * FROM [[profile]] LIMIT 1, 18446744073709551615'), $sql);
    }
}