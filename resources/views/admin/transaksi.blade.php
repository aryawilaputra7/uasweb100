@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        Data Transaksi
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
            <a href="{{route('Transaksi.create')}}"> <button><b>(+) Tambah Data Transaksi</b></button></a>
                <table class="table table-bordered">
                    <thead>
                        <tr><th>#</th><th>id_admin</th>><th>id_mobil</th><th>id_pembeli</th></tr>
                    </thead>
                    <tbody>
                        @foreach ($transaksi as $in=>$val)
                        <tr><td>{{($in+1)}}</td><td>{{$val->id_admin}}</td><td>{{$val->id_kostumer}}</td><td>{{$val->id_mobil}}</td>
                        <td>
                        <a href="{{route('rental.edit',$val->id_transaksi)}}"><button>update</button></a>
                        <form action="{{route('Transaksi.destroy', $val->id_transaksi)}}" method="POST">
                            @csrf
                            @method('DELETE')
                        <button type="submit">delete</button>
                        </form>
                        </td></tr>
                        @endforeach
                    </tbody>
                </table>
                {{$transaksi->links()}}
            </div>
        </div>
    </div>
</div>
@endsection