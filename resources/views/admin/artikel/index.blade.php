@extends('layouts.admin')
@section('styles')
    <link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3"><b>Dashboard</b></div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Admin</li>
                </ol>
            </nav>
        </div>

    </div>
    <!--end breadcrumb-->

    <h6 class="mb-0 text-uppercase">DataTable Admin</h6>
    <hr>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                @if (session('success'))
                    <div class="alert alert-success fade show" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header"><b>Data Artikel</b>
                        <a href="{{ route('artikel.create') }}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
                    </div>
                    <div class="card-body">
                        <div class="table-reponsive">
                            <table class="table table-bordered" id="datatable">
                                <thead>
                                    <tr>
                                        <th>
                                            <center>No</center>
                                        </th>
                                        <th>
                                            <center>Judul</center>
                                        </th>
                                        <th>
                                            <center>Deskripsi</center>
                                        </th>
                                        <th>
                                            <center>Gambar</center>
                                        </th>
                                    </tr>
                                </thead>
                                @php $no = 1; @endphp
                                <tbody>
                                    @foreach ($artikel as $item)
                                        <tr>
                                            <td>
                                                <center>{{ $no++ }}</center>
                                            </td>
                                            <td>
                                                <center>{{ $item->judul }}</center>
                                            </td>
                                            <td>
                                                <center>{{ $item->deskripsi }}</center>
                                            </td>
                                            <td>
                                                <center><img src="{{ asset('images/artikel/' . $item->foto) }}" width="150"
                                                        height="100"></center>
                                            </td>
                                            <td>
                                                <form action="{{ route('artikel.destroy', $item->id) }}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <center>
                                                        <a href="{{ route('artikel.edit', $item->id) }}"
                                                            class="btn btn-outline-success">
                                                            Edit
                                                        </a>
                                                        <a href="{{ route('artikel.destroy', $item->id) }}" class="btn btn-outline-danger"
                                                data-confirm-delete="true">
                                                Delete
                                            </a>
                                                    </center>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endpush