@extends('admin.partial.master')
@section('skills-active','active')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Basic Inputs</h4>

        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <h5 class="card-header">skills</h5>
                    <div class="mt-3">
                        <!-- Button trigger modal -->

                        @livewire('counter-create')

                        <!-- Modal -->
                    </div>
                </div>
                    @livewire('counter-data')
                    </div>
                </div>
            </div>
    @livewire('counter-update')

    </div>

@endsection
