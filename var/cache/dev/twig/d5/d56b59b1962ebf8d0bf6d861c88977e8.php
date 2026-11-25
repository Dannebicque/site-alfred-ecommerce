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

/* contact/index.html.twig */
class __TwigTemplate_a45e3971b127d12e4efe460a4206beb4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

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

        yield "Bat-Contact & Ligne Rouge • Alfred Pennyworth";
        
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
            <div class=\"section-label\">Fréquence Chiffrée 104.9 MHz • WayneTech</div>
            <h1 class=\"section-title\">Ligne Rouge & <span class=\"gold-text\">Bat-Signal</span></h1>
            <p class=\"section-subtitle\" style=\"margin-bottom: 0;\">
                « Que vous soyez coincé sur le toit du GCPD sous la pluie ou que vous souhaitiez organiser un gala au Manoir, je suis à l\x27écoute. »
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
        yield "    <section class=\"section-padding contact-section\" style=\"padding-top: 3.5rem;\">
        <div class=\"container\">
            <div class=\"contact-layout\">
                <!-- Colonne Gauche : Canaux directs de la Batcave -->
                <aside class=\"contact-info-card\">
                    <div class=\"confidential-badge\">
                        <i class=\"fas fa-shield-halved\"></i> Protocole Bat-Ordinateur v9.4
                    </div>

                    <h2 class=\"font-cinzel\" style=\"color: #fff; font-size: 1.55rem; margin-bottom: 0.8rem;\">
                        Poste de Commandement d\x27Alfred
                    </h2>
                    <p style=\"color: var(--text-muted); font-size: 0.94rem; line-height: 1.6;\">
                        Toutes les transmissions sont routées derrière la cascade de la Batcave et filtrées contre les devinettes d\x27Edward Nygma (Le Riddler).
                    </p>

                    <div class=\"direct-channels\">
                        <a href=\"tel:+33695001939\" class=\"channel-link\">
                            <div class=\"channel-icon\"><i class=\"fas fa-phone-volume\"></i></div>
                            <div class=\"channel-text\">
                                <div class=\"channel-type\">Téléphone Rouge (Ligne Directe Gordon)</div>
                                <div class=\"channel-val\">+1 (555) BAT-1939</div>
                            </div>
                        </a>

                        <button type=\"button\" class=\"channel-link\" id=\"contact-batsignal-btn\" style=\"width: 100%; text-align: left; cursor: pointer;\">
                            <div class=\"channel-icon\" style=\"background: rgba(245, 197, 24, 0.18); color: #f5c518; border-color: rgba(245, 197, 24, 0.45);\">
                                <i class=\"fas fa-lightbulb\"></i>
                            </div>
                            <div class=\"channel-text\">
                                <div class=\"channel-type\">Projecteur Toit du Commissariat GCPD</div>
                                <div class=\"channel-val\" style=\"color: #f5c518;\">Cliquez pour allumer le Bat-Signal</div>
                            </div>
                        </button>

                        <a href=\"mailto:alfred@wayne-manor.gotham\" class=\"channel-link\">
                            <div class=\"channel-icon\"><i class=\"fas fa-envelope-open-text\"></i></div>
                            <div class=\"channel-text\">
                                <div class=\"channel-type\">Messagerie Officielle du Manoir</div>
                                <div class=\"channel-val\">alfred@wayne-manor.gotham</div>
                            </div>
                        </a>
                    </div>

                    <!-- Horaires Jour / Nuit d\x27Alfred -->
                    <div class=\"bat-schedule-box\">
                        <div class=\"schedule-title\">
                            <i class=\"fas fa-clock gold-highlight\"></i> Permanence d\x27Alfred (24h/24)
                        </div>
                        <div class=\"schedule-item\">
                            <span>07h00 – 21h00</span>
                            <strong>Service du Thé & Argenterie (Manoir)</strong>
                        </div>
                        <div class=\"schedule-item\">
                            <span>21h00 – 05h00</span>
                            <strong style=\"color: #f5c518;\">Support Radio & Batcave (Gotham)</strong>
                        </div>
                        <div class=\"schedule-item\">
                            <span>05h00 – 07h00</span>
                            <strong>Sutures, Glace & Repassage de Cape</strong>
                        </div>
                    </div>

                    <div style=\"display: flex; gap: 1rem; flex-wrap: wrap; margin-top: 1.5rem;\">
                        <button type=\"button\" class=\"btn btn-outline-gold btn-open-vcard\" style=\"flex: 1;\">
                            <i class=\"fas fa-id-card\"></i> Accréditation
                        </button>
                        <button type=\"button\" class=\"btn btn-glass btn-open-brochure\" style=\"flex: 1;\">
                            <i class=\"fas fa-user-secret\"></i> Charte NDA
                        </button>
                    </div>
                </aside>

                <!-- Colonne Droite : Formulaire Symfony (ContactController::envoyer) -->
                <div class=\"form-card\">
                    <div class=\"form-card-header\">
                        <div>
                            <span class=\"bat-terminal-tag\"><i class=\"fas fa-satellite-dish\"></i> TERMINAL DE TRANSMISSION</span>
                            <h2 class=\"font-cinzel\" style=\"color: #fff; font-size: 1.5rem; margin-top: 0.4rem;\">
                                Envoyer une Dépêche à Alfred
                            </h2>
                        </div>
                        <img src=\"";
        // line 100
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/batarang.png"), "html", null, true);
        yield "\" alt=\"Batarang\" class=\"form-header-batarang\">
                    </div>

                    <!-- Boutons ludiques de pré-remplissage pour la démo aux étudiants -->
                    <div class=\"demo-presets-bar\">
                        <span class=\"demo-presets-label\">
                            <i class=\"fas fa-wand-magic-sparkles\"></i> Scénarios Démo (1 clic) :
                        </span>
                        <div class=\"demo-presets-buttons\">
                            <button type=\"button\" class=\"preset-chip\"
                                    data-name=\"Bruce Wayne (Batman)\"
                                    data-email=\"bruce@wayne-enterprises.gotham\"
                                    data-message=\"Alfred ! Le Joker a piégé l\x27usine Ace Chemicals. Peux-tu envoyer le Batwing en pilote automatique aux coordonnées 40.7128° N et préparer du thé Earl Grey bien chaud avec deux points de suture pour mon retour ?\">
                                🦇 Urgence Batman
                            </button>
                            <button type=\"button\" class=\"preset-chip\"
                                    data-name=\"Commissaire James Gordon\"
                                    data-email=\"jgordon@gcpd.gotham.gov\"
                                    data-message=\"Bonjour Alfred. Le Bat-Signal est allumé sur le toit du commissariat central depuis 35 minutes sous une pluie battante. L\x27Homme-Mystère a laissé trois énigmes à la banque de Gotham. Où est-il ?\">
                                🚨 Alerte GCPD
                            </button>
                            <button type=\"button\" class=\"preset-chip\"
                                    data-name=\"Selina Kyle (Catwoman)\"
                                    data-email=\"selina@miaou-gotham.com\"
                                    data-message=\"Cher Alfred, j\x27ai « emprunté » le collier d\x27émeraudes du coffre-fort du salon pour attirer l\x27attention de Bruce. Dites-lui que je l\x27attends sur le toit du musée de Gotham à minuit.\">
                                🐾 Mot de Catwoman
                            </button>
                        </div>
                    </div>

                    ";
        // line 130
        $context["sujetPreselectionne"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 130, $this->source); })()), "request", [], "any", false, false, false, 130), "query", [], "any", false, false, false, 130), "get", ["sujet"], "method", false, false, false, 130);
        // line 131
        yield "
                    <form method=\"post\" action=\"";
        // line 132
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact_envoyer");
        yield "\" id=\"bat-contact-form\">
                        <div class=\"form-grid\">
                            <div class=\"form-group\">
                                <label class=\"form-label\" for=\"name\">
                                    <i class=\"fas fa-user-Astronaut\"></i> Identité Civile (ou Nom de Code) *
                                </label>
                                <input type=\"text\"
                                       id=\"name\"
                                       name=\"name\"
                                       class=\"form-input\"
                                       placeholder=\"Ex : Bruce Wayne, Commissaire Gordon...\"
                                       required>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"form-label\" for=\"email\">
                                    <i class=\"fas fa-at\"></i> Canal de Réponse (Email Chiffré) *
                                </label>
                                <input type=\"email\"
                                       id=\"email\"
                                       name=\"email\"
                                       class=\"form-input\"
                                       placeholder=\"Ex : bruce@wayne-enterprises.com\"
                                       required>
                            </div>

                            <div class=\"form-group full-width\">
                                <label class=\"form-label\" for=\"message\">
                                    <i class=\"fas fa-file-signature\"></i> Rapport de Mission / Demande d\x27Intendance *
                                </label>
                                <textarea id=\"message\"
                                          name=\"message\"
                                          class=\"form-textarea\"
                                          rows=\"6\"
                                          placeholder=\"Précisez la nature de l\x27urgence (panne de Batmobile, réception au Manoir, suture de Kevlar, niveau de menace d\x27Arkham)...\"
                                          required>";
        // line 167
        if ((($tmp = (isset($context["sujetPreselectionne"]) || array_key_exists("sujetPreselectionne", $context) ? $context["sujetPreselectionne"] : (function () { throw new RuntimeError('Variable "sujetPreselectionne" does not exist.', 167, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Bonjour Alfred, je souhaite planifier la prestation suivante : « ";
            yield (string) $this->escaper->escape((isset($context["sujetPreselectionne"]) || array_key_exists("sujetPreselectionne", $context) ? $context["sujetPreselectionne"] : (function () { throw new RuntimeError('Variable "sujetPreselectionne" does not exist.', 167, $this->source); })()), "html", null, true);
            yield " ». Voici les détails de ma mission à Gotham : ";
        }
        yield "</textarea>
                            </div>

                            <div class=\"form-group full-width\">
                                <label class=\"form-checkbox-label\">
                                    <input type=\"checkbox\" required checked>
                                    <span>Je certifie ne pas être le Joker, Bane ou l\x27Épouvantail, et j\x27accepte le protocole de confidentialité du Manoir Wayne.</span>
                                </label>
                            </div>

                            <div class=\"form-group full-width\" style=\"margin-top: 0.5rem;\">
                                <button type=\"submit\" class=\"btn btn-gold\" style=\"width: 100%; padding: 1.15rem; font-size: 0.9rem;\">
                                    <i class=\"fas fa-paper-plane\"></i> Transmettre au Bat-Ordinateur (Envoyer l\x27Email)
                                </button>
                            </div>
                        </div>
                    </form>
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
        return "contact/index.html.twig";
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
        return array (  299 => 167,  261 => 132,  258 => 131,  256 => 130,  223 => 100,  139 => 18,  126 => 17,  106 => 6,  93 => 5,  70 => 3,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}Bat-Contact & Ligne Rouge • Alfred Pennyworth{% endblock %}

{% block page_banner %}
    <section class=\"page-hero-banner\">
        <div class=\"container text-center\">
            <div class=\"section-label\">Fréquence Chiffrée 104.9 MHz • WayneTech</div>
            <h1 class=\"section-title\">Ligne Rouge & <span class=\"gold-text\">Bat-Signal</span></h1>
            <p class=\"section-subtitle\" style=\"margin-bottom: 0;\">
                « Que vous soyez coincé sur le toit du GCPD sous la pluie ou que vous souhaitiez organiser un gala au Manoir, je suis à l\x27écoute. »
            </p>
        </div>
    </section>
{% endblock %}

{% block body %}
    <section class=\"section-padding contact-section\" style=\"padding-top: 3.5rem;\">
        <div class=\"container\">
            <div class=\"contact-layout\">
                <!-- Colonne Gauche : Canaux directs de la Batcave -->
                <aside class=\"contact-info-card\">
                    <div class=\"confidential-badge\">
                        <i class=\"fas fa-shield-halved\"></i> Protocole Bat-Ordinateur v9.4
                    </div>

                    <h2 class=\"font-cinzel\" style=\"color: #fff; font-size: 1.55rem; margin-bottom: 0.8rem;\">
                        Poste de Commandement d\x27Alfred
                    </h2>
                    <p style=\"color: var(--text-muted); font-size: 0.94rem; line-height: 1.6;\">
                        Toutes les transmissions sont routées derrière la cascade de la Batcave et filtrées contre les devinettes d\x27Edward Nygma (Le Riddler).
                    </p>

                    <div class=\"direct-channels\">
                        <a href=\"tel:+33695001939\" class=\"channel-link\">
                            <div class=\"channel-icon\"><i class=\"fas fa-phone-volume\"></i></div>
                            <div class=\"channel-text\">
                                <div class=\"channel-type\">Téléphone Rouge (Ligne Directe Gordon)</div>
                                <div class=\"channel-val\">+1 (555) BAT-1939</div>
                            </div>
                        </a>

                        <button type=\"button\" class=\"channel-link\" id=\"contact-batsignal-btn\" style=\"width: 100%; text-align: left; cursor: pointer;\">
                            <div class=\"channel-icon\" style=\"background: rgba(245, 197, 24, 0.18); color: #f5c518; border-color: rgba(245, 197, 24, 0.45);\">
                                <i class=\"fas fa-lightbulb\"></i>
                            </div>
                            <div class=\"channel-text\">
                                <div class=\"channel-type\">Projecteur Toit du Commissariat GCPD</div>
                                <div class=\"channel-val\" style=\"color: #f5c518;\">Cliquez pour allumer le Bat-Signal</div>
                            </div>
                        </button>

                        <a href=\"mailto:alfred@wayne-manor.gotham\" class=\"channel-link\">
                            <div class=\"channel-icon\"><i class=\"fas fa-envelope-open-text\"></i></div>
                            <div class=\"channel-text\">
                                <div class=\"channel-type\">Messagerie Officielle du Manoir</div>
                                <div class=\"channel-val\">alfred@wayne-manor.gotham</div>
                            </div>
                        </a>
                    </div>

                    <!-- Horaires Jour / Nuit d\x27Alfred -->
                    <div class=\"bat-schedule-box\">
                        <div class=\"schedule-title\">
                            <i class=\"fas fa-clock gold-highlight\"></i> Permanence d\x27Alfred (24h/24)
                        </div>
                        <div class=\"schedule-item\">
                            <span>07h00 – 21h00</span>
                            <strong>Service du Thé & Argenterie (Manoir)</strong>
                        </div>
                        <div class=\"schedule-item\">
                            <span>21h00 – 05h00</span>
                            <strong style=\"color: #f5c518;\">Support Radio & Batcave (Gotham)</strong>
                        </div>
                        <div class=\"schedule-item\">
                            <span>05h00 – 07h00</span>
                            <strong>Sutures, Glace & Repassage de Cape</strong>
                        </div>
                    </div>

                    <div style=\"display: flex; gap: 1rem; flex-wrap: wrap; margin-top: 1.5rem;\">
                        <button type=\"button\" class=\"btn btn-outline-gold btn-open-vcard\" style=\"flex: 1;\">
                            <i class=\"fas fa-id-card\"></i> Accréditation
                        </button>
                        <button type=\"button\" class=\"btn btn-glass btn-open-brochure\" style=\"flex: 1;\">
                            <i class=\"fas fa-user-secret\"></i> Charte NDA
                        </button>
                    </div>
                </aside>

                <!-- Colonne Droite : Formulaire Symfony (ContactController::envoyer) -->
                <div class=\"form-card\">
                    <div class=\"form-card-header\">
                        <div>
                            <span class=\"bat-terminal-tag\"><i class=\"fas fa-satellite-dish\"></i> TERMINAL DE TRANSMISSION</span>
                            <h2 class=\"font-cinzel\" style=\"color: #fff; font-size: 1.5rem; margin-top: 0.4rem;\">
                                Envoyer une Dépêche à Alfred
                            </h2>
                        </div>
                        <img src=\"{{ asset(\x27images/batarang.png\x27) }}\" alt=\"Batarang\" class=\"form-header-batarang\">
                    </div>

                    <!-- Boutons ludiques de pré-remplissage pour la démo aux étudiants -->
                    <div class=\"demo-presets-bar\">
                        <span class=\"demo-presets-label\">
                            <i class=\"fas fa-wand-magic-sparkles\"></i> Scénarios Démo (1 clic) :
                        </span>
                        <div class=\"demo-presets-buttons\">
                            <button type=\"button\" class=\"preset-chip\"
                                    data-name=\"Bruce Wayne (Batman)\"
                                    data-email=\"bruce@wayne-enterprises.gotham\"
                                    data-message=\"Alfred ! Le Joker a piégé l\x27usine Ace Chemicals. Peux-tu envoyer le Batwing en pilote automatique aux coordonnées 40.7128° N et préparer du thé Earl Grey bien chaud avec deux points de suture pour mon retour ?\">
                                🦇 Urgence Batman
                            </button>
                            <button type=\"button\" class=\"preset-chip\"
                                    data-name=\"Commissaire James Gordon\"
                                    data-email=\"jgordon@gcpd.gotham.gov\"
                                    data-message=\"Bonjour Alfred. Le Bat-Signal est allumé sur le toit du commissariat central depuis 35 minutes sous une pluie battante. L\x27Homme-Mystère a laissé trois énigmes à la banque de Gotham. Où est-il ?\">
                                🚨 Alerte GCPD
                            </button>
                            <button type=\"button\" class=\"preset-chip\"
                                    data-name=\"Selina Kyle (Catwoman)\"
                                    data-email=\"selina@miaou-gotham.com\"
                                    data-message=\"Cher Alfred, j\x27ai « emprunté » le collier d\x27émeraudes du coffre-fort du salon pour attirer l\x27attention de Bruce. Dites-lui que je l\x27attends sur le toit du musée de Gotham à minuit.\">
                                🐾 Mot de Catwoman
                            </button>
                        </div>
                    </div>

                    {% set sujetPreselectionne = app.request.query.get(\x27sujet\x27) %}

                    <form method=\"post\" action=\"{{ path(\x27app_contact_envoyer\x27) }}\" id=\"bat-contact-form\">
                        <div class=\"form-grid\">
                            <div class=\"form-group\">
                                <label class=\"form-label\" for=\"name\">
                                    <i class=\"fas fa-user-Astronaut\"></i> Identité Civile (ou Nom de Code) *
                                </label>
                                <input type=\"text\"
                                       id=\"name\"
                                       name=\"name\"
                                       class=\"form-input\"
                                       placeholder=\"Ex : Bruce Wayne, Commissaire Gordon...\"
                                       required>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"form-label\" for=\"email\">
                                    <i class=\"fas fa-at\"></i> Canal de Réponse (Email Chiffré) *
                                </label>
                                <input type=\"email\"
                                       id=\"email\"
                                       name=\"email\"
                                       class=\"form-input\"
                                       placeholder=\"Ex : bruce@wayne-enterprises.com\"
                                       required>
                            </div>

                            <div class=\"form-group full-width\">
                                <label class=\"form-label\" for=\"message\">
                                    <i class=\"fas fa-file-signature\"></i> Rapport de Mission / Demande d\x27Intendance *
                                </label>
                                <textarea id=\"message\"
                                          name=\"message\"
                                          class=\"form-textarea\"
                                          rows=\"6\"
                                          placeholder=\"Précisez la nature de l\x27urgence (panne de Batmobile, réception au Manoir, suture de Kevlar, niveau de menace d\x27Arkham)...\"
                                          required>{% if sujetPreselectionne %}Bonjour Alfred, je souhaite planifier la prestation suivante : « {{ sujetPreselectionne }} ». Voici les détails de ma mission à Gotham : {% endif %}</textarea>
                            </div>

                            <div class=\"form-group full-width\">
                                <label class=\"form-checkbox-label\">
                                    <input type=\"checkbox\" required checked>
                                    <span>Je certifie ne pas être le Joker, Bane ou l\x27Épouvantail, et j\x27accepte le protocole de confidentialité du Manoir Wayne.</span>
                                </label>
                            </div>

                            <div class=\"form-group full-width\" style=\"margin-top: 0.5rem;\">
                                <button type=\"submit\" class=\"btn btn-gold\" style=\"width: 100%; padding: 1.15rem; font-size: 0.9rem;\">
                                    <i class=\"fas fa-paper-plane\"></i> Transmettre au Bat-Ordinateur (Envoyer l\x27Email)
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "contact/index.html.twig", "/var/www/site-vitrine-alfred/templates/contact/index.html.twig");
    }
}
