<?php

class PluginSnapshot extends WPConfigSnapshotModule
{
    public function label()
    {
        return "Active Plugin";
    }
    
    public function type()
    {
        return "active_plugin";
    }
    
    public function ui()
    {
        $this->call_render_ui();
    }
    
    public function take_snapshot()
    {
        return get_option('active_plugins');
    }
    
    public function  restore_snapshot($value)
    {
        update_option('active_plugins', $value);
    }
}