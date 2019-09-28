@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form action="p" method="POST">
                            @csrf
                        <button class="btn btn-primary ">Create </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
