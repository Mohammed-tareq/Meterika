@extends('layouts.dashboard')


@section('title')
    <h1>Home Control</h1>
    <p>You can control the website from here </p>
@endsection

@section('content')
    <section class="content">
        <!-- Default box -->
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sliders</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('slider.create') }}" class="btn btn-primary">New Slider</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th width="60">ID</th>
                                <th>video</th>
                                <th>Slider One</th>
                                <th>Slider Two</th>
                                <th width="100">Action</th>
                            </tr>
                        </thead>
                        <tbody>


                            @if ($sliders)
                                    <tr>
                                        <td>{{ $sliders->id }}</td>
                                        <td>
                                            @if (empty($sliders->video))
                                                <i class="fa fa-fw fa-check-circle"></i>
                                            @else
                                                <p>Your video Not Found</p>
                                                <i class="fa fa-fw fa-hand-stop-o"></i>
                                            @endif
                                        </td>
                                        <td>
                                            <img src="{{ asset($sliders->slider_img_one) }}" width="80" height="60">
                                        </td>
                                        <td>
                                            <img src="{{ asset($sliders->slider_img_two) }}" width="80" height="60">
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('slider.edit', $sliders->id) }}" class="btn">
                                                    <i class="fa fa-edit text-success"></i>
                                                </a>
                                                <form action="{{ route('slider.destroy', $sliders->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="text-danger btn" type="submit">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                
                            @else
                                <tr>
                                    <td colspan="5">Record Not Found</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>



            </div>
        </div>
        </div>
        <!-- /.card -->
    </section>
@endsection
