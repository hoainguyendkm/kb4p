<div class="single-sidebar-widget p-30">
    <!-- Section Title -->
    <div class="section-heading">
        <h5>Categories</h5>
    </div>

    <!-- Catagory Widget -->
    <ul class="catagory-widgets">
        @foreach($doituong as $item)
        <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> {{$item->name}}</span></a></li>
        @endforeach
    </ul>
</div>