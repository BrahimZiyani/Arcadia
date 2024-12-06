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
class __TwigTemplate_864031c52160c09594c4b2693b079823 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "page/profile.html.twig", 1);
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
            yield "                <h2 class=\"mb-4\">Créer un compte rendu</h2>
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["habitats"] ?? null));
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
            if ((CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 133), "roles", [], "any", false, false, false, 133)) || CoreExtension::inFilter("ROLE_VETERINAIRE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 133), "roles", [], "any", false, false, false, 133)))) {
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
        if ((CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 153), "roles", [], "any", false, false, false, 153)) || CoreExtension::inFilter("ROLE_VETERINAIRE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 153), "roles", [], "any", false, false, false, 153)))) {
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
            <th>Nombre de visites</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["animals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["animal"]) {
            // line 172
            yield "            <tr>
                <td>";
            // line 173
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "nom", [], "any", false, false, false, 173), "html", null, true);
            yield "</td>
                <td>";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "race", [], "any", false, false, false, 174), "html", null, true);
            yield "</td>
                <td>";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "habitat", [], "any", false, false, false, 175), "nom", [], "any", false, false, false, 175), "html", null, true);
            yield "</td>
                <td>";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "visites", [], "any", false, false, false, 176), "html", null, true);
            yield "</td> <!-- Nouvelle colonne pour afficher les visites -->
                <td>
                    ";
            // line 178
            if ((CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 178), "roles", [], "any", false, false, false, 178)) || CoreExtension::inFilter("ROLE_VETERINAIRE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 178), "roles", [], "any", false, false, false, 178)))) {
                // line 179
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animal_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "id", [], "any", false, false, false, 179)]), "html", null, true);
                yield "\" class=\"btn btn-warning btn-sm\">Modifier</a>
                        <button 
                            type=\"button\" 
                            class=\"btn btn-danger btn-sm delete-button\" 
                            data-url=\"";
                // line 183
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animal_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "id", [], "any", false, false, false, 183)]), "html", null, true);
                yield "\"
                            data-token=\"";
                // line 184
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "id", [], "any", false, false, false, 184))), "html", null, true);
                yield "\">
                            Supprimer
                        </button>
                    ";
            } else {
                // line 188
                yield "                        <span class=\"text-muted\">Action non autorisée</span>
                    ";
            }
            // line 190
            yield "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['animal'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        yield "    </tbody>
</table>

            <!-- Bouton Ajouter un animal -->
            ";
        // line 197
        if ((CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 197), "roles", [], "any", false, false, false, 197)) || CoreExtension::inFilter("ROLE_VETERINAIRE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 197), "roles", [], "any", false, false, false, 197)))) {
            // line 198
            yield "                <div class=\"mt-4\">
                    <a href=\"";
            // line 199
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animal_new");
            yield "\" class=\"btn btn-dark\">Ajouter un animal</a>
                </div>
            ";
        }
        // line 202
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
        // line 217
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 218
            yield "            <tr>
                <td>";
            // line 219
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 219), "html", null, true);
            yield "</td>
                <td>";
            // line 220
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 220), "html", null, true);
            yield "</td>
                <td>";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 221), "html", null, true);
            yield "</td>
                <td>
                    ";
            // line 223
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 223))) {
                // line 224
                yield "                        Administrateur
                    ";
            } elseif (CoreExtension::inFilter("ROLE_VETERINAIRE", CoreExtension::getAttribute($this->env, $this->source,             // line 225
$context["user"], "roles", [], "any", false, false, false, 225))) {
                // line 226
                yield "                        Vétérinaire
                    ";
            } else {
                // line 228
                yield "                        Employé
                    ";
            }
            // line 230
            yield "                </td>
                <td>
                    ";
            // line 232
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 232), "roles", [], "any", false, false, false, 232))) {
                // line 233
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 233)]), "html", null, true);
                yield "\" class=\"btn btn-warning btn-sm\">Modifier</a>
                        <form method=\"POST\" action=\"";
                // line 234
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 234)]), "html", null, true);
                yield "\" style=\"display:inline;\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 235
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 235))), "html", null, true);
                yield "\">
                            <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                        </form>
                    ";
            } else {
                // line 239
                yield "                        <span class=\"text-muted\">Action non autorisée</span>
                    ";
            }
            // line 241
            yield "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 244
        yield "    </tbody>
</table>
";
        // line 246
        if ((CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 246), "roles", [], "any", false, false, false, 246)) || CoreExtension::inFilter("ROLE_VETERINAIRE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 246), "roles", [], "any", false, false, false, 246)))) {
            // line 247
            yield "    <div class=\"mt-3\">
        <a href=\"";
            // line 248
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_new");
            yield "\" class=\"btn btn-dark\">Ajouter un employé</a>
    </div>
";
        } else {
            // line 251
            yield "    <span class=\"text-muted\">Action non autorisée</span>
";
        }
        // line 253
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["services"] ?? null));
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/services/" . (($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["service"], "images", [], "any", false, false, false, 273)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null))), "html", null, true);
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
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 282), "roles", [], "any", false, false, false, 282))) {
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["avisNonValides"] ?? null)) > 0)) {
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
            $context['_seq'] = CoreExtension::ensureTraversable(($context["avisNonValides"] ?? null));
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
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "contenu", [], "any", false, false, false, 326)) > 100)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "contenu", [], "any", false, false, false, 326), 0, 100) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["avis"], "contenu", [], "any", false, false, false, 326), "html", null, true)));
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
        // line 357
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 361
        yield "
";
        yield from [];
    }

    // line 357
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 358
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 359
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/delete.js"), "html", null, true);
        yield "\"></script>
";
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
        return array (  785 => 359,  780 => 358,  773 => 357,  767 => 361,  765 => 357,  758 => 352,  754 => 350,  749 => 347,  741 => 344,  737 => 342,  729 => 337,  725 => 336,  716 => 330,  711 => 329,  709 => 328,  704 => 326,  700 => 325,  696 => 324,  693 => 323,  689 => 322,  677 => 312,  675 => 311,  662 => 300,  655 => 298,  646 => 293,  642 => 291,  635 => 287,  631 => 286,  626 => 283,  624 => 282,  620 => 281,  614 => 277,  610 => 275,  602 => 273,  600 => 272,  594 => 269,  589 => 266,  584 => 265,  576 => 260,  567 => 253,  563 => 251,  557 => 248,  554 => 247,  552 => 246,  548 => 244,  540 => 241,  536 => 239,  529 => 235,  525 => 234,  520 => 233,  518 => 232,  514 => 230,  510 => 228,  506 => 226,  504 => 225,  501 => 224,  499 => 223,  494 => 221,  490 => 220,  486 => 219,  483 => 218,  479 => 217,  462 => 202,  456 => 199,  453 => 198,  451 => 197,  445 => 193,  437 => 190,  433 => 188,  426 => 184,  422 => 183,  414 => 179,  412 => 178,  407 => 176,  403 => 175,  399 => 174,  395 => 173,  392 => 172,  388 => 171,  373 => 158,  369 => 156,  363 => 154,  361 => 153,  357 => 151,  348 => 147,  340 => 143,  336 => 141,  329 => 137,  325 => 136,  319 => 134,  317 => 133,  312 => 131,  308 => 130,  305 => 129,  300 => 128,  284 => 114,  276 => 111,  272 => 109,  265 => 105,  261 => 104,  254 => 101,  252 => 100,  247 => 98,  243 => 97,  239 => 96,  235 => 95,  231 => 94,  228 => 93,  224 => 92,  207 => 77,  201 => 74,  191 => 67,  185 => 64,  177 => 59,  171 => 56,  165 => 53,  161 => 51,  159 => 50,  154 => 47,  143 => 42,  137 => 41,  132 => 38,  129 => 36,  128 => 35,  127 => 34,  125 => 33,  117 => 27,  113 => 25,  108 => 22,  104 => 20,  100 => 18,  98 => 17,  95 => 16,  93 => 15,  90 => 14,  88 => 13,  81 => 11,  78 => 10,  76 => 9,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "page/profile.html.twig", "C:\\xampp\\htdocs\\Arcadia\\templates\\page\\profile.html.twig");
    }
}
