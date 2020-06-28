@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        Input Transaksi
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
</section>
<div class="content">
    <div class="panel panel-flat border-top-lg border-top-primary">
    <form action="{{(isset($transaksi))?route('Transaksi.update',$transaksi->id_transaksi):route('Transaksi.store')}}" method="POST">
        @csrf
        @if(isset($transaksi))?@method('PUT')@endif
        <div class="panel-body">
            <div class="form-group">
                <label class="control-label col-lg-2">id_admin</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($transaksi))?$transaksi->id_admin:old('id_admin')}}" name="id_admin" class="form-control">
                    @error('id_admin')<small style="color:yellow">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">id_kostumer</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($transaksi))?$transaksi->id_kostumer:old('id_kostumer')}}" name="id_kostumer" class="form-control">
                    @error('id_kostumer')<small style="color:yellow">{{$message}}</small>@enderror
                </div>
                <label class="control-label col-lg-2">id_mobil</label>
                <div class="col-lg-10">
                    <input type="text" value="{{(isset($transaksi))?$transaksi->id_mobil:old('id_mobil')}}" name="id_mobil" class="form-control">
                    @error('id_mobil')<small style="color:yellow">{{$message}}</small>@enderror
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