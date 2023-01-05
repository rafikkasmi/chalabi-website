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
                                        <li><a href="https://www.facebook.com/Bijouteriechalabi"><i class="ion-social-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/BijouterieChal1"><i class="ion-social-twitter"></i></a></li>
                                        <li><a href="https://www.instagram.com/bijouteriechalabi"><i class="ion-social-instagram"></i></a></li>
                                        <li><a href="https://www.youtube.com/@bijouteriechalabi9694"><i class="ion-social-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                       
                     <div class="col-lg-6 col-md-6 col-sm-8 map"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3197.321316113265!2d3.3401535000000004!3d36.738857800000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128e4356733eb0e3%3A0x25e7beb554250c7a!2sBijouterie%20Chalabi!5e0!3m2!1sen!2suk!4v1672947593137!5m2!1sen!2suk"><a href="https://www.maps.ie/distance-area-calculator.html">area maps</a></iframe></div>
                       
                    </div>
                </div>
                <div class="footer_bottom">
                    <div class="row">
                        <div class="col-12">
                            <div class="copyright_area">
                                <p>Copyright
                                    ©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>,                              
                                <a href="#">Bijouterie Chalabi</a> All rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </footer>
        <!-- footer section ends -->