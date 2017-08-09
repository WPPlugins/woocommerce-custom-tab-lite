<?php
$plugin_dir_url =  plugin_dir_url( __FILE__ );
?>
<style>
.premium-box{ width:100%; height:auto; background:#fff;  }
.premium-features{}
.premium-heading{  color: #484747;font-size: 40px;padding-top: 35px;text-align: center;text-transform: uppercase;}
.premium-features li{ width:100%; float:left;  padding: 80px 0; margin: 0; }
.premium-features li .detail{ width:50%; }
.premium-features li .img-box{ width:50%; }

.premium-features li:nth-child(odd) { background:#f4f4f9; }
.premium-features li:nth-child(odd) .detail{float:right; text-align:left; }
.premium-features li:nth-child(odd) .detail .inner-detail{}
.premium-features li:nth-child(odd) .detail p{ }
.premium-features li:nth-child(odd) .img-box{ float:left; text-align:right;}

.premium-features li:nth-child(even){  }
.premium-features li:nth-child(even) .detail{ float:left; text-align:right;}
.premium-features li:nth-child(even) .detail .inner-detail{ margin-right: 46px;}
.premium-features li:nth-child(even) .detail p{ float:right;} 
.premium-features li:nth-child(even) .img-box{ float:right;}

.premium-features .detail{}
.premium-features .detail h2{ color: #484747;  font-size: 24px; font-weight: 700; padding: 0;}
.premium-features .detail p{  color: #484747;  font-size: 13px;  max-width: 327px;}
/**images**/
.pincode-check{ background:url(<?php echo $plugin_dir_url; ?>images/global_tab_option.png); width:507px; height:313px; display:inline-block; margin-right: 25px; background-repeat:no-repeat;}

.sat-sun-off{ background:url(<?php echo $plugin_dir_url; ?>images/category_tab_option.png); width:441px; height:271px; display:inline-block; background-size:500px auto; margin-right:30px; background-repeat:no-repeat;}

.bulk-upload{ background:url(<?php echo $plugin_dir_url; ?>images/Product_Specific.png); width:510px; height:264px; display:inline-block; background-repeat:no-repeat;}

.cod-verify{background:url(<?php echo $plugin_dir_url; ?>images/tab_placement_option.png); width:510px; height:71px; display:inline-block; margin-right:30px; background-repeat:no-repeat;}

.delivery-date{background:url(<?php echo $plugin_dir_url; ?>images/add_shortcode.png); width:537px; height:266px; display:inline-block; background-repeat:no-repeat;}

.advance-styling{background:url(<?php echo $plugin_dir_url; ?>images/modify_default_tabs.png); width:485px; height:626px; display:inline-block; margin-right:30px; background-repeat:no-repeat;}


/*upgrade css*/

.upgrade{background:#f4f4f9;padding: 50px 0; width:100%; clear: both;}
.upgrade .upgrade-box{ background-color: #808a97;
    color: #fff;
    margin: 0 auto;
   min-height: 110px;
    position: relative;
    width: 60%;}

.upgrade .upgrade-box p{ font-size: 15px;
     padding: 19px 20px;
    text-align: center;}

.upgrade .upgrade-box a{background: none repeat scroll 0 0 #6cab3d;
    border-color: #ff643f;
    color: #fff;
    display: inline-block;
    font-size: 17px;
    left: 50%;
    margin-left: -150px;
    outline: medium none;
    padding: 11px 6px;
    position: absolute;
    text-align: center;
    text-decoration: none;
    top: 36%;
    width: 277px;}

.upgrade .upgrade-box a:hover{background: none repeat scroll 0 0 #72b93c;}

.premium-vr{ text-transform:capitalize;} 
.premium-box-head {
    background: #eae8e7 none repeat scroll 0 0;
    height: 500px;
    text-align: center;
    width: 100%;
}
.pho-upgrade-btn {
    display: block;
    text-align: center;
}
.pho-upgrade-btn a {
    display: inline-block;
    margin-top: 75px;
}
.main-heading {
    background: #fff none repeat scroll 0 0;
    margin-bottom: -70px;
    text-align: center;
}
.main-heading img {
    margin-top: -200px;
}

.premium-box-container {
    margin: 0 auto;
}
.premium-box-container .description:nth-child(2n+1) {
    background: #fff none repeat scroll 0 0;
}
.premium-box-container .description {
    display: block;
    padding: 35px 0;
    text-align: center; position: relative;
}

.premium-box-container .pho-desc-head::after {
    background: rgba(0, 0, 0, 0) url(<?php echo $plugin_dir_url; ?>images/head-arrow.png) no-repeat; 
    content: "";
    height: 98px;
    position: absolute;
    right: 140px;
    top: 32px;
    width: 69px;
}

.pho-plugin-content {
    margin: 0 auto;
    overflow: hidden;
    width: 768px;
}
.premium-box-container .description:nth-child(2n+1) .pho-img-bg {
    background: #f1f1f1 url("<?php echo $plugin_dir_url; ?>images/image-frame-odd.png") no-repeat scroll 100% top;
}
.description .pho-plugin-content .pho-img-bg {
    border-radius: 5px 5px 0 0;
    height: auto;
    margin: 0 auto;
    padding: 70px 0 40px;
    width: 750px;
}

.premium-box-container .pho-desc-head h2 {
    color: #02c277;
    font-size: 28px;
    font-weight: bolder;
    margin: 0;
    text-transform: capitalize;
}

.premium-box-container .pho-plugin-content p {
    color: #212121;
    font-size: 18px;
    line-height: 32px;
}

.premium-box-container .description:nth-child(2n) .pho-img-bg {
    background: #f1f1f1 url("<?php echo $plugin_dir_url; ?>images/image-frame-even.png") no-repeat scroll 100% top;
}

.premium-box-container .description:nth-child(2n) {
    background: #eae8e7 none repeat scroll 0 0;
}

</style>

<div class="premium-box">

<div class="premium-box-head">
        <div class="pho-upgrade-btn">
        <a href="https://www.phoeniixx.com/product/woocommerce-custom-tabs-plugin/" target="_blank"><img src="<?php echo $plugin_dir_url; ?>images/premium-btn.png" /></a>
        </div>
    </div>

<ul class="premium-features">
<!--<h1 class="premium-heading">Premium Features</h1>-->
<div class="main-heading"><h1><img src="<?php echo $plugin_dir_url; ?>images/premium-head.png" /></h1></div>



<div class="premium-box-container">

<div class="description">
<div class="pho-desc-head"><h2>Global Tab Option</h2></div>
<div class="pho-plugin-content">
<p>
       This is a common tab that is shown on all the product pages, irrespective of their product categories.
    </p>
    
 <div class="pho-img-bg">
                        <img src="<?php echo $plugin_dir_url; ?>images/global_tab_option.png" />
                        </div>   
</div>

</div><!-- description end -->



<div class="description">
<div class="pho-desc-head"><h2>Category Tab Option</h2></div>
<div class="pho-plugin-content">
<p>
     This tab is commonly shown only on same-category product pages. However, the content could vary from category to category. 
    </p>
    
 <div class="pho-img-bg">
                        <img src="<?php echo $plugin_dir_url; ?>images/category_tab_option.png" />
                        </div>   
</div>

</div><!-- description end -->


<div class="description">
<div class="pho-desc-head"><h2>Product-Specific Tab Option</h2></div>
<div class="pho-plugin-content">
<p>
       This option lets you have a tab that is unique to a particular product page.
    </p>
    
 <div class="pho-img-bg">
                        <img src="<?php echo $plugin_dir_url; ?>images/Product_Specific.png" />
                        </div>   
</div>

</div><!-- description end -->


<div class="description">
<div class="pho-desc-head"><h2>Tab Placement Option</h2></div>
<div class="pho-plugin-content">
<p>
      This option allows you to sequence your tabs as per your priority.
    </p>
    
 <div class="pho-img-bg">
                        <img src="<?php echo $plugin_dir_url; ?>images/tab_placement_option.png" />
                        </div>   
</div>

</div><!-- description end -->

<div class="description">
<div class="pho-desc-head"><h2>Add Shortcode </h2></div>
<div class="pho-plugin-content">
<p>
       This plugin allows you to add shortcode in the custom tabs. For instance, you could add Contact-Form 7 Shortcode to any of the custom tabs that you have on your site.
    </p>
    
 <div class="pho-img-bg">
                        <img src="<?php echo $plugin_dir_url; ?>images/add_shortcode.png" />
                        </div>   
</div>

</div><!-- description end -->


<div class="description">
<div class="pho-desc-head"><h2>Modify Default Tabs</h2></div>
<div class="pho-plugin-content">
<p>
     You could modify the default tabs provided to you by wordpress. Sort, Re-order or Rename the default tabs as per your requirement. You could enable/disable these tabs as well. 
    </p>
    
 <div class="pho-img-bg">
                        <img src="<?php echo $plugin_dir_url; ?>images/modify_default_tabs.png" />
                        </div>   
</div>

</div><!-- description end -->




</ul>

<div class="pho-upgrade-btn">

<a href="https://www.phoeniixx.com/product/woocommerce-custom-tabs-plugin" target="_blank"><img src="<?php echo $plugin_dir_url; ?>images/premium-btn.png" /></a>

</div>
</div><!-- premium-box-container -->



</div>