<?php
require_once 'model.php';

/**
 * Created by PhpStorm.
 * User: Lukasz
 * Date: 2016-12-16
 * Time: 16:55
 */
class UserModel extends Model
{
    const USER_DATABASE_TABLE_NAME = 'uzytkownicy';

    /**
     * @param array $params
     * @return array
     */
    public function find(array $params)
    {
        $where = '';
        $arraySize = count($params);
        $i = 1;
        foreach ($params as $key => $value) {
            $where .= $key . '=\'' . htmlentities($value, ENT_QUOTES, 'UTF-8') . '\'';
            if ($arraySize > 1 && $i < $arraySize) {
                $where .= ' AND ';

                ++$i;
            }
        }
        return $this->select(self::USER_DATABASE_TABLE_NAME, '*', $where);
    }

    function addUser(array $params)
    {
       $this->insert($params, self::USER_DATABASE_TABLE_NAME);
    }
}
