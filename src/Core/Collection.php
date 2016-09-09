<?php
namespace Softr\Vipp\Core;

use ArrayAccess;
use ArrayIterator;
use Countable;
use IteratorAggregate;
use Softr\Vipp\Core\Entity\AbstractEntity;

/**
 * Class Collection
 *
 */
class Collection implements ArrayAccess, Countable, IteratorAggregate
{
    /**
     * The items contained in the collection.
     *
     * @var array
     */
    protected $items = [];

    /**
     * Create a new collection.
     *
     * @param array $items
     */
    public function __construct(array $items = [])
    {
        $this->items = $items;
    }

    /**
     * Get all of the items in the collection.
     *
     * @return array
     */
    public function all()
    {
        return $this->items;
    }

    /**
     * Get the collection of items as a plain array.
     *
     * @return array
     */
    public function asArray()
    {
        return array_map(function ($value) {
            return $value instanceof AbstractEntity ? $value->asArray() : $value;
        }, $this->items);
    }

    /**
     * Run a map over each of the items.
     *
     * @param \Closure $callback
     *
     * @return static
     */
    public function map(\Closure $callback)
    {
        return new static(array_map($callback, $this->items, array_keys($this->items)));
    }

    /**
     * Get the collection of items as JSON.
     *
     * @return string
     */
    public function asJson()
    {
        return json_encode($this->asArray());
    }

    /**
     * Count the number of items in the collection.
     *
     * @return int
     */
    public function count()
    {
        return count($this->items);
    }

    /**
     * Get an iterator for the items.
     *
     * @return ArrayIterator
     */
    public function getIterator()
    {
        return new ArrayIterator($this->items);
    }

    /**
     * Determine if an item exists at an offset.
     *
     * @param mixed $key
     *
     * @return bool
     */
    public function offsetExists($key)
    {
        return array_key_exists($key, $this->items);
    }

    /**
     * Get an item at a given offset.
     *
     * @param mixed $key
     *
     * @return mixed
     */
    public function offsetGet($key)
    {
        return $this->items[$key];
    }

    /**
     * Set the item at a given offset.
     *
     * @param mixed $key
     * @param mixed $value
     *
     * @return void
     */
    public function offsetSet($key, $value)
    {
        if (is_null($key)) {
            $this->items[] = $value;
        } else {
            $this->items[$key] = $value;
        }
    }

    /**
     * Unset the item at a given offset.
     *
     * @param string $key
     *
     * @return void
     */
    public function offsetUnset($key)
    {
        unset($this->items[$key]);
    }

    /**
     * Append new item
     *
     * @param mixed  $item  Item data
     *
     * @return void
     */
    public function addItem($item)
    {
        $this->items[] = $item;
    }

    /**
     * Convert the collection to its string representation.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->asJson();
    }
}