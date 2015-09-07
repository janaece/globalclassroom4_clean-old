{if $data}
{foreach from=$data item=course}
    <tr class="{cycle values='r0,r1'}">
        {include file="course.tpl" course=$course page=$page}
    </tr>
{/foreach}
{else}
    {if $filter != 'all'}
        <tr><td><div class="message">You are not enrolled in any courses.  Try <a href="{$WWWROOT}artefact/courses/">searching</a> for a course.</div></td></tr>
    {else}
        <tr><td><div class="message">No courses found.  Try a different <a href="{$WWWROOT}artefact/courses/">search</a>.</div></td></tr>
    {/if}
{/if}