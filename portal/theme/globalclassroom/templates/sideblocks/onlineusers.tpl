{$app = gcr::getApp()}
{$current_user = $app->getCurrentUser()}
{if $current_user && $current_user->isLoggedIn()}
    {$current_user_status = $current_user->getAvailabilityStatus()}
    {$status_name = $current_user_status->getObject()->short_name}
    {$status_list = $app->getAvailabilityStatuses(true)}
    {$friends = get_friends($current_user->getObject()->id)}
    <div class="sidebar-header">
        <p id="lastminutes">
        <a href="{$app->getAppUrl()}user/find.php"><img class="gc-mahara-sidebar-icon" style="float:right" src="{$app->getUrl()}/images/icons/add-user.png" /></a>
        </p>
        <h3><a href="{$app->getAppUrl()}user/myfriends.php">{str tag=myfriends section=mahara}</a></h3>
    </div>
    <div class="sidebar-content">
        <div style="overflow-y:auto;overflow-x:hidden;max-height:200px;">
            {$online_list = 1}
            {section name=allonlineusers start=1 loop=3 step=1}
                {if $online_list == 1}
                    <ul id="gc_online_friends_list" class="cr">
                {else}
                    <ul id="gc_offline_friends_list" class="cr">
                {/if}
                {$user_friends = $current_user->getFriends()}
                {foreach from=$user_friends item=mhr_user}
                    {$status = $mhr_user->getAvailabilityStatus()}
                    {$user = $mhr_user->getObject()}
                    {if $status->showOnline()}
                        {$show_online = 1}
                    {else}
                        {$show_online = 0}
                    {/if}
                    {if $online_list == $show_online}
                        {$message = $current_user->getMailFromUser($mhr_user, true)}
                        {$invites = $current_user->getPendingChatInvites($mhr_user)}
                        {$chats = $current_user->getChatSessionsWithUser($mhr_user)}
                        <li id="gc_friend_list_item_{$user->id}" class="gc_friend_list_item">
                            <a href="{$WWWROOT}user/view.php?id={$user->id}" title="{$status->getDisplayName()}">
                                <div class="profile-icon-container">
                                    <img src="{$mhr_user->getProfileIcon()}" height="15" width="15" alt="" />
                                </div>
                                <span class="gc_friend_fullname" style="color:{$status->getDisplayColor()};float:left">
                                    {$mhr_user->getFullNameString()}
                                </span>
                            </a>
                            <span style="float:right; margin-right:1px">
                                <a class="gc_open_chat_window" href="{$app->getUrl()}/conference/view?user_id={$user->id}" target="_blank">
                                <img class="gc_chat_status_icon" src="{$app->getUrl()}/images/icons/gc-video-chat.jpeg" style="display:none" width="17" height="12" alt="" />
                                {if $message}
                                    <a href="" class="gc_view_inbox_message" gc_status="read" title="Read New Message From {$mhr_user->getFullNameString()}" gc_inbox_message_id="{$message[0]->id}" gc_inbox_message_from_user_id="{$user->id}">
                                        <img class="gc_small_message_icon" src="{$app->getUrl()}/images/icons/email.gif" alt="">
                                    </a>
                                {else}
                                    <a href="{$WWWROOT}user/sendmessage.php?id={$user->id}&returnto=inbox" class="gc_view_inbox_message" gc_status="send" title="Send a New Message To {$mhr_user->getFullNameString()}" gc_inbox_message_from_user_id="{$user->id}">
                                        <img class="gc_small_message_icon" src="{$app->getUrl()}/images/icons/icon-mail.gif" alt="">
                                    </a>
                                {/if}

                            </span>
                        </li>
                    {/if}
                {/foreach}
                {$online_list = 0}
                </ul>
            {/section}
        </div>
        <b>My Status:</b>
        <select title="Change Your Status" style="font-size:1em;" class="gc_set_user_availability">
            {foreach from=$status_list item=status_option}
                <option value="{$status_option->short_name}" {if $status_option->short_name == $status_name}selected="selected"{/if}>
                    {ucfirst($status_option->short_name)}
                </option>
            {/foreach}
        </select>
    </div>
{/if}