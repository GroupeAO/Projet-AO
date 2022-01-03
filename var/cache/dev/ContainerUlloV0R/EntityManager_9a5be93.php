<?php

namespace ContainerUlloV0R;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderdedba = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerdc5f7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc9d1d = [
        
    ];

    public function getConnection()
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'getConnection', array(), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return $this->valueHolderdedba->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'getMetadataFactory', array(), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return $this->valueHolderdedba->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'getExpressionBuilder', array(), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return $this->valueHolderdedba->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'beginTransaction', array(), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return $this->valueHolderdedba->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'getCache', array(), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return $this->valueHolderdedba->getCache();
    }

    public function transactional($func)
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'transactional', array('func' => $func), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return $this->valueHolderdedba->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'wrapInTransaction', array('func' => $func), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return $this->valueHolderdedba->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'commit', array(), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return $this->valueHolderdedba->commit();
    }

    public function rollback()
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'rollback', array(), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return $this->valueHolderdedba->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'getClassMetadata', array('className' => $className), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return $this->valueHolderdedba->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'createQuery', array('dql' => $dql), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return $this->valueHolderdedba->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'createNamedQuery', array('name' => $name), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return $this->valueHolderdedba->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return $this->valueHolderdedba->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return $this->valueHolderdedba->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'createQueryBuilder', array(), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return $this->valueHolderdedba->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'flush', array('entity' => $entity), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return $this->valueHolderdedba->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return $this->valueHolderdedba->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return $this->valueHolderdedba->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return $this->valueHolderdedba->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'clear', array('entityName' => $entityName), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return $this->valueHolderdedba->clear($entityName);
    }

    public function close()
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'close', array(), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return $this->valueHolderdedba->close();
    }

    public function persist($entity)
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'persist', array('entity' => $entity), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return $this->valueHolderdedba->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'remove', array('entity' => $entity), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return $this->valueHolderdedba->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'refresh', array('entity' => $entity), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return $this->valueHolderdedba->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'detach', array('entity' => $entity), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return $this->valueHolderdedba->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'merge', array('entity' => $entity), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return $this->valueHolderdedba->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return $this->valueHolderdedba->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return $this->valueHolderdedba->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'getRepository', array('entityName' => $entityName), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return $this->valueHolderdedba->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'contains', array('entity' => $entity), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return $this->valueHolderdedba->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'getEventManager', array(), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return $this->valueHolderdedba->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'getConfiguration', array(), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return $this->valueHolderdedba->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'isOpen', array(), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return $this->valueHolderdedba->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'getUnitOfWork', array(), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return $this->valueHolderdedba->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return $this->valueHolderdedba->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return $this->valueHolderdedba->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'getProxyFactory', array(), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return $this->valueHolderdedba->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'initializeObject', array('obj' => $obj), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return $this->valueHolderdedba->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'getFilters', array(), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return $this->valueHolderdedba->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'isFiltersStateClean', array(), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return $this->valueHolderdedba->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'hasFilters', array(), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return $this->valueHolderdedba->hasFilters();
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

        $instance->initializerdc5f7 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderdedba) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderdedba = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderdedba->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, '__get', ['name' => $name], $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        if (isset(self::$publicPropertiesc9d1d[$name])) {
            return $this->valueHolderdedba->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdedba;

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

        $targetObject = $this->valueHolderdedba;
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
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdedba;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderdedba;
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
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, '__isset', array('name' => $name), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdedba;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderdedba;
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
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, '__unset', array('name' => $name), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdedba;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderdedba;
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
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, '__clone', array(), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        $this->valueHolderdedba = clone $this->valueHolderdedba;
    }

    public function __sleep()
    {
        $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, '__sleep', array(), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;

        return array('valueHolderdedba');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerdc5f7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerdc5f7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerdc5f7 && ($this->initializerdc5f7->__invoke($valueHolderdedba, $this, 'initializeProxy', array(), $this->initializerdc5f7) || 1) && $this->valueHolderdedba = $valueHolderdedba;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdedba;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdedba;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
