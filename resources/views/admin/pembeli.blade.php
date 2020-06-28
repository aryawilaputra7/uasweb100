@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        Data Pembeli
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
</section>
<div class="content">
    <div class="panel panel-flat border-top-lg border-top-primary">
        <div class="panel-body">
            
            <div class="col-lg-12">
            <a href="{{route('Pembeli.create')}}"> <button><b>(+) Tambah Data Pembeli</b></button></a>
                <table class="table table-bordered">
                    <thead>
                        <tr><th>#</th><th>Nama Pembeli</th><th>Alamat</th><th>NIK</th></tr>
                    </thead>
                    <tbody>
                        @foreach ($pembeli as $in=>$val)
                        <tr><td>{{($in+1)}}</td><td>{{$val->nama_kostumer}}</td><td>{{$val->alamat_kostumer}}</td><td>{{$val->NIK}}</td>
                        <td>
                        <a href="{{route('rental.edit',$val->id_kostumer)}}"><button>update</button></a>
                        <form action="{{route('Pembeli.destroy', $val->id_kostumer)}}" method="POST">
                            @csrf
                            @method('DELETE')
                        <button type="submit">delete</button>
                        </form>
                        </td></tr>
                        @endforeach
                    </tbody>
                </table>
                {{$pembeli->links()}}
            </div>
        </div>
    </div>
</div>
@endsection