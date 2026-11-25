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

/* homepage/index.html.twig */
class __TwigTemplate_b65f45f461bb1977b8af309ca87179e9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage/index.html.twig"));

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

        yield "Alfred Pennyworth • Majordome de Wayne Manor & Opérateur Batcave";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
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
        yield "    <!-- ==========================================
         HERO SECTION
         ========================================== -->
    <section class=\"hero\" id=\"hero\">
        <div class=\"hero-bg\"></div>
        <div class=\"container\">
            <div class=\"hero-grid\">
                <div class=\"hero-content\">
                    <div class=\"hero-badge-wrap\">
                        <div class=\"hero-badge\">
                            <span class=\"dot\"></span>
                            <span>En direct du Manoir Wayne • Canal Chiffré Batcave</span>
                        </div>
                    </div>

                    <h1 class=\"hero-headline\">
                        Le Flegme Britannique le Jour, <span class=\"gold-text\">L\x27Allié de l\x27Ombre</span> la Nuit.
                    </h1>

                    <p class=\"hero-description\">
                        « À votre service, Maître Bruce. J\x27ai préparé votre thé Earl Grey à 68°C… et refait le blindage de la Batmobile. » — Majordome d\x27exception, gardien des secrets de Gotham et soutien tactique 24h/24.
                    </p>

                    <div class=\"hero-cta-group\">
                        <a href=\"#simulateur\" class=\"btn btn-gold\">
                            <i class=\"fas fa-calculator\"></i> Simuler une Bat-Mission
                        </a>
                        <a href=\"";
        // line 33
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" class=\"btn btn-glass\">
                            <i class=\"fas fa-satellite-dish\"></i> Allumer le Bat-Signal
                        </a>
                    </div>

                    <div class=\"hero-stats\">
                        <div class=\"stat-item\">
                            <div class=\"stat-num\">30+</div>
                            <div class=\"stat-label\">Ans au Service des Wayne</div>
                        </div>
                        <div class=\"stat-item\">
                            <div class=\"stat-num\">100%</div>
                            <div class=\"stat-label\">Identité Secrète Protégée</div>
                        </div>
                        <div class=\"stat-item\">
                            <div class=\"stat-num\">24/7</div>
                            <div class=\"stat-label\">Thé Chaud & Sutures Kevlar</div>
                        </div>
                    </div>
                </div>

                <div class=\"hero-visual\">
                    <div class=\"hero-card-frame\">
                        <img src=\"";
        // line 56
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/alfred.jpg"), "html", null, true);
        yield "\" alt=\"Alfred Pennyworth - Majordome de Wayne Manor\" class=\"hero-image\">

                        <div class=\"floating-pill pill-bottom-left\">
                            <i class=\"fas fa-chess-king\"></i>
                            <div>
                                <div class=\"pill-title\">British Butler & Ex-SAS</div>
                                <div class=\"pill-desc\">Du salon royal aux ruelles de Gotham</div>
                            </div>
                        </div>

                        <div class=\"floating-pill pill-top-right\">
                            <i class=\"fas fa-mask\"></i>
                            <div>
                                <div class=\"pill-title\">Opérateur Bat-Ordinateur</div>
                                <div class=\"pill-desc\">Veille Tactique & Maintenance Batcave</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
         PHILOSOPHY & 4 PILLARS
         ========================================== -->
    <section class=\"section-padding\" id=\"philosophie\">
        <div class=\"container\">
            <div class=\"text-center\">
                <div class=\"section-label\">Le Code Pennyworth</div>
                <h2 class=\"section-title\">Les 4 Piliers du <span class=\"gold-text\">Manoir Wayne</span></h2>
                <p class=\"section-subtitle\">
                    Le parfait équilibre entre étiquette aristocratique britannique, sarcasme bienveillant et logistique paramilitaire nocturne.
                </p>
            </div>

            <div class=\"pillars-grid\">
                <div class=\"pillar-card\">
                    <div class=\"pillar-num\">01</div>
                    <div class=\"pillar-icon\"><i class=\"fas fa-user-secret\"></i></div>
                    <h3>Secret Absolu & Couverture</h3>
                    <p>Personne ne soupçonne ce qui se cache derrière l\x27horloge grand-père du salon. Alibis de milliardaire excentrique garantis auprès de la presse de Gotham.</p>
                </div>

                <div class=\"pillar-card\">
                    <div class=\"pillar-num\">02</div>
                    <div class=\"pillar-icon\"><i class=\"fas fa-satellite\"></i></div>
                    <h3>Support Tactique & Bat-Ordinateur</h3>
                    <p>Piratage des fréquences du GCPD, analyse balistique en temps réel, suivi GPS sur les toits de Gotham et extraction d\x27urgence en Batwing.</p>
                </div>

                <div class=\"pillar-card\">
                    <div class=\"pillar-num\">03</div>
                    <div class=\"pillar-icon\"><i class=\"fas fa-kit-medical\"></i></div>
                    <h3>Gastronomie & Chirurgie de Nuit</h3>
                    <p>Homard Thermidor et grands millésimes servis à 20h00 ; points de suture, cryothérapie et réparation d\x27armure en Kevlar à 03h30 du matin.</p>
                </div>

                <div class=\"pillar-card\">
                    <div class=\"pillar-num\">04</div>
                    <div class=\"pillar-icon\"><i class=\"fas fa-Dungeon\"></i><i class=\"fas fa-key\"></i></div>
                    <h3>Gérance Manoir & Batcave</h3>
                    <p>Entretien des lustres en cristal et de l\x27argenterie familiale à l\x27étage, calibrage du réacteur nucléaire et nettoyage du guano de chauve-souris au sous-sol.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
         SERVICES & PRESTATIONS (Données JSON)
         ========================================== -->
    <section class=\"section-padding section-alt-bg\" id=\"prestations\">
        <div class=\"container\">
            <div class=\"text-center\">
                <div class=\"section-label\">Services de Haute Volée</div>
                <h2 class=\"section-title\">Prestations Signées <span class=\"gold-text\">Alfred Pennyworth</span></h2>
                <p class=\"section-subtitle\">
                    Du protocole de jour aux missions confidentielles de nuit : découvrez nos départements d\x27intervention chargés dynamiquement depuis <code>services.json</code>.
                </p>
            </div>

            <div class=\"services-tabs-wrap\" role=\"tablist\" aria-label=\"Filtrer les prestations\">
                <button type=\"button\" class=\"service-tab-btn active\" data-filter=\"all\">Toutes les Missions</button>
                <button type=\"button\" class=\"service-tab-btn\" data-filter=\"residence\">Manoir Wayne</button>
                <button type=\"button\" class=\"service-tab-btn\" data-filter=\"batcave\">Opérations Batcave</button>
                <button type=\"button\" class=\"service-tab-btn\" data-filter=\"yacht\">Croisières Alibis</button>
                <button type=\"button\" class=\"service-tab-btn\" data-filter=\"event\">Galas de Gotham</button>
            </div>

            <div class=\"services-showcase-grid\" id=\"services-grid\">
                ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["missions"]) || array_key_exists("missions", $context) ? $context["missions"] : (function () { throw new RuntimeError('Variable "missions" does not exist.', 146, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mission"]) {
            // line 147
            yield "                    <article class=\"service-card\" data-category=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mission"], "category", [], "any", false, false, false, 147), "html", null, true);
            yield "\">
                        <div class=\"service-img-wrap\">
                            <img src=\"";
            // line 149
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["mission"], "image", [], "any", false, false, false, 149)), "html", null, true);
            yield "\" alt=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mission"], "imageAlt", [], "any", false, false, false, 149), "html", null, true);
            yield "\">
                            <div class=\"service-tag\">";
            // line 150
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mission"], "tag", [], "any", false, false, false, 150), "html", null, true);
            yield "</div>
                        </div>
                        <div class=\"service-content\">
                            <h3>";
            // line 153
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mission"], "title", [], "any", false, false, false, 153), "html", null, true);
            yield "</h3>
                            <p>";
            // line 154
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mission"], "description", [], "any", false, false, false, 154), "html", null, true);
            yield "</p>
                            <ul class=\"service-features-list\">
                                ";
            // line 156
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["mission"], "features", [], "any", false, false, false, 156));
            foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
                // line 157
                yield "                                    <li><i class=\"fas fa-check-circle\"></i> ";
                yield (string) $this->escaper->escape($context["tache"], "html", null, true);
                yield "</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tache'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 159
            yield "                            </ul>
                            <a href=\"";
            // line 160
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact", ["sujet" => CoreExtension::getAttribute($this->env, $this->source, $context["mission"], "title", [], "any", false, false, false, 160)]), "html", null, true);
            yield "\" class=\"btn btn-outline-gold\">
                                <i class=\"fas fa-arrow-right\"></i> ";
            // line 161
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["mission"], "action", [], "any", false, false, false, 161), "label", [], "any", false, false, false, 161), "html", null, true);
            yield "
                            </a>
                        </div>
                    </article>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['mission'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 166
        yield "            </div>
        </div>
    </section>

    <!-- ==========================================
         SIMULATOR & ESTIMATOR
         ========================================== -->
    <section class=\"section-padding\" id=\"simulateur\">
        <div class=\"container\">
            <div class=\"text-center\">
                <div class=\"section-label\">Estimation WayneTech Immédiate</div>
                <h2 class=\"section-title\">Simulateur de <span class=\"gold-text\">Bat-Intervention</span></h2>
                <p class=\"section-subtitle\">
                    Calculez en direct les honoraires d\x27intendance ou de soutien tactique selon le niveau de menace à Gotham City.
                </p>
            </div>

            <div class=\"simulator-box\">
                <div class=\"simulator-grid\">
                    <!-- Controls -->
                    <div class=\"simulator-controls\">
                        <!-- 1. Mission Type -->
                        <div class=\"sim-group\" data-group=\"mission\">
                            <label class=\"sim-label\">1. Nature de l\x27Opération</label>
                            <div class=\"sim-chips\">
                                <button type=\"button\" class=\"sim-chip selected\" data-val=\"residence\" data-rate=\"850\" data-label=\"Intendance Manoir Wayne\">
                                    <i class=\"fas fa-landmark\"></i> Intendance Manoir Wayne
                                </button>
                                <button type=\"button\" class=\"sim-chip\" data-val=\"batcave\" data-rate=\"1250\" data-label=\"Veille Tactique Batcave\">
                                    <i class=\"fas fa-mask\"></i> Veille Tactique Batcave
                                </button>
                                <button type=\"button\" class=\"sim-chip\" data-val=\"event\" data-rate=\"1100\" data-label=\"Gala Fondation Wayne\">
                                    <i class=\"fas fa-champagne-glasses\"></i> Gala Fondation Wayne
                                </button>
                                <button type=\"button\" class=\"sim-chip\" data-val=\"yacht\" data-rate=\"950\" data-label=\"Croisière Alibi Milliardaire\">
                                    <i class=\"fas fa-anchor\"></i> Croisière Alibi VIP
                                </button>
                            </div>
                        </div>

                        <!-- 2. Location -->
                        <div class=\"sim-group\">
                            <label class=\"sim-label\" for=\"sim-location\">2. Secteur d\x27Affectation</label>
                            <select id=\"sim-location\" class=\"sim-select\">
                                <option value=\"gotham\" data-mult=\"1\" data-label=\"Gotham City & Manoir Wayne\">Gotham City & Bristol Township (Standard)</option>
                                <option value=\"arkham\" data-mult=\"1.35\" data-label=\"Périmètre Asile d\x27Arkham\">Périmètre Haute Sécurité d\x27Arkham (+35% Risque Joker)</option>
                                <option value=\"metropolis\" data-mult=\"1.15\" data-label=\"Metropolis & Côte Est\">Metropolis — Sommet Wayne / LexCorp (+15%)</option>
                                <option value=\"london\" data-mult=\"1.2\" data-label=\"Londres & Campagnes Royales\">Londres & Domaines Britanniques (+20%)</option>
                                <option value=\"monaco\" data-mult=\"1.3\" data-label=\"Monaco & Yachting International\">Monaco, Hong Kong & Eaux Internationales (+30%)</option>
                            </select>
                        </div>

                        <!-- 3. Duration -->
                        <div class=\"sim-group\">
                            <label class=\"sim-label\" for=\"sim-duration\">3. Durée de Mobilisation</label>
                            <select id=\"sim-duration\" class=\"sim-select\">
                                <option value=\"1\" data-label=\"1 Nuit de Patrouille\">1 Nuit (Urgence Super-Vilain / Gala)</option>
                                <option value=\"3\" data-label=\"3 Jours (Weekend)\">3 Jours (Escapade Alibi ou Crise à Gotham)</option>
                                <option value=\"7\" selected data-label=\"1 Semaine (7 Jours)\">1 Semaine (7 Jours d\x27Intendance Complète)</option>
                                <option value=\"14\" data-label=\"2 Semaines (14 Jours)\">2 Semaines (14 Jours)</option>
                                <option value=\"30\" data-label=\"1 Mois Complet\">1 Mois (Campagne Nocturne Longue)</option>
                            </select>
                        </div>

                        <!-- 4. Extras -->
                        <div class=\"sim-group\" data-group=\"extra\">
                            <label class=\"sim-label\">4. Protocoles & Gadgets Complémentaires</label>
                            <div class=\"sim-chips\">
                                <button type=\"button\" class=\"sim-chip\" data-val=\"kevlar\" data-label=\"Couture Kevlar & Sutures\" data-rate=\"280\">
                                    <i class=\"fas fa-user-nurse\"></i> Sutures & Repassage de Cape
                                </button>
                                <button type=\"button\" class=\"sim-chip\" data-val=\"batmobile\" data-label=\"Maintenance Batmobile\" data-rate=\"320\">
                                    <i class=\"fas fa-car-burst\"></i> Plein Kérosène Batmobile
                                </button>
                                <button type=\"button\" class=\"sim-chip\" data-val=\"sommelier\" data-label=\"Cave Secrète & Thé Earl Grey\" data-rate=\"190\">
                                    <i class=\"fas fa-mug-hot\"></i> Grands Crus & Earl Grey 68°C
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Summary & Quote Output -->
                    <div class=\"sim-summary-panel\">
                        <div>
                            <div class=\"summary-header\">
                                <h4><i class=\"fas fa-terminal gold-highlight\"></i> Rapport Bat-Ordinateur</h4>
                            </div>

                            <div class=\"summary-rows\">
                                <div class=\"summary-row\">
                                    <span>Opération :</span>
                                    <span id=\"sum-mission\">Intendance Manoir Wayne</span>
                                </div>
                                <div class=\"summary-row\">
                                    <span>Secteur :</span>
                                    <span id=\"sum-location\">Gotham City & Manoir Wayne</span>
                                </div>
                                <div class=\"summary-row\">
                                    <span>Durée :</span>
                                    <span id=\"sum-duration\">1 Semaine (7 Jours)</span>
                                </div>
                                <div class=\"summary-row\">
                                    <span>Suppléments :</span>
                                    <span id=\"sum-extras\" style=\"text-align: right; max-width: 58%;\">Flegme Britannique Inclus</span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class=\"estimate-price-wrap\">
                                <div class=\"estimate-label\">Budget Wayne Enterprises Estimé</div>
                                <div class=\"estimate-price\" id=\"sum-price\">~ 5 950 € HT</div>
                                <div class=\"estimate-note\">* Facturable sur le compte « Recherche & Développement » de Wayne Corp.</div>
                            </div>

                            <a href=\"";
        // line 281
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" id=\"sim-book-btn\" class=\"btn btn-gold\" style=\"width: 100%;\">
                                <i class=\"fas fa-paper-plane\"></i> Transmettre cet Ordre de Mission
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
         GALLERY & L\x27ART DE VIVRE A WAYNE MANOR
         ========================================== -->
    <section class=\"section-padding section-darker-bg\" id=\"galerie\">
        <div class=\"container\">
            <div class=\"text-center\">
                <div class=\"section-label\">Double Vie & Coulisses</div>
                <h2 class=\"section-title\">De <span class=\"gold-text\">Wayne Manor</span> à la Batcave</h2>
                <p class=\"section-subtitle\">
                    La perfection se niche dans les détails que les invités du gala ne remarquent jamais.
                </p>
            </div>

            <div class=\"gallery-grid\">
                <div class=\"gallery-item col-8\">
                    <img src=\"";
        // line 306
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/table.jpg"), "html", null, true);
        yield "\" alt=\"Art de la table au Manoir Wayne par Alfred Pennyworth\">
                    <div class=\"gallery-overlay\">
                        <span class=\"gallery-category\">20h00 • Salon d\x27Honneur</span>
                        <h3 class=\"gallery-title\">Dîner de Charité de la Fondation Wayne</h3>
                    </div>
                </div>

                <div class=\"gallery-item col-4\">
                    <img src=\"";
        // line 314
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cellar.jpg"), "html", null, true);
        yield "\" alt=\"Cave à vins secrète menant à la Batcave\">
                    <div class=\"gallery-overlay\">
                        <span class=\"gallery-category\">22h47 • Passage Secret</span>
                        <h3 class=\"gallery-title\">La Cave des Grands Millésimes (et l\x27Ascenseur Secret)</h3>
                    </div>
                </div>

                <div class=\"gallery-item col-6\">
                    <img src=\"";
        // line 322
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/villa.jpg"), "html", null, true);
        yield "\" alt=\"Façade illuminée du Manoir Wayne à Bristol Township\">
                    <div class=\"gallery-overlay\">
                        <span class=\"gallery-category\">Bristol Township • Gotham</span>
                        <h3 class=\"gallery-title\">Domaine Ancestral de la Famille Wayne</h3>
                    </div>
                </div>

                <div class=\"gallery-item col-6\">
                    <img src=\"";
        // line 330
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/butler.jpg"), "html", null, true);
        yield "\" alt=\"Alfred Pennyworth préparant le service du matin\">
                    <div class=\"gallery-overlay\">
                        <span class=\"gallery-category\">06h00 • Retour de Patrouille</span>
                        <h3 class=\"gallery-title\">Petit-déjeuner Servi au Retour du Chevalier Noir</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
         TESTIMONIALS & REFERENCES DE GOTHAM
         ========================================== -->
    <section class=\"section-padding\" id=\"references\">
        <div class=\"container\">
            <div class=\"text-center\">
                <div class=\"section-label\">Témoignages Hautement Classifiés</div>
                <h2 class=\"section-title\">Ce qu\x27en disent les <span class=\"gold-text\">Légendes de Gotham</span></h2>
                <p class=\"section-subtitle\">
                    Avis certifiés par le Bat-Ordinateur (anonymisés pour des raisons évidentes d\x27identité secrète).
                </p>
            </div>

            <div class=\"testimonials-grid\">
                <div class=\"testimonial-card\">
                    <div class=\"quote-icon\">“</div>
                    <p class=\"testimonial-text\">
                        « Sans Alfred, j\x27aurais probablement oublié de manger depuis 2012 et ma cape serait froissée. Il est le seul capable de recoudre une épaule déboîtée tout en me faisant la morale avec un accent britannique impeccable. »
                    </p>
                    <div class=\"client-meta\">
                        <div class=\"client-seal\"><i class=\"fas fa-mask\"></i></div>
                        <div>
                            <div class=\"client-name\">Maître Bruce W.</div>
                            <div class=\"client-location\">Philanthrope Nocturne • Manoir Wayne</div>
                        </div>
                    </div>
                </div>

                <div class=\"testimonial-card\">
                    <div class=\"quote-icon\">“</div>
                    <p class=\"testimonial-text\">
                        « Chaque fois que j\x27allume le projecteur sur le toit du commissariat sous une pluie battante, un thermos de café brûlant et des scones apparaissent mystérieusement à côté du Bat-Signal. Un service 5 étoiles. »
                    </p>
                    <div class=\"client-meta\">
                        <div class=\"client-seal\"><i class=\"fas fa-building-shield\"></i></div>
                        <div>
                            <div class=\"client-name\">Commissaire James G.</div>
                            <div class=\"client-location\">Toit du GCPD • Gotham Central</div>
                        </div>
                    </div>
                </div>

                <div class=\"testimonial-card\">
                    <div class=\"quote-icon\">“</div>
                    <p class=\"testimonial-text\">
                        « M. Pennyworth est le seul utilisateur de toute la division Sciences Appliquées qui lit réellement mes manuels techniques avant de faire décoller le Batwing. Un vrai professionnel. »
                    </p>
                    <div class=\"client-meta\">
                        <div class=\"client-seal\"><i class=\"fas fa-microchip\"></i></div>
                        <div>
                            <div class=\"client-name\">Lucius F.</div>
                            <div class=\"client-location\">R&D Sciences Appliquées • Wayne Enterprises</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
         CALL TO ACTION -> BAT-CONTACT & ARSENAL
         ========================================== -->
    <section class=\"section-padding contact-section\" id=\"contact\">
        <div class=\"container\">
            <div class=\"bat-cta-banner\">
                <div class=\"bat-cta-content\">
                    <div class=\"confidential-badge\">
                        <i class=\"fas fa-bolt\"></i> Urgence à Gotham ou Réception au Manoir ?
                    </div>
                    <h2 class=\"section-title\" style=\"margin-bottom: 1rem;\">
                        Besoin d\x27<span class=\"gold-text\">Alfred Pennyworth</span> dès ce soir ?
                    </h2>
                    <p style=\"color: var(--text-muted); font-size: 1.05rem; max-width: 640px; margin-bottom: 2rem;\">
                        Utilisez notre ligne rouge chiffrée pour envoyer un message direct au Bat-Ordinateur ou consultez l\x27inventaire des Bat-Gadgets disponibles en base de données.
                    </p>
                    <div class=\"hero-cta-group\" style=\"margin-bottom: 0;\">
                        <a href=\"";
        // line 416
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" class=\"btn btn-gold\">
                            <i class=\"fas fa-satellite-dish\"></i> Ouvrir le Terminal Bat-Contact
                        </a>
                        <a href=\"";
        // line 419
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit");
        yield "\" class=\"btn btn-outline-gold\">
                            <i class=\"fas fa-toolbox\"></i> Voir le Bat-Arsenal (Produits)
                        </a>
                    </div>
                </div>
                <div class=\"bat-cta-emblem\">
                    <div class=\"bat-radar-circle\">
                        <img src=\"";
        // line 426
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/batarang.png"), "html", null, true);
        yield "\" alt=\"Batarang WayneTech\" class=\"floating-batarang\">
                    </div>
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
        return "homepage/index.html.twig";
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
        return array (  600 => 426,  590 => 419,  584 => 416,  495 => 330,  484 => 322,  473 => 314,  462 => 306,  434 => 281,  317 => 166,  305 => 161,  301 => 160,  298 => 159,  288 => 157,  284 => 156,  279 => 154,  275 => 153,  269 => 150,  263 => 149,  257 => 147,  253 => 146,  160 => 56,  134 => 33,  105 => 6,  92 => 5,  69 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}Alfred Pennyworth • Majordome de Wayne Manor & Opérateur Batcave{% endblock %}

{% block body %}
    <!-- ==========================================
         HERO SECTION
         ========================================== -->
    <section class=\"hero\" id=\"hero\">
        <div class=\"hero-bg\"></div>
        <div class=\"container\">
            <div class=\"hero-grid\">
                <div class=\"hero-content\">
                    <div class=\"hero-badge-wrap\">
                        <div class=\"hero-badge\">
                            <span class=\"dot\"></span>
                            <span>En direct du Manoir Wayne • Canal Chiffré Batcave</span>
                        </div>
                    </div>

                    <h1 class=\"hero-headline\">
                        Le Flegme Britannique le Jour, <span class=\"gold-text\">L\x27Allié de l\x27Ombre</span> la Nuit.
                    </h1>

                    <p class=\"hero-description\">
                        « À votre service, Maître Bruce. J\x27ai préparé votre thé Earl Grey à 68°C… et refait le blindage de la Batmobile. » — Majordome d\x27exception, gardien des secrets de Gotham et soutien tactique 24h/24.
                    </p>

                    <div class=\"hero-cta-group\">
                        <a href=\"#simulateur\" class=\"btn btn-gold\">
                            <i class=\"fas fa-calculator\"></i> Simuler une Bat-Mission
                        </a>
                        <a href=\"{{ path(\x27app_contact\x27) }}\" class=\"btn btn-glass\">
                            <i class=\"fas fa-satellite-dish\"></i> Allumer le Bat-Signal
                        </a>
                    </div>

                    <div class=\"hero-stats\">
                        <div class=\"stat-item\">
                            <div class=\"stat-num\">30+</div>
                            <div class=\"stat-label\">Ans au Service des Wayne</div>
                        </div>
                        <div class=\"stat-item\">
                            <div class=\"stat-num\">100%</div>
                            <div class=\"stat-label\">Identité Secrète Protégée</div>
                        </div>
                        <div class=\"stat-item\">
                            <div class=\"stat-num\">24/7</div>
                            <div class=\"stat-label\">Thé Chaud & Sutures Kevlar</div>
                        </div>
                    </div>
                </div>

                <div class=\"hero-visual\">
                    <div class=\"hero-card-frame\">
                        <img src=\"{{ asset(\x27images/alfred.jpg\x27) }}\" alt=\"Alfred Pennyworth - Majordome de Wayne Manor\" class=\"hero-image\">

                        <div class=\"floating-pill pill-bottom-left\">
                            <i class=\"fas fa-chess-king\"></i>
                            <div>
                                <div class=\"pill-title\">British Butler & Ex-SAS</div>
                                <div class=\"pill-desc\">Du salon royal aux ruelles de Gotham</div>
                            </div>
                        </div>

                        <div class=\"floating-pill pill-top-right\">
                            <i class=\"fas fa-mask\"></i>
                            <div>
                                <div class=\"pill-title\">Opérateur Bat-Ordinateur</div>
                                <div class=\"pill-desc\">Veille Tactique & Maintenance Batcave</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
         PHILOSOPHY & 4 PILLARS
         ========================================== -->
    <section class=\"section-padding\" id=\"philosophie\">
        <div class=\"container\">
            <div class=\"text-center\">
                <div class=\"section-label\">Le Code Pennyworth</div>
                <h2 class=\"section-title\">Les 4 Piliers du <span class=\"gold-text\">Manoir Wayne</span></h2>
                <p class=\"section-subtitle\">
                    Le parfait équilibre entre étiquette aristocratique britannique, sarcasme bienveillant et logistique paramilitaire nocturne.
                </p>
            </div>

            <div class=\"pillars-grid\">
                <div class=\"pillar-card\">
                    <div class=\"pillar-num\">01</div>
                    <div class=\"pillar-icon\"><i class=\"fas fa-user-secret\"></i></div>
                    <h3>Secret Absolu & Couverture</h3>
                    <p>Personne ne soupçonne ce qui se cache derrière l\x27horloge grand-père du salon. Alibis de milliardaire excentrique garantis auprès de la presse de Gotham.</p>
                </div>

                <div class=\"pillar-card\">
                    <div class=\"pillar-num\">02</div>
                    <div class=\"pillar-icon\"><i class=\"fas fa-satellite\"></i></div>
                    <h3>Support Tactique & Bat-Ordinateur</h3>
                    <p>Piratage des fréquences du GCPD, analyse balistique en temps réel, suivi GPS sur les toits de Gotham et extraction d\x27urgence en Batwing.</p>
                </div>

                <div class=\"pillar-card\">
                    <div class=\"pillar-num\">03</div>
                    <div class=\"pillar-icon\"><i class=\"fas fa-kit-medical\"></i></div>
                    <h3>Gastronomie & Chirurgie de Nuit</h3>
                    <p>Homard Thermidor et grands millésimes servis à 20h00 ; points de suture, cryothérapie et réparation d\x27armure en Kevlar à 03h30 du matin.</p>
                </div>

                <div class=\"pillar-card\">
                    <div class=\"pillar-num\">04</div>
                    <div class=\"pillar-icon\"><i class=\"fas fa-Dungeon\"></i><i class=\"fas fa-key\"></i></div>
                    <h3>Gérance Manoir & Batcave</h3>
                    <p>Entretien des lustres en cristal et de l\x27argenterie familiale à l\x27étage, calibrage du réacteur nucléaire et nettoyage du guano de chauve-souris au sous-sol.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
         SERVICES & PRESTATIONS (Données JSON)
         ========================================== -->
    <section class=\"section-padding section-alt-bg\" id=\"prestations\">
        <div class=\"container\">
            <div class=\"text-center\">
                <div class=\"section-label\">Services de Haute Volée</div>
                <h2 class=\"section-title\">Prestations Signées <span class=\"gold-text\">Alfred Pennyworth</span></h2>
                <p class=\"section-subtitle\">
                    Du protocole de jour aux missions confidentielles de nuit : découvrez nos départements d\x27intervention chargés dynamiquement depuis <code>services.json</code>.
                </p>
            </div>

            <div class=\"services-tabs-wrap\" role=\"tablist\" aria-label=\"Filtrer les prestations\">
                <button type=\"button\" class=\"service-tab-btn active\" data-filter=\"all\">Toutes les Missions</button>
                <button type=\"button\" class=\"service-tab-btn\" data-filter=\"residence\">Manoir Wayne</button>
                <button type=\"button\" class=\"service-tab-btn\" data-filter=\"batcave\">Opérations Batcave</button>
                <button type=\"button\" class=\"service-tab-btn\" data-filter=\"yacht\">Croisières Alibis</button>
                <button type=\"button\" class=\"service-tab-btn\" data-filter=\"event\">Galas de Gotham</button>
            </div>

            <div class=\"services-showcase-grid\" id=\"services-grid\">
                {% for mission in missions %}
                    <article class=\"service-card\" data-category=\"{{ mission.category }}\">
                        <div class=\"service-img-wrap\">
                            <img src=\"{{ asset(mission.image) }}\" alt=\"{{ mission.imageAlt }}\">
                            <div class=\"service-tag\">{{ mission.tag }}</div>
                        </div>
                        <div class=\"service-content\">
                            <h3>{{ mission.title }}</h3>
                            <p>{{ mission.description }}</p>
                            <ul class=\"service-features-list\">
                                {% for tache in mission.features %}
                                    <li><i class=\"fas fa-check-circle\"></i> {{ tache }}</li>
                                {% endfor %}
                            </ul>
                            <a href=\"{{ path(\x27app_contact\x27, {sujet: mission.title}) }}\" class=\"btn btn-outline-gold\">
                                <i class=\"fas fa-arrow-right\"></i> {{ mission.action.label }}
                            </a>
                        </div>
                    </article>
                {% endfor %}
            </div>
        </div>
    </section>

    <!-- ==========================================
         SIMULATOR & ESTIMATOR
         ========================================== -->
    <section class=\"section-padding\" id=\"simulateur\">
        <div class=\"container\">
            <div class=\"text-center\">
                <div class=\"section-label\">Estimation WayneTech Immédiate</div>
                <h2 class=\"section-title\">Simulateur de <span class=\"gold-text\">Bat-Intervention</span></h2>
                <p class=\"section-subtitle\">
                    Calculez en direct les honoraires d\x27intendance ou de soutien tactique selon le niveau de menace à Gotham City.
                </p>
            </div>

            <div class=\"simulator-box\">
                <div class=\"simulator-grid\">
                    <!-- Controls -->
                    <div class=\"simulator-controls\">
                        <!-- 1. Mission Type -->
                        <div class=\"sim-group\" data-group=\"mission\">
                            <label class=\"sim-label\">1. Nature de l\x27Opération</label>
                            <div class=\"sim-chips\">
                                <button type=\"button\" class=\"sim-chip selected\" data-val=\"residence\" data-rate=\"850\" data-label=\"Intendance Manoir Wayne\">
                                    <i class=\"fas fa-landmark\"></i> Intendance Manoir Wayne
                                </button>
                                <button type=\"button\" class=\"sim-chip\" data-val=\"batcave\" data-rate=\"1250\" data-label=\"Veille Tactique Batcave\">
                                    <i class=\"fas fa-mask\"></i> Veille Tactique Batcave
                                </button>
                                <button type=\"button\" class=\"sim-chip\" data-val=\"event\" data-rate=\"1100\" data-label=\"Gala Fondation Wayne\">
                                    <i class=\"fas fa-champagne-glasses\"></i> Gala Fondation Wayne
                                </button>
                                <button type=\"button\" class=\"sim-chip\" data-val=\"yacht\" data-rate=\"950\" data-label=\"Croisière Alibi Milliardaire\">
                                    <i class=\"fas fa-anchor\"></i> Croisière Alibi VIP
                                </button>
                            </div>
                        </div>

                        <!-- 2. Location -->
                        <div class=\"sim-group\">
                            <label class=\"sim-label\" for=\"sim-location\">2. Secteur d\x27Affectation</label>
                            <select id=\"sim-location\" class=\"sim-select\">
                                <option value=\"gotham\" data-mult=\"1\" data-label=\"Gotham City & Manoir Wayne\">Gotham City & Bristol Township (Standard)</option>
                                <option value=\"arkham\" data-mult=\"1.35\" data-label=\"Périmètre Asile d\x27Arkham\">Périmètre Haute Sécurité d\x27Arkham (+35% Risque Joker)</option>
                                <option value=\"metropolis\" data-mult=\"1.15\" data-label=\"Metropolis & Côte Est\">Metropolis — Sommet Wayne / LexCorp (+15%)</option>
                                <option value=\"london\" data-mult=\"1.2\" data-label=\"Londres & Campagnes Royales\">Londres & Domaines Britanniques (+20%)</option>
                                <option value=\"monaco\" data-mult=\"1.3\" data-label=\"Monaco & Yachting International\">Monaco, Hong Kong & Eaux Internationales (+30%)</option>
                            </select>
                        </div>

                        <!-- 3. Duration -->
                        <div class=\"sim-group\">
                            <label class=\"sim-label\" for=\"sim-duration\">3. Durée de Mobilisation</label>
                            <select id=\"sim-duration\" class=\"sim-select\">
                                <option value=\"1\" data-label=\"1 Nuit de Patrouille\">1 Nuit (Urgence Super-Vilain / Gala)</option>
                                <option value=\"3\" data-label=\"3 Jours (Weekend)\">3 Jours (Escapade Alibi ou Crise à Gotham)</option>
                                <option value=\"7\" selected data-label=\"1 Semaine (7 Jours)\">1 Semaine (7 Jours d\x27Intendance Complète)</option>
                                <option value=\"14\" data-label=\"2 Semaines (14 Jours)\">2 Semaines (14 Jours)</option>
                                <option value=\"30\" data-label=\"1 Mois Complet\">1 Mois (Campagne Nocturne Longue)</option>
                            </select>
                        </div>

                        <!-- 4. Extras -->
                        <div class=\"sim-group\" data-group=\"extra\">
                            <label class=\"sim-label\">4. Protocoles & Gadgets Complémentaires</label>
                            <div class=\"sim-chips\">
                                <button type=\"button\" class=\"sim-chip\" data-val=\"kevlar\" data-label=\"Couture Kevlar & Sutures\" data-rate=\"280\">
                                    <i class=\"fas fa-user-nurse\"></i> Sutures & Repassage de Cape
                                </button>
                                <button type=\"button\" class=\"sim-chip\" data-val=\"batmobile\" data-label=\"Maintenance Batmobile\" data-rate=\"320\">
                                    <i class=\"fas fa-car-burst\"></i> Plein Kérosène Batmobile
                                </button>
                                <button type=\"button\" class=\"sim-chip\" data-val=\"sommelier\" data-label=\"Cave Secrète & Thé Earl Grey\" data-rate=\"190\">
                                    <i class=\"fas fa-mug-hot\"></i> Grands Crus & Earl Grey 68°C
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Summary & Quote Output -->
                    <div class=\"sim-summary-panel\">
                        <div>
                            <div class=\"summary-header\">
                                <h4><i class=\"fas fa-terminal gold-highlight\"></i> Rapport Bat-Ordinateur</h4>
                            </div>

                            <div class=\"summary-rows\">
                                <div class=\"summary-row\">
                                    <span>Opération :</span>
                                    <span id=\"sum-mission\">Intendance Manoir Wayne</span>
                                </div>
                                <div class=\"summary-row\">
                                    <span>Secteur :</span>
                                    <span id=\"sum-location\">Gotham City & Manoir Wayne</span>
                                </div>
                                <div class=\"summary-row\">
                                    <span>Durée :</span>
                                    <span id=\"sum-duration\">1 Semaine (7 Jours)</span>
                                </div>
                                <div class=\"summary-row\">
                                    <span>Suppléments :</span>
                                    <span id=\"sum-extras\" style=\"text-align: right; max-width: 58%;\">Flegme Britannique Inclus</span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class=\"estimate-price-wrap\">
                                <div class=\"estimate-label\">Budget Wayne Enterprises Estimé</div>
                                <div class=\"estimate-price\" id=\"sum-price\">~ 5 950 € HT</div>
                                <div class=\"estimate-note\">* Facturable sur le compte « Recherche & Développement » de Wayne Corp.</div>
                            </div>

                            <a href=\"{{ path(\x27app_contact\x27) }}\" id=\"sim-book-btn\" class=\"btn btn-gold\" style=\"width: 100%;\">
                                <i class=\"fas fa-paper-plane\"></i> Transmettre cet Ordre de Mission
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
         GALLERY & L\x27ART DE VIVRE A WAYNE MANOR
         ========================================== -->
    <section class=\"section-padding section-darker-bg\" id=\"galerie\">
        <div class=\"container\">
            <div class=\"text-center\">
                <div class=\"section-label\">Double Vie & Coulisses</div>
                <h2 class=\"section-title\">De <span class=\"gold-text\">Wayne Manor</span> à la Batcave</h2>
                <p class=\"section-subtitle\">
                    La perfection se niche dans les détails que les invités du gala ne remarquent jamais.
                </p>
            </div>

            <div class=\"gallery-grid\">
                <div class=\"gallery-item col-8\">
                    <img src=\"{{ asset(\x27images/table.jpg\x27) }}\" alt=\"Art de la table au Manoir Wayne par Alfred Pennyworth\">
                    <div class=\"gallery-overlay\">
                        <span class=\"gallery-category\">20h00 • Salon d\x27Honneur</span>
                        <h3 class=\"gallery-title\">Dîner de Charité de la Fondation Wayne</h3>
                    </div>
                </div>

                <div class=\"gallery-item col-4\">
                    <img src=\"{{ asset(\x27images/cellar.jpg\x27) }}\" alt=\"Cave à vins secrète menant à la Batcave\">
                    <div class=\"gallery-overlay\">
                        <span class=\"gallery-category\">22h47 • Passage Secret</span>
                        <h3 class=\"gallery-title\">La Cave des Grands Millésimes (et l\x27Ascenseur Secret)</h3>
                    </div>
                </div>

                <div class=\"gallery-item col-6\">
                    <img src=\"{{ asset(\x27images/villa.jpg\x27) }}\" alt=\"Façade illuminée du Manoir Wayne à Bristol Township\">
                    <div class=\"gallery-overlay\">
                        <span class=\"gallery-category\">Bristol Township • Gotham</span>
                        <h3 class=\"gallery-title\">Domaine Ancestral de la Famille Wayne</h3>
                    </div>
                </div>

                <div class=\"gallery-item col-6\">
                    <img src=\"{{ asset(\x27images/butler.jpg\x27) }}\" alt=\"Alfred Pennyworth préparant le service du matin\">
                    <div class=\"gallery-overlay\">
                        <span class=\"gallery-category\">06h00 • Retour de Patrouille</span>
                        <h3 class=\"gallery-title\">Petit-déjeuner Servi au Retour du Chevalier Noir</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
         TESTIMONIALS & REFERENCES DE GOTHAM
         ========================================== -->
    <section class=\"section-padding\" id=\"references\">
        <div class=\"container\">
            <div class=\"text-center\">
                <div class=\"section-label\">Témoignages Hautement Classifiés</div>
                <h2 class=\"section-title\">Ce qu\x27en disent les <span class=\"gold-text\">Légendes de Gotham</span></h2>
                <p class=\"section-subtitle\">
                    Avis certifiés par le Bat-Ordinateur (anonymisés pour des raisons évidentes d\x27identité secrète).
                </p>
            </div>

            <div class=\"testimonials-grid\">
                <div class=\"testimonial-card\">
                    <div class=\"quote-icon\">“</div>
                    <p class=\"testimonial-text\">
                        « Sans Alfred, j\x27aurais probablement oublié de manger depuis 2012 et ma cape serait froissée. Il est le seul capable de recoudre une épaule déboîtée tout en me faisant la morale avec un accent britannique impeccable. »
                    </p>
                    <div class=\"client-meta\">
                        <div class=\"client-seal\"><i class=\"fas fa-mask\"></i></div>
                        <div>
                            <div class=\"client-name\">Maître Bruce W.</div>
                            <div class=\"client-location\">Philanthrope Nocturne • Manoir Wayne</div>
                        </div>
                    </div>
                </div>

                <div class=\"testimonial-card\">
                    <div class=\"quote-icon\">“</div>
                    <p class=\"testimonial-text\">
                        « Chaque fois que j\x27allume le projecteur sur le toit du commissariat sous une pluie battante, un thermos de café brûlant et des scones apparaissent mystérieusement à côté du Bat-Signal. Un service 5 étoiles. »
                    </p>
                    <div class=\"client-meta\">
                        <div class=\"client-seal\"><i class=\"fas fa-building-shield\"></i></div>
                        <div>
                            <div class=\"client-name\">Commissaire James G.</div>
                            <div class=\"client-location\">Toit du GCPD • Gotham Central</div>
                        </div>
                    </div>
                </div>

                <div class=\"testimonial-card\">
                    <div class=\"quote-icon\">“</div>
                    <p class=\"testimonial-text\">
                        « M. Pennyworth est le seul utilisateur de toute la division Sciences Appliquées qui lit réellement mes manuels techniques avant de faire décoller le Batwing. Un vrai professionnel. »
                    </p>
                    <div class=\"client-meta\">
                        <div class=\"client-seal\"><i class=\"fas fa-microchip\"></i></div>
                        <div>
                            <div class=\"client-name\">Lucius F.</div>
                            <div class=\"client-location\">R&D Sciences Appliquées • Wayne Enterprises</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
         CALL TO ACTION -> BAT-CONTACT & ARSENAL
         ========================================== -->
    <section class=\"section-padding contact-section\" id=\"contact\">
        <div class=\"container\">
            <div class=\"bat-cta-banner\">
                <div class=\"bat-cta-content\">
                    <div class=\"confidential-badge\">
                        <i class=\"fas fa-bolt\"></i> Urgence à Gotham ou Réception au Manoir ?
                    </div>
                    <h2 class=\"section-title\" style=\"margin-bottom: 1rem;\">
                        Besoin d\x27<span class=\"gold-text\">Alfred Pennyworth</span> dès ce soir ?
                    </h2>
                    <p style=\"color: var(--text-muted); font-size: 1.05rem; max-width: 640px; margin-bottom: 2rem;\">
                        Utilisez notre ligne rouge chiffrée pour envoyer un message direct au Bat-Ordinateur ou consultez l\x27inventaire des Bat-Gadgets disponibles en base de données.
                    </p>
                    <div class=\"hero-cta-group\" style=\"margin-bottom: 0;\">
                        <a href=\"{{ path(\x27app_contact\x27) }}\" class=\"btn btn-gold\">
                            <i class=\"fas fa-satellite-dish\"></i> Ouvrir le Terminal Bat-Contact
                        </a>
                        <a href=\"{{ path(\x27app_produit\x27) }}\" class=\"btn btn-outline-gold\">
                            <i class=\"fas fa-toolbox\"></i> Voir le Bat-Arsenal (Produits)
                        </a>
                    </div>
                </div>
                <div class=\"bat-cta-emblem\">
                    <div class=\"bat-radar-circle\">
                        <img src=\"{{ asset(\x27images/batarang.png\x27) }}\" alt=\"Batarang WayneTech\" class=\"floating-batarang\">
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "homepage/index.html.twig", "/var/www/site-vitrine-alfred/templates/homepage/index.html.twig");
    }
}
