<div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="banner_text">
                            <h2>Les Prix <span>({{$newestPriceChange}})</span> :</h2>
                              @foreach ( $prices_table as $price )
                           <tr>
                               <div class="price-range">
                                <p>{{$price->name}} : </p>
                            <p><span>{{$price->from}}</span> Da - <span>{{$price->to}}</span> Da</p>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>