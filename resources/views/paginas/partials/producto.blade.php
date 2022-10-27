<div class="d-block card producto">
    @if (count($p->brands))
        @if (count($p->brands) == 1)
            @if ($p->brands()->first()->icon)
                <img src="{{asset($p->brands()->first()->icon)}}"  class="position-absolute" style="z-index: 100; max-height: 50px;right: 5px; top: 5px;">
            @endif
        @else 
            <span class="position-absolute fw-bold" style="z-index: 100; max-height: 50px;right: 5px; top: 5px;">Varias marcas</span>   
        @endif
    @endif
    <a href="{{ route('producto', ['id'=> $p->id]) }}" class="position-relative bg-light d-flex justify-content-center align-items-center" style="min-height: 190px; max-height: 190px;">
        @if (count($p->images))
            <img src="{{ asset($p->images()->first()->image) }}" class="img-fluid" style="object-fit: contain;" width="172" height="62">
        @endif
    </a>
    <div class="card-body">
        <p class="card-text">
            <a href="{{ route('producto', ['id'=> $p->id]) }}" class="text-primary text-decoration-none font-size-18 fw-bold d-block">{{$p->name}}</a>
        </p>
    </div>
</div>


