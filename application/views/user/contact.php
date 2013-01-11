<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MI 3B Jos</title>
<link href="<?=base_url();?>/style/css/templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="<?=base_url();?>style/css/ddsmoothmenu.css" />

<script type="text/javascript" src="<?=base_url();?>style/js/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>style/js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>


<script language="javascript" type="text/javascript">
	window.addEvents({
		'domready': function(){
			/* thumbnails example , div containers */
			new SlideItMoo({
						overallContainer: 'SlideItMoo_outer',
						elementScrolled: 'SlideItMoo_inner',
						thumbsContainer: 'SlideItMoo_items',		
						itemsVisible: 5,
						elemsSlide: 2,
						duration: 200,
						itemsSelector: '.SlideItMoo_element',
						itemWidth: 171,
						showControls:1});
		},
		
	});

	function clearText(field)
	{
		if (field.defaultValue == field.value) field.value = '';
		else if (field.value == '') field.value = field.defaultValue;
	}
</script>

</head>
<?php include "user_template/header.php"?>
    
    <div id="templatemo_menu" class="ddsmoothmenu">
        <ul>
            <li><?php echo anchor('ecommerce/index', 'Home');?></li>
            <li><?php echo anchor('ecommerce/produk', 'Produk' );?></li>
            <li><?php echo anchor('ecommerce/news', 'News');?></li>
            <li><?php echo anchor('ecommerce/forum', 'Forum');?></li>
            <li><?php echo anchor('ecommerce/caratransaksi', 'How to Order');?></li>
            <li><?php echo anchor('ecommerce/contact', 'Contact Us', array('class'=>'selected'));?></li>
			<li><?php echo anchor('ecommerce/admin', 'Admin');?></li>
        </ul>
        <br style="clear: left" />
    </div> <!-- end of templatemo_menu -->
    
    <div class="cleaner h20"></div>
    <div id="templatemo_main_top"></div>
    <div id="templatemo_main">
    	
        <?php include "user_template/sidebar.php"?>
        
        <div id="content">
        	<h2>Contact Information</h2>
			
            <div class="col col_13">
            <p>Silahkan masukkan komentar anda </p>
            <div id="contact_form">
               <form method="post" name="contact" action="kirim_Email">
                    
                    <label for="author">Name:</label> <input type="text" id="author" name="author" class="required input_field" />
                    <div class="cleaner h10"></div>
						
                    <label for="email">Email:</label> <input type="text" id="email" name="email" class="validate-email required input_field" />
                    <div class="cleaner h10"></div>
                        
                    <label for="subject">Subject:</label> <input type="text" name="subject" id="subject" class="input_field" />
                    <div class="cleaner h10"></div>
        
                    <label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                    <div class="cleaner h10"></div>
 					
					<input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" />
					<input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />
					
                </form>
            </div>
		</div>
        <div class="col col_13">
        	<h5>Location One</h5>
            111-303 Fusce nec ante at odio blandit, <br />
            In vitae lacus in purus interdum, 10640<br />
            Nam rhoncus, diam a mollis tempor<br /><br />
			<strong>Phone:</strong> 010-225-1800<br />
            <strong>Email:</strong> <a href="mailto:info@yoursite.com">info@yoursite.com</a> <br />
            <div class="cleaner divider"></div>
			
			<div class="cleaner h30"></div>
			
            <h5>Location Two</h5>
            120-300 Duis lacinia dictum, <br />
            Ullamcorper mattis magna non, 15520<br />
            Maecenas a diam, a mollis magna<br /><br />
			<strong>Phone:</strong> 010-226-1200<br />
            <strong>Email:</strong> <a href="mailto:info@yoursite.com">info@yoursite.com</a> <br />           
        </div>
        
        <div class="cleaner h30"></div>
        
          <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=id&amp;geocode=&amp;q=toko+hartono+malang&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=34.259599,86.572266&amp;ie=UTF8&amp;hq=toko+hartono&amp;hnear=Malang,+Jawa+Timur,+Indonesia&amp;t=m&amp;ll=-7.674441,112.669224&amp;spn=0.737886,0.144845&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=id&amp;geocode=&amp;q=toko+hartono+malang&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=34.259599,86.572266&amp;ie=UTF8&amp;hq=toko+hartono&amp;hnear=Malang,+Jawa+Timur,+Indonesia&amp;t=m&amp;ll=-7.674441,112.669224&amp;spn=0.737886,0.144845" style="color:#0000FF;text-align:left">Lihat Peta Lebih Besar</a></small>    
        </div> <!-- END of content -->
        <div class="cleaner"></div>
    </div> <!-- END of main -->
    
    <?php include "user_template/footer.php"?>
   
</div>

</body>
</html>