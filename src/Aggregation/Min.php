<?php

namespace Mindy\QueryBuilder\Aggregation;

use Mindy\QueryBuilder\QueryBuilder;

class Min extends Aggregation
{
    public function toSQL(QueryBuilder $qb = null)
    {
        return 'MIN(' . parent::toSQL($qb) . ')' . (empty($this->alias) ? '' : ' AS ' . $this->getQuotedAlias($qb));
    }
}