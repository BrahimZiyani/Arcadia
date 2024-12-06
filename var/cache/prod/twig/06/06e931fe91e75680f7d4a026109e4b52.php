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
class __TwigTemplate_be4e087a2ff1346ddeb9569725f9b181 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "page/final_profile_corrected.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Mon Profil";
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
    <div class=\"row\">
        <div class=\"col-md-3 text-center\">
            ";
        // line 9
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 9)) {
            // line 10
            yield "                <h4 class=\"mt-3\">
                    ";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 11), "nom", [], "any", false, false, false, 11), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 11), "prenom", [], "any", false, false, false, 11), "html", null, true);
            yield "
                    <p class=\"text-muted\">
                        ";
            // line 13
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 13), "roles", [], "any", false, false, false, 13))) {
                // line 14
                yield "                            Administrateur
                        ";
            } elseif (CoreExtension::inFilter("ROLE_VETERINAIRE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 15
($context["app"] ?? null), "user", [], "any", false, false, false, 15), "roles", [], "any", false, false, false, 15))) {
                // line 16
                yield "                            Vétérinaire
                        ";
            } elseif (CoreExtension::inFilter("ROLE_EMPLOYE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 17
($context["app"] ?? null), "user", [], "any", false, false, false, 17), "roles", [], "any", false, false, false, 17))) {
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
($context["compteRendus"] ?? null)), "text" => "Nombre de rapports", "class" => "text-primary"], ["count" => Twig\Extension\CoreExtension::length($this->env->getCharset(),         // line 35
($context["habitats"] ?? null)), "text" => "Nombre d'Habitats", "class" => "text-success"], ["count" => Twig\Extension\CoreExtension::length($this->env->getCharset(),         // line 36
($context["animals"] ?? null)), "text" => "Nombre d'Animaux", "class" => "text-warning"]]);
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
        if ((CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 50), "roles", [], "any", false, false, false, 50)) || CoreExtension::inFilter("ROLE_VETERINAIRE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 50), "roles", [], "any", false, false, false, 50)))) {
            // line 51
            yield "                <h2 class=\"mb-4\">Créer un rapport</h2>
                <div class=\"card p-4 shadow-sm\">
                    ";
            // line 53
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formCompteRendu"] ?? null), 'form_start');
            yield "
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            ";
            // line 56
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["formCompteRendu"] ?? null), "animal", [], "any", false, false, false, 56), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Sélectionnez un animal"]]);
            yield "
                        </div>
                        <div class=\"col-md-6\">
                            ";
            // line 59
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["formCompteRendu"] ?? null), "date", [], "any", false, false, false, 59), 'row', ["attr" => ["class" => "form-control", "placeholder" => "jj/mm/aaaa"]]);
            yield "
                        </div>
                    </div>
                    <div class=\"row mt-3\">
                        <div class=\"col-md-6\">
                            ";
            // line 64
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["formCompteRendu"] ?? null), "etat", [], "any", false, false, false, 64), 'row', ["attr" => ["class" => "form-control", "placeholder" => "État de santé"]]);
            yield "
                        </div>
                        <div class=\"col-md-6\">
                            ";
            // line 67
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["formCompteRendu"] ?? null), "details", [], "any", false, false, false, 67), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Détails du rapport"]]);
            yield "
                        </div>
                    </div>
                    <div class=\"d-flex justify-content-between mt-4\">
                        <button type=\"reset\" class=\"btn btn-outline-secondary px-4\">Recommencer</button>
                        <button type=\"submit\" class=\"btn btn-dark px-4\">Créer</button>
                    </div>
                    ";
            // line 74
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formCompteRendu"] ?? null), 'form_end');
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
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::sort($this->env, ($context["compteRendus"] ?? null), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["b"] ?? null), "date", [], "any", false, false, false, 92) <=> CoreExtension::getAttribute($this->env, $this->source, ($context["a"] ?? null), "date", [], "any", false, false, false, 92)); }));
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
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["compteRendu"], "utilisateur", [], "any", false, true, false, 98), "nom", [], "any", true, true, false, 98) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["compteRendu"], "utilisateur", [], "any", false, true, false, 98), "nom", [], "any", false, false, false, 98)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["compteRendu"], "utilisateur", [], "any", false, true, false, 98), "nom", [], "any", false, false, false, 98), "html", null, true)) : ("Non spécifié"));
            yield "</td>
                            <td>
                                ";
            // line 100
            if ((CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 100), "roles", [], "any", false, false, false, 100)) || CoreExtension::inFilter("ROLE_VETERINAIRE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 100), "roles", [], "any", false, false, false, 100)))) {
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["habitats"] ?? null));
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
            if ((CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 127), "roles", [], "any", false, false, false, 127)) || CoreExtension::inFilter("ROLE_VETERINAIRE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 127), "roles", [], "any", false, false, false, 127)))) {
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
        if ((CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 146), "roles", [], "any", false, false, false, 146)) || CoreExtension::inFilter("ROLE_VETERINAIRE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 146), "roles", [], "any", false, false, false, 146)))) {
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
        if ((CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 152), "roles", [], "any", false, false, false, 152)) || CoreExtension::inFilter("ROLE_VETERINAIRE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 152), "roles", [], "any", false, false, false, 152)))) {
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
            $context['_seq'] = CoreExtension::ensureTraversable(($context["habitats"] ?? null));
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["animals"] ?? null));
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
            if ((CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 193), "roles", [], "any", false, false, false, 193)) || CoreExtension::inFilter("ROLE_VETERINAIRE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 193), "roles", [], "any", false, false, false, 193)))) {
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["users"] ?? null));
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
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 237), "roles", [], "any", false, false, false, 237))) {
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
        if ((CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 252), "roles", [], "any", false, false, false, 252)) || CoreExtension::inFilter("ROLE_VETERINAIRE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 252), "roles", [], "any", false, false, false, 252)))) {
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["services"] ?? null));
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
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 302), "roles", [], "any", false, false, false, 302))) {
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["avisNonValides"] ?? null)) > 0)) {
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
            $context['_seq'] = CoreExtension::ensureTraversable(($context["avisNonValides"] ?? null));
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
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "contenu", [], "any", false, false, false, 344)) > 100)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "contenu", [], "any", false, false, false, 344), 0, 100) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "contenu", [], "any", false, false, false, 344), "html", null, true)));
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
        yield from [];
    }

    // line 373
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 374
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 375
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/components/delete.js"), "html", null, true);
        yield "\"></script>
";
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
        return array (  784 => 375,  779 => 374,  772 => 373,  762 => 366,  758 => 364,  753 => 361,  740 => 354,  736 => 353,  727 => 347,  723 => 346,  718 => 344,  714 => 343,  710 => 342,  707 => 341,  703 => 340,  691 => 330,  689 => 329,  676 => 318,  667 => 314,  660 => 311,  653 => 307,  649 => 306,  644 => 303,  642 => 302,  638 => 301,  634 => 299,  630 => 297,  622 => 295,  620 => 294,  615 => 292,  611 => 291,  608 => 290,  603 => 289,  572 => 261,  566 => 257,  560 => 254,  557 => 253,  555 => 252,  551 => 250,  543 => 247,  536 => 243,  532 => 242,  524 => 238,  522 => 237,  518 => 235,  514 => 233,  510 => 231,  508 => 230,  505 => 229,  503 => 228,  498 => 226,  494 => 225,  490 => 224,  487 => 223,  483 => 222,  465 => 206,  457 => 203,  450 => 199,  446 => 198,  438 => 194,  436 => 193,  431 => 191,  427 => 190,  423 => 189,  420 => 188,  416 => 187,  404 => 177,  393 => 168,  382 => 166,  378 => 165,  364 => 154,  361 => 153,  359 => 152,  354 => 149,  348 => 147,  346 => 146,  342 => 144,  333 => 140,  326 => 137,  319 => 133,  315 => 132,  307 => 128,  305 => 127,  300 => 125,  296 => 124,  293 => 123,  288 => 122,  272 => 108,  264 => 105,  254 => 101,  252 => 100,  247 => 98,  243 => 97,  239 => 96,  235 => 95,  231 => 94,  228 => 93,  224 => 92,  207 => 77,  201 => 74,  191 => 67,  185 => 64,  177 => 59,  171 => 56,  165 => 53,  161 => 51,  159 => 50,  154 => 47,  143 => 42,  137 => 41,  132 => 38,  129 => 36,  128 => 35,  127 => 34,  125 => 33,  117 => 27,  113 => 25,  108 => 22,  104 => 20,  100 => 18,  98 => 17,  95 => 16,  93 => 15,  90 => 14,  88 => 13,  81 => 11,  78 => 10,  76 => 9,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "page/final_profile_corrected.html.twig", "C:\\xampp\\htdocs\\Arcadia\\templates\\page\\final_profile_corrected.html.twig");
    }
}
