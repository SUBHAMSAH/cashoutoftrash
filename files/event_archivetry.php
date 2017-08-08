      <?php include("CONNECTTODATABASE.php"); ?>
	  <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="courseArchive_content">
              <!-- start blog archive  -->
              <div class="row">
                <!-- start single blog archive -->
				
				<?php 
				
				
				$per_page=4;
				
				if(isset($_GET['page'])){
					
					$page_no=$_GET['page'];
					
				}else{
					
					$page_no="";
				}
				
				if($page_no==""||$page_no==1){
					$page_nofirst=0;
				}else{
					$page_nofirst=($page_no*$per_page )-$per_page; 
				}
				
				
				
				$count_post="SELECT * FROM posts "; 
				$select_all_post=mysqli_query($connection,$count_post);
				$count=mysqli_num_rows($select_all_post);
				
				$count =ceil($count/$per_page);
				
				
				
				$query="SELECT * FROM posts  ORDER BY id DESC LIMIT $page_nofirst,$per_page";
				$select_all_events=mysqli_query($connection,$query);
				
				while($row=mysqli_fetch_assoc($select_all_events)){
					$event_id=$row['id'];
					
					$event_title=$row['title'];
				$event_author=$row['author'];
				$event_content=substr($row['content'],0,500);
				$event_image=$row['image'];
				$event_date=$row['date'];
				
				?>
				
				
				
				<div class="row blogu">
		                <div class="col-sm-4 col-md-4 ">
		                    <div class="blog-thumb">
		                        <a href="events-archive.php?source=course-single&p_id=<?php  echo $event_id;  ?>">
		                            <img class="img-responsive" src="img/<?php echo $event_image ?>" alt="photo">
		                        </a>
		                    </div>
		                </div>
		                <div class="col-sm-8 col-md-8">
		                    <h2 class="blog-title">
		                        <a href="events-archive.php?source=course-single&p_id=<?php  echo $event_id;  ?>"><?php  echo $event_title;  ?></a>
		                    </h2>
		                    <p><i class="fa fa-calendar-o"></i>  <?php  echo $event_date;  ?>
		                        <span class="comments-padding"></span>
		                        <i class="fa fa-comment"><a href="events-archive.php?source=course-single&p_id=<?php  echo $event_id;  ?>">Comment</a></i>
		                    </p>
		                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>
		                </div>
		            </div>
		            <hr>
				

				<?php } ?>
				
                <!-- End single blog archive -->
             
               
                <!-- start single blog archive -->
              </div>
              <!-- end blog archive  -->
              <!-- start previous & next button -->
              <div class="single_blog_prevnext">
			    <ul class="pager">
				<?php
		 for($i=1;$i<=$count;$i++){
			 
			 echo "<li><a href='events-archive.php?page={$i}'>$i</a></li>";
			 
		 }
		  
		  ?>
		  </ul>
                <a href="#" class="prev_post wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;"><i class="fa fa-angle-left"></i>Previous</a>
                <a href="#" class="next_post wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">Next<i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
		            

		  
		 