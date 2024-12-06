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

/* page/legal/conditions_utilisation.html.twig */
class __TwigTemplate_acd7cde921a3a1fdc82ac7286cdf3956 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/legal/conditions_utilisation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/legal/conditions_utilisation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/legal/conditions_utilisation.html.twig", 1);
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
        yield "<h1>Conditions d'utilisation</h1>

<p>Bienvenue sur notre site web. En accédant à ce site, vous acceptez d'être lié par les présentes conditions d'utilisation, toutes les lois et réglementations applicables, et vous acceptez que vous êtes responsable du respect de toutes les lois locales applicables. Si vous n'êtes pas d'accord avec l'une de ces conditions, vous êtes interdit d'utiliser ou d'accéder à ce site. Les matériaux contenus dans ce site web sont protégés par les lois applicables sur le droit d'auteur et les marques de commerce.</p>

<h2>Utilisation de la licence</h2>
<p>La permission est accordée de télécharger temporairement une copie des matériaux (informations ou logiciels) sur le site web de l'entreprise pour une visualisation transitoire personnelle et non commerciale uniquement. Il s'agit de l'octroi d'une licence, non d'un transfert de titre, et sous cette licence, vous ne pouvez pas :</p>
<ul>
    <li>modifier ou copier les matériaux;</li>
    <li>utiliser les matériaux à des fins commerciales, ou pour toute exposition publique (commerciale ou non commerciale);</li>
    <li>tenter de décompiler ou de désosser tout logiciel contenu sur le site web de l'entreprise;</li>
    <li>supprimer tout droit d'auteur ou autres notations de propriété des matériaux; ou</li>
    <li>transférer les matériaux à une autre personne ou \"miroir\" les matériaux sur tout autre serveur.</li>
</ul>

<p>Cette licence prendra automatiquement fin si vous violez l'une de ces restrictions et peut être résiliée par l'entreprise à tout moment. Lors de la résiliation de votre visualisation de ces matériaux ou à la résiliation de cette licence, vous devez détruire tous les matériaux téléchargés en votre possession, que ce soit sous format électronique ou imprimé.</p>

<h2>Clause de non-responsabilité</h2>
<p>Les matériaux sur le site web de l'entreprise sont fournis \"tels quels\". L'entreprise ne donne aucune garantie, expresse ou implicite, et par la présente décline et annule toutes les autres garanties, y compris sans limitation, les garanties implicites ou conditions de qualité marchande, d'adéquation à un usage particulier, ou de non-violation de la propriété intellectuelle ou autre violation des droits. De plus, l'entreprise ne garantit ni ne fait aucune représentation concernant l'exactitude, les résultats probables, ou la fiabilité de l'utilisation des matériaux sur son site web ou autrement liés à ces matériaux ou sur tout site lié à ce site.</p>

<h2>Limitations</h2>
<p>En aucun cas, l'entreprise ou ses fournisseurs ne seront responsables des dommages (y compris, sans limitation, les dommages pour perte de données ou de profit, ou en raison d'une interruption d'activité) résultant de l'utilisation ou de l'incapacité d'utiliser les matériaux sur le site web de l'entreprise, même si l'entreprise ou un représentant autorisé de l'entreprise a été notifié oralement ou par écrit de la possibilité de tels dommages. Parce que certaines juridictions ne permettent pas de limitations sur les garanties implicites, ou des limitations de responsabilité pour les dommages consécutifs ou accessoires, ces limitations peuvent ne pas s'appliquer à vous.</p>

<h2>Révisions et errata</h2>
<p>Les matériaux apparaissant sur le site web de l'entreprise pourraient inclure des erreurs techniques, typographiques ou photographiques. L'entreprise ne garantit pas que les matériaux sur son site web sont exacts, complets ou actuels. L'entreprise peut apporter des modifications aux matériaux contenus sur son site web à tout moment sans préavis. Cependant, l'entreprise ne prend aucun engagement de mettre à jour les matériaux.</p>

<h2>Liens</h2>
<p>L'entreprise n'a pas examiné tous les sites liés à son site web et n'est pas responsable du contenu de ces sites liés. L'inclusion de tout lien n'implique pas l'approbation par l'entreprise du site. L'utilisation de tout site web lié est aux risques et périls de l'utilisateur.</p>

<h2>Modifications des conditions d'utilisation du site</h2>
<p>L'entreprise peut réviser ces conditions d'utilisation de son site web à tout moment sans préavis. En utilisant ce site web, vous acceptez d'être lié par la version actuelle de ces conditions d'utilisation.</p>

<h2>Loi applicable</h2>
<p>Ces conditions sont régies et interprétées conformément aux lois de l'État ou du pays dans lequel l'entreprise est située et vous vous soumettez irrévocablement à la juridiction exclusive des tribunaux de cet État ou lieu.</p>

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
        return "page/legal/conditions_utilisation.html.twig";
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
        return array (  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Conditions d'utilisation{% endblock %}

{% block body %}
<h1>Conditions d'utilisation</h1>

<p>Bienvenue sur notre site web. En accédant à ce site, vous acceptez d'être lié par les présentes conditions d'utilisation, toutes les lois et réglementations applicables, et vous acceptez que vous êtes responsable du respect de toutes les lois locales applicables. Si vous n'êtes pas d'accord avec l'une de ces conditions, vous êtes interdit d'utiliser ou d'accéder à ce site. Les matériaux contenus dans ce site web sont protégés par les lois applicables sur le droit d'auteur et les marques de commerce.</p>

<h2>Utilisation de la licence</h2>
<p>La permission est accordée de télécharger temporairement une copie des matériaux (informations ou logiciels) sur le site web de l'entreprise pour une visualisation transitoire personnelle et non commerciale uniquement. Il s'agit de l'octroi d'une licence, non d'un transfert de titre, et sous cette licence, vous ne pouvez pas :</p>
<ul>
    <li>modifier ou copier les matériaux;</li>
    <li>utiliser les matériaux à des fins commerciales, ou pour toute exposition publique (commerciale ou non commerciale);</li>
    <li>tenter de décompiler ou de désosser tout logiciel contenu sur le site web de l'entreprise;</li>
    <li>supprimer tout droit d'auteur ou autres notations de propriété des matériaux; ou</li>
    <li>transférer les matériaux à une autre personne ou \"miroir\" les matériaux sur tout autre serveur.</li>
</ul>

<p>Cette licence prendra automatiquement fin si vous violez l'une de ces restrictions et peut être résiliée par l'entreprise à tout moment. Lors de la résiliation de votre visualisation de ces matériaux ou à la résiliation de cette licence, vous devez détruire tous les matériaux téléchargés en votre possession, que ce soit sous format électronique ou imprimé.</p>

<h2>Clause de non-responsabilité</h2>
<p>Les matériaux sur le site web de l'entreprise sont fournis \"tels quels\". L'entreprise ne donne aucune garantie, expresse ou implicite, et par la présente décline et annule toutes les autres garanties, y compris sans limitation, les garanties implicites ou conditions de qualité marchande, d'adéquation à un usage particulier, ou de non-violation de la propriété intellectuelle ou autre violation des droits. De plus, l'entreprise ne garantit ni ne fait aucune représentation concernant l'exactitude, les résultats probables, ou la fiabilité de l'utilisation des matériaux sur son site web ou autrement liés à ces matériaux ou sur tout site lié à ce site.</p>

<h2>Limitations</h2>
<p>En aucun cas, l'entreprise ou ses fournisseurs ne seront responsables des dommages (y compris, sans limitation, les dommages pour perte de données ou de profit, ou en raison d'une interruption d'activité) résultant de l'utilisation ou de l'incapacité d'utiliser les matériaux sur le site web de l'entreprise, même si l'entreprise ou un représentant autorisé de l'entreprise a été notifié oralement ou par écrit de la possibilité de tels dommages. Parce que certaines juridictions ne permettent pas de limitations sur les garanties implicites, ou des limitations de responsabilité pour les dommages consécutifs ou accessoires, ces limitations peuvent ne pas s'appliquer à vous.</p>

<h2>Révisions et errata</h2>
<p>Les matériaux apparaissant sur le site web de l'entreprise pourraient inclure des erreurs techniques, typographiques ou photographiques. L'entreprise ne garantit pas que les matériaux sur son site web sont exacts, complets ou actuels. L'entreprise peut apporter des modifications aux matériaux contenus sur son site web à tout moment sans préavis. Cependant, l'entreprise ne prend aucun engagement de mettre à jour les matériaux.</p>

<h2>Liens</h2>
<p>L'entreprise n'a pas examiné tous les sites liés à son site web et n'est pas responsable du contenu de ces sites liés. L'inclusion de tout lien n'implique pas l'approbation par l'entreprise du site. L'utilisation de tout site web lié est aux risques et périls de l'utilisateur.</p>

<h2>Modifications des conditions d'utilisation du site</h2>
<p>L'entreprise peut réviser ces conditions d'utilisation de son site web à tout moment sans préavis. En utilisant ce site web, vous acceptez d'être lié par la version actuelle de ces conditions d'utilisation.</p>

<h2>Loi applicable</h2>
<p>Ces conditions sont régies et interprétées conformément aux lois de l'État ou du pays dans lequel l'entreprise est située et vous vous soumettez irrévocablement à la juridiction exclusive des tribunaux de cet État ou lieu.</p>

{% endblock %}", "page/legal/conditions_utilisation.html.twig", "C:\\xampp\\htdocs\\Arcadia\\templates\\page\\legal\\conditions_utilisation.html.twig");
    }
}
