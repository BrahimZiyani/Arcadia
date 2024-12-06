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

/* page/animal/show.html.twig */
class __TwigTemplate_1654ee2cef2605141c8031ae38790023 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "page/animal/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Liste des Animaux";
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
    <h1>Liste des Animaux</h1>

    ";
        // line 9
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["animalsByHabitat"] ?? null))) {
            // line 10
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["animalsByHabitat"] ?? null));
            foreach ($context['_seq'] as $context["habitat"] => $context["animals"]) {
                // line 11
                yield "            <h2 class=\"mt-4\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["habitat"], "html", null, true);
                yield "</h2>
            <div class=\"row\">
                ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["animals"]);
                foreach ($context['_seq'] as $context["_key"] => $context["animal"]) {
                    // line 14
                    yield "                    <div class=\"col-md-4 mb-4\">
                        <div class=\"card\">
                            ";
                    // line 16
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "images", [], "any", false, false, false, 16) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "images", [], "any", false, false, false, 16)) > 0))) {
                        // line 17
                        yield "                                <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/animals/" . (($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "images", [], "any", false, false, false, 17)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null))), "html", null, true);
                        yield "\" class=\"card-img-top\" alt=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "nom", [], "any", false, false, false, 17), "html", null, true);
                        yield "\">
                            ";
                    } else {
                        // line 19
                        yield "                                <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-animal.jpg"), "html", null, true);
                        yield "\" class=\"card-img-top\" alt=\"Image par défaut\">
                            ";
                    }
                    // line 21
                    yield "                            <div class=\"card-body\">
                                <h5 class=\"card-title\">";
                    // line 22
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "nom", [], "any", false, false, false, 22), "html", null, true);
                    yield "</h5>
                                <p class=\"card-text\">Race : ";
                    // line 23
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "race", [], "any", false, false, false, 23), "html", null, true);
                    yield "</p>
                                <p class=\"card-text\">État de santé : ";
                    // line 24
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "etatDeSante", [], "any", false, false, false, 24), "html", null, true);
                    yield "</p>
                                
                                <!-- Bouton Plus de détails -->
                                <a href=\"";
                    // line 27
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animal_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "id", [], "any", false, false, false, 27)]), "html", null, true);
                    yield "\" class=\"btn btn-info btn-sm\">Plus de détails</a>
                                
                                <!-- Bouton Modifier uniquement pour les utilisateurs connectés -->
                                ";
                    // line 30
                    if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
                        // line 31
                        yield "                                    <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animal_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "id", [], "any", false, false, false, 31)]), "html", null, true);
                        yield "\" class=\"btn btn-primary btn-sm\">Modifier</a>
                                ";
                    }
                    // line 33
                    yield "                            </div>
                        </div>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['animal'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                yield "            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['habitat'], $context['animals'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            yield "    ";
        } else {
            // line 40
            yield "        <p>Aucun animal trouvé.</p>
    ";
        }
        // line 42
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "page/animal/show.html.twig";
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
        return array (  166 => 42,  162 => 40,  159 => 39,  152 => 37,  143 => 33,  137 => 31,  135 => 30,  129 => 27,  123 => 24,  119 => 23,  115 => 22,  112 => 21,  106 => 19,  98 => 17,  96 => 16,  92 => 14,  88 => 13,  82 => 11,  77 => 10,  75 => 9,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "page/animal/show.html.twig", "C:\\xampp\\htdocs\\Arcadia\\templates\\page\\animal\\show.html.twig");
    }
}
