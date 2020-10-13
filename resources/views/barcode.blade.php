@extends('template/main')

@section('title', 'Customer')

@section('container')

<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Tabel TnJ Barcode</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                    <tr>
                                    <th>#</th>
                                    <th>Id Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Cetak Barcode</th>
                                </tr>
                            </thead>
                                <tbody>
                                    <tr>
                                    @foreach($barang as $brg)
                                    <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <td>{{ $brg -> ID_BARANG }}</td>
                                    <td>{{ $brg -> NAMA_BARANG }}</td>
                                    <td>
                                    <a href="pdf-barcode/{{$brg->ID_BARANG}}">
                                    <button type="button" class="btn btn-warning">Cetak Barcode</button></a>
                                    </td>
                                    </tr>
                                    @endforeach
                                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

<script>
  console.log('x : ')
            const x = document.getElementsByClassName('post0');
            for(let i=0;i<x.length;i++){
                x[i].addEventListener('click',function(){
                    x[i].submit();
                });
            }
            swal("Welcome to Print Barcode!", "You clicked the button!", "success");
</script>

@endsection