jQuery.getScript('/js/course_detail.js');
var $gc_course_viewer = 
{
    start_index: 0,
    course_list_params: '',
    getCourseListUrl: function()
    {
        this.setCourseListParams();
        return '/course/getHTMLCourses?start_index=' + this.start_index + this.course_list_params;
    },
    setCourseListParams: function()
    {
        this.course_list_params = '';
        var search_string = jQuery('#gc_course_list_search_string').val();
        var visible = jQuery('input:radio[name=gc_course_visibility_selector]:checked').val();
        var my_course_toggle = jQuery('input:radio[name=gc_my_course_toggle]:checked').val()
        var catalog = jQuery('#gc_course_catalogs option:selected').val();
        var course_id = jQuery('#gc_course_id').val();
        
        if (my_course_toggle == 'my')
        {    
            this.course_list_params += '&mode=Student';
        }
        else if (catalog != '1')
        {
            if (course_id != '')
            {
                this.course_list_params += '&mode=Course&mode_id=' + catalog + '_' + course_id;
            }
            else
            {
                this.course_list_params += '&mode=Eschool&mode_id=' + catalog;
                var category = jQuery('#gc_course_categories option:selected').val();
                if (category != 'All')
                {
                    this.course_list_params += '&category_id=' + category;
                }
            }
        }
        if (visible != 'visible')
        {
             this.course_list_params += '&visible=0';
        }
        if (search_string != '')
        {
            this.course_list_params += '&search_string=' + search_string;
        }
    },
    
    addNewCourseListItemsEventListeners: function()
    {
        var course_list = this;
        jQuery('.gc_course_list_item_title, .gc_course_list_item_top').unbind('click');
        jQuery('.gc_course_list_item_title, .gc_course_list_item_top').click( function() 
        {
            var list_item = jQuery(this).parent().parent();
            course_list.openCourseDetail(list_item);
            return false;
        });
        var gc_course_element = jQuery('#gc_course_id');
        /*if (gc_course_element.val() != '')
        {
            // With a single course, open the details immediately.
            var list_item = jQuery('.gc_course_list_item_container');  
            course_list.openCourseDetail(list_item);
            gc_course_element.val('');
        }*/
        
    },
    openCourseDetail: function(list_item)
    {
        var course_item_id = list_item.attr('id');
        var course_icon_src = list_item.find('.gc_course_list_item_icon img').attr('src');
        var course_product_id = list_item.find('.gc_course_list_product_id').html();
        course_item_id = course_item_id.split("_");
        var eschool_id = course_item_id[2];
        var course_id = course_item_id[3];
        var paid_flag = course_item_id[4];
        jQuery.post("/course/getHTMLCourseSummary", {eschool_id: eschool_id, course_id: course_id, course_product_id: course_product_id}, function (course_data)
        {
            $gc_course_detail.course_id = course_id;
            $gc_course_detail.eschool_id = eschool_id;
            $gc_course_detail.course_icon_src = course_icon_src;
            $gc_course_detail.course_data = course_data;
            $gc_course_detail.paid_flag = paid_flag;
            jQuery.colorbox({html: $gc_course_detail.buildCourseDetailHtml(),
                            fixed: true,
                            closeButton: false,
							close: "Go Back",
							//close: "<button id='go_back'>Go Back</button>",
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
