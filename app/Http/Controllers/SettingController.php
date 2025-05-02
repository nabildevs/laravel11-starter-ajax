<?php

namespace App\Http\Controllers;

use App\Helper\Helper;
use App\Http\Requests\Setting\SettingUpdateRequest;
use App\Models\Setting;
use App\Repositories\SettingRepo;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    protected $setting_repo;

    public function __construct(SettingRepo $setting_repo)
    {
        $this->setting_repo = $setting_repo;
    }

    public function edit()
    {
        $data['setting'] = $this->setting_repo->model()->first();
        $views = ['business', 'app'];

        if (!in_array(request()->view, $views)) {
            abort(404);
        }

        $html = view('setting.render.' . request()->view, $data)->render();
        return Helper::res_json('success', ['html' => $html], 200);
    }

    public function update(SettingUpdateRequest $request, Setting $setting)
    {
        $data = $request->validated();

        try {
            $setting = $this->setting_repo->find($id);

            if ($request->hasFile('business_icon')) {
                Helper::delete_file($setting->business_icon);

                $data['business_icon'] = Helper::upload_file(
                    $request->file('business_icon'),
                    $this->setting_repo->upload_directory_icon
                );
            }

            if ($request->hasFile('business_logo')) {
                Helper::delete_file($setting->business_logo);

                $data['business_logo'] = Helper::upload_file(
                    $request->file('business_logo'),
                    $this->setting_repo->upload_directory_logo
                );
            }

            DB::beginTransaction();

            $update = $this->setting_repo->update($setting->id, $data);

            DB::commit();
            return Helper::res_json('Data updated successfully', $update, 200);
        } catch (\Throwable $th) {
            DB::rollback();
            return Helper::res_json($th->getMessage(), $th, 500);
        }
    }
}
