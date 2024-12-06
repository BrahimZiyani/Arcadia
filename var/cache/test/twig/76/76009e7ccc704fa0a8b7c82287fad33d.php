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
class __TwigTemplate_980aac3c710efb21a25718cf93f2a4e9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/index.html.twig", 1);
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

        yield "Accueil";
        
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
        yield "
    <!-- Swiper-->
    <div id=\"react-root\"></div>
    <div class=\"container\">

        <!-- Section des avis des visiteurs -->
        <div class=\"mt-5\">
            <h2 class=\"text-center\" style=\"color: #2A9D8F;\">Avis des visiteurs</h2>
            <p class=\"text-center\" style=\"color: #353535;\">Retour en direct de nos visiteurs !</p>
            <div class=\"row justify-content-center\">
                ";
        // line 16
        if ((array_key_exists("avisList", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["avisList"]) || array_key_exists("avisList", $context) ? $context["avisList"] : (function () { throw new RuntimeError('Variable "avisList" does not exist.', 16, $this->source); })())) > 0))) {
            // line 17
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["avisList"]) || array_key_exists("avisList", $context) ? $context["avisList"] : (function () { throw new RuntimeError('Variable "avisList" does not exist.', 17, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["avis"]) {
                // line 18
                yield "                        <div class=\"col-md-4 mb-3 d-flex align-items-stretch\">
                            <div class=\"card shadow-sm\" style=\"border: 1px solid #E0E0E0; background-color: #F1FAEE;\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\" style=\"color: #2A9D8F;\">";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "prenom", [], "any", false, false, false, 21), "html", null, true);
                yield "</h5>
                                    <p class=\"card-text\" style=\"color: #353535;\">";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "contenu", [], "any", false, false, false, 22), "html", null, true);
                yield "</p>
                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['avis'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            yield "                ";
        } else {
            // line 28
            yield "                    <p class=\"text-center\" style=\"color: #353535;\">Aucun avis disponible pour le moment.</p>
                ";
        }
        // line 30
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

        <!-- Section de la newsletter -->
        <div class=\"mt-5 text-center\">
            <h2 style=\"color: #2A9D8F;\">Inscrivez-vous à notre newsletter</h2>
            <p style=\"color: #353535;\">Pour ne rien rater des actualités du Zoo !</p>
            <form class=\"form-inline justify-content-center\">
                <div class=\"form-group mb-2\">
                    <label for=\"email\" class=\"sr-only\">Email</label>
                    <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Entrez votre email\" style=\"border: 1px solid #2A9D8F;\">
                </div>
                <div class=\"form-group mx-sm-3 mb-2\">
                    <label for=\"name\" class=\"sr-only\">Nom</label>
                    <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Entrez votre nom\" style=\"border: 1px solid #2A9D8F;\">
                </div>
                <button type=\"submit\" class=\"btn text-white mb-2\" style=\"background-color: #2A9D8F;\">Inscription</button>
            </form>
        </div>

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
        return array (  146 => 30,  142 => 28,  139 => 27,  128 => 22,  124 => 21,  119 => 18,  114 => 17,  112 => 16,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}

    <!-- Swiper-->
    <div id=\"react-root\"></div>
    <div class=\"container\">

        <!-- Section des avis des visiteurs -->
        <div class=\"mt-5\">
            <h2 class=\"text-center\" style=\"color: #2A9D8F;\">Avis des visiteurs</h2>
            <p class=\"text-center\" style=\"color: #353535;\">Retour en direct de nos visiteurs !</p>
            <div class=\"row justify-content-center\">
                {% if avisList is defined and avisList|length > 0 %}
                    {% for avis in avisList %}
                        <div class=\"col-md-4 mb-3 d-flex align-items-stretch\">
                            <div class=\"card shadow-sm\" style=\"border: 1px solid #E0E0E0; background-color: #F1FAEE;\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\" style=\"color: #2A9D8F;\">{{ avis.prenom }}</h5>
                                    <p class=\"card-text\" style=\"color: #353535;\">{{ avis.contenu }}</p>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                {% else %}
                    <p class=\"text-center\" style=\"color: #353535;\">Aucun avis disponible pour le moment.</p>
                {% endif %}
            </div>
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

        <!-- Section de la newsletter -->
        <div class=\"mt-5 text-center\">
            <h2 style=\"color: #2A9D8F;\">Inscrivez-vous à notre newsletter</h2>
            <p style=\"color: #353535;\">Pour ne rien rater des actualités du Zoo !</p>
            <form class=\"form-inline justify-content-center\">
                <div class=\"form-group mb-2\">
                    <label for=\"email\" class=\"sr-only\">Email</label>
                    <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Entrez votre email\" style=\"border: 1px solid #2A9D8F;\">
                </div>
                <div class=\"form-group mx-sm-3 mb-2\">
                    <label for=\"name\" class=\"sr-only\">Nom</label>
                    <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Entrez votre nom\" style=\"border: 1px solid #2A9D8F;\">
                </div>
                <button type=\"submit\" class=\"btn text-white mb-2\" style=\"background-color: #2A9D8F;\">Inscription</button>
            </form>
        </div>

    </div>
{% endblock %}
", "page/index.html.twig", "C:\\xampp\\htdocs\\Arcadia\\templates\\page\\index.html.twig");
    }
}
