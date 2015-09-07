var gcr_cloud_storage = {
    setFileTypeRadioButton: function()
    {
        var dom = tinyMCEPopup.dom; 
        list = dom.get('cloud_storage_file');
        var link_display_text = dom.get('linkDisplayText');
        if (list.options[list.selectedIndex] != undefined)
        {
            link_display_text.value = this.getFileNameFromPath(list.options[list.selectedIndex].text);
            var file_mimetype = list.options[list.selectedIndex].getAttribute('mimetype');
            var file_type = file_mimetype.substring(0, 5);
            if (file_type === 'video')
            {
                dom.get('filetypevideo').checked = true;
            }
            else if (file_type === 'audio')
            {
                dom.get('filetypeaudio').checked = true;
            }
            else if (file_type === 'image')
            {
                dom.get('filetypeimage').checked = true;
            }   
            else
            {
                dom.get('filetypelink').checked = true;
            }
        }
    },
    getServerData: function() 
    {
        var dom = tinyMCEPopup.dom; 
        list = dom.get('cloud_storage_file');
        list.onchange = function ()
        {
            gcr_cloud_storage.setFileTypeRadioButton();
        };
        
        // Mozilla/Safari
        if (window.XMLHttpRequest) {
            self.xmlHttpReq = new XMLHttpRequest();
        }
        // IE
        else if (window.ActiveXObject) {
            self.xmlHttpReq = new ActiveXObject("Microsoft.XMLHTTP");
        }
        self.xmlHttpReq.open('POST', 'https://' + document.domain + '/institution/getUserStorageFileList', true);
        self.xmlHttpReq.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        self.xmlHttpReq.onreadystatechange = function() 
        {
            if (self.xmlHttpReq.readyState == 4) 
            {
                var file_list = eval("(" + self.xmlHttpReq.responseText + ")");
                
                for (var key in file_list)
                {
                    var new_option = new Option(file_list[key]['filename'], key);
                    new_option.setAttribute('mimetype', file_list[key]['mimetype']);
                    list.options[list.options.length] = new_option;
                }
            }
            gcr_cloud_storage.setFileTypeRadioButton();
        }
        self.xmlHttpReq.send();
    },
    getHtml: function()
    {
        var html = false;
        var dom = tinyMCEPopup.dom;
        var filetype_checkbox = dom.get('filetypevideo');
        if (filetype_checkbox.checked == true)
        {
            html = this.getVideoHtml();
        }
        filetype_checkbox = dom.get('filetypeimage');
        if (filetype_checkbox.checked == true)
        {
            html = this.getImageHtml();
        }
        filetype_checkbox = dom.get('filetypeaudio');
        if (filetype_checkbox.checked == true)
        {
            html = this.getAudioHtml();
        }
        if (html == false)
        {
            html = this.getHyperlinkHtml();
        }
        return html;    
    },
    getAudioHtml: function()
    {
        var dom = tinyMCEPopup.dom; 
        list = dom.get('cloud_storage_file');
        var text = this.getLinkDisplayTextInput();
        var file_url = list.options[list.selectedIndex].value;
        var file_mimetype = list.options[list.selectedIndex].getAttribute('mimetype');
        return '<audio src="' + file_url + '" title="' + text + '" controls="controls" type="' + file_mimetype + '"></audio>';
    },
    getVideoHtml: function()
    {
        var dom = tinyMCEPopup.dom; 
        list = dom.get('cloud_storage_file');
        var text = this.getLinkDisplayTextInput();
        var file_url = list.options[list.selectedIndex].value;
        var file_mimetype = list.options[list.selectedIndex].getAttribute('mimetype');
        return '<video controls="controls" preload="none" title="' + text + '">' +
            '<source src="' + file_url + '" type="' + file_mimetype + '"></video>';
    },
    getImageHtml: function()
    {
        var dom = tinyMCEPopup.dom; 
        list = dom.get('cloud_storage_file');
        var text = this.getLinkDisplayTextInput();
        var file_url = list.options[list.selectedIndex].value;
        return '<img src="' + file_url + '" alt="' + text + '" />';
    },
    getHyperlinkHtml: function()
    {
        var dom = tinyMCEPopup.dom; 
        list = dom.get('cloud_storage_file');
        var text = this.getLinkDisplayTextInput();
        var file_url = list.options[list.selectedIndex].value;      
        return '<a href="' + file_url + '" target="_blank">' + text + '</a>';
    },
    getFileNameFromPath: function(path)
    {
        return path.replace(/^.*[\\\/]/, '');
    },
    getLinkDisplayTextInput: function()
    {
        var dom = tinyMCEPopup.dom;
        var link_display_text_input = dom.get('linkDisplayText');
        var text = link_display_text_input.value;
        if (text == '')
        {
            text = this.getFileNameFromPath(list.options[list.selectedIndex].text);
        }
        return text.replace(/[^\w\s\.]/gi, '');
    } 
};
var GcrcloudstorageDialog = {
    init : function() 
    {
        tinyMCEPopup.requireLangPack();
        gcr_cloud_storage.getServerData();
    },

    insert : function() 
    {
        // Insert the contents from the input into the document
        tinyMCEPopup.editor.execCommand('mceInsertContent', false, gcr_cloud_storage.getHtml());
        tinyMCEPopup.close();
    }
};

tinyMCEPopup.onInit.add(GcrcloudstorageDialog.init, GcrcloudstorageDialog);
