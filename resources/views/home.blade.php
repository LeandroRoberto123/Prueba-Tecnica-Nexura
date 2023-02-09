@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('include.message')
            @if (count($employees) > 0)
                @foreach ($employees as $employee)
                    @include('employee.list', ['employee' => $employee])
                @endforeach
            @else
                @include('employee.list')
            @endif
            {{-- @include('include.employees') --}}
        </div>
    </div>
</div>
@endsection
