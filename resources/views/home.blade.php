@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                 
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                            @foreach ($r as $item)
                            
                       
                      <tr>
                       
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->codesur}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->update_at}}</td>
                      </tr>
                      @endforeach
                      
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
