@extends('layouts.dashboard')

@section('title')
    <h1>Service Control</h1>
    <p>You can control the website from here </p>
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit video</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('videoService.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="container-fluid">
            <form action="{{ route('videoService.update', $video->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="card  mb-3">
                                <div class="card-body">
                                    <h2 class="h4 mb-3">Media Video </h2>
                                    <div class="upload-container" onclick="document.getElementById('file-input').click()">
                                        <p>Drop files here or click to upload.</p>
                                        <input type="file" id="file-input" value="{{ $video->video }}" name="video" multiple style="display: none;">
                                        <video id="previewImage" controls style="max-width: 70px; height: auto; margin:20px">
                                            <source src="{{ $video->video  }}" type="video/mp4">
                                            <source src="{{ $video->video  }}" type="video/ogg">
                                            <source src="{{ $video->video  }}" type="video/webm">

                                        </video>
                                    </div>

                                </div>

                            </div>


                </div>
                <div class="pb-5 pt-3">
                    <button class="btn btn-primary" type="submit">Update</button>
                    <a type="reset" href="{{ route('videoService.index') }}" class="btn btn-outline-dark ml-3">Cancel</a>
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
