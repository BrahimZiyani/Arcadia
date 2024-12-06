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
class __TwigTemplate_82f0f8574b3373f0ba555b438345d501 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/animal/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/animal/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/animal/show.html.twig", 1);
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

        yield "Liste des Animaux";
        
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
        yield "<div class=\"container mt-5\">
    <h1>Liste des Animaux</h1>

    ";
        // line 9
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["animalsByHabitat"]) || array_key_exists("animalsByHabitat", $context) ? $context["animalsByHabitat"] : (function () { throw new RuntimeError('Variable "animalsByHabitat" does not exist.', 9, $this->source); })()))) {
            // line 10
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["animalsByHabitat"]) || array_key_exists("animalsByHabitat", $context) ? $context["animalsByHabitat"] : (function () { throw new RuntimeError('Variable "animalsByHabitat" does not exist.', 10, $this->source); })()));
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
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/animals/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "images", [], "any", false, false, false, 17), 0, [], "array", false, false, false, 17))), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  196 => 42,  192 => 40,  189 => 39,  182 => 37,  173 => 33,  167 => 31,  165 => 30,  159 => 27,  153 => 24,  149 => 23,  145 => 22,  142 => 21,  136 => 19,  128 => 17,  126 => 16,  122 => 14,  118 => 13,  112 => 11,  107 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Animaux{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <h1>Liste des Animaux</h1>

    {% if animalsByHabitat is not empty %}
        {% for habitat, animals in animalsByHabitat %}
            <h2 class=\"mt-4\">{{ habitat }}</h2>
            <div class=\"row\">
                {% for animal in animals %}
                    <div class=\"col-md-4 mb-4\">
                        <div class=\"card\">
                            {% if animal.images and animal.images|length > 0 %}
                                <img src=\"{{ asset('uploads/animals/' ~ animal.images[0]) }}\" class=\"card-img-top\" alt=\"{{ animal.nom }}\">
                            {% else %}
                                <img src=\"{{ asset('images/default-animal.jpg') }}\" class=\"card-img-top\" alt=\"Image par défaut\">
                            {% endif %}
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">{{ animal.nom }}</h5>
                                <p class=\"card-text\">Race : {{ animal.race }}</p>
                                <p class=\"card-text\">État de santé : {{ animal.etatDeSante }}</p>
                                
                                <!-- Bouton Plus de détails -->
                                <a href=\"{{ path('animal_details', { id: animal.id }) }}\" class=\"btn btn-info btn-sm\">Plus de détails</a>
                                
                                <!-- Bouton Modifier uniquement pour les utilisateurs connectés -->
                                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                                    <a href=\"{{ path('animal_edit', { id: animal.id }) }}\" class=\"btn btn-primary btn-sm\">Modifier</a>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% endfor %}
    {% else %}
        <p>Aucun animal trouvé.</p>
    {% endif %}
</div>
{% endblock %}
", "page/animal/show.html.twig", "C:\\xampp\\htdocs\\Arcadia\\templates\\page\\animal\\show.html.twig");
    }
}
