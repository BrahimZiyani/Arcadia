<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* page/services/index.html.twig */
class __TwigTemplate_028d9aaebe3d9470aee4b429ab63d51a extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "page/services/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Nos Services";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<div class=\"container mt-5\">
    <h2 class=\"text-center mb-4\" style=\"color: #2A9D8F; font-weight: bold;\">Découvrez Nos Services</h2>
    
    <div class=\"row justify-content-center\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["services"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 11
            yield "            <div class=\"col-md-4 mb-4\">
                <div class=\"card h-100 shadow-sm border-0 rounded-lg\">
                    ";
            // line 13
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "images", [], "any", false, false, false, 13))) {
                // line 14
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/services/" . (($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["service"], "images", [], "any", false, false, false, 14)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null))), "html", null, true);
                yield "\" 
                             class=\"card-img-top rounded-top\" 
                             alt=\"Image de ";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "nom", [], "any", false, false, false, 16), "html", null, true);
                yield "\" 
                             style=\"height: 200px; object-fit: cover;\">
                    ";
            } else {
                // line 19
                yield "                        <div class=\"d-flex align-items-center justify-content-center bg-light\" 
                             style=\"height: 200px; color: #6c757d; font-size: 14px;\">
                            Pas d'image disponible
                        </div>
                    ";
            }
            // line 24
            yield "                    <div class=\"card-body text-center\">
                        <h5 class=\"card-title\" style=\"color: #2A9D8F; font-weight: bold;\">";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "nom", [], "any", false, false, false, 25), "html", null, true);
            yield "</h5>
                        <p class=\"card-text text-muted\">
                            ";
            // line 27
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["service"], "description", [], "any", false, false, false, 27)) > 100)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["service"], "description", [], "any", false, false, false, 27), 0, 100) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "description", [], "any", false, false, false, 27), "html", null, true)));
            yield "
                        </p>
                    </div>
                    <div class=\"card-footer bg-white border-0 text-center\">
                        <!-- Corrige le lien vers les détails -->
                        <a href=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_index", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary btn-sm\">En savoir plus</a>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            yield "            <div class=\"col-12\">
                <p class=\"text-center text-muted\">Aucun service disponible pour le moment.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['service'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "page/services/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  141 => 41,  132 => 37,  122 => 32,  114 => 27,  109 => 25,  106 => 24,  99 => 19,  93 => 16,  87 => 14,  85 => 13,  81 => 11,  76 => 10,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "page/services/index.html.twig", "C:\\xampp\\htdocs\\Arcadia\\templates\\page\\services\\index.html.twig");
    }
}
