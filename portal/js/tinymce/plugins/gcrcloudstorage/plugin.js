/**
 * editor_plugin_src.js
 *
 * Copyright 2009, Moxiecode Systems AB
 * Released under LGPL License.
 *
 * License: http://tinymce.moxiecode.com/license
 * Contributing: http://tinymce.moxiecode.com/contributing
 */
tinymce.PluginManager.add('gcrcloudstorage', function(ed, url) {
    
    
    
        

        // Register example button
        ed.addButton('gcrcloudstorage', {
            type: 'panelbutton',
		panel: {
			onclick: function() {
                            ed.windowManager.open({
                                    file : url + '/dialog.htm',
                                    width : 300 + parseInt(ed.getLang('gcrcloudstorage.delta_width', 0)),
                                    height : 250 + parseInt(ed.getLang('gcrcloudstorage.delta_height', 0)),
                                    inline : 1
                            }, {
                                    plugin_url : url, // Plugin absolute URL
                            });
		}
            }
        });
        
        
        
	

});