<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class CompteRendu extends \App\Entity\CompteRendu implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as private;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    public function __load(): void
    {
        $this->initializeLazyObject();
    }
    

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'animal' => [parent::class, 'animal', null],
        "\0".parent::class."\0".'date' => [parent::class, 'date', null],
        "\0".parent::class."\0".'details' => [parent::class, 'details', null],
        "\0".parent::class."\0".'etat' => [parent::class, 'etat', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'utilisateur' => [parent::class, 'utilisateur', null],
        'animal' => [parent::class, 'animal', null],
        'date' => [parent::class, 'date', null],
        'details' => [parent::class, 'details', null],
        'etat' => [parent::class, 'etat', null],
        'id' => [parent::class, 'id', null],
        'utilisateur' => [parent::class, 'utilisateur', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}