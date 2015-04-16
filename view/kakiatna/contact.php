<!-- Subscribe Section -->
<section id="subscribe" class="commonsection homesubscrive">
    <div class="container">
        <div class="row">
            <div class="col-lg-1 wow fadeIn"  data-wow-duration="700ms" data-wow-delay="300ms">
                <div class="subscribeIcon">
                    <i class="icon-mail-6"></i>
                </div>
            </div>
            <div class="col-lg-7 noPaddingRight wow fadeIn"  data-wow-duration="700ms" data-wow-delay="400ms">
                <div class="subscriveNote">
                    <h1><span>Subscribe to Our</span> Newsletter!</h1>
                    <p>
                        Please, subscribe to our latest news to be updated. We promise not to spam!
                    </p>
                </div>
            </div>
            <div class="col-lg-4 wow fadeIn"  data-wow-duration="700ms" data-wow-delay="500ms">
                <div class="subscriveForm">
                    <form method="post" action="#">
                        <input type="email" placeholder="Enter Your Email" name="email" value=""/>
                        <button type="submit">
                            <i class="icon-pencil"> </i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Subscribe Section -->
<!-- Footer Section -->
<footer id="footer" class="commonsection">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6 wow fadeIn"  data-wow-duration="700ms" data-wow-delay="300ms">
                <div class="footerWeidget">
                    <div class="introWedget">
                        <h1>
                        	<?php
                        	$db = Db::init();
							$stg = $db->preference;
							$data = $stg->find();
							foreach ($data as $dat) 
							{
								$jd1 = substr(($dat['judul']), 0,8);
								$jd2 = substr(($dat['judul']), 9,12);
								echo '<span>'.$jd1.'</span>'.$jd2;
							}
                        	?>
                        </h1>
                        
                        <p class="intorSubTitle">
                        	<?php
                        	$db = Db::init();
							$stg = $db->preference;
							$data = $stg->find();
							foreach ($data as $dat) 
							{
								echo $dat['tagline'];	
							}
                        	?>
                        </p>
                        <p class="aboutWecanfly" style="color: #FFFFFF">
                            <?php
                        	$db = Db::init();
							$stg = $db->preference;
							$data = $stg->find();
							foreach ($data as $dat) 
							{
								echo $dat['deskripsi'];	
							}
                        	?>
                        </p>
                        
                        <p class="conInfo">
                        	<i class="icon-phone-3"></i>
                        	<?php
                        	$db = Db::init();
							$stg = $db->preference;
							$data = $stg->find();
							foreach ($data as $dat) 
							{
								echo $dat['phone'];	
							}
                        	?>
                        </p>
                        
                        <p class="conInfo">
                        	<i class="icon-mail-6"></i>
                        	<?php
                        	$db = Db::init();
							$stg = $db->preference;
							$data = $stg->find();
							foreach ($data as $dat) 
							{
								echo $dat['email'];	
							}
                        	?>
                        </p>
                        
                        <p class="conInfo">
                        	<i class="icon-move-2"></i>
                        	<?php
                        	$db = Db::init();
							$stg = $db->preference;
							$data = $stg->find();
							foreach ($data as $dat) 
							{
								$url = $dat['name_website'];
								echo '<a href="http://'.$url.'">'.$url.'</a>';
							}
                        	?>
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
</footer>