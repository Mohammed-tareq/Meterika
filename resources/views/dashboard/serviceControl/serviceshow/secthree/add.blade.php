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
    <h1>Service Control</h1>
    <p>You can control the website from here </p>
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>New Service</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('ShowService-SecThree.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="container-fluid">
            <form action="{{ route('ShowService-SecThree.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="mb-3 form-group">
                                    <label for="title">Service Name</label>
                                    <input type="text" name="title_1" id="nameInput" class="form-control"
                                        placeholder="Service Name" maxlength="30">
                                        <small>*Your max size is 30 characters*</small>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 form-group">
                                    <label for="title">service</label>
                                    <input type="text" name="txt_1" id="nameInput" class="form-control"
                                        placeholder="Service Name" maxlength="30">
                                    <small>*Your max size is 30 characters*</small>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 form-group">
                                    <label for="title">service</label>
                                    <input type="text" name="txt_2" id="nameInput" class="form-control"
                                        placeholder="Service Name" maxlength="30">
                                    <small>*Your max size is 30 characters*</small>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 form-group">
                                    <label for="title">service</label>
                                    <input type="text" name="txt_3" id="nameInput" class="form-control"
                                        placeholder="Service Name" maxlength="30">
                                    <small>*Your max size is 30 characters*</small>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 form-group">
                                    <label for="title">service</label>
                                    <input type="text" name="txt_4" id="nameInput" class="form-control"
                                        placeholder="Service Name" maxlength="30">
                                    <small>*Your max size is 30 characters*</small>

                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h2 class="h4 mb-3">Media Image For Project</h2>
                                        <p><small>*You can add only one image</small></p>

                                        <!-- Upload Container -->
                                        <div class="upload-container">
                                            <p>Drop files here or click to upload.</p>
                                            <input type="file" class="file-input" name="img_1" accept="image/*" style="display: none;">
                                        </div>

                                        <!-- Image Preview -->
                                        <div class="preview-container">
                                            <img class="previewImage" style="display: none; max-width: 100%; height: 250px; margin-top: 10px;" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="mb-3 form-group">
                                    <label for="title">Service Name</label>
                                    <input type="text" name="title_2" id="nameInput" class="form-control"
                                        placeholder="Project Name" maxlength="30">
                                        <small>*Your max size is 30 characters*</small>

                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="mb-3 form-group">
                                    <label for="title">service</label>
                                    <input type="text" name="txt2_1" id="nameInput" class="form-control"
                                        placeholder="Service Name" maxlength="30">
                                    <small>*Your max size is 30 characters*</small>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 form-group">
                                    <label for="title">service</label>
                                    <input type="text" name="txt2_2" id="nameInput" class="form-control"
                                        placeholder="Service Name" maxlength="30">
                                    <small>*Your max size is 30 characters*</small>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 form-group">
                                    <label for="title">service</label>
                                    <input type="text" name="txt2_3" id="nameInput" class="form-control"
                                        placeholder="Service Name" maxlength="30">
                                    <small>*Your max size is 30 characters*</small>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 form-group">
                                    <label for="title">service</label>
                                    <input type="text" name="txt2_4" id="nameInput" class="form-control"
                                        placeholder="Service Name" maxlength="30">
                                    <small>*Your max size is 30 characters*</small>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 form-group">
                                    <label for="title">service</label>
                                    <input type="text" name="txt2_5" id="nameInput" class="form-control"
                                        placeholder="Service Name" maxlength="30">
                                    <small>*Your max size is 30 characters*</small>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 form-group">
                                    <label for="title">service</label>
                                    <input type="text" name="txt2_6" id="nameInput" class="form-control"
                                        placeholder="Service Name" maxlength="30">
                                    <small>*Your max size is 30 characters*</small>

                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h2 class="h4 mb-3">Another Image Section</h2>
                                        <p><small>*You can add only one image</small></p>

                                        <!-- Upload Container -->
                                        <div class="upload-container">
                                            <p>Drop files here or click to upload.</p>
                                            <input type="file" class="file-input" name="img_2" accept="image/*" style="display: none;">
                                        </div>

                                        <!-- Image Preview -->
                                        <div class="preview-container">
                                            <img class="previewImage" style="display: none; max-width: 100%; height: 250px; margin-top: 10px;" />
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="pb-5 pt-3">
                    <button class="btn btn-primary" type="submit">Create</button>
                    <a type="reset" href="{{ route('ShowService-SecThree.index') }}"
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
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll('.upload-container').forEach(uploadContainer => {
            const fileInput = uploadContainer.querySelector('.file-input');
            const previewImage = uploadContainer.parentElement.querySelector('.previewImage');

            // Open file selection when clicking on the upload container
            uploadContainer.addEventListener("click", function () {
                fileInput.click();
            });

            // Handle file selection and preview
            fileInput.addEventListener("change", function (event) {
                const file = event.target.files[0];

                if (file && file.type.startsWith('image/')) {
                    const reader = new FileReader();

                    reader.onload = function (e) {
                        previewImage.src = e.target.result;
                        previewImage.style.display = 'block';
                    };

                    reader.readAsDataURL(file);
                }
            });
        });
    });
    </script>
    {{-- <script>
        document.addEventListener("DOMContentLoaded", function () {
            const textarea = document.getElementById("commitmentText");
            const charCount = document.getElementById("charCount");

            textarea.addEventListener("input", function () {
                let textLength = textarea.value.length;
                if (textLength > 200) {
                    textarea.value = textarea.value.substring(0, 200); // Trim excess characters
                }
                charCount.textContent = `${textarea.value.length} / 200 characters`;
            });
        });
    </script> --}}
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll('.commitmentText').forEach(textarea => {
                const charCount = textarea.nextElementSibling; // Get the corresponding <p> for character count

                textarea.addEventListener("input", function () {
                    let textLength = textarea.value.length;
                    charCount.textContent = `${textLength} / 200 characters`;
                });
            });
        });
        </script>

@endpush
