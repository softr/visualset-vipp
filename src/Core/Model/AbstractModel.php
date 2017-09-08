<?php
namespace Softr\Vipp\Core\Model;

use Softr\Vipp\Core\Utils\Str;

/**
 * Abstract Model
 *
 * @author Agência Softr <agencia.softr@gmail.com>
 */
abstract class AbstractModel
{
    /**
     * Constructor
     *
     * @param  \stdClass|array|null  $parameters  (optional) Model parameters
     */
    public function __construct(array $parameters = [])
    {
        if (empty($parameters)) {
            return;
        }

        $this->build($parameters);
    }

    /**
     * Fill entity with parameters data
     *
     * @param  array  $parameters  Model parameters
     */
    public function build(array $parameters)
    {
        foreach ($parameters as $property => $value) {
            if (property_exists($this, $property)) {
                $this->$property = $value;

                $mutator = 'set' . ucfirst(Str::convertToCamelCase($property));

                if (method_exists($this, $mutator)) {
                    call_user_func_array(array($this, $mutator), [$value]);
                }
            }
        }
    }

    /**
     * Return entity data as array
     *
     * @return  array
     */
    public function asArray()
    {
        $reflect = new \ReflectionClass($this);

        $props = $reflect->getProperties(\ReflectionProperty::IS_PUBLIC | \ReflectionProperty::IS_PROTECTED);

        $data = array();

        foreach ($props as $prop) {
            $accessor = 'get' . ucfirst(Str::convertToCamelCase($prop->getName()));

            if (method_exists($this, $accessor)) {
                $data[$prop->getName()] = call_user_func_array(array($this, $accessor), []);
            } else {
                $data[$prop->getName()] = $this->{$prop->getName()};
            }
        }

        return $data;
    }
}
