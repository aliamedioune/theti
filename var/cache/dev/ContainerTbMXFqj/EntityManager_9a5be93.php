<?php

namespace ContainerTbMXFqj;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderad3bb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer806f5 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese44e0 = [
        
    ];

    public function getConnection()
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'getConnection', array(), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'getMetadataFactory', array(), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'getExpressionBuilder', array(), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'beginTransaction', array(), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'getCache', array(), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->getCache();
    }

    public function transactional($func)
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'transactional', array('func' => $func), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'wrapInTransaction', array('func' => $func), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'commit', array(), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->commit();
    }

    public function rollback()
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'rollback', array(), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'getClassMetadata', array('className' => $className), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'createQuery', array('dql' => $dql), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'createNamedQuery', array('name' => $name), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'createQueryBuilder', array(), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'flush', array('entity' => $entity), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'clear', array('entityName' => $entityName), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->clear($entityName);
    }

    public function close()
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'close', array(), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->close();
    }

    public function persist($entity)
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'persist', array('entity' => $entity), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'remove', array('entity' => $entity), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'detach', array('entity' => $entity), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'merge', array('entity' => $entity), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'getRepository', array('entityName' => $entityName), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'contains', array('entity' => $entity), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'getEventManager', array(), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'getConfiguration', array(), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'isOpen', array(), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'getUnitOfWork', array(), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'getProxyFactory', array(), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'initializeObject', array('obj' => $obj), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'getFilters', array(), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'isFiltersStateClean', array(), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'hasFilters', array(), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return $this->valueHolderad3bb->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer806f5 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolderad3bb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderad3bb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderad3bb->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, '__get', ['name' => $name], $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        if (isset(self::$publicPropertiese44e0[$name])) {
            return $this->valueHolderad3bb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderad3bb;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderad3bb;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderad3bb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderad3bb;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, '__isset', array('name' => $name), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderad3bb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderad3bb;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, '__unset', array('name' => $name), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderad3bb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderad3bb;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, '__clone', array(), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        $this->valueHolderad3bb = clone $this->valueHolderad3bb;
    }

    public function __sleep()
    {
        $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, '__sleep', array(), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;

        return array('valueHolderad3bb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer806f5 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer806f5;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer806f5 && ($this->initializer806f5->__invoke($valueHolderad3bb, $this, 'initializeProxy', array(), $this->initializer806f5) || 1) && $this->valueHolderad3bb = $valueHolderad3bb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderad3bb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderad3bb;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
