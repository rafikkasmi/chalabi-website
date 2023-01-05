<header class="header_area header_black">
            <!-- header top starts -->
            <div class="header_top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="social_icone">
                                <ul>
                                    <li><a href="https://www.facebook.com/Bijouteriechalabi"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/BijouterieChal1"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/bijouteriechalabi"><i class="ion-social-instagram"></i></a></li>
                                    <li><a href="https://www.youtube.com/@bijouteriechalabi9694"><i class="ion-social-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header top ends -->

            <!-- header middle starts -->
            <div class="header_middel">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-5">
                            <div class="home_contact">
                                <div class="contact_icone">
                                    <img src="images/icon/icon_phone.png" alt="">
                                </div>
                                <div class="contact_box">
                                    <p><a href="tel: {{ $store_data->phone_number }}">{{ $store_data->phone_number }}</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-3 col-4">
                            <div class="logo">
                                <a href="/"><img src="/images/logo/logo.png" alt=""></a>
                            </div>
                        </div>

                        <div class="col-lg-5 col-md-7 col-6">
                            <div class="middel_right">
                                <div class="search_btn">
                                    <a href="#"><i class="ion-ios-search-strong"></i></a>
                                    <div class="dropdown_search">
                                        <form action="{{ url('/search') }}">
                                            <input type="text" name="query" placeholder="Search Product ....">
                                            <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                        </form>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- header middle ends -->

            <!-- header bottom starts -->

            <div class="header_bottom sticky-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="main_menu_inner">
                                <div class="logo_sticky">
                                    <a href="#"><img src="/images/logo/logo.png" alt="logo"></a>
                                </div>
                                <div class="main_menu">
                                    <nav>
                                        <ul>
                                            <li class="active">
                                                <a href="/">Accueil</i></a>
                                            </li>
                                            <li>
                                                <a href="#">Categories <i class="ion-chevron-down"></i></a>
                                                <ul class="sub_menu pages">
                                                    @foreach ($categories as $category)
                                                    <li><a href="/products?category={{$category->id}}">{{$category->name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Diamonds <i class="ion-chevron-down"></i></a>
                                                <ul class="sub_menu pages">
                                                            @foreach ($categories as $category)
                                                            @if($category->name != "Parures en Or")
                                                    <li><a href="/products?category={{$category->id}}&type=2">{{$category->name}}</a></li>
                                                            @endif
                                                            @endforeach 
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Collections Specials <i class="ion-chevron-down"></i></a>
                                                <ul class="sub_menu pages">
                                                    @foreach ($brands as $brand)
                                                    <li><a href="/products?brand={{$brand->id}}">{{$brand->name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</header>