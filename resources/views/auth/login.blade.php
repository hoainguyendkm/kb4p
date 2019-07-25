@extends('layouts.app')

@section('content')
<div class="mag-login-area py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <div class="login-content bg-white p-30 box-shadow">
                    <!-- Section Title -->
                    <div class="section-heading">
                        <h5>Thật Tuyệt! Bạn đã quay trở lại</h5>
                    </div>

                    <form action="{{route('login')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Nhập Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu">
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" name="remember" id="customControlAutosizing">
                                <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                            </div>
                        </div>
                        <button type="submit" class="btn mag-btn mt-30">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
