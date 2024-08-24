<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Stock Sembako</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <!-- DataTables CSS -->
        <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="container mt-5">
            <h1 class="text-center mb-4">Stock Sembako</h1>
            <div class="text-right mb-3">
                <button class="btn btn-primary" data-toggle="modal" data-target="#createModal">Create</button>
            </div>
            @include('modal-create')

            <div class="mb-3">
                <form method="GET" action="{{ route('home') }}">
                    <div class="form-row">
                        <div class="col">
                            <select class="form-control" name="jenis_barang">
                                <option value="">Pilih Jenis Barang</option>
                                <option value="" {{ request('jenis_barang') == null ? 'selected' : '' }}>ALL</option>
                                @foreach($semua_data as $jenis)
                                    <option value="{{ $jenis }}" {{ request('jenis_barang') == $jenis ? 'selected' : '' }}>{{ $jenis }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <input type="date" class="form-control" name="tanggal_awal" value="{{ request('tanggal_awal') }}">
                        </div>
                        <div class="col">
                            <input type="date" class="form-control" name="tanggal_akhir" value="{{ request('tanggal_akhir') }}">
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary">Filter</button>
                        </div>
                    </div>
                </form>
            </div>

            <table class="table table-bordered" id="dataTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Stok</th>
                        <th>Jumlah Terjual</th>
                        <th>Tanggal Transaksi</th>
                        <th>Jenis Barang</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $key => $value)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $value->nama_barang }}</td>
                        <td>{{ $value->stock }}</td>
                        <td>{{ $value->jumlah_terjual }}</td>
                        <td>{{ \Carbon\Carbon::parse($value->tanggal_transaksi)->format('Y-m-d') }}</td>
                        <td>{{ $value->jenis_barang }}</td>
                        <td>
                            <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal-{{ $value->id }}">Edit</button>
                            @include('modal-edit', ['data' => $value])
                            <a href="{{route('perhitungan.delete',$value->id)}}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Bootstrap JS and dependencies -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- DataTables JS -->
        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script>
            $(document).ready(function() {
                $('#dataTable').DataTable();
            });
        </script>
        @if(session('success'))
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: '{{ session('success') }}',
                    });
                });
            </script>
        @endif
        @if(session('error'))
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: '{{ session('error') }}',
                    });
                });
            </script>
        @endif
    </body>
</html>
