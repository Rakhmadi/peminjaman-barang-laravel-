@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <div class="row">
                <div class="col-sm-4">  <div class="card">
                <div class="card-header"> Code  :{{$f->codesur}}  &nbsp;&nbsp; <a href="/g/delcode/{{$f->id}}/{{$f->codesur}}" class="btn btn-danger btn-sm">Cancel </a>  </div>
                        
                        <div class="card-body">
                        
                         
                         <form method="POST" action="/createlist">
                            @csrf
                            <input type="text" name="code" value="{{$f->codesur}}" hidden='true'>
        
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama Aset') }}</label>
        
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="namaaset" value="{{ old('name') }}" required autocomplete="name" autofocus>
        
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="noaset" class="col-md-4 col-form-label text-md-right">{{ __('No Aset') }}</label>
        
                                <div class="col-md-6">
                                    <input id="noaset" type="text" class="form-control @error('noaset') is-invalid @enderror" name="noaset" value="{{ old('noaset') }}" required autocomplete="noaset" autofocus>
        
                                    @error('noaset')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
        
                            
                            <div class="form-group row">
                                <label for="spc" class="col-md-4 col-form-label text-md-right">{{ __('Spesifikasi') }}</label>
        
                                <div class="col-md-6">
                                    <input id="spc" type="text" class="form-control @error('spc') is-invalid @enderror" name="spc" value="{{ old('spc') }}" required autocomplete="spc" autofocus>
        
                                    @error('spc')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
        
                            
                            <div class="form-group row">
                                <label for="lem" class="col-md-4 col-form-label text-md-right">{{ __('Lembaga') }}</label>
        
                                <div class="col-md-6">
                                    <input id="lem" type="text" class="form-control @error('lem') is-invalid @enderror" name="lem" value="{{ old('lem') }}" required autocomplete="lem" autofocus>
        
                                    @error('lem')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
        
                            <div class="form-group row">
                                <label for="ket" class="col-md-4 col-form-label text-md-right">{{ __('Keterangan') }}</label>
        
                                <div class="col-md-6">
                                    <input id="ket" type="text" class="form-control @error('ket') is-invalid @enderror" name="ket" value="{{ old('ket') }}" required autocomplete="ket" autofocus>
        
                                    @error('ket')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
        
        
                            
        
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Create List')}}
                                    </button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div></div>
                <div class="col-sm-8">     <div class="card ">
                <div class="card-header"><div style='float:right'><a href="sysprint______________d/{{$f->codesur}}" class="btn btn-primary btn-sm"><i class="fa fa-print"></i> </a></div></div>
                       
                       
                        <div class="card-body scroll">
                                <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama Asset</th>
                                            <th scope="col">No Asset</th>
                                            <th scope="col">Spesifikasi</th>
                                            <th scope="col">Lembaga</th>
                                            <th scope="col">Keterangan</th>
                                            <th scope="col">Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $ns=1;
                                            @endphp
                                                @foreach ($gs as $key=>$g)
                                                
                                                <tr>
                                                <th scope="row">{{$ns++}}</th>
                                                        <td>{{$g->namaaset}}</td>
                                                        <td>{{$g->noaset}}</td>
                                                        <td>{{$g->spc}}</td>
                                                        <td>{{$g->lem}}</td>
                                                        <td>{{$g->ket}}</td>
                                                <td><a href="del____s/{{$g->id}}/{{$f->codesur}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                                                      </tr>
                                              @endforeach
                                        
                                          
                                        </tbody>
                                      </table>
                        </div>
                    </div></div>
              </div>
    <div class="row justify-content-center">
        <div class="col-lg-8">
          
        </div>
    </div>
</div>

<div class="container md-12" style="margin-top:20px;">
    <div class="row justify-content-center">
        <div class="col-lg-11">
       
        </div>
    </div>
</div>
@endsection
