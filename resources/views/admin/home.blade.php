@include('admin..header')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h2 class="h3 mb-0 text-gray-800">Tổng quan</h2>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Giảng viên</div>
                                
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{count($Lecturer)}}</div>
                                
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-chalkboard-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Bài viết</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{count($Post)}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-newspaper fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Phòng ban hoạt động
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{count($departments)}}</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Số người đang truy cập</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


  
    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Giới thiệu chung</h6>
                </div>
                <div class="card-body">
                <p>Được thành lập vào năm 1995 nhưng Khoa CNTT có truyền thống hơn 50 năm phát triển từ năm 1965 với việc đào tạo chuyên ngành Máy tính tại Khoa Toán Cơ thuộc Trường Đại học Tổng hợp Hà Nội. Với sự nỗ lực cố gắng của tập thể các cán bộ giảng viên, các thế hệ sinh viên, học viên và nghiên cứu sinh; dưới sự chỉ đạo sát sao, ủng hộ và tạo điều kiện của các thế hệ lãnh đạo Trường ĐHCN và ĐHQGHN, Khoa CNTT ngày hôm nay đã đạt được nhiều thành tích nổi bật trong hoạt động đào tạo, bồi dưỡng nhân tài và nghiên cứu khoa học tiếp cận trình độ tiên tiến trong khu vực và thế giới.</p>
                    <div class="text-center">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width:80%" src="https://www.fit.uet.vnu.edu.vn/wp-content/uploads/2019/06/gioii_thieu.png" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div> 

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@include('admin.footer')