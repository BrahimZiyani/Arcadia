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
class __TwigTemplate_695d9f0cefab56b87f917cc9a2d66bba extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/habitats/habitat_details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/habitats/habitat_details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/habitats/habitat_details.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Détails de ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["habitat"]) || array_key_exists("habitat", $context) ? $context["habitat"] : (function () { throw new RuntimeError('Variable "habitat" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <div class=\"container mt-5\">
        <div class=\"row\">
            <!-- Image de l'habitat avec un grand affichage -->
            <div class=\"col-md-6\">
                ";
        // line 10
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["habitat"]) || array_key_exists("habitat", $context) ? $context["habitat"] : (function () { throw new RuntimeError('Variable "habitat" does not exist.', 10, $this->source); })()), "images", [], "any", false, false, false, 10))) {
            // line 11
            yield "                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/habitats/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["habitat"]) || array_key_exists("habitat", $context) ? $context["habitat"] : (function () { throw new RuntimeError('Variable "habitat" does not exist.', 11, $this->source); })()), "images", [], "any", false, false, false, 11), 0, [], "array", false, false, false, 11))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["habitat"]) || array_key_exists("habitat", $context) ? $context["habitat"] : (function () { throw new RuntimeError('Variable "habitat" does not exist.', 11, $this->source); })()), "nom", [], "any", false, false, false, 11), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["habitat"]) || array_key_exists("habitat", $context) ? $context["habitat"] : (function () { throw new RuntimeError('Variable "habitat" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), "html", null, true);
        yield "</h1>

                <p>";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["habitat"]) || array_key_exists("habitat", $context) ? $context["habitat"] : (function () { throw new RuntimeError('Variable "habitat" does not exist.', 23, $this->source); })()), "description", [], "any", false, false, false, 23), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["habitat"]) || array_key_exists("habitat", $context) ? $context["habitat"] : (function () { throw new RuntimeError('Variable "habitat" does not exist.', 32, $this->source); })()), "images", [], "any", false, false, false, 32));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 33
            yield "                        <div class=\"col-md-4 mb-4\">
                            <div class=\"card\">
                                <img src=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/habitats/" . $context["image"])), "html", null, true);
            yield "\" class=\"card-img-top\" alt=\"Image de ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["habitat"]) || array_key_exists("habitat", $context) ? $context["habitat"] : (function () { throw new RuntimeError('Variable "habitat" does not exist.', 35, $this->source); })()), "nom", [], "any", false, false, false, 35), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["animals"]) || array_key_exists("animals", $context) ? $context["animals"] : (function () { throw new RuntimeError('Variable "animals" does not exist.', 48, $this->source); })()));
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/animals/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "images", [], "any", false, false, false, 56), 0, [], "array", false, false, false, 56))), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  240 => 70,  233 => 68,  223 => 63,  219 => 62,  216 => 61,  212 => 59,  204 => 56,  199 => 55,  197 => 54,  192 => 52,  187 => 49,  182 => 48,  173 => 41,  166 => 39,  155 => 35,  151 => 33,  146 => 32,  134 => 23,  129 => 21,  124 => 18,  117 => 13,  109 => 11,  107 => 10,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de {{ habitat.nom }}{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"row\">
            <!-- Image de l'habitat avec un grand affichage -->
            <div class=\"col-md-6\">
                {% if habitat.images is not empty %}
                    <img src=\"{{ asset('uploads/habitats/' ~ habitat.images[0]) }}\" alt=\"{{ habitat.nom }}\" class=\"img-fluid rounded shadow-lg\">
                {% else %}
                    <div class=\"d-flex align-items-center justify-content-center bg-light\" 
                         style=\"height: 200px; color: #6c757d; font-size: 14px;\">
                        Pas d'image disponible
                    </div>
                {% endif %}
            </div>

            <div class=\"col-md-6\">
                <h1 class=\"text-center mb-4\">{{ habitat.nom }}</h1>

                <p>{{ habitat.description }}</p>
            </div>
        </div>

        <!-- Galerie d'images -->
        <div class=\"mt-5 d-flex justify-content-center\">
            <div class=\"w-75\">
                <h2 class=\"text-center mb-4\">Galerie d'Images</h2>
                <div class=\"row\">
                    {% for image in habitat.images %}
                        <div class=\"col-md-4 mb-4\">
                            <div class=\"card\">
                                <img src=\"{{ asset('uploads/habitats/' ~ image) }}\" class=\"card-img-top\" alt=\"Image de {{ habitat.nom }}\">
                            </div>
                        </div>
                    {% else %}
                        <p class=\"text-center\">Aucune image disponible.</p>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
        <!-- Section des animaux -->
    <h2>Animaux dans cet habitat</h2>
    <div class=\"row\">
        {% for animal in animals %}
            <div class=\"col-md-4 mb-4\">
                <div class=\"card shadow-sm\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ animal.nom }}</h5>

                        {% if animal.images|length > 0 %}
                            <a href=\"{{ path('animal_details', {'id': animal.id}) }}\">
                                <img src=\"{{ asset('uploads/animals/' ~ animal.images[0]) }}\" alt=\"{{ animal.nom }}\" class=\"img-fluid mb-3\">
                            </a>
                        {% else %}
                            <p class=\"text-muted\">Pas d'image disponible</p>
                        {% endif %}
                        
                        <p>Race : {{ animal.race }}</p>
                        <p>État de santé : {{ animal.etatDeSante }}</p>
                    </div>
                </div>
            </div>
        {% else %}
            <p class=\"text-center col-12\">Aucun animal trouvé dans cet habitat.</p>
        {% endfor %}
    </div>
{% endblock %}", "page/habitats/habitat_details.html.twig", "C:\\xampp\\htdocs\\Arcadia\\templates\\page\\habitats\\habitat_details.html.twig");
    }
}
