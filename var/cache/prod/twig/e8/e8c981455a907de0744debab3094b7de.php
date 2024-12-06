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

/* page/legal/politique_confidentialite.html.twig */
class __TwigTemplate_4737c7f6282bef31b817dba29bdd18aa extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "page/legal/politique_confidentialite.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Politique de Confidentialité";
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
        yield "<h1>Politique de Confidentialité</h1>
<p>Bienvenue sur notre page de Politique de Confidentialité. Votre confidentialité est très importante pour nous. Cette politique explique comment nous collectons, utilisons, divulguons et protégeons vos informations personnelles.</p>

<h2>Collecte des informations</h2>
<p>Nous collectons des informations uniquement pour le staff lorsque vous vous abonnez à notre newsletter ou remplissez un formulaire d'avis. Les informations collectées incluent votre nom, adresse e-mail.</p>

<h2>Utilisation des informations</h2>
<p>Toutes les informations que nous recueillons auprès de vous peuvent être utilisées pour :</p>
<ul>
    <li>Personnaliser votre expérience et répondre à vos besoins individuels</li>
    <li>Améliorer notre site web</li>
    <li>Améliorer le service client et vos besoins de prise en charge</li>
    <li>Vous contacter par e-mail</li>
    <li>Administrer un concours, une promotion, ou une enquête</li>
</ul>

<h2>Divulgation à des tiers</h2>
<p>Nous ne vendons, n'échangeons et ne transférons pas vos informations personnelles identifiables à des tiers. Cela ne comprend pas les tierce parties de confiance qui nous aident à exploiter notre site Web ou à mener nos affaires, tant que ces parties conviennent de garder ces informations confidentielles.</p>

<h2>Protection des informations</h2>
<p>Nous mettons en œuvre une variété de mesures de sécurité pour préserver la sécurité de vos informations personnelles. Nous utilisons un cryptage à la pointe de la technologie pour protéger les informations sensibles transmises en ligne. Nous protégeons également vos informations hors ligne. Seuls les employés qui ont besoin d'effectuer un travail spécifique (par exemple, la facturation ou le service à la clientèle) ont accès aux informations personnelles identifiables.</p>

<h2>Consentement</h2>
<p>En utilisant notre site, vous consentez à notre politique de confidentialité.</p>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "page/legal/politique_confidentialite.html.twig";
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
        return array (  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "page/legal/politique_confidentialite.html.twig", "C:\\xampp\\htdocs\\Arcadia\\templates\\page\\legal\\politique_confidentialite.html.twig");
    }
}
