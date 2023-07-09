const modalTemplate = `<div class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>`;
function openModal(
    title,
    body,
    footer,
    size
) {
    let modalContent = $(modalTemplate);
    modalContent.find(".modal-title").text(title);
    modalContent.find(".modal-body").append(body);
    modalContent.find(".modal-footer").append(footer);
    modalContent.find(".modal-dialog").addClass(size);
    let modal = new bootstrap.Modal(modalContent);
    modal.show();
    return [modal, modalContent];
}