@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="metric">
                        <span class="icon"><i class="fa fa-user"></i></span>
                        <p>
                            <span class="number">{{ $total_respondents }}</span>
                            <span class="title">Responden</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        
@endsection