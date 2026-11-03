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

/* base.html.twig */
class __TwigTemplate_92da0404a122df3b55182bd50432faa7 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'importmap' => [$this, 'block_importmap'],
            'body' => [$this, 'block_body'],
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
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">

        ";
        // line 8
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 12
        yield "
        ";
        // line 13
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 16
        yield "
        ";
        // line 17
        $context["frankenphp_hot_reload"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "server", [], "any", false, false, false, 17), "get", ["FRANKENPHP_HOT_RELOAD"], "method", false, false, false, 17);
        // line 18
        yield "        ";
        if ((($tmp = (isset($context["frankenphp_hot_reload"]) || array_key_exists("frankenphp_hot_reload", $context) ? $context["frankenphp_hot_reload"] : (function () { throw new RuntimeError('Variable "frankenphp_hot_reload" does not exist.', 18, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "        <meta name=\"frankenphp-hot-reload:url\" content=\"";
            yield (string) $this->escaper->escape((isset($context["frankenphp_hot_reload"]) || array_key_exists("frankenphp_hot_reload", $context) ? $context["frankenphp_hot_reload"] : (function () { throw new RuntimeError('Variable "frankenphp_hot_reload" does not exist.', 19, $this->source); })()), "html", null, true);
            yield "\">
        <script src=\"https://cdn.jsdelivr.net/npm/idiomorph\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/frankenphp-hot-reload/+esm\" type=\"module\"></script>
        ";
        }
        // line 23
        yield "    </head>
    <body>


    <!-- ==========================================
     HEADER & NAVIGATION
     ========================================== -->
    <header class=\"site-header\" id=\"main-header\">
        <div class=\"container nav-container\">
            <a href=\"#hero\" class=\"brand-logo\">
                <div class=\"crest-icon\">P</div>
                <div class=\"brand-text\">
                    <span class=\"brand-name\">PENNYWORTH</span>
                    <span class=\"brand-sub\">Alfred Pennyworth • Majordome d\x27Exception</span>
                </div>
            </a>

            <ul class=\"nav-links\" id=\"nav-menu\">
                <li><a href=\"#philosophie\" class=\"nav-link\" data-i18n=\"nav_philosophy\">Philosophie</a></li>
                <li><a href=\"#prestations\" class=\"nav-link\" data-i18n=\"nav_services\">Prestations</a></li>
                <li><a href=\"#simulateur\" class=\"nav-link\" data-i18n=\"nav_simulator\">Simulateur</a></li>
                <li><a href=\"#galerie\" class=\"nav-link\" data-i18n=\"nav_gallery\">L\x27Art de Vivre</a></li>
                <li><a href=\"#references\" class=\"nav-link\" data-i18n=\"nav_testimonials\">Références</a></li>
                <li><a href=\"";
        // line 46
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" class=\"nav-link\" data-i18n=\"nav_contact\">Contact Privé</a></li>
            </ul>

            <div class=\"nav-actions\">
                <select class=\"lang-switch\" id=\"lang-selector\" aria-label=\"Choisir la langue\">
                    <option value=\"fr\">FR</option>
                    <option value=\"en\">EN</option>
                </select>
                <a href=\"#contact\" class=\"btn btn-outline-gold\" data-i18n=\"btn_request\">Ligne Privée</a>
                <button class=\"mobile-toggle\" id=\"mobile-menu-btn\" aria-label=\"Menu mobile\">
                    <i class=\"fas fa-bars\"></i>
                </button>
            </div>
        </div>
    </header>
    <div class=\"container\">
        ";
        // line 62
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 63
        yield "    </div>
    <!-- ==========================================
     FOOTER
     ========================================== -->
    <footer class=\"site-footer\">
        <div class=\"container\">
            <div class=\"footer-top\">
                <div class=\"footer-brand\">
                    <div class=\"brand-logo\">
                        <div class=\"crest-icon\">P</div>
                        <div class=\"brand-text\">
                            <span class=\"brand-name\">PENNYWORTH</span>
                            <span class=\"brand-sub\">Alfred Pennyworth</span>
                        </div>
                    </div>
                    <p>
                        « Le service n\x27est pas un métier, c\x27est une dévotion. » L\x27art de l\x27intendance britannique et du majordome d\x27exception au service des plus prestigieux domaines du monde.
                    </p>
                </div>

                <div class=\"footer-col\">
                    <h5>Prestations</h5>
                    <ul class=\"footer-links\">
                        <li><a href=\"#prestations\">Gérance de Manoirs</a></li>
                        <li><a href=\"#prestations\">Yachting & Voyages VIP</a></li>
                        <li><a href=\"#prestations\">Dîners de Maître & Réceptions</a></li>
                        <li><a href=\"#prestations\">Conciergerie Personnelle</a></li>
                    </ul>
                </div>

                <div class=\"footer-col\">
                    <h5>Rayonnement</h5>
                    <ul class=\"footer-links\">
                        <li><a href=\"#contact\">Londres & Campagnes Royales</a></li>
                        <li><a href=\"#contact\">Paris & Châteaux de France</a></li>
                        <li><a href=\"#contact\">Monaco, Genève & Alpes</a></li>
                        <li><a href=\"#contact\">New York & Caraïbes</a></li>
                    </ul>
                </div>

                <div class=\"footer-col\">
                    <h5>Garanties</h5>
                    <ul class=\"footer-links\">
                        <li><a href=\"#\" class=\"btn-open-brochure\"><i class=\"fas fa-shield-alt gold-highlight\"></i> Charte de Confidentialité Absolue</a></li>
                        <li><a href=\"#\" class=\"btn-open-brochure\"><i class=\"fas fa-award gold-highlight\"></i> British Butler Guild Honor</a></li>
                        <li><a href=\"#\" class=\"btn-open-vcard\"><i class=\"fas fa-address-book gold-highlight\"></i> Télécharger vCard d\x27Alfred</a></li>
                    </ul>
                </div>
            </div>

            <div class=\"footer-bottom\">
                <div>
                    © 2026 Alfred Pennyworth • Pennyworth & Co. Tous droits réservés.
                </div>
                <div>
                    Code déontologique & Secret professionnel garanti.
                </div>
            </div>
        </div>
    </footer>
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield;
    }

    // line 5
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

        yield "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 8
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

        // line 9
        yield "            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 13
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

        // line 14
        yield "            ";
        yield from $this->unwrap()->yieldBlock('importmap', $context, $blocks);
        // line 15
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_importmap(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        yield (string) $this->env->getRuntime('Symfony\Bridge\Twig\Extension\ImportMapRuntime')->importmap("app");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 62
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

        return; yield;
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
    public function getDefaultEscapeStrategy(): string|false
    {
        return "html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  314 => 62,  291 => 14,  280 => 15,  277 => 14,  264 => 13,  251 => 10,  248 => 9,  235 => 8,  212 => 5,  139 => 63,  137 => 62,  118 => 46,  93 => 23,  85 => 19,  82 => 18,  80 => 17,  77 => 16,  75 => 13,  72 => 12,  70 => 8,  64 => 5,  58 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">

        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css\">
            <link rel=\"stylesheet\" href=\"{{ asset(\x27css/style.css\x27) }}\">
        {% endblock %}

        {% block javascripts %}
            {% block importmap %}{{ importmap(\x27app\x27) }}{% endblock %}
        {% endblock %}

        {% set frankenphp_hot_reload = app.request.server.get(\x27FRANKENPHP_HOT_RELOAD\x27) %}
        {% if frankenphp_hot_reload %}
        <meta name=\"frankenphp-hot-reload:url\" content=\"{{ frankenphp_hot_reload }}\">
        <script src=\"https://cdn.jsdelivr.net/npm/idiomorph\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/frankenphp-hot-reload/+esm\" type=\"module\"></script>
        {% endif %}
    </head>
    <body>


    <!-- ==========================================
     HEADER & NAVIGATION
     ========================================== -->
    <header class=\"site-header\" id=\"main-header\">
        <div class=\"container nav-container\">
            <a href=\"#hero\" class=\"brand-logo\">
                <div class=\"crest-icon\">P</div>
                <div class=\"brand-text\">
                    <span class=\"brand-name\">PENNYWORTH</span>
                    <span class=\"brand-sub\">Alfred Pennyworth • Majordome d\x27Exception</span>
                </div>
            </a>

            <ul class=\"nav-links\" id=\"nav-menu\">
                <li><a href=\"#philosophie\" class=\"nav-link\" data-i18n=\"nav_philosophy\">Philosophie</a></li>
                <li><a href=\"#prestations\" class=\"nav-link\" data-i18n=\"nav_services\">Prestations</a></li>
                <li><a href=\"#simulateur\" class=\"nav-link\" data-i18n=\"nav_simulator\">Simulateur</a></li>
                <li><a href=\"#galerie\" class=\"nav-link\" data-i18n=\"nav_gallery\">L\x27Art de Vivre</a></li>
                <li><a href=\"#references\" class=\"nav-link\" data-i18n=\"nav_testimonials\">Références</a></li>
                <li><a href=\"{{ path(\x27app_contact\x27) }}\" class=\"nav-link\" data-i18n=\"nav_contact\">Contact Privé</a></li>
            </ul>

            <div class=\"nav-actions\">
                <select class=\"lang-switch\" id=\"lang-selector\" aria-label=\"Choisir la langue\">
                    <option value=\"fr\">FR</option>
                    <option value=\"en\">EN</option>
                </select>
                <a href=\"#contact\" class=\"btn btn-outline-gold\" data-i18n=\"btn_request\">Ligne Privée</a>
                <button class=\"mobile-toggle\" id=\"mobile-menu-btn\" aria-label=\"Menu mobile\">
                    <i class=\"fas fa-bars\"></i>
                </button>
            </div>
        </div>
    </header>
    <div class=\"container\">
        {% block body %}{% endblock %}
    </div>
    <!-- ==========================================
     FOOTER
     ========================================== -->
    <footer class=\"site-footer\">
        <div class=\"container\">
            <div class=\"footer-top\">
                <div class=\"footer-brand\">
                    <div class=\"brand-logo\">
                        <div class=\"crest-icon\">P</div>
                        <div class=\"brand-text\">
                            <span class=\"brand-name\">PENNYWORTH</span>
                            <span class=\"brand-sub\">Alfred Pennyworth</span>
                        </div>
                    </div>
                    <p>
                        « Le service n\x27est pas un métier, c\x27est une dévotion. » L\x27art de l\x27intendance britannique et du majordome d\x27exception au service des plus prestigieux domaines du monde.
                    </p>
                </div>

                <div class=\"footer-col\">
                    <h5>Prestations</h5>
                    <ul class=\"footer-links\">
                        <li><a href=\"#prestations\">Gérance de Manoirs</a></li>
                        <li><a href=\"#prestations\">Yachting & Voyages VIP</a></li>
                        <li><a href=\"#prestations\">Dîners de Maître & Réceptions</a></li>
                        <li><a href=\"#prestations\">Conciergerie Personnelle</a></li>
                    </ul>
                </div>

                <div class=\"footer-col\">
                    <h5>Rayonnement</h5>
                    <ul class=\"footer-links\">
                        <li><a href=\"#contact\">Londres & Campagnes Royales</a></li>
                        <li><a href=\"#contact\">Paris & Châteaux de France</a></li>
                        <li><a href=\"#contact\">Monaco, Genève & Alpes</a></li>
                        <li><a href=\"#contact\">New York & Caraïbes</a></li>
                    </ul>
                </div>

                <div class=\"footer-col\">
                    <h5>Garanties</h5>
                    <ul class=\"footer-links\">
                        <li><a href=\"#\" class=\"btn-open-brochure\"><i class=\"fas fa-shield-alt gold-highlight\"></i> Charte de Confidentialité Absolue</a></li>
                        <li><a href=\"#\" class=\"btn-open-brochure\"><i class=\"fas fa-award gold-highlight\"></i> British Butler Guild Honor</a></li>
                        <li><a href=\"#\" class=\"btn-open-vcard\"><i class=\"fas fa-address-book gold-highlight\"></i> Télécharger vCard d\x27Alfred</a></li>
                    </ul>
                </div>
            </div>

            <div class=\"footer-bottom\">
                <div>
                    © 2026 Alfred Pennyworth • Pennyworth & Co. Tous droits réservés.
                </div>
                <div>
                    Code déontologique & Secret professionnel garanti.
                </div>
            </div>
        </div>
    </footer>
    </body>
</html>
", "base.html.twig", "/var/www/site-vitrine-alfred/templates/base.html.twig");
    }
}
