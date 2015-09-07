{$app=gcr::getApp()}
{$eschool = Doctrine::getTable('GcrEschool')->findOneById($course->eschoolid)}
{$mdl_course = $eschool->getCourse($course->id)}
{$category = $mdl_course->getMdlCategory()}
<td class='courseinfo'>
    <div class="leftdiv">
      <strong>
		<a href="{$eschool->getAppUrl()}/course/view.php?id={$course->id}&transfer={$app->getShortName()}">{$course->fullname}</a>
      </strong>
      <div class="videsc">
        {if $course->startdate >= time()}
            Start Date: {date('m-d-Y', $course->startdate)}
            <br/>
        {/if}
        {if $course->cost != 0}
            &nbsp;Cost: ${$course->cost}
            <br/>
        {/if}
        Category Information: <a href="{$eschool->getAppUrl()}/course/category.php?id={$category->id}&transfer={$app->getShortName()}">{$category->name}</a>
        <br/>
        Catalog: <a href="{$eschool->getAppUrl()}">{$eschool->getFullName()}</a>
      </div>
    </div>
    {if $course->summary}
        <div class="middlediv expandable">
            {$course->summary|safe|strip_tags}
        </div>
    {/if}
    {if $app->hasPrivilege('GCUser')}
        <div class="rightdiv">
            <ul class="actionlist">
                <li><a href="{$app->getAppUrl()}artefact/eschooladmin/assignroles.php?courseid={$course->id}&eschoolid={$course->eschoolid}">
                    Assign Roles</a></li>
                <li><a href="{$eschool->getAppUrl()}/course/edit.php?id={$course->id}&transfer={$app->getShortName()}">Edit Settings</a></li>
            </ul>
        </div>
    {else}
        <div class="rightdiv">
            {if $app->id == $eschool->organization_id}
                {$thiscourse = $eschool->getCourse($course->id)}
                {if $app->current_user->getRoleManager()->hasPrivilege('EschoolAdmin')}
                    <ul class="actionlist">
                        <li><a href="{$app->getAppUrl()}artefact/eschooladmin/assignroles.php?courseid={$course->id}&eschoolid={$course->eschoolid}">
                            Assign Roles</a></li>
                        <li><a href="{$eschool->getAppUrl()}/course/edit.php?id={$course->id}&transfer={$app->getShortName()}">
                            Edit Settings</a></li>
                    </ul>
                {elseif $thiscourse->isTeacher($app->getCurrentUser())}
                    <ul class="actionlist">
                        <li><a href="{$app->getAppUrl()}artefact/courses/invite.php?courseid={$course->id}&eschoolid={$course->eschoolid}">
                            Invite Users</a></li>
                        <li><a href="{$eschool->getAppUrl()}/course/edit.php?id={$course->id}&transfer={$app->getShortName()}">
                            Edit Settings</a></li>
                    </ul>
                {/if}
            {/if}
        </div>
    {/if}
</td>