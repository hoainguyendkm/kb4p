<div class="mag-main-menu" id="sticker">
    <div class="classy-nav-container breakpoint-off">
        <!-- Menu -->
        <nav class="classy-navbar justify-content-between" id="magNav">

            <!-- Nav brand -->
            <a href="index.html" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>

            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
                <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>

            <!-- Nav Content -->
            <div class="nav-content d-flex align-items-center">
                <div class="classy-menu">

                    <!-- Close Button -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li class="active"><a href="{{route('trangchu')}}">Home</a></li>
                            <li><a href="#">Tìm Bạn</a>
                                <div class="megamenu">
                                    <ul class="single-mega cn-col-3">
                                     @foreach($gioitinh as $d)
                                     <li><a href="{{route('gioitinh',$d->slug)}}">{{$d->name}}</a></li>
                                     @endforeach
                                 </ul>
                                 <ul class="single-mega cn-col-3">
                                     @foreach($muctieu as $d)
                                     <li><a href="{{route('muctieu',$d->slug)}}">{{$d->name}}</a></li>
                                     @endforeach
                                 </ul>
                                 <ul class="single-mega cn-col-3">
                                     @foreach($honnhan as $d)
                                     <li><a href="{{route('honnhan',$d->slug)}}">{{$d->name}}</a></li>
                                     @endforeach
                                 </ul>
                             </div>
                         </li>
                         <li><a href="{{route('lienhe')}}">Liên Hệ</a></li>
                         @if(Auth::user())
                         <li>
                            <a class="btn-user" data-toggle="dropdown">{{Auth::user()->ten}}</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('thongtin',[Auth::user()->id,Auth::user()->slug])}}">Thông Tin Cá Nhân</a></li>
                                <li><a href="#">Chỉnh Sửa Thông Tin</a></li>
                                <li><a href="#">Xóa User</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a href="{{route('logout')}}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Thoát</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                    @else
                    <li><a href="{{route('login')}}"><i class="fa fa-user" aria-hidden="true"></i> Đăng nhập</a></li>
                    <li><a href="{{route('register')}}">Đăng Ký</a></li>
                    @endif
                </ul>
            </div>
            <!-- Nav End -->
        </div>
    </div>
</nav>
</div>
</div>