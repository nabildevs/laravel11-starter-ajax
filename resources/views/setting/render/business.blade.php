<form method="POST" action="{{ route('setting.update', $setting->id) }}" class="ajax_form" data-after-submit="reload"
    enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row mb-3">
        <label for="business_name" class="col-12 col-lg-4 col-form-label">Business Name</label>
        <div class="col-12 col-lg-8">
            <input type="text" class="form-control" name="business_name" id="business_name"
                placeholder="Business Name" value="{{ $setting->business_name }}">
        </div>
    </div>
    <div class="row mb-3">
        <label for="business_email" class="col-12 col-lg-4 col-form-label">Business Email</label>
        <div class="col-12 col-lg-8">
            <input type="text" class="form-control" name="business_email" id="business_email"
                placeholder="Business Email" value="{{ $setting->business_email }}">
        </div>
    </div>
    <div class="row mb-3">
        <label for="business_phone" class="col-12 col-lg-4 col-form-label">Phone Number</label>
        <div class="col-12 col-lg-8">
            <input type="text" class="form-control" name="business_phone" id="business_phone"
                placeholder="Business Phone Number" value="{{ $setting->business_phone }}">
        </div>
    </div>
    <div class="row mb-3">
        <label for="business_address" class="col-12 col-lg-4 col-form-label">Address</label>
        <div class="col-12 col-lg-8">
            <textarea class="form-control" name="business_address" id="business_address" placeholder="Business Address">{{ $setting->business_address }}</textarea>
        </div>
    </div>
    <div class="row mb-3">
        <label for="business_logo" class="col-12 col-lg-4 col-form-label">Business Logo</label>
        <div class="col-12 col-lg-8">
            <img src="{{ $setting->business_logo }}" class="img-thumbnail mb-3" style="max-height: 100px">
            <input type="file" class="form-control" name="business_logo" id="business_logo" accept="image/*">
        </div>
    </div>
    <div class="row mb-3">
        <label for="business_icon" class="col-12 col-lg-4 col-form-label">Business Icon</label>
        <div class="col-12 col-lg-8">
            <img src="{{ $setting->business_icon }}" class="img-thumbnail mb-3" style="max-height: 100px">
            <input type="file" class="form-control" name="business_icon" id="business_icon" accept="image/*">
        </div>
    </div>

    <div class="d-flex mt-5 justify-content-end">
        <button type="submit" class="btn btn-primary" style="min-width: 100px">Submit</button>
    </div>
</form>
