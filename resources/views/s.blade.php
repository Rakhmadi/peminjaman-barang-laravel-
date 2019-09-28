@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                 {{$f->codesur}}                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
