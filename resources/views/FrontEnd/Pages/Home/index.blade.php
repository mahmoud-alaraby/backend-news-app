 @extends('FrontEnd.app')

 @section('content')
     <!-- Top News Start-->
     <div class="top-news">
         <div class="container">
             <div class="row">
                 <div class="col-md-6 tn-left">
                     <div class="row tn-slider">
                         <div class="col-md-6">
                             <div class="tn-img">
                                 <img src="img/news-450x350-1.jpg" />
                                 <div class="tn-title">
                                     <a href="">Lorem ipsum dolor sit amet</a>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="tn-img">
                                 <img src="img/news-450x350-2.jpg" />
                                 <div class="tn-title">
                                     <a href="">Integer hendrerit elit eget purus sodales maximus</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-6 tn-right">
                     <div class="row">
                         <div class="col-md-6">
                             <div class="tn-img">
                                 <img src="img/news-350x223-1.jpg" />
                                 <div class="tn-title">
                                     <a href="">Lorem ipsum dolor sit</a>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="tn-img">
                                 <img src="img/news-350x223-2.jpg" />
                                 <div class="tn-title">
                                     <a href="">Lorem ipsum dolor sit</a>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="tn-img">
                                 <img src="img/news-350x223-3.jpg" />
                                 <div class="tn-title">
                                     <a href="">Lorem ipsum dolor sit</a>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="tn-img">
                                 <img src="img/news-350x223-4.jpg" />
                                 <div class="tn-title">
                                     <a href="">Lorem ipsum dolor sit</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Top News End-->

     <!-- Category News Start-->
     <div class="cat-news">
         <div class="container">
             <div class="row">
                 <div class="col-md-6">
                     @include('FrontEnd.Pages.Home.blocks.category-with-slider')
                 </div>
             </div>
         </div>
     </div>
     <!-- Category News End-->

     <!-- Tab News Start-->
     <div class="tab-news">
         <div class="container">
             <div class="row">
                 <div class="col-md-6">
                     <ul class="nav nav-pills nav-justified">
                         <li class="nav-item">
                             <a class="nav-link active" data-toggle="pill" href="#featured">Featured News</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" data-toggle="pill" href="#oldest">Oldest News</a>
                         </li>
                     </ul>

                     <div class="tab-content">
                         @include('FrontEnd.Pages.Home.components.oldest-news')
                         @include('FrontEnd.Pages.Home.components.featured-news')
                     </div>
                 </div>

                 <div class="col-md-6">
                     <ul class="nav nav-pills nav-justified">
                         <li class="nav-item">
                             <a class="nav-link active" data-toggle="pill" href="#m-viewed">Most Viewed</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" data-toggle="pill" href="#m-read">Most Read</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" data-toggle="pill" href="#m-recent">Most Recent</a>
                         </li>
                     </ul>

                     <div class="tab-content">

                         @include('FrontEnd.Pages.Home.components.most-viewd', [$most_viewd_posts])

                         <div id="m-read" class="container tab-pane fade">
                             <div class="tn-news">
                                 <div class="tn-img">
                                     <img src="img/news-350x223-2.jpg" />
                                 </div>
                                 <div class="tn-title">
                                     <a href="">Lorem ipsum dolor sit amet</a>
                                 </div>
                             </div>
                             <div class="tn-news">
                                 <div class="tn-img">
                                     <img src="img/news-350x223-1.jpg" />
                                 </div>
                                 <div class="tn-title">
                                     <a href="">Lorem ipsum dolor sit amet</a>
                                 </div>
                             </div>
                             <div class="tn-news">
                                 <div class="tn-img">
                                     <img src="img/news-350x223-3.jpg" />
                                 </div>
                                 <div class="tn-title">
                                     <a href="">Lorem ipsum dolor sit amet</a>
                                 </div>
                             </div>
                         </div>
                         <div id="m-recent" class="container tab-pane fade">
                             <div class="tn-news">
                                 <div class="tn-img">
                                     <img src="img/news-350x223-4.jpg" />
                                 </div>
                                 <div class="tn-title">
                                     <a href="">Lorem ipsum dolor sit amet</a>
                                 </div>
                             </div>
                             <div class="tn-news">
                                 <div class="tn-img">
                                     <img src="img/news-350x223-5.jpg" />
                                 </div>
                                 <div class="tn-title">
                                     <a href="">Lorem ipsum dolor sit amet</a>
                                 </div>
                             </div>
                             <div class="tn-news">
                                 <div class="tn-img">
                                     <img src="img/news-350x223-1.jpg" />
                                 </div>
                                 <div class="tn-title">
                                     <a href="">Lorem ipsum dolor sit amet</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Tab News Start-->

     <!-- Main News Start-->
     <div class="main-news">
         <div class="container">
             <div class="row">
                 <div class="col-lg-9">
                     @include('FrontEnd.Pages.Home.components.main-news', [$posts])
                 </div>

                 <div class="col-lg-3">
                     <div class="mn-list">
                         <h2>Read More</h2>
                         <ul>
                             <li><a href="">Lorem ipsum dolor sit amet</a></li>
                             <li><a href="">Pellentesque tincidunt enim libero</a></li>
                             <li><a href="">Morbi id finibus diam vel pretium enim</a></li>
                             <li><a href="">Duis semper sapien in eros euismod sodales</a></li>
                             <li><a href="">Vestibulum cursus lorem nibh</a></li>
                             <li><a href="">Morbi ullamcorper vulputate metus non eleifend</a></li>
                             <li><a href="">Etiam vitae elit felis sit amet</a></li>
                             <li><a href="">Nullam congue massa vitae quam</a></li>
                             <li><a href="">Proin sed ante rutrum</a></li>
                             <li><a href="">Curabitur vel lectus</a></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Main News End-->
 @endsection
