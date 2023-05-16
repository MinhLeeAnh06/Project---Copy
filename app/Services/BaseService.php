<?php

namespace App\Services;

class BaseService implements ServiceInterface
{
    public $repository;
    public function all()
    {
        return $this->repository->all();
    }

    public function find($id)
    {
        return $this->repository->find($id);
    }
    public function findEmail(array $data)
    {
        return $this->repository->find($data);
    }
    public function create(array $data)
    {
        return $this->repository->create($data);
    }

    public function update(array $data, $id)
    {
        return $this->repository->update($data,$id);
    }

    public function delete(int $id)
    {
        return $this->repository->delete($id);
    }
    public function searchAndPaginate($searchBy, $keyword, $perPage = 5)
    {
        return $this->repository->searchAndPaginate($searchBy, $keyword, $perPage);
    }
}
