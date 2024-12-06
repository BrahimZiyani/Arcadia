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

/* page/confidentialité/confidentialite.html.twig */
class __TwigTemplate_11ec8c4b94fe39f1834cfbc5e19fe124 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/confidentialité/confidentialite.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/confidentialité/confidentialite.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/confidentialité/confidentialite.html.twig", 1);
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

        yield "Politique de confidentialité";
        
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
    <h1 class=\"text-center mb-4\">Politique de confidentialité</h1>
    <p class=\"text-muted\">Dernière mise à jour : ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y"), "html", null, true);
        yield "</p>

    <h2>1. Introduction</h2>
    <p>
        Nous respectons votre vie privée et nous engageons à protéger les informations personnelles que vous nous fournissez.
    </p>

    <h2>2. Données collectées</h2>
    <p>
        Nous collectons les données suivantes :
        <ul>
            <li>Nom et prénom (si vous vous inscrivez).</li>
            <li>Adresse e-mail (pour la communication).</li>
            <li>Adresse IP (pour des raisons de sécurité).</li>
        </ul>
    </p>

    <h2>3. Utilisation des données</h2>
    <p>
        Les données collectées sont utilisées pour :
        <ul>
            <li>Gérer vos demandes et services.</li>
            <li>Améliorer l'expérience utilisateur.</li>
            <li>Garantir la sécurité du site.</li>
        </ul>
    </p>

    <h2>4. Partage des données</h2>
    <p>
        Vos données ne seront jamais partagées avec des tiers sans votre consentement, sauf obligation légale.
    </p>

    <h2>5. Vos droits</h2>
    <p>
        Vous avez le droit de :
        <ul>
            <li>Accéder à vos données.</li>
            <li>Corriger ou supprimer vos données.</li>
            <li>Vous opposer au traitement de vos données.</li>
        </ul>
    </p>

    <h2>6. Sécurité</h2>
    <p>
        Nous mettons en œuvre des mesures de sécurité pour protéger vos données contre tout accès non autorisé.
    </p>

    <h2>7. Contact</h2>
    <p>
        Pour toute question concernant notre politique de confidentialité, <a href=\"";
        // line 57
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
        return "page/confidentialité/confidentialite.html.twig";
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
        return array (  156 => 57,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Politique de confidentialité{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <h1 class=\"text-center mb-4\">Politique de confidentialité</h1>
    <p class=\"text-muted\">Dernière mise à jour : {{ \"now\"|date(\"d/m/Y\") }}</p>

    <h2>1. Introduction</h2>
    <p>
        Nous respectons votre vie privée et nous engageons à protéger les informations personnelles que vous nous fournissez.
    </p>

    <h2>2. Données collectées</h2>
    <p>
        Nous collectons les données suivantes :
        <ul>
            <li>Nom et prénom (si vous vous inscrivez).</li>
            <li>Adresse e-mail (pour la communication).</li>
            <li>Adresse IP (pour des raisons de sécurité).</li>
        </ul>
    </p>

    <h2>3. Utilisation des données</h2>
    <p>
        Les données collectées sont utilisées pour :
        <ul>
            <li>Gérer vos demandes et services.</li>
            <li>Améliorer l'expérience utilisateur.</li>
            <li>Garantir la sécurité du site.</li>
        </ul>
    </p>

    <h2>4. Partage des données</h2>
    <p>
        Vos données ne seront jamais partagées avec des tiers sans votre consentement, sauf obligation légale.
    </p>

    <h2>5. Vos droits</h2>
    <p>
        Vous avez le droit de :
        <ul>
            <li>Accéder à vos données.</li>
            <li>Corriger ou supprimer vos données.</li>
            <li>Vous opposer au traitement de vos données.</li>
        </ul>
    </p>

    <h2>6. Sécurité</h2>
    <p>
        Nous mettons en œuvre des mesures de sécurité pour protéger vos données contre tout accès non autorisé.
    </p>

    <h2>7. Contact</h2>
    <p>
        Pour toute question concernant notre politique de confidentialité, <a href=\"{{ path('app_contact') }}\">contactez-nous</a>.
    </p>
</div>
{% endblock %}
", "page/confidentialité/confidentialite.html.twig", "C:\\xampp\\htdocs\\Arcadia\\templates\\page\\confidentialité\\confidentialite.html.twig");
    }
}
