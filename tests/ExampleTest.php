<?php

use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function test_home_page_is_working()
    {
        $this->visit('/')
             ->see('3DGoMart');
//
//        $host = 'http://www.flightcentre.com.au/';
//        $path = 'holidays/beach-escapes/bali';
//        $url = $host . $path;
//        $content = file_get_contents($url);
//        $this->assertContains('pane-node-field-process', $url);
//        $this->assertContains('pane-node-field-long-description', $url);
//        $this->assertContains('accommodation-heading', $url);
//        $this->assertContains('pane-node-field-planner-accommodation', $url);
//        $this->assertContains('activity-heading', $url);
//        $this->assertContains('pane-node-field-activities', $url);
//        $this->assertContains('pane-node-field-planner-flight', $url);
//        $this->assertContains('pane-fcl-static-forms-pane', $url);
//        $this->assertContains('pane-node-field-cvps', $url);
//
//        $pane_array[] = 'pane-node-field-process';
//        $pane_array[] = 'pane-node-field-long-description';
//        $pane_array[] = 'accommodation-heading';
//        $pane_array[] = 'pane-node-field-planner-accommodation';
//        $pane_array[] = 'activity-heading';
//        $pane_array[] = 'pane-node-field-activities';
//        $pane_array[] = 'pane-node-field-planner-flight';
//        $pane_array[] = 'pane-fcl-static-forms-pane';
//        $pane_array[] = 'pane-node-field-cvps';
//        $patern = '/'. implode('(.*)',$pane_array) .'/s';
//        $response = file_get_contents("http://www.flightcentre.com.au//ajax/cache/fcl_service/170851/node/modal_display");
//        $this->assertEquals('HTTP/1.0 200 OK',$http_response_header[0]);
//        $this->assertNotNull(json_decode($response));
//        $response = file_get_contents("http://www.flightcentre.com.au//ajax/cache/fcl_service_render/170851/node/modal_display");
//        $this->assertEquals('HTTP/1.0 200 OK',$http_response_header[0]);
//        $this->assertNull(json_decode($response));
    }
}
