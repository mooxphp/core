<?php

namespace Moox\Core\Traits;

use Exception;

trait CanResolveResourceClass
{
    /**
     * Resolve the resource class.
     */
    protected static function resolveResourceClass(): string
    {
        $className = static::class;

        $resourceClass = preg_replace('/\\\\Pages\\\\[^\\\\]+$/', '', $className);

        return class_exists($resourceClass) ? $resourceClass : parent::$resource;
    }

    /**
     * Get the resource class.
     */
    public static function getResource(): string
    {
        if (isset(static::$resource)) {
            return static::$resource;
        }

        $className = static::class;

        $parts = explode('\\', $className);
        $parts = explode('\\', $className);

        array_pop($parts); // Remove ViewPage
        array_pop($parts); // Remove Pages

        $entityName = end($parts);

        reset($parts);

        $resourceClass = implode('\\', $parts).'\\'.$entityName.'Resource';

        if (class_exists($resourceClass)) {
            return $resourceClass;
        }

        throw new Exception(
            'Could not automatically determine resource class for '.static::class.
            '. Please define protected static string $resource property.'
        );
    }
}
