@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Respondent</h3>
                            </div>
                            <div class="panel-body">
                                <div class="input-group-btn">
                                    <a href="/respondent/create" type="button" class="btn btn-primary btn-sm">+ Tambah</a>
                                </div>
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($respondents as $respondent)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $respondent->name }}</td>
                                                <td>{{ $respondent->phone }}</td>
                                                <td>{{ $respondent->address }}</td>
                                                <td>
                                                    <span class="label label-warning">Edit</span>
                                                    <span class="label label-danger">Hapus</span>
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
    </div>
    
@endsection