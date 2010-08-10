<?php

namespace Documents\Functional;

/** @Document(collection="embedded_test") */
class EmbeddedTestLevel0
{
    /** @Id */
    public $id;
    /** @String */
    public $name;
    /** @EmbedMany(targetDocument="EmbeddedTestLevel1", cascade={"all"}) */
    public $level1 = array();
}