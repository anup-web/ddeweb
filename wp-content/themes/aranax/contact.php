<?php
/**
* Template Name: Custom Contact Page
*/
?>
<?php 
include 'db-config.php';
?>
<?php get_header(); ?>

<!-- Page Content -->
<div class="container">

	<div class="row top-mrg-md btm-mrg-sm">
		<div class="col-sm-9">
			<h2 class="page-header"><?php the_title(); ?></h2>
		</div>
	</div>
	
	<div class="row top-mrg-xs btm-mrg-lg">
		<div class="col-sm-6">
			<?php
			$mydb= new wpdb($db_user, $db_pass, $db_name, $db_host);
			$rows = $mydb->get_results("select cntr_name, cntr_address, cntr_city, cntr_state, cntr_pin, 
				cntr_phone, cntr_email, cntr_lat, cntr_long from cnf_cntr 
				where cntr_code = '01'");
			$map_lat 		= 	"";
			$map_long		= 	"";
			$map_address	=	"";
			if(sizeof($rows) > 0 ) {
				
				foreach($rows as $obj){
					echo "<h3>";
					echo str_replace(",", "<br>", $obj->cntr_address) . "<br>";
					echo $obj->cntr_city . "<br>"; 
					echo $obj->cntr_state . ", " . $obj->cntr_pin . "<br>"; 
					echo "</h3>";
						
					echo "<h3>Phone: " . $obj->cntr_phone . "</h3>";
					echo "<h3><h3>Email: " . $obj->cntr_email . "</h3>";
						
					$map_lat		=	$obj->cntr_lat;
					$map_long		=	$obj->cntr_long;
					$map_address	=	str_replace(",", "<br>", $obj->cntr_address) . ", " . $obj->cntr_city;
				}
				
			} else {
				echo "<h3 class='alert alert-danger'>Unable to fetch data</h3>";
			}	
			?>
			
			<div class="login-section">
				<div class="study-center">
					View Our
					<a class="" href="http://localhost/ddeweb/about/study-centres">Authorised Study Centers</a>
				</div>
			</div>
			
		</div>
		
		<div class="col-sm-6">
			<div id="map"></div>
		</div>
		
	</div>	

</div>

<?php get_footer(); ?>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript">
	//show google map only in contact page
  
	var pathname = window.location.pathname;
	if(pathname.search("/contact") != -1) {
		function init_map(){
			var myOptions = {
				zoom:17, 
				center:new google.maps.LatLng(<?php echo $map_lat;?>, <?php echo $map_long;?>), 
				mapTypeId: google.maps.MapTypeId.ROADMAP
			};
			map = new google.maps.Map(document.getElementById('map'), myOptions);
			marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(<?php echo $map_lat;?>, <?php echo $map_long;?>)});
			infowindow = new google.maps.InfoWindow({content:'<strong><?php echo $map_address;?></strong>'});
			google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});
			infowindow.open(map,marker);
		}
	
		google.maps.event.addDomListener(window, 'resize', init_map);
		google.maps.event.addDomListener(window, 'load', init_map);
	}
</script>
