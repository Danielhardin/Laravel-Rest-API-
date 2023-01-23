<?php
namespace App\Repositories\Interfaces;

Interface CategoryRepositoryInterface{

    //select all categories
    public function allCategories();
    //save category data
    public function storeCategory($data);
    // search by category name
    public function findCategory($id);
    //update category data
    public function updateCategory($data,$id);
    //delete category
    public function destroyCategory($id);
}
