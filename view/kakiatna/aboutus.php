<section id="page" class="commonsection">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                    	<?php
                    	$db = Db::init();
						$stg = $db->content;
						$q = array(
							'category' => new MongoId('552c89aae2df875e5edefe30'),
							'status' => 'yes'
						);
						$data = $stg->findOne($q);
                    	?>
                        <h1 class="pageTitle">About us</h1>
                        <div class="titleHR"><span></span></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 wow fadeIn"  data-wow-duration="700ms" data-wow-delay="300ms">
                        <div class="aboutDetails">
                        	
                        	<h1><?php echo $data['judul'];?></h1>
                            <p>
                              <?php
                                echo $data['isicontent']
                               ?>
                            </p>
                            <p class="noMarginBottom">
                                
                            </p>
                            <a href="#" class="wcf_button">Read More</a>
                        </div>
                        <div class="aboutImage">
                        	<?php
                        	$ft = $data['foto'];
							$ur = IMAGE_KAKI.$ft;
                        	?>
                        	<img class="aboutimg" src="<?php echo $ur?>" />
                        </div>
                    </div>
                </div>
            </div>
            
        </section>