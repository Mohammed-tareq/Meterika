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
                    <h1>Edit video</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('videos.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="container-fluid">
            <form action="{{ route('videos.update', $video->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card md-3">
                                    <div class="card-body">
                                        <h2 class="h4 mb-3">Media Video </h2>
                                        <div class="upload-container d-flex align-items-center"
                                            onclick="document.getElementById('file-input').click()">
                                            <p>Drop files here or click to upload.</p>
                                            <input type="file" accept="video/" value="{{ $video->video }}" name="video"
                                                multiple >
                                            <video id="previewImage" controls style="max-width: 70px; height: auto;">
                                                <source src="{{ $video->video }}" type="video/mp4">
                                                <source src="{{ $video->video }}" type="video/ogg">
                                                <source src="{{ $video->video }}" type="video/webm">

                                            </video>
                                        </div>

                                    </div>

                                </div>
                            </div>


                        </div>
                        <div class="pb-5 pt-3">
                            <button class="btn btn-primary" type="submit">Update</button>
                            <a type="reset" href="{{ route('videos.index') }}"
                                class="btn btn-outline-dark ml-3">Cancel</a>
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
    @push('js')
    <script>
        const fileInput = document.getElementById('file-input');
        const previewContainer = document.getElementById('preview-container');

        fileInput.addEventListener('change', (event) => {
            const file = event.target.files[0]; // Get only the first file

            if (file && file.type.startsWith('video/')) {
                const reader = new FileReader();

                reader.onload = (e) => {
                    // Clear previous image before adding a new one
                    previewContainer.innerHTML = '';

                    const previewItem = document.createElement('div');
                    previewItem.classList.add('preview-item');

                    const img = document.createElement('video');
                    img.src = e.target.result;
                    img.style.maxWidth = '100%';
                    img.style.height = 'auto';

                    // Delete button
                    const deleteBtn = document.createElement('button');
                    deleteBtn.classList.add('delete-btn');
                    deleteBtn.textContent = 'X';
                    deleteBtn.onclick = () => {
                        previewContainer.innerHTML = ''; // Remove the image
                        fileInput.value = ''; // Clear input field
                    };

                    previewItem.appendChild(img);
                    previewItem.appendChild(deleteBtn);
                    previewContainer.appendChild(previewItem);
                };

                reader.readAsDataURL(file);
            }
        });
    </script>
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
@endpush

