<?php

namespace Container8Q50ZY6;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderaa16c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerfa500 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertieseab24 = [
        
    ];

    public function getConnection()
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'getConnection', array(), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return $this->valueHolderaa16c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'getMetadataFactory', array(), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return $this->valueHolderaa16c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'getExpressionBuilder', array(), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return $this->valueHolderaa16c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'beginTransaction', array(), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return $this->valueHolderaa16c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'getCache', array(), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return $this->valueHolderaa16c->getCache();
    }

    public function transactional($func)
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'transactional', array('func' => $func), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return $this->valueHolderaa16c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'wrapInTransaction', array('func' => $func), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return $this->valueHolderaa16c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'commit', array(), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return $this->valueHolderaa16c->commit();
    }

    public function rollback()
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'rollback', array(), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return $this->valueHolderaa16c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'getClassMetadata', array('className' => $className), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return $this->valueHolderaa16c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'createQuery', array('dql' => $dql), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return $this->valueHolderaa16c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'createNamedQuery', array('name' => $name), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return $this->valueHolderaa16c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return $this->valueHolderaa16c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return $this->valueHolderaa16c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'createQueryBuilder', array(), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return $this->valueHolderaa16c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'flush', array('entity' => $entity), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return $this->valueHolderaa16c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return $this->valueHolderaa16c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return $this->valueHolderaa16c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return $this->valueHolderaa16c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'clear', array('entityName' => $entityName), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return $this->valueHolderaa16c->clear($entityName);
    }

    public function close()
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'close', array(), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return $this->valueHolderaa16c->close();
    }

    public function persist($entity)
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'persist', array('entity' => $entity), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return $this->valueHolderaa16c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'remove', array('entity' => $entity), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return $this->valueHolderaa16c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'refresh', array('entity' => $entity), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return $this->valueHolderaa16c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'detach', array('entity' => $entity), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return $this->valueHolderaa16c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'merge', array('entity' => $entity), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return $this->valueHolderaa16c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return $this->valueHolderaa16c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return $this->valueHolderaa16c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'getRepository', array('entityName' => $entityName), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return $this->valueHolderaa16c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'contains', array('entity' => $entity), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return $this->valueHolderaa16c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'getEventManager', array(), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return $this->valueHolderaa16c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'getConfiguration', array(), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return $this->valueHolderaa16c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'isOpen', array(), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return $this->valueHolderaa16c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'getUnitOfWork', array(), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return $this->valueHolderaa16c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return $this->valueHolderaa16c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return $this->valueHolderaa16c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'getProxyFactory', array(), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return $this->valueHolderaa16c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'initializeObject', array('obj' => $obj), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return $this->valueHolderaa16c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'getFilters', array(), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return $this->valueHolderaa16c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'isFiltersStateClean', array(), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return $this->valueHolderaa16c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'hasFilters', array(), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return $this->valueHolderaa16c->hasFilters();
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

        $instance->initializerfa500 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderaa16c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderaa16c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderaa16c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, '__get', ['name' => $name], $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        if (isset(self::$publicPropertieseab24[$name])) {
            return $this->valueHolderaa16c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa16c;

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

        $targetObject = $this->valueHolderaa16c;
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
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa16c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderaa16c;
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
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, '__isset', array('name' => $name), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa16c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderaa16c;
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
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, '__unset', array('name' => $name), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa16c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderaa16c;
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
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, '__clone', array(), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        $this->valueHolderaa16c = clone $this->valueHolderaa16c;
    }

    public function __sleep()
    {
        $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, '__sleep', array(), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;

        return array('valueHolderaa16c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerfa500 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerfa500;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerfa500 && ($this->initializerfa500->__invoke($valueHolderaa16c, $this, 'initializeProxy', array(), $this->initializerfa500) || 1) && $this->valueHolderaa16c = $valueHolderaa16c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderaa16c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderaa16c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
