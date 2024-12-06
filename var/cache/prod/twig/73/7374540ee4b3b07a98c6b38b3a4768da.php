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

/* page/animal/animal_details.html.twig */
class __TwigTemplate_465a75afa9375bd24b0085306b1c39a9 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "page/animal/animal_details.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Détails de ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["animal"] ?? null), "nom", [], "any", false, false, false, 3), "html", null, true);
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
        yield "    <div class=\"container mt-5\">
        <div class=\"row\">
            <!-- Image de l'animal avec un grand affichage -->
            <div class=\"col-md-6\">
                ";
        // line 10
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["animal"] ?? null), "images", [], "any", false, false, false, 10))) {
            // line 11
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/animals/" . (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["animal"] ?? null), "images", [], "any", false, false, false, 11)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["animal"] ?? null), "nom", [], "any", false, false, false, 11), "html", null, true);
            yield "\" class=\"img-fluid rounded shadow-lg\">
                ";
        } else {
            // line 13
            yield "                <p class=\"text-center\">Aucune image disponible.</p>
                ";
        }
        // line 15
        yield "            </div>

            <div class=\"col-md-6\">
                <h1 class=\"text-center mb-4\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["animal"] ?? null), "nom", [], "any", false, false, false, 18), "html", null, true);
        yield "</h1>

                <ul class=\"list-group\">
                    <li class=\"list-group-item\"><strong>Espèce:</strong> ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["animal"] ?? null), "race", [], "any", false, false, false, 21), "html", null, true);
        yield "</li>
                    <li class=\"list-group-item\"><strong>Habitat:</strong> ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["animal"] ?? null), "habitat", [], "any", false, false, false, 22), "nom", [], "any", false, false, false, 22), "html", null, true);
        yield "</li>
                    <li class=\"list-group-item\"><strong>Alimentation:</strong> ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["animal"] ?? null), "alimentation", [], "any", false, false, false, 23), "html", null, true);
        yield "</li>
                    <li class=\"list-group-item\"><strong>État de santé:</strong> ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["animal"] ?? null), "etatDeSante", [], "any", false, false, false, 24), "html", null, true);
        yield "</li>
                    <li class=\"list-group-item\"><strong>Nombre de vues:</strong> ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["animal"] ?? null), "visites", [], "any", false, false, false, 25), "html", null, true);
        yield "</li>
                </ul>
            </div>
        </div>

        <!-- Galerie d'images -->
        <div class=\"mt-5 d-flex justify-content-center\">
            <div class=\"w-75\">
            <h2 class=\"text-center mb-4\">Galerie d'Images</h2>
            <div class=\"row\">
                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["animal"] ?? null), "images", [], "any", false, false, false, 35));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 36
            yield "                <div class=\"col-md-4 mb-4\">
                    <div class=\"card\">
                    <img src=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/animals/" . $context["image"])), "html", null, true);
            yield "\" class=\"card-img-top\" alt=\"Image de ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["animal"] ?? null), "nom", [], "any", false, false, false, 38), "html", null, true);
            yield "\">
                    </div>
                </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            yield "                <p class=\"text-center\">Aucune image disponible.</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['image'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "            </div>
            </div>
        </div>
    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "page/animal/animal_details.html.twig";
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
        return array (  158 => 44,  151 => 42,  140 => 38,  136 => 36,  131 => 35,  118 => 25,  114 => 24,  110 => 23,  106 => 22,  102 => 21,  96 => 18,  91 => 15,  87 => 13,  79 => 11,  77 => 10,  71 => 6,  64 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "page/animal/animal_details.html.twig", "C:\\xampp\\htdocs\\Arcadia\\templates\\page\\animal\\animal_details.html.twig");
    }
}
