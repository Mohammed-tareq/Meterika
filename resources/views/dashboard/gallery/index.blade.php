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
                <h1>galleries</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{ route('galleries.create') }}" class="btn btn-primary">New galleries</a>
            </div>
        </div>
        <div class="card position-relative">
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th width="60">ID</th>
                            <th>Img</th>
                            <th width="100">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($galleries->isNotEmpty())
                            @foreach ($galleries as $gallery )
                            <tr>
                                <td>{{ $gallery->id }}</td>
                                <td>

                                    <img src="{{ asset($gallery->img) }}" width="80" height="60">

                                </td>
                                <td>
                                    <div class="d-flex" >
                                        <a href="{{ route('galleries.edit', $gallery->id) }}" class="btn">
                                            <i class="fa fa-edit text-success"></i>
                                        </a>
                                        <form action="{{ route('galleries.destroy' , $gallery->id)   }}" method="post">
                                            @csrf
                                            @method('delete')

                                            <button  class="text-danger btn" type="submit">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5">Record Not Found</td>
                            </tr>
                        @endif

                    </tbody>
                </table>
            </div>
            <div class="card-footer clearfix" style=" display: flex;justify-content:end; padding: 10px 20px;">
                {{ $galleries->links() }}

            </div>
        </div>
    </div>
    <!-- /.card -->
</section>
@endsection
