<?php

namespace ThinkHaml\Filter;

use ThinkHaml\NodeVisitor\RendererAbstract as Renderer;
use ThinkHaml\Node\Filter;
use ThinkHaml\Node\EscapableAbstract;

class Escaped extends Plain
{
    public function optimize(Renderer $renderer, Filter $node, $options)
    {
        foreach ($node->getChilds() as $child) {
            foreach ($child->getContent()->getChilds() as $item) {
                if ($item instanceof EscapableAbstract) {
                    $item->getEscaping()->setEnabled(true);
                }
            }
            $child->accept($renderer);
        }
    }
}
