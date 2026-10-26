<?php
namespace Tests\Feature;
use Tests\TestCase;
class PagesTest extends TestCase {
    public function test_all_pages_and_navigation_work(): void {
        foreach (['/'=>'Laravel POS System','/about'=>'About Laravel POS','/customers'=>'Customer Accounts','/users'=>'User Accounts'] as $url=>$title) {
            $response=$this->get($url);
            $response->assertOk()->assertSee($title);
            foreach (['Home','About','Customer Accounts','User Accounts'] as $label) { $response->assertSee($label); }
        }
    }
    public function test_five_customers_are_rendered(): void {
        $response=$this->get('/customers')->assertOk();
        foreach (['Ana Reyes','Marco Santos','Jessa Cruz','Paolo Garcia','Mia Ramos'] as $name) { $response->assertSee($name); }
        $this->assertSame(5, substr_count($response->getContent(), '<tr><td>'));
    }
    public function test_five_users_are_rendered(): void {
        $response=$this->get('/users')->assertOk();
        foreach (['Alex Rivera','Bea Lopez','Carlo Mendoza','Dani Torres','Eli Flores'] as $name) { $response->assertSee($name); }
        $this->assertSame(5, substr_count($response->getContent(), '<tr><td>'));
    }
    public function test_unknown_page_is_not_found(): void { $this->get('/missing-page')->assertNotFound(); }
}
