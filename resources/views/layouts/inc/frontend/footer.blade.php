<!-- footer section starts -->
        <footer class="footer_widgets footer_black">
            <div class="container">
                <div class="footer_top">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-8">
                            <div class="widgets_container contact_us">
                                <h3>Bijouterie Chalabi</h3>
                                <div class="footer_contact">
                                    <p>Adresse : {{$store_data->address}}</p>
                                    <p>Telephone : <a href="tel:(+213){{$store_data->phone_number}}">(+213){{$store_data->phone_number}}</a></p>
                                    @if ($store_data->secondary_phone_number != null) <p>2eme Telephone : <a href="tel:(+213){{$store_data->secondary_phone_number}}">(+213){{$store_data->secondary_phone_number}}</a></p> @endif
                                    @if ($store_data->email != null) <p>Email : {{$store_data->email}}</p> @endif
                                    <ul>
                                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                        <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                       
                     <div class="col-lg-6 col-md-6 col-sm-8 map"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=300&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">area maps</a></iframe></div>
                       
                    </div>
                </div>
                <div class="footer_bottom">
                    <div class="row">
                        <div class="col-12">
                            <div class="copyright_area">
                                <p>Copyright &copy; 2022 <a href="#">Challabi Jewelry</a> All rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </footer>
        <!-- footer section ends -->