@extends('layouts.dashboard')
@push('css')
    <style>
        .upload-container {
            width: 300px;
            margin: 0 auto;
            text-align: center;
            border: 2px dashed #ddd;
            padding: 20px;
            cursor: pointer;
        }

        .preview-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin: 20px;
        }

        .preview-video {
        width: 250px;
        height: 150px;
        hyphenate-character: ;
        border-radius: 5px;
        border: 1px solid #ddd;
        display: block;
        margin-top: 10px;
    }

        .preview-item {
            position: relative;
            width: 100px;
            height: 100px;
            overflow: hidden;
            border: 1px solid #ccc;
        }

        .preview-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .delete-btn {
            position: absolute;
            top: 5px;
            right: 5px;
            background-color: red;
            color: white;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            width: 20px;
            height: 20px;
        }
    </style>
@endpush
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
                    <h1>New Video</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('AboutUs.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="container-fluid">
            <form action="{{ route('AboutUs.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h2 class="h4 mb-3">Media Video </h2>
                                        <div class="upload-container" onclick="document.getElementById('video-input').click()">
                                            <p>Drop files here or click to upload.</p>
                                            <input type="file" id="video-input" name="video" accept="video/mp4,video/webm,video/ogg"
                                                style="display: none;">
                                        </div>
                                        <div class="preview-container" id="preview-container"></div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
                <div class="pb-5 pt-3">
                    <button class="btn btn-primary" type="submit">Create</button>
                    <a type="reset" href="{{ route('AboutUs.index') }}" class="btn btn-outline-dark ml-3">Cancel</a>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection


@push('js')

<script>
    document.getElementById('video-input').addEventListener('change', function(event) {
        const file = event.target.files[0];
        const previewContainer = document.getElementById('preview-container');
        previewContainer.innerHTML = ''; // Clear previous preview

        if (file && file.type.startsWith('video/')) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const video = document.createElement('video');
                video.src = e.target.result;
                video.controls = true;
                video.classList.add('preview-video');

                const deleteBtn = document.createElement('button');
                deleteBtn.textContent = 'Remove';
                deleteBtn.classList.add('delete-btn');
                deleteBtn.onclick = function() {
                    previewContainer.innerHTML = ''; // Remove preview
                    document.getElementById('video-input').value = ''; // Reset input
                };

                previewContainer.appendChild(video);
                previewContainer.appendChild(deleteBtn);
            };
            reader.readAsDataURL(file);
        } else {
            alert('Please upload a valid video file (MP4, WebM, Ogg).');
            this.value = ''; // Reset input if invalid
        }
    });
</script>
@endpush








