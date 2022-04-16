<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
<title>練習</title>
<style>

body {
    padding: 0;
    margin: 0;
}

*{
    box-sizing: border-box;
}

a{
  text-decoration: none;
}

#navLinks {
    justify-content: flex-end;
}


#home, #about, #portfolio, #testimonials {
    margin: 2em 1em 0 1em;
    font-size: large;
}

#brand_name {
    font-size: 1.75em;
    font-weight: 500;
    padding-top: 4vh;
}

#bavbar-button {
    align-items: flex-end;
}


.row{
    display: flex;
    flex-wrap: wrap;
}
.line{
    padding: 3px;
    background-color: blue;
    width: 75px;
    height: 1px;
    display: block;
    margin: 0 auto;
    border-radius: 10px;
}
.line-1{
    justify-content: center;
    display: flex;
    align-items: center;
    padding: 5px;
    border-radius:30px;
}


.gal-item{
	overflow: hidden;
	padding: 10px;
}
.gal-item .box{
	/*height: 100%;*/
	overflow: hidden;
}
.box img{
	height: 100%;
	width: auto;
	object-fit:cover;
}


.line-2{
    padding: 3px;
    background-color: blue;
    width: 75px;
    height: 1px;
    text-align: left;
    border-radius: 10px;
}
.figure-caption{
    color: blue;
    font-size: 3px;
}
.figure-fluid{
  padding: 20px;
  border-radius: 10px;
  background-color: grey;
}
.iframe{
  background-size:cover;
  background-position:center;
  position:relative;
}
.login-page {
  width: 360px;
  padding: 5% 0 0;
  margin: auto;
  z-index: 1000;
  position: absolute;
  right: 25%;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  width: 200%;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
@media (max-width: 1410px){
  .form{
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  width: 150%;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  }
  .check-span{
float: right;
margin-left: 10px;
margin-top: -5px;
}
.navbar-brand{
  height: 80px;
}
}

@media (max-width: 983px){
  .check-span{
  float: right;
margin-left: 10px;
margin-top: -30px;
}
.navbar-brand{
  height: 80px;
}
.text-mg{
  margin-top: 15px;
}
}


@media (max-width: 750px){
  .form{
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  width: 120%;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  }
  .check-span{
    float: right;
margin-left: 10px;
margin-top: -5px;
}
.carousel-inner{
  position: relative;
  overflow: hidden;
}
.text-mg{
  margin-top: 15px;
}
}



@media (max-width: 500px){
  .form{
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  width: 100%;
  margin: 0 60px 100px;
  padding: 45px;
  text-align: center;
  display: block;
  align-items: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  }
  .check-span{
float: right;
margin-left: 10px;
margin-top: -5px;
}
.navbar-brand{
  height: 80px;
}
.carousel-inner{
  position: relative;
  overflow: hidden;
}
}

@media (max-width: 400px){
  .check-span{
float: right;
margin-left: 10px;
margin-top: -8px;
}
.navbar-brand{
  height: 80px;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  width: 100%;
  margin: 0px 78px 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
}

.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}

.fa-left{
  margin-left: 7px;
}




@media (min-width: 992px) {
  .footer-copy {
    text-align: left;
  }
}
@media (max-width: 970px) {
  .footer-copy {
    text-align: center;
  }
}
.footer-share {
  margin-bottom: 1rem;
}

.footer-share .nav {
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  justify-content: center;
}

.footer-share .nav li {
  margin-left: 1rem;
}

.footer-share .nav li:first-child {
  margin-left: 0;
}

.footer-share .nav li a {
  color: #91a1a5;
  font-size: 1.75rem;
}

.footer-share .nav li a:hover,
.footer-share .nav li a:focus {
  color: #e19f1e;
}

@media (min-width: 992px) {
  .footer-share {
    margin-bottom: 0;
  }

  .footer-share .nav {
    justify-content: flex-end;
  }
}

#inlineRadio1{
  background-color: white;
  width: 20px;
  height: 20px;
  border: 1px solid black;
  border-radius: 10px;
}

#inlineRadio2{
  background-color: black;
  width: 20px;
  height: 20px;
  border: 1px solid white;
  border-radius: 10px
}

#inlineRadio3{
  background-color: blue;
  width: 20px;
  height: 20px;
  border: 1px solid white;
  border-radius: 10px
}


</style>
</head>
<body>
    <header>

        <!--navbar as a link-->
        <nav id="mainNavbar" class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container-xxl">
                <a class="navbar-brand" href="#" target="_blank">
                  <img src="{{asset('img/apple-touch-icon.png')}}" alt=""  style="height:80px">
                  </a>
               <!--toggle_button-->
                <button class="navbar-toggler" id="navbar-button" type="button" data-bs-toggle="collapse" data-bs-target="#navLinks" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!--navbar options/buttons-->
                <div class="collapse navbar-collapse" id="navLinks">
                    <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="" id="home">Blog</a>
                            <a class="nav-link" href="#" id="about">Portfolio</a>
                            <a class="nav-link" href="#" id="portfolio">About</a>
                            <a class="nav-link" href="#" id="testimonials">Contact</a>
                            <a class="nav-link" href="#" id="portfolio"><i class="fas fa-shopping-cart fa-2x"></i></a>
                            <a class="nav-link" href="#" id="testimonials"><i class="fas fa-user-circle fa-2x"></i></a>
                    </div>
                </div>

            </div>
        </nav>

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{asset('img/RWLAmj.webp')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{asset('img/RWUuNl.jpg')}}" class="d-block w-100" alt="...">
            </div>{
            <div class="carousel-item">
              <img src="{{asset('img/RWLAmj.webp')}}" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div><br><br>

        <div class="container-xxl">
            <div class="row text-center">
                <div class="col-12">
                    <img src="">
                    <h3>Raw Denim Heirloom Man Braid</h3>
                    <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy.
                Gastropub indxgo juice poutine, ramps microdosing banh mi pug.</p><br>
                 <div class="flex justify-center">
                    <div class="line"></div>
                  </div>
                </div>
            </div>
        </div><br><br><br><br>


          <div class="container-xxl">
            <div class="row text-center">
                <div class="col-lg-4">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="14" height="140" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24" style="  width:80px;height:80px;

                  border-radius:999em;

                  background-color:#4ee2ce;">
                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                  </svg><br><br><br>
                    <h5>Shooting Stars</h5>
                    <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
                    <p class="learn-fa">Learn More<i class="fa-left fa fa-chevron-right"></i></p><br><br>
                </div>

                <div class="col-lg-4">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="140" height="140" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24" style="  width:80px;height:80px;

                  border-radius:999em;

                  background-color:#4ee2ce;">
                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                  </svg><br><br><br>
                    <h5>The Catalyzer</h5>
                    <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
                    <p class="learn-fa">Learn More<i class="fa-left fa fa-chevron-right"></i></p><br><br>
                </div>

                <div class="col-lg-4">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="140" height="140" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24" style="  width:80px;height:80px;

                  border-radius:999em;

                  background-color:#4ee2ce;">
                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                  </svg><br><br><br>
                    <h5>Neptune</h5>
                    <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
                    <p class="learn-fa">Learn More<i class="fa-left fa fa-chevron-right"></i></p><br><br>
                </div>
            </div>


            <div class="line-1">
                <button type="button" class="btn btn-primary">button</button>
              </div>

        </div><br><br><br>



    <div class="container-xxl">
       <div class="row">
           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><h3>Master Cleanse Reliac Heirloom</h3></div>
           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><p class="text-mg">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom.</p></div>
       </div>
    </div><br><br><br>

    <div class="container-xxl">
        <div class="row">
            <div class="col-md-6 col-sm-12 co-xs-12 gal-item">


              <div class="row h-10">
                       <div class="col-md-6 col-sm-6 co-xs-12 gal-item">
                        <div class="box">
                          <img src="{{asset('img/500x300.png')}}" class="img-ht img-fluid rounded">
                      </div>
                      </div>

                      <div class="col-md-6 col-sm-6 co-xs-12 gal-item">
                       <div class="box">
                          <img src="{{asset('img/501x301.png')}}" class="img-ht img-fluid rounded">
                      </div>
                      </div>
                  </div>
                  <div class="row w-300">
                    <div class="col-md-12 col-sm-12 co-xs-12 gal-item">
                              <div class="box">
                           <img src="{{asset('img/600x360.png')}}" class="img-ht img-fluid rounded" style="width:700px">
                              </div>
                      </div>
              </div>
            </div>

                 <div class="col-md-6 col-sm-12 co-xs-12 gal-item">
                    <div class="row h-10">
                        <div class="col-md-12 col-sm-12 co-xs-12 gal-item">
                                  <div class="box">
                               <img src="{{asset('img/601x361.png')}}" class="img-ht img-fluid rounded" style="width:700px">
                                  </div>
                          </div>
                  </div>
                    <div class="row h-50">
                        <div class="col-md-6 col-sm-6 co-xs-12 gal-item">
                         <div class="box">
                           <img src="{{asset('img/502x302.png')}}" class="img-ht img-fluid rounded">
                       </div>
                       </div>

                       <div class="col-md-6 col-sm-6 co-xs-12 gal-item">
                        <div class="box">
                           <img src="{{asset('img/503x303.png')}}" class="img-ht img-fluid rounded">
                       </div>
                       </div>
                   </div>

                  </div>

          </div>
    </div>
    <br><br>

    <div class="container-xxl">
        <div class="row text-center">
            <div class="col-12"><h3>Pricing</h3></div>
           <div class="col-12"><p>Banh mi cornhole echo park skateboard authentic crucifix neutra tilde lyft biodiesel artisan direct trade mumblecore 3 wolf moon<br> twee</p></div>
        </div>
    </div>
    <br><br>

    <div class="container-xxl">
        <div class="row">
            <div class="col-12">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Plan</th>
                            <th>Speed</th>
                            <th>Storage</th>
                            <th>Price</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Start</td>
                            <td>5 Mb/s</td>
                            <td>15 GB</td>
                            <td>Free</td>
                            <td><input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">

                                </label></td>
                        </tr>
                        <tr>
                            <td>Pro</td>
                            <td>25 Mb/s</td>
                            <td>25 GB</td>
                            <td>$24</td>
                            <td><input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">

                                </label></td>
                        </tr>
                        <tr>
                            <td>Business</td>
                            <td>36 Mb/s</td>
                            <td>40 GB</td>
                            <td>$50</td>
                            <td><input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">

                                </label></td>
                        </tr>
                        <tr>
                            <td>Exclusive</td>
                            <td>48 Mb/s</td>
                            <td>120 GB</td>
                            <td>$72</td>
                            <td><input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">

                                </label></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

   <div class="container-xxl">
       <div class="row center">
        <div class="col-6" style="text-align: left;">Learn More<i class="fa-left fas fa-arrow-right"></i></div>
        <div class="col-6" style="text-align: right;"><button type="button" class="btn btn-primary">button</button></div>
       </div>
   </div><br><br><br>

   <div class="container-xxl">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><h3>Pitchfork Kickstarter Taxidermy</h3><div class="flex justify-center">
            <div class="line-2"></div>
          </div></div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><p class="text-mg">
            Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p></div>
    </div>
 </div><br><br><br>

    <div class="container-xxl">
        <div class="row">
            <div class="col-lg-3 col-xs-12 col-sm-6">

                    <figure class="figure-fluid">
                        <img src="{{asset('img/723x403.png')}}" class="img-fluid rounded" alt="..."><br><br>
                        <figcaption class="figure-caption">SUBTITLE</figcaption>
                        <h5>Chichen Itza</h5><br>
                        <p>Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                      </figure>

            </div>
            <div class="col-lg-3 col-xs-12 col-sm-6">

                    <figure class="figure-fluid">
                        <img src="img/723x403.png" class="img-fluid rounded" alt="..."><br><br>
                        <figcaption class="figure-caption">SUBTITLE</figcaption>
                        <h5>Colosseum Roma</h5><br>
                        <p>Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                      </figure>

            </div>
            <div class="col-lg-3 col-xs-12 col-sm-6">

                    <figure class="figure-fluid">
                        <img src="{{asset('img/723x403.png')}}" class="img-fluid rounded" alt="..."><br><br>
                        <figcaption class="figure-caption">SUBTITLE</figcaption>
                        <h5>Great Pyramid of Giza</h5><br>
                        <p>Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                    </figure>

            </div>
            <div class="col-lg-3 col-xs-12 col-sm-6">

                    <figure class="figure-fluid">
                        <img src="{{asset('img/723x403.png')}}" class="img-fluid rounded" alt="..."><br><br>
                        <figcaption class="figure-caption">SUBTITLE</figcaption>
                        <h5>San Francisco</h5><br>
                        <p>Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                      </figure>

            </div>
        </div>
    </div><br><br>

    <section id="hero" class="">

        <div class="container-xxl">
          <div class="row" style="margin-left: 100px;">
            <div class="col-lg-2">
                <div class="" style="width: 100px;height: 100px;text-align: center;">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24" style="  width:80px;height:80px;

                  border-radius:999em;

                  background-color:#4ee2ce;">
                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                  </svg>
                  </div>
            </div>

            <div class="col-lg-10">
              <h4>Shooting Stars</h4>
              <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
              <div><a href="#about" class="btn-get-started scrollto">Get Started</a></div><br>
            </div>
          </div><hr><br><br>
          <div class="row" style="margin-left: 100px;">
            <div class="col-lg-8">

                    <h4>Shooting Stars</h4>
              <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
              <div><a href="#about" class="btn-get-started scrollto">Get Started</a></div><br>

            </div>
            <div class="col-lg-4">
                <div class="" style="width: 100px;height: 100px;text-align: center;">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24" style="  width:80px;height:80px;

                  border-radius:999em;

                  background-color:#4ee2ce;">
                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                  </svg>
                  </div>
            </div>
          </div><hr><br><br>
          <div class="row" style="margin-left: 100px;">
            <div class="col-lg-2">
                <div class="" style="width: 100px;height: 100px;text-align: center;">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24" style="  width:80px;height:80px;

                    border-radius:999em;

                    background-color:#4ee2ce;">
                      <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                    </svg>
                  </div>
            </div>
            <div class="col-lg-10">
              <h4>Shooting Stars</h4>
              <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
              <div><a href="#about" class="btn-get-started scrollto">Get Started</a></div><br>
            </div>
          </div><hr>
        </div><br><br>
        <div class="line-1">
            <button type="button" class="btn btn-primary">button</button>
          </div>
      </section><br><br>

      <main class="mt-5 pt-4">
        <div class="container dark-grey-text mt-5">

          <!--Grid row-->
          <div class="row wow fadeIn">

            <!--Grid column-->
            <div class="col-md-6 mb-4">

              <img src="{{asset('img/400x400.png')}}" class="img-fluid" alt="" style="width: 800px;">

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6 mb-4">

              <!--Content-->
              <div class="p-4">

                <div class="mb-3">
                    <p>BRAND NAME</p>
                    <h4>The Catcher in the Rye</h4>
                </div>

                <div>
                    <a href="#" class="fas fa-star s1"></a>
  <a href="#" class="fas fa-star s2"></a>
  <a href="#" class="fas fa-star s3"></a>
  <a href="#" class="fas fa-star s4"></a>
  <a href="#" class="fas fa-star s5"></a>
                    <span style="margin-left: 10px;">4 Reviews</span>

                    <a href="#" class="icon-line" style="margin-left: 7px;">｜</a>

                    <a href="#" class="fab fa-facebook-f" style="margin-left: 10px;"></a>


                    <a href="#" class="fab fa-twitter"></a>


                    <a href="#" class="fab fa-facebook-messenger"></a>


                </div><br>
             <p>
                Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha taximy chia microdosing tilde DIY. XOXO fam indxgo juiceramps cornhole raw denim forage brooklyn.
                Everyday carry +1 seitan poutine tumeric. Gastropub blue bottle austin listicle pour-over, neutra jean shorts keytar banjo tattooed umami cardigan.
             </p><br>

             <div class="E-body">

                <span style="margin-left: 1px;">color</span>

                <div class="form-check form-check-inline" style="margin-left: 12px;">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1"></label>
                  </div>
                  <div class="form-check form-check-inline" style="margin-left: -8px;">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2"></label>
                  </div>
                  <div class="form-check form-check-inline" style="margin-left: -8px;">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                    <label class="form-check-label" for="inlineRadio3"></label>
                  </div>

                  <span style="margin-left: 1px;">Size
                </span>
                <div class="check-span form-check form-check-inline" style="margin-left: 5px;">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                          SM
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                          <li><button class="dropdown-item" type="button">M</button></li>
                          <li><button class="dropdown-item" type="button">L</button></li>
                          <li><button class="dropdown-item" type="button">XL</button></li>
                        </ul>
                      </div>
                  </div>


            </div>

            <br><hr>
              </div>
              <!--Content-->
              <div class="row">
                  <div class="col-6">
                  <span style="margin-left: 25px;font-size: 25px;">$58.00</span></div>
                  <div class="col-6">
                    <button type="button" class="btn btn-primary">button</button>
                    <a href="#" class="fas fa-heart" style="margin-left: 12px;"></a>
                 </div>
              </div>



            </div>
            <!--Grid column-->

          </div>
          <!--Grid row-->
        </div>
      </main><br><br>

      <div class="container-xxl">
        <div class="row">
            <div class="col-lg-3 col-xs-12 col-sm-6">

                    <figure class="figure">
                        <img src="{{asset('img/420x260.png')}}" class="img-fluid rounded" alt="...">
                        <figcaption class="figure-caption" style="font-size: 15px;color: gray;margin-bottom: 5px;">CATEGORY</figcaption>
                        <h5>The Catalyzer</h5>
                        <p>$16.00</p>
                      </figure>

            </div>
            <div class="col-lg-3 col-xs-12 col-sm-6">

                <figure class="figure">
                    <img src="{{asset('img/421x261.png')}}" class="img-fluid rounded" alt="...">
                    <figcaption class="figure-caption" style="font-size: 15px;color: gray;margin-bottom: 5px;">Shooting Stars</figcaption>
                    <h5>The Catalyzer</h5>
                    <p>$21.15</p>
                  </figure>

            </div>
            <div class="col-lg-3 col-xs-12 col-sm-6">

                <figure class="figure">
                    <img src="{{asset('img/422x262.png')}}" class="img-fluid rounded" alt="...">
                    <figcaption class="figure-caption" style="font-size: 15px;color: gray;margin-bottom: 5px;">Neptune</figcaption>
                    <h5>The Catalyzer</h5>
                    <p>$12.00</p>
                  </figure>

            </div>
            <div class="col-lg-3 col-xs-12 col-sm-6">

                <figure class="figure">
                    <img src="{{asset('img/422x262.png')}}" class="img-fluid rounded" alt="...">
                    <figcaption class="figure-caption" style="font-size: 15px;color: gray;margin-bottom: 5px;">The 400 Blows</figcaption>
                    <h5>The Catalyzer</h5>
                    <p>$18.40</p>
                  </figure>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-xs-12 col-sm-6">

                    <figure class="figure">
                        <img src="{{asset('img/420x260.png')}}" class="img-fluid rounded" alt="...">
                        <figcaption class="figure-caption" style="font-size: 15px;color: gray;margin-bottom: 5px;">CATEGORY</figcaption>
                        <h5>The Catalyzer</h5>
                        <p>$16.00</p>
                      </figure>

            </div>
            <div class="col-lg-3 col-xs-12 col-sm-6">

                <figure class="figure">
                    <img src="{{asset('img/421x261.png')}}" class="img-fluid rounded" alt="...">
                    <figcaption class="figure-caption" style="font-size: 15px;color: gray;margin-bottom: 5px;">Shooting Stars</figcaption>
                    <h5>The Catalyzer</h5>
                    <p>$21.15</p>
                  </figure>

            </div>
            <div class="col-lg-3 col-xs-12 col-sm-6">

                <figure class="figure">
                    <img src="{{asset('img/422x262.png')}}" class="img-fluid rounded" alt="...">
                    <figcaption class="figure-caption" style="font-size: 15px;color: gray;margin-bottom: 5px;">Neptune</figcaption>
                    <h5>The Catalyzer</h5>
                    <p>$12.00</p>
                  </figure>

            </div>
            <div class="col-lg-3 col-xs-12 col-sm-6">

                <figure class="figure">
                    <img src="{{asset('img/423x263.png')}}" class="img-fluid rounded" alt="...">
                    <figcaption class="figure-caption" style="font-size: 15px;color: gray;margin-bottom: 5px;">The 400 Blows</figcaption>
                    <h5>The Catalyzer</h5>
                    <p>$18.40</p>
                  </figure>

            </div>
        </div>
    </div><br><br>

    <section class="map">
      <div class="container-fluid">
        <div class="row">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14565.490127482779!2d120.675326!3d24.123552!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe28afadc0dad203a!2z5ZyL56uL5Lit6IiI5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1649420782139!5m2!1szh-TW!2stw" width="680" height="700" style="border:0;background-size:cover;background-position:center;position:relative" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
          </iframe>
          <div class="login-page">
            <div class="form">
              <form class="register-form">
                <input type="text" placeholder="name"/>
                <input type="password" placeholder="password"/>
                <input type="text" placeholder="email address"/>
                <button>create</button>
                <p class="message">Already registered? <a href="#">Sign In</a></p>
              </form>
              <form class="login-form">
                <h5 style="text-align: left;">Feedback</h5>
                <p  style="text-align: left;">Post-ironic portland shabby chic echo park, banjo fashion axe</p>
                <p  style="text-align: left;">Email</p>
                <textarea class="form-control" aria-label="With textarea"></textarea><br>
                <p  style="text-align: left;">Message</p>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea><br>
                <button>button</button>
                <p class="message">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p>
              </form>
            </div>
          </div>
        </div>

    </section><br><br>

    <footer>
      <div class="container-xxl py-5">
        <div class="row">
          <div class="col-lg-3 mb-3">
            <a class="d-inline-flex align-items-center mb-2 link-dark text-decoration-none" href="/" aria-label="Bootstrap">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="d-block me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
              <span class="fs-5">數位方塊</span>
            </a>
            <ul class="list-unstyled small text-muted">
              <li class="mb-2">Air plant banjo lyft occupy retro adaptogen indego</li>
            </ul>
          </div>
          <div class="col-6 col-lg-2 offset-lg-1 mb-3">
            <h5>CATEGORIES</h5>
            <ul class="list-unstyled">
              <li class="mb-2"><a href="#">First Link</a></li>
              <li class="mb-2"><a href="#">Second Link</a></li>
              <li class="mb-2"><a href="#">Third Link</a></li>
              <li class="mb-2"><a href="#">Fourth Link</a></li>
            </ul>
          </div>
          <div class="col-6 col-lg-2 mb-3">
            <h5>CATEGORIES</h5>
            <ul class="list-unstyled">
              <li class="mb-2"><a href="#">First Link</a></li>
              <li class="mb-2"><a href="#">Second Link</a></li>
              <li class="mb-2"><a href="#">Third Link</a></li>
              <li class="mb-2"><a href="#">Fourth Link</a></li>
            </ul>
          </div>
          <div class="col-6 col-lg-2 mb-3">
            <h5>CATEGORIES</h5>
            <ul class="list-unstyled">
              <li class="mb-2"><a href="#">First Link</a></li>
              <li class="mb-2"><a href="#">Second Link</a></li>
              <li class="mb-2"><a href="#">Third Link</a></li>
              <li class="mb-2"><a href="#">Fourth Link</a></li>
            </ul>
          </div>
          <div class="col-6 col-lg-2 mb-3">
            <h5>CATEGORIES</h5>
            <ul class="list-unstyled">
              <li class="mb-2"><a href="#">First Link</a></li>
              <li class="mb-2"><a href="#">Second Link</a></li>
              <li class="mb-2"><a href="#">Third Link</a></li>
              <li class="mb-2"><a href="#">Fourth Link</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <footer class="footer-bottom" style="background-color: #000;padding: 4rem 0 2rem;color: grey">
      <div class="container">
          <div class="row no-gutters">
            <div class="col-lg-6 footer-copy">
              <span>© 2020 Tailblocks — @knyttneve</span>
          </div>
              <div class="col-lg-6 footer-share">
                  <ul class="nav">
                      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                  </ul>
              </div>
          </div>
      </div>
  </footer>
    </header>
</body>
</html>
