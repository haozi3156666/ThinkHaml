<?php

namespace ThinkHaml\Filter;

use ThinkHaml\NodeVisitor\RendererAbstract as Renderer;
use ThinkHaml\Node\Filter;

class Less extends AbstractFilter
{
    private $less;

    public function __construct(\lessc $less)
    {
        $this->less = $less;
    }

    public function optimize(Renderer $renderer, Filter $node, $options)
    {
        $renderer->write($this->filter($this->getContent($node), array(), $options));
    }

    public function filter($content, array $context, $options)
    {
        if (isset($options['cdata']) && $options['cdata'] === true) {
            return "<style type=\"text/css\">\n/*<![CDATA[*/\n".$this->less->compile($content)."\n/*]]>*/\n</style>";
        }

        return "<style type=\"text/css\">\n".$this->less->compile($content)."\n</style>";
    }
}
