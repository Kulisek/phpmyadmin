<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */

require_once 'libraries/Theme.class.php';

/**
 * Test class for PMA_Theme.
 */
class PMA_ThemeTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var PMA_Theme
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new PMA_Theme;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    public function testCheckImgPathNotExisted()
    {
        $this->object->setPath('path/to/nowhere');
        $this->assertFalse($this->object->loadInfo());
    }

    public function testCheckImgPathIncorrect()
    {
        $this->object->setPath('./test/classes/_data/incorrect_theme');
        $this->assertFalse(
            $this->object->loadInfo(),
            'Theme name is not properly set'
        );
    }

    public function testCheckImgPathFull()
    {
        $this->object->setPath('./test/classes/_data/gen_version_info');
        $this->assertTrue($this->object->loadInfo());
        $this->assertEquals('Test Theme', $this->object->getName());
        $this->assertEquals('2.0.3', $this->object->getVersion());
    }

    public function testLoadInfo()
    {
        $this->object->setPath('./themes/original');
        $infofile = $this->object->getPath().'/info.inc.php';
        $this->assertTrue($this->object->loadInfo());

        $this->assertEquals(
            filemtime($infofile),
            $this->object->mtime_info
        );

        $this->object->setPath('./themes/original');
        $this->object->mtime_info = filemtime($infofile);
        $this->assertTrue($this->object->loadInfo());
        $this->assertEquals('Original', $this->object->getName());
    }

    public function testLoad()
    {
        $newTheme = PMA_Theme::load('./themes/original');
        $this->assertNotNull($newTheme);
    }

    public function testLoadNotExisted()
    {
        $this->assertFalse(PMA_Theme::load('/path/to/nowhere'));
    }

    /**
     *
     * @expectedException PHPUnit_Framework_Error
     */
    public function testCheckImgPathBad()
    {
        $prevConfPath = $GLOBALS['cfg']['ThemePath'];
        $GLOBALS['cfg']['ThemePath'] = 'nowhere';
        $this->object->setPath('path/to/nowhere');

        $this->object->checkImgPath();
    }

    public function testCheckImgPath()
    {
        $this->object->setPath('./themes/original');
        $this->assertTrue($this->object->checkImgPath());
    }

    public function testCheckImgPathGlobals()
    {
        $this->object->setPath('/this/is/wrong/path');
        $GLOBALS['cfg']['ThemePath'] = 'themes';
        $this->assertTrue($this->object->checkImgPath());
    }

    /**
     *
     * @expectedException PHPUnit_Framework_Error
     */
    public function testCheckImgPathGlobalsWrongPath()
    {
        $prevThemePath = $GLOBALS['cfg']['ThemePath'];
        $GLOBALS['cfg']['ThemePath'] = 'no_themes';

        $this->object->setPath('/this/is/wrong/path');
        $this->object->checkImgPath();

        $GLOBALS['cfg']['ThemePath'] = $prevThemePath;
    }

    /**
     *
     * @covers PMA_Theme::setPath
     * @covers PMA_Theme::getPath
     */
    public function testGetSetPath()
    {
        $this->assertEmpty($this->object->getPath());
        $this->object->setPath('./themes/original');

        $this->assertEquals('./themes/original', $this->object->getPath());
    }

    public function testGetLayoutFile()
    {
        $this->assertContains('layout.inc.php', $this->object->getLayoutFile());
    }

    /**
     *
     * @depends testLoadInfo
     */
    public function testGetSetCheckVersion()
    {
        $this->assertEquals(
            '0.0.0.0',
            $this->object->getVersion(),
            'Version 0.0.0.0 by default'
        );

        $this->object->setVersion("1.2.3.4");
        $this->assertEquals('1.2.3.4', $this->object->getVersion());

        $this->assertFalse($this->object->checkVersion("0.0.1.1"));
        $this->assertTrue($this->object->checkVersion("2.0.1.1"));
    }

    /**
     *
     * @covers PMA_Theme::getName
     * @covers PMA_Theme::setName
     */
    public function testGetSetName()
    {
        $this->assertEmpty($this->object->getName(), 'Name is empty by default');
        $this->object->setName('New Theme Name');

        $this->assertEquals('New Theme Name', $this->object->getName());
    }

    /**
     *
     * @covers PMA_Theme::getId
     * @covers PMA_Theme::setId
     */
    public function testGetSetId()
    {
        $this->assertEmpty($this->object->getId(), 'ID is empty by default');
        $this->object->setId('NewID');

        $this->assertEquals('NewID', $this->object->getId());
    }

    /**
     *
     * @covers PMA_Theme::getImgPath
     * @covers PMA_Theme::setImgPath
     */
    public function testGetSetImgPath()
    {
        $this->assertEmpty(
            $this->object->getImgPath(),
            'ImgPath is empty by default'
        );
        $this->object->setImgPath('/new/path');

        $this->assertEquals('/new/path', $this->object->getImgPath());
    }

    public function testLoadCssWrongType()
    {
        $type = 'middle';
        $this->assertFalse($this->object->loadCss($type));
    }

    public function testLoadCssNotExisted()
    {
        $type = 'print';
        $this->assertFalse($this->object->loadCss($type));
    }

    /**
     *
     * @todo Implement testPrintPreview().
     */
    public function testPrintPreview()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}
?>
