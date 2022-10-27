@isset($represented)
<div id="representadas" class="py-sm-3 py-md-5 bg-light mt-4">
	<div class="container">
		<h6 class="text-center font-size-30">Representadas</h6>
		<div class="d-flex flex-wrap justify-content-md-between justify-content-sm-center">
			@if(count($represented))
				@foreach ($represented as $r)
					<img src="{{ asset($r->image) }}" style="object-fit: contain;">
				@endforeach
			@endif
		</div>
	</div>
</div>
@endisset
