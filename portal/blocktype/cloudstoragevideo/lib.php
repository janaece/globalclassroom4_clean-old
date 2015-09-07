<?php
// s3 video player block
// Created by: Ron Stewart
// 12/22/2011

defined('INTERNAL') || die();

class PluginBlocktypeCloudstoragevideo extends SystemBlocktype {

    // Default width and height for video players
    private static $default_width = 640;

    private static $default_height = 360;

    public static function get_title() {
        return get_string('title', 'blocktype.cloudstoragevideo');
    }

    public static function get_description() {
        return get_string('description', 'blocktype.cloudstoragevideo');
    }

    public static function get_categories() {
        return array('external');
    }

    public static function render_instance(BlockInstance $instance, $editing=false) 
    {
        global $CFG;
        $configdata = $instance->get('configdata');
        $result = '';
        $width  = (!empty($configdata['width'])) ? hsc($configdata['width']) : self::$default_width;
        $height = (!empty($configdata['height'])) ? hsc($configdata['height']) : self::$default_height;

        if (isset($configdata['videoid'])) 
        {
            $block = $instance->get('id');
            $configuring = $block == param_integer('blockconfig', 0);
            $result = GcrFileLib::getVideoEmbedHtml($configdata['videoid'], $width, $height);
        }
        return $result;
    }

    public static function has_instance_config() {
        return true;
    }

    public static function instance_config_form($instance) 
    {
        $user_storage = new GcrUserStorageAccessS3();
        $file_list = $user_storage->getFileList(false);
        $options = array();
        foreach ($file_list as $filename)
        {
            $options[$user_storage->getStaticUrl($filename)] = $filename;
        }
        $configdata = $instance->get('configdata');
        
        return array(
            
            'videoid' => array(
                'title' => get_string('videourl', 'blocktype.cloudstoragevideo'),
                'description' => get_string('videourldescription2','blocktype.cloudstoragevideo'),
                'type' => 'select',
                'multiple' => false,
                'options' => $options,
                'collapseifoneoption' => false,
                'type'  => 'select',
                'width' => '90%',
                'defaultvalue' => isset($configdata['videoid']) ? $configdata['videoid'] : null,
                'rules' => array(
                    'required' => true
                ),
            ),
            'width' => array(
                'type' => 'text',
                'title' => get_string('width','blocktype.cloudstoragevideo'),
                'size' => 3,
                'rules' => array(
                    'required' => true,
                    'integer'  => true,
                    'minvalue' => 100,
                    'maxvalue' => 800,
                ),
                'defaultvalue' => (!empty($configdata['width'])) ? $configdata['width'] : self::$default_width,
            ),
            'height' => array(
                'type' => 'text',
                'title' => get_string('height','blocktype.cloudstoragevideo'),
                'size' => 3,
                'rules' => array(
                    'required' => true,
                    'integer'  => true,
                    'minvalue' => 100,
                    'maxvalue' => 800,
                ),
                'defaultvalue' => (!empty($configdata['height'])) ? $configdata['height'] : self::$default_height,
            ),
        );
    }

    public static function default_copy_type() {
        return 'full';
    }

}
