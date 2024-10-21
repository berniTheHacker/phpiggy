<?php

declare(strict_types=1);

namespace Framework;

use ReflectionClass, ReflectionNamedType;
use Framework\Exceptions\ContainerException;


/**
 * Container class is responsible for managing and resolving class dependencies.
 */
class Container
{
    /**
     * Holds the definitions of the classes and their dependencies.
     * 
     * @var array
     */
    private array $definitions = [];


    /**
     * Adds new class definitions to the container.
     * 
     * @param array $newDefinitions An associative array where keys are class names 
     *                              and values are class implementations or callbacks.
     * @return void
     */
    public function addDefinitions(array $newDefinitions)
    {
        // Merging two arrays using spread operator instead of array_merge()
        $this->definitions = [...$this->definitions, ...$newDefinitions];
    }


    /**
     * Resolves a class by its name and injects its dependencies automatically.
     * 
     * @param string $className The fully qualified name of the class to be resolved.
     * @return object The instantiated class with its dependencies injected.
     * 
     * @throws ContainerException If the class is not instantiable or has invalid dependencies.
     */
    public function resolve(string $className)
    {
        $reflectionClass = new ReflectionClass($className);

        if (!$reflectionClass->isInstantiable()) {
            throw new ContainerException("Class {$className} is not instantiable");
        }

        $constructor = $reflectionClass->getConstructor();

        if (!$constructor) {
            return new $className;
        }

        $params = $constructor->getParameters();

        if (count($params) === 0) {
            return new $className;
        }

        $dependencies = [];

        foreach ($params as $param) {
            $name = $param->getName();
            $type = $param->getType();

            if (!$type) {
                throw new ContainerException("Failed to resolve class {$className} because param {$name} is missing a type hint.");
            }

            if (!$type instanceof ReflectionNamedType || $type->isBuiltin()) {
                throw new ContainerException("Failed to resolve class {$className} because invalid param name.");
            }
        }

        dd($params);
    }
}
