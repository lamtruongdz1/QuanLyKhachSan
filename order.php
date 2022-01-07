<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Phiếu đặt món ăn</li>
        </ol>
    </div><!--/.row-->

		
		<!-- <div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div>/.row -->
		
		
				<div class="panel panel-default">
                        <div class="panel-heading">Phiếu Đặt Món</div>
                        <div class="panel-body">
                           
							<div class="form-group col-lg-6">
                                <label>Họ tên nhân viên:</label>
                                <input class="form-control" placeholder="Tên khách hàng" id="first_name" data-error="Vui lòng nhập họ tên của nhân viên" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Phòng</label>
                                <input type="number" class="form-control" data-error="Nhập số phòng hợp lệ" data-minlength="10" placeholder="Số Phòng" id="contact_no" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Họ tên khách hàng:</label>
                                <input class="form-control" placeholder="Họ tên khách hàng" id="last_name">
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
                        </div>
                    </div>
					<div class="panel panel-default">
                            <div class="panel-heading">Thông tin món ăn
                                
                            </div>
                            <div class="panel-body">
                                <div class="form-group col-lg-6">
                                    <label>Tên món ăn</label>
                                    <input type="email" class="form-control" placeholder="Nhập tên món ăn" data-error="Vui lòng nhập món ăn có trong menu" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Số lượng</label>
									<input type="number" class="form-control" data-error="Nhập số lượng" data-minlength="10" placeholder="Số lượng" id="contact_no" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Giá tiền</label>
                                    <input type="number" class="form-control" data-error="Nhập số tiền hợp lệ" data-minlength="10" placeholder="Số tiền" id="contact_no" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Thành tiền</label>
                                    <input type="number" class="form-control" data-error="Nhập số tiền hợp lệ" data-minlength="10" placeholder="Thành tiền" id="contact_no" required>
                                    <div class="help-block with-errors"></div>
                                </div>
								<div class="form-group col-lg-6">
                                <label>Ghi Chú</label>
                                <input type="email" class="form-control" placeholder="Nhập yêu cầu về món ăn" data-error="Vui lòng nhập đúng" required>
                                <div class="help-block with-errors"></div>
                            	</div>
                                <div class="col-lg-12">
                                    <h4 style="font-weight: bold">Tổng tiền : <span id="staying_day">0</h4>
                                    <h4 style="font-weight: bold">Thanh toán trước (nếu có) <span id="price"><!--<?php echo $get_room_price; ?>--></span> </h4>
                                    <h4 style="font-weight: bold">Chữ ký người lập phiếu: <span id="total_price">chưa có</span> </h4>
                                </div>
								<a class="btn btn-secondary pull-right" href="index.php?order">Đặt món</a>
                            </div>
                        </div>
			</div><!--/.row-->

			<hr>

			
		</div>
		
	</div>	<!--/.main-->
	

		
</body>
</html>