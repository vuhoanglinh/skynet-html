<?php
/**
 * Template Name: Page Skynet
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=1280" />
    <meta charset="utf-8" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="shortcut icon" href="<?php echo esc_url( (mx_get_options_key('favicon') != "") ? mx_get_options_key('favicon') : get_template_directory_uri()."/img/favicon.png" );?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php esc_url( bloginfo( 'pingback_url' ) ); ?>">
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/ie10-viewport-bug-workaround.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
    <![endif]-->
    
    <?php wp_head(); ?>
    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700italic,700,300,500' rel='stylesheet' type='text/css'>
    <link href='<?php echo get_template_directory_uri(); ?>/assets/css/normalize.css' rel='stylesheet' type='text/css'>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- Bootstrap Material Design -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap-material-design.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/ripples.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.min.css">
    <link href='<?php echo get_template_directory_uri(); ?>/assets/css/style.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/set1.css">
    <!-- Modernizr -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/modernizr.js"></script>
    <style type="text/css">
        html, body {
            margin-top: 0 !important;
        }
    </style>
<body>
  <div class="header">
      <div class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" title="Skynet Việt Nam" />
      </div>
      <div class="info">
        <i class="fa fa-envelope"></i>
        <a href="mailto:info@skynetvietnam.com.vn">info@skynetvietnam.com.vn</a>
        <br>
        <i class="fa fa-phone"></i> 1800 6799 - 08.3820 0338
        <br>
        <i class="fa fa-home"></i> Floor 9, 14 Phan Tôn, Dakao, Dist.1, HCMC
      </div>
      <h4 class="logan text-center">
        <span class="heading">
          "CONNECT TO SUCCESS - KẾT NỐI ĐỂ THÀNH CÔNG"
        </span>        
      </h4>
    </div>
  <div id="wrapper">
        <div id="flipbook">
            <!-- page 1 -->
            <div class="fixed">
                <!-- En begin -->
                <div class="en">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#about">ABOUT US</a></li>
                        <li><a href="#services" aria-controls="services">SERVICES</a></li>
                        <li><a href="#people">OUR PEOPLE</a></li>
                        <li><a href="#community">NEWS</a></li>
                        <li><a href="#contact">CONTACT</a></li>
                    </ul>
                    <div class="tab-content">
                        <div>
                          <h2 class="section_title">WELCOME<br />TO SKYNET VIETNAM</h2>
                            <div class="section_title_line"></div>
                            <div class="section_content">
                              We are a telemarketing and direct 
                              marketing company in Vietnam ...
                              Have a look around.
                              We’re sure you will see something 
                              you like.
                              Thanks.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- En end -->
            </div>
            <!-- page 1 -->
            <div>
                <!-- En begin -->
                <div class="en">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#about">ABOUT US</a></li>
                        <li><a href="#services" aria-controls="services">SERVICES</a></li>
                        <li><a href="#people">OUR PEOPLE</a></li>
                        <li><a href="#community">NEWS</a></li>
                        <li><a href="#contact">CONTACT</a></li>
                    </ul>
                    <div class="tab-content">
                        <div>
                            <h2 class="section_title">WELCOME<br />TO SKYNET VIETNAM</h2>
                            <div class="section_title_line"></div>
                            <div class="section_content">
                              We are a telemarketing and direct 
                              marketing company in Vietnam ...
                              Have a look around. 
                              We’re sure you will see something 
                              you like.
                              Thanks.
                            </div>
                        </h2>
                        </div>
                    </div>
                </div>
                <!-- En end -->
            </div>
            <div>
                <!-- Vi begin -->
                <div class="vi">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#chungtoi">VỀ CHÚNG TÔI</a></li>
                        <li><a href="#dichvu">DỊCH VỤ</a></li>
                        <li><a href="#nhansu">VỀ NHÂN SỰ</a></li>
                        <li><a href="#congdong">TIN TỨC</a></li>
                        <li><a href="#lienhe">LIÊN HỆ</a></li>
                    </ul>
                    <div class="tab-content">
                        <div>
                          <h2 class="section_title">CHÀO MỪNG <br />ĐẾN VỚI SKYNET VIETNAM</h2>
                            <div class="section_title_line"></div>
                            <div class="section_content">
                              Chúng tôi là công ty chuyên về dịch vụ tiếp thị, bán hàng qua điện
                              thoại và trực tiếp hàng đầu Việt Nam.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Vi end -->
            </div>
            <!-- page 1 -->
            <!-- page 2 -->
            <div>
                <!-- En begin -->
                <div class="en">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li><a href="#about">ABOUT US</a></li>
                        <li class="active"><a href="#services" aria-controls="services">SERVICES</a></li>
                        <li><a href="#people">OUR PEOPLE</a></li>
                        <li><a href="#community">NEWS</a></li>
                        <li><a href="#contact">CONTACT</a></li>
                    </ul>
                    <div class="tab-content">
                        <div>
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-info">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"aria-expanded="true" aria-controls="collapseOne">
                                 1. Call Center setup and for rent:
                                </a>
                              </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <div class="list-group">
                                                <div class="list-group-item">
                                                    <div class="row-content">
                                                        <p class="list-group-item-heading">
                                                            <ul>
                                                                <li>Office space</li>
                                                                <li>Interrior decoration</li>
                                                                <li>Facilities setup</li>
                                                                <li>Call Center system setup</li>
                                                            </ul>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-info">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  2. HR recruitment, training and providing
                                </a>
                              </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <div class="list-group">
                                                <div class="list-group-item">
                                                    <div class="row-content">
                                                        <p class="list-group-item-heading">
                                                            <ul>
                                                                <li>Staff and project leader for Telemarketing</li>
                                                                <li>PGs for event</li>
                                                                <li>Sale staff for activation</li>
                                                                <li>Production manager for event, Construction engineer for office, showroom… building or renewing</li>
                                                            </ul>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-info">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                  3. Telemarketing
                                </a>
                              </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <div class="list-group">
                                                <div class="list-group-item">
                                                    <div class="row-content">
                                                        <p class="list-group-item-heading">
                                                            <ul>
                                                                <li>Telesales</li>
                                                                <li>Tele survey</li>
                                                                <li>Tele follow up</li>
                                                                <li>Hotline/Customer service</li>
                                                            </ul>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-info">
                                    <div class="panel-heading" role="tab" id="headingFour">
                                        <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                  4. Direct marketing
                                </a>
                              </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                        <div class="panel-body">
                                            <div class="list-group">
                                                <div class="list-group-item">
                                                    <div class="row-content">
                                                        <p class="list-group-item-heading">
                                                                <li>Event: Fair, exhibition, semina, launch, sale event…</li>
                                                                <li>Brand activation</li>
                                                                <li>Direct sale</li>
                                                                <li>Data base</li>
                                                            </ul>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-info">
                                    <div class="panel-heading" role="tab" id="headingFive">
                                        <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                  5. Design and production
                                </a>
                              </h4>
                                    </div>
                                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                        <div class="panel-body">
                                            <div class="list-group">
                                                <div class="list-group-item">
                                                    <div class="row-content">
                                                        <p class="list-group-item-heading">
                                                                <li>Office, sale booth, showroom…</li>
                                                                <li>Stage and advertising items for events…</li>
                                                                
                                                            </ul>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- En end -->
            </div>
            <div>
                <!-- Vi begin -->
                <div class="vi">
                    <ul class="nav nav-tabs">
                        <li><a href="#chungtoi">VỀ CHÚNG TÔI</a></li>
                        <li class="active"><a href="#dichvu">DỊCH VỤ</a></li>
                        <li><a href="#nhansu">VỀ NHÂN SỰ</a></li>
                        <li><a href="#congdong">TIN TỨC</a></li>
                        <li><a href="#lienhe">LIÊN HỆ</a></li>
                    </ul>
                    <div class="tab-content">
                        <div >
                            <div class="panel-group" id="accordionVI" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-info">
                                    <div class="panel-heading" role="tab" id="headingOneVi">
                                        <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordionVI" href="#collapseOneVi"aria-expanded="true" aria-controls="collapseOneVi">
                                 1. Xây dựng và cho thuê trung tâm gọi điện thoại
                                </a>
                              </h4>
                                    </div>
                                    <div id="collapseOneVi" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOneVi">
                                        <div class="panel-body">
                                            <div class="list-group">
                                                <div class="list-group-item">
                                                    <div class="row-content">
                                                        <p class="list-group-item-text">
                                                            <ul>
                                                                <li>Cho thuê văn phòng</li>
                                                                <li>Thiết kế và trang trí nội thất</li>
                                                                <li>Cung cấp trang thiết bị</li>
                                                                <li>Cung cấp hệ thống phần mềm</li>
                                                            </ul>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-info">
                                    <div class="panel-heading" role="tab" id="headingTwoVi">
                                        <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionVI" href="#collapseTwoVi" aria-expanded="false" aria-controls="collapseTwoVi">
                                  2. Tuyển dụng, đào tạo và cung cấp nhân sự
                                </a>
                              </h4>
                                    </div>
                                    <div id="collapseTwoVi" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwoVi">
                                        <div class="panel-body">
                                            <div class="list-group">
                                                <div class="list-group-item">
                                                    <div class="row-content">
                                                        <p class="list-group-item-text">
                                                            <ul>
                                                                <li>Nhân viên, nhóm trưởng cho dịch vụ chăm sóc khách hàng qua điện thoại</li>
                                                                <li>Lễ tân cho sự kiện</li>
                                                                <li>Nhân viên bán hàng cho dịch vụ kích hoạt bán hàng</li>
                                                                <li>Quản lý xây dựng gian hàng, văn phòng…, dàn dựng sự kiện</li>
                                                            </ul>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-info">
                                    <div class="panel-heading" role="tab" id="headingThreeVi">
                                        <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionVI" href="#collapseThreeVi" aria-expanded="false" aria-controls="collapseThreeVi">
                                  3. Tiếp thị qua điện thoại
                                </a>
                              </h4>
                                    </div>
                                    <div id="collapseThreeVi" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <div class="list-group">
                                                <div class="list-group-item">
                                                    <div class="row-content">
                                                        <p class="list-group-item-text">
                                                            <ul>
                                                                <li>Bán hàng qua điện thoại</li>
                                                                <li>Khảo sát qua điện thoại</li>
                                                                <li>Tiếp tục giữ quan hệ khách hàng qua điện thoại</li>
                                                                <li>Đường đây nóng/ Chăm sóc khách hàng</li>
                                                            </ul>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-info">
                                    <div class="panel-heading" role="tab" id="headingFourVi">
                                        <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionVI" href="#collapseFourVi" aria-expanded="false" aria-controls="collapseFourVi">
                                  4. Tiếp thị trực tiếp
                                </a>
                              </h4>
                                    </div>
                                    <div id="collapseFourVi" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFourVi">
                                        <div class="panel-body">
                                            <div class="list-group">
                                                <div class="list-group-item">
                                                    <div class="row-content">
                                                        <p class="list-group-item-text">
                                                            <ul>
                                                                <li>Sự kiện: Hội chợ, triển lãm, hội thảo…</li>
                                                                <li>Kích hoạt bán hàng</li>
                                                                <li>Bán hàng trực tiếp</li>
                                                                <li>Thu thập thông tin khách hàng mới</li>
                                                            </ul>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-info">
                                    <div class="panel-heading" role="tab" id="headingFiveVi">
                                        <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionVI" href="#collapseFiveVi" aria-expanded="false" aria-controls="collapseFiveVi">
                                  5. Thiết kế và sản xuất
                                </a>
                              </h4>
                                    </div>
                                    <div id="collapseFiveVi" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFiveVi">
                                        <div class="panel-body">
                                            <div class="list-group">
                                                <div class="list-group-item">
                                                    <div class="row-content">
                                                        <p class="list-group-item-text">
                                                            <ul>
                                                                <li>Văn phòng, gian hàng, phòng trưng bày</li>
                                                                <li>Sân khấu và các vật phẩm quảng bá cho sự kiện</li>
                                                            </ul>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Vi end -->
            </div>
            <!-- page 2 -->
            <!-- page 3 -->
            <div>
                <!-- En begin -->
                <div class="en">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li><a href="#about">ABOUT US</a></li>
                        <li><a href="#services" aria-controls="services">SERVICES</a></li>
                        <li class="active"><a href="#people">OUR PEOPLE</a></li>
                        <li><a href="#community">NEWS</a></li>
                        <li><a href="#contact">CONTACT</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="grid">
                            <figure class="effect-zoe" data-toggle="modal" data-target="#modal1">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/le-phi-phung1.jpg" alt="Le Thi My Phung"/>
                                <figcaption>
                                    <h2>More Info</h2>
                                </figcaption>           
                            </figure>                            
                            <figure class="effect-zoe" data-toggle="modal" data-target="#modal2">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cao-kim-thuy2.jpg" alt="Cao Kim Thuy"/>
                                <figcaption>
                                    <h2>More Info</h2>
                                </figcaption>           
                            </figure>
                            <figure class="effect-zoe" data-toggle="modal" data-target="#modal3">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/le-thi-sang3.jpg" alt="Le Thi Sang"/>
                                <figcaption>
                                    <h2>More Info</h2>
                                </figcaption>           
                            </figure>
                        </div>
                        <div class="grid grid-auto">
                            <figure class="effect-zoe" data-toggle="modal" data-target="#modal4">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nguyen-ngoc-minh-tri4.jpg" alt="Nguyen Ngoc Minh Tri"/>
                                <figcaption>
                                    <h2>More Info</h2>
                                </figcaption>           
                            </figure>
                            <figure class="effect-zoe" data-toggle="modal" data-target="#modal5">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/huynh-van-quan5.jpg" alt="Huynh Van Quan"/>
                                <figcaption>
                                    <h2>More Info</h2>
                                </figcaption>           
                            </figure>
                        </div>   
                    </div>
                </div>
                <!-- En end -->
            </div>
            <div>
                <!-- Vi begin -->
                <div class="vi">
                    <ul class="nav nav-tabs">
                        <li><a href="#chungtoi">VỀ CHÚNG TÔI</a></li>
                        <li><a href="#dichvu">DỊCH VỤ</a></li>
                        <li class="active"><a href="#nhansu">VỀ NHÂN SỰ</a></li>
                        <li><a href="#congdong">TIN TỨC</a></li>
                        <li><a href="#lienhe">LIÊN HỆ</a></li>
                    </ul>
                    
                </div>
                <!-- Vi end -->
            </div>
            <!-- page 3 -->
            <!-- page 4 -->
            <div>
                <!-- En begin -->
                <div class="en">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li><a href="#about">ABOUT US</a></li>
                        <li><a href="#services" aria-controls="services">SERVICES</a></li>
                        <li><a href="#people">OUR PEOPLE</a></li>
                        <li class="active"><a href="#community">NEWS</a></li>
                        <li><a href="#contact">CONTACT</a></li>
                    </ul>
                    <div>
                        <h2 class="section_title">There will be many interesting things will be updated soon</h2>
                    </div>
                </div>
                <!-- En end -->
            </div>
            <div>
                <!-- Vi begin -->
                <div class="vi">
                    <ul class="nav nav-tabs">
                        <li><a href="#chungtoi">VỀ CHÚNG TÔI</a></li>
                        <li><a href="#dichvu">DỊCH VỤ</a></li>
                        <li><a href="#nhansu">VỀ NHÂN SỰ</a></li>
                        <li class="active"><a href="#congdong">TIN TỨC</a></li>
                        <li><a href="#lienhe">LIÊN HỆ</a></li>
                    </ul>
                    <div>
                        <h2 class="section_title">Sẽ có nhiều điều thú vị sẽ được cập nhật sớm</h2>
                    </div>
                </div>
                <!-- Vi end -->
            </div>
            <!-- page 4 -->
            <!-- page 5 -->
            <div>
                <!-- En begin -->
                <div class="en">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li><a href="#about">ABOUT US</a></li>
                        <li><a href="#services" aria-controls="services">SERVICES</a></li>
                        <li><a href="#people">OUR PEOPLE</a></li>
                        <li><a href="#community">NEWS</a></li>
                        <li class="active"><a href="#contact">CONTACT</a></li>
                    </ul>
                    <div class="tab-content">
                        <div  id="about">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3>Contact info</h3>
                                    <p>
                                        <strong><i class="fa fa-envelope"></i>
                                    <a href="mailto:info@skynetvietnam.com.vn">info@skynetvietnam.com.vn</a></strong>
                                        <br />
                                        <strong><i class="fa fa-phone"></i>
                                    1800 6799 - 08.3820 0338 - 0929 902 202</strong>
                                        <br />
                                        <i class="fa fa-home"></i>
                                        <strong>Ho Chi Minh Office</strong>
                                        <br /> Floor 9, 14 Phan Tôn, Dakao, Dist.1, HCMC
                                    </p>
                                </div>
                                <div class="col-lg-12">
                                    <p><i>Please send requests and your comments to us by filling out
the information below and click the submit button</i></p>
                                    <div class="well bs-component">
                                      <?php 
                                        echo do_shortcode('[contact-form-7 id="668" title="Contact - English"]');
                                      ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- En end -->
            </div>
            <div>
                <!-- Vi begin -->
                <div class="vi">
                    <ul class="nav nav-tabs">
                        <li><a href="#chungtoi">VỀ CHÚNG TÔI</a></li>
                        <li><a href="#dichvu">DỊCH VỤ</a></li>
                        <li><a href="#nhansu">VỀ NHÂN SỰ</a></li>
                        <li><a href="#congdong">TIN TỨC</a></li>
                        <li class="active"><a href="#lienhe">LIÊN HỆ</a></li>
                    </ul>
                    <div class="tab-content">
                        <div >
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3>Thông tin liên hệ</h3>
                                    <p>
                                        <strong><i class="fa fa-envelope"></i>
                                    <a href="mailto:info@skynetvietnam.com.vn">info@skynetvietnam.com.vn</a></strong>
                                        <br />
                                        <strong><i class="fa fa-phone"></i>
                                    1800 6799 - 0929 902 202</strong>
                                        <br />
                                        <i class="fa fa-home"></i>
                                        <strong>Văn phòng Hồ Chí Minh</strong>
                                        <br /> Lầu 9, 14 Phan Tôn, Phường Dakao, Quận 1, TP Hồ Chí Minh.
                                    </p>
                                </div>
                                <div class="col-lg-12">
                                    <p><i>Xin vui lòng gửi yêu cầu và ý kiến của bạn cho chúng tôi
bằng cách điền vào các thông tin bên dưới và nhấn nút gửi.</i></p>
                                    <div class="well bs-component">
                                        <?php 
                                          echo do_shortcode('[contact-form-7 id="677" title="Contact - Viet"]');
                                        ?>  
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Vi end -->
            </div>
            <!-- page 5 -->
        </div>
    </div>

<!-- Modal -->
    <div id="modal1" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title section_title">Le Thi Kim Phung</h4>
            <div class="section_title_line"></div>
          </div>
          <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>Position:</th>
                                <td>President</td>
                            </tr>
                            <tr>
                                <th>Education:</th>
                                <td>* BA – Hanoi Language University <br/>
                                    * Kent Institute of Business and Technology <br/>
                                     (Business management)
                                    </td>
                            </tr>
                            <tr>
                                <th>DOB:</th>
                                <td>1970</td>
                            </tr>
                            <tr>
                                <th>Expertise:</th>
                                <td>PR, Marketing Strategy.</td>
                            </tr>
                            <tr class="red">
                                <td colspan="2">
                                    Experience: 22 years
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p>
                                        - <strong>PR:</strong> FV Hospital <br/>
                                        - <strong>Marketing strategy:</strong> Coca Cola, Sanofi Adventis, AGSI, L’ovite, BTA, SAB, Nino-Max <br/>
                                        - <strong>Brand marketing:</strong> Unilever (Sunsilk, Pond’s, Knoor, Omo), BAT,  AMB, Shell, Mango, VP Bank,  SamSung, Viettravel,  Turkish Airline, PNJ, CPC, Bayer Phamar, Nokia cellphone, Lipovita, Heineken, Pond’s, Omo, Sunsilk, Hazeline, Metro Cash & Carry…, Bitexco, BP, Singapore Tourism, HSBC….
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
          </div>
        </div>

      </div>
    </div> 

     <!-- Modal -->
    <div id="modal2" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title section_title">Cao Kim Thuy</h4>
            <div class="section_title_line"></div>
          </div>
          <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>Position:</th>
                                <td>Operation Director</td>
                            </tr>
                            <tr>
                                <th>Education:</th>
                                <td>MBA (Quality Management, France)</td>
                            </tr>
                            <tr>
                                <th>DOB:</th>
                                <td>1977</td>
                            </tr>
                            <tr>
                                <th>Expertise:</th>
                                <td>Telesales, Customer Service, CRM, Database building</td>
                            </tr>
                            <tr class="red">
                                <td colspan="2">
                                    Experience: 14 years
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p>
                                        - <strong>Telesales:</strong> Credit Card & Persional Loan: HSBC, SCB, VPBank, Prudential Finance<br/>
                                        Life Insurance: AIA<br/>
                                        Wine: Remy Martin, Johnnie Walker, Peroni<br/>
                                        Nutrition: Nestle, Abbott <br/>
                                        <br/>
                                        - <strong>Customer Service:</strong> Coca-Cola, Nestle,  MSD (Vaccine), Sony Ericsson <br/>
                                        - <strong>Database building:</strong> GMV (Chevrolet), City Garden, ANZ, Prudential <br/>
                                        - <strong>CRM:</strong> Abbott, Samsung, Clearmen, Huggies, Pedigree
                                        <br/>
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Modal -->
    <div id="modal3" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title section_title">Le Thi Sang</h4>
            <div class="section_title_line"></div>
          </div>
          <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>Position:</th>
                                <td>Project Leader </td>
                            </tr>
                            <tr>
                                <th>Education:</th>
                                <td>University of Economics <br />
                                    University of Social Sciences & Humanities
                                    </td>
                            </tr>
                            <tr>
                                <th>DOB:</th>
                                <td>1979</td>
                            </tr>
                            <tr>
                                <th>Expertise:</th>
                                <td>Telesales, Direct sales, Training </td>
                            </tr>
                            <tr class="red">
                                <td colspan="2">
                                    Experience: 12 years
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p>
                                        - <strong>Telesales:</strong> Credit Card & Persional Loan: ANZ, ACB, Techcombank, VPBank<br/>
                                        Life Insurance: Prudential <br/>
                                        Nutrition: Abbott
                                        <br/>
                                        - <strong>Direct sales:</strong> ANZ <br/>
                                        - <strong>Training:</strong> Abbott, ANZ, Tìm Việc Nhanh
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
          </div>
        </div>

      </div>
    </div> 

    <!-- Modal -->
    <div id="modal4" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title section_title">Nguyen Ngoc Minh Sang</h4>
            <div class="section_title_line"></div>
          </div>
          <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>Position:</th>
                                <td>Assistant Project Leader</td>
                            </tr>
                            <tr>
                                <th>Education:</th>
                                <td>BA (Technology - HUTECH)</td>
                            </tr>
                            <tr>
                                <th>DOB:</th>
                                <td>1981</td>
                            </tr>
                            <tr>
                                <th>Expertise:</th>
                                <td>Telesales, Recruitment</td>
                            </tr>
                            <tr class="red">
                                <td colspan="2">
                                    Experience: 12 years
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p>
                                        - <strong>Telesales:</strong>Credit Card & Persional Loan: Maritime, ANZ, SCB, VPBank
                                        Assurance Private: Prudential <br/>
                                        Nutrition: Abbott <br/>
                     
                                        <br/>
                                        - <strong>Recruitment:</strong> ANZ, Abbott
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Modal -->
    <div id="modal5" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title section_title">Huynh Van Quan</h4>
            <div class="section_title_line"></div>
          </div>
          <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>Position:</th>
                                <td>Production  Director</td>
                            </tr>
                            <tr>
                                <th>Education:</th>
                                <td>BA (Architect)</td>
                            </tr>
                            <tr>
                                <th>DOB:</th>
                                <td>1978</td>
                            </tr>
                            <tr>
                                <th>Expertise:</th>
                                <td>Design, Decoration, Production</td>
                            </tr>
                            <tr class="red">
                                <td colspan="2">
                                    Experience: 15 years
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p>
                                        - <strong>Designer:</strong>Pho Xinh, CHiLAi
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/ripples.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/material.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib/hash.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib/turn.min.js"></script>
    <script>
    $(function() {
        $.material.init();

    });


    var flipbook = $("#flipbook");
    flipbook.turn({
        width: 1200,
        height: 600
    });
    if (flipbook.turn('is'))
        flipbook.turn('page', 2);

    $(document).ready(function() {
        var object = {
            about: 3,
            services: 5,
            people: 7,
            community: 9,
            contact: 11,
            chungtoi: 3,
            dichvu: 5,
            nhansu: 7,
            congdong: 9,
            lienhe: 11,
        };

        Hash.on('^([a-z]*)$', {
            yep: function(path, parts) {
                var page = parts[0];
                if (page !== undefined) {
                    if (flipbook.turn('is'))
                        flipbook.turn('page', object[page]);
                }
            },
            nop: function(path) {
               if (flipbook.turn('is')) {
                var substring = "wp";
                if(page.indexOf(substring) !=-1) {
                    flipbook.turn('page', 11);    
                } else {
                    flipbook.turn('page', 3);
                }
                console.log(path);
            }

            }
        });

    });
    </script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/snow.js"></script>
    <script type='text/javascript'>
//<![CDATA[
document.write('<style type="text/css">body{background:#f5465a;padding-bottom:150px}</style><img style="position:fixed;z-index:999;top:0;left:0" src="https://lh6.googleusercontent.com/-c8CoUvCourw/UMcWWTeBE-I/AAAAAAAABcU/q-j9X7733zw/s150/top-left.png"/><img style="position:fixed;z-index:999;top:0;right:0" src="https://lh5.googleusercontent.com/-JABklf9ModU/UMcWWzSSJ4I/AAAAAAAABcY/g4sZMhrgjXU/s150/top-right.png"/><div style="position:fixed;z-index:999;bottom:0;left:0;width:100%;height:104px;background:url(https://smartbb.googlecode.com/svn/trunk/dgm-footer.png) repeat-x bottom left;"></div><img style="position:fixed;z-index:999;bottom:30px;left:30px" src="https://lh4.googleusercontent.com/-mEgGUg-ou4k/UMcz0qy2NhI/AAAAAAAABc0/gF1uW4iE6y0/s180/bottom-left.png"/>');var no=100;var hidesnowtime=0;var snowdistance='pageheight';var ie4up=(document.all)?1:0;var ns6up=(document.getElementById&&!document.all)?1:0;function iecompattest(){return(document.compatMode&&document.compatMode!='BackCompat')?document.documentElement:document.body}var dx,xp,yp;var am,stx,sty;var i,doc_width=800,doc_height=600;if(ns6up){doc_width=self.innerWidth;doc_height=self.innerHeight}else if(ie4up){doc_width=iecompattest().clientWidth;doc_height=iecompattest().clientHeight}dx=new Array();xp=new Array();yp=new Array();am=new Array();stx=new Array();sty=new Array();for(i=0;i<no;++i){dx[i]=0;xp[i]=Math.random()*(doc_width-50);yp[i]=Math.random()*doc_height;am[i]=Math.random()*20;stx[i]=0.02+Math.random()/10; sty[i]=0.7+Math.random();if(ie4up||ns6up){document.write('<div id="dot'+i+'" style="POSITION:absolute;Z-INDEX:'+i+';VISIBILITY:visible;TOP:15px;LEFT:15px;"><span style="font-size:18px;color:#fff">*</span></div>')}}function snowIE_NS6(){doc_width=ns6up?window.innerWidth-10:iecompattest().clientWidth-10;doc_height=(window.innerHeight&&snowdistance=='windowheight')?window.innerHeight:(ie4up&&snowdistance=='windowheight')?iecompattest().clientHeight:(ie4up&&!window.opera&&snowdistance=='pageheight')?iecompattest().scrollHeight:iecompattest().offsetHeight;for(i=0;i<no;++i){yp[i]+=sty[i];if(yp[i]>doc_height-50){xp[i]=Math.random()*(doc_width-am[i]-30);yp[i]=0;stx[i]=0.02+Math.random()/10;sty[i]=0.7+Math.random()}dx[i]+=stx[i];document.getElementById('dot'+i).style.top=yp[i]+'px';document.getElementById('dot'+i).style.left=xp[i]+am[i]*Math.sin(dx[i])+'px'}snowtimer=setTimeout('snowIE_NS6()',10)}function hidesnow(){if(window.snowtimer){clearTimeout(snowtimer)}for(i=0;i<no;i++)document.getElementById('dot'+i).style.visibility='hidden'}if(ie4up||ns6up){snowIE_NS6();if(hidesnowtime>0)setTimeout('hidesnow()',hidesnowtime*1000)}
//]]>
</script>
</body>
</html>