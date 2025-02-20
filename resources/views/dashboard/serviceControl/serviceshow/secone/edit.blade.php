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
                    <h1>Edit Service </h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('ShowService-SecOne.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="container-fluid">
            <form action="{{ route('ShowService-SecOne.update', $secOne->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="mb-3 form-group">
                                    <label for="title">Service Name</label>
                                    <input type="text" name="title_1" id="nameInput" class="form-control"
                                        placeholder="Service Name" maxlength="30" value="{{ $secOne->title_1 }}">
                                        <small>*Your max size is 30 characters*</small>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 form-group">
                                    <label for="title">service</label>
                                    <input type="text" name="txt_1" id="nameInput" class="form-control"
                                        placeholder="Service Name" maxlength="30" value="{{ $secOne->txt_1 }}">
                                        <small>*Your max size is 30 characters*</small>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 form-group">
                                    <label for="title">service</label>
                                    <input type="text" name="txt_2" id="nameInput" class="form-control"
                                        placeholder="Service Name" maxlength="30" value="{{ $secOne->txt_2 }}" >
                                        <small>*Your max size is 30 characters*</small>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 form-group">
                                    <label for="title">service</label>
                                    <input type="text" name="txt_3" id="nameInput" class="form-control"
                                        placeholder="Service Name" maxlength="30" value="{{ $secOne->txt_3 }}">
                                        <small>*Your max size is 30 characters*</small>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 form-group">
                                    <label for="title">service</label>
                                    <input type="text" name="txt_4" id="nameInput" class="form-control"
                                        placeholder="Service Name" maxlength="30" value="{{ $secOne->txt_4 }}">
                                        <small>*Your max size is 30 characters*</small>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 form-group">
                                    <label for="title">service</label>
                                    <input type="text" name="txt_5" id="nameInput" class="form-control"
                                        placeholder="Service Name" maxlength="30" value="{{ $secOne->txt_5 }}">
                                        <small>*Your max size is 30 characters*</small>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 form-group">
                                    <label for="title">service</label>
                                    <input type="text" name="txt_6" id="nameInput" class="form-control"
                                        placeholder="Service Name" value="{{ $secOne->txt_6 }}">
                                        <small>*Your max size is 30 characters*</small>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 form-group">
                                    <label for="title">service</label>
                                    <input type="text" name="txt_7" id="nameInput" class="form-control"
                                        placeholder="Service Name" maxlength="30" value="{{ $secOne->txt_7 }}">
                                        <small>*Your max size is 30 characters*</small>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 form-group">
                                    <label for="title">service</label>
                                    <input type="text" name="txt_8" id="nameInput" class="form-control"
                                        placeholder="Service Name" maxlength="30" value="{{ $secOne->txt_8 }}">
                                        <small>*Your max size is 30 characters*</small>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 form-group">
                                    <label for="title">service</label>
                                    <input type="text" name="txt_9" id="nameInput" class="form-control"
                                        placeholder="Service Name" maxlength="30" value="{{ $secOne->txt_9 }}">
                                        <small>*Your max size is 30 characters*</small>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 form-group">
                                    <label for="title">service</label>
                                    <input type="text" name="txt_10" id="nameInput" class="form-control"
                                        placeholder="Service Name" maxlength="30" value="{{ $secOne->txt_10 }}">
                                        <small>*Your max size is 30 characters*</small>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 form-group">
                                    <label for="title">service</label>
                                    <input type="text" name="txt_11" id="nameInput" class="form-control"
                                        placeholder="Service Name" maxlength="30" value="{{ $secOne->txt_11 }}">
                                        <small>*Your max size is 30 characters*</small>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 form-group">
                                    <label for="title">service</label>
                                    <input type="text" name="txt_12" id="nameInput" class="form-control"
                                        placeholder="Service Name" maxlength="30" value="{{ $secOne->txt_12 }}">
                                        <small>*Your max size is 30 characters*</small>

                                </div>
                            </div>

                            <div class="col-md-10">
                                <div class="mb-3 form-group">
                                    <label for="title">Service Name</label>
                                    <input type="text" name="title_2" id="nameInput" class="form-control"
                                        placeholder="Project Name" maxlength="30" value="{{ $secOne->title_2 }}">
                                        <small>*Your max size is 30 characters*</small>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 form-group">
                                    <label for="title">service</label>
                                    <input type="text" name="txt2_1" id="nameInput" class="form-control"
                                        placeholder="Service Name" maxlength="30" value="{{ $secOne->txt2_1 }}">
                                        <small>*Your max size is 30 characters*</small>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 form-group">
                                    <label for="title">service</label>
                                    <input type="text" name="txt2_2" id="nameInput" class="form-control"
                                        placeholder="Service Name" maxlength="30" value="{{ $secOne->txt2_2 }}">
                                        <small>*Your max size is 30 characters*</small>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 form-group">
                                    <label for="title">service</label>
                                    <input type="text" name="txt2_3" id="nameInput" class="form-control"
                                        placeholder="Service Name" maxlength="30" value="{{ $secOne->txt2_3 }}">
                                        <small>*Your max size is 30 characters*</small>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 form-group">
                                    <label for="title">service</label>
                                    <input type="text" name="txt2_4" id="nameInput" class="form-control"
                                        placeholder="Service Name" maxlength="30" value="{{ $secOne->txt2_4 }}">
                                        <small>*Your max size is 30 characters*</small>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 form-group">
                                    <label for="title">service</label>
                                    <input type="text" name="txt2_5" id="nameInput" class="form-control"
                                        placeholder="Service Name" maxlength="30" value="{{ $secOne->txt2_5 }}">
                                        <small>*Your max size is 30 characters*</small>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 form-group">
                                    <label for="title">service</label>
                                    <input type="text" name="txt2_6" id="nameInput" class="form-control"
                                        placeholder="Service Name" maxlength="30" value="{{ $secOne->txt2_6 }}">
                                        <small>*Your max size is 30 characters*</small>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 form-group">
                                    <label for="title">service</label>
                                    <input type="text" name="txt2_7" id="nameInput" class="form-control"
                                        placeholder="Service Name" maxlength="30" value="{{ $secOne->txt2_7 }}">
                                        <small>*Your max size is 30 characters*</small>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 form-group">
                                    <label for="title">service</label>
                                    <input type="text" name="txt2_8" id="nameInput" class="form-control"
                                        placeholder="Service Name" maxlength="30" value="{{ $secOne->txt2_8 }}">
                                        <small>*Your max size is 30 characters*</small>

                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h2 class="h4 mb-3">Media Image For Project </h2>
                                        <div class="d-flex align-items-center">
                                            <input type="file" id="imageInput" accept="image/*" name="img"
                                                onchange="showImage(event)">
                                            <img id="previewImage" src="{{ $secOne->img }}"
                                                style="max-width: 70px; height: auto;" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="pb-5 pt-3">
                    <button class="btn btn-primary" type="submit">Update</button>
                    <a type="reset" href="{{ route('ShowService-SecOne.index') }}" class="btn btn-outline-dark ml-3">Cancel</a>
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
        const file = event.target.files[0]; // Get only the first file

        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();

            reader.onload = (e) => {
                // Clear previous image before adding a new one
                previewContainer.innerHTML = '';

                const previewItem = document.createElement('div');
                previewItem.classList.add('preview-item');

                const img = document.createElement('img');
                img.src = e.target.result;
                img.style.maxWidth = '100%';
                img.style.height = '280px';

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
