<?php
	define('BASE_URL', /*$_SERVER['SERVER_NAME']*/  "");
   $PageTitle="Games Gifts";
	
   function customPageHeader(){?>
     <!--Arbitrary HTML Tags-->
   <?php }
   include_once('phprequrid/header.php');
   ?>
           <div class="mobile">
            <div class="navbar">
                <img src="assets/icon.png">
                <div class="text-left text-white text-header">
                    <script>writeLocalize('mainPageTitle');</script>
                </div>
            </div>
            <div class="row">
                
				   <?php 
				    include_once('phprequrid/carsual.php');
				   ?>
                <div class="col-md-12 col-12 mt-3">
                    <div class="btnCategory">
                        <div class="row mx-auto">
                            <div class="col-md-6 col-6">
                                <button class="btn btn-sm btn-primary d-block mx-auto active" id="sk"><i class="zmdi zmdi-card-giftcard mr-1"></i> <script>writeLocalize('skin');</script></button>
                            </div>
                            <div class="col-md-6 col-6">
                                <button class="btn btn-sm btn-primary d-block mx-auto" id="dm"><i class="zmdi zmdi-card-giftcard mr-1"></i> <script>writeLocalize('diamond');</script></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-1 mb-1">
                <div class="col-md-12 col-12">
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="scroll" id="skin">
				<?php
					for ($i = 1; $i <= 21; $i+=3){
						echo "<div class='row px-3 mt-2'>";
						for ($x = 0; $x < 3; $x++) {
						  echo "
						  <div class='col-md-4 col-4 d-inline mx-auto'>
							<div class='reward-box'>
								<img src='assets/image/skin/".($i+$x).".png' class='d-block mx-auto' alt=''>
								<button class='btn btn-sm btn-danger d-block mx-auto'>
								<i class='zmdi zmdi-card-giftcard mr-1'></i> CLAIM</button>
							</div>
						</div>
						";
						}
						echo "</div>";
					}
				?>
                

                <div class="row px-3 mt-2 mb-5">
                    &nbsp;<br>&nbsp;<br>&nbsp;
                </div>
            </div>

            <!-- Diamond Box -->

            <div class="scroll" id="diamonds">
				<?php               

					for ($i = 1; $i <= 6; $i+=2) {
						echo " <div class='row px-3 mt-2'>";
						for ($x = 0; $x < 2; $x++) {
						echo "
						  <div class='col-md-6 col-6 d-inline mx-auto'>
							<div class='reward-box2'>
								<img src='assets/image/diamond/".($i+$x).".jpg' class='d-block mx-auto' alt=''>
								<button class='btn btn-sm btn-info d-block mx-auto'>
								<i class='zmdi zmdi-card-giftcard mr-1'></i> CLAIM</button>
							</div>
						</div>
						";
					}
					echo "</div>";
					}
				?>
                <div class="row px-3 mt-2 mb-5">
                    &nbsp;<br>&nbsp;<br>&nbsp;
                </div>
            </div>
        </div>
   
<?php
   include_once('phprequrid/footer.php');
?>