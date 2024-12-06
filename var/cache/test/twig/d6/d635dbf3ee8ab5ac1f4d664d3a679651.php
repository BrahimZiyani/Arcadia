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
class __TwigTemplate_39ba5a0a2a25a15db9c9aa5b11eae09f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/services/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/services/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/services/index.html.twig", 1);
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

        yield "Nos Services";
        
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
    <h2 class=\"text-center mb-4\" style=\"color: #2A9D8F; font-weight: bold;\">Découvrez Nos Services</h2>
    
    <div class=\"row justify-content-center\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 10, $this->source); })()));
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/services/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["service"], "images", [], "any", false, false, false, 14), 0, [], "array", false, false, false, 14))), "html", null, true);
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["service"], "description", [], "any", false, false, false, 27)) > 100)) ? ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["service"], "description", [], "any", false, false, false, 27), 0, 100) . "...")) : (CoreExtension::getAttribute($this->env, $this->source, $context["service"], "description", [], "any", false, false, false, 27))), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  171 => 41,  162 => 37,  152 => 32,  144 => 27,  139 => 25,  136 => 24,  129 => 19,  123 => 16,  117 => 14,  115 => 13,  111 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nos Services{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <h2 class=\"text-center mb-4\" style=\"color: #2A9D8F; font-weight: bold;\">Découvrez Nos Services</h2>
    
    <div class=\"row justify-content-center\">
        {% for service in services %}
            <div class=\"col-md-4 mb-4\">
                <div class=\"card h-100 shadow-sm border-0 rounded-lg\">
                    {% if service.images is not empty %}
                        <img src=\"{{ asset('uploads/services/' ~ service.images[0]) }}\" 
                             class=\"card-img-top rounded-top\" 
                             alt=\"Image de {{ service.nom }}\" 
                             style=\"height: 200px; object-fit: cover;\">
                    {% else %}
                        <div class=\"d-flex align-items-center justify-content-center bg-light\" 
                             style=\"height: 200px; color: #6c757d; font-size: 14px;\">
                            Pas d'image disponible
                        </div>
                    {% endif %}
                    <div class=\"card-body text-center\">
                        <h5 class=\"card-title\" style=\"color: #2A9D8F; font-weight: bold;\">{{ service.nom }}</h5>
                        <p class=\"card-text text-muted\">
                            {{ service.description|length > 100 ? service.description|slice(0, 100) ~ '...' : service.description }}
                        </p>
                    </div>
                    <div class=\"card-footer bg-white border-0 text-center\">
                        <!-- Corrige le lien vers les détails -->
                        <a href=\"{{ path('service_index', { 'id': service.id }) }}\" class=\"btn btn-outline-primary btn-sm\">En savoir plus</a>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-12\">
                <p class=\"text-center text-muted\">Aucun service disponible pour le moment.</p>
            </div>
        {% endfor %}
    </div>
</div>
{% endblock %}
", "page/services/index.html.twig", "C:\\xampp\\htdocs\\Arcadia\\templates\\page\\services\\index.html.twig");
    }
}
