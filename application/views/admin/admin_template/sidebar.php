<div id="sidebar">
				<h3>Login</h3>
			    <form>
				
				Username :<input type="text"><br>
				Password :<input type="text"><br>
				<center><input type="button" value="Login">&nbsp;&nbsp;&nbsp;<a href=#>Register</a></center>
				
				</form>
				<br>
				
				<br>
				<div class="sidebar_menu">
				<h3>Categories</h3>
				<ul>
					<li><a href="#">TV</a></li>
				</ul>
				<h3>Merk</h3>
				<ul>
					<li><a href="#">Sharp</a></li>
				</ul>
				</div>
				<h3>Cart</h3>
				<center>Terdapat<br> 2 <br>Barang dalam Shopping Cart
				<br><br>
				<?php echo anchor('ecommerce/cart','Lihat Cart',array('title'=>'Cart','class'=>'add_to_cart'));?>
				</center>
			
            
        </div> <!-- END of sidebar -->