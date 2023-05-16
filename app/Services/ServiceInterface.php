<?php

namespace App\Services;

interface ServiceInterface
{
    public function all();
    public function find(int $id);
    public function create(array $data);
    public function update(array $data,$id);
    public function delete(int $id);
    public function findEmail(array $data);
    public function searchAndPaginate($searchBy , $keyword ,$perPage  = 5);
}
