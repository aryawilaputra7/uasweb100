@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        Input Kostumer
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
</section>
<div class="content">
    <div class="panel panel-flat border-top-lg border-top-primary">
    <form action="{{(isset($pembeli))?route('Pembeli.update',$pembeli->id_kostumer):route('Pembeli.store')}}" method="POST">
        @csrf
        @if(isset($pembeli))?@method('PUT')@endif
        <div class="panel-body">
            <div class="form-group">
                <label class="control-label col-lg-2">Kostumer</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($pembeli))?$pembeli->nama_kostumer:old('nama_kostumer')}}" name="nama_kostumer" class="form-control">
                    @error('nama_kostumer')<small style="color:yellow">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">Alamat</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($pembeli))?$pembeli->alamat_kostumer:old('alamat_kostumer')}}" name="alamat_kostumer" class="form-control">
                    @error('alamat_kostumer')<small style="color:yellow">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">NIK</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($pembeli))?$pembeli->NIK:old('NIK')}}" name="NIK" class="form-control">
                    @error('NIK')<small style="color:yellow">{{$message}}</small>@enderror
                </div>
                
            </div>
            
            
            <div class="form-group">
                <button type="submit">ADD</button>
            </div>
        </div>

    </form>    
    </div>
</div>    
@endsection