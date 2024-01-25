<div id="addrole-modal" class="modal fade" role="dialog">
    <div class="modal-dialog text-left">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title show-role-name" id="model-header"></h4>
            </div>
            <div class="modal-body">
                <form method='POST' action="{{ route('roleassign_submit') }}" id='assign-role-form'>
                    @csrf
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Role</th>
                                <th scope="col">Create</th>
                                <th scope="col">View</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody id="body_modal">
                        </tbody>

                    </table>
                </form>
            </div>
            <div class="modal-footer">
                <button id="discard" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                <button id="former-submit" type="button" class="btn btn-primary eventbutton">Save and Update</button>
            </div>
        </div>
    </div>
</div>
