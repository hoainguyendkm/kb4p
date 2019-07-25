 @extends('public.master.layouts')
 @section('content')
 <div class="post-details-content bg-white mb-30 p-30 box-shadow">
 	<div class="blog-thumb mb-30">
 		<img src="{{$user->img}}" alt="">
 	</div>
 	<div class="blog-content">
 		<div class="post-meta">
 			<a href="{{route('gioitinh',$user->slug)}}">{{$user->gioitinh->name}}</a>
 			<a href="{{route('honnhan',$user->slug)}}">{{$user->honnhan->name}}</a>
 		</div>
 		<h4 class="post-title">{{$user->ten}}</h4>
 		<!-- Post Meta -->
 		<div class="post-meta-2">
 			<span>Tuổi: {{$user->tuoi}}</span>
 			<span class="ml-3 mr-3">-</span>
 			<span>Đến Từ: <a href="">{{$user->diachi->name}}</a></span><br>
 			<span class="mr-3">Ngày Tham Gia: {{$user->created_at}}</span>
 			<span>Đăng Nhập Lần Cuối: {{$user->created_at}}</span>
 		</div>

 		<p>Xin chào, mình là {{$user->toila}}</p>

 		<p>Mình muốn tìm người {{$user->timnguoi}}</p>

 		<!-- Like Dislike Share -->
 		<div class="like-dislike-share my-5">
 			<a href="#" ><i class="fa fa-envelope-o"></i> Nhắn Tin Tới Người Này</a>
 		</div>
 	</div>
 </div>
 <div class="related-post-area bg-white mb-30 px-30 pt-30 box-shadow">
 	<!-- Section Title -->
 	<div class="section-heading">
 		<h5>Cùng Ở {{$user->diachi->name}}</h5>
 	</div>

 	<div class="cungque owl-carousel">
 		<!-- Single Blog Post -->
 		@if($cungque)	
 		@foreach($cungque as $c)
 		<div class="single-blog-post style-4 mb-30">
 			<div class="post-thumbnail">
 				<img src="{{$c->img}}.jpg" alt="">
 			</div>
 			<div class="post-content">
 				<a href="{{route('thongtin',[$c->id,$c->slug])}}" class="post-title">{{str_limit($c->ten,13)}}</a>
 				<div class="post-meta d-flex">
 					<span class="mr-3">{{$c->tuoi}}t</span>
 					<span>{{$c->luotxem}} luot xem</span>
 				</div>
 			</div>
 		</div>
 		@endforeach
 		@endif
 	</div>
 </div>
 @endsection