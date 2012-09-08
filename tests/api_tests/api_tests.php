<?php

class wcsUtil
{   
    public function dump($var)
    {
        echo '<pre>'.print_r($var, true).'</pre>';
    }
}

class ConfigSnapshotsAPITests extends \Enhance\TestFixture
{
    
    public function setUp()
    {
        $this->util = new starterUtil();
    }
    
    public function tearDown()
    {
        
    }
    
    public function it_lets_me_define_a_method_to_check_versions_related_to_snapshotted_data()
    {
        \Enhance\Assert::fail();
    }
    
    public function it_lets_me_tell_it_where_to_add_the_ui_for_my_snapshot()
    {
        \Enhance\Assert::fail();
    }
    
    public function it_lets_me_pass_it_snapshotted_data_for_storage()
    {
        \Enhance\Assert::fail();
    }
    
    public function it_lets_me_tell_it_how_to_restore_a_snapshot()
    {
        \Enhance\Assert::fail();
    }
}