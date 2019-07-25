@extends('layouts.app')

@section('content')
<div class="mag-login-area py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <div class="login-content bg-white p-30 box-shadow">
                    <!-- Section Title -->
                    <div class="section-heading">
                        <h5>Chào mừng bạn đã đến với timbandoi</h5>
                    </div>

                    <form action="index.html" method="post">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nhập địa chỉ email">
                        </div>
                        <div class="form-group">
                            <label for="">Tên</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên của bạn">
                        </div>
                        <div class="form-group">
                            <label for="">Mật Khẩu</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label>Giới Tính</label>
                            <select class="form-control" name="" id="">
                                @foreach($gioitinh as $d)
                                <option value="{{$d->id}}">{{$d->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Mục Tiêu</label>
                            <select class="form-control" name="" id="">
                                @foreach($muctieu as $d)
                                <option value="{{$d->id}}">{{$d->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Hôn Nhân</label>
                            <select class="form-control" name="" id="">
                                @foreach($honnhan as $d)
                                <option value="{{$d->id}}">{{$d->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-inline">
                            <div class="form-group">
                                <label for="">Tuổi: </label>
                                <select class="form-control" name="" id="">
                                    @for($i = 15; $i <= 60; $i++ )
                                    <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Chiều Cao: </label>
                                <select class="form-control" name="" id="">
                                    @for($i = 139; $i <= 209; $i++ )
                                    <option value="{{$i}}">{{$i}} cm</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Cân Nặng: </label>
                                <select class="form-control" name="" id="">
                                    @for($i = 30; $i <= 110; $i++ )
                                    <option value="{{$i}}">{{$i}} kg</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Đến Từ: </label>
                                <select class="form-control" name="" id="">
                                    @foreach($diachi as $d )
                                    <option value="{{$d->id}}">{{$d->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Bạn Là Người:</label>
                            <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Tối Thiểu 5 ký tự"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Bạn Muốn Tìm Người:</label>
                            <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Tối Thiểu 5 ký tự"></textarea>
                        </div>
                        <button type="submit" class="btn mag-btn mt-30">Đăng Ký</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
