<?php
/**
 * Class that operate on table 'alteration'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-10-10 17:21
 */
class AlterationMySqlExtDAO extends AlterationMySqlDAO{
    function setSQL($sql){
        $sqlQuery = new SqlQuery($sql);
        return $this->getList($sqlQuery);
    }
}
?>