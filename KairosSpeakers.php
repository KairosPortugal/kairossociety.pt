<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0028)http://www.kairossociety.hu/ -->
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US"><head profile="http://gmpg.org/xfn/11"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


<?php include("header.php"); ?>


<!--THIS IS THE SLIDER ZONE!-->

<div class="slider_wrap" style="">

<div id="zn_slider">

	<div id="slider" class="easyslider" style="width: 1000px; height: 310px; overflow: hidden;">
			<img width="900px"  style="margin-top:-65px" src="./images/WorldMap.png" class="attachment-post-thumbnail wp-post-image" alt="Kairos Society Portugal" title="Kairos Society Portugal">
		
</div>

	 </div>


       <!--  <div id="zn_slider">

        

<div id="slider" class="easyslider" style="width: 1000px; height: 310px; overflow: hidden;">

        <ul style="width: 3000px; margin-left: 0px;">
        <li>	
        <a href=""><img width="1150" height="350" src="./KairosFiles/4.jpg" class="attachment-post-thumbnail wp-post-image" alt="4" title="4"><div style="background:url(&#39;http://www.kairossociety.hu/images/transparent.png&#39;); width:1000px; height:306px; position:absolute; top:0;z-index:1001;"></div></a>

            </li>

        
       </ul>

</div>
        </div> -->

    



</div>
<div style="height:1px;border-bottom: 1px dashed #666666;clear:both;margin-bottom:15px;position:relative;top:400px"></div>




    <div class="center">

<!--HEADER START-->


<!--HEADER END-->


<!--SLIDER END-->






<!--SLIDER END-->



<!--MIDROW STARTS-->



<!--MIDROW END-->

  <div class="single_post_full">
               <div class="post_content">
                <h2 class="postitle">KAIROS SOCIETY PORTUGAL WEBSITE NOTIFICATION</h2>
                <center>
                <img src="./KairosFiles/line3.png" class="line3"></center>

<div class="textbody">
   <h3 >We are currently building awesome stuff, stay tuned</h3>
</br>


	</br></br>
	</br></br>
	</br></br>
</div>
                    </div> 
                    
                   
                      </div>
                               
               


<!--LATEST POSTS-->


	<div class="lay1">

<div class="lay1_wrap">


                   
</div>

            
            <div class="hidden_nav"></div>



    </div>

<!--LATEST POSTS END-->


</div>
	<!--COPYRIGHT TEXT-->

    <div id="copyright">
    	<div id="wrapper">

            <div id="left">
            	<img src="./KairosFiles/footer_k.png">
                <div style="clear:both"></div>                 
                <p>© 2013 Kairos Society Portugal<br>
                
All Rights Reserved.</p>

            </div>
            <div id="right">
          White sponsors logo
           
            </div>
	
        <!--FOOTER MENU-->    
		</div>
           

    </div>


    <script type="text/javascript">
		/* <![CDATA[ */
    jQuery(function(){
	jQuery("#slider").easySlider({
		auto: true,
		continuous: true,
		numeric: true,
		pause: 10000		});
	});
	/* ]]> */
	</script>
    
 
<script type="text/javascript">
/* <![CDATA[ */ 
//AJAX PAGINATION
jQuery(document).ready(function(){
jQuery('.amp_next, .amp_prev').css({"display":"none"});
jQuery('.znn_paginate a:first').each(function () {
    var href = jQuery(this).attr('href');
    jQuery(this).attr('href', href + '?paged=1');
});

jQuery('.znn_paginate a').each(function(){
        this.href = this.href.replace('/page/', '?paged=');
});
    jQuery('.znn_paginate a').live('click', function(e)  {
	jQuery('.znn_paginate a, span.amp_page').removeClass('amp_current'); // remove if already existant
    jQuery(this).addClass('amp_current');

	e.preventDefault();
			var link = jQuery(this).attr('href');
	jQuery('.lay1_wrap').html('<div class="zn_ajaxwrap"><div class="zn_ajax"></div></div>').load(link + '.lay1_wrap .post', function() {
			var divs = jQuery(".lay1 .post");
			for(var i = 0; i < divs.length; i+=3) {
			  divs.slice(i, i+3).wrapAll("<div class='zn_row'></div>"); }
    jQuery('.lay1_wrap').fadeIn(500); });
	
	
    });
});  // end ready function
/* ]]> */
</script> 


    <script type="text/javascript" src="./KairosFiles/jquery.form.min.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"http:\/\/www.kairossociety.hu\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","sending":"Sending ..."};
/* ]]> */
</script>
<script type="text/javascript" src="./KairosFiles/scripts.js"></script>



<div id="fancybox-tmp"></div><div id="fancybox-loading"><div></div></div><div id="fancybox-overlay"></div><div id="fancybox-wrap"><div id="fancybox-outer"><div class="fancybox-bg" id="fancybox-bg-n"></div><div class="fancybox-bg" id="fancybox-bg-ne"></div><div class="fancybox-bg" id="fancybox-bg-e"></div><div class="fancybox-bg" id="fancybox-bg-se"></div><div class="fancybox-bg" id="fancybox-bg-s"></div><div class="fancybox-bg" id="fancybox-bg-sw"></div><div class="fancybox-bg" id="fancybox-bg-w"></div><div class="fancybox-bg" id="fancybox-bg-nw"></div><div id="fancybox-content"></div><a id="fancybox-close"></a><div id="fancybox-title"></div><a href="javascript:;" id="fancybox-left"><span class="fancy-ico" id="fancybox-left-ico"></span></a><a href="javascript:;" id="fancybox-right"><span class="fancy-ico" id="fancybox-right-ico"></span></a></div></div></body></html>