<form method="POST" action="{{ route('information.store') }}" class="ajax_form" data-after-submit="reload"
    enctype="multipart/form-data">
    @csrf

    <div class="row mb-3">
        <label for="image" class="col-12 col-lg-4 col-form-label">Photo</label>
        <div class="col-12 col-lg-8">
            <input type="file" class="form-control" name="image" id="image" accept="image/*">
        </div>
    </div>
    <div class="row mb-3">
        <label for="title" class="col-12 col-lg-4 col-form-label">Title</label>
        <div class="col-12 col-lg-8">
            <input type="text" class="form-control" name="title" id="title" placeholder="Information title">
        </div>
    </div>
    <div class="row mb-3">
        <label for="short_description" class="col-12 col-lg-4 col-form-label">Short Description</label>
        <div class="col-12 col-lg-8">
            <input type="text" class="form-control" name="short_description" id="title"
                placeholder="Information short description">
        </div>
    </div>
    <div class="row mb-3">
        <label for="description" class="col-12 col-lg-4 col-form-label">Description</label>
        <div class="col-12 col-lg-8">
            <textarea class="form-control" name="description" id="description" placeholder="Information description"></textarea>
        </div>
    </div>
    <div class="row mb-3">
        <label for="availability" class="col-12 col-lg-4 col-form-label">Availability</label>
        <div class="col-12 col-lg-8">
            <select class="form-select" name="availability" id="availability">
                <option value="available">Tersedia</option>
                <option value="inavailable">Tidak Tersedia</option>
            </select>
        </div>
    </div>

    <div class="d-flex mt-5 justify-content-end">
        <button type="submit" class="btn btn-primary" style="min-width: 100px">Submit</button>
    </div>
</form>
