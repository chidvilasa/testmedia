<?php

namespace MediaFoundryTest;

trait FixtureHelper
{
    public function loadFixture($filename)
    {
        return file_get_contents(dirname(__FILE__) . '/fixtures/' . $filename . '.json');
    }
}
