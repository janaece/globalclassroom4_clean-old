{include file="header.tpl"}

{if $changepassword}
  {if $changeusername}
            <h1>{str tag="chooseusernamepassword"}</h1>
            <p>{str tag="chooseusernamepasswordinfo" arg1=$sitename}</p>
  {else}
            <h1>{str tag="changepassword"}</h1>
            <p>{str tag="changepasswordinfo"}</p>
  {/if}
            {if $loginasoverridepasswordchange}<div class="message">{$loginasoverridepasswordchange|safe}</div>{/if}
{else}
			<h1>{str tag='requiredfields' section='auth'}</h1>
{/if}

			{$form|safe}

{include file="footer.tpl"}

{literal}
    <script type="text/javascript">
        jQuery('#site-logo').hide();
    </script>
{/literal}

<script type="text/javascript">
function show_states_list(country) {
	var us_json_data = {
		"AL": "Alabama", "AK": "Alaska", "AS": "American Samoa", "AZ": "Arizona", "AR": "Arkansas", "CA": "California", "CO": "Colorado", "CT": "Connecticut", "DE": "Delaware", "DC": "District Of Columbia", "FM": "Federated States Of Micronesia", "FL": "Florida", "GA": "Georgia", 
		"GU": "Guam", "HI": "Hawaii", "ID": "Idaho", "IL": "Illinois", "IN": "Indiana", "IA": "Iowa", "KS": "Kansas", "KY": "Kentucky", "LA": "Louisiana", "ME": "Maine", "MH": "Marshall Islands",  "MD": "Maryland", "MA": "Massachusetts", "MI": "Michigan", "MN": "Minnesota", "MS": "Mississippi", "MO": "Missouri", "MT": "Montana", "NE": "Nebraska", "NV": "Nevada", "NH": "New Hampshire", "NJ": "New Jersey", "NM": "New Mexico", "NY": "New York", "NC": "North Carolina", 
		"ND": "North Dakota", "MP": "Northern Mariana Islands", "OH": "Ohio", "OK": "Oklahoma", "OR": "Oregon", "PW": "Palau", "PA": "Pennsylvania", "PR": "Puerto Rico", "RI": "Rhode Island", "SC": "South Carolina", "SD": "South Dakota", "TN": "Tennessee", "TX": "Texas", "UT": "Utah", "VT": "Vermont", "VI": "Virgin Islands", "VA": "Virginia", "WA": "Washington", "WV": "West Virginia", "WI": "Wisconsin", "WY": "Wyoming"
	};
	var ca_json_data = {
		"AB": "Alberta", "BC": "British Columbia", "MB": "Manitoba", "NB": "New Brunswick", "NL": "Newfoundland and Labrador", "NT": "Northwest Territories", "NS": "Nova Scotia", "NS": "Connecticut", "DE": "Delaware", "DC": "District Of Columbia", "FM": "Federated States Of Nunavut", "ON": "Ontario", "PE": "Prince Edward Island", 
		"QC": "Quebec", "HI": "Saskatchewan", "YT": "Yukon"	
	};
	if(country == "us") {
		//console.log(us_json_data);
		var html = "";
		jQuery("#requiredfields_state").html("");
		jQuery.each(us_json_data, function(key, val) {
			html += '<option value="'+key+'">'+val+'</option>';
		});
		jQuery("#requiredfields_state").html(html);
	} else if(country == "ca") {
		//console.log(ca_json_data);
		var html = "";
		jQuery("#requiredfields_state").html("");
		jQuery.each(ca_json_data, function(key, val) {
			html += '<option value="'+key+'">'+val+'</option>';
		});
		jQuery("#requiredfields_state").html(html);		
	}	
}
jQuery("#requiredfields_country").change(function(){
	show_states_list(jQuery(this).val());
});
jQuery( document ).ready(function() {
	show_states_list(jQuery("#requiredfields_country").val());
});	
</script>