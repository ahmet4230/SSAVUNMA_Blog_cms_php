<aside id="aside" class="col-md-4">
                    
                    
                    
                    
					<!-- Category -->
					<div class="widget">
						<h3 class="mb-3">Categories</h3>
						<div class="widget-category">

                        <?php

                        $sql_query = "SELECT * FROM categories";
                        $select_all_categories = mysqli_query($conn,$sql_query);

                        while($row = mysqli_fetch_assoc($select_all_categories)){
                            $category_name = $row["category_name"];

                            echo " <a href='#'>{$category_name}<span>(7)</span></a>"; 
                        }
                       

                        ?>



                        <!--
							
							<a href="#">Marketing<span>(142)</span></a>
							<a href="#">Web Development<span>(74)</span></a>
							<a href="#">Branding<span>(60)</span></a>
							<a href="#">Photography<span>(5)</span></a>

                        -->
						</div>

					</div>
					<!-- /Category -->

				
						<!-- /single post -->

					</div>
					<!-- /Posts sidebar -->

				</aside>