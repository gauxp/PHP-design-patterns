<?php

namespace PHP-design-patterns\Create\AbstractFactory\Tests;

use PHP-design-patterns\Create\AbstractFactory\AbstractFactory;
use PHP-design-patterns\Create\AbstractFactory\HtmlFactory;
use PHP-design-patterns\Create\AbstractFactory\JsonFactory;

/**
 * AbstractFactoryTest 用于测试具体的工厂
 */
class AbstractFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function getFactories()
    {
        return array(
            array(new JsonFactory()),
            array(new HtmlFactory())
        );
    }

    /**
     * 这里是工厂的客户端，我们无需关心传递过来的是什么工厂类，
     * 只需以我们想要的方式渲染任意想要的组件即可。
     *
     * @dataProvider getFactories
     */
    public function testComponentCreation(AbstractFactory $factory)
    {
        $article = array(
            $factory->createText('Laravel学院'),
            $factory->createPicture('/image.jpg', 'laravel-academy'),
            $factory->createText('LaravelAcademy.org')
        );

        $this->assertContainsOnly('PHP-design-patterns\Create\AbstractFactory\MediaInterface', $article);
    }
}