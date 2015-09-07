{$app = gcr::getApp()}
{$current_user = $app->getCurrentUser()}
{if !$current_user->isMember()}
    {if $app->getConfigVar('gc_membership_cost_month') > 0 || $app->getConfigVar('gc_membership_cost_year') > 0}
        <h3>Purchase a Membership</h3>
            <div class="sideblock-content">
                Purchase a membership on this site to waive the course fee to applicable courses:
                <br/>
                    <a href="{$app->getUrl()}/purchase/membership">
                        <strong>Purchase Membership</strong></a>
            </div>
    {/if}
{/if}