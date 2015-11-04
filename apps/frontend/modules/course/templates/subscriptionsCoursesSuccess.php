<?php
//echo "</br>Course ajax View Start: ".date("Y-m-d H:i:s")."</br>";
global $CFG;
?>
<table cellpadding="0" cellspacing="0" border="0" class="display sub_courses_list_datatable" id="sub_courses_list_<?php echo $institution."_".$product_id . "_" . $ctlg_crse_list_key; ?>" width="100%" align="left">
<thead>
<tr>
	<th width="20%">Course Title</th>							
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
	$id = 'gcr_course_' . $eschool->getShortName() . '_' . $mdl_course->id . '_' . $button_flag;
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
	<?php if((stripos(strtolower($fullname), "(*)") === false) && (stripos(strtolower($fullname), "($)") === false)) { ?>
		<tr>
			<td width="20%"><?php print $fullname; ?>									
			</td>								
			<td width="55%"><?php print $shortsummary ?></td>
			<td width="25%" nowrap style="width: 30%;">
				<div id="gc_course_list">
				<div id="gc_course_list_settings" style="margin: 0px">
				<div id="gc_course_list_container_<?php echo $institution."_".$product_id . "_" . $ctlg_crse_list_key; ?>" class="transitions-enabled infinite-scroll clearfix">
				<div class="gc_course_list_item col2">										
					<div id="<?php print $id ?>" class="gc_course_list_item_container">
						<div class="gc_course_list_item_header">
							 <div class="gc_course_list_item_title gc_course_list_item_container_element ">
								 <a title="<?php print $fullname; ?>" href="javascript:;" class="crse_learn_link">
									<?php 
									if ($button_flag > 0) {	
										echo "Learn&nbsp;More";
									} else {
										if ($enrollment_status == 1) { 	
											echo "Learn&nbsp;More&nbsp;/&nbsp;Go&nbsp;To&nbsp;Course";  
										} else {
											echo "Learn&nbsp;More&nbsp;/&nbsp;Enroll"; 
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
								<?php print $product_id; ?>
							</span>
						</div>
					</div>
				</div>			
				</div>
				<script>
				jQuery(function()
				{
				var $container = jQuery('#gc_course_list_container_<?php echo $institution."_".$product_id . "_" . $ctlg_crse_list_key; ?>');
				});
				</script>
				</div>
				</div>	
			</td>								
		</tr>	
		<?php } ?>								
	<?php } ?>
</tbody>
</table>
<script>
//jQuery(document).ready( function () {
 	$('#sub_courses_list_<?php echo $institution."_".$product_id . "_" . $ctlg_crse_list_key; ?>').dataTable().fnDestroy();
	$('#sub_courses_list_<?php echo $institution."_".$product_id . "_" . $ctlg_crse_list_key; ?>').dataTable({
	//$('.sub_courses_list_datatable').dataTable( {
		"paging": true,
		"ordering": false,
		"info": false
	});
//});	
</script>
<?php
//echo "</br>Course ajax View End: ".date("Y-m-d H:i:s")."</br>";
?>
<script type="text/javascript">
var trig_on_click = 0;
//$gc_course_viewer.addNewCourseListItemsEventListeners();
jQuery(document).on('click', '.crse_learn_link', function(){
	//alert("clicked");
	$gc_course_viewer.addNewCourseListItemsEventListeners();
	if(trig_on_click == 0) {
		jQuery(this).parents('.gc_course_list_item_title').click();
		trig_on_click = 1;
	}
});
jQuery(document).on('click', '.paginate_button ', function(){
	if(!jQuery(this).hasClass("current")) trig_on_click = 0;
});
</script>