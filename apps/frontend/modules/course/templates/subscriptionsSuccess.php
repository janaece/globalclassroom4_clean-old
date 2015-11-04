<?php
global $CFG;
$current_user = $CFG->current_app->getCurrentUser();
$enrol_count = count($current_user->getEnrolments());
//print_r($current_user->getEnrolments());
$course_creator = $CFG->current_app->hasPrivilege('EclassroomUser');

$CFG->current_app->requireMahara();
$CFG->current_app->requireLogin();
$current_user = $CFG->current_app->getCurrentUser();
$role_manager = $current_user->getRoleManager();
$gc_admin = $role_manager->hasRole('GCUser');
$owner = $role_manager->hasRole('EschoolAdmin');
$user_id = $current_user->getObject()->id;
$is_user = ($user_id == $current_user->getObject()->id);

$images_base_url = gcr::imagesBaseUrl;
$images_subfolder ='http://gc-elearning-portal-static-image-hosting.globalclassroom.us.s3.amazonaws.com/stratusimages/';
?>
<style type="text/css">.fancybox-margin{margin-right:17px;}</style>
 
<link rel="stylesheet" href="/js/masonry/css/style.css">
<link rel="stylesheet" href="/css/course_view.css">
<link rel="stylesheet" href="/css/course_detail.css">
<script src="/js/masonry/jquery.masonry.min.js"></script>
<script src="/js/course_view.js"></script>

<link href='https://fonts.googleapis.com/css?family=Rambla|Domine|Droid+Sans|BenchNine|Economica|Great+Vibes|Amaranth|Playfair+Display+SC|Cookie|Cinzel+Decorative|Righteous|Roboto|Roboto+Condensed|Squada+One|Fjalla+One|Satisfy|Oswald|Damion|Marvel' rel='stylesheet' type='text/css'>
<style type="text/css">
.fontlist{font-family:'Rambla',sans-serif;font-family:Domine,serif;font-family:'Droid Sans',sans-serif;font-family:BenchNine,sans-serif;font-family:Economica,sans-serif;font-family:'Great Vibes',cursive;font-family:Amaranth,sans-serif;font-family:'Playfair Display SC',serif;font-family:Cookie,cursive;font-family:'Cinzel Decorative',cursive;font-family:Righteous,cursive;font-family:Roboto,sans-serif;font-family:'Roboto Condensed',sans-serif;font-family:'Squada One',cursive;font-family:'Fjalla One',sans-serif;font-family:Satisfy,cursive;font-family:Oswald,sans-serif;font-family:Damion,cursive;font-family:Marvel,sans-serif}
html,body{height:100%;margin:0}
.mybox{width:96%;height:auto;margin:auto;-webkit-border-radius:20px;-moz-border-radius:20px;border-radius:20px;border:2px solid #A9B6B8;background-color:#FFF;-webkit-box-shadow:#A6A6A6 1px 1px 1px;-moz-box-shadow:#A6A6A6 1px 1px 1px;box-shadow:#A6A6A6 1px 1px 1px}
.mycss{margin:20px;font-weight:400;color:#3B3B3B;letter-spacing:1pt;word-spacing:2pt;font-size:25px;text-align:left;font-family:arial,helvetica,sans-serif;line-height:1}
.page_header_title{margin:10px;font-weight:700;color:#00f;letter-spacing:1pt;word-spacing:3pt;font-size:30px;text-align:left;font-family:'Roboto',sans-serif;line-height:1}
.page_header_title_subline{margin-left:100px;font-weight:400;color:#333;letter-spacing:1pt;word-spacing:3pt;font-size:16px;text-align:left;font-family:'Roboto Condensed',sans-serif;line-height:1.5}
.myfont{margin:20px;font-weight:400;color:#3B3B3B;letter-spacing:3pt;word-spacing:2pt;font-size:25px;text-align:left;font-family:arial,helvetica,sans-serif;line-height:1}
.myfont1{margin:10px;font-weight:700;color:#415B84;letter-spacing:1pt;word-spacing:3pt;font-size:21px;text-align:left;font-family:'Roboto',sans-serif;line-height:1}
.myfont2{font-weight:400;color:#333;letter-spacing:1pt;word-spacing:3pt;font-size:16px;text-align:left;font-family:'Roboto Condensed',sans-serif;line-height:1.5}
.myfont3{margin:10px;font-weight:400;color:#00f;letter-spacing:3pt;word-spacing:2pt;font-size:16px;text-align:left;font-family:arial,helvetica,sans-serif;line-height:1}
.myfont4{margin:0px;font-weight:700;color:#000;letter-spacing:1pt;word-spacing:2pt;font-size:16px;text-align:left;font-family:arial,helvetica,sans-serif;line-height:1}
.myfont5{margin:0px;font-weight:400;color:#666;letter-spacing:0pt;word-spacing:2pt;font-size:12px;text-align:left;font-family:'Roboto Condensed',sans-serif;line-height:1}
#wrap0{width:100%;margin:20px;background-color:#fff}
#wrap1{width:100%;margin:20px;background-color:#fff}
#wrap1_left_col2{float:left;width:45%;background-color:#fff}
#wrap1_right_col2{float:right;width:45%;background-color:#fff}
#wrap2{width:100%;margin:20px;background-color:#ddd}
#wrap2_left_col2{float:left;width:45%;background-color:#ddd}
#wrap2_right_col2{float:right;width:45%;background-color:#ddd}
.col5header{position:relative;float:left;left:auto;width:auto;background-color:#fff}
.col5wrapper{position:relative;float:left;left:auto;width:auto;background-color:#fff}
.col5left1{position:relative;float:left;left:auto;width:auto;background-color:#fff}
.col5left2{position:relative;float:left;left:auto;width:auto;background-color:#fff}
.col5left3{position:relative;float:left;left:auto;width:auto;background-color:#fff}
.col5left4{position:relative;float:left;left:auto;width:auto;background-color:#fff}
.col5right{position:relative;float:right;right:auto;width:auto;background-color:#fff}
.col5footer{position:relative;float:left;left:auto;width:auto;background-color:#fff}
body{border-width:0;padding:0;margin:0;font-size:90%;background-color:#fff}
a.tooltip{outline:none}
a.tooltip strong{line-height:30px}
a.tooltip:hover{text-decoration:none}
a.tooltip span{z-index:10;display:none;padding:14px 20px;margin-top:-30px;margin-left:28px;width:300px;line-height:16px}
a.tooltip:hover span{display:inline;position:absolute;color:#111;border:1px solid #DCA;background:#fffAF0}
.callout{z-index:20;position:absolute;top:30px;border:0;left:-12px}
a.tooltip span{border-radius:4px;box-shadow:5px 5px 8px #CCC}
.subscribe_btn{background:#3498db;background-image:-webkit-linear-gradient(top,#3498db,#2980b9);background-image:-moz-linear-gradient(top,#3498db,#2980b9);background-image:-ms-linear-gradient(top,#3498db,#2980b9);background-image:-o-linear-gradient(top,#3498db,#2980b9);background-image:linear-gradient(to bottom,#3498db,#2980b9);-webkit-border-radius:28;-moz-border-radius:28;border-radius:28px;text-shadow:3px 3px 4px #666;font-family:Arial;color:#fff;font-size:18px;padding:10px 20px;text-decoration:none}
.subscribe_btn:hover{background:#3cb0fd;background-image:-webkit-linear-gradient(top,#3cb0fd,#3498db);background-image:-moz-linear-gradient(top,#3cb0fd,#3498db);background-image:-ms-linear-gradient(top,#3cb0fd,#3498db);background-image:-o-linear-gradient(top,#3cb0fd,#3498db);background-image:linear-gradient(to bottom,#3cb0fd,#3498db);text-decoration:none}
.free_btn{background:#34d97b;background-image:-webkit-linear-gradient(top,#34d97b,#137d09);background-image:-moz-linear-gradient(top,#34d97b,#137d09);background-image:-ms-linear-gradient(top,#34d97b,#137d09);background-image:-o-linear-gradient(top,#34d97b,#137d09);background-image:linear-gradient(to bottom,#34d97b,#137d09);-webkit-border-radius:28;-moz-border-radius:28;border-radius:28px;text-shadow:3px 3px 4px #666;font-family:Arial;color:#fff;font-size:18px;padding:10px 20px;text-decoration:none}
.free_btn:hover{background:#0b8f49;background-image:-webkit-linear-gradient(top,#0b8f49,#2ed9a6);background-image:-moz-linear-gradient(top,#0b8f49,#2ed9a6);background-image:-ms-linear-gradient(top,#0b8f49,#2ed9a6);background-image:-o-linear-gradient(top,#0b8f49,#2ed9a6);background-image:linear-gradient(to bottom,#0b8f49,#2ed9a6);text-decoration:none}
.available_btn{background:#b5a017;background-image:-webkit-linear-gradient(top,#b5a017,#e8e84c);background-image:-moz-linear-gradient(top,#b5a017,#e8e84c);background-image:-ms-linear-gradient(top,#b5a017,#e8e84c);background-image:-o-linear-gradient(top,#b5a017,#e8e84c);background-image:linear-gradient(to bottom,#b5a017,#e8e84c);-webkit-border-radius:28;-moz-border-radius:28;border-radius:28px;text-shadow:3px 3px 4px #666;font-family:Arial;color:#fff;font-size:18px;padding:10px 20px;text-decoration:none}
.available_btn:hover{background:#ebeb52;background-image:-webkit-linear-gradient(top,#ebeb52,#bda718);background-image:-moz-linear-gradient(top,#ebeb52,#bda718);background-image:-ms-linear-gradient(top,#ebeb52,#bda718);background-image:-o-linear-gradient(top,#ebeb52,#bda718);background-image:linear-gradient(to bottom,#ebeb52,#bda718);text-decoration:none}
.colorbar1{background-color:#9561FE;width:100%;height:12px}
.myfont1 span.count { font-size: 21px; color: #3838CB;}
.myfont2 a { text-decoration:underline; font-weight:200; font-size: 14px; }
h3.sub-title{font-size: 22px;}
button.library-button{  background-image: none !important; background-color: #415B84 !important; padding: 12px 26px; font-size: 26px; color: #fff; font-weight: 300;}
.library-div .myfont2 a {margin-left: 40px;}
button.register-button{  background-image: none !important; background-color: #00f !important; padding: 12px 26px; font-size: 26px; color: #fff; font-weight: 300;}
h1 { color: #5F6169; font-size: 26px; }
</style>

<!-- ***************************** TMG Added for CDN  *****************************  -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type='text/javascript' src='//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js?ver=3.3.4-0'></script>

<!-- Add jQuery library -->
<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
<!-- Add fancyBox main JS and CSS files -->
<link rel="stylesheet"  type="text/css" href="/css/jquery.fancybox.css?v=2.1.5" media="screen" />
<script type="text/javascript" src="/js/jquery.fancybox.pack.js?v=2.1.5"></script>

<script src="https://cdn.datatables.net/1.10.6/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.6/css/jquery.dataTables.css" />

<style>
.gc_course_list_item_container { height: 0px; }
.gc_course_list_item_title { background: none; height: auto; padding: 0px; }
.col2 { width: 120px;}
#gc_course_list { float: left; width: 100%; }

table span#enroll { visibility:hidden; }
table tr:hover span#enroll{ visibility:visible; }

.dataTables_wrapper .dataTables_filter { float: left; text-align: right; display: block;  margin: -25px 0 0 500px; position: relative; width: 100%; }
.dataTables_wrapper .dataTables_filter label{ float: left;}
table.dataTable.no-footer { border-bottom: none; }
table.dataTable thead th,
table.dataTable thead td {
  padding: 10px 18px;
  border-bottom: 1px solid #ddd;
}
table.dataTable tfoot th,
table.dataTable tfoot td {
  padding: 10px 18px 6px 18px;
  border-bottom: 0px solid #fff;
}
table.dataTable.row-border tbody th, table.dataTable.row-border tbody td, table.dataTable.display tbody th, table.dataTable.display tbody td {
  border-top: 0px solid #fff;
}
table.dataTable.row-border tbody tr:first-child th,
table.dataTable.row-border tbody tr:first-child td, table.dataTable.display tbody tr:first-child th,
table.dataTable.display tbody tr:first-child td {
  border-top: none;
}
table.dataTable.cell-border tbody th, table.dataTable.cell-border tbody td {
  border-top: 0px solid #fff;
  border-right: 0px solid #fff;
}
table.dataTable.cell-border tbody tr th:first-child,
table.dataTable.cell-border tbody tr td:first-child {
  border-left: 0px solid #fff;
}
table.dataTable.cell-border tbody tr:first-child th,
table.dataTable.cell-border tbody tr:first-child td {
  border-top: none;
}
table.dataTable.cell-border tbody th, table.dataTable.cell-border tbody td { border-bottom: 1px solid #ddd; }
.gc_course_list_item_container { height: auto; margin-bottom: 0px; background: none; }
.gc_course_list_item_title { background: none; }

#page_loading_div{ position: relative; left: 45%; }
.glyphicon-refresh-animate {
    -animation: spin .7s infinite linear;
    -ms-animation: spin .7s infinite linear;
    -webkit-animation: spinw .7s infinite linear;
    -moz-animation: spinm .7s infinite linear;
}

@keyframes spin {
    from { transform: scale(1) rotate(0deg);}
    to { transform: scale(1) rotate(360deg);}
}
  
@-webkit-keyframes spinw {
    from { -webkit-transform: rotate(0deg);}
    to { -webkit-transform: rotate(360deg);}
}

@-moz-keyframes spinm {
    from { -moz-transform: rotate(0deg);}
    to { -moz-transform: rotate(360deg);}
}
</style>


<script type="text/javascript">
$(document).ready(function() {
	$(".various").fancybox({
		scrollOutside	: true,
		width		: '90%',
		height		: '75%',
		scrollOutside  : true,
		title		: 'Library',
		closeClick	: true,
	});
	$(".video").fancybox({
		maxWidth	: 960,
		maxHeight	: 600,
		fitToView	: true,
		width		: '90%',
		height		: '80%',
		autoSize	: true,
	});
});
</script>
<!-- ***************************** TMG Added for CDN  *****************************  -->

<div id="page_loading_div">
Loading...
<img height="60" width="100" class="img-responsive" src="<?php echo $images_subfolder . 'loading.gif'; ?>"/>
</div>

<div id="page_content_load" style="display:none;">
<section id="content">

<?php
//timer function
function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}
$measure_time = 0; // set to 0 to not measure/display the elapsed times, 1 to measure/display.
$time_start = microtime_float();
?>

<?php
//echo "</br>View Start-1: ".date("Y-m-d H:i:s")."</br>";

/* 	$eschool_array = array();
	$catalog_courses_count = array();
	foreach($CFG->current_app->getMnetEschools() as $eschool) {
		//if (GcrEschoolTable::authorizeEschoolAccess($eschool, true)) {
			$eschool_array[$eschool->getFullName()] = $eschool;
		//}
	} 
	ksort($eschool_array);
	// gets catalog-wise courses count
	foreach($eschool_array as $eschool) {
		//$catalog_courses_count[$eschool->getShortName()] = $eschool->getFullName();
		$catalog_courses_count[$eschool->getShortName()] = $ctlg_courses_list;
	}
 */	
	//$catalog_courses_count = array();
	$lib_ctlg_crse_lists = array();
	$lib_ctlg_crse_count = array();
	$all_catalogs_list = array();
	$reg_paid_status = array();
	$all_catalogs_count = 0;

// In this section, we look at each of the subscription items and calculate the total count
	foreach($libraries_list as $library_list_key=>$library_list_val)
	{
		$institution_name = $products_list_institution[$library_list_key];
		$mhr_institution_obj = $CFG->current_app->selectFromMhrTable('institution', 'name', $institution_name, true);
		if ($mhr_institution_obj) {
			$mhr_institution = new GcrMhrInstitution($mhr_institution_obj, $CFG->current_app);
			$potential_eschools = array();
			$current_eschools = array();
			// Check if users do not exist on the eschool, and get potential users in properly formatted form
			$eschools = $mhr_institution->getEschools();
			if ($eschools) {
				foreach ($eschools as $eschool) {
					$current_eschools[$eschool->getShortName()] = $eschool->getFullName();
				}
			}
/* 			$eschools = $CFG->current_app->getMnetEschools();
			if ($eschools) {
				foreach ($eschools as $eschool) {
					if (!array_key_exists($eschool->getShortName(), $current_eschools)) {
						$potential_eschools[$eschool->getShortName()] = $eschool->getFullName();
					}
				}
			} */
			//asort($potential_eschools);
			asort($current_eschools);
			
			$lib_ctlg_crse_count[$library_list_key] = 0;
			$mhr_usr_institution = $current_user->checkMhrUsrInstitutionRecord($institution_name);
			if($mhr_usr_institution) {
				$reg_paid_status[$library_list_key]["paid_flag"] = 1; // correct 1;
			} else {
				$reg_paid_status[$library_list_key]["paid_flag"] = 0; // correct 0;
			}

			foreach($current_eschools as $current_eschool_key=>$current_eschool_val) {
				if((stripos(strtolower($current_eschool_val), "(*)") === false) && (stripos(strtolower($current_eschool_val), "($)") === false)) {
/* 					$params = array();
					$params["start_index"] = 0;
					$params["mode"] = "Eschool";
					$params["mode_id"] = $current_eschool_key;
					$this->course_list = new GcrCourseList($params, $CFG->current_app);
					$catalog_courses_count[$current_eschool_key] = $this->course_list->getCoursesCount(); */
					if(isset($catalog_courses_count[$current_eschool_key]) && $catalog_courses_count[$current_eschool_key] > 0) {
						$lib_ctlg_crse_count[$library_list_key] = $lib_ctlg_crse_count[$library_list_key] + $catalog_courses_count[$current_eschool_key];
						$all_catalogs_count = $all_catalogs_count + $catalog_courses_count[$current_eschool_key];
						$lib_ctlg_crse_lists[$library_list_key][$current_eschool_key] = $current_eschool_val;
						$all_catalogs_list[] = $current_eschool_val;	
					}
				}
			}
		} else {
			$lib_ctlg_crse_count[$library_list_key] = 0;
		}
	}

//The total counts are saved in an array.
//$time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
//echo "</br>After Catalog list array: ".date("Y-m-d H:i:s")."</br>";	
?>

<?php
if ($measure_time == 1) {
  $time_end = microtime_float();
  $elapsed_time = $time_end - $time_start;
  echo "Step 3: elapsed time = ".$elapsed_time. "seconds";
  $time_start = microtime_float();
}
?>

<div id="gc_course_list">
	<div class="content_spacer_20px"><h1>My Course Libraries</h1></div>
	<p>Global Classroom's subscription libraries provide members with unlimited access to courses that are 
	focused on the job-relevant skills required to succeed in today's global economy. All courses completed 
	recognize the member with a Certificate or a Badge of Participation that can be shared with your colleagues 
	and/or employer.</p> 
	<?php
		$loop_i = 1;
		$t1_cost = array();
		foreach($products_details as $products_detail_key=>$products_detail_val) {
			$t1_cost[] = $products_detail_val["cost"];	
			$t1_uniquecost = array_unique ($t1_cost);
			asort( $t1_uniquecost, SORT_NUMERIC );
		}
	?>
	<div>
		<hr size="10" width="80%" align="center">
		
<!-- blockcheck 1 -->		
		<div>
			<div class="content_spacer_20px"><h2>My Free and Paid Libraries</h2></div>
			<div class="row">
				<?php
				$loop_i = 1;
				foreach($products_details as $products_detail_key=>$products_detail_val){									
					if(isset($lib_ctlg_crse_count[$products_detail_val["short_name"]]) && $lib_ctlg_crse_count[$products_detail_val["short_name"]] > 0) {
						$library_list_key = $products_detail_val["short_name"];
						$reg_paid = $reg_paid_status[$library_list_key]["paid_flag"];
						// Show this library only if free or paid up.						
						if (($products_detail_val["cost"] == 0) || ($reg_paid == 1)) {	
							?>
							<div class="col-md-4">
								<!-- <a class="various fancybox.iframe" href="http://globalclassroomportal.com/educationlibrary/library_template.php?PassedEducationLibrariesKEY=<?php echo $products_detail_val["id"]; ?>"> -->
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseOneCS_<?php echo $products_detail_val["institution_short_name"]."_".$products_detail_val["id"]; ?>" aria-expanded="false" class="collapsed overview-title">
									<?php
									$image_url = "";
									//if(!empty($products_detail_val["icon"]) && @getimagesize($images_base_url . $products_detail_val["icon"])) {
									if(!empty($products_detail_val["icon"])) {
										$image_url = $images_base_url .$products_detail_val["icon"];
									?>
									<img src="<?php print $image_url; ?>" alt="<?php echo $products_detail_val["full_name"]; ?>" height="30" width="30">
									<?php } ?>
									&nbsp;&nbsp;<?php echo $products_detail_val["full_name"]; ?>
								</a>: 
								<?php echo isset($lib_ctlg_crse_count[$products_detail_val["short_name"]]) ? $lib_ctlg_crse_count[$products_detail_val["short_name"]] : 0; ?> courses
							</div>
							<?php
								if($loop_i%3 == 0) { ?>
									</div><div class="row">
								<?php }
								$loop_i++;
								//}
						}
					}
				}
				?>
			</div>
		</div>
<!-- /blockcheck 1 -->		
<!-- blockcheck 2 -->		
		<div>
		    <?php foreach ($t1_uniquecost as $t1_costitem) { ?>								
				<?php // count number of valid entries to show
				if ($t1_costitem > 0) {
					$count_i = 0;
					foreach($products_details as $products_detail_key=>$products_detail_val){							
						if(isset($lib_ctlg_crse_count[$products_detail_val["short_name"]]) && $lib_ctlg_crse_count[$products_detail_val["short_name"]] > 0) {
							$library_list_key = $products_detail_val["short_name"];
							$reg_paid = $reg_paid_status[$library_list_key]["paid_flag"];
							// Show this library only if not free and not  paid up.							
							if (($products_detail_val["cost"] == $t1_costitem) && ($reg_paid == 0)) {
								$count_i = $count_i + 1;										
							}
						}
					}
				}
				?>
				<?php if (($t1_costitem > 0) && ($count_i > 0)) { ?>
					<div class="content_spacer_20px"><h2>$<?php echo $t1_costitem ?> Libraries</h2></div>
					<div class="row">
						<?php
						$loop_i = 1;
						foreach($products_details as $products_detail_key=>$products_detail_val){							
							if(isset($lib_ctlg_crse_count[$products_detail_val["short_name"]]) && $lib_ctlg_crse_count[$products_detail_val["short_name"]] > 0) {
								$library_list_key = $products_detail_val["short_name"];
								$reg_paid = $reg_paid_status[$library_list_key]["paid_flag"];
								// Show this library only if not free and not  paid up.	
								if (($products_detail_val["cost"] == $t1_costitem) && ($reg_paid == 0)) { ?>
									<div class="col-md-4">
										<!-- <a class="various fancybox.iframe" href="http://globalclassroomportal.com/educationlibrary/library_template.php?PassedEducationLibrariesKEY=<?php echo $products_detail_val["id"]; ?>"> -->
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseOneCS_<?php echo $products_detail_val["institution_short_name"]."_".$products_detail_val["id"]; ?>" aria-expanded="false" class="collapsed overview-title">
											<?php
											$image_url = "";
											//if(!empty($products_detail_val["icon"]) && @getimagesize($images_base_url . $products_detail_val["icon"])) {
											if(!empty($products_detail_val["icon"])) {
												$image_url = $images_base_url . $products_detail_val["icon"];
											?>
											<img src="<?php print $image_url; ?>" alt="<?php echo $products_detail_val["full_name"]; ?>" height="30" width="30">
											<?php } ?>
											&nbsp;&nbsp;<?php echo $products_detail_val["full_name"]; ?>
										</a>: 
										<?php echo isset($lib_ctlg_crse_count[$products_detail_val["short_name"]]) ? $lib_ctlg_crse_count[$products_detail_val["short_name"]] : 0; ?> courses
									</div>
									<?php
									if ($loop_i%3 == 0) { ?>
										</div><div class="row">
									<?php }
									$loop_i++;								
								}
							}
						}
						?>
					</div>
				<?php } ?>
			<?php } ?>
		</div>
<!-- /blockcheck 2 -->		

<?php
if ($measure_time == 1) {
  $time_end = microtime_float();
  $elapsed_time = $time_end - $time_start;
  echo "Step 2: elapsed time = ".$elapsed_time. "seconds";
  $time_start = microtime_float();
}
?>
		
<?php
//echo "</br>Before Details: ".date("Y-m-d H:i:s")."</br>";
?>		
	<p>&nbsp;</p>
	<div>
		<div class="content_spacer_20px"><h2>Details</h2></div>
	<?php
	foreach($products_details as $products_detail_key=>$products_detail_val)
	{
		if(isset($lib_ctlg_crse_count[$products_detail_val["short_name"]]) && $lib_ctlg_crse_count[$products_detail_val["short_name"]] > 0) {
	?>	
		<div class="panel panel-info">
			<div class="panel-heading">
				<a name="<?php echo $products_detail_val["short_name"]; ?>"></a>
				<div class="row">
					<div class="col-md-6">
						<p>
							<a class="" href="#collapseOneCS_<?php echo $products_detail_val["institution_short_name"]."_".$products_detail_val["id"]; ?>">
								<?php
								$image_url = "";
								//if(!empty($products_detail_val["icon"]) && @getimagesize($images_base_url . $products_detail_val["icon"])) {
								if(!empty($products_detail_val["icon"])) {
									$image_url = $images_base_url . $products_detail_val["icon"];
								?>
								<img src="<?php print $image_url; ?>" alt="<?php echo $products_detail_val["full_name"]; ?>">
								<?php } ?>
							</a> 
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseOneCS_<?php echo $products_detail_val["institution_short_name"]."_".$products_detail_val["id"]; ?>" >
								<span style="font-size: 16px; font-weight: bold; color:"><?php echo $products_detail_val["full_name"]; ?></span>
							</a> : <?php 
								if ($products_detail_val["cost"] == 0) {
									echo "Free!";
								} else {
									echo "$ " . $products_detail_val["cost"] . " per month"; 
								}
								?>
							</p>
					</div>
					<?php
					$button_flag = 0;
					if(isset($reg_paid_status[$products_detail_key])) {
						if($reg_paid_status[$products_detail_key]["paid_flag"] == 1) {
							$button_flag = 0;
						} else {
							if($products_detail_val["cost"] > 0) {
								$button_flag = 1;
							} else {
								$button_flag = 0;
							}
						}
					} else {
						if($products_detail_val["cost"] > 0) {
							$button_flag = 1;
						} else {
							$button_flag = 0;
						}
					}
					//if($button_flag > 0) {
					?>
					<div class="col-md-3 col-md-offset-3" style="padding-top:20px;">
						<a class="btn btn-info view_details view" data-toggle="collapse" data-parent="#accordion" href="#collapseOneCS_<?php echo $products_detail_val["institution_short_name"]."_".$products_detail_val["id"]; ?>" >
						<strong>
						View Details
						</strong>
						</a>
						<?php if($button_flag == 1) { ?>
							<a class="btn btn-info" href="https://<?php echo $CFG->current_app->getShortName(); ?>.globalclassroom.us/purchase/subscriptionPurchase?institution=<?php echo $products_list_institution[$products_detail_key]; ?>&type=1&product=<?php echo $products_detail_key; ?>">
							<strong>
							Subscribe
							</strong>
							</a>
						<?php } ?>						
						<?php if ($button_flag == 0) { ?>
						<?php
								$image_url = "";
								//if(@getimagesize($images_base_url . "checkmark.png")) {
										$image_url = $images_subfolder . "checkmark.png" ;
									?>
									<img src="<?php print $image_url; ?>" height="80" width="80" style="margin-top:-10px;margin-left:5px;">
								<?php //} ?>
						<?php } ?>						
					</div>
					<?php //} ?>
				</div>
			</div>
			<div id="collapseOneCS_<?php echo $products_detail_val["institution_short_name"]."_".$products_detail_val["id"]; ?>" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
				<div class="panel-body">
					<!--<h4><?php echo $products_detail_val["full_name"]; ?></h4>-->
					<div>
						<p>
						<?php echo $products_detail_val["description"]; ?>
						</p>
					</div>
					<!--
					<div class="content_spacer_20px">
						<a class="various fancybox.iframe" href="http://globalclassroomportal.com/educationlibrary/library_template.php?PassedEducationLibrariesKEY=<?php echo $products_detail_val["id"]; ?>"><span class="btn btn-info">View courses</span>
						</a>
					</div>
					-->
					<h4>Number of online courses: <?php echo isset($lib_ctlg_crse_count[$products_detail_val["short_name"]]) ? $lib_ctlg_crse_count[$products_detail_val["short_name"]] : 0; ?> </h4>
					<h4>Course Catalog(s):</h4> 
					<?php
					$ctlg_courses_list = array();
					foreach($lib_ctlg_crse_lists[$products_detail_val["short_name"]] as $ctlg_crse_list_key=>$ctlg_crse_list_val) {
					if ((stripos(strtolower($ctlg_crse_list_val), "(*)") === false) && (stripos(strtolower($ctlg_crse_list_val), "($)") === false)) { 
					  $catalog_key_courses_count = isset($catalog_courses_count[$ctlg_crse_list_key]) ? (int)$catalog_courses_count[$ctlg_crse_list_key] : 0;
						if(isset($catalog_courses_count[$ctlg_crse_list_key])) {
/* 							$params = array();
							$params["mode"] = "Eschool";
							$params["mode_id"] = $ctlg_crse_list_key;
							$CFG->current_app->requireMahara();
							$courses_list = new GcrCourseList($params, $CFG->current_app);
							$ctlg_courses_list = $courses_list->getCourseList(); */
							//$ctlg_courses_list = array();
						//}
					?>
					<p>
					<div class="ajax_link_div">
					<a data-toggle="collapse" data-parent="#accordion" id="a_cert_collapseCourse_<?php echo $products_detail_val["institution_short_name"]."_".$products_detail_val["id"] . "_" . $ctlg_crse_list_key; ?>" href="#cert_collapseCourse_<?php echo $products_detail_val["institution_short_name"]."_".$products_detail_val["id"] . "_" . $ctlg_crse_list_key; ?>" class="catalog-accordion"><?php echo $ctlg_crse_list_val; ?>&nbsp;<i class="fa fa-folder-open-o"></i></a>
					<input type="hidden" id="<?php echo $ctlg_crse_list_key; ?>_paid_flag" value="<?php echo $button_flag; ?>" class="button_flag" />
					</div>
					</p>
					
					<div id="cert_collapseCourse_<?php echo $products_detail_val["institution_short_name"]."_".$products_detail_val["id"] . "_" . $ctlg_crse_list_key; ?>" class="panel-collapse collapse">
						<div class="courses_ajax_content"></div>
						<div class="ajax_loading_div">
						<span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span>
						Loading...
						</div>	
					</div>
<script>
jQuery(document).ready( function () {				
/* 	$('#cert_collapseCourse_<?php echo $products_detail_val["institution_short_name"]."_".$products_detail_val["id"] . "_" . $ctlg_crse_list_key; ?>').on('show.bs.collapse', function () {
	  // do something…
	  alert("show accordion ajax");
	}); */
	//jQuery(".catalog-accordion").click(function(){
	//jQuery(document).on('click', '.catalog-accordion', function() {
	jQuery(document).on('click', '#a_cert_collapseCourse_<?php echo $products_detail_val["institution_short_name"]."_".$products_detail_val["id"] . "_" . $ctlg_crse_list_key; ?>', function() {
		//apply_overlay();
		var id_obj = $(this).attr("id");
		var id_str = id_obj.replace("a_cert_collapseCourse_", "");
		var div_id_obj = id_obj.replace("a_", "");
		var id_arr = id_str.split("_");
		var catalog_key = id_arr[id_arr.length - 1];
		var product_id = id_arr[id_arr.length - 2];
		var institution = id_arr[id_arr.length - 3];
		//console.log(id_arr);
		//var paid_flag = $("#"+catalog_key+"_paid_flag").val();
		var paid_flag = $(this).parents("div.ajax_link_div").find(".button_flag").val();
		
		//console.log(paid_flag);
		//if(!$("#"+div_id_obj).hasClass("in")) {
		$("#"+div_id_obj).find("div.courses_ajax_content").html("");
		$("#"+div_id_obj).find("div.ajax_loading_div").show();
		if(!$("#"+div_id_obj).prop("aria-expanded") || $("#"+div_id_obj).prop("aria-expanded") == false) {
			$.ajax({
				url: 'https://<?php echo $CFG->current_app->getShortName(); ?>.globalclassroom.us/course/subscriptionsCourses/?catalog='+catalog_key+"&paid_flag="+paid_flag+"&institution="+institution+"&pid="+product_id,
				success: function(res){
					$("#"+div_id_obj).find("div.courses_ajax_content").html(res);
					
					//$('#sub_courses_list_<?php echo $products_detail_val['institution_short_name']."_".$products_detail_val['id'] . "_" ; ?>'+catalog_key).dataTable().fnDestroy();
					
	/* 				$("#"+div_id_obj).find("div.courses_ajax_content").find('#sub_courses_list_<?php echo $products_detail_val['institution_short_name']."_".$products_detail_val['id'] . "_" ; ?>'+catalog_key).dataTable({
					//$('.sub_courses_list_datatable').dataTable( {
						"paging": true,
						"ordering": false,
						"info": false
					}); */
					$("#"+div_id_obj).find("div.ajax_loading_div").hide();
				}
			});
		}
		//hide_overlay();
 		//console.log("show accordion ajax");
		//$(this).collapse('toggle');
	});
});
</script>			
					<?php
					}
					}
					}
					?>
					
					<div></div>
					
<?php
if ($measure_time == 1) {
  $time_end = microtime_float();
  $elapsed_time = $time_end - $time_start;
  echo "Step 3: elapsed time = ".$elapsed_time. "seconds";
  $time_start = microtime_float();
}
?>					
					
				</div>
			</div>
		</div>
	<?php
		}
	}	
	?>	
	</div>
</div>
</div>
<!-- #content -->

<?php
if ($measure_time == 1) {
  $time_end = microtime_float();
  $elapsed_time = $time_end - $time_start;
  echo "Step 3: elapsed time = ".$elapsed_time. "seconds";
  $time_start = microtime_float();
}
?>

</section>
</div>
<script type="text/javascript">
//$gc_course_viewer.addNewCourseListItemsEventListeners(); 
/* jQuery("#course_detail_goto_button").click(function() 
{
	var html = '<br /><br /><h3 style="margin:10px">Loading course...</h3>';
	jQuery.colorbox({html: html, fixed: true});
	document.location.href = '/course/view.php?id=' + gc_course_detail.selected_course_id + '&transfer=' + gc_current_app_id;
}); */

// <![CDATA[
	$(window).load(function () {
		$("#page_loading_div").fadeOut("slow");
		$("#page_content_load").show();
		var page_url = window.location.href;
		page_url = page_url.split("#");
		$(".overview-title").each(function(){
			if($(this).attr("href") == "#collapseOneCS_"+page_url[1]) {
				//alert("#collapseOneCS_"+page_url[1]);
				//$(this).click();
				//$("a[href='#collapseOneCS_"+page_url[1]+"']").click();
				$("div#collapseOneCS_"+page_url[1]).addClass('in');
				$("div#collapseOneCS_"+page_url[1]).attr("aria-expanded", true);
				$("div#collapseOneCS_"+page_url[1]).css("height", "auto");
				$("html, body").animate({ scrollTop: ($("div#collapseOneCS_"+page_url[1]).offset().top - 150) }, 500);		
			}
		});		
	});
// ]]>

jQuery(document).ready( function () {				
	jQuery(document).on('click', '.overview-title', function() {
		var curr_href = $(this).attr("href");
		//alert(curr_href);
		curr_href = curr_href.replace("#", "");
		$("html, body").animate({ scrollTop: ($("div#"+curr_href).offset().top - 150) }, 500);		
	});

	
/*  	jQuery(document).on('click', '.view_details', function() {
		if($(this).hasClass("in")) {
			//$(this).removeClass("view");
			$(this).find("strong").html("Hide Details");
		} else {
			//$(this).addClass("view");
			$(this).find("strong").html("View Details");			
		}
	}); */
});

</script>

<div id='overlay' class="preload-overlay" style="display: none;">
  <div class="preloader"><span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span>&nbsp;&nbsp;Loading... </div>
</div>


<style type="text/css">
#toTop {
 display: block;
 position: fixed;
 top: 90%;
 right: -25px;
 padding: 10px;
 border: 1px solid #c1c1c1;
 background: white;
  -webkit-transform: rotate(90deg);
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -o-transform: rotate(90deg);
  transform: rotate(90deg);
  filter: none; /*Mandatory for IE9 to show the vertical text correctly*/ 
}
</style>	
<a id="toTop" href="#"><< Go to Top</a>
<script>
$(document).ready(function() {
	$("#toTop").css("display", "none");
	$(window).scroll(function(){
		if($(window).scrollTop() > 0){
			$("#toTop").fadeIn("slow");
		} else {
			$("#toTop").fadeOut("slow");
		}
	});
	$("#toTop").click(function(){
		event.preventDefault();
	$("html, body").animate({
		scrollTop:0
	},"slow");
	});
});
</script>