<section id="products" class="wrapper view">
    <div class="page-wrapper">
        <div class="container">
            <div class="col-md-12">
                <h1 class="card-header page-header wow fadeInDown">Our Products</h1>
                <br>

                <div class="row wow fadeInUp" data-wow-duration="1s">

                @foreach($products as $product)
                    <div class="col-sm-12 col-md-3">
                        <div class="card z-depth-2">
                            <!--Card image-->
                            <div class="view hm-black-light hm-zoom">
                                <img src="{{ $product->image_url }}" class="img-fluid product-image" alt="Product">
                                <a onclick='openModal("{{ $product->name }}", "{{ str_replace(PHP_EOL, "", $product->description) }}", "{{ $product->image_url }}")'>
                                    <div class="mask flex-center">
                                        <p class="white-text">{{ $product->name }}</p> 
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

                </div>
            </div>
        </div>
    </div>
</section>