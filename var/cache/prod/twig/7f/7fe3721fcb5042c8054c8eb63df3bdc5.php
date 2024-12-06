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

/* page/security/login.html.twig */
class __TwigTemplate_568ae426bfb3ab821881fb53f88a57de extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "page/security/login.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Connexion Staff";
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
        yield "<div class=\"container mt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6\">
            <h1 class=\"text-center\">Vous êtes employé par le Zoo ?</h1>
            <p class=\"text-center\">Connectez-vous</p>
            <form action=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login_check");
        yield "\" method=\"post\">
                <div class=\"mb-3\">
                    <label for=\"email\" class=\"form-label\">Adresse email</label>
                    <input type=\"email\" class=\"form-control\" id=\"email\" name=\"_username\" value=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["last_email"] ?? null), "html", null, true);
        yield "\" placeholder=\"Entrez votre adresse email\" required autofocus>
                </div>
                <div class=\"mb-3\">
                    <label for=\"password\" class=\"form-label\">Mot de passe</label>
                    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" placeholder=\"Entrez votre mot de passe\" required>
                </div>
                
                ";
        // line 21
        if (($context["error"] ?? null)) {
            // line 22
            yield "                    <div class=\"alert alert-danger\">
                        ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 23), CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 23), "security"), "html", null, true);
            yield "
                    </div>
                ";
        }
        // line 26
        yield "                
                <div class=\"d-grid\">
                    <button type=\"submit\" class=\"btn btn-dark btn-lg\">Connexion</button>
                </div>
            </form>
        </div>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "page/security/login.html.twig";
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
        return array (  104 => 26,  98 => 23,  95 => 22,  93 => 21,  83 => 14,  77 => 11,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "page/security/login.html.twig", "C:\\xampp\\htdocs\\Arcadia\\templates\\page\\security\\login.html.twig");
    }
}
