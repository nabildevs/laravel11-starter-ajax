<form method="POST" action="{{ route('information.update', $information->id) }}" class="ajax_form"
    data-after-submit="reload" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row mb-3">
        <label for="image" class="col-12 col-lg-4 col-form-label">Photo</label>
        <div class="col-12 col-lg-8">
            <img src="{{ $information->image ?? $default_image }}" class="img-thumbnail mb-3">
            <input type="file" class="form-control" name="image" id="image" accept="image/*">
        </div>
    </div>
    <div class="row mb-3">
        <label for="title" class="col-12 col-lg-4 col-form-label">Title</label>
        <div class="col-12 col-lg-8">
            <input type="text" class="form-control" name="title" id="title" placeholder="Information title"
                value="{{ $information->title }}">
        </div>
    </div>
    <div class="row mb-3">
        <label for="short_description" class="col-12 col-lg-4 col-form-label">Short Description</label>
        <div class="col-12 col-lg-8">
            <input type="text" class="form-control" name="short_description" id="title"
                placeholder="Information short description" value="{{ $information->short_description }}">
        </div>
    </div>
    <div class="row mb-3">
        <label for="description" class="col-12 col-lg-4 col-form-label">Description</label>
        <div class="col-12 col-lg-8">
            <textarea class="form-control" name="description" id="description" placeholder="Information description">{{ $information->description }}</textarea>
        </div>
    </div>
    <div class="row mb-3">
        <label for="availability" class="col-12 col-lg-4 col-form-label">Availability</label>
        <div class="col-12 col-lg-8">
            <select class="form-select" name="availability" id="availability">
                <option value="available" {{ $information->availability == 'available' ? 'selected' : '' }}>Available
                </option>
                <option value="inavailable" {{ $information->availability == 'inavailable' ? 'selected' : '' }}>Not
                    Available</option>
            </select>
        </div>
    </div>

    <div class="d-flex mt-5 justify-content-end">
        <button type="submit" class="btn btn-primary" style="min-width: 100px">Submit</button>
    </div>
</form>
