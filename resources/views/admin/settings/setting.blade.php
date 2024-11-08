@extends('admin.partial.master')
@section('setting-active','active')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Basic Inputs</h4>

        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <h5 class="card-header">Default</h5>
                    @livewire('setting-update')
                    </div>
                </div>
            </div>
@endsection
