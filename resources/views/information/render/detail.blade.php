<div class="table-responsive">
    <table class="table table-hover">
        <tr>
            <td width="200px;" class="text-nowwrap fw-semibold">Image</td>
            <td class="text-nowwrap"><img src="{{ $information->image ?? $default_image }}" class="img-thumbnail"></td>
        </tr>
        <tr>
            <td class="text-nowwrap fw-semibold">Judul</td>
            <td class="text-nowwrap">{{ $information->title }}</td>
        </tr>
        <tr>
            <td class="text-nowwrap fw-semibold">Deskripsi Singkat</td>
            <td class="text-nowwrap">{{ $information->short_description ?? env('EMPTY_STRING') }}</td>
        </tr>
        <tr>
            <td class="text-nowwrap fw-semibold">Deskripsi</td>
            <td class="text-wrap">{!! $information->description ?? env('EMPTY_STRING') !!}</td>
        </tr>
    </table>

    <div class="d-flex justify-content-end text-end mt-5">
        <div>
            <span>Created By :</span> <span>{{ $information->creator->name }}</span><br>
            <small>{{ $information->created_at }}</small>
        </div>
    </div>
</div>
