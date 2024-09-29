<?php
$title = "Home";
$page = "home";
include_once "layout/header.php";
?>


<div class="container my-4">
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-blue">
                <div class="inner">
                    <h3>0</h3>
                    <p>Jumlah Matakuliah</p>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-cash-register"></i>
                </div>

            </div>
        </div>

        <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-green">
                <div class="inner">
                    <h3>0</h3>
                    <p>IPK</p>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-truck-droplet"></i>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include_once "layout/footer.php";
?>