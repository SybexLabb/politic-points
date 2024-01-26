@extends('layouts.main')
@section('content')
    <main>
        <div class="container-fluid site-width">
            <!-- START: Breadcrumbs-->
            <div class="row">
                <div class="col-12 align-self-center">
                    <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                        <div class="w-sm-100 mr-auto">
                            <h4 class="mb-0">Logo</h4>
                        </div>
                        <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active"><a href="#">Logo</a></li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- END: Breadcrumbs-->
            <!-- START: Card Data-->
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="card">
                        <div class="card-header justify-content-between align-items-center flx-sec logo-align">
                            <h4 class="card-title">Logo</h4>
                            @if ($logo)
                                @php $path = $logo->image; @endphp
                            @else
                                @php $path = "web/images/logo.png"; @endphp
                            @endif
                            <a href="#"><img src="{{ asset($path) }}" width="100" alt="{{ $user->name }}"
                                    class="img-fluid blah"></a>
                            <form method="POST" action="{{ route('change_logo') }}" enctype="multipart/form-data" class="form-image-upload">
                                @csrf
                                <input type="hidden" name="slug" value="logo">
                                <input type="file" class="upload-img" name="pic_attach" style="" />
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <div class="card">
                        <div class="card-header justify-content-between align-items-center flx-sec logo-align">
                            <h4 class="card-title">Favicon</h4>
                            @if ($favicon)
                                @php $path = $favicon->image; @endphp
                            @else
                                @php $path = "web/images/logo.png"; @endphp
                            @endif
                            <a href="#"><img src="{{ asset($path) }}" width="100" alt="{{ $user->name }}"
                                    class="img-fluid blah"></a>
                            <form method="POST" action="{{ route('change_logo') }}" enctype="multipart/form-data" class="form-image-upload">
                                @csrf
                                <input type="hidden" name="slug" value="favicon">
                                <input type="file" class="upload-img" name="pic_attach" style="" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Card DATA-->
        </div>
    </main>
@endsection
@section('css')
    <style type="text/css">
        .logo-align {
            display: flex;
        }
    </style>
@endsection
@section('js')
    <script>
        $(document).on('click','.blah',function(){
            $(this).closest('.card-header').find('.upload-img').trigger('click');
        })
        $(document).on('change','.upload-img',function(){
            console.log("here")
            var element = $(this);
            var val = $(this).val();
            console.log(val);
            if (val.match(/(?:gif|jpg|png|bmp|jfif)$/)) {
                if (confirm('Do you really want to change image?')) {
                    element.closest('.form-image-upload').submit();
                } else {
                    alert('No image has been updated');
                }
            }

        })
        // $('document').ready(function() {
        //     $('#blah').click(function() {
        //         $('#upload-img').trigger('click');
        //     });
        // });
        // $("#upload-img").change(function(e) {
        //     var val = $(this).val();
        //     console.log(val);
        //     if (val.match(/(?:gif|jpg|png|bmp|jfif)$/)) {
        //         if (confirm('Do you really want to change logo?')) {
        //             $("#form-image-upload").submit();
        //         } else {
        //             alert('No image has been updated');
        //         }
        //     }
        // });
    </script>
@endsection
