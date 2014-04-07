<?php

namespace ThinkHaml\NodeVisitor;

use ThinkHaml\Node\Root;
use ThinkHaml\Node\Tag;
use ThinkHaml\Node\TagAttribute;
use ThinkHaml\Node\Statement;
use ThinkHaml\Node\Text;
use ThinkHaml\Node\Insert;
use ThinkHaml\Node\Run;
use ThinkHaml\Node\InterpolatedString;
use ThinkHaml\Node\Comment;
use ThinkHaml\Node\Doctype;
use ThinkHaml\Node\Filter;
use ThinkHaml\Node\ObjectRefClass;
use ThinkHaml\Node\NodeAbstract;
use ThinkHaml\Node\ObjectRefId;
use ThinkHaml\Node\TagAttributeInterpolation;
use ThinkHaml\Node\TagAttributeList;

/**
 * Abstract node visitor
 *
 * All traversing logic is outside of the visitors.
 */
abstract class NodeVisitorAbstract implements NodeVisitorInterface
{
    public function enterComment(Comment $node)
    {
    }
    public function enterCommentContent(Comment $node)
    {
    }
    public function leaveCommentContent(comment $node)
    {
    }
    public function enterCommentChilds(Comment $node)
    {
    }
    public function leaveCommentChilds(Comment $node)
    {
    }
    public function leaveComment(Comment $node)
    {
    }

    public function enterDoctype(Doctype $node)
    {
    }
    public function leaveDoctype(Doctype $node)
    {
    }

    public function enterInsert(Insert $node)
    {
    }
    public function leaveInsert(Insert $node)
    {
    }

    public function enterInterpolatedString(InterpolatedString $node)
    {
    }
    public function enterInterpolatedStringChilds(InterpolatedString $node)
    {
    }
    public function leaveInterpolatedStringChilds(InterpolatedString $node)
    {
    }
    public function leaveInterpolatedString(InterpolatedString $node)
    {
    }

    public function enterRoot(Root $node)
    {
    }
    public function enterRootContent(Root $node)
    {
    }
    public function leaveRootContent(Root $node)
    {
    }
    public function enterRootChilds(Root $node)
    {
    }
    public function leaveRootChilds(Root $node)
    {
    }
    public function leaveRoot(Root $node)
    {
    }

    public function enterRun(Run $node)
    {
    }
    public function enterRunChilds(Run $node)
    {
    }
    public function leaveRunChilds(Run $node)
    {
    }
    public function enterRunMidblock(Run $node)
    {
    }
    public function leaveRunMidblock(Run $node)
    {
    }
    public function leaveRun(Run $node)
    {
    }

    public function enterStatement(Statement $node)
    {
    }
    public function enterStatementContent(Statement $node)
    {
    }
    public function leaveStatementContent(Statement $node)
    {
    }
    public function leaveStatement(Statement $node)
    {
    }

    public function enterTag(Tag $node)
    {
    }
    public function enterTagAttributes(Tag $node)
    {
    }
    public function leaveTagAttributes(Tag $node)
    {
    }
    public function enterTagContent(Tag $node)
    {
    }
    public function leaveTagContent(Tag $node)
    {
    }
    public function enterTagChilds(Tag $node)
    {
    }
    public function leaveTagChilds(Tag $node)
    {
    }
    public function leaveTag(Tag $node)
    {
    }

    public function enterTagAttribute(TagAttribute $node)
    {
    }
    public function enterTagAttributeName(TagAttribute $node)
    {
    }
    public function leaveTagAttributeName(TagAttribute $node)
    {
    }
    public function enterTagAttributeValue(TagAttribute $node)
    {
    }
    public function leaveTagAttributeValue(TagAttribute $node)
    {
    }
    public function enterTagAttributeInterpolation(TagAttributeInterpolation $node)
    {
    }
    public function leaveTagAttributeInterpolation(TagAttributeInterpolation $node)
    {
    }
    public function enterTagAttributeList(TagAttributeList $node)
    {
    }
    public function leaveTagAttributeList(TagAttributeList $node)
    {
    }
    public function leaveTagAttribute(TagAttribute $node)
    {
    }

    public function enterObjectRefClass(ObjectRefClass $node)
    {
    }
    public function leaveObjectRefClass(ObjectRefClass $node)
    {
    }
    public function enterObjectRefId(ObjectRefId $node)
    {
    }
    public function leaveObjectRefId(ObjectRefId $node)
    {
    }
    public function enterObjectRefObject(NodeAbstract $node)
    {
    }
    public function leaveObjectRefObject(NodeAbstract $node)
    {
    }
    public function enterObjectRefPrefix(NodeAbstract $node)
    {
    }
    public function leaveObjectRefPrefix(NodeAbstract $node)
    {
    }

    public function enterText(Text $node)
    {
    }
    public function leaveText(Text $node)
    {
    }

    public function enterFilter(Filter $node)
    {
    }
    public function enterFilterChilds(Filter $node)
    {
    }
    public function leaveFilterChilds(Filter $node)
    {
    }
    public function leaveFilter(Filter $node)
    {
    }
}
