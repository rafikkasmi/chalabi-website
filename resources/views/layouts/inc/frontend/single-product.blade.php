<div class="custom-col-5">
                                                <div class="single_product" data-toggle="modal" data-target="#modal_box"
                                                data="{{json_encode($product)}}"
                                                                >
                                                    <div class="product_thumb">
                                                        <a href="javascript:void(0)" class="primary_img"><img src="/assets/uploads/products/{{$product->image}}"
                                                                alt="product1"></a>
                                                        <div class="quick_button">
                                                            <a href="javascript:void(0)"
                                                                 >Voir Plus</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="javascript:void(0)">{{$product->category->name}}</a>
                                                        </div>
                                                        <h3><a href="javascript:void(0)">{{$product->name}}</a></h3>
                                                        <div class="price_box">
                                                           @if($product->selling_price != null) <span class="old_price">{{$product->original_price}} Da</span> @endif
                                                            <span class="current_price">{{$product->selling_price!=null ? $product->selling_price : $product->original_price }} Da</span>
                                                        </div>                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            