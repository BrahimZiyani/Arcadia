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

/* user/new.html.twig */
class __TwigTemplate_e6d4a4ee630eddc4f1fdb57851639927 extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "user/new.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Créer un nouvel utilisateur";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "<div class=\"container mt-5\">
    <h1 class=\"text-center mb-4\">Créer un nouvel utilisateur</h1>

    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card shadow-lg rounded\">
                <div class=\"card-header bg-primary text-white text-center\">
                    <h4 class=\"mb-0\">Formulaire d'inscription</h4>
                </div>

                <div class=\"card-body\">
                    ";
        // line 20
        yield "                    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        yield "

                    <div class=\"form-group mb-3\">
                        ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 23), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom"]);
        yield "
                        ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 25), 'errors');
        yield "
                    </div>

                    <div class=\"form-group mb-3\">
                        ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", false, false, false, 29), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Prénom"]);
        yield "
                        ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", false, false, false, 31), 'errors');
        yield "
                    </div>

                    <div class=\"form-group mb-3\">
                        ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 35), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Email"]);
        yield "
                        ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 37), 'errors');
        yield "
                    </div>

                    <div class=\"form-group mb-3\">
                        ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 41), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Mot de passe"]);
        yield "
                        ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control", "type" => "password"]]);
        yield "
                        ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 43), 'errors');
        yield "
                    </div>

                    <div class=\"form-group mb-3\">
                        ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "roles", [], "any", false, false, false, 47), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Rôles"]);
        yield "
                        <div class=\"form-check mb-2\">
                            ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "roles", [], "any", false, false, false, 49), 0, [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
                            ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "roles", [], "any", false, false, false, 50), 0, [], "any", false, false, false, 50), 'label', ["label_attr" => ["class" => "form-check-label"], "label" => "Administrateur"]);
        yield "
                        </div>
                        <div class=\"form-check mb-2\">
                            ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "roles", [], "any", false, false, false, 53), 1, [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
                            ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "roles", [], "any", false, false, false, 54), 1, [], "any", false, false, false, 54), 'label', ["label_attr" => ["class" => "form-check-label"], "label" => "Vétérinaire"]);
        yield "
                        </div>
                        <div class=\"form-check mb-2\">
                            ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "roles", [], "any", false, false, false, 57), 2, [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
                            ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "roles", [], "any", false, false, false, 58), 2, [], "any", false, false, false, 58), 'label', ["label_attr" => ["class" => "form-check-label"], "label" => "Employé"]);
        yield "
                        </div>
                        ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "roles", [], "any", false, false, false, 60), 'errors');
        yield "
                    </div>

                    <div class=\"text-center\">
                        <button type=\"submit\" class=\"btn btn-primary w-50\">Créer</button>
                        <a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"btn btn-secondary w-50 mt-2\">Annuler</a>
                    </div>

                    ";
        // line 68
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
                    ";
        // line 70
        yield "                </div>
            </div>
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
        return "user/new.html.twig";
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
        return array (  202 => 70,  198 => 68,  192 => 65,  184 => 60,  179 => 58,  175 => 57,  169 => 54,  165 => 53,  159 => 50,  155 => 49,  150 => 47,  143 => 43,  139 => 42,  135 => 41,  128 => 37,  124 => 36,  120 => 35,  113 => 31,  109 => 30,  105 => 29,  98 => 25,  94 => 24,  90 => 23,  83 => 20,  70 => 8,  63 => 7,  52 => 5,  41 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "user/new.html.twig", "C:\\xampp\\htdocs\\Arcadia\\templates\\user\\new.html.twig");
    }
}
