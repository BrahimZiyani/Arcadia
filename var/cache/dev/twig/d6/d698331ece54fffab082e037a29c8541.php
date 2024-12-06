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

/* page/animal/animal_edit.html.twig */
class __TwigTemplate_fbd8950270f8daf0fc5cf8b4694824fd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/animal/animal_edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/animal/animal_edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/animal/animal_edit.html.twig", 1);
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

        yield "Modifier un Animal";
        
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
    <h1>Modifier l'animal : ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 7, $this->source); })()), "nom", [], "any", false, false, false, 7), "html", null, true);
        yield "</h1>

    ";
        // line 9
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start');
        yield "

    ";
        // line 11
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "vars", [], "any", false, false, false, 11), "errors", [], "any", false, false, false, 11)) > 0)) {
            // line 12
            yield "        <div class=\"alert alert-danger\">Le formulaire contient des erreurs, veuillez les corriger.</div>
    ";
        }
        // line 14
        yield "
    <div class=\"form-group\">
        <label for=\"animal_nom\">Nom de l'animal</label>
        ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), "vars", [], "any", false, false, false, 18), "errors", [], "any", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 19
            yield "            <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 19), "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "    </div>

    <div class=\"form-group\">
        <label for=\"animal_race\">Race</label>
        ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "race", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    </div>

    <div class=\"form-group\">
        <label for=\"animal_etatDeSante\">État de Santé</label>
        ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "etatDeSante", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    </div>

    <div class=\"form-group\">
        <label for=\"animal_alimentation\">Alimentation</label>
        ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "alimentation", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    </div>

    <div class=\"form-group\">
        <label for=\"animal_habitat\">Habitat</label>
        ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "habitat", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    </div>

    <div class=\"d-flex justify-content-between mt-3\">
        <button type=\"submit\" class=\"btn btn-warning\">Modifier</button>
    </div>

    ";
        // line 47
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), 'form_end');
        yield "

    <div class=\"form-group mt-5\">
        <label>Images existantes</label>
        <div class=\"d-flex flex-wrap\">
            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 52, $this->source); })()), "images", [], "any", false, false, false, 52));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 53
            yield "                <div class=\"m-2 text-center\">
                    <img src=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/animals/" . $context["image"])), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 54, $this->source); })()), "nom", [], "any", false, false, false, 54), "html", null, true);
            yield "\" class=\"img-thumbnail\" style=\"width: 150px; height: auto;\">
                    <form method=\"post\" action=\"";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animal_remove_image", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55), "image" => Twig\Extension\CoreExtension::urlencode($context["image"])]), "html", null, true);
            yield "\" class=\"mt-2\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_image" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56))), "html", null, true);
            yield "\">
                        <button type=\"submit\" class=\"btn btn-outline-danger btn-sm\">Supprimer</button>
                    </form>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 61
            yield "                <p class=\"text-muted\">Aucune image n'est disponible pour cet animal.</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['image'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "        </div>
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
        return "page/animal/animal_edit.html.twig";
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
        return array (  224 => 63,  217 => 61,  207 => 56,  203 => 55,  197 => 54,  194 => 53,  189 => 52,  181 => 47,  171 => 40,  163 => 35,  155 => 30,  147 => 25,  141 => 21,  132 => 19,  128 => 18,  124 => 17,  119 => 14,  115 => 12,  113 => 11,  108 => 9,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier un Animal{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <h1>Modifier l'animal : {{ animal.nom }}</h1>

    {{ form_start(form) }}

    {% if form.vars.errors|length > 0 %}
        <div class=\"alert alert-danger\">Le formulaire contient des erreurs, veuillez les corriger.</div>
    {% endif %}

    <div class=\"form-group\">
        <label for=\"animal_nom\">Nom de l'animal</label>
        {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}
        {% for error in form.nom.vars.errors %}
            <div class=\"alert alert-danger\">{{ error.message }}</div>
        {% endfor %}
    </div>

    <div class=\"form-group\">
        <label for=\"animal_race\">Race</label>
        {{ form_widget(form.race, {'attr': {'class': 'form-control'}}) }}
    </div>

    <div class=\"form-group\">
        <label for=\"animal_etatDeSante\">État de Santé</label>
        {{ form_widget(form.etatDeSante, {'attr': {'class': 'form-control'}}) }}
    </div>

    <div class=\"form-group\">
        <label for=\"animal_alimentation\">Alimentation</label>
        {{ form_widget(form.alimentation, {'attr': {'class': 'form-control'}}) }}
    </div>

    <div class=\"form-group\">
        <label for=\"animal_habitat\">Habitat</label>
        {{ form_widget(form.habitat, {'attr': {'class': 'form-control'}}) }}
    </div>

    <div class=\"d-flex justify-content-between mt-3\">
        <button type=\"submit\" class=\"btn btn-warning\">Modifier</button>
    </div>

    {{ form_end(form) }}

    <div class=\"form-group mt-5\">
        <label>Images existantes</label>
        <div class=\"d-flex flex-wrap\">
            {% for image in animal.images %}
                <div class=\"m-2 text-center\">
                    <img src=\"{{ asset('uploads/animals/' ~ image) }}\" alt=\"{{ animal.nom }}\" class=\"img-thumbnail\" style=\"width: 150px; height: auto;\">
                    <form method=\"post\" action=\"{{ path('animal_remove_image', { 'id': animal.id, 'image': image|url_encode }) }}\" class=\"mt-2\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_image' ~ animal.id) }}\">
                        <button type=\"submit\" class=\"btn btn-outline-danger btn-sm\">Supprimer</button>
                    </form>
                </div>
            {% else %}
                <p class=\"text-muted\">Aucune image n'est disponible pour cet animal.</p>
            {% endfor %}
        </div>
    </div>
</div>
{% endblock %}
", "page/animal/animal_edit.html.twig", "C:\\xampp\\htdocs\\Arcadia\\templates\\page\\animal\\animal_edit.html.twig");
    }
}
