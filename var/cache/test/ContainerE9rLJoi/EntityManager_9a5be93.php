<?php

namespace ContainerE9rLJoi;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderaaaa6 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer63f7f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc3ee7 = [
        
    ];

    public function getConnection()
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'getConnection', array(), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'getMetadataFactory', array(), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'getExpressionBuilder', array(), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'beginTransaction', array(), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'getCache', array(), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->getCache();
    }

    public function transactional($func)
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'transactional', array('func' => $func), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'wrapInTransaction', array('func' => $func), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'commit', array(), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->commit();
    }

    public function rollback()
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'rollback', array(), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'getClassMetadata', array('className' => $className), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'createQuery', array('dql' => $dql), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'createNamedQuery', array('name' => $name), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'createQueryBuilder', array(), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'flush', array('entity' => $entity), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'clear', array('entityName' => $entityName), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->clear($entityName);
    }

    public function close()
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'close', array(), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->close();
    }

    public function persist($entity)
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'persist', array('entity' => $entity), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'remove', array('entity' => $entity), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'detach', array('entity' => $entity), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'merge', array('entity' => $entity), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'getRepository', array('entityName' => $entityName), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'contains', array('entity' => $entity), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'getEventManager', array(), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'getConfiguration', array(), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'isOpen', array(), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'getUnitOfWork', array(), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'getProxyFactory', array(), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'initializeObject', array('obj' => $obj), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'getFilters', array(), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'isFiltersStateClean', array(), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'hasFilters', array(), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return $this->valueHolderaaaa6->hasFilters();
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

        $instance->initializer63f7f = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolderaaaa6) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderaaaa6 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderaaaa6->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, '__get', ['name' => $name], $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        if (isset(self::$publicPropertiesc3ee7[$name])) {
            return $this->valueHolderaaaa6->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaaaa6;

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

        $targetObject = $this->valueHolderaaaa6;
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
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaaaa6;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderaaaa6;
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
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, '__isset', array('name' => $name), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaaaa6;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderaaaa6;
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
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, '__unset', array('name' => $name), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaaaa6;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderaaaa6;
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
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, '__clone', array(), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        $this->valueHolderaaaa6 = clone $this->valueHolderaaaa6;
    }

    public function __sleep()
    {
        $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, '__sleep', array(), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;

        return array('valueHolderaaaa6');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer63f7f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer63f7f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer63f7f && ($this->initializer63f7f->__invoke($valueHolderaaaa6, $this, 'initializeProxy', array(), $this->initializer63f7f) || 1) && $this->valueHolderaaaa6 = $valueHolderaaaa6;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderaaaa6;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderaaaa6;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
