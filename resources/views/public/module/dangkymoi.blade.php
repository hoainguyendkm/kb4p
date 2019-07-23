<div class="single-sidebar-widget p-30">
	<!-- Section Title -->
	<div class="section-heading">
		<h5>Newsletter</h5>
	</div>
	<ul class="nav nav-tabs" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" href="#pane1" role="tab" data-toggle="tab">Nam</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#pane2" role="tab" data-toggle="tab">Nu</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#pane3" role="tab" data-toggle="tab">Gay</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#pane4" role="tab" data-toggle="tab">Les</a>
		</li>
	</ul>

	<!-- Tab panes -->
	<?php 
		$n = DB::table('users')->where('gioitinh_id',1)->orderBy('created_at','desc')->limit(10)->get();
		$n2 = DB::table('users')->where('gioitinh_id',2)->orderBy('created_at','desc')->limit(10)->get();
		$n3 = DB::table('users')->where('gioitinh_id',3)->orderBy('created_at','desc')->limit(10)->get();
		$n4 = DB::table('users')->where('gioitinh_id',4)->orderBy('created_at','desc')->limit(10)->get();
	?>
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane fade show active" id="pane1">
			@foreach($n as $m)
				{{$m->ten}}<br>
			@endforeach
		</div>
		<div role="tabpanel" class="tab-pane fade" id="pane2">
			@foreach($n2 as $m)
				{{$m->ten}}<br>
			@endforeach
		</div>
		<div role="tabpanel" class="tab-pane fade" id="pane3">
			@foreach($n3 as $m)
				{{$m->ten}}<br>
			@endforeach
		</div>
		<div role="tabpanel" class="tab-pane fade" id="pane4">
			@foreach($n4 as $m)
				{{$m->ten}}<br>
			@endforeach
		</div>
	</div>


</div>