<?php

/**
 * Class Node
 */

class Node
{
  /** @var string */
  private $item;

  /** @var Node */
  private $next;

  public function __construct(string $item, ?Node $next = null)
  {
    $this->item = $item;
    $this->next = $next;
  }

  public function getItem(): string
  {
    return $this->item;
  }

  public function getNext(): ?Node
  {
    return $this->next;
  }

  public function setNext($node): void
  {
    $this->next = $node;
  }
}
