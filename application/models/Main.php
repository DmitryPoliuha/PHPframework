<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 26.05.2018
 * Time: 14:15
 */

namespace application\models;

use application\core\Model;

class Main extends Model {

    public function getNews(){
//        $params =
//            [
//                "title" => "new 3",
//                "description" => "text 3"
//            ];
//        $this->db->insert('title', 'description')->into('news')->values(':title', ':description')->execute($params);
//        $result = $this->db->lastInsertId();

        $result = $this->db->select('title', 'description')->from('news')->execute();
//        debug($result);
        return $result;
    }
}