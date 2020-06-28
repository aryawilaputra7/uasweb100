@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        Data Mobil
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
            <a href="{{route('rental.create')}}"> <button><b>(+) Tambah Data Mobil</b></button></a>
                <table class="table table-bordered">
                    <thead>
                        <tr><th>#</th><th>Nama Mobil</th><th>PLAT</th><th>Warna</th><th>Tahun Masuk</th></tr>
                    </thead>
                    <tbody>
                        @foreach ($mobil as $in=>$val)
                        <tr><td>{{($in+1)}}</td><td>{{$val->merk_mobil}}</td><td>{{$val->plat_mobil}}</td><td>{{$val->warna_mobil}}</td><td>{{$val->tahun_mobil}}</td>
                        <td>
                        <a href="{{route('rental.edit',$val->id_mobil)}}"><button>update</button></a>
                        <form action="{{route('rental.destroy', $val->id_mobil)}}" method="POST">
                            @csrf
                            @method('DELETE')
                        <button type="submit">delete</button>
                        </form>
                        </td></tr>
                        @endforeach
                    </tbody>
                </table>
                {{$mobil->links()}}
            </div>
        </div>
    </div>
</div>
@endsection