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
                    <h1>New gallery</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('galleries.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="container-fluid">
            <form action="{{ route('galleries.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row">

                            <div class="card mb-3">
                                <div class="card-body">
                                    <h2 class="h4 mb-3">Media Image Gallery Page</h2>
                                    <div class="upload-container" onclick="document.getElementById('file-input').click()">
                                        <p>Drop files here or click to upload.</p>
                                        <input type="file" id="file-input" name="img" multiple
                                            style="display: none;">
                                    </div>

                                    <div class="preview-container" id="preview-container">
                                        <!-- Preview images will appear here -->
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-5 pt-3">
                    <button class="btn btn-primary" type="submit">Create</button>
                    <a type="reset" href="{{ route('galleries.index') }}" class="btn btn-outline-dark ml-3">Cancel</a>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection
@push('js')
    <script>
        const fileInput = document.getElementById('file-input');
        const previewContainer = document.getElementById('preview-container');

        fileInput.addEventListener('change', (event) => {
            const files = event.target.files;
            for (const file of files) {
                if (file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = (e) => {
                        const previewItem = document.createElement('div');
                        previewItem.classList.add('preview-item');

                        const img = document.createElement('img');
                        img.src = e.target.result;
                        previewItem.appendChild(img);

                        const deleteBtn = document.createElement('button');
                        deleteBtn.classList.add('delete-btn');
                        deleteBtn.textContent = 'X';
                        deleteBtn.onclick = () => previewContainer.removeChild(previewItem);
                        previewItem.appendChild(deleteBtn);

                        previewContainer.appendChild(previewItem);
                    };
                    reader.readAsDataURL(file);
                }
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
