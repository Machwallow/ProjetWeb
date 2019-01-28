<?php
require_once(PATH_MODELS.'Dao.php');
require_once(PATH_ENTITY.'Categorie.php');

class CategoriesDAO extends DAO {

    public function getAllCategories(){
        $categories = array();
        $datas = $this->queryAll('SELECT * FROM categories');
        foreach ($datas as $data) {
            $categorie = new Categorie($data['id'],$data['name']);
            $categories[] = $categorie;
        }
        return $categories;
    }

    public function getCategorie($id){
        $data = $this->queryRow('SELECT * FROM categories WHERE id = ?',array($id));

        return new Categorie($data['id'],$data['name']);
    }
}
