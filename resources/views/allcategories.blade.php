<<<<<<< HEAD
@extends('layouts.master')

@section('content')
<!-- Products -->
<div class="total-ads main-grid-border">
  <div class="container">
    <div class="all-categories">
      <h3> Select your category and find the perfect ad</h3>
      <ul class="all-cat-list">
        <li><a href="mobiles.html">Mobiles <span class="num-of-ads">(5,78,076)</span></a></li>
        <li><a href="electronics-appliances.html">Electronics & Appliances  <span class="num-of-ads">(3,66,495)</span></a></li>
        <li><a href="real-estate.html">Real Estate  <span class="num-of-ads">(45,450)</span></a></li>
        <li><a href="furnitures.html">Furniture    <span class="num-of-ads">(1,77,145)</span></a></li>
        <li><a href="pets.html">Pets   <span class="num-of-ads">(1,81,250)</span></a></li>
        <li><a href="books-sports-hobbies.html">Books, Sports & Hobbies    <span class="num-of-ads">(66,822)</span></a></li>
        <li><a href="fashion.html">Fashion   <span class="num-of-ads">(29,156)</span></a></li>
        <li><a href="kids.html">Kids   <span class="num-of-ads">(25,699)</span></a></li>
        <li><a href="services.html">Services   <span class="num-of-ads">(2,15,895)</span></a></li>
        <li><a href="cars.html">Cars   <span class="num-of-ads">(2,15,306)</span></a></li>
      </ul>
    </div>
    <div class="ads-grid">
      <div class="side-bar col-md-3">
        <div class="search-hotel">
        <h3 class="agileits-sear-head">Name contains</h3>
        <form>
          <input type="text" value="Product name..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Product name...';}" required="">
          <input type="submit" value=" ">
        </form>
      </div>

      <div class="range">
        <h3 class="agileits-sear-head">Price range</h3>
            <ul class="dropdown-menu6">
              <li>

                <div id="slider-range"></div>
                  <input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
                </li>
            </ul>
            <!---->
            <script type="text/javascript" src="js/jquery-ui.js"></script>
            <script type='text/javascript'>//<![CDATA[
            $(window).load(function(){
             $( "#slider-range" ).slider({
                  range: true,
                  min: 0,
                  max: 9000,
                  values: [ 50, 6000 ],
                  slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
                  }
             });
            $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

            });//]]>

            </script>

      </div>
      <div class="w3ls-featured-ads">
        <h2 class="sear-head fer">Featured Ads</h2>
        <div class="w3l-featured-ad">
          <a href="single">
            <div class="w3-featured-ad-left">
              <img src="images/f1.jpg" title="ad image" alt="" />
            </div>
            <div class="w3-featured-ad-right">
              <h4>Lorem Ipsum is simply dummy text of the printing industry</h4>
              <p>$ 450</p>
            </div>
            <div class="clearfix"></div>
          </a>
        </div>
        <div class="w3l-featured-ad">
          <a href="single">
            <div class="w3-featured-ad-left">
              <img src="images/f2.jpg" title="ad image" alt="" />
            </div>
            <div class="w3-featured-ad-right">
              <h4>Lorem Ipsum is simply dummy text of the printing industry</h4>
              <p>$ 380</p>
            </div>
            <div class="clearfix"></div>
          </a>
        </div>
        <div class="w3l-featured-ad">
          <a href="single">
            <div class="w3-featured-ad-left">
              <img src="images/f3.jpg" title="ad image" alt="" />
            </div>
            <div class="w3-featured-ad-right">
              <h4>Lorem Ipsum is simply dummy text of the printing industry</h4>
              <p>$ 560</p>
            </div>
            <div class="clearfix"></div>
          </a>
        </div>
        <div class="clearfix"></div>
      </div>

      </div>

      <div class="agileinfo-ads-display col-md-9">
        <div class="wrapper">
        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
          <ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
          <li role="presentation" class="active">
            <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
            <span class="text">All Ads</span>
            </a>
          </li>
          <li role="presentation" class="next">
            <a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
            <span class="text">Ads with Photos</span>
            </a>
          </li>
          <li role="presentation">
            <a href="#samsa" role="tab" id="samsa-tab" data-toggle="tab" aria-controls="samsa">
            <span class="text">Company</span>
            </a>
          </li>
          </ul>
          <div id="myTabContent" class="tab-content">
          <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
             <div>
                      <div id="container">
              <div class="view-controls-list" id="viewcontrols">
                <label>view :</label>
                <a class="gridview"><i class="glyphicon glyphicon-th"></i></a>
                <a class="listview active"><i class="glyphicon glyphicon-th-list"></i></a>
              </div>
              <div class="sort">
                 <div class="sort-by">
                  <label>Sort By : </label>
                  <select>
                          <option value="">Most recent</option>
                          <option value="">Price: Rs Low to High</option>
                          <option value="">Price: Rs High to Low</option>
                  </select>
                   </div>
                 </div>

              @foreach($photos as $ph)
              {{$ph}}
              @endforeach
              
              @foreach($produces as $produce)
                    {{$produce->id}}
                  <div class="clearfix"></div>
                <ul class="list">
                  <a href="single">
                    <li>
                    <img src="images/m1.jpg" title="" alt="" />
                    <section class="list-left">
                    <h5 class="title">There are many variations of passages of Lorem Ipsum</h5>
                    <span class="adprice">$290</span>
                    <p class="catpath">Mobile Phones » Brand</p>
                    </section>
                    <section class="list-right">
                    <span class="date">Today, 17:55</span>
                    <span class="cityname">City name</span>
                    </section>
                    <div class="clearfix"></div>
                    </li>
                  </a>
              @endforeach

              <a href="single">
                <li>
                <img src="images/m2.jpg" title="" alt="" />
                <section class="list-left">
                <h5 class="title">It is a long established fact that a reader long established</h5>
                <span class="adprice">$310</span>
                <p class="catpath">Mobile Phones » Brand</p>
                </section>
                <section class="list-right">
                <span class="date">Today, 17:45</span>
                <span class="cityname">City name</span>
                </section>
                <div class="clearfix"></div>
                </li>
              </a>

            </ul>
          </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
           <div>
                      <div id="container">
              <div class="view-controls-list" id="viewcontrols">
                <label>view :</label>
                <a class="gridview"><i class="glyphicon glyphicon-th"></i></a>
                <a class="listview active"><i class="glyphicon glyphicon-th-list"></i></a>
              </div>
              <div class="sort">
                 <div class="sort-by">
                  <label>Sort By : </label>
                  <select>
                          <option value="">Most recent</option>
                          <option value="">Price: Rs Low to High</option>
                          <option value="">Price: Rs High to Low</option>
                  </select>
                   </div>
                 </div>
              <div class="clearfix"></div>
            <ul class="list">
              <a href="single">
                <li>
                <img src="images/m1.jpg" title="" alt="" />
                <section class="list-left">
                <h5 class="title">There are many variations of passages of Lorem Ipsum</h5>
                <span class="adprice">$290</span>
                <p class="catpath">Mobile Phones » Brand</p>
                </section>
                <section class="list-right">
                <span class="date">Today, 17:55</span>
                <span class="cityname">City name</span>
                </section>
                <div class="clearfix"></div>
                </li>
              </a>
              <a href="single">
                <li>
                <img src="images/m2.jpg" title="" alt="" />
                <section class="list-left">
                <h5 class="title">It is a long established fact that a reader long established</h5>
                <span class="adprice">$310</span>
                <p class="catpath">Mobile Phones » Brand</p>
                </section>
                <section class="list-right">
                <span class="date">Today, 17:45</span>
                <span class="cityname">City name</span>
                </section>
                <div class="clearfix"></div>
                </li>
              </a>
              <a href="single">
                <li>
                <img src="images/m3.jpg" title="" alt="" />
                <section class="list-left">
                <h5 class="title">Contrary to popular belief, Lorem Ipsum is not</h5>
                <span class="adprice">$190</span>
                <p class="catpath">Mobile Phones » Brand</p>
                </section>
                <section class="list-right">
                <span class="date">Today, 17:30</span>
                <span class="cityname">City name</span>
                </section>
                <div class="clearfix"></div>
                </li>
              </a>
              <a href="single">
                <li>
                <img src="images/m4.jpg" title="" alt="" />
                <section class="list-left">
                <h5 class="title">The standard chunk of Lorem Ipsum used since the</h5>
                <span class="adprice">$480</span>
                <p class="catpath">Mobile Phones » Brand</p>
                </section>
                <section class="list-right">
                <span class="date">Today, 17:25</span>
                <span class="cityname">City name</span>
                </section>
                <div class="clearfix"></div>
                </li>
              </a>
              <a href="single">
                <li>
                <img src="images/m5.jpg" title="" alt="" />
                <section class="list-left">
                <h5 class="title">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</h5>
                <span class="adprice">$859</span>
                <p class="catpath">Mobile Phones » Brand</p>
                </section>
                <section class="list-right">
                <span class="date">Today, 17:24</span>
                <span class="cityname">City name</span>
                </section>
                <div class="clearfix"></div>
                </li>
              </a>
              <a href="single">
                <li>
                <img src="images/m6.jpg" title="" alt="" />
                <section class="list-left">
                <h5 class="title">But I must explain to you how all this mistaken idea of denouncing</h5>
                <span class="adprice">$1299</span>
                <p class="catpath">Mobile Phones » Brand</p>
                </section>
                <section class="list-right">
                <span class="date">Today, 17:22</span>
                <span class="cityname">City name</span>
                </section>
                <div class="clearfix"></div>
                </li>
              </a>
              <a href="single">
                <li>
                <img src="images/m1.jpg" title="" alt="" />
                <section class="list-left">
                <h5 class="title">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</h5>
                <span class="adprice">$1099</span>
                <p class="catpath">Mobile Phones » Brand</p>
                </section>
                <section class="list-right">
                <span class="date">Today, 17:21</span>
                <span class="cityname">City name</span>
                </section>
                <div class="clearfix"></div>
                </li>
              </a>
              <a href="single">
                <li>
                <img src="images/m7.jpg" title="" alt="" />
                <section class="list-left">
                <h5 class="title">On the other hand, we denounce with righteous dislike men</h5>
                <span class="adprice">$290</span>
                <p class="catpath">Mobile Phones » Brand</p>
                </section>
                <section class="list-right">
                <span class="date">Today, 17:20</span>
                <span class="cityname">City name</span>
                </section>
                <div class="clearfix"></div>
                </li>
              </a>
              <a href="single">
                <li>
                <img src="images/m8.jpg" title="" alt="" />
                <section class="list-left">
                <h5 class="title">There are many variations of passages of Lorem Ipsum</h5>
                <span class="adprice">$899</span>
                <p class="catpath">Mobile Phones » Brand</p>
                </section>
                <section class="list-right">
                <span class="date">Today, 17:05</span>
                <span class="cityname">City name</span>
                </section>
                <div class="clearfix"></div>
                </li>
              </a>
              <a href="single">
                <li>
                <img src="images/m9.jpg" title="" alt="" />
                <section class="list-left">
                <h5 class="title">ducimus qui blanditiis praesentium voluptatum quos dolores et qua</h5>
                <span class="adprice">$199</span>
                <p class="catpath">Mobile Phones » Brand</p>
                </section>
                <section class="list-right">
                <span class="date">Today, 17:04</span>
                <span class="cityname">City name</span>
                </section>
                <div class="clearfix"></div>
                </li>
              </a>
              <a href="single">
                <li>
                <img src="images/m10.jpg" title="" alt="" />
                <section class="list-left">
                <h5 class="title">There are many variations of passages of Lorem Ipsum</h5>
                <span class="adprice">$250</span>
                <p class="catpath">Mobile Phones » Brand</p>
                </section>
                <section class="list-right">
                <span class="date">Today, 17:03</span>
                <span class="cityname">City name</span>
                </section>
                <div class="clearfix"></div>
                </li>
              </a>
              <a href="single">
                <li>
                <img src="images/m11.jpg" title="" alt="" />
                <section class="list-left">
                <h5 class="title">who are so beguiled and demoralized by the charms of pleasure of the moment</h5>
                <span class="adprice">$189</span>
                <p class="catpath">Mobile Phones » Brand</p>
                </section>
                <section class="list-right">
                <span class="date">Today, 17:03</span>
                <span class="cityname">City name</span>
                </section>
                <div class="clearfix"></div>
                </li>
              </a>
              <a href="single">
                <li>
                <img src="images/m12.jpg" title="" alt="" />
                <section class="list-left">
                <h5 class="title">you need to be sure there isn't anything embarrassing hidden</h5>
                <span class="adprice">$1090</span>
                <p class="catpath">Mobile Phones » Brand</p>
                </section>
                <section class="list-right">
                <span class="date">Today, 17:03</span>
                <span class="cityname">City name</span>
                </section>
                <div class="clearfix"></div>
                </li>
              </a>
              <a href="single">
                <li>
                <img src="images/m13.jpg" title="" alt="" />
                <section class="list-left">
                <h5 class="title">looked up one of the more obscure Latin words</h5>
                <span class="adprice">$599</span>
                <p class="catpath">Mobile Phones » Brand</p>
                </section>
                <section class="list-right">
                <span class="date">Today, 17:02</span>
                <span class="cityname">City name</span>
                </section>
                <div class="clearfix"></div>
                </li>
              <div class="clearfix"></div>
              </a>
            </ul>
          </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="samsa" aria-labelledby="samsa-tab">
            <div>
                      <div id="container">
              <div class="view-controls-list" id="viewcontrols">
                <label>view :</label>
                <a class="gridview"><i class="glyphicon glyphicon-th"></i></a>
                <a class="listview active"><i class="glyphicon glyphicon-th-list"></i></a>
              </div>
              <div class="sort">
                 <div class="sort-by">
                  <label>Sort By : </label>
                  <select>
                          <option value="">Most recent</option>
                          <option value="">Price: Rs Low to High</option>
                          <option value="">Price: Rs High to Low</option>
                  </select>
                   </div>
                 </div>
              <div class="clearfix"></div>
            <ul class="list">
              <a href="single">
                <li>
                <img src="images/m1.jpg" title="" alt="" />
                <section class="list-left">
                <h5 class="title">There are many variations of passages of Lorem Ipsum</h5>
                <span class="adprice">$290</span>
                <p class="catpath">Mobile Phones » Brand</p>
                </section>
                <section class="list-right">
                <span class="date">Today, 17:55</span>
                <span class="cityname">City name</span>
                </section>
                <div class="clearfix"></div>
                </li>
              </a>
              <a href="single">
                <li>
                <img src="images/m2.jpg" title="" alt="" />
                <section class="list-left">
                <h5 class="title">It is a long established fact that a reader long established</h5>
                <span class="adprice">$310</span>
                <p class="catpath">Mobile Phones » Brand</p>
                </section>
                <section class="list-right">
                <span class="date">Today, 17:45</span>
                <span class="cityname">City name</span>
                </section>
                <div class="clearfix"></div>
                </li>
              </a>
              <a href="single">
                <li>
                <img src="images/m3.jpg" title="" alt="" />
                <section class="list-left">
                <h5 class="title">Contrary to popular belief, Lorem Ipsum is not</h5>
                <span class="adprice">$190</span>
                <p class="catpath">Mobile Phones » Brand</p>
                </section>
                <section class="list-right">
                <span class="date">Today, 17:30</span>
                <span class="cityname">City name</span>
                </section>
                <div class="clearfix"></div>
                </li>
              </a>
              <a href="single">
                <li>
                <img src="images/m4.jpg" title="" alt="" />
                <section class="list-left">
                <h5 class="title">The standard chunk of Lorem Ipsum used since the</h5>
                <span class="adprice">$480</span>
                <p class="catpath">Mobile Phones » Brand</p>
                </section>
                <section class="list-right">
                <span class="date">Today, 17:25</span>
                <span class="cityname">City name</span>
                </section>
                <div class="clearfix"></div>
                </li>
              </a>
              <a href="single">
                <li>
                <img src="images/m5.jpg" title="" alt="" />
                <section class="list-left">
                <h5 class="title">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</h5>
                <span class="adprice">$859</span>
                <p class="catpath">Mobile Phones » Brand</p>
                </section>
                <section class="list-right">
                <span class="date">Today, 17:24</span>
                <span class="cityname">City name</span>
                </section>
                <div class="clearfix"></div>
                </li>
              </a>
              <a href="single">
                <li>
                <img src="images/m6.jpg" title="" alt="" />
                <section class="list-left">
                <h5 class="title">But I must explain to you how all this mistaken idea of denouncing</h5>
                <span class="adprice">$1299</span>
                <p class="catpath">Mobile Phones » Brand</p>
                </section>
                <section class="list-right">
                <span class="date">Today, 17:22</span>
                <span class="cityname">City name</span>
                </section>
                <div class="clearfix"></div>
                </li>
              </a>
              <a href="single">
                <li>
                <img src="images/m12.jpg" title="" alt="" />
                <section class="list-left">
                <h5 class="title">you need to be sure there isn't anything embarrassing hidden</h5>
                <span class="adprice">$1090</span>
                <p class="catpath">Mobile Phones » Brand</p>
                </section>
                <section class="list-right">
                <span class="date">Today, 17:03</span>
                <span class="cityname">City name</span>
                </section>
                <div class="clearfix"></div>
                </li>
              </a>
              <a href="single">
                <li>
                <img src="images/m1.jpg" title="" alt="" />
                <section class="list-left">
                <h5 class="title">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</h5>
                <span class="adprice">$1099</span>
                <p class="catpath">Mobile Phones » Brand</p>
                </section>
                <section class="list-right">
                <span class="date">Today, 17:21</span>
                <span class="cityname">City name</span>
                </section>
                <div class="clearfix"></div>
                </li>
              </a>
              <a href="single">
                <li>
                <img src="images/m7.jpg" title="" alt="" />
                <section class="list-left">
                <h5 class="title">On the other hand, we denounce with righteous dislike men</h5>
                <span class="adprice">$290</span>
                <p class="catpath">Mobile Phones » Brand</p>
                </section>
                <section class="list-right">
                <span class="date">Today, 17:20</span>
                <span class="cityname">City name</span>
                </section>
                <div class="clearfix"></div>
                </li>
              </a>
              <a href="single">
                <li>
                <img src="images/m8.jpg" title="" alt="" />
                <section class="list-left">
                <h5 class="title">There are many variations of passages of Lorem Ipsum</h5>
                <span class="adprice">$899</span>
                <p class="catpath">Mobile Phones » Brand</p>
                </section>
                <section class="list-right">
                <span class="date">Today, 17:05</span>
                <span class="cityname">City name</span>
                </section>
                <div class="clearfix"></div>
                </li>
              </a>
              <a href="single">
                <li>
                <img src="images/m13.jpg" title="" alt="" />
                <section class="list-left">
                <h5 class="title">looked up one of the more obscure Latin words</h5>
                <span class="adprice">$599</span>
                <p class="catpath">Mobile Phones » Brand</p>
                </section>
                <section class="list-right">
                <span class="date">Today, 17:02</span>
                <span class="cityname">City name</span>
                </section>
                <div class="clearfix"></div>
                </li>
              </a>
              <a href="single">
                <li>
                <img src="images/m9.jpg" title="" alt="" />
                <section class="list-left">
                <h5 class="title">ducimus qui blanditiis praesentium voluptatum quos dolores et qua</h5>
                <span class="adprice">$199</span>
                <p class="catpath">Mobile Phones » Brand</p>
                </section>
                <section class="list-right">
                <span class="date">Today, 17:04</span>
                <span class="cityname">City name</span>
                </section>
                <div class="clearfix"></div>
                </li>
              </a>
              <a href="single">
                <li>
                <img src="images/m10.jpg" title="" alt="" />
                <section class="list-left">
                <h5 class="title">There are many variations of passages of Lorem Ipsum</h5>
                <span class="adprice">$250</span>
                <p class="catpath">Mobile Phones » Brand</p>
                </section>
                <section class="list-right">
                <span class="date">Today, 17:03</span>
                <span class="cityname">City name</span>
                </section>
                <div class="clearfix"></div>
                </li>
              </a>
              <a href="single">
                <li>
                <img src="images/m12.jpg" title="" alt="" />
                <section class="list-left">
                <h5 class="title">you need to be sure there isn't anything embarrassing hidden</h5>
                <span class="adprice">$1090</span>
                <p class="catpath">Mobile Phones » Brand</p>
                </section>
                <section class="list-right">
                <span class="date">Today, 17:03</span>
                <span class="cityname">City name</span>
                </section>
                <div class="clearfix"></div>
                </li>
              </a>
              <a href="single">
                <li>
                <img src="images/m11.jpg" title="" alt="" />
                <section class="list-left">
                <h5 class="title">who are so beguiled and demoralized by the charms of pleasure of the moment</h5>
                <span class="adprice">$189</span>
                <p class="catpath">Mobile Phones » Brand</p>
                </section>
                <section class="list-right">
                <span class="date">Today, 17:03</span>
                <span class="cityname">City name</span>
                </section>
                <div class="clearfix"></div>
                </li>
              </a>

              <a href="single">
                <li>
                <img src="images/m4.jpg" title="" alt="" />
                <section class="list-left">
                <h5 class="title">The standard chunk of Lorem Ipsum used since the</h5>
                <span class="adprice">$480</span>
                <p class="catpath">Mobile Phones » Brand</p>
                </section>
                <section class="list-right">
                <span class="date">Today, 17:25</span>
                <span class="cityname">City name</span>
                </section>
                <div class="clearfix"></div>
                </li>
              </a>
              <a href="single">
                <li>
                <img src="images/m9.jpg" title="" alt="" />
                <section class="list-left">
                <h5 class="title">ducimus qui blanditiis praesentium voluptatum quos dolores et qua</h5>
                <span class="adprice">$199</span>
                <p class="catpath">Mobile Phones » Brand</p>
                </section>
                <section class="list-right">
                <span class="date">Today, 17:04</span>
                <span class="cityname">City name</span>
                </section>
                <div class="clearfix"></div>
                </li>
              </a>
              <a href="single">
                <li>
                <img src="images/m8.jpg" title="" alt="" />
                <section class="list-left">
                <h5 class="title">There are many variations of passages of Lorem Ipsum</h5>
                <span class="adprice">$899</span>
                <p class="catpath">Mobile Phones » Brand</p>
                </section>
                <section class="list-right">
                <span class="date">Today, 17:05</span>
                <span class="cityname">City name</span>
                </section>
                <div class="clearfix"></div>
                </li>
              </a>
              <a href="single">
                <li>
                <img src="images/m12.jpg" title="" alt="" />
                <section class="list-left">
                <h5 class="title">you need to be sure there isn't anything embarrassing hidden</h5>
                <span class="adprice">$1090</span>
                <p class="catpath">Mobile Phones » Brand</p>
                </section>
                <section class="list-right">
                <span class="date">Today, 17:03</span>
                <span class="cityname">City name</span>
                </section>
                <div class="clearfix"></div>
                </li>
              </a>

              <a href="single">
                <li>
                <img src="images/m11.jpg" title="" alt="" />
                <section class="list-left">
                <h5 class="title">who are so beguiled and demoralized by the charms of pleasure of the moment</h5>
                <span class="adprice">$189</span>
                <p class="catpath">Mobile Phones » Brand</p>
                </section>
                <section class="list-right">
                <span class="date">Today, 17:03</span>
                <span class="cityname">City name</span>
                </section>
                <div class="clearfix"></div>
                </li>
              </a>
              <a href="single">
                <li>
                <img src="images/m13.jpg" title="" alt="" />
                <section class="list-left">
                <h5 class="title">looked up one of the more obscure Latin words</h5>
                <span class="adprice">$599</span>
                <p class="catpath">Mobile Phones » Brand</p>
                </section>
                <section class="list-right">
                <span class="date">Today, 17:02</span>
                <span class="cityname">City name</span>
                </section>
                <div class="clearfix"></div>
                </li>
              <div class="clearfix"></div>
              </a>
            </ul>
          </div>
            </div>
          </div>
          <ul class="pagination pagination-sm">
            <li><a href="#">Prev</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">6</a></li>
            <li><a href="#">7</a></li>
            <li><a href="#">8</a></li>
            <li><a href="#">Next</a></li>
          </ul>
          </div>
        </div>
      </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
<!-- // Products -->

</body>
  <!-- Navigation-JavaScript -->
    <script src="js/classie.js"></script>
    <script src="js/main.js"></script>
  <!-- //Navigation-JavaScript -->
  <!-- here stars scrolling icon -->
    <script type="text/javascript">
      $(document).ready(function() {
        /*
          var defaults = {
          containerID: 'toTop', // fading element id
          containerHoverID: 'toTopHover', // fading element hover id
          scrollSpeed: 1200,
          easingType: 'linear'
          };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

        });
    </script>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
      jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
          event.preventDefault();
          $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
      });
    </script>
    <!-- start-smoth-scrolling -->
  <!-- //here ends scrolling icon -->
@stop
=======
@extends('layouts.allmaster')
>>>>>>> 88b73087593182dc8cec3cad79a3f254479a676a
