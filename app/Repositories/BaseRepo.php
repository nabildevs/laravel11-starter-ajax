<?php

namespace App\Repositories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepo
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function model()
    {
        return $this->model;
    }

    public function all($filters = [], $paginate = true)
    {
        $class_name = class_basename($this->model);
        $alias = Str::slug($class_name);

        if ($paginate) {
            return $this->model
                ->filter($filters)
                ->paginate(env('PAGINATION_LIMIT'), ['*'], $alias)
                ->withQueryString()
                ->onEachSide(0);
        } else {
            return $this->model
                ->filter($filters)
                ->get();
        }
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function get_class_name()
    {
        return get_class($this->model);
    }
}
