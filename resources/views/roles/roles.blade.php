@extends('layouts.main')
@section('content')
    <!-- START: Main Content-->
    <main>
        <div class="container-fluid site-width">
            <!-- START: Card Data-->

            <div class="row">
                <div class="d-inline-flex p-2">
                    <a href="#" class="btn btn-outline-success font-w-600 my-auto text-nowrap ml-auto add-event"
                        data-toggle="modal" data-target="#addevent"><i class="icon-calendar"></i> Add Record</a>
                </div>
            </div>

            <!-- Modal -->

            <div id="addevent" class="modal fade" role="dialog">
                <div class="modal-dialog text-left">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="model-header">Listed</h4>
                        </div>
                        <div class="modal-body">
                            <form id="generic-form" method="POST" action="{{ route('generic_submit') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 col-sm-6 col-12">
                                        <div class="form-group start-date">
                                            <label for="start-date">Type:</label>
                                            <div class="d-flex">
                                                <select class="form-control" name="type" id="type" required>
                                                    <option value="" selected disabled>Please select your Type</option>
                                                    <option value="user">User</option>
                                                    <option value="crud">Crud</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="assignrole"></div>
                                    <div class="col-md-12 col-sm-12 col-12" id="attribute-label">
                                        <div class="form-group start-date">
                                            <label for="start-date">Attribute:</label>
                                            <div class="d-flex">
                                                <input id="attributename" placeholder="Attribute" name="attribute"
                                                    class="form-control" type="text" list="attribute-list"
                                                    autocomplete="off" required />
                                                @if ($attributes)
                                                    <datalist id="attribute-list">
                                                        @foreach ($attributes as $att)
                                                            <option>{{ $att->attribute }}</option>
                                                        @endforeach
                                                    </datalist>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-12" id="name-label">
                                        <div class="form-group start-date">
                                            <label for="start-date">Name:</label>
                                            <div class="d-flex">
                                                <input id="rankname" placeholder="Rank Name" name="name"
                                                    class="form-control" type="text" list="name-list" autocomplete="off"
                                                    required />
                                                @if ($attributes)
                                                    <datalist id="name-list">
                                                        @foreach ($attributes as $att)
                                                            <option>{{ $att->name }}</option>
                                                        @endforeach
                                                    </datalist>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-12" id="role-label">
                                        <div class="form-group end-date">
                                            <label for="end-date">Role:</label>
                                            <div class="d-flex">
                                                <input id="rolename" placeholder="Role Name" type="text" name="role"
                                                    class="form-control" list="role-list" autocomplete="off" required />
                                                @if ($attributes)
                                                    <datalist id="role-list">
                                                        @foreach ($attributes as $att)
                                                            <option>{{ $att->role }}</option>
                                                        @endforeach
                                                    </datalist>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-12" id="model-label">
                                        <div class="form-group end-date">
                                            <label for="end-date">Model:</label>
                                            <div class="d-flex">
                                                <input id="modelname" placeholder="Model Name" type="text" name="model"
                                                    class="form-control" list="model-list" autocomplete="off" required />
                                                @if ($attributes)
                                                    <datalist id="model-list">
                                                        @foreach ($attributes as $att)
                                                            <option>{{ $att->model }}</option>
                                                        @endforeach
                                                    </datalist>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-12" id="icon-label">
                                        <div class="form-group end-date">
                                            <label for="end-date">Icon:</label>
                                            <div class="d-flex">
                                                <input id="iconname" placeholder="Icon Name" type="text" name="icon"
                                                    class="form-control" list="icon-list" autocomplete="off" required />
                                                @if ($attributes)
                                                    <datalist id="icon-list">
                                                        @foreach ($attributes as $att)
                                                            <option>{{ $att->icon }}</option>
                                                        @endforeach
                                                    </datalist>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="inputColor">Color:</label>
                                            <input type="color" name="color" class="border-0 m-2" id="inputColor"
                                                value="#005e79" />
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






            @if ($attributes)
                <h3>Roles</h3>
                <div class="row">
                    @foreach ($attributes as $att)
                        @if ($att->attribute == 'roles')
                            <div class="col-12 col-md-6 col-lg-3 mt-3 role-assign-modal"
                                data-role_id="{{ $att->id }}" data-rolename='{{ $att->role }}'
                                style="cursor: pointer;">
                                <div class="card border-bottom-0">
                                    <div class="card-content border-bottom border-primary border-w-5"
                                        style="border-color: {{ $att->color }} !important;">
                                        <div class="card-body p-4">
                                            <div class="d-flex">
                                                <div class="circle-50 outline-badge-primary"
                                                    style="color: {{ $att->color }};border: 1px solid {{ $att->color }};">
                                                    <span class="cf card-liner-icon cf-xsn mt-2"></span></div>
                                                <div class="media-body align-self-center pl-3">
                                                    <span class="mb-0 h6 font-w-600">{{ $att->name }}</span><br />
                                                    <p class="mb-0 font-w-500 h6">{{ $att->role }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endif

            <!-- END: Card DATA-->
        </div>
    </main>
    <!-- END: Content-->

@endsection
@section('css')
@endsection
@section('js')
    <script type="text/javascript">
        var global_type = "crud";
        $("#add-generic").click(function(f){
            var has_error = 0
            $("#generic-form").find("select,textarea,input").each(function(i,e){
                
                console.log($(e))
                console.log($(e).val())
                if($(e).prop("required") == true){
                    if($(e).val() == "" || $(e).val() == null){
                        if (!(global_type == "user" && ($(e).attr('id') == "modelname" || $(e).attr('id') == "iconname"))) {
                            console.log($(e))
                            has_error++;
                            f.preventDefault();
                            return false
                        }
                    }
                }
            })
            if(has_error == 0){
                $("#generic-form").submit();
            } else{
                toastr.error("Fill all required fields");
            }
        })
        $(document).on('change', '#type', function() {
            var otype = $(this).val();
            console.log(otype)
            global_type = otype;
            if (otype == "user") {
                $("#attributename").val("roles")
                $("#attributename").attr('readonly', 'true')
                $("#model-label").hide();
                $("#icon-label").hide();
            } else {
                $("#attributename").val("")
                $("#attributename").removeAttr('readonly')
                $("#model-label").show();
                $("#icon-label").show();
            }
        })

        // $("#attribute").click(function(){
        //     var otype = $(this).children("option:selected").val();
        //     if (otype == "roles") {
        //         $("#role-label").show();
        //         $("#rank-label").show();
        //     }else if(otype == "departments"){
        //         $("#role-label").hide();
        //         $("#rank-label").show();
        //     }else if(otype == "designations"){
        //         $("#role-label").hide();
        //         $("#rank-label").show();
        //     }else if(otype == "project"){
        //         $("#role-label").hide();
        //         $("#rank-label").show();
        //     }else if(otype == "registration-type"){
        //         $("#role-label").hide();
        //         $("#rank-label").show();
        //         $("#rolename").val("None")
        //     }
        // })
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach
        @endif
    </script>
    <script type="text/javascript">
        $("#former-submit").click(function() {
            $("#assign-role-form").submit();
        })

        $(".role-assign-modal").click(function() {
            $(".show-role-name").text("Role assign for " + $(this).data("rolename"));
            var role_id = $(this).data('role_id');
            $.ajax({
                type: 'post',
                dataType: 'json',
                url: "{{ route('role_assign_modal') }}",
                data: {
                    role_id,
                    role_id,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    if (response.body == "") {
                        toastr.error("No rights found");
                    } else {
                        $('#body_modal').html(response.body);
                        $("#addrole-modal").modal("show");
                    }

                }
            });


        });
    </script>
@endsection
