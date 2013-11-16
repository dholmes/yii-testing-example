<?php
use AspectMock\Test as test;

class SiteControllerTest extends CTestCase {

    public function setUp() {
        // Import controller
        Yii::import('application.controllers.SiteController');

        Yii::app()->assetManager->basePath = __DIR__.'/../../../public/assets';

        //$_SERVER['SCRIPT_FILENAME'] = 'index.php';
        //$_SERVER['SCRIPT_NAME'] = '/index.php';
        //$_SERVER['REQUEST_URI'] = 'movie';
    }

    protected function tearDown() {
        test::clean(); // remove all registered test doubles
    }
    public function getNewSiteController(){
        return new SiteController('site');
    }
    public function testIndexRenderCalledContent()
    {
        $target = test::double('SiteController',['render'=>function($viewName){
            echo "Content for $viewName";
        }]);

        ob_start();
        $controller = $this->getNewSiteController();
        $controller->actionIndex();
        $output = ob_get_clean();

        $this->assertEquals('Content for index',$output);
        $target->verifyInvoked('render');
    }
}
