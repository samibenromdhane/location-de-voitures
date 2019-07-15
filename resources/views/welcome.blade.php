@extends('template.layout')

@section('header')
    @include('template.inc.header')
@endsection

@section('content')
            <div class="wheel-start">
            <img src="images/bg1.jpg" alt="" class="wheel-img">
            <div class="container padd-lr0">
                <div class="col-lg-6 col-lg-push-6 ">
                    <header class="wheel-header marg-lg-b100 marg-lg-t200  marg-md-b0 marg-md-t0">
                        <h1>We Are Wheel  </h1>
                        <h2>Search - Hire - Compare - Save</h2>
                        <span>We Help you Rent Car in 150+ Countries</span>
                    </header>
                </div>
                <div class="col-lg-6 col-lg-pull-6  padd-lr0">
                    <div class="wheel-start-form">
                        <form action="{{route('searchCars')}}" method="POST">
                            @csrf
                            <label for="input-val11"><span>Dropping Off</span>
                            <input type="text" id='input-val11' placeholder="ZIP, City, Airport or Address" required>
                            </label>
                            <label for="input-val12"><span>Picking Up</span>
                            <input type="text" id='input-val12' placeholder="ZIP, City, Airport or Address" required>
                            </label>
                            <div class="clearfix">
                                <div class="wheel-date">
                                    <span>Pickup Date</span>
                                    <label for="input-val13" class="fa fa-calendar">
                                    <input  class="datetimepicker" id='input-val13' type="text" value="29 Apr" name="date_sortie">
                                    </label>
                                </div>
                                <div class="wheel-date ">
                                    <span>Pickup time</span>
                                    <label for="input-val14" class="fa fa-clock-o">
                                    <input class="timepicker" id='input-val14' type="text" value="18:00">
                                    </label>
                                </div>
                                <div class="wheel-date">
                                    <span>Return Date</span>
                                    <label for="input-val15" class="fa fa-calendar">
                                    <input  class="datetimepicker" id='input-val15' type="text" value="29 Apr" name="date_retour">
                                    </label>
                                </div>
                                <div class="wheel-date">
                                    <span>Return Time</span>
                                    <label for="input-val16" class="fa fa-clock-o">
                                    <input class="timepicker" id='input-val16' type="text" value="18:00">
                                    </label>
                                </div>
                                <div class="wheel-date">
                                    <span>Driver’s Age</span>
                                    <select class="selectpicker">
                                        <option>21</option>
                                        <option>22</option>
                                        <option>23</option>
                                        <option>24</option>
                                        <option>25</option>
                                        <option>26</option>
                                        <option>27</option>
                                        <option>28</option>
                                        <option>29</option>
                                        <option>30</option>
                                        <option>31</option>
                                        <option>32</option>
                                        <option>33</option>
                                        <option>34</option>
                                        <option>35</option>
                                        <option>36</option>
                                        <option>37</option>
                                        <option>38</option>
                                        <option>39</option>
                                        <option>40</option>
                                        <option>41</option>
                                        <option>42</option>
                                        <option>43</option>
                                        <option>44</option>
                                        <option>45</option>
                                        <option>46</option>
                                        <option>47</option>
                                        <option>48</option>
                                        <option>49</option>
                                        <option>50</option>
                                    </select>
                                </div>
                                <div class="wheel-date">
                                    <span>Resident</span>
                                    <select class="selectpicker">
                                        <option>USA</option>
                                        <option>UA</option>
                                        <option>UK</option>
                                        <option>AU</option>
                                        <option>LT</option>
                                        <option>JP</option>
                                        <option>IT</option>
                                    </select>
                                </div>
                            </div>
                            <label for="input-val17" class="promo">
                            <input type="text" id='input-val17' placeholder="Promo Code (Optional)">
                            </label>
                            <label for="input-val18" class="promo promo2">
                            <button class="wheel-btn" id="input-val18">Search</button>
                            </label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ////////////////////////////////////////////////////////////// -->
        <div class="wheel-bg2">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="wheel-header text-center marg-lg-t140 marg-lg-b340 marg-md-t140 marg-md-b140 marg-sm-t70 ">
                            <h5>the Biggest Online </h5>
                            <h3>car <span>Rental</span>  Service</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wheel-clients">
            <div class="container padd-lr0">
                <div class="row">
                    <div class="col-md-4 padd-r0 padd-md-lr15">
                        <div class="wheel-service-item text-center wheel-bg3">
                            <div class="wheel-service-logo">
                                <img src="images/ico1.png" alt="">
                            </div>
                            <h5>Most Affordable</h5>
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat </p>
                        </div>
                    </div>
                    <div class="col-md-4 padd-lr0 padd-md-lr15">
                        <div class="wheel-service-item text-center wheel-service-active wheel-bg4">
                            <div class="wheel-service-logo">
                                <img src="images/ico2.png" alt="">
                            </div>
                            <h5>Best Rated</h5>
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat </p>
                        </div>
                    </div>
                    <div class="col-md-4 padd-l0 padd-md-lr15">
                        <div class="wheel-service-item  text-center wheel-bg5">
                            <div class="wheel-service-logo">
                                <img src="images/ico3.png" alt="">
                            </div>
                            <h5>Excellent Service</h5>
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 ">
                    <div class="wheel-service-img">
                        <img src="images/i1.png" alt="" class="wheel-img">
                    </div>
                </div>
            </div>
        </div>
        <!-- /////////////////////////////////////////////////// -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="wheel-header wheel-testi-header text-center marg-lg-t155 marg-lg-b65 marg-md-t50  marg-md-b50">
                        <h3>Our Mission is <span>Client’s</span> Satisfaction</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="wheel-testimonial text-center">
                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                        <div class="wheel-testimonial-info">
                            <span>Anthony Marshal</span>
                            <img src="images/l1.png" alt="">
                            <p> C.E.O. & Co-Founder</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 padd-lr0 ">
                    <div class="wheel-testimonial-item">
                        <i class="fa fa-users"></i>
                        <span data-to="753" data-speed="10000"></span><b>+</b>
                        <p>Dedicated Employees</p>
                    </div>
                    <div class="wheel-testimonial-item">
                        <i class="fa fa-thumbs-o-up"></i>
                        <span data-to="9053" data-speed="5000"></span><b>+</b>
                        <p>Satisfied Customers</p>
                    </div>
                    <div class="wheel-testimonial-item">
                        <i class="fa  fa-car"></i>
                        <span data-to="529" data-speed="6000"></span><b>+</b>
                        <p>100% Fit Veihicles</p>
                    </div>
                    <div class="wheel-testimonial-item">
                        <i class="fa fa-trophy"></i>
                        <span data-to="111" data-speed="1000"></span><b>+</b>
                        <p>Int. Awards Achieved</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /////////////////////////////////////////////////////////// -->
        <div class="wheel-collection wheel-bg2">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="wheel-header text-center marg-lg-t140 marg-lg-b65  marg-md-t50 ">
                            <h5>We have a Great </h5>
                            <h3>collection of <span>vehicles</span></h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="tabs">
                            <div class="tabs-header">
                                <ul>
                                    <li class="active"><a href="#">Most Popular</a></li>
                                    <li><a href="#">Newly Added</a></li>
                                    <li><a href="#">On Sale</a></li>
                                </ul>
                            </div>
                            <div class="tabs-content  marg-lg-b30">
                                <div class="tabs-item active ">
                                    <div class="swiper-container" data-autoplay="0" data-touch="1" data-mouse="0" data-xs-slides="1" data-sm-slides="2" data-md-slides="4" data-lg-slides="6" data-add-slides="6" data-slides-per-view="responsive" data-loop="1" data-speed="1000">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="wheel-collection-item" data-name='2016 Nissan Juke' data-carClass='Luxury Sports Car' data-price='$100' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/z-car-1.png'><img src="images/i3.png" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="wheel-collection-item" data-name='2016 Chevrolet Malibu' data-carClass='Luxury Sports Car' data-price='$100' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i32.jpg'><img src="images/i5.png" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="wheel-collection-item" data-name='Bugatti Veyron' data-carClass='Luxury Sports Car' data-price='2' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i33.jpg'><img src="images/i3.png" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="wheel-collection-item" data-name='2016 Audi S4' data-carClass='Luxury Sports Car' data-price='$10' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i34.jpg'><img src="images/i4.png" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="wheel-collection-item" data-name='2017 Hyundai Santa Fe' data-carClass='Luxury Sports Car' data-price='4' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i36.jpg'><img src="images/i3.png" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="wheel-collection-item" data-name='Porsche Boxter Spyder' data-carClass='Luxury Sports Car' data-price='4' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i37.jpg'><img src="images/i2.png" alt=""></div>
                                            </div>
                                        </div>
                                        <div class="swiper-arrow-left fa fa-angle-left"></div>
                                        <div class="swiper-arrow-right fa fa-angle-right"></div>
                                        <div class="pagination"></div>
                                    </div>
                                </div>
                                <div class="tabs-item  ">
                                    <div class="swiper-container" data-autoplay="0" data-touch="1" data-mouse="0" data-xs-slides="1" data-sm-slides="2" data-md-slides="4" data-lg-slides="6" data-add-slides="6" data-slides-per-view="responsive" data-loop="1" data-speed="1000">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="wheel-collection-item" data-name='2016 Nissan Juke' data-carClass='Luxury Sports Car' data-price='$100' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/z-car-1.png'><img src="images/i3.png" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="wheel-collection-item" data-name='2016 Chevrolet Malibu' data-carClass='Luxury Sports Car' data-price='$100' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i32.jpg'><img src="images/i5.png" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="wheel-collection-item" data-name='Bugatti Veyron' data-carClass='Luxury Sports Car' data-price='2' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i33.jpg'><img src="images/i3.png" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="wheel-collection-item" data-name='2016 Audi S4' data-carClass='Luxury Sports Car' data-price='$10' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i34.jpg'><img src="images/i4.png" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="wheel-collection-item" data-name='2017 Hyundai Santa Fe' data-carClass='Luxury Sports Car' data-price='4' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i36.jpg'><img src="images/i3.png" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="wheel-collection-item" data-name='Porsche Boxter Spyder' data-carClass='Luxury Sports Car' data-price='4' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i37.jpg'><img src="images/i2.png" alt=""></div>
                                            </div>
                                        </div>
                                        <div class="swiper-arrow-left fa fa-angle-left"></div>
                                        <div class="swiper-arrow-right fa fa-angle-right"></div>
                                        <div class="pagination"></div>
                                    </div>
                                </div>
                                <div class="tabs-item  ">
                                    <div class="swiper-container" data-autoplay="0" data-touch="1" data-mouse="0" data-xs-slides="1" data-sm-slides="2" data-md-slides="4" data-lg-slides="6" data-add-slides="6" data-slides-per-view="responsive" data-loop="1" data-speed="1000">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="wheel-collection-item" data-name='2016 Nissan Juke' data-carClass='Luxury Sports Car' data-price='$100' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/z-car-1.png'><img src="images/i3.png" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="wheel-collection-item" data-name='2016 Chevrolet Malibu' data-carClass='Luxury Sports Car' data-price='$100' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i32.jpg'><img src="images/i5.png" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="wheel-collection-item" data-name='Bugatti Veyron' data-carClass='Luxury Sports Car' data-price='2' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i33.jpg'><img src="images/i3.png" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="wheel-collection-item" data-name='2016 Audi S4' data-carClass='Luxury Sports Car' data-price='$10' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i34.jpg'><img src="images/i4.png" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="wheel-collection-item" data-name='2017 Hyundai Santa Fe' data-carClass='Luxury Sports Car' data-price='4' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i36.jpg'><img src="images/i3.png" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="wheel-collection-item" data-name='Porsche Boxter Spyder' data-carClass='Luxury Sports Car' data-price='4' data-text='Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit.' data-bags='2 Bags' data-passenger='2 PASSENGERS' data-speed='5.6/100 MPG' data-img='images/i37.jpg'><img src="images/i2.png" alt=""></div>
                                            </div>
                                        </div>
                                        <div class="swiper-arrow-left fa fa-angle-left"></div>
                                        <div class="swiper-arrow-right fa fa-angle-right"></div>
                                        <div class="pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 padd-lr0">
                        <div class="wheel-collection-info">
                            <div class="wheel-collection-text">
                                <h4 class="car-name">2016 Nissan Juke</h4>
                                <span class="car-class">Luxury Sports Car</span>
                                <h5><b>$79 <sup>00</sup></b>/Day</h5>
                                <p class="car-text">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsu nec sagittis sem nibh id elit. </p>
                                <ul>
                                    <li><i class="fa fa-suitcase"></i><span class="car-bags">2 Bags</span></li>
                                    <li><i class="fa fa-user"></i><span class="car-passengers">2 Passengers</span></li>
                                    <li><i class="fa fa-tachometer"></i><span class="car-speed">5.6/100 MPG</span></li>
                                </ul>
                                <a href="" class="wheel-btn">View All rental Car</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 padd-lr0">
                        <div class="wheel-collection-img"><img src="images/i6.png" alt="" class="car-img"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ////////////////////////////////////////////// -->
        <div class="container padd-lr0">
            <div class="row">
                <div class="col-md-6 ">
                    <div class="wheel-info-img  marg-lg-t150 marg-lg-b150 marg-md-t100 marg-md-b100">
                        <img src="images/i7.png" alt="" class="wheel-img">
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="wheel-info-text  marg-lg-t150 marg-lg-b150 marg-md-t100 marg-md-b100 marg-sm-t50 marg-sm-b50">
                        <div class="wheel-header">
                            <h5>Who we are  </h5>
                            <h3>We Love Our <span>Customers</span></h3>
                        </div>
                        <span>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </span>
                        <p>Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam </p>
                        <a href="" class="wheel-btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ////////////////////////////////////////////////////// -->
        <div class="wheel-deals text-center">
            <img src="images/bg2.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="wheel-header">
                            <h5>Be with us </h5>
                            <h3>We offers great <span>deals</span></h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="wheel-deals-text">
                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                            <a href="" class="wheel-btn">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /////////////////////////////////////////////////////// -->
        <div class="wheel-news  wheel-bg2 ">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="wheel-header text-center marg-lg-t140 marg-lg-b90 marg-md-t50 ">
                            <h5>our Blog </h5>
                            <h3>the Latest <span>news </span></h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 padd-l0  padd-md-lr15">
                        <div class="wheel-news-item   wheel-bg1">
                            <i class="">29 April</i>
                            <div class="wheel-news-item-img">
                                <img src="images/i8.jpg" alt="">
                            </div>
                            <div class="wheel-news-text">
                                <h5><a href="news-details.html">Monotonectally build distinctive convergence and an attempt</a></h5>
                                <p>Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad...</p>
                                <a href="">Read More </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="wheel-news-item   wheel-bg1">
                            <i class="">29 April</i>
                            <div class="wheel-news-item-img">
                                <img src="images/i9.jpg" alt="">
                            </div>
                            <div class="wheel-news-text">
                                <h5><a href="news-details.html">Monotonectally build distinctive convergence and an attempt</a></h5>
                                <p>Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad...</p>
                                <a href="">Read More </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 padd-r0 padd-md-lr15">
                        <div class="wheel-news-item   wheel-bg1">
                            <i class="">29 April</i>
                            <div class="wheel-news-item-img">
                                <img src="images/i10.jpg" alt="">
                            </div>
                            <div class="wheel-news-text">
                                <h5><a href="news-details.html">Monotonectally build distinctive convergence and an attempt</a></h5>
                                <p>Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad...</p>
                                <a href="">Read More </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ////////////////////////////////////// -->
        <div class="container ">
            <div class="row">
                <div class="col-md-6 padd-lr0">
                    <div class="wheel-info-text2 marg-lg-t140 marg-lg-b150 marg-md-t100 marg-md-b50 ">
                        <div class="wheel-header">
                            <h5>Did you know? </h5>
                            <h3>We’ll let you<span> Tow</span></h3>
                        </div>
                        <span>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </span>
                        <p>Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam </p>
                        <a href="" class="wheel-btn">Learn More</a>
                    </div>
                </div>
                <div class="col-md-6 padd-lr0">
                    <div class="wheel-info-video marg-lg-t150 marg-lg-b150 marg-md-t50 marg-md-b50">
                        <iframe  src="https://www.youtube.com/embed/dBlSHIBUx7g"  ></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- //////////////////////////////////////////// -->
        <div class="wheel-quote text-center">
            <img src="images/bg3.jpg" alt="" class="wheel-img">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="swiper-container" data-autoplay="7000" data-touch="1" data-mouse="0" data-xs-slides="1" data-sm-slides="1" data-md-slides="1" data-lg-slides="1" data-add-slides="1" data-slides-per-view="responsive" data-loop="1" data-speed="1000">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="wheel-quote-item">
                                        <div class="wheel-quote-logo"><img src="images/l2.png" alt=""></div>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                        <div class="wheel-quote-stars"><img src="images/stars.png" alt=""></div>
                                        <h6>Catrina Romero</h6>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="wheel-quote-item">
                                        <div class="wheel-quote-logo"><img src="images/l2.png" alt=""></div>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                        <div class="wheel-quote-stars"><img src="images/stars.png" alt=""></div>
                                        <h6>Catrina Romero</h6>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="wheel-quote-item">
                                        <div class="wheel-quote-logo"><img src="images/l2.png" alt=""></div>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                        <div class="wheel-quote-stars"><img src="images/stars.png" alt=""></div>
                                        <h6>Catrina Romero</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination"></div>
                        </div>
                        <div class="swiper-outer-left fa fa-angle-left"></div>
                        <div class="swiper-outer-right fa fa-angle-right"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="wheel-quote-partners">
                            <a href=""><img src="images/p1.png" alt=""></a>
                            <a href=""><img src="images/p2.png" alt=""></a>
                            <a href=""><img src="images/p3.png" alt=""></a>
                            <a href=""><img src="images/p4.png" alt=""></a>
                            <a href=""><img src="images/p5.png" alt=""></a>
                            <a href=""><img src="images/p6.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /////////////////////////////// -->
        <div class="wheel-subscribe wheel-bg2">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 padd-lr0">
                        <div class="wheel-header">
                            <h5>Newsletter Signup </h5>
                            <h3>Subscribe & get<span> 20% </span> Off</h3>
                        </div>
                    </div>
                    <div class="col-md-6 padd-lr0">
                        <form action="#">
                            <input type="text" placeholder="Your Email Adddress">
                            <button class="wheel-btn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection

@section('footer')
    @include('template.inc.footer')
@endsection