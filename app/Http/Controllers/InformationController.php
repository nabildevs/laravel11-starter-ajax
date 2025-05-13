<?php

namespace App\Http\Controllers;

use App\Helper\Helper;
use App\Models\Information;
use Illuminate\Support\Facades\DB;
use App\Repositories\InformationRepo;
use App\Http\Requests\Information\InformationStoreRequest;
use App\Http\Requests\Information\InformationUpdateRequest;

class InformationController extends Controller
{
    protected $information_repo;

    public function __construct(InformationRepo $information_repo)
    {
        $this->information_repo = $information_repo;
    }

    public function index()
    {
        $data['title'] = 'Informasi';
        $data['informations'] = $this->information_repo->all(request()->all());
        return view('information.index', $data);
    }

    public function create()
    {
        $html = view('information.render.create')->render();
        return Helper::res_json('sukses', ['html' => $html], 200);
    }

    public function store(InformationStoreRequest $request)
    {
        $data = $request->validated();

        try {
            if ($request->hasFile('image')) {
                $data['image'] = Helper::upload_file(
                    $request->file('image'),
                    $this->information_repo->upload_directory
                );
            }

            DB::beginTransaction();

            $store = $this->information_repo->store($data);

            DB::commit();
            return Helper::res_json('Informasi created successfully', $store, 200);
        } catch (\Throwable $th) {
            DB::rollback();
            return Helper::res_json($th->getMessage(), $th, 500);
        }
    }

    public function show(Information $information)
    {
        $data['information'] = $information;
        $html = view('information.render.detail', $data)->render();
        return Helper::res_json('sukses', ['html' => $html], 200);
    }

    public function edit(Information $information)
    {
        $data['information'] = $information;
        $html = view('information.render.edit', $data)->render();
        return Helper::res_json('sukses', ['html' => $html], 200);
    }

    public function update(InformationUpdateRequest $request, Information $information)
    {
        $data = $request->validated();

        try {
            if ($request->hasFile('image')) {
                Helper::delete_file($information->image);
                $data['image'] = Helper::upload_file($request->file('image'), $this->information_repo->upload_directory);
            }
            DB::beginTransaction();
            $update = $this->information_repo->update($information->id, $data);
            DB::commit();
            return Helper::res_json('Informasi updated successfully', $update, 200);
        } catch (\Throwable $th) {
            DB::rollback();
            return Helper::res_json($th->getMessage(), $th, 500);
        }
    }

    public function delete(Information $information)
    {
        $data['information'] = $information;
        $data['route'] = route('information.destroy', $information->id);
        $html = view('common-render.confirm-delete', $data)->render();
        return Helper::res_json('sukses', ['html' => $html], 200);
    }

    public function destroy(Information $information)
    {
        try {
            DB::beginTransaction();

            $this->information_repo->destroy($information->id);

            DB::commit();
            return Helper::res_json('Informasi deleted successfully', null, 200);
        } catch (\Throwable $th) {
            DB::rollback();
            return Helper::res_json($th->getMessage(), $th, 500);
        }
    }
}
