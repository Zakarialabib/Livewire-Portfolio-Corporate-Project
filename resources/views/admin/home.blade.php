@extends('layouts.dashboard')
@section('title', __('Dashboard'))
@section('content')
    <div class="row">
        <div class="card bg-white  w-full">
            <div class="p-6 rounded-t rounded-r mb-0 border-b border-gray-200">
                <div class="card-row">
                    <h6 class="text-xl font-bold text-zinc-700">
                        {{ __('Dashboard') }}
                    </h6>
                </div>
            </div>
        </div>
    </div>
@endsection
