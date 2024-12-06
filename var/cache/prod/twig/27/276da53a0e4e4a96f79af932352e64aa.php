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

/* page/compte_rendu/compte_rendu_edit.html.twig */
class __TwigTemplate_e368fd5c983fe11d075fb8816e91d58c extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "page/compte_rendu/compte_rendu_edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Modifier un Compte Rendu";
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
    <h1 class=\"mb-4\">Modifier un Compte Rendu</h1>
    <div class=\"card shadow-sm p-4\">
        ";
        // line 9
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        yield "
        
        <div class=\"mb-3\">
            ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "animal", [], "any", false, false, false, 12), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Sélectionnez un animal"]]);
        // line 14
        yield "
        </div>
        <div class=\"mb-3\">
            ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 17), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Date (jj/mm/aaaa)"]]);
        // line 19
        yield "
        </div>
        <div class=\"mb-3\">
            ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "etat", [], "any", false, false, false, 22), 'row', ["attr" => ["class" => "form-control", "placeholder" => "État de santé"]]);
        // line 24
        yield "
        </div>
        <div class=\"mb-3\">
            ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "details", [], "any", false, false, false, 27), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Détails supplémentaires"]]);
        // line 29
        yield "
        </div>

        <div class=\"d-flex justify-content-between\">
            <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\" class=\"btn btn-secondary\">Annuler</a>
            <button type=\"submit\" class=\"btn btn-success\">Enregistrer les modifications</button>
        </div>

        ";
        // line 37
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
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
        return "page/compte_rendu/compte_rendu_edit.html.twig";
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
        return array (  117 => 37,  110 => 33,  104 => 29,  102 => 27,  97 => 24,  95 => 22,  90 => 19,  88 => 17,  83 => 14,  81 => 12,  75 => 9,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "page/compte_rendu/compte_rendu_edit.html.twig", "C:\\xampp\\htdocs\\Arcadia\\templates\\page\\compte_rendu\\compte_rendu_edit.html.twig");
    }
}
