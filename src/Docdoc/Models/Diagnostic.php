<?php


namespace Veezex\Medical\Docdoc\Models;


class Diagnostic extends Model
{
    protected $required = ['Id', 'Name'];

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->get('Name');
    }
}