@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Tambah Data Responden</h3>
                            </div>
                            <div class="panel-body">
                                <form action="/respondent" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <input type="text" name="phone" class="form-control" placeholder="Phone">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <textarea class="form-control" name="address" placeholder="Address" rows="4"></textarea>
                                        <br>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" style="float: right">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection