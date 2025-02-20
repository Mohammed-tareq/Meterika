@extends('layouts.dashboard')

@section('title')
    <h1>Home Control</h1>
    <p>You can control the website from here </p>
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Commitment Section</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('commitment.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="container-fluid">
            <form action="{{ route('commitment.update', $commitment->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box">
                                    <div class="box-header">
                                        <h3 class="box-title">Edit Txt In Commitment Section</small></h3>
                                        <!-- tools box -->
                                        <div class="pull-right box-tools">
                                            <button class="btn btn-default btn-sm" data-widget="collapse"
                                                data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                            <button class="btn btn-default btn-sm" data-widget="remove"
                                                data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                                        </div><!-- /. tools -->
                                    </div><!-- /.box-header -->
                                    <div class="box-body pad">
                                        <textarea  name="title" placeholder="Place some text here"
                                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $commitment->title }}</textarea>
                                    </div>
                                </div>
                            </div><!-- /.col-->
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h2 class="h4 mb-3">Media Image Commitment Section </h2>
                                    <div class="d-flex align-items-center">
                                        <input type="file" id="imageInput" accept="image/*" name="img" onchange="showImage(event)">
                                        <img id="previewImage" src="{{ $commitment->img  }}" style="max-width: 70px; height: auto; margin:20px"/>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="pb-5 pt-3">
                    <button class="btn btn-primary" type="submit">Update</button>
                    <a type="reset" href="{{ route('commitment.index') }}" class="btn btn-outline-dark ml-3">Cancel</a>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection

@push('js')

    <script>
        function showImage(event) {
        const input = event.target;
        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
            const previewImage = document.getElementById('previewImage');
            previewImage.src = e.target.result;
            previewImage.style.display = 'block'; // Make the image visible
            };

            reader.readAsDataURL(input.files[0]); // Read the file as a data URL
        }
        }
    </script>

@endpush
