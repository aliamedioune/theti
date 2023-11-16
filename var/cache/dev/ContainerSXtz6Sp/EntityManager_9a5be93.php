<?php

namespace ContainerSXtz6Sp;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder02f8f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer205e3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesffc01 = [
        
    ];

    public function getConnection()
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'getConnection', array(), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'getMetadataFactory', array(), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'getExpressionBuilder', array(), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'beginTransaction', array(), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'getCache', array(), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'transactional', array('func' => $func), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'commit', array(), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->commit();
    }

    public function rollback()
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'rollback', array(), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'getClassMetadata', array('className' => $className), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'createQuery', array('dql' => $dql), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'createNamedQuery', array('name' => $name), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'createQueryBuilder', array(), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'flush', array('entity' => $entity), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'clear', array('entityName' => $entityName), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->clear($entityName);
    }

    public function close()
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'close', array(), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->close();
    }

    public function persist($entity)
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'persist', array('entity' => $entity), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'remove', array('entity' => $entity), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'detach', array('entity' => $entity), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'merge', array('entity' => $entity), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'contains', array('entity' => $entity), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'getEventManager', array(), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'getConfiguration', array(), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'isOpen', array(), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'getUnitOfWork', array(), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'getProxyFactory', array(), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'initializeObject', array('obj' => $obj), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'getFilters', array(), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'isFiltersStateClean', array(), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'hasFilters', array(), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return $this->valueHolder02f8f->hasFilters();
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

        $instance->initializer205e3 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder02f8f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder02f8f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder02f8f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, '__get', ['name' => $name], $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        if (isset(self::$publicPropertiesffc01[$name])) {
            return $this->valueHolder02f8f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder02f8f;

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

        $targetObject = $this->valueHolder02f8f;
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
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder02f8f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder02f8f;
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
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, '__isset', array('name' => $name), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder02f8f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder02f8f;
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
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, '__unset', array('name' => $name), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder02f8f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder02f8f;
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
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, '__clone', array(), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        $this->valueHolder02f8f = clone $this->valueHolder02f8f;
    }

    public function __sleep()
    {
        $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, '__sleep', array(), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;

        return array('valueHolder02f8f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer205e3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer205e3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer205e3 && ($this->initializer205e3->__invoke($valueHolder02f8f, $this, 'initializeProxy', array(), $this->initializer205e3) || 1) && $this->valueHolder02f8f = $valueHolder02f8f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder02f8f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder02f8f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
