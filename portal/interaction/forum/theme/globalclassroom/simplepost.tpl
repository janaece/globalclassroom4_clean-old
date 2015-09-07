{if $post->id}<a name="post{$post->id}"></a>{/if}


<table class="forumpost fullwidth">
{if $post->subject && !$nosubject}
{* GC TEMPLATE OVERWRITE 1: replacement,chnaged from:
<tr> 
        <td colspan="2" class="forumsubject"><h6>{if $post->id}<a href="#post{$post->id}">{$post->subject}</a>{else}{$post->subject}{/if}</h6></td>
</tr>   
TO: *}
<tr>    
	<td colspan="2" class="forumsubject">
            <h6 class="fl">{if $post->id}<a href="#post{$post->id}">{$post->subject}</a>{else}{$post->subject}{/if}</h6>
            <div class="postbtns">
            {if $moderator && $post->parent} <span class="btn fr"><a href="{$WWWROOT}interaction/forum/deletepost.php?id={$post->id}" class="icon btn-del"> {str tag="delete"}</a></span>{/if}
            {if $post->canedit}<span class="btn fr"><a href="{$WWWROOT}interaction/forum/editpost.php?id={$post->id}" class="icon btn-edit"> {str tag="edit"}</a></span>{/if}
            {if $moderator || ($membership && !$closed)}<span class="btn fr"><a href="{$WWWROOT}interaction/forum/editpost.php?parent={$post->id}" class="icon btn-reply">{str tag="Reply" section=interaction.forum}</a></span>{/if}
            </div>
        </td>
</tr>
{else}
<tr>
    <td colspan="2" class="forumsubject">
        <div class="postbtns">
            {if $moderator || ($membership && !$closed)}<span class="btn fr"><a href="{$WWWROOT}interaction/forum/editpost.php?parent={$post->id}" class="icon btn-reply">{str tag="Reply" section=interaction.forum}</a></span>{/if}
        </div>
    </td>
</tr>
{* END GC TEMPLATE OVERWRITE 1 *}
{/if}
<tr>
	<td class="forumpostleft">
      <div class="author">
{* GC TEMPLATE OVERWRITE 2: insert *}
        <div class="posttime">{$post->ctime}</div>
{* END TEMPLATE OVERWRITE 2 *}        
         <img src="{$WWWROOT}thumb.php?type=profileicon&amp;maxsize=40&amp;id={$post->poster}" alt="" class="center">
         <div class="poster"><a href="{$WWWROOT}user/view.php?id={$post->poster}"{if in_array($post->poster, $groupadmins)} class="groupadmin"{elseif $post->moderator} class="moderator"{/if}>{$post->poster|display_name}</a></div>
         {if $post->postcount}<div class="postcount">{$post->postcount}</div>{/if}
      </div>
    </td>
	<td class="postedits">
{* GC TEMPLATE OVERWRITE 3: deletion:           
            <div class="posttime">{$post->ctime}</div>
{* END TEMPLATE OVERWRITE 3 *}            
	  {$post->body|clean_html|safe}
{if $post->edit}
        <h5>{str tag="editstothispost" section="interaction.forum"}</h5>
        <ul>
            {foreach from=$post->edit item=edit}
            <li>
                <a href="{$WWWROOT}user/view.php?id={$edit.editor}"
                {if $edit.editor == $groupowner} class="groupowner"
                {elseif $edit.moderator} class="moderator"
                {/if}
                >
                <img src="{$WWWROOT}thumb.php?type=profileicon&amp;maxsize=20&amp;id={$edit.editor}" alt="">
                {$edit.editor|display_name}
                </a>
                {$edit.edittime}
            </li>
            {/foreach}
        </ul>
{/if}
    </td>
</tr>
</table>
