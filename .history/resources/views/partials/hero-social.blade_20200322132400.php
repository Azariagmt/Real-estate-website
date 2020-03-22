<div class="hero-social-warp">
	<div class="hero-social">
	@foreach($social as $social)
		<a href="{{$social->link}}"><i class="{{$social->icon}}"></i></a>
	@endforeach
	</div>
</div>