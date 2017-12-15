@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1> You are logged in!<span class="label label-default">New</span></h1>
                    <example-component></example-component>
                    <odometer></odometer>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
