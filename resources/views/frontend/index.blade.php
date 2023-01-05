@extends('layouts.front')

@section('title')
Page D'Accueil
@endsection

@section('content')


    @include('layouts.inc.frontend.slider')
       
        <!-- banner section starts -->
        <section class="banner_section banner_black">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <a href="#"><img src="images/banner/bg-1.jpg" alt="banner1"></a>
                             
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <a href="#"><img src="images/banner/bg-2.jpg" alt="banner2"></a>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <a href="#"><img src="images/banner/bg-3.jpg" alt="banner3"></a>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner section ends -->
        <!-- product section area starts  -->

        <section class="product_section p_section1 product_black_section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product_area">
                            <div class="product_tab_button">
                                <ul class="nav" role="tablist">
                                    <li>
                                        <a href="#featured" class="active" data-toggle="tab" role="tab"
                                            aria-controls="featured" aria-selected="true">Nos Produits</a>
                                    </li>
                                 </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="featured" role="tabpane1">
                                    <div class="product_container">
                                        <div class="custom-row product_column3">
                                          @foreach($products as $product)

                                          @include('layouts.inc.frontend.single-product',['product'=>$product])

                                          @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- banner full width start -->
        <section class="banner_fullwidth black_fullwidth">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="banner_text">
                            <h2>Nos Collections de Tendances </h2>
                            <span>Les meilleurs designs disponible dans le marché.</span>
                            <a href="/products">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner full width end -->

         <!-- banner full width start -->
        <section class="table_page">
          @include('layouts.inc.frontend.prices')      
        </section>
        <!-- banner full width end -->

        
        
 
@endsection

