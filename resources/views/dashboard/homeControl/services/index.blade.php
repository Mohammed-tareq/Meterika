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
                <h1>Services</h1>
            </div>
            {{-- <div class="col-sm-6 text-right">
                <a href="{{ route('services.create') }}" class="btn btn-primary">New services</a>
            </div> --}}
        </div>
        <div class="card">
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th width="60">ID</th>
                            <th>Name</th>
                            <th>Img</th>
                            <th width="100">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($services->isNotEmpty())
                            @foreach ($services as $service )
                            <tr>
                                <td>{{ $service->id }}</td>
                                <td>
                                    {{ $service->name }}
                                </td>

                                <td>

                                    <img src="{{ asset($service->img) }}" width="80" height="60">

                                <td>
                                    <div class="d-flex" >
                                        <a href="{{ route('services.edit', $service->id) }}" class="btn">
                                            <i class="fa fa-edit text-success"></i>
                                        </a>
                                        {{-- <form action="{{ route('services.destroy' , $service->id)   }}" method="post">
                                            @csrf
                                            @method('delete')

                                            <button  class="text-danger btn" type="submit">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form> --}}
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
            <div class="card-footer clearfix">
                {{ $services->links() }}

            </div>
        </div>
    </div>
    <!-- /.card -->
</section>
@endsection
