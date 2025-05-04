<div class="modal-body" id="content">
    <h4 class="mb-3 text-center">Are you sure you want to delete this data?</h4>

    <div class="d-flex justify-content-center gap-2">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <form class="ajax_form" action="{{ $route }}" method="POST" data-after-submit="reload"
            style="display:inline;">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</div>
