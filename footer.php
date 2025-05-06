<footer class="ftco-footer">
<div class="container-xl">
<div class="row mb-5 pb-5 justify-content-between">
<div class="col-md-6 col-lg">
<div class="ftco-footer-widget mb-4">
<h2 class="ftco-heading-2 logo d-flex">
<a class="navbar-brand align-items-center" href="index.html">
Mahakam
</a>
</h2>
<p>A long river named Mahakam flows by their place and supplies it with synergy.</p>
<ul class="ftco-footer-social list-unstyled mt-2">
<li><a href="https://id.linkedin.com/company/mahakam-sinergi-indonusa"><span class="fa fa-linkedin"></span></a></li>
<li><a href="https://instagram.com/mahakamindonusa"><span class="fa fa-instagram"></span></a></li>
</ul>
</div>
</div>
    
<div class="col-md-6 col-lg">
<div class="ftco-footer-widget mb-4">

    
<h2 class="ftco-heading-2">News</h2>

<?php
 $rssUrl = "https://www.computerweekly.com/rss/RSS-Feed.xml";
 $rssFeed = simplexml_load_file($rssUrl);
    $i == 0;
 if(!empty($rssFeed)){
    foreach ($rssFeed->channel->item as $item){
       $title = $item->title;
       $link = $item->link;
       $abbreviation = explode(' ', trim($title ))[0];
       $description = $item->description;
       echo "<div class='block-21 mb-4 d-flex'><a class='blog-img me-4' style='background-image: url(https://source.unsplash.com/random/200×200/?" . $abbreviation . ");'></a> ";
       echo "<div class='text'>";
       echo "<h3 class='heading'><a href='" . $link . "'>" . $title . "</a></h3>";
       echo "<div>" . $description . "</div>";
       echo "<div class='meta'>";
       echo "<div><a href='https://www.computerweekly.com'><span class='fa fa-user'></span> ComputerWeekly’s</a></div>";
       echo "</div>";
       echo "</div>";
       echo "</div>";
       if($i==2) break;
       $i++;
    }

 } 
?>
    
</div>
</div>
<div class="col-md-6 col-lg-2">
<div class="ftco-footer-widget mb-4">
<h2 class="ftco-heading-2">Quick Links</h2>
<ul class="list-unstyled">
<li><a href="#"><span class="fa fa-chevron-right me-2"></span>Home</a></li>
<li><a href="javascript:void(0); "><span class="fa fa-chevron-right me-2"></span>About</a></li> 
<li><a href="javascript:void(0); "><span class="fa fa-chevron-right me-2"></span>Services</a></li>
<li><a href="javascript:void(0); "><span class="fa fa-chevron-right me-2"></span>Project</a></li>
<li><a href="javascript:void(0); "><span class="fa fa-chevron-right me-2"></span>Contact Us</a></li>
</ul>
</div>
</div>
<div class="col-md-6 col-lg">
<div class="ftco-footer-widget mb-4">
<h2 class="ftco-heading-2">Have a Questions?</h2>
<div class="block-23 mb-3">
<ul>
<li><span class="icon fa fa-book"></span><span class="text">Head Office<br>Jl. Ir. H. Juanda 4 Jalur 2 Blok B No:30, Kota Samarinda, Kalimantan Timur 75243</span></li>
<li><span class="icon fa fa-building"></span><span class="text">Operation Office<br>Jl. A. Wahab Syahranie 5, No 79, Kota Samarinda, Kalimantan Timur 75243</span></li>
<li><span class="icon fa fa-building"></span><span class="text">Warehouses<br>Perumahan Mutiara Indah Sempaja, Kota Samarinda, Kalimantan Timur 75131</span></li>
<li><a href="https://api.whatsapp.com/send/?phone=%2B6281247444646&text=Halo, Mahakam Sinergi. Saya baru saja membuka website mahakamsinergiindonusa.co.id, saya tertarik untuk konsultasi dengan tim Mahakam ?&type=phone_number&app_absent=0"><span class="icon fa fa-phone"></span><span class="text">+62 812 4744 4646 / (0541) 7813082</span></a></li>
<li><a href="mailto: marketing@mahakamindonusa.com"><span class="icon fa fa-paper-plane pr-4"></span><span class="text"><span class="__cf_email__" data-cfemail="3d54535b527d4452484f5952505c5453135e5250">marketing@mahakamindonusa.com</span></span></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="container-fluid px-0 py-5 bg-darken">
<div class="container-xl">
<div class="row">
<div class="col-md-12 text-center">
<p class="mb-0" style="color: rgba(255,255,255,.5); font-size: 13px;">Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved</p>
</div>
</div>
</div>
</div>
</footer>