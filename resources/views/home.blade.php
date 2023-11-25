
@extends('layout.app')

@section('content')

    <div class="container px-6 mx-auto">
        <h3 class="text-2xl font-medium text-gray-700">Product List</h3>
    </div>
    <div class="container">
        <div class="loader-container">
            <div class="loader"></div>
        </div>
        <div id="content" class="my-5">
            <div id="filterbar" class="">
                <div class="box border-bottom">
                    <div class="form-group text-center"> 
                        <div class="btn-group" data-toggle="buttons">
                            <a class="btn btn-success form-check-label" href="{{ route('home')}}">Reset</a>
                            <button class="btn btn-success form-check-label active" id="applyFilters">Apply </button>
                        </div>
                    </div>
                    <label>Categories:</label>
                    @foreach($categories as $category)
                        <div>
                            <label class="tick">{{$category->category_name}} <input type="checkbox" name="categories[]" value="{{$category->id}}"> <span class="check"></span> </label> 
                        </div>
                    @endforeach
                </div> 
                <div class="box border-bottom"> 
                    <label>Brands:</label>
                    @foreach($brands as $brand)
                    <div>
                        <label class="tick">{{$brand->brand_name}} <input type="checkbox" name="brands[]" value="{{$brand->id}}"> <span class="check"></span> </label> 
                    </div>
                    @endforeach
                </div> 
                <div class="box border-bottom"> 
                    <label>Discount:</label>
                    <div>
                        <label class="tick">Discount<input type="checkbox" name="discount[]" value="YES"> <span class="check"></span> </label> 
                    </div>
                </div> 
            </div> 
            <div id="products">
                <div id="product-lists" class="row mx-0 "> 
                   //product
                </div>
                <div id="not-found-message" class="not-found-message" style="display: none;">
                    <p>Items not found</p>
                </div>
            </div> 
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        
            $(window).on('load', function() {
                $('.loader-container').fadeOut('slow'); 
            });

        $(document).ready(function() {
            
            function applyFiltersAndFetchProducts() {
                var selectedCategories = [];
                var selectedBrands = [];
                var selectedDiscounts = [];
                
                $('input[name="categories[]"]:checked').each(function() {
                    selectedCategories.push($(this).val());
                });
                
                $('input[name="brands[]"]:checked').each(function() {
                    selectedBrands.push($(this).val());
                });

                $('input[name="discount[]"]:checked').each(function() {
                    selectedDiscounts.push($(this).val());
                });


                $('.loader-container').fadeIn('slow');
 
                $.ajax({
                    url: "{{ route('filter.products') }}",
                    type: "GET",
                    data: {
                        categories: selectedCategories,
                        brands: selectedBrands,
                        discount: selectedDiscounts,
                    },
                    success: function(response) {
                        console.log(response.status); 

                        var productListHTML = '';
                        if(response.status == true){
                            $('#not-found-message').hide();
                            response.data.forEach(function(product) {
                
                                // Original price and discounted price
                                    var originalPrice = product.product_original_price;
                                    var discountedPrice = product.product_discount_price;

                                // Calculate the percentage discount
                                    var discountPercentage = ((originalPrice - discountedPrice) / originalPrice) * 100;

                                productListHTML += '<div class="col-lg-4 col-md-6 p-3"><div class="card d-flex flex-column align-items-center"><div class="product-name">' + product.product_name + '</div><div class="card-img"><img src="' + product.product_image + '" alt=""></div>';
                                
                                if(product.product_has_discount == 'YES'){
                                    productListHTML += '<div class=" align-items-start" style=" font-size: 10px"> Discount: <span style=" color: crimson; font-size: 9px">' + discountPercentage.toFixed(2) + '</span>%</div>';
                                    productListHTML += '<div class="card-body pt-2"><div class="d-flex align-items-center price">';
                                    productListHTML += '<div class="del mr-2"><span class="text-dark" style=" font-size: 14px">₹ ' + product.product_original_price + ' </span></div>';
                                    productListHTML += '<div class="font-weight-bold">₹ ' + product.product_discount_price + '  </div></div><form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">@csrf<input type="hidden" value="' + product.id + '" name="id"><input type="hidden" value="' + product.product_name + '" name="name"><input type="hidden" value="' + product.product_discount_price + '" name="price"><input type="hidden" value="' + product.product_image + '"  name="image"><input type="hidden" value="1" name="quantity"><button class="px-4 py-2 ml-4 mt-3 text-white bg-blue-800 rounded">Add To Cart</button></form></div></div></div>';
                                }else{
                                    productListHTML += '<div class="card-body pt-2"><div class="d-flex align-items-center price">';
                                    productListHTML += '<div class="font-weight-bold">₹ ' + product.product_original_price + '  </div></div><form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">@csrf<input type="hidden" value="' + product.id + '" name="id"><input type="hidden" value="' + product.product_name + '" name="name"><input type="hidden" value="' + product.product_original_price + '" name="price"><input type="hidden" value="' + product.product_image + '"  name="image"><input type="hidden" value="1" name="quantity"><button class="px-4 py-2 ml-4 mt-3 text-white bg-blue-800 rounded">Add To Cart</button></form></div></div></div>'
                                }
                                
                            });
                        }else{
                            $('#not-found-message').show();
                        }

                        $('#product-lists').html(productListHTML);
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
                $('.loader-container').fadeOut('slow');
            }
            applyFiltersAndFetchProducts();

            $('#applyFilters').on('click', function() {
                applyFiltersAndFetchProducts();
            });
            
        });
    </script>

@endsection