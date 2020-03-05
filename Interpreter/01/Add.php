<?php
// Non-terminal Expression
class Add implements Expression
{
    private $left;
    private $right;

    public function __construct($left, $right)
    {
        $this->left = $left;
        $this->right = $right;
    }

    public function interpret()
    {
        return $this->left->interpret() + $this->right->interpret();
    }
}