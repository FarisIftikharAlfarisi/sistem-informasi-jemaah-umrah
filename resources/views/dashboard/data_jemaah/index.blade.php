@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Jemaah</h1>
    </div>

    <a class="btn btn-primary mb-3" href="/dashboard/datajemaah/create"><span data-feather="folder-plus"></span> Tambah Data Jemaah </a>
    <div class="col-lg-10">
        <table class="table table-responsive table-striped ">
            <thead class="fw-semibold">
                <tr>
                    <td class="text-center"> # </td>
                    <td> Nama Jemaah </td>
                    @can('admin')
                    <td class="text-center"> Marketing </td>
                    @endcan
                    <td class="text-center"> Action </td>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_jemaah as $data)
                <tr>
                    <td class="text-center"> {{ $loop->iteration }} </td>
                    <td> {{ $data->nama_jemaah }} </td>
                    @can('admin')
                        <td class="text-center"> {{ $data->user_id->get('name') }} </td>
                    @endcan
                    <td class="text-center">|||</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
