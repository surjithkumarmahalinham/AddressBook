<div class="modal fade" id="modal-delete-confirmation" tabindex="-1" role="dialog" aria-labelledby="delete-confirmation-title" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="default-message">
                    @isset($message)
                        {!! $message !!}
                    @else
                        Are you sure you want to delete record?
                    @endisset
                </div>
                <div class="custom-message"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <form method="get" class="pull-left" >
                <button type="submit" class="btn btn-danger ml-2"><i class="fa fa-trash"></i>Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

