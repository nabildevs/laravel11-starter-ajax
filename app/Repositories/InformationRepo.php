<?php

namespace App\Repositories;

use App\Helper\Helper;
use App\Models\Information;

class InformationRepo extends BaseRepo
{
    protected $model;
    public $upload_directory = 'app/information';

    public function __construct(Information $information)
    {
        $this->model = $information;
    }

    public function store(array $data)
    {
        $information = $this->model->create($data);
        return $information;
    }

    public function update($id, array $data)
    {
        $information = $this->model->find($id);
        $information->update($data);
        return $information;
    }

    public function destroy($id)
    {
        $information = $this->model->find($id);
        Helper::delete_file($information->image);
        $information->delete();
        return $information;
    }
}
