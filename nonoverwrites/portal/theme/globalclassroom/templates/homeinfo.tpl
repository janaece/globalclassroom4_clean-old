<div id="home-info-container">
{if $USER->is_logged_in()}
  {$app = gcr::getApp();}
  <div class="home-info-inner-block">
    <div><img src="{theme_url filename='images/step1.png'}" alt="Step 1" /></div>
    <div><a href="{$WWWROOT}artefact/file/profileicons.php">Add your photo</a></div>
    <div><a href="{$url.resume}">Build your bio</a></div>
    <div><a href="{$url.profile}">Complete your profile</a></div>
  </div>
  <div class="home-info-inner-block">
    <div><img src="{theme_url filename='images/step2.png'}" alt="Step 2" /></div>
    <div><a href="{$WWWROOT}user/view.php">Customize your wall</a></div>
    <div><a href="{$url.friends}">Find friends</a></div>
    <div><a href="{$url.groups}">Join groups</a></div>
  </div>
  <div class="home-info-inner-block">
    <div><img src="{theme_url filename='images/step3.png'}" alt="Step 3" /></div>
    {if $app->hasPrivilege('EclassroomUser')}
      <div><a href="{$WWWROOT}artefact/courses/create.php">Create a course</a></div>
      <div><a href="http://globalclassroom.us/course-retreat/">Complete your training</a></div>
      <div><a href="http://globalclassroom.us/client-training-and-resources/support/Enroll-students/">Add your students</a></div>
    {else}
      <div><a href="{$WWWROOT}artefact/courses/">Find a course</a></div>
      <div><a href="{$url.files}">Add samples of your work</a></div>
      <div><a href="{$WWWROOT}view/share.php">Share resources</a></div>
    {/if}
  </div>
  <div id="hideinfo" class="nojs-hidden-block"><a title="{str tag=Hide}"><img src="{theme_url filename='images/icon_close.gif'}" alt="[x]" /></a></div>
{else}
  <div class="home-info-inner-block"><img src="{theme_url filename='images/3dperson-social_maharafrontpageblock.png'}" alt="Social" /></div>
  <div class="home-info-inner-block"><img src="{theme_url filename='images/3dperson-eclassrooms_maharafrontpageblock.png'}" alt="eClassrooms" /></div>
  <div class="home-info-inner-block"><img src="{theme_url filename='images/3dperson-courses_maharafrontpageblock.png'}" alt="Courses" /></div>
  <div class="home-info-inner-block"><img src="{theme_url filename='images/3dperson-eportfolio_maharafrontpageblock.png'}" alt="ePortfolios" /></div>
  <div class="home-info-inner-block"><img src="{theme_url filename='images/3dperson-groups_maharafrontpageblock.png'}" alt="Groups" /></div>
{/if}
</div>
