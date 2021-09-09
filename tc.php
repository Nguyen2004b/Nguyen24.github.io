<?php include('head.php');?>

<head>
    <title>Nạp Tiền | <?=$site_tenweb;?></title>
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

                    <li  class="active">
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
                                <li>
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
<div class="container-fluid">
<div class="row">
<div class="col-12">
<h1 class="text-uppercase font-weight-bold">Nạp tiền</h1>
<div class="separator mb-5"></div>
</div>
</div>
<div class="card">
<div class="card-header">
<ul class="nav nav-tabs mb-3" role="tablist">
<li class="nav-item">
<a class="nav-link active" id="home-tab" data-toggle="tab" href="#order" role="tab" aria-controls="order" aria-selected="true">Nap bằng thẻ cào</a>
</li>

<li class="nav-item">
<a class="nav-link" id="contact-tab" data-toggle="tab" href="#run" role="tab" aria-controls="run" onclick="showWarning('Chú ý','Vui lòng nạp đúng cú pháp để tự động cộng tiền. Nạp sai cú pháp sẽ trừ phí')" aria-selected="false">Chuyển
khoản</a>
</li>
</ul>
</div>
<div class="card-body">
<div class="tab-content">
<div class="tab-pane fade show active" id="order" role="tabpanel" aria-labelledby="home-tab">
<div class="row">
<div class="col-md-4">
<div class="p-15">
<form method="POST" action="" accept-charset="UTF-8">
<div class="box-body">
<div class="form-group">
<label class="font-weight-bold">Nhà mạng</label>
                  <select class="form-control form-control-alternative" name="loaithe" id="loaithe" required>
                                <option value="">Chọn loại thẻ *</option>
                                <option value="Viettel">Viettel</option>
                                <option value="Vinaphone">Vinaphone</option>
                                <option value="Mobifone">Mobifone</option>
                                <option value="Zing">Zing</option>
                                <option value="Vietnamobile">Vietnamobile</option>
                            </select>
</div>
<div class="form-group">
<label class="font-weight-bold">Mệnh giá</label>
  <select class="form-control form-control-alternative" name="menhgia" id="menhgia" required>
                                <option value="">Chọn mệnh giá *</option>
                                <option value="10000">10.000</option>
                                <option value="20000">20.000</option>
                                <option value="30000">30.000</option>
                                <option value="50000">50.000</option>
                                <option value="100000">100.000</option>
                                <option value="200000">200.000</option>
                                <option value="300000">300.000</option>
                                <option value="500000">500.000</option>
                                <option value="1000000">1.000.000</option>
                            </select>

</div>
<div class="form-group">
<label class="font-weight-bold">Số seri</label>
  <input type="text" class="form-control form-control-alternative" name="seri" required="">

</div>
<div class="form-group">
<label class="font-weight-bold">Mã thẻ</label>
 <input type="text" class="form-control form-control-alternative" name="pin" required="">

</div>
</div>
<div class="box-footer">
<button name="submit_napthe"  type="submit" style="    background-color: #e2863b;
    border-color: #e2863b;
    color: #fff;

    transition: background-color box-shadow .1s linear;

    border-radius: 50px;
    outline: initial!important;
    box-shadow: none!important;
    font-size: .8rem;
    padding: .75rem 1.3rem .6rem;

    font-weight: 700 !important;

  ">Cập
nhật
</button>
</div>
</form>
</div>
</div>
<div class="col-md-8">
<div class="p-15">
<div class="table-responsive">
<table id="datatable1" class="table">
<thead>
   <th scope="col">STT</th>
                                    <th scope="col">LOẠI THẺ</th>
                                    <th scope="col">MỆNH GIÁ</th>
                                    <th scope="col">THỰC NHẬN</th>
                                    <th scope="col">SERI/PIN</th>
                                    <th scope="col">TRẠNG THÁI</th>
                                    <th scope="col">GHI CHÚ</th>
                                    <th scope="col"></th>

</thead>
<tbody>
</tbody>
</table>                                <?php
$i = 0;
$result = mysqli_query($ketnoi,"SELECT * FROM `card` WHERE `username` = '".$my_username."' ORDER BY id desc limit 0, 100");
while($row = mysqli_fetch_assoc($result))
{
?>
                                <tr class="text-center">
                                    <td><?=$i;?> <?php $i++; ?></td>
                                    <td><?=$row['type'];?></td>
                                    <td>
                                        <?=format_cash($row['amount']);?>đ
                                    </td>
                                    <td>
                                        <?=format_cash($row['thucnhan']);?>đ
                                    </td>
                                    <td>
                                        <?=$row['seri'];?> / <?=$row['pin'];?>
                                    </td>
                                    <td>
                                        <?=status($row['status']);?>
                                    </td>
                                    <td>
                                        <?=$row['note'];?>
                                    </td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
</div>
</div>
</div>

</div>
</div>
<div class="tab-pane fade" id="run" role="tabpanel" aria-labelledby="contact-tab">
<div class="row">
<div class="col-md-8">
<h6 class="mb-3">Tỷ giá: 1 VND = 1 vnđ</h6>
<h6 class="mb-3"><span style="color: red;">Chú ý</span> Vui lòng chuyển đúng cú pháp
để hệ thống tự động cộng tiền. Nếu sai cú pháp mất thời gian + mất phí.</h6>
<div class="form-group row">
<label class="col-sm-4 col-form-label font-weight-bold">Nội dung chuyển
khoản:</label>
<div class="col-sm">
<div class="card border-10 bg-warning-gradient">
<div class="card-body text-center">
<h4 class="font-weight-bold mb-0"><input style="border: none; width: 400px" type="text" disabled id="payment_syntax" value="<?=$site['MEMO_PREFIX'].$my_id;?>">
</h4>
<button type="button" onclick="copy('payment_syntax')" data-clipboard-target="#copyNoiDung" class="btn  btn-primary btn-rounded btn-sm mt-2 font-13">
<i class="far fa-copy mr-1"></i> Copy
</button>
</div>
</div>
</div>
</div>
<div>
<div class="form-group row">
<label class="col-sm-4 col-form-label font-weight-bold">Tài khoản
số:
1</label>
<div class="col-sm">
<div class="card border-10 bg-warning">
<div class="card-body">
<h6> Ngân hàng: <span class="font-weight-bold">Vietcombank tự động</span>
</h6>
<h6> Chủ TK: <span class="font-weight-bold">Tran Ngoc Thu</span>
</h6>
<h6> STK: <span class="font-weight-bold">0281000599711</span>
 </h6>
<h6> Chi nhánh: <span class="font-weight-bold">bình dương</span>
</h6>
</div>
</div>
</div>
</div>
<div class="form-group row">
<label class="col-sm-4 col-form-label font-weight-bold">Tài khoản
số:
2</label>
<div class="col-sm">
<div class="card border-10 bg-warning">
<div class="card-body">
<h6> Ngân hàng: <span class="font-weight-bold">Ví Thẻ siêu rẻ</span>
</h6>
<h6> Chủ TK: <span class="font-weight-bold">Bạch Văn Báo</span>
</h6>
<h6> STK: <span class="font-weight-bold">0364075877</span>
</h6>
<h6> Chi nhánh: <span class="font-weight-bold">tsr - ck xong báo adm ckeck</span>
</h6>
</div>
</div>
</div>
</div>
<div class="form-group row">
<label class="col-sm-4 col-form-label font-weight-bold">Tài khoản
số:
3</label>
<div class="col-sm">
<div class="card border-10 bg-warning">
<div class="card-body">
<h6> Ngân hàng: <span class="font-weight-bold">MoMo</span>
</h6>
<h6> Chủ TK: <span class="font-weight-bold">Trần Ngọc Thu</span>
</h6>
<h6> STK: <span class="font-weight-bold">0372504046</span>
</h6>
<h6> Chi nhánh: <span class="font-weight-bold">Bắc Giang</span>
</h6>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="car badge-success mb-4 rounded-10">
<div class="card-body">
<div class="d-flex justify-content-between">
<div class="d-flex font-19">
<i class="fas fa-wallet mr-2"></i>
<h6 class="mb-0 font-19">Số tiền hiện có</h6>
</div>
<h6 class="font-19 mb-0 "><?=format_cash($my_vnd);?>  vnđ</h6>
</div>
</div>
</div>
<div class="car badge-success mb-4 rounded-10">
<div class="card-body">
<div class="d-flex justify-content-between">
<div class="d-flex font-19">
<i class="fas fa-sign-in-alt mr-2"></i>
<h6 class="mb-0 font-19">Số tiền đã nạp</h6>
</div>
<h6 class="font-19 mb-0 "><?=format_cash($my_total_nap);?> vnđ</h6>
</div>
</div>
</div>
<div class="car badge-success rounded-10">
<div class="card-body">
<h6 class="font-weight-bold">Hướng dẫn nạp tiền: </h6>
<h6>Liên hệ admin</h6>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- plugins:css -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="/assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="/assets/css/argon-dashboard.css" rel="stylesheet" />
  <script src="/assets/js/sweetalert.min.js"></script> <?php

if(isset($_POST["submit_napthe"])) 
{
  if(isset($_SESSION['username']))
  {
    $loaithe = check_string($_POST['loaithe']);
    $menhgia = check_string($_POST['menhgia']);
    $seri = check_string($_POST['seri']);
    $pin = check_string($_POST['pin']);
    $code = random('qwertyuiopasdfghjklzxcvbnm1234567890QWERTYUIOPASDFGHJKLZXCVBNM', 12);

    $thucnhandoithe = $menhgia - $menhgia * $site_ck_nap_the / 100;

    if (strlen($seri) < 5 || strlen($pin) < 5)
    {
        echo '<script type="text/javascript">swal("Thất Bại","Mã thẻ hoặc seri không đúng định dạng!","error");</script>';
    }
    else
    {
        $json = json_decode(curl_get('https://card24h.com/api/card-auto.php?auto=true&type='.$loaithe.'&menhgia='.$menhgia.'&seri='.$seri.'&pin='.$pin.'&APIKey='.$site_api.'&callback='.$site_callback.'&content='.$code), true);
        if (isset($json['data']))
        {
            if ($json['data']['status'] == 'error')
            {
                echo '<script type="text/javascript">swal("Thất Bại","'.$json['data']['msg'].'","error");</script>';
            }
            else if ($json['data']['status'] == 'success')
            {
              $create = mysqli_query($ketnoi,"INSERT INTO `card` SET
              `username` = '".$my_username."',
              `code` = '".$code."',
              `type` = '".$loaithe."',
              `amount` = '".$menhgia."',
              `thucnhan` = '".$thucnhandoithe."',
              `seri` = '".$seri."',
              `pin` = '".$pin."',
              `status` = 'xuly',
              `createdate` = now() ");
              die('<script type="text/javascript">swal("Thành Công","'.$json['data']['msg'].'","success");setTimeout(function(){ location.href = "" },1000);</script>');
            }
        }
    }
  }
  else
  {
    die('<script type="text/javascript">swal("Thất Bại", "Vui lòng đăng nhập để tiếp tục", "error");setTimeout(function(){ location.href = "/dang-nhap/" },1000);</script>');
  }
}
?> <script>
    function myFunction() {
        var copyText = document.getElementById("myInput");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        document.execCommand("copy");

        var tooltip = document.getElementById("myTooltip");
        tooltip.innerHTML = "Copied: " + copyText.value;
    }

    function outFunc() {
        var tooltip = document.getElementById("myTooltip");
        tooltip.innerHTML = "Copy to clipboard";
    }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript">
    $('#menhgia').on('change', function() {
        var menhgia = $('#menhgia').val();
        var ck = <?=$site_ck_nap_the;?>;
        var ketqua = menhgia - menhgia * ck / 100;
        $('#ketqua').html(ketqua.toString().replace(/(.)(?=(\d{3})+$)/g, '$1,'));


    });
    </script>    
</main>
     
<script language="JavaScript">
if (top.location != self.location)
{top.location = self.location}
</script>

 
</head>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <?php include('foot.php');?><?php if(!isset($_SESSION['username']))
{
    echo '<script type="text/javascript">swal("Thất Bại", "Vui lòng đăng nhập để tiếp tục.", "error");
        setTimeout(function(){ location.href = "/dang-nhap/" },100);</script>';
    die();
}
?>