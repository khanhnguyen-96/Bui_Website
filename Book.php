<?php
/**
 * Booking page
 * PHP Version 7
 * 
 * @category Booking
 * @package  Bui
 * @author   Nguyễn Ngọc Khánh <1411768@hcmut.edu.vn>
 * 
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link    https://www.facebook.com/nnkti 
 * */

// Always set these variables with any pages
$title = 'Booking - Bụi';
$nav_active = 'book';
require 'includes/header.php'
?>
<main id="main" class="view full-bg-img">
    <div class="container-fluid p-0">
        <div class="container" style="border: solid 1px;padding-top: 1rem;">
            <h1 style="border-bottom: solid 2px; color:white;">TÌM TOUR</h1>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <h3>Nơi khởi hành</h3>
                    <select>
                        <option>Nơi khởi hành</option>
                        <option value="hanoi">Hà Nội</option>
                        <option value="danang">Đà Nẵng</option>
                        <option value="tphcm">Thành phố Hồ Chí Minh</option>
                    </select>
                    <h3>Nơi đến</h3>
                    <select>
                        <option>Nơi đến</option>
                        <option value="hanoi">Hà Nội</option>
                        <option value="danang">Đà Nẵng</option>
                        <option value="tphcm">Thành phố Hồ Chí Minh</option>
                    </select>
                    <h3>Giá</h3>
                    <select>
                        <option>Giá</option>
                        <option value="duoi2trieu">Dưới 2 triệu</option>
                        <option value="2-4trieu">2 đến 4 triệu</option>
                        <option value="tren4trieu">Trên 4 triệu</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <h3>Loại tour</h3>
                    <select>
                        <option>Loại tour</option>
                        <option value="trongnuoc">Tour trong nước</option>
                        <option value="quocte">Tour quốc tế</option>
                    </select>
                    <h3>Ngày khởi hành</h3>
                    <div id="sandbox-container">
                        <div class="input-daterange input-group" id="datepicker">
                            <input class="input-sm form-control" name="ngaykhoihanh" 
                            type="text" id="dateinput" placeholder="mm/dd/yyyy">
                        </div>
                    </div>
                    <h3>Tình trạng</h3>
                    <select>
                        <option>Tất cả</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="reset" id="timkiem"
                    class="btn btn-default">Tìm kiếm</button>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require 'includes/header.php'?>