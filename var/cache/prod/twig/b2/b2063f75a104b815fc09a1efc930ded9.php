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

/* page/animal/animal_new.html.twig */
class __TwigTemplate_053bae7fab3f6a46a3e196e7a18baef5 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "page/animal/animal_new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Ajouter un Animal";
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
    <h1 class=\"text-center text-uppercase font-weight-bold mb-5\" style=\"color: #2a9d8f;\">Ajouter un nouvel animal</h1>

    <div class=\"card shadow-lg border-0 rounded p-4\" style=\"background-color: #f8f9fa;\">
        ";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        yield " ";
        // line 11
        yield "
        <!-- Nom -->
        <div class=\"form-group mb-3\">
            <label for=\"animal_nom\" class=\"form-label\">Nom de l'animal</label>
            ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex : Simba"]]);
        yield "
        </div>
        
        <!-- Race -->
        <div class=\"form-group mb-3\">
            <label for=\"animal_race\" class=\"form-label\">Race</label>
            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "race", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex : Lion"]]);
        yield "
        </div>

        <!-- Habitat -->
        <div class=\"form-group mb-3\">
            <label for=\"animal_habitat\" class=\"form-label\">Habitat</label>
            ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "habitat", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        </div>

        <!-- État de santé -->
        <div class=\"form-group mb-3\">
            <label for=\"animal_etatDeSante\" class=\"form-label\">État de santé</label>
            ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "etatDeSante", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex : Très bon"]]);
        yield "
        </div>

        <!-- Alimentation -->
        <div class=\"form-group mb-3\">
            <label for=\"animal_alimentation\" class=\"form-label\">Alimentation</label>
            ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "alimentation", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex : Viande"]]);
        yield "
        </div>

        <!-- Images -->
        <div class=\"form-group mb-3\">
            <label for=\"animal_uploadImages\" class=\"form-label\">Ajouter des images</label>
            ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "uploadImages", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control-file"]]);
        yield "
            <small class=\"form-text text-muted\">Vous pouvez ajouter plusieurs images (formats acceptés : JPG, PNG, GIF).</small>
        </div>

        <!-- Boutons -->
        <div class=\"d-flex justify-content-between mt-4\">
            <button type=\"reset\" class=\"btn btn-outline-secondary\">Réinitialiser</button>
            <button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>
        </div>

        ";
        // line 55
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield " ";
        // line 56
        yield "    </div>
</div>

<!-- Styles -->
<style>
    .btn-primary {
        background-color: #2a9d8f;
        border: none;
        text-transform: uppercase;
        font-weight: bold;
    }

    .btn-primary:hover {
        background-color: #21867a;
    }

    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }
</style>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "page/animal/animal_new.html.twig";
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
        return array (  146 => 56,  143 => 55,  130 => 45,  121 => 39,  112 => 33,  103 => 27,  94 => 21,  85 => 15,  79 => 11,  76 => 10,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "page/animal/animal_new.html.twig", "C:\\xampp\\htdocs\\Arcadia\\templates\\page\\animal\\animal_new.html.twig");
    }
}
