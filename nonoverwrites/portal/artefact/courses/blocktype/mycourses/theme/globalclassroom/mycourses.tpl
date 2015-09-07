{$app = gcr::getApp()}
{$teacher = $app->hasPrivilege('EclassroomUser')}
{literal}
    <link rel="stylesheet" href="/css/course_detail.css" />
    <script src="/js/blockUI.js"></script> 
    <style type="text/css">
        #course_detail_container {font-size:70%;}
        .gc_user_profile_img {width:15px;height:15px}
        #course_detail_right_column_header {margin-top:0}
        .gc_block_mycourses_list {list-style-type:none}
        .gc_block_mycourses_list li {margin:0;padding:3px}
        #courselistcontainer {max-height:250px;overflow-y:auto}
        #gc_block_mycourses_get_more {font-weight:bold;display:none}
        .gc_small_course_icon {height:15px;width:15px;margin-right:3px}
        #gc_block_mycourses_get_more_container {margin-top:5px}
    </style>
    <script type="text/javascript">
    jQuery.getScript('/js/course_detail.js');
    var gc_mycourses_block =
    {
        list_size: {/literal}{$list_size}{literal},
        start_index: 0,
        getCourses: function()
        {
            var mycourses_block = this;
            var container = jQuery('#courselistcontainer');
            container.css('min-height', '150px');
            container.block(
            {
                message: '<h4>Loading...</h4>',
                css: 
                {
                    border: 'none', 
                    padding: '15px', 
                    backgroundColor: '#000', 
                    '-webkit-border-radius': '10px', 
                    '-moz-border-radius': '10px', 
                    opacity: .5, 
                    color: '#fff' 
                } 
            }); 
            jQuery.post("/course/getCourses", {list_size: this.list_size, start_index: this.start_index, mode: 'Student'}, function (course_data)
            {
                var list_complete = (course_data.course_count < mycourses_block.list_size);
                var row_toggle = 0;
                for (var i in course_data.course_list)
                {
                    var html = '<li class="r' + row_toggle;
                    html += (course_data.course_list[i].is_representative) ? ' gc_course_list_item_title' : '';
                    html += '" course_id="gcr_course_' + course_data.course_list[i].eschool + '_' + course_data.course_list[i].id + '">';
                        html += '<a target="_blank" href="' + course_data.course_list[i].course_url + '&transfer=' + gc_current_app_id + '">';
                            html += '<img class="gc_small_course_icon" src="' + course_data.course_list[i].course_icon_url + '" />';
                            html += course_data.course_list[i].fullname;
                        html += '</a>';
                    html += '</li>';            
                    jQuery('.gc_block_mycourses_list').append(html);
                    row_toggle = (row_toggle == 0) ? 1 : 0;
                }
                {/literal}
                {if $teacher}
                {literal}
                jQuery('.gc_course_list_item_title').off('click');
                jQuery('.gc_course_list_item_title').click( function() 
                {
                    var list_item = jQuery(this);
                    mycourses_block.openCourseDetail(list_item);
                    return false;
                });
                {/literal}
                {/if}
                {literal}
                mycourses_block.start_index = course_data.end_index;
                container.unblock();
                container.css('min-height', '0px');
                if (list_complete)
                {
                    jQuery('#gc_block_mycourses_get_more').hide();
                }
                else
                {
                    jQuery('#gc_block_mycourses_get_more').show();
                }   
            }, "json");
        },
        openCourseDetail: function(list_item)
        {
            var course_item_id = list_item.attr('course_id');
            var course_icon_src = list_item.find('img').attr('src');
            course_item_id = course_item_id.split("_");
            var eschool_id = course_item_id[2];
            var course_id = course_item_id[3];
            jQuery.post("/course/getHTMLCourseSummary", {eschool_id: eschool_id, course_id: course_id}, function (course_data)
            {
                $gc_course_detail.course_id = course_id;
                $gc_course_detail.eschool_id = eschool_id;
                $gc_course_detail.course_icon_src = course_icon_src;
                $gc_course_detail.course_data = course_data;
                jQuery.colorbox({html: $gc_course_detail.buildCourseDetailHtml(),
                                fixed: true,
                                width: '80%',
                                height: '80%'});
                $gc_course_detail.setSelectedCourseId(course_id);
                $gc_course_detail.updateCourseDetailElements();
                $gc_course_detail.addCourseDetailEventListeners();
                $gc_course_detail.shrinkOversizedMedia();
                gcrLoadMediaelementjs();

            }, "json");
        }
            
    };
    jQuery(document).ready(function() 
    {
        gc_mycourses_block.getCourses();
        jQuery('#gc_block_mycourses_get_more').click(function ()
        {
            gc_mycourses_block.getCourses();
            return false;
        });
    });
    
    </script> 
{/literal}
<div id="courselistcontainer">
    <ul class="gc_block_mycourses_list"></ul>
</div>
<div id="gc_block_mycourses_get_more_container"><a href="" id="gc_block_mycourses_get_more">+ Show More</a></div>