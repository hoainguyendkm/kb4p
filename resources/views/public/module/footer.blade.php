    <footer class="footer-area">
        <div class="container">
            <div class="row">                
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-9">
                    <div class="footer-widget">
                        <h6 class="widget-title">Danh Mục</h6>
                        <nav class="footer-widget-nav">
                            <ul>
                                @foreach($gioitinh as $m)
                                <li><a href="{{route('gioitinh',$m->slug)}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> {{$m->name}}</a></li>
                                @endforeach
                                @foreach($muctieu as $m)
                                <li><a href="{{route('muctieu',$m->slug)}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> {{$m->name}}</a></li>
                                @endforeach
                                @foreach($honnhan as $m)
                                <li><a href="{{route('honnhan',$m->slug)}}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> {{$m->name}}</a></li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <h6 class="widget-title">Liên Kết</h6>
                        <div class="footer-social-info">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row">
                    <!-- Copywrite Text -->
                    <div class="col-12 col-sm-6">
                        <p class="copywrite-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made By <a href="">Timbandoi</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                    <div class="col-12 col-sm-6">
                        <nav class="footer-nav">
                            <ul>
                                <li><a href="{{route('trangchu')}}">Home</a></li>
                                <li><a href="{{route('gioithieu')}}">Giới Thiệu</a></li>
                                <li><a href="{{route('hotro')}}">Hỗ Trợ</a></li>
                                <li><a href="{{route('lienhe')}}">Liên Hệ</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </footer>