<?php /* <h1 style="color:red;">This page is in-progress</h1> */ ?>
<?php
global $CFG;
$current_user = $CFG->current_app->getCurrentUser();
$enrol_count = count($current_user->getEnrolments());
$course_creator = $CFG->current_app->hasPrivilege('EclassroomUser');

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

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.6/css/jquery.dataTables.css" />
<script src="https://cdn.datatables.net/1.10.6/js/jquery.dataTables.min.js"></script>
<style>
/*.dataTables_wrapper .dataTables_filter { float: left; text-align: right; margin-bottom: 10px; margin-top: 10px; } */
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
<?php
$ind_ctlg_crse_lists = array();
$ind_ctlg_crse_count = array();
$ind_all_catalogs_list = array();
$ind_reg_paid_status = array();
$int_all_catalogs_count = 0;

foreach($ind_products_list as $product_list_key=>$product_list_val)
{
	$network_id_val = $ind_products_details[$product_list_key]["network_id"];	
	$institution_name = $products_list_institution[$product_list_key];
	//$mhr_institution_obj = $CFG->current_app->selectFromMhrTable('institution', 'name', $institution_name, true);
	//if ($mhr_institution_obj) {
/*
	$mhr_institution = new GcrMhrInstitution($mhr_institution_obj, $CFG->current_app);
		$potential_eschools = array();
		$current_eschools = array();
		$eschools = $mhr_institution->getEschools();
		if ($eschools) {
			foreach ($eschools as $eschool) {
				$current_eschools[$eschool->getShortName()] = $eschool->getFullName();
			}
		}
		$eschools = $CFG->current_app->getMnetEschools();
		if ($eschools) {
			foreach ($eschools as $eschool) {
				if (!array_key_exists($eschool->getShortName(), $current_eschools)) {
					$potential_eschools[$eschool->getShortName()] = $eschool->getFullName();
				}
			}
		}
		asort($potential_eschools);
		asort($current_eschools);
*/
		$mhr_usr_institution = $current_user->checkMhrUsrInstitutionRecord($institution_name);
		if($mhr_usr_institution) {
			$ind_reg_paid_status[$library_list_key]["paid_flag"] = 1; // correct 1;
		} else {
			$ind_reg_paid_status[$library_list_key]["paid_flag"] = 0; // correct 0;
		}
		$ind_ctlg_crse_count[$product_list_key] = 0;
		$eschool_short_name = $ind_products_details[$product_list_key]["catalog_short_name"];
		$eschool_val = $ind_products_details[$product_list_key]["catalog_short_name"];
		foreach($catalog_courses_count as $catalog_courses_count_key=>$catalog_courses_count_val) {
			if($catalog_courses_count_key == $eschool_short_name ) {
				//if ($catalog_courses_count_val > 0) {
					$ind_ctlg_crse_count[$product_list_key] = $catalog_courses_count_val;
					$int_all_catalogs_count = $int_all_catalogs_count + $catalog_courses_count_val;
					$ind_ctlg_crse_lists[$product_list_key] = $eschool_val;
					$ind_all_catalogs_list[] = $eschool_val;
				//}
			}
		}
/* 	} else {
		$ind_ctlg_crse_count[$product_list_key] = 0;
	} */
	
}

/*
echo "<br> <b>============================================ind_products_details[ind_ctlg_crse_count]======</b><br>";
print_r($ind_ctlg_crse_count);
*/

?>

<section id="content">
<div id="gc_course_list">

<div class="content_spacer_20px"><h1>Single Courses</h1></div>
<div>
<?php if ($network_id_val == 5 ) { ?>
<p>Choose from among courses especially designed and/or chosen for you by your organization.</p>	
<?php  } else { ?>
<p>Select courses are available for members to purchase. There's no monthly subscription fee required and 
members have unlimited access to the course for three months. All courses completed recognize the member 
with a Certificate or Badge of Participation that can be shared with your colleagues and/or employer</p>
<?php } ?>
 
</div>
<div>
<div class="content_spacer_20px"><h1>Overview</h1></div>
<div class="row">
<?php
$loop_i = 1;
foreach($ind_products_details as $ind_products_detail_key=>$ind_products_detail_val)
{
	if(isset($ind_ctlg_crse_count[$ind_products_detail_val["short_name"]]) && $ind_ctlg_crse_count[$ind_products_detail_val["short_name"]] > 0) {
	?>
		<div class="col-md-4">
			<a data-toggle="collapse" data-parent="#accordion1" href="#collapseOneCS<?php echo $ind_products_detail_val["id"]; ?>" class="overview-title">
				<img src="<?php print $images_base_url . $ind_products_detail_val["icon"]; ?>" alt="<?php echo $ind_products_detail_val["full_name"]; ?>" height="30" width="30">&nbsp;&nbsp;<strong><?php echo $ind_products_detail_val["full_name"]; ?></strong>
			</a>: 
			&nbsp;-&nbsp;
			<?php
			if (isset($ind_ctlg_crse_count[$ind_products_detail_val["short_name"]])) {
				if ($ind_ctlg_crse_count[$ind_products_detail_val["short_name"]] == 1) { 					
					echo $ind_ctlg_crse_count[$ind_products_detail_val["short_name"]]." course"; 
				}
				if ($ind_ctlg_crse_count[$ind_products_detail_val["short_name"]] > 1) { 					
					echo $ind_ctlg_crse_count[$ind_products_detail_val["short_name"]]." courses"; 
				}					
			}
			?>			
		</div>
	<?php
	if($loop_i%3 == 0) {
		?></div><div class="row"><?php
	}
	$loop_i++;
	}
}
?>
</div>
<p>&nbsp;</p>

<div class="content_spacer_20px"><h2>Details</h2></div>
<div class="panel-group" id="accordion1">
<?php
foreach($ind_products_details as $products_detail_key=>$products_detail_val) {
	if(isset($ind_ctlg_crse_count[$products_detail_val["short_name"]]) && $ind_ctlg_crse_count[$products_detail_val["short_name"]] > 0) {
	?>	
		<div class="panel panel-success">
			<div class="panel-heading">
			<a name="ind_<?php echo $products_detail_val["short_name"]; ?>"></a>
				<div class="row">
					<div class="col-md-6">
					<p>
					<a class="" href="#<?php echo $products_detail_val["short_name"] ?>">
					<img src="<?php print $images_base_url . $products_detail_val["icon"]; ?>" alt="<?php echo $products_detail_val["full_name"]; ?>" /></a>
					<a class="view_details" data-toggle="collapse" data-parent="#accordion1" href="#collapseOneCS<?php echo $products_detail_val["id"]; ?>" >
					<span style="font-size: 16px; font-weight: bold; color:"><?php echo $products_detail_val["full_name"]; ?> </span>
					</a><!-- : <?php echo $products_detail_val["pricing_html"]; ?>--> </p>
					</div>
					<div class="col-md-3 col-md-offset-3" style="padding-top:20px;">
						<a class="btn btn-info view_details" data-toggle="collapse" data-parent="#accordion2" href="#collapseOneCS<?php echo $products_detail_val["id"]; ?>">
						<strong id="text_collapseOneCS<?php echo $products_detail_val["id"]; ?>" class="view text-view">
						View Details
						</strong>
						</a>
					</div>					
				</div>
			</div>
	
	<div id="collapseOneCS<?php echo $products_detail_val["id"]; ?>" class="panel-collapse collapse" style="height: 0px;">
		<div class="panel-body">
			<!--<h4><?php echo $products_detail_val["full_name"]; ?></h4>-->
			<div>
				<p><?php echo $products_detail_val["description"]; ?></p>
			</div>
			<div>
			<p><strong>Number of online courses:</strong> <?php echo isset($ind_ctlg_crse_count[$products_detail_val["short_name"]]) ? $ind_ctlg_crse_count[$products_detail_val["short_name"]] : 0; ?> </p>
			</div>
			<?php
			$ctlg_courses_list = array();
			//foreach($ind_ctlg_crse_lists[$products_detail_val["short_name"]] as $ctlg_crse_list_key=>$ctlg_crse_list_val) {
			$product_list_key1 = $products_detail_val["short_name"];						
			$ctlg_crse_list_key = $ind_ctlg_crse_lists[$product_list_key1];			
			$catalog_key_courses_count = isset($catalog_courses_count[$ctlg_crse_list_key]) ? (int)$catalog_courses_count[$ctlg_crse_list_key] : 0;			
			if(isset($catalog_courses_count[$ctlg_crse_list_key])) {
				$params = array();
				$params["mode"] = "Eschool";
				$params["mode_id"] = $ctlg_crse_list_key;
				$CFG->current_app->requireMahara();
				$courses_list = new GcrCourseList($params, $CFG->current_app);
				$ctlg_courses_list = $courses_list->getCourseList();
			//}
			?>
			<!-- <h4>Courses Catalog:</h4>  -->
			<!-- <p><b><a data-toggle="collapse" data-parent="#accordion1" href="#ind_collapseCourse_<?php echo $ctlg_crse_list_key; ?>"><?php echo $ctlg_crse_list_val; ?>&nbsp;<i class="fa fa-folder-open-o"></i></a></b></p> -->	
<!-- start div table 2 from subscription here  -->

				 <!--<div id="cert_collapseCourse_<?php echo $ctlg_crse_list_key; ?>" class="panel-collapse collapse"> -->
						<table cellpadding="0" cellspacing="0" border="0" class="display" id="sub_courses_list_<?php echo $ctlg_crse_list_key; ?>" width="100%" align="left">
						<thead>
						<tr>							
							<th width="20%">Course Title</th>
							<th width="15%">Price</th>
							<th>Description</th>
							<th nowrap style="width: auto;">&nbsp;</th>							
						</tr>
						</thead>
						<tbody>
						<?php
						foreach($ctlg_courses_list as $course_list) {
							$mdl_course = $course_list->getObject();
							$course_list_item = new GcrCourseListItem($course_list);
							$eschool = $course_list->getApp();
							$id = 'gcr_course_' . $eschool->getShortName() . '_' . $mdl_course->id;
							$img_src = $course_list_item->getCourseIconUrl();
							$mdl_user = $course_list_item->getInstructor();
							$summary = $course_list_item->getSummary();
							$enrol_count = $course_list_item->getActiveUserCount();
							$shortsummary = GcrInstitutionTable::formatStringSize($summary, 250, 21);
							if ($mdl_user) {
								$teacher_text = GcrEschoolTable::getInstructorProfileHtml($mdl_user);
							} else {
								$teacher_text = 'None';
							}
							$fullname = $mdl_course->fullname;
							$cost = $course_list->getCost();
							$cost_text = '';
							//if ($cost) {
								//$cost_text = 'Price: ' . GcrPurchaseTable::gc_format_money($cost);
								$cost_text = GcrPurchaseTable::gc_format_money($cost);
							//}
							$enrollment_status = false;
							$current_user = $CFG->current_app->getCurrentUser();
							if ($current_user->getRoleManager()->hasPrivilege('Student'))
							{
								$mdl_roles = $course_list->getRoleAssignments($current_user);
								$enrollment_status = ($mdl_roles && count($mdl_roles > 0));     
							}

							?>
							<tr>
								<td width="20%"><?php print $fullname; ?></td>	
								<td width="15%"><span style="color:green;">
								<?php if ($cost == 0) { 
									echo "Free! ";
									echo $enrollment_status ? " (Enrolled)" : " "; 
								} else {
									print $cost_text; 
									echo $enrollment_status ? " (Enrolled)" : " "; 						
								}
								?>
								</span>
								</td>
								<td><?php print $shortsummary ?></td>
								<td nowrap style="width: auto;">
									<div id="gc_course_list">
									<div id="gc_course_list_settings" style="margin: 0px">
									<div id="gc_course_list_container_<?php echo $ctlg_crse_list_key; ?>" class="transitions-enabled infinite-scroll clearfix">
									<div class="gc_course_list_item col2">										
										<div id="<?php print $id ?>" class="gc_course_list_item_container">
											<div class="gc_course_list_item_header">
												 <div class="gc_course_list_item_title gc_course_list_item_container_element ">
													 <a title="<?php print $fullname; ?>" href="">
														<?php 
														if ($enrollment_status == 1) { 	
															echo "Learn&nbsp;More&nbsp;/&nbsp;Go&nbsp;To&nbsp;Course";  
														} else {
															if ($cost == 0) {
																echo "Learn&nbsp;More&nbsp;/&nbsp;Enroll"; 
															} else {
																echo "Learn&nbsp;More&nbsp;/&nbsp;Purchase"; 
															}
														}	
														?>
													</a> 
												</div>  
											</div>
											<div class="gc_course_list_item_body" style="display:none;">
												<div class="gc_course_list_item_top">
													<div class="gc_course_list_item_icon gc_course_list_item_container_element">
														<img src="<?php print $img_src ?>" />
													</div>
												</div>
												<div class="gc_course_list_item_instructor gc_course_list_item_container_element">
													<b>Instructor: <?php print $teacher_text ?></b>
												</div>
												<div class="gc_course_list_item_description gc_course_list_item_container_element">
													<?php print $shortsummary ?>
												</div>
											</div>
											<div class="gc_course_list_item_footer" style="display:none;">
												<span class="gc_course_list_item_enrol_count">
													Enrollments: <?php print $enrol_count; ?>
												</span>
												<span class="gc_course_list_item_cost">
													<?php print $cost_text; ?>
												</span>
												<span class="gc_course_list_product_id">
													<?php print $products_detail_val["id"]; ?>
												</span>												
											</div>
										</div>
									</div>			
									</div>
									<script>
									jQuery(function()
									{
									var $container = jQuery('#gc_course_list_container_<?php echo $ctlg_crse_list_key; ?>');
									});
									</script>
									</div>
									</div>	
								</td>								
							</tr>			
							<?php
						}
						?>
						</tbody>
						</table>
						<script>
						jQuery(document).ready( function () {
							$('#sub_courses_list_<?php echo $ctlg_crse_list_key; ?>').dataTable( {
								"paging": true,
								"ordering": false,
								"info": false
							} );
						});	
						</script>
					<!--</div>-->

					<!-- end div table 2 here  -->
			<?php
			} 
			//} // foreach
			
			?>
			</p>				
			<div></div>
		</div>
	</div>
</div>
<?php
	} // count = 0 check
} // foreach
?>		
</div>
</div>
</div>
<!-- #content -->    
</section>

</div>


<script>	
$gc_course_viewer.addNewCourseListItemsEventListeners(); 
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
	});
// ]]>
</script>
<script>	

</script>
<!-- Print all JavaScript code at the bottom of the body -->
<script type="text/javascript" src="/js/jquery-migrate-1.0.0.min.js"></script>
<script type="text/javascript" src="/js/jquery-ui-1.10.3.custom.min.js"></script>
<style type="text/css">@import "https://microsoft.globalclassroom.us/css/smoothness/jquery-ui-1.10.3.custom.min.css";</style>
<script type="text/javascript" src="/js/jquery.colorbox-min.js"></script>
<style type="text/css">@import "https://microsoft.globalclassroom.us/css/colorbox/colorbox.css";</style>
<script type="text/javascript" src="/js/smartupdater-3.1.00.js"></script>
<script type="text/javascript" src="/js/mediaelement-and-player.min.js"></script>
<style type="text/css">@import "https://microsoft.globalclassroom.us/css/mediaelementjs/mediaelementplayer.css";</style>
<script type="text/javascript">
	var gc_current_app_id = 'microsoft';
	function gcrGetAppUrl(app_id, is_eschool)
	{
	    var domain = (is_eschool) ? 'globalclassroom.us/stratus' : 'globalclassroom.us/portal';
	    return 'https://' + app_id + '.' + domain;
	}
	function gcrLoadMediaelementjs()
	{
	    jQuery('video,audio').each(function(i){
	        var file_url = '';
	        var sources = jQuery(this).find('source');
	        sources.each(function(j)
	        {
	            file_url = jQuery(this).attr('src');
	            file_url = file_url.replace(/\+/g, '%20'); // + must be changed to %20 to pass security test in mediaelementjs
	            jQuery(this).attr('src', file_url);
	        });
	        var width = jQuery(this).attr('width');
	        var height = jQuery(this).attr('height');
	        if (width == undefined)
	        {
	            width = '350';
	        }
	        if (height == undefined)
	        {
	            height = '250';
	        }
	        file_url = file_url.replace(/&/g, '%26'); // & must be url encoded for flashvars
	        jQuery(this).append('<object width="' + width + '" height="' + height + '" type="application/x-shockwave-flash" data="https://' 
	            + document.domain + '/js/mediaelementjs/flashmediaelement.swf"><param name="allowFullScreen" value="true" />'
	            + '<param name="movie" value="https://' + document.domain + '/js/mediaelementjs/flashmediaelement.swf" />'
	            + '<param name="flashvars" value="controls=true&file=' + file_url + '" /></object>');
	    }); 
	    
	    // Load all mediaelementjs videos
	    jQuery('video,audio').mediaelementplayer({

	                            pluginPath: '/js/mediaelementjs/',
	            plugins: ['flash','silverlight'],
	            // name of flash file
	            flashName: 'flashmediaelement.swf',
	            // name of silverlight file
	            silverlightName: 'silverlightmediaelement.xap'        
	        });
	}
	jQuery('.gc-collapsable-header').click(function ()
	{
	    jQuery(this).next().toggle("slow");
	    return false;
	});
	jQuery(".gc_buttonset").buttonset();
	gcrLoadMediaelementjs();
	
	// Inject any javascript code to overwrite default moodle/mahara application content
	jQuery('#accountprefs_username, #edituser_site_username').attr('disabled','disabled');jQuery('.block_settings .block_tree_box .type_course > ul').append('<li class="type_setting collapsed item_with_icon"><p class="tree_item leaf"><a href="https://microsoft.globalclassroom.us/institution/viewUserStorage" target="_blank" title="Cloud Storage"><img class="smallicon navicon" src="https://microsoft.globalclassroom.us/images/icons/cloudstorage.png" title="" alt="">Cloud Storage</a></p></li>');
</script>

<div id="gc_smart_updater"></div>
<script type="text/javascript">
	jQuery(document).ready( function ()
	{
	    jQuery('body').css('background-color', '#386da3');
	    if('fabric-trans_bg.png' != 'none')
	    {
	        jQuery('body').css('background-image', 'url(https://microsoft.globalclassroom.us/images/fabric-trans_bg.png)');
	    }
	    //jQuery('#site-logo img').hide();
	    //jQuery('#site-logo img').delay('1500').fadeIn('slow');
	});
	jQuery.getScript("/js/eschool/rightnav.js");
</script>
<script type="text/javascript" language="javascript">
	// var hs_portalid=108225;
	// var hs_salog_version = "2.00";
	// var hs_ppa = "globalclassroom.app10.hubspot.com";
	// document.write(unescape("%3Cscript src='" + document.location.protocol + "//" + hs_ppa + "/salog.js.aspx' type='text/javascript'%3E%3C/script%3E"));
</script>
<script>
	$(document).ready(function () {
	
	    (function ($) {
	
	        $('#filter').keyup(function () {
	
	            var rex = new RegExp($(this).val(), 'i');
	            $('.searchable tr').hide();
	            $('.searchable tr').filter(function () {
	                return rex.test($(this).text());
	            }).show();
	
	        })
	
	    }(jQuery));
	
	});
	
jQuery(document).ready( function () {				
	jQuery(document).on('click', '.overview-title', function() {
		var curr_href = $(this).attr("href");
		//alert(curr_href);
		curr_href = curr_href.replace("#", "");
/* 		jQuery(".text-view").each(function(){
			if(!$(this).hasClass("view")) {
				$(this).addClass("view");
				$(this).html("View Details");
				//$(this).parents("a").toggleClass('view_details');
			}
		});		
		if($("#text_"+curr_href).hasClass("view")) {
			$("#text_"+curr_href).removeClass("view");
			$("#text_"+curr_href).html("Hide Details");
		} else {
			$("#text_"+curr_href).addClass("view");
			$("#text_"+curr_href).html("View Details");
		} */	
		$("html, body").animate({ scrollTop: ($("div#"+curr_href).offset().top - 150) }, 500);		
	});
 	//jQuery(document).on('click', '.view_details', function() {
	/*jQuery('.view_details').click(function(){
/* 		var curr_href = $(this).attr("href");
		alert(curr_href);
		curr_href = curr_href.replace("#", "");		
		if($("div#"+curr_href).hasClass("in")) {
			alert("hide");
			//$(this).removeClass("view");
			$(this).find("strong").html("Hide Details");
		} else {
			alert("view");
			//$(this).addClass("view");
			$(this).find("strong").html("View Details 123");			
		} * /
/* 		var $this = $(this);
 		var curr_href = $(this).attr("href");
		curr_href = curr_href.replace("#", "");		
		$this.toggleClass('view_details');
		if($this.hasClass('view_details')){
			//$(this).find("strong").html("View Details");
			$("#text_"+curr_href).html("View Details");
		} else {
			//$(this).find("strong").html("Hide Details");
			$("#text_"+curr_href).html("Hide Details");
		} * /

 		var $this = $(this);
 		var curr_href = $(this).attr("href");
		curr_href = curr_href.replace("#", "");
		if($("#text_"+curr_href).hasClass("view")) {
			$("#text_"+curr_href).removeClass("view");
			$("#text_"+curr_href).html("Hide Details");
		} else {
			jQuery(".text-view").each(function(){
				if(!$(this).hasClass("view")) {
					$(this).addClass("view");
					$(this).html("View Details");
					//$(this).parents("a").toggleClass('view_details');
				}
			});
			$("#text_"+curr_href).addClass("view");
			$("#text_"+curr_href).html("View Details");
		}
	});*/
});		
	
</script>


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