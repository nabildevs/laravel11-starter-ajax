<?php

namespace App\Repositories;

use App\Models\Setting;

class SettingRepo extends BaseRepo
{
    protected $model;
    public $upload_directory_icon = 'app/setting/icon';
    public $upload_directory_logo = 'app/setting/logo';

    public function __construct(Setting $setting)
    {
        $this->model = $setting;
    }

    public function update($id, array $data)
    {
        return $this->model->find($id)->update($data);
    }
}
