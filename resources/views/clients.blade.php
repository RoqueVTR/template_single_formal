<section id="clients" class="wrapper view grey lighten-4">
    <div class="page-wrapper">
        <div class="container">
            <div class="col-md-12">
                <h1 class="card-header page-header wow fadeInDown">Our Clients</h1>
                <br>
                <div class="col-md-12">
                	<div class="row">
                	@foreach($clients as $client)
	                	<div class="card-block col-md-2 col-sm-6 client flex-center wow fadeInUp">
	                		<img src="{{ $client->image_url }}" alt="Client" title="{{ $client->name }} since {{ $client->client_at }}" class="img-fluid client-image">
	                	</div>
	               	@endforeach
	                </div>
                </div>
            </div>
        </div>
    </div>
</section>