<?php

namespace ThinkHaml\Filter;

use ThinkHaml\NodeVisitor\RendererAbstract as Renderer;
use ThinkHaml\Node\Filter;
use ThinkHaml\Node\Insert;

abstract class AbstractFilter implements FilterInterface
{
    public function isOptimizable(Renderer $renderer, Filter $node, $options)
    {
        foreach ($node->getChilds() as $line) {
            foreach ($line->getContent()->getChilds() as $child) {
                if ($child instanceof Insert) {
                    return false;
                }
            }
        }

        return true;
    }

    protected function renderFilter(Renderer $renderer, Filter $node)
    {
        foreach($node->getChilds() as $child) {
            $child->accept($renderer);
        }
    }

    protected function getContent(Filter $node)
    {
        $content = '';
        foreach ($node->getChilds() as $line) {
            foreach ($line->getContent()->getChilds() as $child) {
                $content .= $child->getContent();
            }
            $content .= "\n";
        }

        return $content;
    }
}
