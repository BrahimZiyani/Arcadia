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

/* page/avis/avis.html.twig */
class __TwigTemplate_9b479b89392d91a47ac0da5f47e747e7 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "page/avis/avis.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Avis des visiteurs - Arcadia";
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
        yield "    <div class=\"row\">
        <div class=\"col-lg-8 mb-4\">
            <h1 class=\"border-bottom pb-2 mb-4\" style=\"color: #2A9D8F;\">Avis des visiteurs</h1>
            
            ";
        // line 11
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["avis_success"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            yield "                <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                    <i class=\"fas fa-check-circle me-2\"></i>
                    ";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "
            ";
        // line 20
        yield "            <div class=\"row\">
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["avisValides"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["avis"]) {
            // line 22
            yield "                    <div class=\"col-md-6 mb-4\">
                        <div class=\"card h-100 shadow-sm\" style=\"border: 1px solid #E0E0E0; background-color: #F1FAEE;\">
                            <div class=\"card-body\">
                                <div class=\"d-flex justify-content-between align-items-center mb-2\">
                                    <h5 class=\"card-title mb-0\" style=\"color: #2A9D8F;\">";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "prenom", [], "any", false, false, false, 26), "html", null, true);
            yield "</h5>
                                    <small class=\"text-muted\">
                                        <i class=\"far fa-calendar-alt me-1\"></i>
                                        ";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "dateVisite", [], "any", false, false, false, 29), "d/m/Y"), "html", null, true);
            yield "
                                    </small>
                                </div>
                                <p class=\"card-text\" style=\"color: #353535;\">";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "contenu", [], "any", false, false, false, 32), "html", null, true);
            yield "</p>
                            </div>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            yield "                    <div class=\"col\">
                        <div class=\"alert alert-info\">
                            <i class=\"fas fa-info-circle me-2\"></i>
                            Aucun avis n'a encore été publié.
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['avis'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "            </div>

            ";
        // line 47
        yield "            <div class=\"d-flex justify-content-center mt-4\">
                ";
        // line 48
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, ($context["avisValides"] ?? null), "@KnpPaginator/Pagination/bootstrap_v5_pagination.html.twig");
        yield "
            </div>
        </div>

        <div class=\"col-lg-4\">
            <div class=\"card shadow-sm\">
                <div class=\"card-header text-white\" style=\"background-color: #2A9D8F;\">
                    <h3 class=\"card-title h5 mb-0\">
                        <i class=\"fas fa-pen me-2\"></i>
                        Partagez votre expérience
                    </h3>
                </div>
                <div class=\"card-body\">
                    ";
        // line 61
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        yield "

                        <div class=\"mb-3\">
                            ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", false, false, false, 64), 'label', ["label_attr" => ["style" => "color: #353535;"]]);
        yield "
                            ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", false, false, false, 66), 'errors');
        yield "
                        </div>

                        <div class=\"mb-3\">
                            ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateVisite", [], "any", false, false, false, 70), 'label', ["label_attr" => ["style" => "color: #353535;"]]);
        yield "
                            ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateVisite", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateVisite", [], "any", false, false, false, 72), 'errors');
        yield "
                        </div>

                        <div class=\"mb-3\">
                            ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "contenu", [], "any", false, false, false, 76), 'label', ["label_attr" => ["style" => "color: #353535;"]]);
        yield "
                            ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "contenu", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "form-control", "rows" => "5"]]);
        yield "
                            ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "contenu", [], "any", false, false, false, 78), 'errors');
        yield "
                        </div>

                        <button type=\"submit\" class=\"btn text-white w-100\" style=\"background-color: #2A9D8F;\">
                            <i class=\"fas fa-paper-plane me-2\"></i>
                            Envoyer mon avis
                        </button>
                        
                    ";
        // line 86
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
                </div>
                <div class=\"card-footer text-muted\">
                    <small>
                        <i class=\"fas fa-info-circle me-1\"></i>
                        Votre avis sera publié après validation par notre équipe.
                    </small>
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
        return "page/avis/avis.html.twig";
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
        return array (  224 => 86,  213 => 78,  209 => 77,  205 => 76,  198 => 72,  194 => 71,  190 => 70,  183 => 66,  179 => 65,  175 => 64,  169 => 61,  153 => 48,  150 => 47,  146 => 44,  134 => 37,  124 => 32,  118 => 29,  112 => 26,  106 => 22,  101 => 21,  98 => 20,  95 => 18,  85 => 14,  81 => 12,  76 => 11,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "page/avis/avis.html.twig", "C:\\xampp\\htdocs\\Arcadia\\templates\\page\\avis\\avis.html.twig");
    }
}
