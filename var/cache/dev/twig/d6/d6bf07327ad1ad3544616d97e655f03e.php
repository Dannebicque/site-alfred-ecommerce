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

/* contact/envoyer.html.twig */
class __TwigTemplate_2a36bdde3b181867a0713731528253b1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/envoyer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/envoyer.html.twig"));

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

        yield "Transmission Reçue au Bat-Ordinateur • Alfred Pennyworth";
        
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
            <div class=\"section-label\">Statut : Accusé de Réception Crypté</div>
            <h1 class=\"section-title\">Transmission <span class=\"gold-text\">Confirmée</span> !</h1>
            <p class=\"section-subtitle\" style=\"margin-bottom: 0;\">
                « Bien reçu, Monsieur. J\x27ai transmis votre message sur l\x27écran principal de la Batcave et mis l\x27eau du thé à chauffer. »
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
        <div class=\"container container-narrow\">
            <div class=\"batcomputer-receipt-card\">
                <div class=\"receipt-top-bar\">
                    <div class=\"terminal-dots\">
                        <span class=\"t-dot red\"></span>
                        <span class=\"t-dot yellow\"></span>
                        <span class=\"t-dot green\"></span>
                    </div>
                    <div class=\"terminal-title\">
                        <i class=\"fas fa-satellite-dish\"></i> BATCOMPUTER_LOG // MAILER_DISPATCH_OK
                    </div>
                    <div class=\"terminal-badge\">STATUT : ENVOYÉ</div>
                </div>

                <div class=\"receipt-body\">
                    <div class=\"receipt-success-banner\">
                        <div class=\"receipt-check-icon\">
                            <i class=\"fas fa-check\"></i>
                        </div>
                        <div>
                            <h3>Courrier électronique expédié avec succès</h3>
                            <p>Le service Symfony <code>ContactMailer</code> a bien acheminé votre dépêche vers le terminal d\x27Alfred Pennyworth.</p>
                        </div>
                    </div>

                    <div class=\"receipt-meta-grid\">
                        <div class=\"receipt-meta-box\">
                            <span class=\"meta-label\"><i class=\"fas fa-user-shield\"></i> Émetteur du Signal</span>
                            <strong class=\"meta-value\">";
        // line 47
        yield (string) $this->escaper->escape((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 47, $this->source); })()), "html", null, true);
        yield "</strong>
                        </div>
                        <div class=\"receipt-meta-box\">
                            <span class=\"meta-label\"><i class=\"fas fa-envelope\"></i> Fréquence de Retour</span>
                            <strong class=\"meta-value\">";
        // line 51
        yield (string) $this->escaper->escape((isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 51, $this->source); })()), "html", null, true);
        yield "</strong>
                        </div>
                    </div>

                    <div class=\"receipt-message-box\">
                        <span class=\"meta-label\"><i class=\"fas fa-terminal\"></i> Contenu Décrypté de la Dépêche :</span>
                        <blockquote class=\"receipt-message-content\">
                            ";
        // line 58
        yield (string) Twig\Extension\CoreExtension::nl2br($this->escaper->escape((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 58, $this->source); })()), "html", null, true));
        yield "
                        </blockquote>
                    </div>

                    <div class=\"alfred-reply-quote\">
                        <img src=\"";
        // line 63
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/alfred.jpg"), "html", null, true);
        yield "\" alt=\"Alfred Pennyworth\" class=\"alfred-mini-avatar\">
                        <div>
                            <strong>Réponse automatique d\x27Alfred :</strong>
                            <p>« Je prends personnellement connaissance de votre message. Si vous êtes poursuivi par le Joker, veuillez patienter près du projecteur du GCPD : la Batmobile est en route. »</p>
                        </div>
                    </div>

                    <div class=\"receipt-actions\">
                        <a href=\"";
        // line 71
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
        yield "\" class=\"btn btn-gold\">
                            <i class=\"fas fa-home\"></i> Retourner au Manoir Wayne
                        </a>
                        <a href=\"";
        // line 74
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" class=\"btn btn-outline-gold\">
                            <i class=\"fas fa-rotate-left\"></i> Envoyer une Autre Transmission
                        </a>
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
        return "contact/envoyer.html.twig";
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
        return array (  212 => 74,  206 => 71,  195 => 63,  187 => 58,  177 => 51,  170 => 47,  139 => 18,  126 => 17,  106 => 6,  93 => 5,  70 => 3,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}Transmission Reçue au Bat-Ordinateur • Alfred Pennyworth{% endblock %}

{% block page_banner %}
    <section class=\"page-hero-banner\">
        <div class=\"container text-center\">
            <div class=\"section-label\">Statut : Accusé de Réception Crypté</div>
            <h1 class=\"section-title\">Transmission <span class=\"gold-text\">Confirmée</span> !</h1>
            <p class=\"section-subtitle\" style=\"margin-bottom: 0;\">
                « Bien reçu, Monsieur. J\x27ai transmis votre message sur l\x27écran principal de la Batcave et mis l\x27eau du thé à chauffer. »
            </p>
        </div>
    </section>
{% endblock %}

{% block body %}
    <section class=\"section-padding\" style=\"padding-top: 3rem;\">
        <div class=\"container container-narrow\">
            <div class=\"batcomputer-receipt-card\">
                <div class=\"receipt-top-bar\">
                    <div class=\"terminal-dots\">
                        <span class=\"t-dot red\"></span>
                        <span class=\"t-dot yellow\"></span>
                        <span class=\"t-dot green\"></span>
                    </div>
                    <div class=\"terminal-title\">
                        <i class=\"fas fa-satellite-dish\"></i> BATCOMPUTER_LOG // MAILER_DISPATCH_OK
                    </div>
                    <div class=\"terminal-badge\">STATUT : ENVOYÉ</div>
                </div>

                <div class=\"receipt-body\">
                    <div class=\"receipt-success-banner\">
                        <div class=\"receipt-check-icon\">
                            <i class=\"fas fa-check\"></i>
                        </div>
                        <div>
                            <h3>Courrier électronique expédié avec succès</h3>
                            <p>Le service Symfony <code>ContactMailer</code> a bien acheminé votre dépêche vers le terminal d\x27Alfred Pennyworth.</p>
                        </div>
                    </div>

                    <div class=\"receipt-meta-grid\">
                        <div class=\"receipt-meta-box\">
                            <span class=\"meta-label\"><i class=\"fas fa-user-shield\"></i> Émetteur du Signal</span>
                            <strong class=\"meta-value\">{{ name }}</strong>
                        </div>
                        <div class=\"receipt-meta-box\">
                            <span class=\"meta-label\"><i class=\"fas fa-envelope\"></i> Fréquence de Retour</span>
                            <strong class=\"meta-value\">{{ email }}</strong>
                        </div>
                    </div>

                    <div class=\"receipt-message-box\">
                        <span class=\"meta-label\"><i class=\"fas fa-terminal\"></i> Contenu Décrypté de la Dépêche :</span>
                        <blockquote class=\"receipt-message-content\">
                            {{ message|nl2br }}
                        </blockquote>
                    </div>

                    <div class=\"alfred-reply-quote\">
                        <img src=\"{{ asset(\x27images/alfred.jpg\x27) }}\" alt=\"Alfred Pennyworth\" class=\"alfred-mini-avatar\">
                        <div>
                            <strong>Réponse automatique d\x27Alfred :</strong>
                            <p>« Je prends personnellement connaissance de votre message. Si vous êtes poursuivi par le Joker, veuillez patienter près du projecteur du GCPD : la Batmobile est en route. »</p>
                        </div>
                    </div>

                    <div class=\"receipt-actions\">
                        <a href=\"{{ path(\x27app_homepage\x27) }}\" class=\"btn btn-gold\">
                            <i class=\"fas fa-home\"></i> Retourner au Manoir Wayne
                        </a>
                        <a href=\"{{ path(\x27app_contact\x27) }}\" class=\"btn btn-outline-gold\">
                            <i class=\"fas fa-rotate-left\"></i> Envoyer une Autre Transmission
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "contact/envoyer.html.twig", "/var/www/site-vitrine-alfred/templates/contact/envoyer.html.twig");
    }
}
