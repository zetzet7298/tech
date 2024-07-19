@extends('cms.layouts.master')

@section('title', 'CMS Dịch vụ tư vấn pháp luật')

@section('content')
    <div class="container mt-2">
        <div class="card">
            <div class="card-body">
            <h1 class="mb-3">Quản lý quyền của {{$user->name}}</h1>

            <form action="{{route('users.assign.permissions', ['id'=> $user->id])}}" method="POST">
                @csrf
                <div class="row">
                    @foreach($permissions as $k => $v)
                    <div class="col-md-3 mb-2">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="customCheck1" name="permissions[]" value="{{$k}}"
                            @if (checkPermission($k, 'GET', $user))
                                checked
                            @endif
                            >
                            <label class="form-check-label" for="customCheck1">{{$v}}</label>
                        </div>
                    </div>
                    @endforeach
                </div>

                <button type="submit" class="btn btn-primary mt-5">Xác nhận</button>
            </form>
            
            </div>
        </div>
    </div>
@endsection
