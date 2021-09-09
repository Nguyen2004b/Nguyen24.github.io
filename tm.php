<?php include('head.php');?>
<head>
  <title>Lịch Sử <?=$site_tenweb;?></title>
</head> 

<body id="app-container" class="menu-default show-spinner">
    <nav class="navbar fixed-top">
        <div class="d-flex align-items-center navbar-left">
            <a href="#" class="menu-button d-none d-md-block">
                <svg class="main" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 17">
                    <rect x="0.48" y="0.5" width="7" height="1" />
                    <rect x="0.48" y="7.5" width="7" height="1" />
                    <rect x="0.48" y="15.5" width="7" height="1" />
                </svg>
                <svg class="sub" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 17">
                    <rect x="1.56" y="0.5" width="16" height="1" />
                    <rect x="1.56" y="7.5" width="16" height="1" />
                    <rect x="1.56" y="15.5" width="16" height="1" />
                </svg>
            </a>

            <a href="#" class="menu-button-mobile d-xs-block d-sm-block d-md-none">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 17">
                    <rect x="0.5" y="0.5" width="25" height="1" />
                    <rect x="0.5" y="7.5" width="25" height="1" />
                    <rect x="0.5" y="15.5" width="25" height="1" />
                </svg>
            </a>

            <div class="search" data-search-path="Layouts.Search.html?q=">
                <input placeholder="Search...">
                <span class="search-icon">
                    <i class="simple-icon-magnifier"></i>
                </span>
            </div>
        </div>


        <a class="navbar-logo" href="/">
            <span class="logo d-none d-xs-block"></span>
            <span class="logo-mobile d-block d-xs-none"></span>
        </a>

        <div class="navbar-right">
            <div class="header-icons d-inline-block align-middle">
                <a class="btn btn-sm btn-outline-primary mr-2 d-none d-md-inline-block mb-2" href="https://www.facebook.com/V%C6%B0%C6%A1ng-Thanh-T%C3%B9ng-106376518212154">&nbsp;BUY&nbsp;</a>

                <div class="position-relative d-none d-sm-inline-block">
                    <button class="header-icon btn btn-empty" type="button" id="iconMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="simple-icon-grid"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right mt-3  position-absolute" id="iconMenuDropdown">
                        <a href="#" class="icon-menu-item">
                            <i class="iconsmind-Equalizer d-block"></i>
                            <span>Settings</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsmind-MaleFemale d-block"></i>
                            <span>Users</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsmind-Puzzle d-block"></i>
                            <span>Components</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsmind-Bar-Chart d-block"></i>
                            <span>Profits</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsmind-File-Chart d-block"></i>
                            <span>Surveys</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsmind-Suitcase d-block"></i>
                            <span>Tasks</span>
                        </a>

                    </div>
                </div>

                <div class="position-relative d-inline-block">
                    <button class="header-icon btn btn-empty" type="button" id="notificationButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="simple-icon-bell"></i>
                        <span class="count">3</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right mt-3 scroll position-absolute" id="notificationDropdown">

                        <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                            <a href="#">
                                <img src="img/profile-pic-l-2.jpg" alt="Notification Image" class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                            </a>
                            <div class="pl-3 pr-2">
                                <a href="#">
                                    <p class="font-weight-medium mb-1">Joisse Kaycee just sent a new comment!</p>
                                    <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                </a>
                            </div>
                        </div>

                        <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                            <a href="#">
                                <img src="img/notification-thumb.jpg" alt="Notification Image" class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                            </a>
                            <div class="pl-3 pr-2">
                                <a href="#">
                                    <p class="font-weight-medium mb-1">1 item is out of stock!</p>
                                    <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                </a>
                            </div>
                        </div>


                        <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                            <a href="#">
                                <img src="img/notification-thumb-2.jpg" alt="Notification Image" class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                            </a>
                            <div class="pl-3 pr-2">
                                <a href="#">
                                    <p class="font-weight-medium mb-1">New order received! It is total $147,20.</p>
                                    <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                </a>
                            </div>
                        </div>

                        <div class="d-flex flex-row mb-3 pb-3 ">
                            <a href="#">
                                <img src="img/notification-thumb-3.jpg" alt="Notification Image" class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                            </a>
                            <div class="pl-3 pr-2">
                                <a href="#">
                                    <p class="font-weight-medium mb-1">3 items just added to wish list by a user!</p>
                                    <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <button class="header-icon btn btn-empty d-none d-sm-inline-block" type="button" id="fullScreenButton">
                    <i class="simple-icon-size-fullscreen"></i>
                    <i class="simple-icon-size-actual"></i>
                </button>

            </div>

            <div class="user d-inline-block">
      
              <?php if(isset($_SESSION['username'])){?>
            
            
                <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <span class="name"><?=$my_username;?> - <font style="color: <?=$site_color;?>;"><?=format_cash($my_vnd);?></font></span>
                      

                    <span>
                        <img alt="Profile Picture" src="<?=$my_avt;?>" />
                    </span>
                </button>

                <div class="dropdown-menu dropdown-menu-right mt-3">
                    <a class="dropdown-item" href="/profile.php">Account</a>
                    <a class="dropdown-item" href="/tc.php">Nạp Tiền</a>
                    <a class="dropdown-item" href="#">History</a>
                    <a class="dropdown-item" href="#">Support</a>
                           <a class="dropdown-item" href="/admin/">Admin</a>
                    <a class="dropdown-item" href="/dang-xuat/">Sign out</a>  
                    
                    
                    
                    
                    
                    
                    <?php } else { ?>

            
            
                <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <span class="name">Tài Khoản</span>
                    <span>
                        <img alt="Profile Picture" src="https://baotricker.site/img/profile-pic-l.jpg" />
                    </span>
                </button>

                <div class="dropdown-menu dropdown-menu-right mt-3">
                    <a class="dropdown-item" href="/dang-nhap/">Đăng nhập</a>
                    <a class="dropdown-item" href="/dang-ky/">Đăng ký</a>
       
                              <?php }?>
                </div>
            </div>
        </div>
    </nav>
    <div class="sidebar">
        <div class="main-menu">
            <div class="scroll">
                <ul class="list-unstyled">
                  
                        <a href="#dashboard"><li>
                            <i class="iconsmind-Shop-4"></i>
                            <span>Dashboards</span>
                        </a>
                    </li>
                 <li>
                        <a href="#layouts">  
                        Dịch Vụ
                        </a>

                    <li  >
                        <a href="#landingPage" >    <span>VÍ TIỀN</span>
                        </a>
                    </li>
                    <li>
                        <a href="#menu">
                         <span>Tích Hợp API</span>
                        </a>
                    </li>
                    
                     <li>
                        <a href="#menu2">
                         <span>Đại Lý</span>
                        </a>
                    </li>
                              <li class="active">
                        <a href="/tm.php">
                         <span>Lịch Sử</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="sub-menu">
            <div class="scroll">
                <ul class="list-unstyled" data-link="dashboard">
                    <li >
                        <a href="/">
                            <i class="simple-icon-rocket"></i>Trang Chủ
                        </a>
                    </li>
                    <li>
                        <a href="/profile.php">
                        Tài Khoản 
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Hỗ Trợ <span class="badge badge-pill badge-outline-primary float-right mr-4">NEW</span></a>
                    </li>
                    <li>
                        <a href="/api/">
                             Tích Hợp Api<span class="badge badge-pill badge-outline-primary float-right mr-4">[VIP]</span>
                        </a>
                    </li>
                </ul>

                <ul class="list-unstyled" data-link="layouts">
                  <?php
$result = mysqli_query($ketnoi,"SELECT * FROM `category` ");
while($row = mysqli_fetch_assoc($result))
{
?>
                    <li >
                        <a href="/tt.php?id=<?=$row['code'];?>">
                       <?=$row['name'];?></a>
                    </li>
                    
<?php }?>
                </ul>
                <ul class="list-unstyled" data-link="landingPage">
            <li class="active">
                        <a href="/tc.php">
                       NẠP TIỀN <span class="badge badge-pill badge-outline-primary float-right mr-4">Giảm 10%</span></a>
                    </li>
                    
                    <li>
                        <a href="#">
                         Báo Lỗi </a>
                    </li>
                </ul>
                <ul class="list-unstyled" data-link="menu">
                  <li>
                        <a href="/tt.php?id=dich-vu-youtobe">
                     Api Thủ Công <span class="badge badge-pill badge-outline-primary float-right mr-4">SALE</span></a>
                    </li>
                    
                    <li>
                        <a href="#">
                         Api Auto </a>
                    </li>
                </ul>
                
                
                
                
                  <ul class="list-unstyled" data-link="menu2">
                  <li class="active">
                        <a href="/tt.php?id=dich-vu-youtobe">
                          Quản Lý đại lý<span class="badge badge-pill badge-outline-primary float-right mr-4">SALE</span></a>
                    </li>
                    
                    <li>
                        <a href="#">
                          Thuê Đại Lý</a>
                    </li>
                </ul>
                
                
                
                
                
                
                
                
                
                
                
                
            </div>
        </div>
    </div>

<main>

<div class="container-fluid mt--7">

            <div class="card-body pt-0 pt-md-4">
				      <div class="table-responsive">
              <table id="datatable1" class="table table-bordered table-striped">
                <thead class="thead-light">
                  <tr>
                    <th class="text-center" scope="col">STT</th>
                    <th class="text-center" scope="col">MÃ GD</th>
                    <th class="text-center" scope="col">DỊCH VỤ</th>
                    <th class="text-center" scope="col">INPUT</th>
                    <th class="text-center" scope="col">SỐ LƯỢNG</th>
                    <th class="text-center" scope="col">TỔNG TIỀN</th>
                    <th class="text-center" scope="col">THỜI GIAN TẠO</th>
                    <th class="text-center" scope="col">CẬP NHẬT</th>
                    <th class="text-center" scope="col">TRẠNG THÁI</th>
                    <th class="text-center" scope="col">GHI CHÚ</th>
                  </tr>
                </thead>
                <tbody>
<?php
$i = 0;
$result = mysqli_query($ketnoi,"SELECT * FROM `orders` WHERE `username` = '".$my_username."' ORDER BY id desc limit 0, 100");
while($row = mysqli_fetch_assoc($result))
{
?>
                  <tr>
                    <td class="text-center"><?=$i;?></td>
                    <td class="text-center"><?=$row['code'];?></th>
                    <td class="text-center"><span class="badge badge-default"><b class="text-white"><?=$row['service_name'];?></b></span></td>
                    <td class="text-center"><?=$row['url'];?></td>
                    <td class="text-center"><b style="color: blue;"><?=format_cash($row['amount']);?></b></td>
                    <td class="text-center"><b style="color: red;"><?=format_cash($row['money']);?></b></td>
                    <td class="text-center"><?=$row['createdate'];?></td>
                    <td class="text-center"><?=$row['updatedate'];?></td>
                    <td class="text-center"><?=status($row['status']);?></td>
                    <td class="text-center"><?=$row['note_status'];?></td>
                  </tr>
<?php $i++; } ?>
                </tbody>
              </table>
            </div>
          </div>
          </div>
        </div>
    </div></main>
   <?php if(!isset($_SESSION['username']))
{
    echo '<script type="text/javascript">setTimeout(function(){ location.href = "/dang-nhap/" },0);</script>';
    die();
}
?>
<?php include('foot.php');?>