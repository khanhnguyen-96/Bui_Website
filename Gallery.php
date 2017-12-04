<?php
/**
 * About page
 * PHP Version 7
 * 
 * @category About
 * @package  Bui
 * @author   Nguyễn Ngọc Khánh <1411768@hcmut.edu.vn>
 * 
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link    https://www.facebook.com/nnkti 
 * */

// Always set these variables with any pages
$title = 'Gallery - Bụi';
$nav_active = 'gallery';
require 'includes/header.php'
?>
<main>
    <div class="container align-middle mb-5 mt-5">
        <div class="container col-md-10">
            <i>
                <h3 class="text-center" style="border-top: solid 1px; border-bottom: solid 1px;padding:1rem;font-weight: 400">"Lưu Giữ Từng Khoảnh Khắc."</h3>
            </i>
            <br>
        </div>

        <div class="container col-md-11" style="padding-top: 1rem;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <div class="view overlay hm-pink-strong">
                        <img class="img-fluid" src="img/1.jpg" alt="gallery1">
                        <div class="mask flex-center">
                            <h1 class="white-text" style="font-weight: 400">Ireland</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="view overlay hm-pink-strong">
                        <img class="img-fluid" src="img/2.jpg" alt="gallery2">
                        <div class="mask flex-center">
                            <h1 class="white-text" style="font-weight: 400">Ice Land</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="view overlay hm-pink-strong">
                        <img class="img-fluid" src="img/3.jpg" alt="gallery3">
                        <div class="mask flex-center">
                            <h1 class="white-text" style="font-weight: 400">Nike Land</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="view overlay hm-pink-strong">
                        <img class="img-fluid" src="img/4.jpg" alt="gallery4">
                        <div class="mask flex-center">
                            <h1 class="white-text" style="font-weight: 400">Spike land</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="view overlay hm-pink-strong">
                        <img class="img-fluid" src="img/5.jpg" alt="gallery5">
                        <div class="mask flex-center">
                            <h1 class="white-text" style="font-weight: 400">Like land</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="view overlay hm-pink-strong">
                        <img class="img-fluid" src="img/6.jpg" alt="gallery6">
                        <div class="mask flex-center">
                            <h1 class="white-text" style="font-weight: 400">Nice land</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="view overlay hm-pink-strong">
                        <img class="img-fluid" src="img/7.jpg" alt="gallery7">
                        <div class="mask flex-center">
                            <h1 class="white-text" style="font-weight: 400">Fire land</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="view overlay hm-pink-strong">
                        <img class="img-fluid" src="img/8.jpg" alt="gallery8">
                        <div class="mask flex-center">
                            <h1 class="white-text" style="font-weight: 400">Lie land</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="view overlay hm-pink-strong">
                        <img class="img-fluid" src="img/9.jpg" alt="gallery9">
                        <div class="mask flex-center">
                            <h1 class="white-text" style="font-weight: 400">Sky land</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!--Pagination -->
            <div class="row">
                <div class="col"></div>
                <nav class="my-4 col">
                    <ul class="pagination pg-teal mb-0">

                        <!--First-->
                        <li class="page-item disabled">
                            <a class="page-link">First</a>
                        </li>

                        <!--Arrow left-->
                        <li class="page-item disabled">
                            <a class="page-link" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>

                        <!--Numbers-->
                        <li class="page-item active">
                            <a class="page-link">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link">5</a>
                        </li>

                        <!--Arrow right-->
                        <li class="page-item">
                            <a class="page-link" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>

                        <!--First-->
                        <li class="page-item">
                            <a class="page-link">Last</a>
                        </li>

                    </ul>
                </nav>
                <div class="col"></div>
            </div>
            <!--/Pagination -->

        </div>
    </div>
</main>
<?php require 'includes/header.php'?>