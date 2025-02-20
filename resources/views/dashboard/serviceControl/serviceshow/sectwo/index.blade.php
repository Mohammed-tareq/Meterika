@extends('layouts.dashboard')


@section('title')
    <h1>Service Control</h1>
    <p>You can control the website from here </p>
@endsection

@section('content')

    <section class="content">
        <!-- Default box -->
        <div class="container-fluid">
            <div class="row mb-2"></div>
            <div class="col-sm-6">
                <h1>Service</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{ route('ShowService-SecTwo.create') }}" class="btn btn-primary">New Service</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th width="60">ID</th>
                            <th>name</th>
                            <th>description</th>
                            <th>Image</th>
                            <th width="100">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($serviceTwo)
                            <tr>
                                <td>{{ $serviceTwo->id }}</td>
                                <td>
                                    {{ $serviceTwo->title_1 }}
                                    {{ $serviceTwo->title_2 }}
                                </td>
                                <td>
                                    @if (!empty($serviceTwo->txt_1 && $serviceTwo->txt2_1))
                                        <i class="fa fa-fw fa-check-circle text-success"></i> Txt Found
                                    @else
                                        <p class="text-danger">Your Txt Not Found</p>
                                        <i class="fa fa-fw fa-hand-stop-o"></i>
                                    @endif
                                </td>
                                <td>

                                    <img src="{{ asset($serviceTwo->img) }}" width="80" height="60">

                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('ShowService-SecTwo.edit', $serviceTwo->id) }}" class="btn">
                                            <i class="fa fa-edit text-success"></i>
                                        </a>
                                        <form action="{{ route('ShowService-SecTwo.destroy', $serviceTwo->id) }}"
                                            method="post">
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
        <!-- /.card -->
    </section>
@endsection
