<?php

use October\Rain\Router\Router;

class RouteTest extends TestCase
{
    public function testResolveUrl()
    {
        $params = array();
        $router = new Router();

        $rule = $router->reset()->route('testRuleId', 'blog/post');
        $result = $rule->resolveUrl('/blog/post/10', $params);
        $this->assertFalse($result);

        $rule = $router->reset()->route('testRuleId', '/blog/post/:post_id');
        $result = $rule->resolveUrl('blog/post/10', $params);
        $this->assertTrue($result);
        $this->assertEquals(1, count($params));
        $this->assertArrayHasKey('post_id', $params);
        $this->assertEquals(10, $params['post_id']);

        $rule = $router->reset()->route('testRuleId', 'blog/post/:post_id?');
        $result = $rule->resolveUrl('blog/post/', $params);
        $this->assertTrue($result);
        $this->assertEquals(1, count($params));
        $this->assertArrayHasKey('post_id', $params);

        $this->assertEquals(false, $params['post_id']);

        $rule = $router->reset()->route('testRuleId', '/blog/post/:post_id?');
        $result = $rule->resolveUrl('blog/post/my-post', $params);
        $this->assertTrue($result);
        $this->assertEquals(1, count($params));
        $this->assertArrayHasKey('post_id', $params);
        $this->assertEquals('my-post', $params['post_id']);

        $rule = $router->reset()->route('testRuleId', '/blog/post/:post_id?|^[a-z\-]+$');
        $result = $rule->resolveUrl('blog/post/my-post', $params);
        $this->assertTrue($result);
        $this->assertEquals(1, count($params));
        $this->assertArrayHasKey('post_id', $params);
        $this->assertEquals('my-post', $params['post_id']);

        $rule = $router->reset()->route('testRuleId', '/blog/post/:post_id|^[0-9]+$');
        $result = $rule->resolveUrl('blog/post/10', $params);
        $this->assertTrue($result);
        $this->assertEquals(1, count($params));
        $this->assertArrayHasKey('post_id', $params);
        $this->assertEquals(10, $params['post_id']);

        $rule = $router->reset()->route('testRuleId', '/blog/post/:post_id?|^[a-z\-]+$');
        $result = $rule->resolveUrl('blog/post/10', $params);
        $this->assertFalse($result);

        $rule = $router->reset()->route('testRuleId', '/authors/:author_id|^[a-z\-]+$/details');
        $result = $rule->resolveUrl('authors/my-author/details', $params);
        $this->assertTrue($result);
        $this->assertEquals(1, count($params));
        $this->assertArrayHasKey('author_id', $params);
        $this->assertEquals('my-author', $params['author_id']);

        $rule = $router->reset()->route('testRuleId', '/authors/:author_id|^[a-z\-]+$/details');
        $result = $rule->resolveUrl('authors/details', $params);
        $this->assertFalse($result);

        $rule = $router->reset()->route('testRuleId', '/authors/:author_id?/details');
        $result = $rule->resolveUrl('authors/details', $params);
        $this->assertFalse($result);

        $rule = $router->reset()->route('testRuleId', '/authors/:author_id?/details');
        $result = $rule->resolveUrl('authors/test/details', $params);
        $this->assertTrue($result);

        $rule = $router->reset()->route('testRuleId', '/authors/:author_id?/:details?');
        $result = $rule->resolveUrl('authors/test/details', $params);
        $this->assertTrue($result);

        $rule = $router->reset()->route('testRuleId', '/authors/:author_id?/:details?');
        $result = $rule->resolveUrl('authors/test', $params);
        $this->assertTrue($result);
        $this->assertEquals(2, count($params));

        $rule = $router->reset()->route('testRuleId', '/authors/:author_id|^[a-z\-]+$/details/:record_type?|^[0-9]+$');
        $result = $rule->resolveUrl('authors/my-author/details', $params);
        $this->assertTrue($result);
        $this->assertEquals(2, count($params));
        $this->assertArrayHasKey('author_id', $params);
        $this->assertEquals('my-author', $params['author_id']);
        $this->assertArrayHasKey('record_type', $params);
        $this->assertEquals(false, $params['record_type']);

        $rule = $router->reset()->route('testRuleId', '/authors/:author_id|^[a-z\-]+$/details/:record_type?|^[0-9]+$');
        $result = $rule->resolveUrl('authors/my-author/details/441', $params);
        $this->assertTrue($result);
        $this->assertEquals(2, count($params));
        $this->assertArrayHasKey('author_id', $params);
        $this->assertEquals('my-author', $params['author_id']);
        $this->assertArrayHasKey('record_type', $params);
        $this->assertEquals('441', $params['record_type']);

        $rule = $router->reset()->route('testRuleId', '/blog/post/:post_id|^[0-9]?$');
        $result = $rule->resolveUrl('blog/post', $params);
        $this->assertFalse($result);

        $rule = $router->reset()->route('testRuleId', '/blog/post/:post_id?my-post');
        $result = $rule->resolveUrl('blog/post/', $params);
        $this->assertTrue($result);
        $this->assertEquals(1, count($params));
        $this->assertArrayHasKey('post_id', $params);
        $this->assertEquals('my-post', $params['post_id']);

        $rule = $router->reset()->route('testRuleId', '/blog/post/:post_id?my-post|^[a-z]+$');
        $result = $rule->resolveUrl('blog/post/', $params);
        $this->assertTrue($result);
        $this->assertEquals(1, count($params));
        $this->assertArrayHasKey('post_id', $params);
        $this->assertEquals('my-post', $params['post_id']);

        $rule = $router->reset()->route('testRuleId', '/authors/:author_id?my-author-id|^[a-z\-]+$/:record_type?15|^[0-9]+$');
        $result = $rule->resolveUrl('authors', $params);
        $this->assertTrue($result);
        $this->assertEquals(2, count($params));
        $this->assertArrayHasKey('author_id', $params);
        $this->assertEquals('my-author-id', $params['author_id']);
        $this->assertArrayHasKey('record_type', $params);
        $this->assertEquals('15', $params['record_type']);
    }

    public function testMatch()
    {
        $params = array();
        $router = new Router();

        // Set up some dummy rules
        $router->route('authorDetails', '/authors/:author_id?/:details?');
        $router->route('blogPost', 'blog/post');
        $router->route('jobRequest', 'job/:type?request/:id');

        $this->assertFalse($router->match('XXXXXXXXGARBAGE'));
        $this->assertFalse($router->match('/XXXXXXXXGARBAGE'));

        $this->assertFalse($router->match('/blog/post/10'));
        $this->assertFalse($router->match('authors/test/details/more'));
        $this->assertTrue($router->match('/authors'));
        $this->assertTrue($router->match('authors/test/details'));

        $this->assertFalse($router->match('job'));
        $this->assertFalse($router->match('job/test'));
        $this->assertTrue($router->match('job/test/4'));
    }

    public function testUrl()
    {
        $params = array();
        $router = new Router();

        // Set up some dummy rules
        $router->route('authorDetails', '/authors/:author_id?/:details?');
        $router->route('blogPost', 'blog/post');
        $router->route('userProfile', 'profile/:username');
        $router->route('jobRequest', 'job/:type?request/:id');
        $router->route('productPage', '/product/:category?/:id');

        $result = $router->url('blogPost');
        $this->assertEquals('/blog/post', $result);

        $result = $router->url('authorDetails');
        $this->assertEquals('/authors', $result);

        $result = $router->url('authorDetails', array('author_id' => 20));
        $this->assertEquals('/authors/20', $result);

        $result = $router->url('authorDetails', array('details' => 'history'));
        $this->assertEquals('/authors/default/history', $result);

        $result = $router->url('userProfile', array('username' => 'shaq'));
        $this->assertEquals('/profile/shaq', $result);

        $result = $router->url('jobRequest', array('id' => '9'));
        $this->assertEquals('/job/request/9', $result);

        $result = $router->url('jobRequest');
        $this->assertEquals('/job/request/default', $result);

        $result = $router->url('productPage', array('id' => '7'));
        $this->assertEquals('/product/default/7', $result);
        
        $result = $router->url('productPage', array('id' => '7', 'category' => 'helmets'));
        $this->assertEquals('/product/helmets/7', $result);
    }
}