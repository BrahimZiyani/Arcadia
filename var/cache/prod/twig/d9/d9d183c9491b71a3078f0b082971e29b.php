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

/* page/index.html.twig */
class __TwigTemplate_3d699beb35206186775411c1655def97 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "page/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Accueil";
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
        yield "    ";
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 10
        yield "    <div id=\"react-root\"></div>
    <div class=\"container\">

        <!-- Section des avis des visiteurs -->
        <div class=\"mt-5\">
            <h2 class=\"text-center\" style=\"color: #2A9D8F;\">Avis des visiteurs</h2>
            <p class=\"text-center\" style=\"color: #353535;\">Retour en direct de nos visiteurs !</p>
            <div class=\"row justify-content-center\">
                ";
        // line 18
        if ((array_key_exists("avisList", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["avisList"] ?? null)) > 0))) {
            // line 19
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["avisList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["avis"]) {
                // line 20
                yield "                        <div class=\"col-md-4 mb-3 d-flex align-items-stretch\">
                            <div class=\"card shadow-sm\" style=\"border: 1px solid #E0E0E0; background-color: #F1FAEE;\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\" style=\"color: #2A9D8F;\">";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "prenom", [], "any", false, false, false, 23), "html", null, true);
                yield "</h5>
                                    <p class=\"card-text\" style=\"color: #353535;\">";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "contenu", [], "any", false, false, false, 24), "html", null, true);
                yield "</p>
                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['avis'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            yield "                ";
        } else {
            // line 30
            yield "                    <p class=\"text-center\" style=\"color: #353535;\">Aucun avis disponible pour le moment.</p>
                ";
        }
        // line 32
        yield "            </div>
        </div>

        <!-- Section de l'histoire du Zoo -->
        <div class=\"mt-5\">
            <h2 class=\"text-center\" style=\"color: #2A9D8F;\">L'histoire du Zoo</h2>
            <p class=\"text-center\" style=\"color: #353535;\">Découvrez l'histoire fascinante de notre Zoo, depuis sa création jusqu'à aujourd'hui.</p>
            <div class=\"row justify-content-center\">
                <div class=\"col-md-8\">
                    <div class=\"card shadow-sm\" style=\"border: 1px solid #E0E0E0; background-color: #F1FAEE;\">
                        <div class=\"card-body\">
                            <p style=\"color: #353535;\">Notre Zoo a été fondé en 1920 par un groupe de passionnés d'animaux. Depuis lors, il a évolué pour devenir l'un des principaux centres de conservation et d'éducation sur la faune dans le pays. Avec plus de 500 espèces d'animaux, notre Zoo offre une expérience unique et éducative pour les visiteurs de tous âges.</p>
                            <p style=\"color: #353535;\">Au fil des années, nous avons développé de nombreux programmes de conservation et de recherche pour protéger les espèces menacées et sensibiliser le public à l'importance de la biodiversité. Nous sommes fiers de notre héritage et nous nous engageons à continuer à offrir un environnement sûr et enrichissant pour nos animaux et nos visiteurs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "        ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
        <link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/react.css"), "html", null, true);
        yield "\">
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "page/index.html.twig";
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
        return array (  155 => 8,  150 => 7,  143 => 6,  118 => 32,  114 => 30,  111 => 29,  100 => 24,  96 => 23,  91 => 20,  86 => 19,  84 => 18,  74 => 10,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "page/index.html.twig", "C:\\xampp\\htdocs\\Arcadia\\templates\\page\\index.html.twig");
    }
}
