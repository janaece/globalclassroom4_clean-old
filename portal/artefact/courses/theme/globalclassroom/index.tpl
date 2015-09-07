{include file="header.tpl"}
    <p>
        <img id="search_icon" src="{theme_url filename='images/icons/person-search.png'}" alt="search"/>
        <strong>View all of your courses below.</strong> Not enrolled in a course? Browse through available courses, or check out the course catalog.
        <br/>
        <strong>To search for courses:</strong> Enter a keyword, course name, or a date and hit search.
        <br/><br/>
        For the broadest results, leave drop-downs set to
        <em>all categories, all catalogs</em>, or use the drop-downs to filter results by category and/or course.
        <br/>
        Click on the bold course name to enroll or purchase the course.  More category information may be found through the
        Course Information link.
    </p>
    {$app=gcr::getApp()}
    {$mhr_user = $app->getCurrentUser()}
    <div id="create_course_button_container" class="rbuttons">
            <input type="button" class="submit button" id="my_courses_button"
                name="submit" value="My Courses" />
        {if $mhr_user->getRoleManager()->hasPrivilege('EclassroomUser')}
            <form action="{$WWWROOT}artefact/courses/create.php" method="post">
                <input type="submit" class="submit" id="create_course_button"
                    name="submit" tabindex="1" value="Create New Course" />
            </form>
        {else}
        {$purchaseform|safe}
        {/if}
    </div>
        {$form|safe}
    <div id="courselistcontainer">
        {if $nocourses}
            <h4 id="mycourseslabel" style="display:none;">My Courses</h4>
        {else}
            <h4 id="mycourseslabel">My Courses</h4>
        {/if}
        <table id="courselist" class="fullwidth listing">
            <tbody>
{$results.tablerows|safe}
            </tbody>
        </table>
    </div>
{$results.pagination|safe}
{include file="footer.tpl"}
