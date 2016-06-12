<?php

use Silk\Post\Model;

class ModelTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    function it_has_a_method_for_getting_the_post_type()
    {
        $this->assertSame('event', ModelTestEvent::postTypeId());
        $this->assertSame('model_test_post_type', ModelTestPostType::postTypeId());
        $this->assertSame('dinosaur', Dinosaur::postTypeId());
    }
}

/**
 * Models post with post_type 'event'
 */
class ModelTestEvent extends Model
{
    const POST_TYPE = 'event';
}

/**
 * Models post with post_type 'dinosaur'
 */
class Dinosaur extends Model {}

/**
 * Models post with post_type 'model_test_post_type'
 */
class ModelTestPostType extends Model {}