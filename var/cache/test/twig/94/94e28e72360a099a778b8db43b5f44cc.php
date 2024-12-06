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

/* base.html.twig */
class __TwigTemplate_64953433834c5d3f8a8102753ceb0d8b extends Template
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

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/LogoArcadia.png"), "html", null, true);
        yield "\">
    <title>Arcadia</title>

    <!-- Google Fonts pour Roboto -->
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap\" rel=\"stylesheet\">

    <!-- Bootstrap CSS depuis un CDN -->
    <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" rel=\"stylesheet\">

    ";
        // line 14
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 17
        yield "</head>
<body>
<!-- Barre de navigation -->
<nav class=\"navbar navbar-expand-lg navbar-light\" style=\"background-color: #F1FAEE;\">
    <div class=\"container\">
        <!-- Logo et Nom -->
        <a class=\"navbar-brand d-flex align-items-center\" href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
            <img src=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/LogoArcadia.png"), "html", null, true);
        yield "\" height=\"50px\" alt=\"Logo Arcadia\">
            <h3 class=\"ml-2 font-weight-bold\" style=\"color: #2A9D8F; font-family: 'Roboto', sans-serif;\">ARCADIA</h3>
        </a>

        <!-- Bouton responsive pour les mobiles -->
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <!-- Liens du menu -->
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav ml-auto align-items-center\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" style=\"color: #353535;\">Accueil</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitats");
        yield "\" style=\"color: #353535;\">Nos Habitats</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animal_show");
        yield "\" style=\"color: #353535;\">Nos Animaux</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
        yield "\" style=\"color: #353535;\">Nos Services</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis");
        yield "\" style=\"color: #353535;\">Vos Avis</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" style=\"color: #353535;\">Contactez-nous</a>
                </li>
                <!-- Gestion des boutons connexion/déconnexion -->
                <li class=\"nav-item d-flex align-items-center\">
                    ";
        // line 56
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 57
            yield "                        <a class=\"btn text-white mr-2\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            yield "\" 
                        style=\"background-color: #2A9D8F; width: 120px;\">Profil</a>
                        <a class=\"btn text-white\" href=\"";
            // line 59
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" 
                        style=\"background-color: #353535; width: 120px;\">Déconnexion</a>
                    ";
        } else {
            // line 62
            yield "                        <a class=\"btn text-white px-3\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" 
                        style=\"background-color: #2A9D8F;\">Connexion Staff</a>
                    ";
        }
        // line 65
        yield "                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- Contenu principal -->
<div class=\"container mt-4\">
    ";
        // line 74
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 75
        yield "</div>

<!-- Pied de page -->
<footer class=\"mt-5 text-center\" style=\"background-color: #F1FAEE; color: #353535;\">
    <div class=\"container\">
        <div class=\"row\">
            <!-- Liens rapides -->
            <div class=\"col\">
                <p><a href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" style=\"color: #2A9D8F;\">Nous contacter</a></p>
            </div>
            <div class=\"col\">
                <p><a href=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conditions");
        yield "\" style=\"color: #2A9D8F;\">Conditions d'utilisation</a></p>
            </div>
            <div class=\"col\">
                <p><a href=\"";
        // line 89
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_confidentialite");
        yield "\" style=\"color: #2A9D8F;\">Politique de confidentialité</a></p>
            </div>
        </div>
        <!-- Texte du copyright -->
        <div class=\"row mt-3\">
            <div class=\"col\">
                <p>&copy; 2024 Arcadia Zoo</p>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts nécessaires pour Bootstrap -->
<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>

<!-- Scripts supplémentaires -->
";
        // line 107
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 110
        yield "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        yield "        ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        yield "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 74
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 107
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 108
        yield "    ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        yield "
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
        return "base.html.twig";
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
        return array (  290 => 108,  277 => 107,  255 => 74,  241 => 15,  228 => 14,  215 => 110,  213 => 107,  192 => 89,  186 => 86,  180 => 83,  170 => 75,  168 => 74,  157 => 65,  150 => 62,  144 => 59,  138 => 57,  136 => 56,  129 => 52,  123 => 49,  117 => 46,  111 => 43,  105 => 40,  99 => 37,  83 => 24,  79 => 23,  71 => 17,  69 => 14,  57 => 5,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('/images/LogoArcadia.png') }}\">
    <title>Arcadia</title>

    <!-- Google Fonts pour Roboto -->
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap\" rel=\"stylesheet\">

    <!-- Bootstrap CSS depuis un CDN -->
    <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" rel=\"stylesheet\">

    {% block stylesheets %}
        {{ encore_entry_link_tags('app') }}
    {% endblock %}
</head>
<body>
<!-- Barre de navigation -->
<nav class=\"navbar navbar-expand-lg navbar-light\" style=\"background-color: #F1FAEE;\">
    <div class=\"container\">
        <!-- Logo et Nom -->
        <a class=\"navbar-brand d-flex align-items-center\" href=\"{{ path('app_home') }}\">
            <img src=\"{{ asset('/images/LogoArcadia.png') }}\" height=\"50px\" alt=\"Logo Arcadia\">
            <h3 class=\"ml-2 font-weight-bold\" style=\"color: #2A9D8F; font-family: 'Roboto', sans-serif;\">ARCADIA</h3>
        </a>

        <!-- Bouton responsive pour les mobiles -->
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <!-- Liens du menu -->
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav ml-auto align-items-center\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_home') }}\" style=\"color: #353535;\">Accueil</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_habitats') }}\" style=\"color: #353535;\">Nos Habitats</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('animal_show') }}\" style=\"color: #353535;\">Nos Animaux</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_services') }}\" style=\"color: #353535;\">Nos Services</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_avis') }}\" style=\"color: #353535;\">Vos Avis</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_contact') }}\" style=\"color: #353535;\">Contactez-nous</a>
                </li>
                <!-- Gestion des boutons connexion/déconnexion -->
                <li class=\"nav-item d-flex align-items-center\">
                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                        <a class=\"btn text-white mr-2\" href=\"{{ path('app_profile') }}\" 
                        style=\"background-color: #2A9D8F; width: 120px;\">Profil</a>
                        <a class=\"btn text-white\" href=\"{{ path('app_logout') }}\" 
                        style=\"background-color: #353535; width: 120px;\">Déconnexion</a>
                    {% else %}
                        <a class=\"btn text-white px-3\" href=\"{{ path('app_login') }}\" 
                        style=\"background-color: #2A9D8F;\">Connexion Staff</a>
                    {% endif %}
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- Contenu principal -->
<div class=\"container mt-4\">
    {% block body %}{% endblock %}
</div>

<!-- Pied de page -->
<footer class=\"mt-5 text-center\" style=\"background-color: #F1FAEE; color: #353535;\">
    <div class=\"container\">
        <div class=\"row\">
            <!-- Liens rapides -->
            <div class=\"col\">
                <p><a href=\"{{ path('app_contact') }}\" style=\"color: #2A9D8F;\">Nous contacter</a></p>
            </div>
            <div class=\"col\">
                <p><a href=\"{{ path('app_conditions') }}\" style=\"color: #2A9D8F;\">Conditions d'utilisation</a></p>
            </div>
            <div class=\"col\">
                <p><a href=\"{{ path('app_confidentialite') }}\" style=\"color: #2A9D8F;\">Politique de confidentialité</a></p>
            </div>
        </div>
        <!-- Texte du copyright -->
        <div class=\"row mt-3\">
            <div class=\"col\">
                <p>&copy; 2024 Arcadia Zoo</p>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts nécessaires pour Bootstrap -->
<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>

<!-- Scripts supplémentaires -->
{% block javascripts %}
    {{ encore_entry_script_tags('app') }}
{% endblock %}
</body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\Arcadia\\templates\\base.html.twig");
    }
}
