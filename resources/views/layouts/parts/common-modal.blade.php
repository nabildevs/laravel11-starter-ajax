<div id="{{ $id }}" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false"
    aria-labelledby="modalTitleId" aria-hidden="true">

    <div class="modal-dialog {{ isset($size) ? 'modal-' . $size : '' }}" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="modal_title" class="modal-title"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="content"></div>
        </div>
    </div>
</div>
