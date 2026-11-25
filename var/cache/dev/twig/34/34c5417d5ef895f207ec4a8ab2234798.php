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

/* homepage/apropos.html.twig */
class __TwigTemplate_a692cdff19f32441d755a1834bfa3340 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage/apropos.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage/apropos.html.twig"));

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

        yield "Dossier Classifié : ";
        yield (string) $this->escaper->escape((isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 3, $this->source); })()), "html", null, true);
        yield " d\x27Alfred Pennyworth";
        
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
            <div class=\"section-label\">Archives Confidentielles • Wayne Manor</div>
            <h1 class=\"section-title\">Le Dossier Secret d\x27<span class=\"gold-text\">Alfred Pennyworth</span></h1>
            <p class=\"section-subtitle\" style=\"margin-bottom: 0;\">
                Ancien agent du SAS britannique, comédien shakespearien, chirurgien de fortune et pilier moral du Chevalier Noir.
            </p>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 17
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

        // line 18
        yield "    <section class=\"section-padding\" style=\"padding-top: 3rem;\">
        <div class=\"container\">
            <div class=\"hero-grid\" style=\"margin-bottom: 5rem;\">
                <div class=\"hero-visual\">
                    <div class=\"hero-card-frame\">
                        <img src=\"";
        // line 23
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/alfred.jpg"), "html", null, true);
        yield "\" alt=\"Portrait d\x27Alfred Pennyworth\" class=\"hero-image\">
                        <div class=\"floating-pill pill-bottom-left\">
                            <i class=\"fas fa-user-secret\"></i>
                            <div>
                                <div class=\"pill-title\">Matricule MI6 / SAS</div>
                                <div class=\"pill-desc\">Dossier Classé Secret Défense</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class=\"confidential-badge\">
                        <i class=\"fas fa-folder-open\"></i> Biographie Officielle & Officieuse
                    </div>
                    <h2 class=\"section-title\" style=\"font-size: 2.2rem;\">
                        L\x27Homme Derrière le <span class=\"gold-text\">Masque</span>
                    </h2>
                    <p style=\"color: var(--text-muted); margin-bottom: 1.2rem; font-size: 1.02rem;\">
                        Pour la haute société de Gotham City, <strong>Alfred Thaddeus Crane Pennyworth</strong> est le majordome britannique imperturbable du milliardaire excentrique Bruce Wayne. Toujours impeccable dans son costume trois-pièces, il règne en maître sur les réceptions du Manoir Wayne.
                    </p>
                    <p style=\"color: var(--text-muted); margin-bottom: 1.8rem; font-size: 1.02rem;\">
                        Mais lorsque l\x27horloge du grand salon marque <strong>10h47</strong>, les portes dérobées s\x27ouvrent sur la Batcave. C\x27est lui qui maintient le Bat-Ordinateur en ligne, répare le blindage de la Batmobile, recoud les blessures du Chevalier Noir et lui rappelle de prendre son petit-déjeuner.
                    </p>

                    <div class=\"pillars-grid\" style=\"grid-template-columns: 1fr 1fr; gap: 1.2rem;\">
                        <div class=\"pillar-card\" style=\"padding: 1.5rem;\">
                            <h3 style=\"font-size: 1.05rem;\"><i class=\"fas fa-mug-hot gold-highlight\"></i> Savoir-Faire Royal</h3>
                            <p style=\"font-size: 0.86rem;\">Diplômé d\x27honneur de la British Butler Guild, maître en œnologie et art de la table.</p>
                        </div>
                        <div class=\"pillar-card\" style=\"padding: 1.5rem;\">
                            <h3 style=\"font-size: 1.05rem;\"><i class=\"fas fa-jet-fighter gold-highlight\"></i> Tactique & Terrain</h3>
                            <p style=\"font-size: 0.86rem;\">Ex-SAS, pilote à distance du Batwing, expert en cryptographie et médecine d\x27urgence.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Timeline humoristique d\x27une journée type -->
            <div class=\"text-center\" style=\"margin-bottom: 3rem;\">
                <div class=\"section-label\">24 Heures au Manoir</div>
                <h2 class=\"section-title\">Une Journée Type d\x27<span class=\"gold-text\">Alfred</span></h2>
            </div>

            <div class=\"pillars-grid\">
                <div class=\"pillar-card\">
                    <div class=\"pillar-num\">08h</div>
                    <div class=\"pillar-icon\"><i class=\"fas fa-bell-concierge\"></i></div>
                    <h3>Réveil de Maître Bruce</h3>
                    <p>Ouverture des rideaux, préparation des œufs Bénédicte, lecture de la une du <em>Gotham Globe</em> et dissimulation des bleus de la veille avec du fond de teint.</p>
                </div>

                <div class=\"pillar-card\">
                    <div class=\"pillar-num\">14h</div>
                    <div class=\"pillar-icon\"><i class=\"fas fa-broom\"></i></div>
                    <h3>Intendance & Passages Secrets</h3>
                    <p>Polissage de l\x27argenterie royale, dépoussiérage du buste de Shakespeare (celui qui cache le bouton d\x27accès secret) et taille des rosiers du parc.</p>
                </div>

                <div class=\"pillar-card\">
                    <div class=\"pillar-num\">22h</div>
                    <div class=\"pillar-icon\"><i class=\"fas fa-satellite-dish\"></i></div>
                    <h3>Départ en Patrouille</h3>
                    <p>Vérification de la pression des pneus de la Batmobile, chargement des Batarangs et connexion aux fréquences radio de la police de Gotham.</p>
                </div>

                <div class=\"pillar-card\">
                    <div class=\"pillar-num\">04h</div>
                    <div class=\"pillar-icon\"><i class=\"fas fa-Bandage\"></i><i class=\"fas fa-Briefcase-medical\"></i></div>
                    <h3>Débriefing & Thé Chaud</h3>
                    <p>Extraction de shrapnels, nettoyage des traces de gaz hilarant sur la cape en Kevlar et réplique sarcastique parfaitement dosée avant d\x27aller dormir 2 heures.</p>
                </div>
            </div>
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
        return "homepage/apropos.html.twig";
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
        return array (  148 => 23,  141 => 18,  128 => 17,  108 => 6,  95 => 5,  70 => 3,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}Dossier Classifié : {{ controller_name }} d\x27Alfred Pennyworth{% endblock %}

{% block page_banner %}
    <section class=\"page-hero-banner\">
        <div class=\"container text-center\">
            <div class=\"section-label\">Archives Confidentielles • Wayne Manor</div>
            <h1 class=\"section-title\">Le Dossier Secret d\x27<span class=\"gold-text\">Alfred Pennyworth</span></h1>
            <p class=\"section-subtitle\" style=\"margin-bottom: 0;\">
                Ancien agent du SAS britannique, comédien shakespearien, chirurgien de fortune et pilier moral du Chevalier Noir.
            </p>
        </div>
    </section>
{% endblock %}

{% block body %}
    <section class=\"section-padding\" style=\"padding-top: 3rem;\">
        <div class=\"container\">
            <div class=\"hero-grid\" style=\"margin-bottom: 5rem;\">
                <div class=\"hero-visual\">
                    <div class=\"hero-card-frame\">
                        <img src=\"{{ asset(\x27images/alfred.jpg\x27) }}\" alt=\"Portrait d\x27Alfred Pennyworth\" class=\"hero-image\">
                        <div class=\"floating-pill pill-bottom-left\">
                            <i class=\"fas fa-user-secret\"></i>
                            <div>
                                <div class=\"pill-title\">Matricule MI6 / SAS</div>
                                <div class=\"pill-desc\">Dossier Classé Secret Défense</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class=\"confidential-badge\">
                        <i class=\"fas fa-folder-open\"></i> Biographie Officielle & Officieuse
                    </div>
                    <h2 class=\"section-title\" style=\"font-size: 2.2rem;\">
                        L\x27Homme Derrière le <span class=\"gold-text\">Masque</span>
                    </h2>
                    <p style=\"color: var(--text-muted); margin-bottom: 1.2rem; font-size: 1.02rem;\">
                        Pour la haute société de Gotham City, <strong>Alfred Thaddeus Crane Pennyworth</strong> est le majordome britannique imperturbable du milliardaire excentrique Bruce Wayne. Toujours impeccable dans son costume trois-pièces, il règne en maître sur les réceptions du Manoir Wayne.
                    </p>
                    <p style=\"color: var(--text-muted); margin-bottom: 1.8rem; font-size: 1.02rem;\">
                        Mais lorsque l\x27horloge du grand salon marque <strong>10h47</strong>, les portes dérobées s\x27ouvrent sur la Batcave. C\x27est lui qui maintient le Bat-Ordinateur en ligne, répare le blindage de la Batmobile, recoud les blessures du Chevalier Noir et lui rappelle de prendre son petit-déjeuner.
                    </p>

                    <div class=\"pillars-grid\" style=\"grid-template-columns: 1fr 1fr; gap: 1.2rem;\">
                        <div class=\"pillar-card\" style=\"padding: 1.5rem;\">
                            <h3 style=\"font-size: 1.05rem;\"><i class=\"fas fa-mug-hot gold-highlight\"></i> Savoir-Faire Royal</h3>
                            <p style=\"font-size: 0.86rem;\">Diplômé d\x27honneur de la British Butler Guild, maître en œnologie et art de la table.</p>
                        </div>
                        <div class=\"pillar-card\" style=\"padding: 1.5rem;\">
                            <h3 style=\"font-size: 1.05rem;\"><i class=\"fas fa-jet-fighter gold-highlight\"></i> Tactique & Terrain</h3>
                            <p style=\"font-size: 0.86rem;\">Ex-SAS, pilote à distance du Batwing, expert en cryptographie et médecine d\x27urgence.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Timeline humoristique d\x27une journée type -->
            <div class=\"text-center\" style=\"margin-bottom: 3rem;\">
                <div class=\"section-label\">24 Heures au Manoir</div>
                <h2 class=\"section-title\">Une Journée Type d\x27<span class=\"gold-text\">Alfred</span></h2>
            </div>

            <div class=\"pillars-grid\">
                <div class=\"pillar-card\">
                    <div class=\"pillar-num\">08h</div>
                    <div class=\"pillar-icon\"><i class=\"fas fa-bell-concierge\"></i></div>
                    <h3>Réveil de Maître Bruce</h3>
                    <p>Ouverture des rideaux, préparation des œufs Bénédicte, lecture de la une du <em>Gotham Globe</em> et dissimulation des bleus de la veille avec du fond de teint.</p>
                </div>

                <div class=\"pillar-card\">
                    <div class=\"pillar-num\">14h</div>
                    <div class=\"pillar-icon\"><i class=\"fas fa-broom\"></i></div>
                    <h3>Intendance & Passages Secrets</h3>
                    <p>Polissage de l\x27argenterie royale, dépoussiérage du buste de Shakespeare (celui qui cache le bouton d\x27accès secret) et taille des rosiers du parc.</p>
                </div>

                <div class=\"pillar-card\">
                    <div class=\"pillar-num\">22h</div>
                    <div class=\"pillar-icon\"><i class=\"fas fa-satellite-dish\"></i></div>
                    <h3>Départ en Patrouille</h3>
                    <p>Vérification de la pression des pneus de la Batmobile, chargement des Batarangs et connexion aux fréquences radio de la police de Gotham.</p>
                </div>

                <div class=\"pillar-card\">
                    <div class=\"pillar-num\">04h</div>
                    <div class=\"pillar-icon\"><i class=\"fas fa-Bandage\"></i><i class=\"fas fa-Briefcase-medical\"></i></div>
                    <h3>Débriefing & Thé Chaud</h3>
                    <p>Extraction de shrapnels, nettoyage des traces de gaz hilarant sur la cape en Kevlar et réplique sarcastique parfaitement dosée avant d\x27aller dormir 2 heures.</p>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "homepage/apropos.html.twig", "/var/www/site-vitrine-alfred/templates/homepage/apropos.html.twig");
    }
}
