<?php
if (isset($_GET['room_id'])){
    $get_room_id = $_GET['room_id'];
    $get_room_sql = "SELECT * FROM room NATURAL JOIN room_type WHERE room_id = '$get_room_id'";
    $get_room_result = mysqli_query($connection,$get_room_sql);
    $get_room = mysqli_fetch_assoc($get_room_result);

    $get_room_type_id = $get_room['room_type_id'];
    $get_room_type = $get_room['room_type'];
    $get_room_no = $get_room['room_no'];
    $get_room_price = $get_room['price'];
}

?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Phiếu đổi phòng</li>
        </ol>
    </div><!--/.row-->

    <!-- <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Reservation</h1>
        </div>
    </div>/.row -->

    

    <div class="row">
        <div class="col-lg-12">
            <form role="form" id="booking" data-toggle="validator">
                <div class="response"></div>
                <div class="col-lg-12">
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">Thông tin khách hàng:</div>
                        <div class="panel-body">
                            <div class="form-group col-lg-6">
                                <label>Tên khách hàng:</label>
                                <input class="form-control" placeholder="Tên khách hàng" id="first_name" data-error="Vui lòng nhập tên của khách hàng" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Số điện thoại liên lạc</label>
                                <input type="number" class="form-control" data-error="Nhập tối thiểu 10 kí tự số" data-minlength="10" placeholder="Số điện thoại liên lạc" id="contact_no" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Họ khách hàng:</label>
                                <input class="form-control" placeholder="Họ khách hàng" id="last_name">
                                <div class="help-block with-errors"></div>
                            </div>
                            
                            <div class="form-group col-lg-6">
                                <label>Địa chỉ Email</label>
                                <input type="email" class="form-control" placeholder="Địa chỉ Email" id="email" data-error="Vui lòng nhập đúng kiểu email" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Loại thẻ ID</label>
                                <select class="form-control" id="id_card_id" data-error="Vui lòng chọn loại thẻ ID" required onchange="validId(this.value);">
                                    <option selected disabled>Chọn loại thẻ ID</option>
                                    <?php
                                    $query  = "SELECT * FROM id_card_type";
                                    $result = mysqli_query($connection,$query);
                                    if (mysqli_num_rows($result) > 0){
                                        while ($id_card_type = mysqli_fetch_assoc($result)){
                                            echo '<option value="'.$id_card_type['id_card_type_id'].'">'.$id_card_type['id_card_type'].'</option>';
                                        }}
                                    ?>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Mã số thẻ ID đã chọn</label>
                                <input type="text" class="form-control" placeholder="Mã số thẻ ID" id="id_card_no" data-error="Vui lòng nhập mã ID có tồn tại" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-lg-12">
                                <label>Địa chỉ cư trú</label>
                                <input type="text" class="form-control" placeholder="Địa chỉ" id="address" data-error="Vui lòng nhập địa chỉ cư trú" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
					<?php
                    if (isset($_GET['room_id'])){?>

                        <div class="panel panel-default">
                            
                            <div class="panel-body">
							<div class="form-group col-lg-6">
                                    <label>Phòng đang ở</label>
                                    <select class="form-control" id="room_no" onchange="fetch_price(this.value)" required data-error="Vui lòng chọn phòng số">

                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Phòng muốn đổi</label>
                                    <select class="form-control" id="room_no" onchange="fetch_price(this.value)" required data-error="Vui lòng chọn phòng số">

                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
								<div class="form-group col-lg-12">
                                <label>Lý do đổi phòng</label>
                                <textarea class="form-control" name="change_room" placeholder="Ghi lý do muốn đổi phòng" required></textarea>
                            </div>
                              

                                
                            </div>
                        </div>
                    <?php } else{?>
                        <div class="panel panel-default">
                            
                            <div class="panel-body">
							<div class="form-group col-lg-6">
                                    <label>Phòng đang ở</label>
                                    <select class="form-control" id="room_no" onchange="fetch_price(this.value)" required data-error="Vui lòng chọn phòng số">

                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Phòng muốn đổi</label>
                                    <select class="form-control" id="room_no" onchange="fetch_price(this.value)" required data-error="Vui lòng chọn phòng số">

                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>   
								<div class="form-group col-lg-12">
                                <label>Lý do đổi phòng:</label>
                                <textarea class="form-control" name="change_room" placeholder="Ghi lý do muốn đổi phòng" required></textarea>
                            </div> 
                            </div>
                        </div>
                    <?php }
                    ?>
                    <button type="submit" class="btn btn-lg btn-success pull-right" style="border-radius:0%">Gửi</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <p class="back-link">Phát triển bởi HMHT</p>
        </div>
    </div>

</div>    <!--/.main-->





