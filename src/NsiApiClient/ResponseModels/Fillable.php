<?php


namespace Fellzo\NsiApiClient\ResponseModels;


use Carbon\Carbon;
use Doctrine\Common\Inflector\Inflector;

/**
 * Trait Fillable
 * This trait add method fill for ResponseModel class and allow to fill
 * @package Fellzo\NsiApiClient\ResponseModels
 * @mixin ResponseModel
 */
trait Fillable
{

    private static function getArrayType(string $type) : ?string
    {
        $matches = [];
        preg_match('~array\[(.*)]~', $type, $matches);
        return $matches[1]?? null;
    }

    protected static function cast($val, $cast)
    {
        switch ( $cast ) {
            case 'string':
            case 'str':
                return (string) $val;
            case 'int':
            case 'integer':
                return (int) $val;
            case 'float':
            case 'double':
                return (float) $val;
            case 'bool':
            case 'boolean':
                return (bool) $val;
            case 'datetime':
                return Carbon::parse($val);
        }
        $type = static::getArrayType($cast);
        if ( $type ) {
            $res = [];
            if ( is_array($val) ) {
                foreach ( $val as $v ) {
                    $res[] = static::cast($v, $type);
                }
            }
            return $res;
        }
        if ( is_array($cast) && is_array($val) ) {
            foreach ( $cast as $key => $type ) {
                $val[$key] && $val[$key] = static::cast($val[$key], $type);
            }
        }
        $model = new $cast;
        if ( method_exists($model, 'fill') )
            $model->fill($val);
        return $model;
    }

    /**
     * @param array $data
     * @return $this
     */
    protected function _fill(array $data)
    {
        foreach ( $data as $key => $val ) {
            $name = 'set' . Inflector::classify($key);
            if ( array_key_exists($key, static::$casts?? []) )
                $val = static::cast($val, static::$casts[$key]);
            if ( method_exists($this, $name) )
                $this->$name($val);
        }
        return $this;
    }

    public function fill(array $data)
    {
        return $this->_fill($data);
    }
}