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
class __TwigTemplate_0c0c1a5ba56ba625b78db6f071a8477b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/animal/animal_details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/animal/animal_details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/animal/animal_details.html.twig", 1);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), "html", null, true);
        
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
            <!-- Image de l'animal avec un grand affichage -->
            <div class=\"col-md-6\">
                ";
        // line 10
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 10, $this->source); })()), "images", [], "any", false, false, false, 10))) {
            // line 11
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/animals/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 11, $this->source); })()), "images", [], "any", false, false, false, 11), 0, [], "array", false, false, false, 11))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 11, $this->source); })()), "nom", [], "any", false, false, false, 11), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), "html", null, true);
        yield "</h1>

                <ul class=\"list-group\">
                    <li class=\"list-group-item\"><strong>Espèce:</strong> ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 21, $this->source); })()), "race", [], "any", false, false, false, 21), "html", null, true);
        yield "</li>
                    <li class=\"list-group-item\"><strong>Habitat:</strong> ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 22, $this->source); })()), "habitat", [], "any", false, false, false, 22), "nom", [], "any", false, false, false, 22), "html", null, true);
        yield "</li>
                    <li class=\"list-group-item\"><strong>Alimentation:</strong> ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 23, $this->source); })()), "alimentation", [], "any", false, false, false, 23), "html", null, true);
        yield "</li>
                    <li class=\"list-group-item\"><strong>État de santé:</strong> ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 24, $this->source); })()), "etatDeSante", [], "any", false, false, false, 24), "html", null, true);
        yield "</li>
                    <li class=\"list-group-item\"><strong>Nombre de vues:</strong> ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 25, $this->source); })()), "visites", [], "any", false, false, false, 25), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 35, $this->source); })()), "images", [], "any", false, false, false, 35));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 36
            yield "                <div class=\"col-md-4 mb-4\">
                    <div class=\"card\">
                    <img src=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/animals/" . $context["image"])), "html", null, true);
            yield "\" class=\"card-img-top\" alt=\"Image de ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 38, $this->source); })()), "nom", [], "any", false, false, false, 38), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  188 => 44,  181 => 42,  170 => 38,  166 => 36,  161 => 35,  148 => 25,  144 => 24,  140 => 23,  136 => 22,  132 => 21,  126 => 18,  121 => 15,  117 => 13,  109 => 11,  107 => 10,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de {{ animal.nom }}{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"row\">
            <!-- Image de l'animal avec un grand affichage -->
            <div class=\"col-md-6\">
                {% if animal.images is not empty %}
                <img src=\"{{ asset('uploads/animals/' ~ animal.images[0]) }}\" alt=\"{{ animal.nom }}\" class=\"img-fluid rounded shadow-lg\">
                {% else %}
                <p class=\"text-center\">Aucune image disponible.</p>
                {% endif %}
            </div>

            <div class=\"col-md-6\">
                <h1 class=\"text-center mb-4\">{{ animal.nom }}</h1>

                <ul class=\"list-group\">
                    <li class=\"list-group-item\"><strong>Espèce:</strong> {{ animal.race }}</li>
                    <li class=\"list-group-item\"><strong>Habitat:</strong> {{ animal.habitat.nom }}</li>
                    <li class=\"list-group-item\"><strong>Alimentation:</strong> {{ animal.alimentation }}</li>
                    <li class=\"list-group-item\"><strong>État de santé:</strong> {{ animal.etatDeSante }}</li>
                    <li class=\"list-group-item\"><strong>Nombre de vues:</strong> {{ animal.visites }}</li>
                </ul>
            </div>
        </div>

        <!-- Galerie d'images -->
        <div class=\"mt-5 d-flex justify-content-center\">
            <div class=\"w-75\">
            <h2 class=\"text-center mb-4\">Galerie d'Images</h2>
            <div class=\"row\">
                {% for image in animal.images %}
                <div class=\"col-md-4 mb-4\">
                    <div class=\"card\">
                    <img src=\"{{ asset('uploads/animals/' ~ image) }}\" class=\"card-img-top\" alt=\"Image de {{ animal.nom }}\">
                    </div>
                </div>
                {% else %}
                <p class=\"text-center\">Aucune image disponible.</p>
                {% endfor %}
            </div>
            </div>
        </div>
    </div>
{% endblock %}
", "page/animal/animal_details.html.twig", "C:\\xampp\\htdocs\\Arcadia\\templates\\page\\animal\\animal_details.html.twig");
    }
}
