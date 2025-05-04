@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="d-lg-flex justify-content-between align-items-center mb-3">
                <h4 class="mb-0">{{ $title ?? 'Title' }}</h4>
                <form action="" method="get" class="d-flex gap-2 align-items-center">
                    @foreach (request()->except(['search', 'availability']) as $key => $value)
                        <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                    @endforeach
                    <input type="search" class="form-control" name="search" id="search" placeholder="Search"
                        value="{{ request('search') }}" />
                    <select class="form-select" name="order" id="order" onchange="$(this).closest('form').submit()">
                        <option value="">Sort</option>
                        <option value="latest" {{ request('order') == 'latest' ? 'selected' : '' }}>Latest</option>
                        <option value="oldest" {{ request('order') == 'oldest' ? 'selected' : '' }}>Oldest</option>
                    </select>
                    <select class="form-select" name="availability" id="availability"
                        onchange="$(this).closest('form').submit()">
                        <option value="">Availability</option>
                        <option value="available" {{ request('availability') == 'available' ? 'selected' : '' }}>Available
                        </option>
                        <option value="inavailable" {{ request('availability') == 'inavailable' ? 'selected' : '' }}>Not
                            Available</option>
                    </select>
                    <button type="button"
                        class="btn btn-primary ajax_modal_btn d-flex align-items-center justify-content-center"
                        style="height: 35px; width: 35px;" title="Add" data-modal-title="Add Information"
                        data-render-route="{{ route('information.create') }}">
                        <i class="ti ti-plus"></i>
                    </button>
                </form>
            </div>
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 50px">No</th>
                                    <th class="text-center" style="width: 150px">Photo</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th class="text-center">Availability</th>
                                    <th class="text-center" style="width: 100px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($informations as $item)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration + $informations->firstItem() - 1 }}</td>
                                        <td class="text-center">
                                            <img src="{{ $item->image ?? $default_image }}" class="img-index">
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)" class="text-primary ajax_modal_btn" title="Detail"
                                                data-modal-title="Detail Information"
                                                data-render-route="{{ route('information.show', $item->id) }}">{{ Str::limit($item->title) }}</a>
                                        </td>
                                        <td>{{ Str::limit($item->description ?? env('EMPTY_STRING'), 30) }}</td>
                                        <td class="text-center">
                                            <span
                                                class="badge bg-{{ $item->availability === 'available' ? 'primary' : 'danger' }}">
                                                {{ ucwords($item->availability) }}
                                            </span>
                                        </td>
                                        <td class="text-center">
                                            <div class="d-flex gap-2">
                                                <button type="button" class="btn btn-light-primary btn-sm ajax_modal_btn"
                                                    title="Edit" data-modal-title="Edit Information"
                                                    data-render-route="{{ route('information.edit', $item->id) }}">
                                                    <i class="ti ti-edit"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-light-danger ajax_modal_btn"
                                                    title="Delete" data-modal-title="Delete Information"
                                                    data-render-route="{{ route('information.delete', $item->id) }}">
                                                    <i class="ti ti-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                @if ($informations->count() <= 0)
                                    <tr>
                                        <td class="text-center" colspan="6">There is no data.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-end">
                        {{ $informations->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
