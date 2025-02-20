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
                <a href="{{ route('ShowService-SecThree.create') }}" class="btn btn-primary">New Service</a>
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
                        @if ($serviceThree)
                            <tr>
                                <td>{{ $serviceThree->id }}</td>
                                <td>
                                    {{ $serviceThree->title_1 }}
                                    <br>
                                    {{ $serviceThree->title_2 }}
                                </td>
                                <td>
                                    @if (!empty($serviceThree->txt_1 && $serviceThree->txt2_1))
                                        <i class="fa fa-fw fa-check-circle text-success"></i> TxT Found
                                    @else
                                        <p class="text-danger">Your TxT Not Found</p>
                                        <i class="fa fa-fw fa-hand-stop-o"></i>
                                    @endif
                                </td>
                                <td>
                                    @if (!empty($serviceThree->img_1 &&  $serviceThree->img_2))
                                        <i class="fa fa-fw fa-check-circle text-success"></i> img Found
                                    @else
                                        <p class="text-danger">Your img Not Found</p>
                                        <i class="fa fa-fw fa-hand-stop-o"></i>
                                    @endif

                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('ShowService-SecThree.edit', $serviceThree->id) }}" class="btn">
                                            <i class="fa fa-edit text-success"></i>
                                        </a>
                                        <form action="{{ route('ShowService-SecThree.destroy', $serviceThree->id) }}"
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
