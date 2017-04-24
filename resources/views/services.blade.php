<section id="services" class="wrapper view">
    <div class="page-wrapper">
        <div class="container">
            <div class="col-md-12">
                <h1 class="card-header page-header wow fadeInDown">Our Services</h1>
   
                @foreach($services as $service)
                	<div class="row service-block">
                	@if (substr($service->id, 0, 1) % 2 != 0)
	                	<div class="col-md-8 col-sm-12 text-right wow fadeInRight">
	                		<h2>{{ $service->name }}</h2>
	                		<p>{{ $service->description }}</p>
	                	</div>
                		<div class="col-md-4 col-sm-12 z-depth-2 service-image-container wow fadeInRight">
	                		<div class="view hm-black-light hm-zoom">
	                            <img src="{{ $service->image_url }}" class="img-fluid service-image" alt="{{ $service->name }}">
	                        </div>
	                	</div>
                	@else
	                	<div class="col-md-4 col-sm-12 z-depth-2 service-image-container wow fadeInLeft">
	                		<div class="view hm-black-light hm-zoom">
	                            <img src="{{ $service->image_url }}" class="img-fluid service-image" alt="{{ $service->name }}">
	                        </div>
	                	</div>
	                	<div class="col-md-8 col-sm-12 text-left wow fadeInLeft">
	                		<h2>{{ $service->name }}</h2>
	                		<p>{{ $service->description }}</p>
	                	</div>
	                @endif
	                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>