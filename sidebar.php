
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="img/user.png" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name"><?php echo $user['name'];?></div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Quản lý</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <ul class="nav menu">
    <?php 
        if (isset($_GET['dashboard'])){ ?>
            <li class="active">
                <a href="index.php?dashboard"><em class="fa fa-dashboard">&nbsp;</em>
                    Bảng danh mục
                </a>
            </li>
        <?php } else{?>
            <li>
                <a href="index.php?dashboard"><em class="fa fa-dashboard">&nbsp;</em>
                    Bảng danh mục
                </a>
            </li>
        <?php }
        if (isset($_GET['reservation'])){ ?>
            <li class="active">
            <a href="index.php?reservation"><em class="fa fa-calendar">&nbsp;</em>
                    Đăng ký đặt phòng
                </a> 
            </li>
        <?php } else{?>
            <li>
            <a href="index.php?reservation"><em class="fa fa-calendar">&nbsp;</em>
                    Đăng ký đặt phòng
                </a>
            </li>
        <?php }
         
        if (isset($_GET['room_mang'])){ ?>
            <li class="active">
                <a href="index.php?room_mang"><em class="fa fa-bed">&nbsp;</em>
                    Quản lý phòng
                </a>
            </li>
        <?php } else{?>
            <li>
            <a href="index.php?room_mang"><em class="fa fa-bed">&nbsp;</em>
                    Quản lý phòng
                </a>
            </li>
        <?php }
        if (isset($_GET['staff_mang'])){ ?>
            <li class="active">
                <a href="index.php?staff_mang"><em class="fa fa-users">&nbsp;</em>
                    Mục Nhân Viên
                </a>
            </li>
        <?php } else{?>
            <li>
                <a href="index.php?staff_mang"><em class="fa fa-users">&nbsp;</em>
                    Mục Nhân Viên
                </a>
            </li>
        <?php }
        if (isset($_GET['complain'])){ ?>
            <li class="active">
                <a href="index.php?complain"><em class="fa fa-comments">&nbsp;</em>
                    Quản lý mục phản hồi(Phàn nàn)
                </a>
            </li>
        <?php } else{?>
            <li>
                <a href="index.php?complain"><em class="fa fa-comments">&nbsp;</em>
                    Quản lý mục phản hồi(Phàn nàn)
                </a>
            </li>
        <?php }
        ?>

        <?php
        if (isset($_GET['statistics'])){ ?>
            <li class="active">
                <a href="index.php?statistics"><em class="fa fa-pie-chart">&nbsp;</em>
                    Bảng phân tích
                </a>
            </li>
        <?php } else{?>
        <li>
            <a href="index.php?statistics"><em class="fa fa-pie-chart">&nbsp;</em>
                Bảng phần tích
            </a>
        </li>
<?php }
 
    
    ?>

<?php
//giặt ủi
    if (isset($_GET['laundry'])){ ?>
            <li class="active">
                <a href="index.php?laundry"><em class="fa fa-file-text">&nbsp;</em>
                    Phiếu giặt ủi
                </a>
            </li>
        <?php } else{?>
            <li>
                <a href="index.php?laundry"><em class="fa fa-file-text">&nbsp;</em>
                   Phiếu giặt ủi
                </a>
            </li>
        <?php }


?>

<?php
// gọi món
    if (isset($_GET['order'])){ ?>
            <li class="active">
                <a href="index.php?order"><em class="fa fa-cutlery">&nbsp;</em>
                    Phiếu gọi món
                </a>
            </li>
        <?php } else{?>
            <li>
                <a href="index.php?order"><em class="fa fa-cutlery">&nbsp;</em>
                   Phiếu gọi món
                </a>
            </li>
        <?php }


?>

<?php
// đổi phòng
    if (isset($_GET['exchange_room'])){ ?>
            <li class="active">
                <a href="index.php?change_room"><em class="fa fa-exchange">&nbsp;</em>
                    Phiếu đổi phòng
                </a>
            </li>
        <?php } else{?>
            <li>
                <a href="index.php?change_room"><em class="fa fa-exchange">&nbsp;</em>
                   Phiếu đổi phòng
                </a>
            </li>
        <?php }
        ?>

        <?php
        

// quy định
if (isset($_GET['rule'])){ ?>
    <li class="active">
        <a href="index.php?rule"><em class="fa fa-hand-o-right">&nbsp;</em>
            Quy định khách sạn
        </a>
    </li>
<?php } else{?>
    <li>
        <a href="index.php?rule"><em class="fa fa-hand-o-right">&nbsp;</em>
           Quy định khách sạn
        </a>
    </li>
<?php }?>


       </ul>
</div><!--/.sidebar-->