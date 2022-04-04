<?php $v->layout("_theme"); ?>
<!--HOME-->
<section class="home" id="home">
    <div class="video-container">
        <video src="<?= theme("/assets/images/video.mp4"); ?>" muted loop autoplay></video>
    </div><!--/video-container-->
    <div class="content">
        <h1>explore.</h1>
        <h3>its time to trivel</h3>
        <div class="form-container">
            <form action="">
                <h3>search you destination</h3>
                <span>location</span>
                <input type="text" placeholder="place you want to visit">
                <span>guest members</span>
                <input type="number" placeholder="how many people">
                <span>arrivals</span>
                <input type="date">
                <span>leaving</span>
                <input type="date">
                <input class="btn" type="submit" value="search">
            </form>
        </div><!--/form-container-->
    </div><!--/content-->
</section><!--/HOME-->

<!--FEATURE-->
<section class="feature" id="feature">
    <h1 class="heading">popular places</h1>
    <h3 class="title">see the most featured places</h3>
    <div class="card-container">
        <div class="card">
            <img src="<?= theme("/assets/images/feature-1.jpg");?>" alt="">
            <div class="info">
                <h3>tour 1</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div><!--/stars-->
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus, minima!</p>
                <a href="#"><button class="btn">visit now!</button></a>
            </div><!--/info-->
        </div><!--card-->
        <div class="card">
            <img src="<?= theme("/assets/images/feature-2.jpg");?>" alt="">
            <div class="info">
                <h3>tour 2</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div><!--/stars-->
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus, minima!</p>
                <a href="#"><button class="btn">visit now!</button></a>
            </div><!--/info-->
        </div><!--card-->
        <div class="card">
            <img src="<?= theme("/assets/images/feature-3.jpg");?>" alt="">
            <div class="info">
                <h3>tour 3</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div><!--/stars-->
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus, minima!</p>
                <a href="#"><button class="btn">visit now!</button></a>
            </div><!--/info-->
        </div><!--card-->
    </div><!--card-container-->
</section><!--/FEATURE-->

<!--ABOUT-->
<section class="about" id="about">
    <h1 class="heading">about us</h1>
    <h3 class="title">explore the world with us</h3>
    <div class="row">
        <div class="image">
            <img src="<?=theme("/assets/images/about.png");?>" alt="">
        </div><!--/image-->
        <div class="content">
            <h3>why choose us?</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting 
            industry. Lorem Ipsum has been the industry's standard dummy text 
            ever since the 1500s, when an unknown printer took a galley of type 
            and scrambled it to make a type specimen book.</p>
            <a href=""><button class="btn">Read more</button></a>
        </div><!--/content-->
    </div><!--/row-->
    <div class="box-container">
        <div class="box">
            <i class="fas fa-map"></i>
            <h3>travel guide</h3>
        </div><!--/box-->
        <div class="box">
            <i class="fas fa-users"></i>
            <h3>24 x 7 service</h3>
        </div><!--/box-->
        <div class="box">
            <i class="fas fa-hotel"></i>
            <h3>hotel booking</h3>
        </div><!--/box-->
    </div><!--/box-container-->
</section><!--/ABOUT-->
