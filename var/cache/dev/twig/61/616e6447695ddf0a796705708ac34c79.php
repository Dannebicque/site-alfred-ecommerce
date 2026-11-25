<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\MacroNamespace;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* produit/index.html.twig */
class __TwigTemplate_8a2b15d8e73d1b83a59d1d77804f21a7 extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];
    private \Twig\Runtime\EscaperRuntime $escaper;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->escaper = $env->getRuntime('Twig\Runtime\EscaperRuntime');

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'page_banner' => [$this, 'block_page_banner'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->parent ??= $this->load("base.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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

        yield "Bat-Arsenal & Gadgets WayneTech • Alfred Pennyworth";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_banner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_banner"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_banner"));

        // line 6
        yield "    <section class=\"page-hero-banner\">
        <div class=\"container text-center\">
            <div class=\"section-label\">Inventaire Doctrine ORM • Wayne Enterprises R&D</div>
            <h1 class=\"section-title\">L\x27Arsenal de la <span class=\"gold-text\">Batcave</span></h1>
            <p class=\"section-subtitle\" style=\"margin-bottom: 1.5rem;\">
                Catalogue des équipements tactiques supervisés par Alfred Pennyworth et Lucius Fox (chargés depuis
                l\x27entité <code>Produit</code> en base de données).
            </p>
            <a href=\"";
        // line 14
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_new");
        yield "\" class=\"btn btn-outline-gold\">
                <i class=\"fas fa-plus-circle\"></i> Forger un Gadget Test en Base (<code>/produit/new</code>)
            </a>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 21
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

        // line 22
        yield "    <section class=\"section-padding\" style=\"padding-top: 3rem;\">
        <div class=\"container\">
            <div class=\"arsenal-grid\">
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 25, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 26
            yield "                    <article class=\"service-card arsenal-card\">
                        <div class=\"service-img-wrap arsenal-img-wrap\">
                            <img src=\"";
            // line 28
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 28))), "html", null, true);
            yield "\"
                                 alt=\"";
            // line 29
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 29), "html", null, true);
            yield "\"
                                 onerror=\"this.onerror=null;this.src=\x27";
            // line 30
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/batarang.png"), "html", null, true);
            yield "\x27;\">
                            <div class=\"service-tag\">
                                <i class=\"fas fa-boxes-stacked\"></i> Stock : ";
            // line 32
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "quantite", [], "any", false, false, false, 32), "html", null, true);
            yield " u.
                            </div>
                        </div>
                        <div class=\"service-content\">
                            <div class=\"arsenal-header-row\">
                                <h3>";
            // line 37
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 37), "html", null, true);
            yield "</h3>
                                <span class=\"arsenal-price\">";
            // line 38
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 38), "html", null, true);
            yield " €</span>
                            </div>
                            <p>";
            // line 40
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 40), "html", null, true);
            yield "</p>

                            ";
            // line 42
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "caracteristiques", [], "any", true, true, false, 42) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "caracteristiques", [], "any", false, false, false, 42)))) {
                // line 43
                yield "                                <ul class=\"service-features-list\">
                                    ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "caracteristiques", [], "any", false, false, false, 44));
                foreach ($context['_seq'] as $context["cle"] => $context["valeur"]) {
                    // line 45
                    yield "                                        <li>
                                            <i class=\"fas fa-microchip\"></i>
                                            <span>";
                    // line 47
                    yield (string) ((( !($context["cle"] === 0) &&  !CoreExtension::matches("/^\\d+\$/", $context["cle"]))) ? ($this->escaper->escape(($context["cle"] . " : "), "html", null, true)) : (""));
                    yield (string) $this->escaper->escape($context["valeur"], "html", null, true);
                    yield "</span>
                                        </li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['cle'], $context['valeur'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 50
                yield "                                </ul>
                            ";
            }
            // line 52
            yield "
                            <div class=\"arsenal-footer-actions\">
                                <a href=\"";
            // line 54
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            yield "\">Voir la fiche produit</a>



                                <a href=\"";
            // line 58
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact", ["sujet" => ("Réquisition équipement : " . CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 58))]), "html", null, true);
            yield "\"
                                   class=\"btn btn-gold\" style=\"width: 100%;\">
                                    <i class=\"fas fa-shield-halved\"></i> Équiper dans la Ceinture Utilitaire
                                </a>
                            </div>
                        </div>
                    </article>
                ";
            $context['_iterated'] = true;
        }
        // line 65
        if (!$context['_iterated']) {
            // line 66
            yield "                    <div class=\"empty-arsenal-box text-center\">
                        <img src=\"";
            // line 67
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/batarang.png"), "html", null, true);
            yield "\" alt=\"Batarang\"
                             style=\"width: 90px; margin: 0 auto 1.2rem;\">
                        <h3 class=\"font-cinzel\" style=\"color: #fff; margin-bottom: 0.6rem;\">L\x27armurerie de la Batcave
                            est actuellement vide</h3>
                        <p style=\"color: var(--text-muted); margin-bottom: 1.5rem;\">
                            Maître Bruce a probablement emporté tous les Batarangs en patrouille. Ajoutez un équipement
                            en base de données !
                        </p>
                        <a href=\"";
            // line 75
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_new");
            yield "\" class=\"btn btn-gold\">
                            <i class=\"fas fa-bolt\"></i> Créer un Produit de Démonstration
                        </a>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 80
        yield "            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "produit/index.html.twig";
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
    public function getDefaultEscapeStrategy(): string|false
    {
        return "html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  274 => 80,  262 => 75,  251 => 67,  248 => 66,  246 => 65,  234 => 58,  227 => 54,  223 => 52,  219 => 50,  208 => 47,  204 => 45,  200 => 44,  197 => 43,  195 => 42,  190 => 40,  185 => 38,  181 => 37,  173 => 32,  168 => 30,  164 => 29,  160 => 28,  156 => 26,  151 => 25,  146 => 22,  133 => 21,  116 => 14,  106 => 6,  93 => 5,  70 => 3,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}Bat-Arsenal & Gadgets WayneTech • Alfred Pennyworth{% endblock %}

{% block page_banner %}
    <section class=\"page-hero-banner\">
        <div class=\"container text-center\">
            <div class=\"section-label\">Inventaire Doctrine ORM • Wayne Enterprises R&D</div>
            <h1 class=\"section-title\">L\x27Arsenal de la <span class=\"gold-text\">Batcave</span></h1>
            <p class=\"section-subtitle\" style=\"margin-bottom: 1.5rem;\">
                Catalogue des équipements tactiques supervisés par Alfred Pennyworth et Lucius Fox (chargés depuis
                l\x27entité <code>Produit</code> en base de données).
            </p>
            <a href=\"{{ path(\x27app_produit_new\x27) }}\" class=\"btn btn-outline-gold\">
                <i class=\"fas fa-plus-circle\"></i> Forger un Gadget Test en Base (<code>/produit/new</code>)
            </a>
        </div>
    </section>
{% endblock %}

{% block body %}
    <section class=\"section-padding\" style=\"padding-top: 3rem;\">
        <div class=\"container\">
            <div class=\"arsenal-grid\">
                {% for produit in produits %}
                    <article class=\"service-card arsenal-card\">
                        <div class=\"service-img-wrap arsenal-img-wrap\">
                            <img src=\"{{ asset(\x27images/\x27 ~ produit.image) }}\"
                                 alt=\"{{ produit.nom }}\"
                                 onerror=\"this.onerror=null;this.src=\x27{{ asset(\x27images/batarang.png\x27) }}\x27;\">
                            <div class=\"service-tag\">
                                <i class=\"fas fa-boxes-stacked\"></i> Stock : {{ produit.quantite }} u.
                            </div>
                        </div>
                        <div class=\"service-content\">
                            <div class=\"arsenal-header-row\">
                                <h3>{{ produit.nom }}</h3>
                                <span class=\"arsenal-price\">{{ produit.prix }} €</span>
                            </div>
                            <p>{{ produit.description }}</p>

                            {% if produit.caracteristiques is defined and produit.caracteristiques is not empty %}
                                <ul class=\"service-features-list\">
                                    {% for cle, valeur in produit.caracteristiques %}
                                        <li>
                                            <i class=\"fas fa-microchip\"></i>
                                            <span>{{ cle is not same as(0) and not (cle matches \x27/^\\\\d+\$/\x27) ? cle ~ \x27 : \x27 : \x27\x27 }}{{ valeur }}</span>
                                        </li>
                                    {% endfor %}
                                </ul>
                            {% endif %}

                            <div class=\"arsenal-footer-actions\">
                                <a href=\"{{ path(\x27app_produit_show\x27, {id: produit.id}) }}\">Voir la fiche produit</a>



                                <a href=\"{{ path(\x27app_contact\x27, {sujet: \x27Réquisition équipement : \x27 ~ produit.nom}) }}\"
                                   class=\"btn btn-gold\" style=\"width: 100%;\">
                                    <i class=\"fas fa-shield-halved\"></i> Équiper dans la Ceinture Utilitaire
                                </a>
                            </div>
                        </div>
                    </article>
                {% else %}
                    <div class=\"empty-arsenal-box text-center\">
                        <img src=\"{{ asset(\x27images/batarang.png\x27) }}\" alt=\"Batarang\"
                             style=\"width: 90px; margin: 0 auto 1.2rem;\">
                        <h3 class=\"font-cinzel\" style=\"color: #fff; margin-bottom: 0.6rem;\">L\x27armurerie de la Batcave
                            est actuellement vide</h3>
                        <p style=\"color: var(--text-muted); margin-bottom: 1.5rem;\">
                            Maître Bruce a probablement emporté tous les Batarangs en patrouille. Ajoutez un équipement
                            en base de données !
                        </p>
                        <a href=\"{{ path(\x27app_produit_new\x27) }}\" class=\"btn btn-gold\">
                            <i class=\"fas fa-bolt\"></i> Créer un Produit de Démonstration
                        </a>
                    </div>
                {% endfor %}
            </div>
        </div>
    </section>
{% endblock %}
", "produit/index.html.twig", "/var/www/site-vitrine-alfred/templates/produit/index.html.twig");
    }
}
