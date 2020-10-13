@extends('template/main')

@section('title', 'Customer')

@section('container')

<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Data Customer</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                    <tr>
                                    <th>Id Customer</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Id Kelurahan</th>
                                    <th>Foto</th>
                                </tr>
                            </thead>
                                <tbody>
                                    <tr> 
                                    @foreach($customer as $cus)
                                    <td>{{ $cus -> ID_CUSTOMER }}</td>
                                    <td>{{ $cus -> NAMA }}</td>
                                    <td>{{ $cus -> ALAMAT }}</td>
                                    <td>{{ $cus -> ID_KELURAHAN }}</td>
                                    <td>{{ $cus -> FILE_PATH }}</td>
                                    </tr>
                                    @endforeach
                                    
                                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          @endsection