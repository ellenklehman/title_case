<?php

    require_once "src/TitleCaseGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {

        function test_makeTitleCase()
        {
          phpdbg_break();
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "beowulf";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Beowulf", $result);
        }
    }

?>
