@extends('cms.layouts.master')

@section('title', 'CMS Dịch vụ tư vấn pháp luật')

@section('content')
<div class="container mt-2">
    <div class="card">
        <div class="card-header mt-4">
            <h1>{{ $employee->first_name }}</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ display_image($employee->photo) }}" alt="Photo" class="img-fluid rounded">
                </div>
                <div class="col-md-8">
                    <p><strong>Email:</strong> {{ $employee->email }}</p>
                    <p><strong>Phone:</strong> {{ $employee->phone }}</p>
                    <p><strong>Giới thiệu:</strong> {{ $employee->introduction }}</p>
                    <p><strong>Chuyên ngành:</strong></p>
                    <ul class="list-group">
                        @foreach ($employee->specialties as $specialty)
                            <li class="list-group-item">{{ $specialty->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('employees.index') }}" class="btn btn-secondary">Quay lại danh sách</a>
        </div>
    </div>
</div>
@endsection
