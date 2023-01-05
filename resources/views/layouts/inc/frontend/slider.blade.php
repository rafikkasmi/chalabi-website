 <!-- slider section starts -->
        <div class="slider_area slider_black owl-carousel">
            @for($i=1;$i<=3;$i++)

            <div class="single_slider" data-bgimg="{{$store_data['slider_image'.$i]}}">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="slider_content">
                                <h1 class="mb-3">{{$store_data['slider_headline'.$i]}}</h1>
                                <p class="slider_price">{{$store_data['slider_text'.$i]}}</p>
                                <a href="/products" class="button">Nos Produits</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endfor

        </div>
        <!-- slider section ends -->