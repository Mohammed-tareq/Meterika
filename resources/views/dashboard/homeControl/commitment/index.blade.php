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
                    <h1>Commitments</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('commitment.create') }}" class="btn btn-primary">New Commitment</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th width="60">ID</th>
                                <th>Txt</th>
                                <th>Img</th>
                                <th width="100">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($commitments)
                                <tr>
                                    <td>{{ $commitments->id }}</td>
                                    <td>{{ $commitments->title }}</td>
                                    <td>
                                        <img src="{{ asset($commitments->img) }}" width="80" height="60"
                                            alt="Commitment Image">
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <!-- Edit Button -->
                                            <a href="{{ route('commitment.edit', $commitments->id) }}" class="btn">
                                                <i class="fa fa-edit text-success"></i>
                                            </a>

                                            <!-- Delete Form -->
                                            <form action="{{ route('commitment.destroy', $commitments->id) }}" method="POST"
                                                onsubmit="return confirm('Are you sure?');">
                                                @csrf
                                                @method('DELETE')

                                                <button class="text-danger btn" type="submit">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @else
                                <tr>
                                    <td colspan="5" class="text-center">Record Not Found</td>
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
