<?php

namespace ThinkHaml\Filter;

use ThinkHaml\NodeVisitor\RendererAbstract as Renderer;
use ThinkHaml\Node\Filter;

class Css extends Plain
{
    public function optimize(Renderer $renderer, Filter $node, $options)
    {
        $renderer->write('<style type="text/css">');
        if ($options['cdata'] === true) {
            $renderer->write('/*<![CDATA[*/');
        }

        $renderer->indent();
        $this->renderFilter($renderer, $node);
        $renderer->undent();

        if ($options['cdata'] === true) {
            $renderer->write('/*]]>*/');
        }
        $renderer->write('</style>');
    }
}
