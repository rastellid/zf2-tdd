<?php

namespace ApplicationTest\Controller;

use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;

class IndexControllerTest extends AbstractHttpControllerTestCase
{
    protected $traceError = true;

    public function setUp()
    {
        $this->setApplicationConfig(
            include '/Users/Daniele/ProjectTesting/TDD/TestConZF2/config/application.config.php'
        );
    }

    public function testIndexActionCanBeAccessed()
    {
        $this->dispatch('/');
        $this->assertResponseStatusCode(200);

        $this->assertModuleName('application');
        //$this->assertControllerName('application_controller_index');
        $this->assertTemplateName('application/index/index');
        $this->assertControllerClass('IndexController');
        $this->assertMatchedRouteName('home');
    }
}