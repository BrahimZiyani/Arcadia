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

/* page/profile.html.twig */
class __TwigTemplate_0f27532496c46614d931b001d8772d67 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/profile.html.twig", 1);
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

        yield "Mon Profil";
        
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
        yield "<div class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col-md-3 text-center\">
            ";
        // line 9
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9)) {
            // line 10
            yield "                <h4 class=\"mt-3\">
                    ";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "nom", [], "any", false, false, false, 11), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "prenom", [], "any", false, false, false, 11), "html", null, true);
            yield "
                    <p class=\"text-muted\">
                        ";
            // line 13
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "roles", [], "any", false, false, false, 13))) {
                // line 14
                yield "                            Administrateur
                        ";
            } elseif (CoreExtension::inFilter("ROLE_VETERINAIRE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 15
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "roles", [], "any", false, false, false, 15))) {
                // line 16
                yield "                            Vétérinaire
                        ";
            } elseif (CoreExtension::inFilter("ROLE_EMPLOYE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 17
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "roles", [], "any", false, false, false, 17))) {
                // line 18
                yield "                            Employé
                        ";
            } else {
                // line 20
                yield "                            Aucun rôle défini
                        ";
            }
            // line 22
            yield "                    </p>
                </h4>
            ";
        } else {
            // line 25
            yield "                <p>Utilisateur non connecté.</p>
            ";
        }
        // line 27
        yield "        </div>

        <div class=\"col-md-9\">
            <!-- Section de Statistiques -->
            <h2 class=\"mb-4\">Rapports Vétérinaire</h2>
            <div class=\"row text-center mb-4\">
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([["count" => Twig\Extension\CoreExtension::length($this->env->getCharset(),         // line 34
(isset($context["compteRendus"]) || array_key_exists("compteRendus", $context) ? $context["compteRendus"] : (function () { throw new RuntimeError('Variable "compteRendus" does not exist.', 34, $this->source); })())), "text" => "Nombre de rapports", "class" => "text-primary"], ["count" => Twig\Extension\CoreExtension::length($this->env->getCharset(),         // line 35
(isset($context["habitats"]) || array_key_exists("habitats", $context) ? $context["habitats"] : (function () { throw new RuntimeError('Variable "habitats" does not exist.', 35, $this->source); })())), "text" => "Nombre d'Habitats", "class" => "text-success"], ["count" => Twig\Extension\CoreExtension::length($this->env->getCharset(),         // line 36
(isset($context["animals"]) || array_key_exists("animals", $context) ? $context["animals"] : (function () { throw new RuntimeError('Variable "animals" does not exist.', 36, $this->source); })())), "text" => "Nombre d'Animaux", "class" => "text-warning"]]);
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 38
            yield "                    <div class=\"col-md-3\">
                        <div class=\"card shadow-sm border-0\">
                            <div class=\"card-body\">
                                <h4 class=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "class", [], "any", false, false, false, 41), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "count", [], "any", false, false, false, 41), "html", null, true);
            yield "</h4>
                                <p class=\"text-muted\">";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "text", [], "any", false, false, false, 42), "html", null, true);
            yield "</p>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['stat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "            </div>

            <!-- Section de Création de Rapport -->
            ";
        // line 50
        if ((CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "roles", [], "any", false, false, false, 50)) || CoreExtension::inFilter("ROLE_VETERINAIRE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "roles", [], "any", false, false, false, 50)))) {
            // line 51
            yield "                <h2 class=\"mb-4\">Créer un compte rendu</h2>
                <div class=\"card p-4 shadow-sm\">
                    ";
            // line 53
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCompteRendu"]) || array_key_exists("formCompteRendu", $context) ? $context["formCompteRendu"] : (function () { throw new RuntimeError('Variable "formCompteRendu" does not exist.', 53, $this->source); })()), 'form_start');
            yield "
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            ";
            // line 56
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompteRendu"]) || array_key_exists("formCompteRendu", $context) ? $context["formCompteRendu"] : (function () { throw new RuntimeError('Variable "formCompteRendu" does not exist.', 56, $this->source); })()), "animal", [], "any", false, false, false, 56), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Sélectionnez un animal"]]);
            yield "
                        </div>
                        <div class=\"col-md-6\">
                            ";
            // line 59
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompteRendu"]) || array_key_exists("formCompteRendu", $context) ? $context["formCompteRendu"] : (function () { throw new RuntimeError('Variable "formCompteRendu" does not exist.', 59, $this->source); })()), "date", [], "any", false, false, false, 59), 'row', ["attr" => ["class" => "form-control", "placeholder" => "jj/mm/aaaa"]]);
            yield "
                        </div>
                    </div>
                    <div class=\"row mt-3\">
                        <div class=\"col-md-6\">
                            ";
            // line 64
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompteRendu"]) || array_key_exists("formCompteRendu", $context) ? $context["formCompteRendu"] : (function () { throw new RuntimeError('Variable "formCompteRendu" does not exist.', 64, $this->source); })()), "etat", [], "any", false, false, false, 64), 'row', ["attr" => ["class" => "form-control", "placeholder" => "État de santé"]]);
            yield "
                        </div>
                        <div class=\"col-md-6\">
                            ";
            // line 67
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCompteRendu"]) || array_key_exists("formCompteRendu", $context) ? $context["formCompteRendu"] : (function () { throw new RuntimeError('Variable "formCompteRendu" does not exist.', 67, $this->source); })()), "details", [], "any", false, false, false, 67), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Détails du rapport"]]);
            yield "
                        </div>
                    </div>
                    <div class=\"d-flex justify-content-between mt-4\">
                        <button type=\"reset\" class=\"btn btn-outline-secondary px-4\">Recommencer</button>
                        <button type=\"submit\" class=\"btn btn-dark px-4\">Créer</button>
                    </div>
                    ";
            // line 74
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCompteRendu"]) || array_key_exists("formCompteRendu", $context) ? $context["formCompteRendu"] : (function () { throw new RuntimeError('Variable "formCompteRendu" does not exist.', 74, $this->source); })()), 'form_end');
            yield "
                </div>
            ";
        }
        // line 77
        yield "
            <!-- Section de Liste des Comptes Rendus -->
            <h3 class=\"mt-5\">Liste des Comptes Rendus</h3>
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>Animal</th>
                        <th>Date</th>
                        <th>État</th>
                        <th>Détails</th>
                        <th>Utilisateur</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::sort($this->env, (isset($context["compteRendus"]) || array_key_exists("compteRendus", $context) ? $context["compteRendus"] : (function () { throw new RuntimeError('Variable "compteRendus" does not exist.', 92, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 92, $this->source); })()), "date", [], "any", false, false, false, 92) <=> CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 92, $this->source); })()), "date", [], "any", false, false, false, 92)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["compteRendu"]) {
            // line 93
            yield "                        <tr>
                            <td>";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["compteRendu"], "animal", [], "any", false, false, false, 94), "nom", [], "any", false, false, false, 94), "html", null, true);
            yield "</td>
                            <td>";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["compteRendu"], "date", [], "any", false, false, false, 95), "d/m/Y"), "html", null, true);
            yield "</td>
                            <td>";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["compteRendu"], "etat", [], "any", false, false, false, 96), "html", null, true);
            yield "</td>
                            <td>";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["compteRendu"], "details", [], "any", false, false, false, 97), "html", null, true);
            yield "</td>
                            <td>";
            // line 98
            (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["compteRendu"], "utilisateur", [], "any", false, true, false, 98), "nom", [], "any", true, true, false, 98) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["compteRendu"], "utilisateur", [], "any", false, true, false, 98), "nom", [], "any", false, false, false, 98)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["compteRendu"], "utilisateur", [], "any", false, true, false, 98), "nom", [], "any", false, false, false, 98), "html", null, true)) : (yield "Non spécifié"));
            yield "</td>
                            <td>
                                ";
            // line 100
            if ((CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "user", [], "any", false, false, false, 100), "roles", [], "any", false, false, false, 100)) || CoreExtension::inFilter("ROLE_VETERINAIRE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "user", [], "any", false, false, false, 100), "roles", [], "any", false, false, false, 100)))) {
                // line 101
                yield "                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("compte_rendu_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["compteRendu"], "id", [], "any", false, false, false, 101)]), "html", null, true);
                yield "\" class=\"btn btn-primary btn-sm\" style=\"margin-right: 5px;\">
                                        Éditer
                                    </a>
                                    <form action=\"";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("compte_rendu_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["compteRendu"], "id", [], "any", false, false, false, 104)]), "html", null, true);
                yield "\" method=\"post\" style=\"display:inline;\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["compteRendu"], "id", [], "any", false, false, false, 105))), "html", null, true);
                yield "\">
                                        <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                                    </form>
                                ";
            } else {
                // line 109
                yield "                                    <span class=\"text-muted\">Action non autorisée</span>
                                ";
            }
            // line 111
            yield "                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['compteRendu'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        yield "                </tbody>
            </table>

            <!-- Section de Gestion des Habitats -->
            <h3 class=\"mt-5\">Gestion des Habitats</h3>
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["habitats"]) || array_key_exists("habitats", $context) ? $context["habitats"] : (function () { throw new RuntimeError('Variable "habitats" does not exist.', 128, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["habitat"]) {
            // line 129
            yield "                        <tr>
                            <td>";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "nom", [], "any", false, false, false, 130), "html", null, true);
            yield "</td>
                            <td>";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "description", [], "any", false, false, false, 131), "html", null, true);
            yield "</td>
                            <td>
                                ";
            // line 133
            if ((CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 133, $this->source); })()), "user", [], "any", false, false, false, 133), "roles", [], "any", false, false, false, 133)) || CoreExtension::inFilter("ROLE_VETERINAIRE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 133, $this->source); })()), "user", [], "any", false, false, false, 133), "roles", [], "any", false, false, false, 133)))) {
                // line 134
                yield "                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("habitat_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "id", [], "any", false, false, false, 134)]), "html", null, true);
                yield "\" class=\"btn btn-warning btn-sm\">Modifier</a>

                                    <form action=\"";
                // line 136
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("habitat_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "id", [], "any", false, false, false, 136)]), "html", null, true);
                yield "\" method=\"post\" style=\"display: inline;\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 137
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "id", [], "any", false, false, false, 137))), "html", null, true);
                yield "\">
                                        <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                                    </form>
                                ";
            } else {
                // line 141
                yield "                                    <span class=\"text-muted\">Action non autorisée</span>
                                ";
            }
            // line 143
            yield "                            </td>

                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 147
            yield "                        <tr>
                            <td colspan=\"3\" class=\"text-center\">Aucun habitat trouvé</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['habitat'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        yield "                </tbody>
            </table>
            ";
        // line 153
        if ((CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 153, $this->source); })()), "user", [], "any", false, false, false, 153), "roles", [], "any", false, false, false, 153)) || CoreExtension::inFilter("ROLE_VETERINAIRE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 153, $this->source); })()), "user", [], "any", false, false, false, 153), "roles", [], "any", false, false, false, 153)))) {
            // line 154
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("habitat_new");
            yield "\" class=\"mb-4 btn btn-dark\">Ajouter un nouvel habitat</a>
            ";
        } else {
            // line 156
            yield "                <span class=\"text-muted\">Action non autorisée</span>
            ";
        }
        // line 158
        yield "
            <!-- Section des Animaux -->
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Race</th>
                        <th>Habitat</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["animals"]) || array_key_exists("animals", $context) ? $context["animals"] : (function () { throw new RuntimeError('Variable "animals" does not exist.', 170, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["animal"]) {
            // line 171
            yield "                        <tr>
                            <td>";
            // line 172
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "nom", [], "any", false, false, false, 172), "html", null, true);
            yield "</td>
                            <td>";
            // line 173
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "race", [], "any", false, false, false, 173), "html", null, true);
            yield "</td>
                            <td>";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "habitat", [], "any", false, false, false, 174), "nom", [], "any", false, false, false, 174), "html", null, true);
            yield "</td>
                            <td>
                                ";
            // line 176
            if ((CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 176, $this->source); })()), "user", [], "any", false, false, false, 176), "roles", [], "any", false, false, false, 176)) || CoreExtension::inFilter("ROLE_VETERINAIRE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 176, $this->source); })()), "user", [], "any", false, false, false, 176), "roles", [], "any", false, false, false, 176)))) {
                // line 177
                yield "                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animal_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "id", [], "any", false, false, false, 177)]), "html", null, true);
                yield "\" class=\"btn btn-warning btn-sm\">Modifier</a>
                                    <button 
                                        type=\"button\" 
                                        class=\"btn btn-danger btn-sm delete-button\" 
                                        data-url=\"";
                // line 181
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animal_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "id", [], "any", false, false, false, 181)]), "html", null, true);
                yield "\"
                                        data-token=\"";
                // line 182
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "id", [], "any", false, false, false, 182))), "html", null, true);
                yield "\">
                                        Supprimer
                                    </button>
                                ";
            } else {
                // line 186
                yield "                                    <span class=\"text-muted\">Action non autorisée</span>
                                ";
            }
            // line 188
            yield "                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['animal'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        yield "                </tbody>
            </table>

            <!-- Bouton Ajouter un animal -->
            ";
        // line 195
        if ((CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 195, $this->source); })()), "user", [], "any", false, false, false, 195), "roles", [], "any", false, false, false, 195)) || CoreExtension::inFilter("ROLE_VETERINAIRE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 195, $this->source); })()), "user", [], "any", false, false, false, 195), "roles", [], "any", false, false, false, 195)))) {
            // line 196
            yield "                <div class=\"mt-4\">
                    <a href=\"";
            // line 197
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animal_new");
            yield "\" class=\"btn btn-dark\">Ajouter un animal</a>
                </div>
            ";
        }
        // line 200
        yield "

            <!-- Section de Gestion des Employés -->
            <h3 class=\"mt-5\">Gestion des Employés</h3>
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Rôle</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 215
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 215, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 216
            yield "                        <tr>
                            <td>";
            // line 217
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 217), "html", null, true);
            yield "</td>
                            <td>";
            // line 218
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 218), "html", null, true);
            yield "</td>
                            <td>";
            // line 219
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 219), "html", null, true);
            yield "</td>
                            <td>
                                ";
            // line 221
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 221))) {
                // line 222
                yield "                                    Administrateur
                                ";
            } elseif (CoreExtension::inFilter("ROLE_VETERINAIRE", CoreExtension::getAttribute($this->env, $this->source,             // line 223
$context["user"], "roles", [], "any", false, false, false, 223))) {
                // line 224
                yield "                                    Vétérinaire
                                ";
            } else {
                // line 226
                yield "                                    Employé
                                ";
            }
            // line 228
            yield "                            </td>
                            <td>
                                ";
            // line 230
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 230, $this->source); })()), "user", [], "any", false, false, false, 230), "roles", [], "any", false, false, false, 230))) {
                // line 231
                yield "                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 231)]), "html", null, true);
                yield "\" class=\"btn btn-warning btn-sm\">Modifier</a>
                                    <button 
                                        type=\"button\" 
                                        class=\"btn btn-danger btn-sm delete-button\" 
                                        data-url=\"";
                // line 235
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 235)]), "html", null, true);
                yield "\"
                                        data-token=\"";
                // line 236
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 236))), "html", null, true);
                yield "\">
                                        Supprimer
                                    </button>
                                ";
            } else {
                // line 240
                yield "                                    <span class=\"text-muted\">Action non autorisée</span>
                                ";
            }
            // line 242
            yield "                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 245
        yield "                </tbody>
            </table>
            ";
        // line 247
        if ((CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 247, $this->source); })()), "user", [], "any", false, false, false, 247), "roles", [], "any", false, false, false, 247)) || CoreExtension::inFilter("ROLE_VETERINAIRE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 247, $this->source); })()), "user", [], "any", false, false, false, 247), "roles", [], "any", false, false, false, 247)))) {
            // line 248
            yield "                <div class=\"mt-3\">
                    <a href=\"";
            // line 249
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_new");
            yield "\" class=\"btn btn-dark\">Ajouter un employé</a>
                </div>
            ";
        } else {
            // line 252
            yield "                <span class=\"text-muted\">Action non autorisée</span>
            ";
        }
        // line 254
        yield "
            <!-- Section de Services -->
<h3 class=\"mt-5\">Gestion des Services</h3>

<!-- Bouton pour ajouter un service -->
<div class=\"mb-4\">
    <a href=\"";
        // line 260
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_new");
        yield "\" class=\"btn btn-dark\">Ajouter un Service</a>
</div>

<!-- Affichage des services -->
<div class=\"row\">
    ";
        // line 265
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 265, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 266
            yield "        <div class=\"col-md-4 mb-4\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">";
            // line 269
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "nom", [], "any", false, false, false, 269), "html", null, true);
            yield "</h5>

                    <!-- Affichage de la photo du service -->
";
            // line 272
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "images", [], "any", false, false, false, 272))) {
                // line 273
                yield "    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/services/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["service"], "images", [], "any", false, false, false, 273), 0, [], "array", false, false, false, 273))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "nom", [], "any", false, false, false, 273), "html", null, true);
                yield "\" class=\"img-fluid mb-3\">
";
            } else {
                // line 275
                yield "    <p>Pas de photo</p>
";
            }
            // line 277
            yield "

                    <!-- Boutons pour Modifier et Supprimer -->
                    <div class=\"d-flex justify-content-between\">
                        <a href=\"";
            // line 281
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 281)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">Modifier</a>
                        ";
            // line 282
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 282, $this->source); })()), "user", [], "any", false, false, false, 282), "roles", [], "any", false, false, false, 282))) {
                // line 283
                yield "                            <button 
                                type=\"button\" 
                                class=\"btn btn-danger btn-sm delete-button\" 
                                data-url=\"";
                // line 286
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 286)]), "html", null, true);
                yield "\"
                                data-token=\"";
                // line 287
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 287))), "html", null, true);
                yield "\">
                                Supprimer
                            </button>
                        ";
            } else {
                // line 291
                yield "                            <span class=\"text-muted\">Action non autorisée</span>
                        ";
            }
            // line 293
            yield "                    </div>
                </div>
            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 298
            yield "        <p class=\"text-center col-12\">Aucun service trouvé.</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['service'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 300
        yield "</div>


            <!-- Section Avis en attente de validation -->
            <div class=\"card shadow-sm mt-4\">
                <div class=\"card-header bg-warning text-dark\">
                    <h3 class=\"card-title h5 mb-0\">
                        <i class=\"fas fa-comments me-2\"></i>Avis en attente de validation
                    </h3>
                </div>
                <div class=\"card-body\">
                    ";
        // line 311
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["avisNonValides"]) || array_key_exists("avisNonValides", $context) ? $context["avisNonValides"] : (function () { throw new RuntimeError('Variable "avisNonValides" does not exist.', 311, $this->source); })())) > 0)) {
            // line 312
            yield "                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Prénom</th>
                                    <th>Avis</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["avisNonValides"]) || array_key_exists("avisNonValides", $context) ? $context["avisNonValides"] : (function () { throw new RuntimeError('Variable "avisNonValides" does not exist.', 322, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["avis"]) {
                // line 323
                yield "                                    <tr>
                                        <td>";
                // line 324
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "dateVisite", [], "any", false, false, false, 324), "d/m/Y"), "html", null, true);
                yield "</td>
                                        <td>";
                // line 325
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "prenom", [], "any", false, false, false, 325), "html", null, true);
                yield "</td>
                                        <td>";
                // line 326
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "contenu", [], "any", false, false, false, 326)) > 100)) ? ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "contenu", [], "any", false, false, false, 326), 0, 100) . "...")) : (CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "contenu", [], "any", false, false, false, 326))), "html", null, true);
                yield "</td>
                                        <td>
                                            ";
                // line 328
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 329
                    yield "                                                <form action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_valider", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "id", [], "any", false, false, false, 329)]), "html", null, true);
                    yield "\" method=\"post\" class=\"d-inline\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 330
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("valider" . CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "id", [], "any", false, false, false, 330))), "html", null, true);
                    yield "\">
                                                    <button type=\"submit\" class=\"btn btn-success btn-sm\">Accepter</button>
                                                </form>
                                                <button 
                                                    type=\"button\" 
                                                    class=\"btn btn-danger btn-sm delete-button\" 
                                                    data-url=\"";
                    // line 336
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "id", [], "any", false, false, false, 336)]), "html", null, true);
                    yield "\" 
                                                    data-token=\"";
                    // line 337
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("supprimer" . CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "id", [], "any", false, false, false, 337))), "html", null, true);
                    yield "\" 
                                                    onclick=\"handleDelete(this)\">
                                                    Refuser
                                                </button>
                                            ";
                } else {
                    // line 342
                    yield "                                                <span class=\"text-muted\">Action non autorisée</span>
                                            ";
                }
                // line 344
                yield "                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['avis'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 347
            yield "                            </tbody>
                        </table>
                    ";
        } else {
            // line 350
            yield "                        <div class=\"alert alert-info\">Aucun avis en attente de validation.</div>
                    ";
        }
        // line 352
        yield "                </div>
            </div>
        </div>
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
        return "page/profile.html.twig";
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
        return array (  784 => 352,  780 => 350,  775 => 347,  767 => 344,  763 => 342,  755 => 337,  751 => 336,  742 => 330,  737 => 329,  735 => 328,  730 => 326,  726 => 325,  722 => 324,  719 => 323,  715 => 322,  703 => 312,  701 => 311,  688 => 300,  681 => 298,  672 => 293,  668 => 291,  661 => 287,  657 => 286,  652 => 283,  650 => 282,  646 => 281,  640 => 277,  636 => 275,  628 => 273,  626 => 272,  620 => 269,  615 => 266,  610 => 265,  602 => 260,  594 => 254,  590 => 252,  584 => 249,  581 => 248,  579 => 247,  575 => 245,  567 => 242,  563 => 240,  556 => 236,  552 => 235,  544 => 231,  542 => 230,  538 => 228,  534 => 226,  530 => 224,  528 => 223,  525 => 222,  523 => 221,  518 => 219,  514 => 218,  510 => 217,  507 => 216,  503 => 215,  486 => 200,  480 => 197,  477 => 196,  475 => 195,  469 => 191,  461 => 188,  457 => 186,  450 => 182,  446 => 181,  438 => 177,  436 => 176,  431 => 174,  427 => 173,  423 => 172,  420 => 171,  416 => 170,  402 => 158,  398 => 156,  392 => 154,  390 => 153,  386 => 151,  377 => 147,  369 => 143,  365 => 141,  358 => 137,  354 => 136,  348 => 134,  346 => 133,  341 => 131,  337 => 130,  334 => 129,  329 => 128,  313 => 114,  305 => 111,  301 => 109,  294 => 105,  290 => 104,  283 => 101,  281 => 100,  276 => 98,  272 => 97,  268 => 96,  264 => 95,  260 => 94,  257 => 93,  253 => 92,  236 => 77,  230 => 74,  220 => 67,  214 => 64,  206 => 59,  200 => 56,  194 => 53,  190 => 51,  188 => 50,  183 => 47,  172 => 42,  166 => 41,  161 => 38,  158 => 36,  157 => 35,  156 => 34,  154 => 33,  146 => 27,  142 => 25,  137 => 22,  133 => 20,  129 => 18,  127 => 17,  124 => 16,  122 => 15,  119 => 14,  117 => 13,  110 => 11,  107 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon Profil{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col-md-3 text-center\">
            {% if app.user %}
                <h4 class=\"mt-3\">
                    {{ app.user.nom }} {{ app.user.prenom }}
                    <p class=\"text-muted\">
                        {% if 'ROLE_ADMIN' in app.user.roles %}
                            Administrateur
                        {% elseif 'ROLE_VETERINAIRE' in app.user.roles %}
                            Vétérinaire
                        {% elseif 'ROLE_EMPLOYE' in app.user.roles %}
                            Employé
                        {% else %}
                            Aucun rôle défini
                        {% endif %}
                    </p>
                </h4>
            {% else %}
                <p>Utilisateur non connecté.</p>
            {% endif %}
        </div>

        <div class=\"col-md-9\">
            <!-- Section de Statistiques -->
            <h2 class=\"mb-4\">Rapports Vétérinaire</h2>
            <div class=\"row text-center mb-4\">
                {% for stat in [
                    {'count': compteRendus|length, 'text': 'Nombre de rapports', 'class': 'text-primary'},
                    {'count': habitats|length, 'text': 'Nombre d\\'Habitats', 'class': 'text-success'},
                    {'count': animals|length, 'text': 'Nombre d\\'Animaux', 'class': 'text-warning'}
                ] %}
                    <div class=\"col-md-3\">
                        <div class=\"card shadow-sm border-0\">
                            <div class=\"card-body\">
                                <h4 class=\"{{ stat.class }}\">{{ stat.count }}</h4>
                                <p class=\"text-muted\">{{ stat.text }}</p>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>

            <!-- Section de Création de Rapport -->
            {% if 'ROLE_ADMIN' in app.user.roles or 'ROLE_VETERINAIRE' in app.user.roles %}
                <h2 class=\"mb-4\">Créer un compte rendu</h2>
                <div class=\"card p-4 shadow-sm\">
                    {{ form_start(formCompteRendu) }}
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            {{ form_row(formCompteRendu.animal, {'attr': {'class': 'form-control', 'placeholder': 'Sélectionnez un animal'}}) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_row(formCompteRendu.date, {'attr': {'class': 'form-control', 'placeholder': 'jj/mm/aaaa'}}) }}
                        </div>
                    </div>
                    <div class=\"row mt-3\">
                        <div class=\"col-md-6\">
                            {{ form_row(formCompteRendu.etat, {'attr': {'class': 'form-control', 'placeholder': 'État de santé'}}) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_row(formCompteRendu.details, {'attr': {'class': 'form-control', 'placeholder': 'Détails du rapport'}}) }}
                        </div>
                    </div>
                    <div class=\"d-flex justify-content-between mt-4\">
                        <button type=\"reset\" class=\"btn btn-outline-secondary px-4\">Recommencer</button>
                        <button type=\"submit\" class=\"btn btn-dark px-4\">Créer</button>
                    </div>
                    {{ form_end(formCompteRendu) }}
                </div>
            {% endif %}

            <!-- Section de Liste des Comptes Rendus -->
            <h3 class=\"mt-5\">Liste des Comptes Rendus</h3>
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>Animal</th>
                        <th>Date</th>
                        <th>État</th>
                        <th>Détails</th>
                        <th>Utilisateur</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for compteRendu in compteRendus|sort((a, b) => b.date <=> a.date) %}
                        <tr>
                            <td>{{ compteRendu.animal.nom }}</td>
                            <td>{{ compteRendu.date|date('d/m/Y') }}</td>
                            <td>{{ compteRendu.etat }}</td>
                            <td>{{ compteRendu.details }}</td>
                            <td>{{ compteRendu.utilisateur.nom ?? 'Non spécifié' }}</td>
                            <td>
                                {% if 'ROLE_ADMIN' in app.user.roles or 'ROLE_VETERINAIRE' in app.user.roles %}
                                    <a href=\"{{ path('compte_rendu_edit', {'id': compteRendu.id}) }}\" class=\"btn btn-primary btn-sm\" style=\"margin-right: 5px;\">
                                        Éditer
                                    </a>
                                    <form action=\"{{ path('compte_rendu_delete', {'id': compteRendu.id}) }}\" method=\"post\" style=\"display:inline;\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ compteRendu.id) }}\">
                                        <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                                    </form>
                                {% else %}
                                    <span class=\"text-muted\">Action non autorisée</span>
                                {% endif %}
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>

            <!-- Section de Gestion des Habitats -->
            <h3 class=\"mt-5\">Gestion des Habitats</h3>
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for habitat in habitats %}
                        <tr>
                            <td>{{ habitat.nom }}</td>
                            <td>{{ habitat.description }}</td>
                            <td>
                                {% if 'ROLE_ADMIN' in app.user.roles or 'ROLE_VETERINAIRE' in app.user.roles %}
                                    <a href=\"{{ path('habitat_edit', {'id': habitat.id}) }}\" class=\"btn btn-warning btn-sm\">Modifier</a>

                                    <form action=\"{{ path('habitat_delete', {'id': habitat.id}) }}\" method=\"post\" style=\"display: inline;\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ habitat.id) }}\">
                                        <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                                    </form>
                                {% else %}
                                    <span class=\"text-muted\">Action non autorisée</span>
                                {% endif %}
                            </td>

                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"3\" class=\"text-center\">Aucun habitat trouvé</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
            {% if 'ROLE_ADMIN' in app.user.roles or 'ROLE_VETERINAIRE' in app.user.roles %}
                <a href=\"{{ path('habitat_new') }}\" class=\"mb-4 btn btn-dark\">Ajouter un nouvel habitat</a>
            {% else %}
                <span class=\"text-muted\">Action non autorisée</span>
            {% endif %}

            <!-- Section des Animaux -->
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Race</th>
                        <th>Habitat</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for animal in animals %}
                        <tr>
                            <td>{{ animal.nom }}</td>
                            <td>{{ animal.race }}</td>
                            <td>{{ animal.habitat.nom }}</td>
                            <td>
                                {% if 'ROLE_ADMIN' in app.user.roles or 'ROLE_VETERINAIRE' in app.user.roles %}
                                    <a href=\"{{ path('animal_edit', {'id': animal.id}) }}\" class=\"btn btn-warning btn-sm\">Modifier</a>
                                    <button 
                                        type=\"button\" 
                                        class=\"btn btn-danger btn-sm delete-button\" 
                                        data-url=\"{{ path('animal_delete', {'id': animal.id}) }}\"
                                        data-token=\"{{ csrf_token('delete' ~ animal.id) }}\">
                                        Supprimer
                                    </button>
                                {% else %}
                                    <span class=\"text-muted\">Action non autorisée</span>
                                {% endif %}
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>

            <!-- Bouton Ajouter un animal -->
            {% if 'ROLE_ADMIN' in app.user.roles or 'ROLE_VETERINAIRE' in app.user.roles %}
                <div class=\"mt-4\">
                    <a href=\"{{ path('animal_new') }}\" class=\"btn btn-dark\">Ajouter un animal</a>
                </div>
            {% endif %}


            <!-- Section de Gestion des Employés -->
            <h3 class=\"mt-5\">Gestion des Employés</h3>
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Rôle</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for user in users %}
                        <tr>
                            <td>{{ user.nom }}</td>
                            <td>{{ user.prenom }}</td>
                            <td>{{ user.email }}</td>
                            <td>
                                {% if 'ROLE_ADMIN' in user.roles %}
                                    Administrateur
                                {% elseif 'ROLE_VETERINAIRE' in user.roles %}
                                    Vétérinaire
                                {% else %}
                                    Employé
                                {% endif %}
                            </td>
                            <td>
                                {% if 'ROLE_ADMIN' in app.user.roles %}
                                    <a href=\"{{ path('user_edit', {'id': user.id}) }}\" class=\"btn btn-warning btn-sm\">Modifier</a>
                                    <button 
                                        type=\"button\" 
                                        class=\"btn btn-danger btn-sm delete-button\" 
                                        data-url=\"{{ path('user_delete', {'id': user.id}) }}\"
                                        data-token=\"{{ csrf_token('delete' ~ user.id) }}\">
                                        Supprimer
                                    </button>
                                {% else %}
                                    <span class=\"text-muted\">Action non autorisée</span>
                                {% endif %}
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
            {% if 'ROLE_ADMIN' in app.user.roles or 'ROLE_VETERINAIRE' in app.user.roles %}
                <div class=\"mt-3\">
                    <a href=\"{{ path('user_new') }}\" class=\"btn btn-dark\">Ajouter un employé</a>
                </div>
            {% else %}
                <span class=\"text-muted\">Action non autorisée</span>
            {% endif %}

            <!-- Section de Services -->
<h3 class=\"mt-5\">Gestion des Services</h3>

<!-- Bouton pour ajouter un service -->
<div class=\"mb-4\">
    <a href=\"{{ path('service_new') }}\" class=\"btn btn-dark\">Ajouter un Service</a>
</div>

<!-- Affichage des services -->
<div class=\"row\">
    {% for service in services %}
        <div class=\"col-md-4 mb-4\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">{{ service.nom }}</h5>

                    <!-- Affichage de la photo du service -->
{% if service.images is not empty %}
    <img src=\"{{ asset('uploads/services/' ~ service.images[0]) }}\" alt=\"{{ service.nom }}\" class=\"img-fluid mb-3\">
{% else %}
    <p>Pas de photo</p>
{% endif %}


                    <!-- Boutons pour Modifier et Supprimer -->
                    <div class=\"d-flex justify-content-between\">
                        <a href=\"{{ path('service_edit', { 'id': service.id }) }}\" class=\"btn btn-warning btn-sm\">Modifier</a>
                        {% if 'ROLE_ADMIN' in app.user.roles %}
                            <button 
                                type=\"button\" 
                                class=\"btn btn-danger btn-sm delete-button\" 
                                data-url=\"{{ path('service_delete', {'id': service.id}) }}\"
                                data-token=\"{{ csrf_token('delete' ~ service.id) }}\">
                                Supprimer
                            </button>
                        {% else %}
                            <span class=\"text-muted\">Action non autorisée</span>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    {% else %}
        <p class=\"text-center col-12\">Aucun service trouvé.</p>
    {% endfor %}
</div>


            <!-- Section Avis en attente de validation -->
            <div class=\"card shadow-sm mt-4\">
                <div class=\"card-header bg-warning text-dark\">
                    <h3 class=\"card-title h5 mb-0\">
                        <i class=\"fas fa-comments me-2\"></i>Avis en attente de validation
                    </h3>
                </div>
                <div class=\"card-body\">
                    {% if avisNonValides|length > 0 %}
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Prénom</th>
                                    <th>Avis</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for avis in avisNonValides %}
                                    <tr>
                                        <td>{{ avis.dateVisite|date('d/m/Y') }}</td>
                                        <td>{{ avis.prenom }}</td>
                                        <td>{{ avis.contenu|length > 100 ? avis.contenu|slice(0, 100) ~ '...' : avis.contenu }}</td>
                                        <td>
                                            {% if is_granted('ROLE_ADMIN') %}
                                                <form action=\"{{ path('app_avis_valider', {'id': avis.id}) }}\" method=\"post\" class=\"d-inline\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('valider' ~ avis.id) }}\">
                                                    <button type=\"submit\" class=\"btn btn-success btn-sm\">Accepter</button>
                                                </form>
                                                <button 
                                                    type=\"button\" 
                                                    class=\"btn btn-danger btn-sm delete-button\" 
                                                    data-url=\"{{ path('app_avis_supprimer', {'id': avis.id}) }}\" 
                                                    data-token=\"{{ csrf_token('supprimer' ~ avis.id) }}\" 
                                                    onclick=\"handleDelete(this)\">
                                                    Refuser
                                                </button>
                                            {% else %}
                                                <span class=\"text-muted\">Action non autorisée</span>
                                            {% endif %}
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    {% else %}
                        <div class=\"alert alert-info\">Aucun avis en attente de validation.</div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "page/profile.html.twig", "C:\\xampp\\htdocs\\Arcadia\\templates\\page\\profile.html.twig");
    }
}
