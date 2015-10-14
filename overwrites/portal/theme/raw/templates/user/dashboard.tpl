<div id="view" class="cb">
    <div id="bottom-pane">
        <div id="column-container">
		
			<link rel="stylesheet" href="/css/course_detail.css" />
			<script src="/js/blockUI.js"></script> 

			<script type="text/javascript">
			var gc_mysubscriptions_block =
			{
				getSubscriptions: function()
				{
					var mysubscriptions_block = this;
					var container = jQuery('#subscriptionlistcontainer');
					container.css('min-height', '150px');
					container.block(
					{
						message: '<h4>Loading...</h4>',
						css: 
						{
							border: 'none', 
							padding: '15px', 
							backgroundColor: '#000', 
							'-webkit-border-radius': '10px', 
							'-moz-border-radius': '10px', 
							opacity: .5, 
							color: '#fff' 
						} 
					});
					jQuery.post("/course/getSubscriptions", function (subsc_data)
					{
						var row_toggle = 0;
						for (var i in subsc_data.subsc_list)
						{
							var html = '<li style="margin: 0 0 3px 4px; padding:3px; list-style-type:none;" class="r' + row_toggle;
							html += '" course_id="gcr_subsc_' + subsc_data.subsc_list[i].institution_short_name + '_' + subsc_data.subsc_list[i].id + '">';
								html += '<a target="_blank" href="' + subsc_data.subsc_list[i].link_href + '">';
									html += '<img style="height:15px; width:15px; margin-right:3px;" class="gc_small_course_icon" src="' + subsc_data.subsc_list[i].icon + '" />';
									html += subsc_data.subsc_list[i].full_name;
								html += '</a>';
							html += '</li>';            
							jQuery('.gc_block_mysubscriptions_list').append(html);
							row_toggle = (row_toggle == 0) ? 1 : 0;
						}
						container.unblock();
						container.css('min-height', '0px');   
					}, "json");
				}
			};

			jQuery(document).ready(function() 
			{
				gc_mysubscriptions_block.getSubscriptions();
			});
			</script> 
			
			<div class="blockinstance cb bt-mycoumysubscriptions" id="blockinstance_subsc">
				<div class="blockinstance-header">
					<h2 class="title">Course Listings <span style="font-size: 13px;">(click on individual libraries for more details)</span></h2>
					<span class="cb"></span>
				</div>
				<div class="blockinstance-content">
					<div id="subscriptionlistcontainer" style="min-height: 0px; position: static; zoom: 1;max-height:250px;overflow-y:auto;">
						<ul class="gc_block_mysubscriptions_list">
						</ul>
					</div>
				</div>
			</div>			
		
            {$viewcontent|safe}
            <div class="cb"></div>
        </div>
    </div>
</div>
