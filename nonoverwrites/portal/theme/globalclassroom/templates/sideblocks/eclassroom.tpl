{$app = gcr::getApp()}
{$current_user = $app->getCurrentUser()}
{$eschools = $app->getEclassroomEschools()}
{$role_manager = $current_user->getRoleManager()}

{if $eschools}
    {if !$role_manager->hasPrivilege('EschoolStaff')}
        {if !$current_user->isEclassroomOwnerOnAllSchools()}
            <h3>eClassrooms</h3>
            <div class="sideblock-content">
                Purchase the ability to create courses on:
                <br/>
                    {foreach from=$eschools item=eschool}
                        {if !in_array($eschool->id, $owned_school_ids)}
                            <a href="{$eschool->getUrl()}/purchase/classroom?eschool={$eschool->getShortName()}">
                                <strong>{$eschool->getFullName()}</strong></a>
                            <br/>
                        {/if}
                    {/foreach}
            </div>
        {/if}
    {/if}
{else}
    {if !$role_manager->hasPrivilege('EschoolStaff')}
        {$contact = $app->getPersonObject()}
        <h3>eClassrooms</h3>
        <div class="sideblock-content">
            Request the ability to create courses.
            <br/>
            Phone: {$contact->phone1}
            <br/>
            Email: <a href="mailto:{$contact->email}">{$contact->email}</a>
        </div>
    {/if}
{/if}