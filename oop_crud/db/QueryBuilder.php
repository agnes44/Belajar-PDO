<?php

class QueryBuilder
{
    protected $db;

    public function __construct($db)
    {
       $this->db = $db; 
    }

    public function select($table,$column=[])
    {
        if($column != null)
        {
            $column = implode(",",$column);
        }
        else
        {
            $column = '*';
        }

        $stmt = $this->$db->prepare("select {$column} from {$table}");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);

    }

    public function insert($table,$param)
    {
    	$query = sprintf('insert into %s (%s) values (%s)',
    		$table,
    		implode(', ',array_keys($param)),
    		"'".implode("', '", array_values($param))."'"
    		);
        var_dump($query);
    	try
    	{
    	    $stmt = $this->db->prepare($query);
    	    $stmt->execute($param);

    	    return true;

    	}
    	catch (\Exception $e)
    	{
    	    return false;
    	}
    }
}