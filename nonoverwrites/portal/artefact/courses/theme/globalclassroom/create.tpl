{$app = gcr::getApp()}
{include file="header.tpl"}

<div id="gc_my_course_toggle" class="gc_buttonset" style="float:right;margin-top:-35px;margin-right:50px">
    <input id="gc_search_courses" type="radio" name="gc_my_course_toggle" value="search" />
    <label for="gc_search_courses">Search Courses</label>     
    <input id="gc_my_courses" type="radio" name="gc_my_course_toggle"  checked="checked" value="my" />
    <label for="gc_my_courses">My Courses</label>
    <input id="gc_create_course_button" type="radio" name="gc_my_course_toggle" checked="checked" value="create" />
    <label for="gc_create_course_button">Create New Course</label>
</div>
    {$results|safe}
    {$form|safe}
{include file="footer.tpl"}
<script type="text/javascript">
    jQuery('#gc_my_course_toggle').change(function ()
    {
        var my_course_toggle = jQuery('input:radio[name=gc_my_course_toggle]:checked').val();
        var url = '{$app->getUrl()}/course/view';
        url += (my_course_toggle == 'my') ? '?mode=Student' : '';
        document.location.href = url;
    });
</script>