<?hh

/*
 * This file is part of the Prismic hack SDK
 *
 * Copyright 2013 Zengularity (http://www.zengularity.com).
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prismic\Fragment\Block;

use Prismic\Fragment\Span\SpanInterface;

class ListItemBlock implements TextInterface
{

    private $text;
    private $spans;
    private $ordered;

    public function __construct(string $text, ImmVector<SpanInterface> $spans, bool $ordered)
    {
        $this->text = $text;
        $this->spans = $spans;
        $this->ordered = $ordered;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getSpans(): ImmVector<SpanInterface>
    {
        return $this->spans;
    }

    public function isOrdered(): bool
    {
        return $this->ordered;
    }
}
