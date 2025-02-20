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
                    <h1>partener Img</h1>
                    <p>You can't add more than one image</p>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('parteners.create') }}" class="btn btn-primary">New partener Img</a>
                </div>
            </div>
            <div class="card">


                @if ($parteners)
                    <div class="card-body">
                        <img src="{{ asset($parteners->img) }}" width="250px" height="250px" alt="Partener Image">
                    </div>
                    <div class='row'>
                        <div class = 'col-md-4' style="display:flex;">
                            <a href="{{ route('parteners.edit', $parteners->id) }}" class="btn">
                                <button class='btn btn-primary' style="width:100px">Edit</button>
                            </a>
                            <form action="{{ route('parteners.destroy', $parteners->id) }}" method="post">
                                @csrf
                                @method('delete')

                                <button class="btn-danger btn d-flex" style="margin:7px; width:100px " type="submit">
                                    delete
                                </button>
                            </form>
                        </div>
                    </div>
                @else
                    <p>Record Not Found</p>
                @endif




            </div>
        </div>
        <!-- /.card -->
    </section>
@endsection
