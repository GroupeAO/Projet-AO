<?php

namespace Container0awLQco;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder24ee7 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3507c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc62cb = [
        
    ];

    public function getConnection()
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'getConnection', array(), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return $this->valueHolder24ee7->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'getMetadataFactory', array(), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return $this->valueHolder24ee7->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'getExpressionBuilder', array(), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return $this->valueHolder24ee7->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'beginTransaction', array(), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return $this->valueHolder24ee7->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'getCache', array(), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return $this->valueHolder24ee7->getCache();
    }

    public function transactional($func)
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'transactional', array('func' => $func), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return $this->valueHolder24ee7->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'wrapInTransaction', array('func' => $func), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return $this->valueHolder24ee7->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'commit', array(), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return $this->valueHolder24ee7->commit();
    }

    public function rollback()
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'rollback', array(), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return $this->valueHolder24ee7->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'getClassMetadata', array('className' => $className), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return $this->valueHolder24ee7->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'createQuery', array('dql' => $dql), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return $this->valueHolder24ee7->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'createNamedQuery', array('name' => $name), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return $this->valueHolder24ee7->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return $this->valueHolder24ee7->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return $this->valueHolder24ee7->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'createQueryBuilder', array(), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return $this->valueHolder24ee7->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'flush', array('entity' => $entity), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return $this->valueHolder24ee7->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return $this->valueHolder24ee7->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return $this->valueHolder24ee7->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return $this->valueHolder24ee7->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'clear', array('entityName' => $entityName), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return $this->valueHolder24ee7->clear($entityName);
    }

    public function close()
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'close', array(), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return $this->valueHolder24ee7->close();
    }

    public function persist($entity)
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'persist', array('entity' => $entity), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return $this->valueHolder24ee7->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'remove', array('entity' => $entity), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return $this->valueHolder24ee7->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'refresh', array('entity' => $entity), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return $this->valueHolder24ee7->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'detach', array('entity' => $entity), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return $this->valueHolder24ee7->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'merge', array('entity' => $entity), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return $this->valueHolder24ee7->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return $this->valueHolder24ee7->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return $this->valueHolder24ee7->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return $this->valueHolder24ee7->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'contains', array('entity' => $entity), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return $this->valueHolder24ee7->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'getEventManager', array(), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return $this->valueHolder24ee7->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'getConfiguration', array(), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return $this->valueHolder24ee7->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'isOpen', array(), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return $this->valueHolder24ee7->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'getUnitOfWork', array(), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return $this->valueHolder24ee7->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return $this->valueHolder24ee7->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return $this->valueHolder24ee7->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'getProxyFactory', array(), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return $this->valueHolder24ee7->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'initializeObject', array('obj' => $obj), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return $this->valueHolder24ee7->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'getFilters', array(), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return $this->valueHolder24ee7->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'isFiltersStateClean', array(), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return $this->valueHolder24ee7->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'hasFilters', array(), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return $this->valueHolder24ee7->hasFilters();
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

        $instance->initializer3507c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder24ee7) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder24ee7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder24ee7->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, '__get', ['name' => $name], $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        if (isset(self::$publicPropertiesc62cb[$name])) {
            return $this->valueHolder24ee7->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder24ee7;

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

        $targetObject = $this->valueHolder24ee7;
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
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder24ee7;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder24ee7;
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
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, '__isset', array('name' => $name), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder24ee7;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder24ee7;
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
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, '__unset', array('name' => $name), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder24ee7;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder24ee7;
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
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, '__clone', array(), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        $this->valueHolder24ee7 = clone $this->valueHolder24ee7;
    }

    public function __sleep()
    {
        $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, '__sleep', array(), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;

        return array('valueHolder24ee7');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3507c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3507c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3507c && ($this->initializer3507c->__invoke($valueHolder24ee7, $this, 'initializeProxy', array(), $this->initializer3507c) || 1) && $this->valueHolder24ee7 = $valueHolder24ee7;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder24ee7;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder24ee7;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
