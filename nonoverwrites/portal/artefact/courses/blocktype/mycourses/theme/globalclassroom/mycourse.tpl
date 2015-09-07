{$app = gcr::getApp()}
{$shortname = $app->getShortName()}
{$eschool = Doctrine::getTable('GcrEschool')->findOneById($course->eschoolid)}
<td class='courseinfo'>
    <a href="{$eschool->getAppUrl()}/course/view.php?id={$course->id}&transfer={$shortname}">{$course->fullname}</a>
</td>