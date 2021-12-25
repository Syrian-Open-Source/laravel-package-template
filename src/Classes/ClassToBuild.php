<?php

namespace SOS\LaravelPackageTemplate\Classes;

/**
 * Class ClassToBuild
 *
 * @author your name
 * @package SOS\MultiProcess\Classes
 */
class ClassToBuild
{
    /**
     * description
     *
     * @author your name
     * @var
     */
    private $example;

    /**
     * description
     *
     * @return mixed
     * @author your name
     */
    public function getExample()
    {
        return $this->example;
    }

    /**
     * description
     *
     * @param  mixed  $example
     *
     * @return ClassToBuild
     * @author your name
     */
    public function setExample($example)
    {
        $this->example = $example;

        return $this;
    }
}
