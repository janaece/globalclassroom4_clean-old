{$app = gcr::getApp()}
{$wants_url = $app->getRequestUri()}

{include file="header.tpl"}
{literal}
    <style type="text/css">
        #main-column-container h1 {display:none}
        input#login_login_username, input#login_login_password {width:180px}
        div#welcometoyour {font-size:270%;margin-left:-10px}
        div.indented-text {margin-left:30px}
    </style>
{/literal}
<table width="100%">
    <tr>
        <td>
            <div id="loginform_container">
                <noscript><p>{str tag="javascriptnotenabled"}</p></noscript>
                {$login_form|safe}
                <br />Not a Member? Please <a href="javascript:document.register_form.submit()">Register</a>.
                <form name="register_form" action="{$app->getAppUrl()}register.php" method="POST">
                    <input type="hidden" id="gcr_wants_url" name="gcr_wants_url" value="{$wants_url}" />
                    <input type="hidden" id="gcr_wants_url_type" name="gcr_wants_url_type" value="registration" />
                </form>
            </div>
        </td>
        <td>
            <div id="registerinfo_container">
                <div id="welcometoyour">Welcome to your</div>
                <br />
                SOCIAL NETWORK FOR EDUCATION
                <br />
                <br />
                <b>Don't have an account?</b>
                <br />
                <a href="javascript:document.register_form.submit()">Join us</a> to:
                <br /><br />
                <div class="indented-text">
                    <ul style="list-style-image:url('{$app->getUrl()}/images/icons/checkbox-icon.jpeg');">
                        <li>Take a course online</li>
                        <li>Access free resources</li>
                        <li>Communicate with friends & colleagues</li>
                    </ul>
                    <a href="javascript:document.register_form.submit()"><img src="{$app->getUrl()}/images/register-button.png" /></a>
                </div>
            </div>
        </td>
    </tr>
</table>
<br />
<br />
{include file="footer.tpl"}
