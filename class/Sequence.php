<?php

abstract class Sequence
{
  abstract public function put(string $item): void;

  abstract public function get(): ?string;

  abstract protected function getFirst(): ?Node;

  public function isEmpty(): bool
  {
    return $this->getFirst() == null;
  }

  public function getList(): iterable 
  {
    $curr = $this->getFirst();
    while ($curr != null)
    {
      yield $curr->getItem();
      $curr = $curr->getNext();
    }
  }
}
