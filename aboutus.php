<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>College Event Management</title>
  <?php require 'utils/styles.php'; ?>
  <!--css links. file found in utils folder-->
</head>
<style>
  /* Large rounded green border */
  /* hr.blueline {
    border: 10px solid #00004d;
    border-radius: 5px;
  }

  #bj {
    font-size: 22px;
  } */

  /* h1, h2,h3
  h4,
  h5,
  h6 {} */

  a,
  a:hover,
  a:focus,
  a:active {
    text-decoration: none;
    outline: none;
  }

  a,
  a:active,
  a:focus {
    color: #6f6f6f;
    text-decoration: none;
    transition-timing-function: ease-in-out;
    -ms-transition-timing-function: ease-in-out;
    -moz-transition-timing-function: ease-in-out;
    -webkit-transition-timing-function: ease-in-out;
    -o-transition-timing-function: ease-in-out;
    transition-duration: .2s;
    -ms-transition-duration: .2s;
    -moz-transition-duration: .2s;
    -webkit-transition-duration: .2s;
    -o-transition-duration: .2s;
  }

  ul {
    margin: 0;
    padding: 0;
    list-style: none;
  }

  img {
    max-width: 100%;
    height: auto;
  }

  section {
    padding: 60px 0;
    /* min-height: 100vh;*/
  }

  .sec-title {
    position: relative;
    z-index: 1;
    margin-bottom: 60px;
  }

  .sec-title .title {
    position: relative;
    display: block;
    font-size: 18px;
    line-height: 24px;
    color: #00aeef;
    font-weight: 500;
    margin-bottom: 15px;
  }

  .sec-title h2 {
    position: relative;
    display: block;
    font-size: 40px;
    line-height: 1.28em;
    color: #222222;
    font-weight: 600;
    padding-bottom: 18px;
  }

  .sec-title h2:before {
    position: absolute;
    content: '';
    left: 0px;
    bottom: 0px;
    width: 50px;
    height: 3px;
    background-color: #d1d2d6;
  }

  .sec-title .text {
    position: relative;
    font-size: 16px;
    line-height: 26px;
    color: #848484;
    font-weight: 400;
    margin-top: 35px;
  }

  .sec-title.light h2 {
    color: #ffffff;
  }

  .sec-title.text-center h2:before {
    left: 50%;
    margin-left: -25px;
  }

  .list-style-one {
    position: relative;
  }

  .list-style-one li {
    position: relative;
    font-size: 16px;
    line-height: 26px;
    color: #222222;
    font-weight: 400;
    padding-left: 35px;
    margin-bottom: 12px;
  }

  .list-style-one li:before {
    content: "\f058";
    position: absolute;
    left: 0;
    top: 0px;
    display: block;
    font-size: 18px;
    padding: 0px;
    color: #ff2222;
    font-weight: 600;
    -moz-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    font-style: normal;
    font-variant: normal;
    text-rendering: auto;
    line-height: 1.6;
    font-family: "Font Awesome 5 Free";
  }

  .list-style-one li a:hover {
    color: #44bce2;
  }

  .btn-style-one {
    position: relative;
    display: inline-block;
    font-size: 17px;
    line-height: 30px;
    color: #ffffff;
    padding: 10px 30px;
    font-weight: 600;
    overflow: hidden;
    letter-spacing: 0.02em;
    background-color: #00aeef;
  }

  .btn-style-one:hover {
    background-color: #0794c9;
    color: #ffffff;
  }

  .about-section {
    position: relative;
    padding: 120px 0 70px;
  }

  .about-section .sec-title {
    margin-bottom: 45px;
  }

  .about-section .content-column {
    position: relative;
    margin-bottom: 50px;
  }

  .about-section .content-column .inner-column {
    position: relative;
    padding-left: 30px;
  }

  .about-section .text {
    margin-bottom: 20px;
    font-size: 16px;
    line-height: 26px;
    color: #848484;
    font-weight: 400;
  }

  .about-section .list-style-one {
    margin-bottom: 45px;
  }

  .about-section .btn-box {
    position: relative;
  }

  .about-section .btn-box a {
    padding: 15px 50px;
  }

  .about-section .image-column {
    position: relative;
  }

  .about-section .image-column .text-layer {
    position: absolute;
    right: -110px;
    top: 50%;
    font-size: 325px;
    line-height: 1em;
    color: #ffffff;
    margin-top: -175px;
    font-weight: 500;
  }

  .about-section .image-column .inner-column {
    position: relative;
    padding-left: 80px;
    padding-bottom: 0px;
  }

  .about-section .image-column .inner-column .author-desc {
    position: absolute;
    bottom: 16px;
    z-index: 1;
    background: orange;
    padding: 10px 15px;
    left: 96px;
    width: calc(100% - 152px);
    border-radius: 50px;
  }

  .about-section .image-column .inner-column .author-desc h2 {
    font-size: 21px;
    letter-spacing: 1px;
    text-align: center;
    color: #fff;
    margin: 0;
  }

  .about-section .image-column .inner-column .author-desc span {
    font-size: 16px;
    letter-spacing: 6px;
    text-align: center;
    color: #fff;
    display: block;
    font-weight: 400;
  }

  .about-section .image-column .inner-column:before {
    content: '';
    position: absolute;
    width: calc(50% + 80px);
    height: calc(100% + 160px);
    top: -80px;
    left: -3px;
    background: transparent;
    z-index: 0;
    border: 44px solid #00aeef;
  }

  .about-section .image-column .image-1 {
    position: relative;
  }

  .about-section .image-column .image-2 {
    position: absolute;
    left: 0;
    bottom: 0;
  }

  .about-section .image-column .image-2 img,
  .about-section .image-column .image-1 img {
    box-shadow: 0 30px 50px rgba(8, 13, 62, .15);
    border-radius: 46px;
  }

  .about-section .image-column .video-link {
    position: absolute;
    left: 70px;
    top: 170px;
  }

  .about-section .image-column .video-link .link {
    position: relative;
    display: block;
    font-size: 22px;
    color: #191e34;
    font-weight: 400;
    text-align: center;
    height: 100px;
    width: 100px;
    line-height: 100px;
    background-color: #ffffff;
    border-radius: 50%;
    box-shadow: 0 30px 50px rgba(8, 13, 62, .15);
    -webkit-transition: all 300ms ease;
    -moz-transition: all 300ms ease;
    -ms-transition: all 300ms ease;
    -o-transition: all 300ms ease;
    transition: all 300ms ease;
  }

  .about-section .image-column .video-link .link:hover {
    background-color: #191e34;
    color: #fff;
  }
</style>
<?php require 'utils/header.php'; ?>

<section class="about-section">
  <div class="container">
    <div class="row">
      <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
        <div class="inner-column">
          <div class="sec-title">
            <h2>We are Creative Tech Enthusiast working since 2015</h2>
          </div>
          <div class="text">We are orgnising the events to bring out your hidden talents . These events play a very important role student's social life . Organizing event is the best way to showcase student leadership and management skills at a very young age. Our aim is to bring enthusiasm and joy among the students . They can improve their skiills by participating in these events.</div>
          <div class="btn-box">
            <a href="contact.php" class="theme-btn btn-style-one">Contact Us</a>
          </div>
        </div>
      </div>
      <!-- Image Column -->
      <div class="image-column col-lg-6 col-md-12 col-sm-12">
        <div class="inner-column wow fadeInLeft">
          <!-- <div class="author-desc">
            <h2>Rahul Kumar Yadav</h2>
            <span>Web Developer</span>
          </div> -->
          <figure class="image-1"><a href="https://www.youtube.com/watch?v=i3zSVFWJDD4" class="lightbox-image" data-fancybox="images"><img title="Rahul Kumar Yadav" src="images/admin_bulding_aboutus.jpg" alt=""></a></figure>
        </div>
      </div>
    </div>
    <!-- <div class="sec-title">
      <span class="title">Our Future Goal</span>
      <h2>We want to lead in innovation & Technology</h2>
    </div>
    <div class="text">
      We works on UI/UX and functionality as well so that a plugins comes with proper stucture & stunning looks which suits to your web app & website.
    </div>
    <div class="text">
      We take a small toolkit here and ride it well so that it is fit for your use. One who performs well and looks even better.
    </div>
    <div class="text">
      Here we are trying to give you all kinds of technical content, whether it is related to designing or functionality. We are creating content on a lot of languages and will continue to make it free of cost even if you use it without any problem. Which is a very important thing.
    </div>
    <div class="text">
      Here you can also share the content you create, if our technical team likes it, then we will also share it on our blog.
    </div>
    <div class="text">

      In the end, I would say keep visiting our website and enjoy the quality content.
    </div>
  </div> -->
</section>
<!-- <hr class="blueline"> -->
</body>
<?php require 'utils/footer.php'; ?>

</html>