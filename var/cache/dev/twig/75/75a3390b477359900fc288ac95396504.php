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

/* page/avis/index.html.twig */
class __TwigTemplate_4d5f2f2cc4c93d0a282e4ac82b44a83b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/avis/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/avis/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/avis/index.html.twig", 1);
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

        yield "Liste des avis";
        
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
        yield "    <div class=\"container mt-4\">
        <h1>Liste des avis</h1>
        <div class=\"row mt-4\">
            <div class=\"col-md-8 offset-md-2\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["avisValides"]) || array_key_exists("avisValides", $context) ? $context["avisValides"] : (function () { throw new RuntimeError('Variable "avisValides" does not exist.', 10, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["avis"]) {
            // line 11
            yield "                    <div class=\"card mb-4\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "pseudo", [], "any", false, false, false, 13), "html", null, true);
            yield "</h5>
                            <p class=\"card-text\">";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "texte", [], "any", false, false, false, 14), "html", null, true);
            yield "</p>
                            <form method=\"post\" action=\"";
            // line 15
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avis_index");
            yield "\">
                                <input type=\"hidden\" name=\"avis_id\" value=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "id", [], "any", false, false, false, 16), "html", null, true);
            yield "\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" type=\"radio\" name=\"is_valid\" id=\"valid";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "id", [], "any", false, false, false, 18), "html", null, true);
            yield "\" value=\"1\" ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "isValid", [], "any", false, false, false, 18)) {
                yield "checked";
            }
            yield ">
                                    <label class=\"form-check-label\" for=\"valid";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "id", [], "any", false, false, false, 19), "html", null, true);
            yield "\">
                                        Valider
                                    </label>
                                </div>
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" type=\"radio\" name=\"is_valid\" id=\"invalid";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "id", [], "any", false, false, false, 24), "html", null, true);
            yield "\" value=\"0\" ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "isValid", [], "any", false, false, false, 24)) {
                yield "checked";
            }
            yield ">
                                    <label class=\"form-check-label\" for=\"invalid";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "id", [], "any", false, false, false, 25), "html", null, true);
            yield "\">
                                        Invalider
                                    </label>
                                </div>
                                <button type=\"submit\" class=\"btn btn-primary mt-2\">Mettre à jour</button>
                            </form>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            yield "                    <p>Aucun avis n'a été trouvé.</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['avis'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "            </div>
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
        return "page/avis/index.html.twig";
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
        return array (  177 => 36,  170 => 34,  156 => 25,  148 => 24,  140 => 19,  132 => 18,  127 => 16,  123 => 15,  119 => 14,  115 => 13,  111 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des avis{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <h1>Liste des avis</h1>
        <div class=\"row mt-4\">
            <div class=\"col-md-8 offset-md-2\">
                {% for avis in avisValides %}
                    <div class=\"card mb-4\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{ avis.pseudo }}</h5>
                            <p class=\"card-text\">{{ avis.texte }}</p>
                            <form method=\"post\" action=\"{{ path('avis_index') }}\">
                                <input type=\"hidden\" name=\"avis_id\" value=\"{{ avis.id }}\">
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" type=\"radio\" name=\"is_valid\" id=\"valid{{ avis.id }}\" value=\"1\" {% if avis.isValid %}checked{% endif %}>
                                    <label class=\"form-check-label\" for=\"valid{{ avis.id }}\">
                                        Valider
                                    </label>
                                </div>
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" type=\"radio\" name=\"is_valid\" id=\"invalid{{ avis.id }}\" value=\"0\" {% if not avis.isValid %}checked{% endif %}>
                                    <label class=\"form-check-label\" for=\"invalid{{ avis.id }}\">
                                        Invalider
                                    </label>
                                </div>
                                <button type=\"submit\" class=\"btn btn-primary mt-2\">Mettre à jour</button>
                            </form>
                        </div>
                    </div>
                {% else %}
                    <p>Aucun avis n'a été trouvé.</p>
                {% endfor %}
            </div>
        </div>
    </div>
{% endblock %}
", "page/avis/index.html.twig", "C:\\xampp\\htdocs\\Arcadia\\templates\\page\\avis\\index.html.twig");
    }
}
