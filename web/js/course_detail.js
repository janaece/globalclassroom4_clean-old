var $gc_course_detail =
{
    course_icon_src: '',
    course_id: '',
    paid_flag: '',
    course_data : '',
    selected_course_id: '',
    eschool_id: '',
    
    setSelectedCourseId: function(id)
    {
        jQuery('#course_instance_select option[value=' + id + ']').attr('selected', 'selected');
        this.selected_course_id = id;
    },
    updateCourseDetailElements: function()
    {
        this.selected_course_id = jQuery('#course_instance_select option:selected').val();
        var instructor_html = 'None';
        if (this.course_data.course_instances[this.selected_course_id].instructor != undefined)
        {
            instructor_html = this.course_data.course_instances[this.selected_course_id].instructor.profile_html;
        }
        jQuery('#course_instance_instructor').html(instructor_html);
        jQuery('#course_instance_enrolment_count').html(this.course_data.course_instances[this.selected_course_id].enrolment_count);
        var shortname = this.course_data.course_instances[this.selected_course_id].shortname;
        shortname += (this.course_data.course_instances[this.selected_course_id].visible) ? '' : ' (archived)';
        jQuery('#course_instance_shortname').html(shortname);
        var cost_element = jQuery('#course_instance_cost');
        if (this.course_data.course_instances[this.selected_course_id].cost > 0)
        {
            cost_element.html('$' + parseFloat(this.course_data.course_instances[this.selected_course_id].cost).toFixed(2));
            cost_element.parent().parent().css('visibility', 'visible');
        }
        else
        {
            cost_element.parent().parent().css('visibility', 'hidden');
        }
        if (this.course_data.course_instances[this.selected_course_id].admin)
        {
            jQuery('.course_instance_admin_options').css('visibility', 'visible');
        }
        else
        {
            jQuery('.course_instance_admin_options').css('visibility', 'hidden');
        }
		if(this.paid_flag == 1) {
			//console.log("ok");
			jQuery('#course_detail_goto_button').remove();
		} else {
			//console.log("ok else");
			if (this.course_data.course_instances[this.selected_course_id].admin || 
				this.course_data.course_instances[this.selected_course_id].enrolment_status)
			{
				jQuery('#course_detail_goto_button').html('Go To Course');
			}
			else
			{
				jQuery('#course_detail_goto_button').html('Enroll in Course');
			}
        }
    },
    sortArrayByKeys: function (inputarray) 
    {
        var arraykeys=[];
        for(var k in inputarray) {arraykeys.push(k);}
        arraykeys.sort();
        arraykeys.reverse();
        var outputarray=[];
        for(var i=0; i<arraykeys.length; i++) 
        {
            outputarray[arraykeys[i]]=inputarray[arraykeys[i]];
        }
        return outputarray;
    },
    buildCourseSelector: function()
    {
        var ordered_course_instances = new Array();
        for (var i in this.course_data.course_instances)
        {
            var ts = this.course_data.course_instances[i].start_date;
            while (ordered_course_instances[ts] != undefined)
            {
                ts++;
            }
            ordered_course_instances[ts] = this.course_data.course_instances[i];
            ordered_course_instances[ts].id = i;   
        }
        ordered_course_instances = this.sortArrayByKeys(ordered_course_instances);
        
        var course_selector = '<select id="course_instance_select" name="course_instance_select">';
        for (var i in ordered_course_instances)
        {
            var course_instance = ordered_course_instances[i];
            var start_date = new Date(course_instance.start_date * 1000);
            course_selector += '<option value="' + course_instance.id + '"';
            course_selector += (course_instance.id == this.course_id) ? ' selected="selected">' : '>'; 
            course_selector += jQuery.datepicker.formatDate('mm-dd-yy', start_date);
            course_selector += (course_instance.visible) ? '' : ' (archived)';
            course_selector += '</option>';
        }
        course_selector += '</select>';
        return course_selector;
    },
    buildCourseDetailHtml: function()
    {
        var course_selector = this.buildCourseSelector();
        if (this.course_data.course_instances[this.course_id].instructor != undefined)
        {
            var instructor_html = this.course_data.course_instances[this.course_id].instructor.profile_html
        }
        else
        {
            var instructor_html = 'None';
        }
        var html = '';
        html += '<div id="course_detail_container">';
            html += '<span id="course_detail_title">';
                html += '<h1>' + this.course_data.course_fullname + '</h1>';
            html += '</span>';
            html += '<span id="course_detail_gotocourse">';
                html += '<button id="course_detail_goto_button">Go to Course</button>';
            html += '</span><div id="cboxClose" style="float: left;">Go Back</div>';
            html += '<div class="clearfix"></div>';
            html += '<div id="course_detail_left_column">';
                html += '<span class="gc_course_list_item_icon">';
                    html += '<img id="course_detail_icon" src="' + this.course_icon_src + '" />';
                html += '</span>';
                html += '<table>';
                html += '<tr>';
                    html += '<td><h4>Start Date:</h4></td>';
                    html += '<td>' + course_selector + '</td>';
                html += '</tr>';
                html += '<tr>';
                    html += '<td><b>Course ID:</b></td>';
                    html += '<td><span id="course_instance_shortname">' + 
                        this.course_data.course_instances[this.course_id].shortname;
                    html += (this.course_data.course_instances[this.course_id].visible) ? '' : ' (archived)'; 
                    html += '</span></td>';
                html += '</tr>';
                html += '<tr>';
                    html += '<td><b>Instructor:</b></td>';
                    html += '<td><span id="course_instance_instructor">' + 
                        instructor_html + 
                        '</span></td>';
                html += '</tr>';
                html += '<tr>';
                html += '<tr>';
                    html += '<td><b>Enrollments:</b></td>';
                    html += '<td><span id="course_instance_enrolment_count">' + 
                        this.course_data.course_instances[this.course_id].enrolment_count + 
                        '</span></td>';
                html += '</tr>';
                html += '<tr>';
                    html += '<td><b>Price:</b></td>';
                    html += '<td><span id="course_instance_cost">$' + 
                        parseFloat(this.course_data.course_instances[this.course_id].cost).toFixed(2); + 
                        '</span></td>';
                html += '</tr>';
                html += '<tr class="course_instance_admin_options">';
                    html += '<td><button id="course_instance_edit_settings_button">Settings</button></td>'; 
                    html += '<td><button id="course_instance_assign_roles_button">Assign Roles</button></td>';
                html += '</tr>';
                html += '</table>';
            html += '</div>'
            html += '<div id="course_detail_right_column_header">';
                html += '<h4>';
                    html += 'Course Summary';
                    html += '<a class="course_instance_admin_options" href="' + this.course_data.summary_edit_url + '&transfer=' + gc_current_app_id + '">';
                        html += '<img src="/images/icons/editcontact.png" title="Edit Course Summary" id="course_detail_summary_edit" />';
                    html += '</a>'
                html += '</h4>';
            html += '</div>';
            html += '<div id="course_detail_right_column">';
                html += this.course_data.summary;
            html += '</div>';
        html += '</div>';
        return html;
    },
    addCourseDetailEventListeners: function()
    {
        var gc_course_detail = this;
        jQuery("#course_instance_select").change(function() 
        {
            gc_course_detail.updateCourseDetailElements();
        });
        jQuery("#course_detail_goto_button").click(function() 
        {
            var html = '<br /><br /><h3 style="margin:10px">Loading course...</h3>';
            jQuery.colorbox({html: html, fixed: true});
            document.location.href = gcrGetAppUrl(gc_course_detail.eschool_id, true) + 
                '/course/view.php?id=' + gc_course_detail.selected_course_id + '&transfer=' + gc_current_app_id + "&product=" + gc_course_detail.course_data.product_short_name;
        });
        jQuery("#course_instance_edit_settings_button").click(function() 
        {
            document.location.href = gcrGetAppUrl(gc_course_detail.eschool_id, true) + 
                '/course/edit.php?id=' + gc_course_detail.selected_course_id + '&transfer=' + gc_current_app_id;
        });
        jQuery("#course_instance_assign_roles_button").click(function() 
        {
            document.location.href = gcrGetAppUrl(gc_current_app_id, false) + 
                '/artefact/eschooladmin/assignroles.php?courseid=' + 
                gc_course_detail.selected_course_id + '&eschoolid=' + 
                gc_course_detail.course_data.eschool_id;
        });
    },
    shrinkOversizedMedia: function()
    {
        var cbox_width = parseInt(jQuery('#cboxContent').css('width'));
        var max_width = cbox_width * .5;
        if (max_width < 100)
        {
            max_width = 100;
        }
        var cbox_height = parseInt(jQuery('#cboxContent').css('height'));
        var max_height = cbox_height * .75;
        if (max_height < 100)
        {
            max_height = 100;
        }
        jQuery('#course_detail_right_column video').each(function() 
        {  
            var width = jQuery(this).attr('width');
            var height = jQuery(this).attr('height');
            if (width > max_width)
            {
                jQuery(this).attr('width', max_width);
            }
            if (height > max_height)
            {
                jQuery(this).attr('height', max_height);
            }
        });
    }
}

