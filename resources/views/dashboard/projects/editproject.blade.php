@extends('layouts.dashboard')

@section('title')
    <h1>Home Control</h1>
    <p>You can control the website from here</p>
@endsection

@section('content')
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Project </h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('projects.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <form action="{{ route('projects.update', $project->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="mb-3 form-group">
                                    <label for="title">Project Name</label>
                                    <input type="text" name="name" value="{{ $project->name }}" id="nameInput"
                                        class="form-control" placeholder="Project Name">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="mb-3 form-group">
                                    <label for="title">Project Title</label>
                                    <input type="text" name="title" value="{{ $project->title }}" id="nameInput"
                                        class="form-control" placeholder="Project Title">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div>
                                    <h2 class="h4 mb-3">Media Image For Project</h2>
                                    <p><small>Click an image to delete it</small></p>
                                    <div class="d-flex align-items-center">
                                        <input type="file" id="imageInput" accept="image/*" name="images[]" multiple onchange="previewImages(event)">
                                        <input type="hidden" id="deletedImages" name="deleted_images">
                                        <div id="imagePreview" style="display:flex; flex-wrap:wrap; gap:10px; padding: 20px">
                                            @foreach (json_decode($project->images) ?? [] as $image)
                                                <div class="image-container" style="position: relative; display: inline-block;">
                                                    <img src="{{ $image }}" class="preview-img" onclick="removeImage(this, '{{ $image }}')"
                                                        style="width: 100px; height: 150px; cursor: pointer; border: 2px solid transparent;">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pb-5 pt-3">
                    <button class="btn btn-primary" type="submit">Update</button>
                    <a type="reset" href="{{ route('projects.index') }}" class="btn btn-outline-dark ml-3">Cancel</a>
                </div>
            </form>
        </div>
    </section>
@endsection

@push('js')
<script>
    let deletedImages = [];

    function previewImages(event) {
        const input = event.target;
        const previewContainer = document.getElementById('imagePreview');

        if (input.files) {
            for (const file of input.files) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const imgContainer = document.createElement('div');
                    imgContainer.classList.add('image-container');
                    imgContainer.style.position = 'relative';
                    imgContainer.style.display = 'inline-block';

                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.classList.add('preview-img');
                    img.style.width = '100px';
                    img.style.height = '150px';
                    img.style.cursor = 'pointer';
                    img.style.border = '2px solid transparent';

                    imgContainer.appendChild(img);
                    previewContainer.appendChild(imgContainer);
                };
                reader.readAsDataURL(file);
            }
        }
    }

    function removeImage(imageElement, imageUrl) {
        // Remove image from UI
        imageElement.parentElement.remove();

        // Add deleted image URL to the array
        deletedImages.push(imageUrl);
        document.getElementById('deletedImages').value = JSON.stringify(deletedImages);
    }
</script>
@endpush
