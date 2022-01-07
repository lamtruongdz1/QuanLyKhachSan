<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Đặt phòng</li>
        </ol>
    </div><!--/.row-->
    <div class="row">
    
        <div class="col-lg-12">  
          <form role="form" id="laundry">
                <div class="panel panel-default">
                    <div class="panel-heading">Tạo phiếu giặt ủi</div>
                    <div class="panel-body">
                        <div class="col-lg-12">
                            <div class="col-lg-6">
                                <label>Số điện thoại</label>
                                <input class="form-control" placeholder="Họ khách hàng" id="last_name" data-error="Nhập họ khách hàng" required>
                                <div style="margin-top: 10px; margin-bottom: 10px;"></div>
                            </div>
                            <div class="col-lg-6">
                                <label>Tên khách hàng</label>
                                <input class="form-control" placeholder="Tên khách hàng" id="first_name" data-error="Vui lòng nhập tên của khách hàng" required>
                                 <div style="margin-top: 10px; margin-bottom: 10px;"></div>
                            </div>
                            <div class="col-lg-6">
                                <label>Số điện thoại</label>
                                <input class="form-control" placeholder="Số điện thoại" id="conctact_no" data-error="Số điện thoại" required>
                                 <div style="margin-top: 10px; margin-bottom: 10px;"></div>
                            </div>
                            <div class="col-lg-6">
                                <label>Khối lượng áo quần</label>
                                <input class="form-control" placeholder="Khối lượng áo quần" id="clothers_weight" data-error="Nhập khối lượng áo quần" required>
                                 <div style="margin-top: 10px; margin-bottom: 10px;"></div>
                            </div>
                            <div class="col-lg-12">
                            <h4 style="font-weight: bold;">Tổng tiền cần thanh toán <span>0 VND</span></h4>
                             <div style="margin-top: 2px; margin-bottom: 4px;"></div>
                            </div>
                            <div class="col-lg-12">
                                <label>Nhập số tiền thanh toán trước</label>
                                <input class="form-control" placeholder="0" id="clothers_weight">
                                 <div style="margin-top: 2px; margin-bottom: 4px;"></div>
                            </div>
                        </div>     
                        <button type="submit" class="btn btn-lg btn-success pull-right" style="border-radius:0%; margin-top: 10px;">Gửi</button>
                    </div>

                </div>
             </form>
        </div>
   
    </div>
    <!-- <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Reservation</h1>
        </div>
    </div>/.row -->
    <div>
    <div class="row">
        <div style="margin-left: 10px; margin-right: 10px;" class="panel-default panel">
            <div class="panel-heading">Danh sách giặt ủi</div>
            <div class="panel-body">
                <table class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%"
                                       id="rooms">
                                       <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên Khách Hàng</th>
                            <th>Số điện thoại</th>
                            <th>Khối lượng áo quần</th>
                            <th>Số tiền thanh toán</th>
                            <th>Đã thanh toán</th>
                        </tr>
                    </thead>
                    </table>
                </div>
            </div>
        </div>
        
    </div>
    	

  <div class="row">
        <div class="col-sm-12">
            <p class="back-link">Phát triển bởi HMHT</p>
        </div>
    </div>
</div>