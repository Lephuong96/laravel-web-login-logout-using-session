@extends('layouts.master')
@section('content')
    <div class="title m-b-md">
        Function Lucky
    </div>
    <a href="{{ route('user.logout') }}">
        <button type="button" class="btn btn-outline-primary">Đăng Xuất</button>
    </a>
    <hr>
@endsection

