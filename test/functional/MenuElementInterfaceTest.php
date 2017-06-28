<?php

namespace RebelCode\WordPress\FuncTest\Admin\Menu;

use RebelCode\WordPress\Admin\Menu\MenuElementInterface;
use Xpmock\TestCase;

/**
 * Tests {@see RebelCode\WordPress\Admin\Menu\MenuElementInterface}.
 *
 * @since [*next-version*]
 */
class MenuElementInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'RebelCode\\WordPress\\Admin\\Menu\\MenuElementInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return MenuElementInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getId()
            ->getLabel()
            ->getCapability()
            ->getIcon()
            ->getPosition()
            ->onSelected()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(
            static::TEST_SUBJECT_CLASSNAME, $subject, 'Subject is not a valid instance.'
        );

        $this->assertInstanceOf(
            'Dhii\\Data\\IdAwareInterface', $subject, 'Subject does not extend expected ancestor.'
        );
    }
}