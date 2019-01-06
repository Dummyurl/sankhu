<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"  lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/ng.png">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">

  <title><?php echo SITE_Title ?></title>


  <!-- Bootstrap core CSS -->


  <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <script>window.jQuery || document.write('<script src="<?php echo base_url();?>assets/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

  <script src="<?php echo base_url();?>assets/js/vendor/popper.min.js"></script>

  <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="<?php echo base_url();?>assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

  <script src="<?php echo base_url();?>assets/js/vendor/jquery.nicescroll.min.js"></script>

  <!-- map -->
  <link href="<?php echo base_url();?>assets/css/sitemapstyler.css" rel="stylesheet" type="text/css" media="screen" />

  <!-- Custom fonts for this template -->
  <link href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url();?>assets/css/landing-page.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/styles.css">

  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

  <link rel="stylesheet" href="assets/css/jquery.dropdown.css">

<!--   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/new.css"> -->

<!-- datatable -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>
<!-- datatable end -->
<!-- end data -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"/>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/leaflet.label.css">
  <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/leaflet.label.js"></script>

  <script src="<?php echo base_url();?>assets/js/carousels.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/sitemapstyler.js"></script>
  <script src="<?php echo base_url();?>assets/js/vendor/jquery.matchHeight.js"></script>
  <script src="<?php echo base_url();?>assets/js/plugins.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700,800" rel="stylesheet">

  <script>
    $(document).ready(function(){
      var imgSrc = $('.banner-item>img').attr('src');
      $('.banner-item').css({"background" : "url("+imgSrc+")", "background-position": "center", "background-size": "cover"});
      $(".banner-item>img").remove();
    });
  </script>
  <!-- div is created to keep the map in its certain area whichever amount of area is located to display the map -->
<style type="text/css">
  .scrolling-wrap{
    overflow-x: hidden !important;
  }
  .leaflet-popup-content {

    overflow: auto;
  }

  div#map {
    margin-top: 44px ;
  }


  #load{
    width:100%;
    height:100%;
    position:fixed;
    z-index:9999;
    background:url("img/loader.gif") no-repeat center center rgba(0,0,0,0.25)
  }




  }
  #over_map {
    position: absolute;
    top: 117px;
    left: 12px;
    z-index: 999;
  }

  .subscribe-wrap .fbox .list-group a, .subscribe-wrap .fbox .list-group a:hover{
  color: #fff;
  }


  body {
    overflow-x: hidden;
  }

  /**/
</style>
</head>

<body>
   <!--[if lt IE 8]>
     <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
        <div id="load" style="background-color: white;"></div>

          <header id="website-header">
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
              <div class="container">
                <a class="navbar-brand" href="<?php echo base_url();?>">
                  <div class="logo-gov clearfix">
                    <?php if(SITE_SLOGAN_EN): ?>
                    <img src="<?php echo SITE_SLOGAN_EN ?>" alt="Logo">
                    <?php endif; ?>
                    <h6>
                    <?php if(SITE_NAME_EN): ?>
                      <strong><?php echo SITE_NAME_EN ?></strong>
                    <?php endif; if(SITE_TEXT_EN): ?>
                     <div class="sub-head"> <small><?php echo SITE_TEXT_EN ?></small> </div>
                   <?php endif; ?>
                     <!-- <strong>Page Speed <?php echo $this->benchmark->elapsed_time(); ?></strong> -->
                    </h6>
                  </div>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item <?php if($this->uri->segment(1) == '') { echo "active"; } ?>">
                      <a class="nav-link" href="<?php echo base_url()?>"><?php echo NAV_SEVEN ?> <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item <?php if($this->uri->segment(1) == 'category') { echo "active"; } ?>">
                      <a class="nav-link" href="<?php echo base_url()?>category?tbl=0 && name=0"><?php echo NAV_ONE ?></a>
                    </li>
                    <li class="nav-item <?php if($this->uri->segment(1) == 'report_page') { echo "active"; } ?>">
                      <a class="nav-link" href="<?php echo base_url()?>report_page"><?php echo NAV_TWO ?></a>
                    </li>
                    <li class="nav-item <?php if($this->uri->segment(1) == 'contact') { echo "active"; } ?>">
                      <a class="nav-link" href="<?php echo base_url()?>contact"><?php echo NAV_THREE ?></a>
                    </li>
                    <li class="nav-item <?php if($this->uri->segment(1) == 'inventory') { echo "active"; } ?>">
                      <a class="nav-link" href="<?php echo base_url()?>inventory"><?php echo NAV_FOUR ?></a>
                    </li>
                    <li class="nav-item <?php if($this->uri->segment(1) == 'datasets') { echo "active"; } ?>">
                     <a class="nav-link" href="<?php echo base_url()?>datasets"><?php echo NAV_FIVE ?></a>
                    </li>
                    <li class="nav-item <?php if($this->uri->segment(1) == 'publication') { echo "active"; } ?>">
                     <a class="nav-link" href="<?php echo base_url()?>publication"><?php echo NAV_SIX ?></a>
                    </li>
                      <?php
                      if($this->session->userdata('Language')==NULL){

                        $this->session->set_userdata('Language','nep');
                      }

                      $lang=$this->session->get_userdata('Language');

                        if($lang['Language']=='en'){

                      ?>
                      <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="<?php echo base_url();?>nep?urll=<?php echo $urll ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="la la-language"></i> : En
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo base_url();?>nep?urll=<?php echo $urll ?>">नेपाली</a>
                      </div>
                      </li>
                    <?php }else{ ?>
                      <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="<?php echo base_url();?>nep?urll=<?php echo $urll ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="la la-language"></i> : ने
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo base_url();?>en?urll=<?php echo $urll ?>">English</a>
                      </div>
                      </li>
                    <?php } ?>
                  </ul>
                </div>

              </div>
            </nav>

          </header>

          <script>
          // console.log('header');
          // $('.lang-nav').click(function(){
          // var lang_name=$(this).attr('name');
          // console.log(lang_name);
          // if(lang_name =='en'){
          //   $(this).attr("id","nep");
          //   $('.lang-name').html('nep').trigger('change');
          // }else{
          //   $(this).attr("id","en");
          //   $('.lang-name').html('en').trigger('change');
          // }
          //
          // });
          </script>
