<div class="single-sidebar-widget p-30">
	<!-- Section Title -->
	<div class="section-heading">
		<h5>Đăng Ký Mới</h5>
	</div>
	<ul class="nav nav-tabs" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" href="#pane1" role="tab" data-toggle="tab">Nam</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#pane2" role="tab" data-toggle="tab">Nữ</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#pane3" role="tab" data-toggle="tab">Gay</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#pane4" role="tab" data-toggle="tab">Les</a>
		</li>
	</ul>

	<!-- Tab panes -->

	<div class="tab-content mt-4">
		<div role="tabpanel" class="tab-pane fade show active" id="pane1">
			@foreach($n1 as $m)
				<div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="{{$m->img}}" alt="">
                    </div>
                    <div class="post-content">
                        <a href="{{route('thongtin',[$m->id,$m->slug])}}" class="post-title">{{-- {{str_limit($m->ten,13)}} --}}{{$m->ten}} <span class="ml-2">.{{$m->tuoi}}t</span></a>
                        <div class="post-meta d-flex justify-content-between">
                           <a href="{{route('muctieu',$m->muctieu->slug)}}">{{$m->muctieu->name}}</a>
                        </div>
                    </div>
                </div>
			@endforeach
		</div>
		<div role="tabpanel" class="tab-pane fade" id="pane2">
			@foreach($n2 as $m)
				<div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="{{$m->img}}" alt="">
                    </div>
                    <div class="post-content">
                        <a href="{{route('thongtin',[$m->id,$m->slug])}}" class="post-title">{{-- {{str_limit($m->ten,13)}} --}}{{$m->ten}} <span class="ml-2">.{{$m->tuoi}}t</span></a>
                        <div class="post-meta d-flex justify-content-between">
                           <a href="{{route('muctieu',$m->muctieu->slug)}}">{{$m->muctieu->name}}</a>
                        </div>
                    </div>
                </div>
			@endforeach
		</div>
		<div role="tabpanel" class="tab-pane fade" id="pane3">
			@foreach($n3 as $m)
				<div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="{{$m->img}}" alt="">
                    </div>
                    <div class="post-content">
                        <a href="{{route('thongtin',[$m->id,$m->slug])}}" class="post-title">{{-- {{str_limit($m->ten,13)}} --}}{{$m->ten}} <span class="ml-2">.{{$m->tuoi}}t</span></a>
                        <div class="post-meta d-flex justify-content-between">
                           <a href="{{route('muctieu',$m->muctieu->slug)}}">{{$m->muctieu->name}}</a>
                        </div>
                    </div>
                </div>
			@endforeach
		</div>
		<div role="tabpanel" class="tab-pane fade" id="pane4">
			@foreach($n4 as $m)
				<div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="{{$m->img}}" alt="">
                    </div>
                    <div class="post-content">
                        <a href="{{route('thongtin',[$m->id,$m->slug])}}" class="post-title">{{-- {{str_limit($m->ten,13)}} --}}{{$m->ten}} <span class="ml-2">.{{$m->tuoi}}t</span></a>
                        <div class="post-meta d-flex justify-content-between">
                           <a href="{{route('muctieu',$m->muctieu->slug)}}">{{$m->muctieu->name}}</a>
                        </div>
                    </div>
                </div>
			@endforeach
		</div>
	</div>


</div>