<?php

namespace ContainerT8focgd;

class PaginatorProxyF03325b implements \Knp\Component\Pager\PaginatorInterface, \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyProxyTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [];
    public function initializeLazyObject(): \Knp\Component\Pager\PaginatorInterface
    {
        if ($state = $this->lazyObjectState ?? null) {
            return $state->realInstance ??= ($state->initializer)();
        }
        return $this;
    }
    public function paginate(mixed $target, int $page = 1, ?int $limit = null, array $options = []): \Knp\Component\Pager\Pagination\PaginationInterface
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->paginate(...\func_get_args());
        }
        return throw new \BadMethodCallException('Cannot forward abstract method "Knp\Component\Pager\PaginatorInterface::paginate()".');
    }
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('PaginatorProxyF03325b', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorProxyF03325b', 'PaginatorProxyF03325b', false);
}
