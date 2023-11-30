<?php

namespace ContainerL4izkws;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder7fbc9 = null;
    private $initializerc623b = null;
    private static $publicProperties96a82 = [
        
    ];
    public function getConnection()
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'getConnection', array(), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'getMetadataFactory', array(), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'getExpressionBuilder', array(), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'beginTransaction', array(), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'getCache', array(), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->getCache();
    }
    public function transactional($func)
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'transactional', array('func' => $func), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'commit', array(), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->commit();
    }
    public function rollback()
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'rollback', array(), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'getClassMetadata', array('className' => $className), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'createQuery', array('dql' => $dql), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'createNamedQuery', array('name' => $name), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'createQueryBuilder', array(), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'flush', array('entity' => $entity), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'clear', array('entityName' => $entityName), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->clear($entityName);
    }
    public function close()
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'close', array(), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->close();
    }
    public function persist($entity)
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'persist', array('entity' => $entity), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'remove', array('entity' => $entity), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->remove($entity);
    }
    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->refresh($entity, $lockMode);
    }
    public function detach($entity)
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'detach', array('entity' => $entity), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'merge', array('entity' => $entity), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'contains', array('entity' => $entity), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'getEventManager', array(), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'getConfiguration', array(), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'isOpen', array(), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'getUnitOfWork', array(), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'getProxyFactory', array(), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'initializeObject', array('obj' => $obj), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->initializeObject($obj);
    }
    public function isUninitializedObject($obj) : bool
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->isUninitializedObject($obj);
    }
    public function getFilters()
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'getFilters', array(), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'isFiltersStateClean', array(), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'hasFilters', array(), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return $this->valueHolder7fbc9->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerc623b = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;
        if (! $this->valueHolder7fbc9) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7fbc9 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder7fbc9->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, '__get', ['name' => $name], $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        if (isset(self::$publicProperties96a82[$name])) {
            return $this->valueHolder7fbc9->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7fbc9;
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
        $targetObject = $this->valueHolder7fbc9;
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
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7fbc9;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder7fbc9;
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
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, '__isset', array('name' => $name), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7fbc9;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder7fbc9;
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
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, '__unset', array('name' => $name), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7fbc9;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder7fbc9;
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
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, '__clone', array(), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        $this->valueHolder7fbc9 = clone $this->valueHolder7fbc9;
    }
    public function __sleep()
    {
        $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, '__sleep', array(), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
        return array('valueHolder7fbc9');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc623b = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc623b;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerc623b && ($this->initializerc623b->__invoke($valueHolder7fbc9, $this, 'initializeProxy', array(), $this->initializerc623b) || 1) && $this->valueHolder7fbc9 = $valueHolder7fbc9;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7fbc9;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7fbc9;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
