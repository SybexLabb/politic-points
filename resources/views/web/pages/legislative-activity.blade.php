@extends('layouts.main')
@section('content')
    <!-- START: Main Content-->
    <main>
        <div class="container-fluid site-width" id="mypitch">
            <!-- START: Card Data-->

            <!-- Add Event Modal -->
            <div id="addevent" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg text-left">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="model-header">FORM</h4>
                        </div>
                        <div class="modal-body ">
                            <form id="generic-form" enctype="multipart/form-data" method="POST"
                                action="{{ route('crud_generator', 'recent_legislation') }}">
                                @csrf
                                <input type="hidden" name="record_id" id="record_id" value="">
                                <input type="hidden" name="senator_id" id="senator_id" value="{{ $id }}">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-12" id="rank-label">
                                        <div class="form-group start-date">
                                            <label for="start-date" class="title">Title</label>
                                            <div class="d-flex">
                                                <input type="text" id="title" name="title" class="form-control"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-12" id="rank-label">
                                        <div class="form-group start-date">
                                            <label for="start-date" class="description">Description</label>
                                            <div class="d-flex">
                                                <textarea id="description" required name="description" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button id="discard" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                            <button id="add-generic" type="submit" class="btn btn-primary eventbutton">Create</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Event Modal End-->
            {{-- <h3>Dishes</h3> --}}
            <div class="row">

                <div class="col-12 col-md-6 col-lg-3 mt-3 updateevent" style="cursor: pointer;">
                    <div class="card border-bottom-0">
                        <div class="card-content border-bottom border-primary border-w-5"
                            style="border-color: #0e1317 !important;">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="circle-50 outline-badge-primary"
                                        style="color: #0e1317;border: 1px solid #0e1317;">
                                        <span class="cf card-liner-icon cf-xsn mt-2"></span>
                                    </div>
                                    <div class="media-body align-self-center pl-3">
                                        <span class="mb-0 h6 font-w-600">Add Senator Legislation</span>
                                        <br />
                                        <p class="mb-0 font-w-500 h6"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 mt-3">
                    <div class="card">
                        <div class="card-header justify-content-between align-items-center">
                            <h4 class="card-title">Add Legislation</h4>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">

                                <table id="example" class="display table dataTable table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S. No</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Creation Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($recent_legislation1 as $value)
                                            <tr>
                                                <td>{{ $value->senator_id }}</td>
                                                <td>{{ $value->title }}</td>
                                                <td>{{ $value->description }}</td>
                                                <td>{{ $value->created_at }}</td>
                                                <td>
                                                    <button class="btn btn-primary edit-button"
                                                    data-record_id="{{ $value->id }}"
                                                    data-title="{{ $value->title }}"
                                                    data-description="{{ $value->description }}"
                                                    >Edit</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>S. No</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Creation Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- END: Content-->
@endsection
@section('css')
    <style type="text/css">
        .start-date .js-example-basic-multiple+span {
            width: 100% !important;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('vendors/datatable/css/dataTables.bootstrap4.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/datatable/buttons/css/buttons.bootstrap4.min.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('js')
    <script src="{{ asset('vendors/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatable/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    <script src="{{ asset('js/datatable.script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        $(document).on('click', '#add-generic', function(f) {
            var has_error = 0
            $("#generic-form").find("select,textarea,input").each(function(i, e) {
                console.log(i);
                console.log(e);
                if ($(e).prop("required") == true) {
                    if ($(e).val() == "") {
                        has_error++;
                        f.preventDefault();
                        return false
                    }
                }
            })
            if (has_error == 0) {
                console.log("no error")
                $("#generic-form").submit();
            } else {
                toastr.error("Fill all required fields");
            }
        })

        $(document).on('click', '.updateevent', function() {
            $('#add-generic').text('Create')
            $("#generic-form")[0].reset();
            $("#addevent").modal("show")
        })

        $(document).on('click','.edit-button', function(){
            $('#record_id').val($(this).data('record_id'));
            $('#title').val($(this).data('title'));
            $('#description').val($(this).data('description'));
            $('#add-generic').text('Update')
            $("#addevent").modal("show")
        });
    </script>
@endsection
