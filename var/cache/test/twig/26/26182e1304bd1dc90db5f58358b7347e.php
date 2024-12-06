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

/* page/conditions/conditions.html.twig */
class __TwigTemplate_c67bdd61a1d9c4abd4e1e8a31fa1de09 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/conditions/conditions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/conditions/conditions.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/conditions/conditions.html.twig", 1);
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

        yield "Conditions d'utilisation";
        
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
    <h1 class=\"text-center mb-4\">Conditions d'utilisation</h1>
    <p class=\"text-muted\">Dernière mise à jour : ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y"), "html", null, true);
        yield "</p>

    <h2>1. Acceptation des conditions</h2>
    <p>
        En accédant à ce site, vous acceptez d'être lié par les présentes conditions d'utilisation. Si vous n'acceptez pas ces termes, veuillez ne pas utiliser notre site.
    </p>

    <h2>2. Description des services</h2>
    <p>
        Ce site est destiné à fournir des informations sur les animaux et leurs habitats. Il propose également des services liés à la gestion d'un zoo.
    </p>

    <h2>3. Utilisation acceptable</h2>
    <p>
        Vous vous engagez à utiliser ce site uniquement à des fins légales. Toute tentative de piratage ou d'utilisation malveillante est strictement interdite.
    </p>

    <h2>4. Propriété intellectuelle</h2>
    <p>
        Tous les contenus de ce site (images, textes, vidéos) sont protégés par les lois sur la propriété intellectuelle. Toute reproduction sans autorisation est interdite.
    </p>

    <h2>5. Modifications des conditions</h2>
    <p>
        Nous nous réservons le droit de modifier ces conditions à tout moment. Les utilisateurs seront informés de ces changements via une notification sur le site.
    </p>

    <h2>6. Contact</h2>
    <p>
        Pour toute question concernant ces conditions, veuillez nous contacter à l'adresse suivante : <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\">contactez-nous</a>.
    </p>
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
        return "page/conditions/conditions.html.twig";
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
        return array (  136 => 37,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Conditions d'utilisation{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <h1 class=\"text-center mb-4\">Conditions d'utilisation</h1>
    <p class=\"text-muted\">Dernière mise à jour : {{ \"now\"|date(\"d/m/Y\") }}</p>

    <h2>1. Acceptation des conditions</h2>
    <p>
        En accédant à ce site, vous acceptez d'être lié par les présentes conditions d'utilisation. Si vous n'acceptez pas ces termes, veuillez ne pas utiliser notre site.
    </p>

    <h2>2. Description des services</h2>
    <p>
        Ce site est destiné à fournir des informations sur les animaux et leurs habitats. Il propose également des services liés à la gestion d'un zoo.
    </p>

    <h2>3. Utilisation acceptable</h2>
    <p>
        Vous vous engagez à utiliser ce site uniquement à des fins légales. Toute tentative de piratage ou d'utilisation malveillante est strictement interdite.
    </p>

    <h2>4. Propriété intellectuelle</h2>
    <p>
        Tous les contenus de ce site (images, textes, vidéos) sont protégés par les lois sur la propriété intellectuelle. Toute reproduction sans autorisation est interdite.
    </p>

    <h2>5. Modifications des conditions</h2>
    <p>
        Nous nous réservons le droit de modifier ces conditions à tout moment. Les utilisateurs seront informés de ces changements via une notification sur le site.
    </p>

    <h2>6. Contact</h2>
    <p>
        Pour toute question concernant ces conditions, veuillez nous contacter à l'adresse suivante : <a href=\"{{ path('app_contact') }}\">contactez-nous</a>.
    </p>
</div>
{% endblock %}
", "page/conditions/conditions.html.twig", "C:\\xampp\\htdocs\\Arcadia\\templates\\page\\conditions\\conditions.html.twig");
    }
}
