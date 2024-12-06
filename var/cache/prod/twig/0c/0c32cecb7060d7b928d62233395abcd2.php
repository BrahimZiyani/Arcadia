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

/* page/habitats/habitat_details.html.twig */
class __TwigTemplate_709c1a5088186f2b3aec5d2b525fae5a extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "page/habitats/habitat_details.html.twig", 1);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["habitat"] ?? null), "nom", [], "any", false, false, false, 3), "html", null, true);
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
            <!-- Image de l'habitat avec un grand affichage -->
            <div class=\"col-md-6\">
                ";
        // line 10
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["habitat"] ?? null), "images", [], "any", false, false, false, 10))) {
            // line 11
            yield "                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/habitats/" . (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["habitat"] ?? null), "images", [], "any", false, false, false, 11)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["habitat"] ?? null), "nom", [], "any", false, false, false, 11), "html", null, true);
            yield "\" class=\"img-fluid rounded shadow-lg\">
                ";
        } else {
            // line 13
            yield "                    <div class=\"d-flex align-items-center justify-content-center bg-light\" 
                         style=\"height: 200px; color: #6c757d; font-size: 14px;\">
                        Pas d'image disponible
                    </div>
                ";
        }
        // line 18
        yield "            </div>

            <div class=\"col-md-6\">
                <h1 class=\"text-center mb-4\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["habitat"] ?? null), "nom", [], "any", false, false, false, 21), "html", null, true);
        yield "</h1>

                <p>";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["habitat"] ?? null), "description", [], "any", false, false, false, 23), "html", null, true);
        yield "</p>
            </div>
        </div>

        <!-- Galerie d'images -->
        <div class=\"mt-5 d-flex justify-content-center\">
            <div class=\"w-75\">
                <h2 class=\"text-center mb-4\">Galerie d'Images</h2>
                <div class=\"row\">
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["habitat"] ?? null), "images", [], "any", false, false, false, 32));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 33
            yield "                        <div class=\"col-md-4 mb-4\">
                            <div class=\"card\">
                                <img src=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/habitats/" . $context["image"])), "html", null, true);
            yield "\" class=\"card-img-top\" alt=\"Image de ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["habitat"] ?? null), "nom", [], "any", false, false, false, 35), "html", null, true);
            yield "\">
                            </div>
                        </div>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            yield "                        <p class=\"text-center\">Aucune image disponible.</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['image'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "                </div>
            </div>
        </div>
    </div>
        <!-- Section des animaux -->
    <h2>Animaux dans cet habitat</h2>
    <div class=\"row\">
        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["animals"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["animal"]) {
            // line 49
            yield "            <div class=\"col-md-4 mb-4\">
                <div class=\"card shadow-sm\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "nom", [], "any", false, false, false, 52), "html", null, true);
            yield "</h5>

                        ";
            // line 54
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "images", [], "any", false, false, false, 54)) > 0)) {
                // line 55
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animal_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                yield "\">
                                <img src=\"";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/animals/" . (($_v1 = CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "images", [], "any", false, false, false, 56)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[0] ?? null) : null))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "nom", [], "any", false, false, false, 56), "html", null, true);
                yield "\" class=\"img-fluid mb-3\">
                            </a>
                        ";
            } else {
                // line 59
                yield "                            <p class=\"text-muted\">Pas d'image disponible</p>
                        ";
            }
            // line 61
            yield "                        
                        <p>Race : ";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "race", [], "any", false, false, false, 62), "html", null, true);
            yield "</p>
                        <p>État de santé : ";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "etatDeSante", [], "any", false, false, false, 63), "html", null, true);
            yield "</p>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 68
            yield "            <p class=\"text-center col-12\">Aucun animal trouvé dans cet habitat.</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['animal'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        yield "    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "page/habitats/habitat_details.html.twig";
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
        return array (  210 => 70,  203 => 68,  193 => 63,  189 => 62,  186 => 61,  182 => 59,  174 => 56,  169 => 55,  167 => 54,  162 => 52,  157 => 49,  152 => 48,  143 => 41,  136 => 39,  125 => 35,  121 => 33,  116 => 32,  104 => 23,  99 => 21,  94 => 18,  87 => 13,  79 => 11,  77 => 10,  71 => 6,  64 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "page/habitats/habitat_details.html.twig", "C:\\xampp\\htdocs\\Arcadia\\templates\\page\\habitats\\habitat_details.html.twig");
    }
}
