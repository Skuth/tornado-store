<?php

namespace Skuth\Model;

use Skuth\DB\Sql;
use Skuth\Model;

class Product extends Model {

    public static function listAll() {
        $sql = new Sql();
        $product = new Product();
        $query = "SELECT * FROM product ORDER BY id";
        $res = $sql->select($query);

        for ($i=0; $i < count($res); $i++) { 
            $id = $res[$i]["id"];
            $getPic = $product->getPicture($id);
            $getSize = $product->getSize($id);
            $res[$i]["pictures"] = [];
            $res[$i]["sizes"] = [];
            for ($d=0; $d < count($getPic); $d++) { 
                array_push($res[$i]["pictures"], $getPic[$d]["picture"]);
            }
            for ($e=0; $e < count($getSize); $e++) { 
                array_push($res[$i]["sizes"], $getSize[$e]["size"]);
            }
        }

        return $res;
    }

    public function listById($id) {
        $sql = new Sql();
        $product = new Product();
        $query = "SELECT * FROM product WHERE id=:id LIMIT 1";
        $res = $sql->select($query, [":id"=>$id]);

        $getPic = $product->getPicture($id);
        $getSize = $product->getSize($id);
        $res[0]["pictures"] = [];
        $res[0]["sizes"] = [];
        for ($d=0; $d < count($getPic); $d++) { 
            array_push($res[0]["pictures"], $getPic[$d]["picture"]);
        }
        for ($e=0; $e < count($getSize); $e++) { 
            array_push($res[0]["sizes"], $getSize[$e]["size"]);
        }
        
        $this->setData($res[0]); 
    }

    private function getPicture($id) {
        $sql = new Sql();
        $query = "SELECT * FROM product_picture WHERE product_id=:product_id";
        $res = $sql->select($query, [":product_id"=>$id]);
        return $res;
    }

    private function getSize($id) {
        $sql = new Sql();
        $query = "SELECT * FROM product_size WHERE product_id=:product_id";
        $res = $sql->select($query, [":product_id"=>$id]);
        return $res;
    }

}

?>