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

/* page/final_profile_corrected.html.twig */
class __TwigTemplate_728dc2915c41a4977a50a987af5a8aca extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/final_profile_corrected.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/final_profile_corrected.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/final_profile_corrected.html.twig", 1);
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
            yield "                <h2 class=\"mb-4\">Créer un rapport</h2>
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
                yield "                                    <button type=\"button\" class=\"btn btn-danger btn-sm delete-button\" data-url=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("compte_rendu_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["compteRendu"], "id", [], "any", false, false, false, 101)]), "html", null, true);
                yield "\" data-token=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["compteRendu"], "id", [], "any", false, false, false, 101))), "html", null, true);
                yield "\">
                                        Supprimer
                                    </button>
                                ";
            }
            // line 105
            yield "                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['compteRendu'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
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
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["habitats"]) || array_key_exists("habitats", $context) ? $context["habitats"] : (function () { throw new RuntimeError('Variable "habitats" does not exist.', 122, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["habitat"]) {
            // line 123
            yield "                        <tr>
                            <td>";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "nom", [], "any", false, false, false, 124), "html", null, true);
            yield "</td>
                            <td>";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "description", [], "any", false, false, false, 125), "html", null, true);
            yield "</td>
                            <td>
                                ";
            // line 127
            if ((CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 127, $this->source); })()), "user", [], "any", false, false, false, 127), "roles", [], "any", false, false, false, 127)) || CoreExtension::inFilter("ROLE_VETERINAIRE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 127, $this->source); })()), "user", [], "any", false, false, false, 127), "roles", [], "any", false, false, false, 127)))) {
                // line 128
                yield "                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("habitat_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "id", [], "any", false, false, false, 128)]), "html", null, true);
                yield "\" class=\"btn btn-warning btn-sm\">Modifier</a>
                                    <button 
                                        type=\"button\" 
                                        class=\"btn btn-danger btn-sm delete-button\" 
                                        data-url=\"";
                // line 132
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("habitat_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "id", [], "any", false, false, false, 132)]), "html", null, true);
                yield "\" 
                                        data-token=\"";
                // line 133
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "id", [], "any", false, false, false, 133))), "html", null, true);
                yield "\">
                                        Supprimer
                                    </button>
                                ";
            }
            // line 137
            yield "                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 140
            yield "                        <tr>
                            <td colspan=\"3\" class=\"text-center\">Aucun habitat trouvé</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['habitat'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        yield "                </tbody>
            </table>
            ";
        // line 146
        if ((CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 146, $this->source); })()), "user", [], "any", false, false, false, 146), "roles", [], "any", false, false, false, 146)) || CoreExtension::inFilter("ROLE_VETERINAIRE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 146, $this->source); })()), "user", [], "any", false, false, false, 146), "roles", [], "any", false, false, false, 146)))) {
            // line 147
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("habitat_new");
            yield "\" class=\"btn btn-dark\">Ajouter un nouvel habitat</a>
            ";
        }
        // line 149
        yield "
            <!-- Section de Gestion des Animaux -->
            <h3 class=\"mt-5\">Gestion des Animaux</h3>
            ";
        // line 152
        if ((CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 152, $this->source); })()), "user", [], "any", false, false, false, 152), "roles", [], "any", false, false, false, 152)) || CoreExtension::inFilter("ROLE_VETERINAIRE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 152, $this->source); })()), "user", [], "any", false, false, false, 152), "roles", [], "any", false, false, false, 152)))) {
            // line 153
            yield "            <div class=\"card p-4 shadow-sm mb-4\">
                <form action=\"";
            // line 154
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animal_new");
            yield "\" method=\"post\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <input type=\"text\" class=\"form-control\" name=\"nom\" placeholder=\"Nom de l'animal\" required>
                        </div>
                        <div class=\"col\">
                            <input type=\"text\" class=\"form-control\" name=\"race\" placeholder=\"Race de l'animal\" required>
                        </div>
                        <div class=\"col\">
                            <select class=\"form-control\" name=\"habitat_id\" required>
                                <option value=\"\">Sélectionner un habitat</option>
                                ";
            // line 165
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["habitats"]) || array_key_exists("habitats", $context) ? $context["habitats"] : (function () { throw new RuntimeError('Variable "habitats" does not exist.', 165, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["habitat"]) {
                // line 166
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "id", [], "any", false, false, false, 166), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "nom", [], "any", false, false, false, 166), "html", null, true);
                yield "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['habitat'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 168
            yield "                            </select>
                        </div>
                        <div class=\"col\">
                            <button type=\"submit\" class=\"btn btn-dark\">Ajouter un animal</button>
                        </div>
                    </div>
                </form>
            </div>
            ";
        }
        // line 177
        yield "            <table class=\"table table-striped\">
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
        // line 187
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["animals"]) || array_key_exists("animals", $context) ? $context["animals"] : (function () { throw new RuntimeError('Variable "animals" does not exist.', 187, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["animal"]) {
            // line 188
            yield "                        <tr>
                            <td>";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "nom", [], "any", false, false, false, 189), "html", null, true);
            yield "</td>
                            <td>";
            // line 190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "race", [], "any", false, false, false, 190), "html", null, true);
            yield "</td>
                            <td>";
            // line 191
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "habitat", [], "any", false, false, false, 191), "nom", [], "any", false, false, false, 191), "html", null, true);
            yield "</td>
                            <td>
                                ";
            // line 193
            if ((CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 193, $this->source); })()), "user", [], "any", false, false, false, 193), "roles", [], "any", false, false, false, 193)) || CoreExtension::inFilter("ROLE_VETERINAIRE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 193, $this->source); })()), "user", [], "any", false, false, false, 193), "roles", [], "any", false, false, false, 193)))) {
                // line 194
                yield "                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animal_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "id", [], "any", false, false, false, 194)]), "html", null, true);
                yield "\" class=\"btn btn-warning btn-sm\">Modifier</a>
                                    <button 
                                        type=\"button\" 
                                        class=\"btn btn-danger btn-sm delete-button\" 
                                        data-url=\"";
                // line 198
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animal_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "id", [], "any", false, false, false, 198)]), "html", null, true);
                yield "\"
                                        data-token=\"";
                // line 199
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "id", [], "any", false, false, false, 199))), "html", null, true);
                yield "\">
                                        Supprimer
                                    </button>
                                ";
            }
            // line 203
            yield "                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['animal'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        yield "                </tbody>
            </table>

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
        // line 222
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 222, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 223
            yield "                        <tr>
                            <td>";
            // line 224
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 224), "html", null, true);
            yield "</td>
                            <td>";
            // line 225
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 225), "html", null, true);
            yield "</td>
                            <td>";
            // line 226
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 226), "html", null, true);
            yield "</td>
                            <td>
                                ";
            // line 228
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 228))) {
                // line 229
                yield "                                    Administrateur
                                ";
            } elseif (CoreExtension::inFilter("ROLE_VETERINAIRE", CoreExtension::getAttribute($this->env, $this->source,             // line 230
$context["user"], "roles", [], "any", false, false, false, 230))) {
                // line 231
                yield "                                    Vétérinaire
                                ";
            } else {
                // line 233
                yield "                                    Employé
                                ";
            }
            // line 235
            yield "                            </td>
                            <td>
                                ";
            // line 237
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 237, $this->source); })()), "user", [], "any", false, false, false, 237), "roles", [], "any", false, false, false, 237))) {
                // line 238
                yield "                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 238)]), "html", null, true);
                yield "\" class=\"btn btn-warning btn-sm\">Modifier</a>
                                    <button 
                                        type=\"button\" 
                                        class=\"btn btn-danger btn-sm delete-button\" 
                                        data-url=\"";
                // line 242
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 242)]), "html", null, true);
                yield "\"
                                        data-token=\"";
                // line 243
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 243))), "html", null, true);
                yield "\">
                                    Supprimer
                                    </button>
                                ";
            }
            // line 247
            yield "                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 250
        yield "                </tbody>
            </table>
            ";
        // line 252
        if ((CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 252, $this->source); })()), "user", [], "any", false, false, false, 252), "roles", [], "any", false, false, false, 252)) || CoreExtension::inFilter("ROLE_VETERINAIRE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 252, $this->source); })()), "user", [], "any", false, false, false, 252), "roles", [], "any", false, false, false, 252)))) {
            // line 253
            yield "            <div class=\"mt-3\">
                <a href=\"";
            // line 254
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_new");
            yield "\" class=\"btn btn-dark\">Ajouter un employé</a>
            </div>
            ";
        }
        // line 257
        yield "
            <!-- Section de Services -->
            <h3 class=\"mt-5\">Gestion des Services</h3>
            <div class=\"card p-4 shadow-sm mb-4\">
                <form action=\"";
        // line 261
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_new");
        yield "\" method=\"post\" enctype=\"multipart/form-data\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <input type=\"text\" class=\"form-control\" name=\"nom\" placeholder=\"Nom du service\" required>
                        </div>
                        <div class=\"col\">
                            <input type=\"text\" class=\"form-control\" name=\"description\" placeholder=\"Description du service\" required>
                        </div>
                        <div class=\"col\">
                            <input type=\"file\" class=\"form-control\" name=\"photo\" required>
                        </div>
                        <div class=\"col\">
                            <button type=\"submit\" class=\"btn btn-dark\">Ajouter un service</button>
                        </div>
                    </div>
                </form>
            </div>

            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Photo</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 289
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 289, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 290
            yield "                        <tr>
                            <td>";
            // line 291
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "nom", [], "any", false, false, false, 291), "html", null, true);
            yield "</td>
                            <td>";
            // line 292
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "description", [], "any", false, false, false, 292), "html", null, true);
            yield "</td>
                            <td>
                                ";
            // line 294
            if (CoreExtension::getAttribute($this->env, $this->source, $context["service"], "photo", [], "any", false, false, false, 294)) {
                // line 295
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "photo", [], "any", false, false, false, 295)), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "nom", [], "any", false, false, false, 295), "html", null, true);
                yield "\" style=\"width: 50px; height: auto;\">
                                ";
            } else {
                // line 297
                yield "                                    Pas de photo
                                ";
            }
            // line 299
            yield "                            </td>
                            <td>
                                <a href=\"";
            // line 301
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 301)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">Modifier</a>
                                ";
            // line 302
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 302, $this->source); })()), "user", [], "any", false, false, false, 302), "roles", [], "any", false, false, false, 302))) {
                // line 303
                yield "                                    <button 
                                        type=\"button\" 
                                        class=\"btn btn-danger btn-sm delete-button\" 
                                        data-url=\"";
                // line 306
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 306)]), "html", null, true);
                yield "\"
                                        data-token=\"";
                // line 307
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 307))), "html", null, true);
                yield "\">
                                    Supprimer
                                    </button>
                                ";
            }
            // line 311
            yield "                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 314
            yield "                        <tr>
                            <td colspan=\"4\" class=\"text-center\">Aucun service trouvé</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['service'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 318
        yield "                </tbody>
            </table>

            <!-- Section Avis en attente de validation -->
            <div class=\"card shadow-sm mt-4\">
                <div class=\"card-header bg-warning text-dark\">
                    <h3 class=\"card-title h5 mb-0\">
                        <i class=\"fas fa-comments me-2\"></i>Avis en attente de validation
                    </h3>
                </div>
                <div class=\"card-body\">
                    ";
        // line 329
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["avisNonValides"]) || array_key_exists("avisNonValides", $context) ? $context["avisNonValides"] : (function () { throw new RuntimeError('Variable "avisNonValides" does not exist.', 329, $this->source); })())) > 0)) {
            // line 330
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
            // line 340
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["avisNonValides"]) || array_key_exists("avisNonValides", $context) ? $context["avisNonValides"] : (function () { throw new RuntimeError('Variable "avisNonValides" does not exist.', 340, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["avis"]) {
                // line 341
                yield "                                    <tr>
                                        <td>";
                // line 342
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "dateVisite", [], "any", false, false, false, 342), "d/m/Y"), "html", null, true);
                yield "</td>
                                        <td>";
                // line 343
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "prenom", [], "any", false, false, false, 343), "html", null, true);
                yield "</td>
                                        <td>";
                // line 344
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "contenu", [], "any", false, false, false, 344)) > 100)) ? ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "contenu", [], "any", false, false, false, 344), 0, 100) . "...")) : (CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "contenu", [], "any", false, false, false, 344))), "html", null, true);
                yield "</td>
                                        <td>
                                            <form action=\"";
                // line 346
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_valider", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "id", [], "any", false, false, false, 346)]), "html", null, true);
                yield "\" method=\"post\" class=\"d-inline\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 347
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("valider" . CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "id", [], "any", false, false, false, 347))), "html", null, true);
                yield "\">
                                                <button type=\"submit\" class=\"btn btn-success btn-sm\">Accepter</button>
                                            </form>
                                            <button 
                                                type=\"button\" 
                                                class=\"btn btn-danger btn-sm delete-button\" 
                                                data-url=\"";
                // line 353
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "id", [], "any", false, false, false, 353)]), "html", null, true);
                yield "\" 
                                                data-token=\"";
                // line 354
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("supprimer" . CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "id", [], "any", false, false, false, 354))), "html", null, true);
                yield "\" 
                                                onclick=\"handleDelete(this)\">
                                                Refuser
                                            </button>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['avis'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 361
            yield "                            </tbody>
                        </table>
                    ";
        } else {
            // line 364
            yield "                        <div class=\"alert alert-info\">Aucun avis en attente de validation.</div>
                    ";
        }
        // line 366
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

    // line 373
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

        // line 374
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 375
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/components/delete.js"), "html", null, true);
        yield "\"></script>
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
        return "page/final_profile_corrected.html.twig";
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
        return array (  826 => 375,  821 => 374,  808 => 373,  792 => 366,  788 => 364,  783 => 361,  770 => 354,  766 => 353,  757 => 347,  753 => 346,  748 => 344,  744 => 343,  740 => 342,  737 => 341,  733 => 340,  721 => 330,  719 => 329,  706 => 318,  697 => 314,  690 => 311,  683 => 307,  679 => 306,  674 => 303,  672 => 302,  668 => 301,  664 => 299,  660 => 297,  652 => 295,  650 => 294,  645 => 292,  641 => 291,  638 => 290,  633 => 289,  602 => 261,  596 => 257,  590 => 254,  587 => 253,  585 => 252,  581 => 250,  573 => 247,  566 => 243,  562 => 242,  554 => 238,  552 => 237,  548 => 235,  544 => 233,  540 => 231,  538 => 230,  535 => 229,  533 => 228,  528 => 226,  524 => 225,  520 => 224,  517 => 223,  513 => 222,  495 => 206,  487 => 203,  480 => 199,  476 => 198,  468 => 194,  466 => 193,  461 => 191,  457 => 190,  453 => 189,  450 => 188,  446 => 187,  434 => 177,  423 => 168,  412 => 166,  408 => 165,  394 => 154,  391 => 153,  389 => 152,  384 => 149,  378 => 147,  376 => 146,  372 => 144,  363 => 140,  356 => 137,  349 => 133,  345 => 132,  337 => 128,  335 => 127,  330 => 125,  326 => 124,  323 => 123,  318 => 122,  302 => 108,  294 => 105,  284 => 101,  282 => 100,  277 => 98,  273 => 97,  269 => 96,  265 => 95,  261 => 94,  258 => 93,  254 => 92,  237 => 77,  231 => 74,  221 => 67,  215 => 64,  207 => 59,  201 => 56,  195 => 53,  191 => 51,  189 => 50,  184 => 47,  173 => 42,  167 => 41,  162 => 38,  159 => 36,  158 => 35,  157 => 34,  155 => 33,  147 => 27,  143 => 25,  138 => 22,  134 => 20,  130 => 18,  128 => 17,  125 => 16,  123 => 15,  120 => 14,  118 => 13,  111 => 11,  108 => 10,  106 => 9,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
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
                <h2 class=\"mb-4\">Créer un rapport</h2>
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
                                    <button type=\"button\" class=\"btn btn-danger btn-sm delete-button\" data-url=\"{{ path('compte_rendu_delete', {'id': compteRendu.id}) }}\" data-token=\"{{ csrf_token('delete' ~ compteRendu.id) }}\">
                                        Supprimer
                                    </button>
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
                                    <button 
                                        type=\"button\" 
                                        class=\"btn btn-danger btn-sm delete-button\" 
                                        data-url=\"{{ path('habitat_delete', {'id': habitat.id}) }}\" 
                                        data-token=\"{{ csrf_token('delete' ~ habitat.id) }}\">
                                        Supprimer
                                    </button>
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
                <a href=\"{{ path('habitat_new') }}\" class=\"btn btn-dark\">Ajouter un nouvel habitat</a>
            {% endif %}

            <!-- Section de Gestion des Animaux -->
            <h3 class=\"mt-5\">Gestion des Animaux</h3>
            {% if 'ROLE_ADMIN' in app.user.roles or 'ROLE_VETERINAIRE' in app.user.roles %}
            <div class=\"card p-4 shadow-sm mb-4\">
                <form action=\"{{ path('animal_new') }}\" method=\"post\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <input type=\"text\" class=\"form-control\" name=\"nom\" placeholder=\"Nom de l'animal\" required>
                        </div>
                        <div class=\"col\">
                            <input type=\"text\" class=\"form-control\" name=\"race\" placeholder=\"Race de l'animal\" required>
                        </div>
                        <div class=\"col\">
                            <select class=\"form-control\" name=\"habitat_id\" required>
                                <option value=\"\">Sélectionner un habitat</option>
                                {% for habitat in habitats %}
                                    <option value=\"{{ habitat.id }}\">{{ habitat.nom }}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div class=\"col\">
                            <button type=\"submit\" class=\"btn btn-dark\">Ajouter un animal</button>
                        </div>
                    </div>
                </form>
            </div>
            {% endif %}
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
                                {% endif %}
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>

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
            {% endif %}

            <!-- Section de Services -->
            <h3 class=\"mt-5\">Gestion des Services</h3>
            <div class=\"card p-4 shadow-sm mb-4\">
                <form action=\"{{ path('service_new') }}\" method=\"post\" enctype=\"multipart/form-data\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <input type=\"text\" class=\"form-control\" name=\"nom\" placeholder=\"Nom du service\" required>
                        </div>
                        <div class=\"col\">
                            <input type=\"text\" class=\"form-control\" name=\"description\" placeholder=\"Description du service\" required>
                        </div>
                        <div class=\"col\">
                            <input type=\"file\" class=\"form-control\" name=\"photo\" required>
                        </div>
                        <div class=\"col\">
                            <button type=\"submit\" class=\"btn btn-dark\">Ajouter un service</button>
                        </div>
                    </div>
                </form>
            </div>

            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Photo</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for service in services %}
                        <tr>
                            <td>{{ service.nom }}</td>
                            <td>{{ service.description }}</td>
                            <td>
                                {% if service.photo %}
                                    <img src=\"{{ asset(service.photo) }}\" alt=\"{{ service.nom }}\" style=\"width: 50px; height: auto;\">
                                {% else %}
                                    Pas de photo
                                {% endif %}
                            </td>
                            <td>
                                <a href=\"{{ path('service_edit', {'id': service.id}) }}\" class=\"btn btn-warning btn-sm\">Modifier</a>
                                {% if 'ROLE_ADMIN' in app.user.roles %}
                                    <button 
                                        type=\"button\" 
                                        class=\"btn btn-danger btn-sm delete-button\" 
                                        data-url=\"{{ path('service_delete', {'id': service.id}) }}\"
                                        data-token=\"{{ csrf_token('delete' ~ service.id) }}\">
                                    Supprimer
                                    </button>
                                {% endif %}
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"4\" class=\"text-center\">Aucun service trouvé</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>

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
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('js/components/delete.js') }}\"></script>
{% endblock %}
", "page/final_profile_corrected.html.twig", "C:\\xampp\\htdocs\\Arcadia\\templates\\page\\final_profile_corrected.html.twig");
    }
}
