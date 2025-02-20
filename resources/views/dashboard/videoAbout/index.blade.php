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
                    <h1>Videos</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('AboutUs.create') }}" class="btn btn-primary">New videos</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th width="60">ID</th>
                                <th>video</th>
                                <th width="100">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($About)
                                    <tr>
                                        <td>{{ $About->id }}</td>
                                        <td>
                                            @if (!empty($About->video))
                                                <i class="fa fa-fw fa-check-circle text-success"></i> Video Found
                                            @else
                                                <p class="text-danger">Your video Not Found</p>
                                                <i class="fa fa-fw fa-hand-stop-o"></i>
                                            @endif

                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('AboutUs.edit', $About->id) }}" class="btn">
                                                    <i class="fa fa-edit text-success"></i>
                                                </a>
                                                <form action="{{ route('AboutUs.destroy', $About->id) }}" method="post">
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
