<?php

namespace App\Core;

class QueryBuilder{

    protected $connection;
    protected $query;
    protected $parameters;
    protected $allias;


    public function __construct(BDDInterface $conncetion = NULL)
    {
        $this->connection = $connection;
        if(NULL === $connection)
            $this->connection = new PDOConnection();
    }

    Public function select( string $values = '*'): QueryBuilder
    {
        $qb->select($values);
    }

    Public function from( string $table, string $allias): QueryBuilder
    {
        $qb->from($table, $allias);
    }

    Public function where( string $conditions): QueryBuilder
    {
        $qb->where($conditions);
    }

    Public function setParameters( string $key, string $value): QueryBuilder
    {
        $qb->setParameters($key, $value);
    }

    Public function join( string $table, string $alliasTarget, string $fieldSource = 'id', string $fieldTarget = 'id'): QueryBuilder
    {
        $qb->join($table, $alliasTarget, $fieldSource, $fieldTarget);
    }

    Public function leftJoin( string $table, string $alliasTarget, string $fieldSource = 'id', string $fieldTarget = 'id'): QueryBuilder
    {
        $qb->leftjoin($table, $alliasTarget, $fieldSource, $fieldTarget);
    }

    Public function addToQuery( string $query): QueryBuilder
    {
        $qb->addToQuery($query);
    }

    Public function getQuery(): ResultInterface
    {
        $qb->getQuery();
    }
}