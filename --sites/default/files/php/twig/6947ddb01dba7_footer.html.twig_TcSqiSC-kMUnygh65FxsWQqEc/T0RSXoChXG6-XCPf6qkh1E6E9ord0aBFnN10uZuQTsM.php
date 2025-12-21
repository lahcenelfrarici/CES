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

/* @ces/partials/footer.html.twig */
class __TwigTemplate_d2a45e78e4407bb0be2d1f8a208fed92 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 76
        yield "
";
        // line 115
        yield "<footer class=\"relative bg-slate-950 border-t border-white/10 py-16\">
\t<div class=\"max-w-7xl mx-auto px-6\">
\t\t<div class=\"grid md:grid-cols-4 gap-12 mb-12\">
\t\t\t<div>
\t\t\t\t<div class=\"w-12 h-12 bg-gradient-to-br from-cyan-400 to-blue-600 rounded-xl flex items-center justify-center mb-4\">
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"lucide lucide-sparkles w-7 h-7 text-white\" aria-hidden=\"true\">
\t\t\t\t\t\t<path d=\"M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z\"></path>
\t\t\t\t\t\t<path d=\"M20 2v4\"></path>
\t\t\t\t\t\t<path d=\"M22 4h-4\"></path>
\t\t\t\t\t\t<circle cx=\"4\" cy=\"20\" r=\"2\"></circle>
\t\t\t\t\t</svg>
\t\t\t\t</div>
\t\t\t\t<p class=\"text-gray-400 text-sm\">";
        // line 127
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Excellence en équipement professionnel"));
        yield "</p>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<h4 class=\"text-white mb-4\">";
        // line 130
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Navigation"));
        yield "</h4>
\t\t\t\t";
        // line 131
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_1", [], "any", false, false, true, 131)) {
            // line 132
            yield "\t\t\t\t\t";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_1", [], "any", false, false, true, 132), "html", null, true);
            yield "
\t\t\t\t";
        }
        // line 134
        yield "\t\t\t\t";
        // line 148
        yield "\t\t\t</div>
\t\t\t<div>
\t\t\t\t<h4 class=\"text-white mb-4\">";
        // line 150
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Contact"));
        yield "</h4>
\t\t\t\t<ul class=\"space-y-2 text-gray-400 text-sm\">
\t\t\t\t\t<li>Casablanca, Maroc</li>
\t\t\t\t\t<li>contact@ces.ma</li>
\t\t\t\t</ul>
\t\t\t\t";
        // line 158
        yield "\t\t\t</div>
\t\t\t<div>
\t\t\t\t<h4 class=\"text-white mb-4\">";
        // line 160
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Suivez-nous"));
        yield "</h4>
\t\t\t\t<div class=\"flex gap-3\">
\t\t\t\t\t<div class=\"w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center text-white cursor-pointer hover:bg-cyan-500/20 transition-colors\">
\t\t\t\t\t\tF</div>
\t\t\t\t\t<div class=\"w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center text-white cursor-pointer hover:bg-cyan-500/20 transition-colors\">
\t\t\t\t\t\tT</div>
\t\t\t\t\t<div class=\"w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center text-white cursor-pointer hover:bg-cyan-500/20 transition-colors\">
\t\t\t\t\t\tI</div>
\t\t\t\t\t<div class=\"w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center text-white cursor-pointer hover:bg-cyan-500/20 transition-colors\">
\t\t\t\t\t\tL</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"border-t border-white/10 pt-8 text-center text-gray-500 text-sm\">";
        // line 173
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("© 2024 CES - Tous droits réservés"));
        yield "</div>
\t</div>
</footer>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ces/partials/footer.html.twig";
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
        return array (  113 => 173,  97 => 160,  93 => 158,  85 => 150,  81 => 148,  79 => 134,  73 => 132,  71 => 131,  67 => 130,  61 => 127,  47 => 115,  44 => 76,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
<section class=\"contact---us\" id=\"contact---us\">
\t<div
\t\tclass=\"contact-container\">
\t\t<!-- Left Form Section -->
\t\t<div class=\"contact-form\">
\t\t\t<h3>{{'I am interested in getting in touch with Casablanca Finance City'|t}}</h3>

\t\t\t<div class=\"web__form_dr\">
\t\t\t\t{{ drupal_entity('block','cfc_webform') }}
\t\t\t</div>
\t\t</div>

\t\t<!-- Right Image Section -->
\t\t<div class=\"contact-image\">
\t\t\t<img src=\"/themes/custom/cfc/CFC/assets/images/contatc-img.png\" alt=\"Office\"/>
\t\t</div>
\t</div>
</section>
<section class=\"section---filter-block\">
\t{{ drupal_view('news','block_1') }}
</section>


<footer class=\"bg-dark text-light py-5\">
\t<div class=\"container\">
\t\t<div
\t\t\tclass=\"row\">
\t\t\t<!-- Copyright -->
\t\t\t<div class=\"text-center mb-4\">
\t\t\t\t<p class=\"mb-0\">
\t\t\t\t\t{{ drupal_entity('block','cfc_copyright') }}</p>
\t\t\t</div>
\t\t\t<!-- Logo and Social Links -->
\t\t\t<div class=\"col-md-4 \">
\t\t\t\t{{ drupal_entity('block','cfc_logofooter') }}

\t\t\t\t{{ drupal_entity('block','cfc_socialmedia') }}


\t\t\t</div>

\t\t\t<!-- Stay Updated -->
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<h5>{{ 'Stay Updated'|t }}</h5>
\t\t\t\t{{ drupal_entity('block','cfc_stayupdated') }}
\t\t\t\t<form class=\"d-flex mt-3\">
\t\t\t\t\t<input type=\"email\" class=\"form-control rounded-pill\" placeholder=\"Email...\" required=\"\">
\t\t\t\t\t<button type=\"submit\" class=\"form--news\">{{'Subscribe'|t}}
\t\t\t\t\t\t<i class=\"fas fa-arrow-right ms-2\"></i>
\t\t\t\t\t</button>
\t\t\t\t</form>
\t\t\t</div>

\t\t\t<!-- Quick Links -->
\t\t\t<div class=\"col-md-4\">

\t\t\t\t{{ drupal_entity('block','cfc_quicklinks') }}
\t\t\t</div>
\t\t</div>


\t</div>
\t<!-- Google tag (gtag.js) -->
\t<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-9WWD1TRBQN\"></script>
\t<script>
\t\twindow.dataLayer = window.dataLayer || [];
function gtag() {
dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'G-9WWD1TRBQN');
\t</script>
</footer> #}

{# <footer class=\"text-light py-5\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 mb-4\">
\t\t\t\t{{ drupal_entity('block','desktech_site_branding') }}
\t\t\t</div>

\t\t\t<div class=\"col-md-4\">
      {{ drupal_entity('block','desktech_footerleft') }}


\t\t\t</div>

\t\t\t<div class=\"col-md-4\">
 {{ drupal_entity('block','desktech_liensutiles') }}


\t\t\t</div>

\t\t\t<div class=\"col-md-4 last--list-foooter\">
\t\t\t\t<h3>Newsletter</h3>
\t\t\t\t<p>
\t\t\t\t\tAbonnez-vous pour recevoir les dernières nouveautés et offres exclusives Ricoh au Maroc.
\t\t\t\t</p>

        {{ drupal_entity('block','desktech_webform_3') }}
\t\t\t</div>

\t\t\t<div class=\"text-center mb-4 copyright--foooter mt-3\">
\t\t\t\t<hr class=\"line__footer\">
        {{ drupal_entity('block','desktech_copyright') }}
\t\t\t</div>

\t\t</div>


\t</div>
</footer> #}
<footer class=\"relative bg-slate-950 border-t border-white/10 py-16\">
\t<div class=\"max-w-7xl mx-auto px-6\">
\t\t<div class=\"grid md:grid-cols-4 gap-12 mb-12\">
\t\t\t<div>
\t\t\t\t<div class=\"w-12 h-12 bg-gradient-to-br from-cyan-400 to-blue-600 rounded-xl flex items-center justify-center mb-4\">
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"lucide lucide-sparkles w-7 h-7 text-white\" aria-hidden=\"true\">
\t\t\t\t\t\t<path d=\"M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z\"></path>
\t\t\t\t\t\t<path d=\"M20 2v4\"></path>
\t\t\t\t\t\t<path d=\"M22 4h-4\"></path>
\t\t\t\t\t\t<circle cx=\"4\" cy=\"20\" r=\"2\"></circle>
\t\t\t\t\t</svg>
\t\t\t\t</div>
\t\t\t\t<p class=\"text-gray-400 text-sm\">{{'Excellence en équipement professionnel'|t}}</p>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<h4 class=\"text-white mb-4\">{{'Navigation'|t}}</h4>
\t\t\t\t{% if page.footer_top_1 %}
\t\t\t\t\t{{page.footer_top_1}}
\t\t\t\t{% endif %}
\t\t\t\t{# <ul class=\"space-y-2 text-gray-400 text-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"hover:text-cyan-400 transition-colors\">Accueil</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"hover:text-cyan-400 transition-colors\">Qui sommes-nous</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#services\" class=\"hover:text-cyan-400 transition-colors\">Services</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#news\" class=\"hover:text-cyan-400 transition-colors\">Actualités</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul> #}
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<h4 class=\"text-white mb-4\">{{'Contact'|t}}</h4>
\t\t\t\t<ul class=\"space-y-2 text-gray-400 text-sm\">
\t\t\t\t\t<li>Casablanca, Maroc</li>
\t\t\t\t\t<li>contact@ces.ma</li>
\t\t\t\t</ul>
\t\t\t\t{# {% if page.footer_top_2 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{{page.footer_top_2}}
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %} #}
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<h4 class=\"text-white mb-4\">{{'Suivez-nous'|t}}</h4>
\t\t\t\t<div class=\"flex gap-3\">
\t\t\t\t\t<div class=\"w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center text-white cursor-pointer hover:bg-cyan-500/20 transition-colors\">
\t\t\t\t\t\tF</div>
\t\t\t\t\t<div class=\"w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center text-white cursor-pointer hover:bg-cyan-500/20 transition-colors\">
\t\t\t\t\t\tT</div>
\t\t\t\t\t<div class=\"w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center text-white cursor-pointer hover:bg-cyan-500/20 transition-colors\">
\t\t\t\t\t\tI</div>
\t\t\t\t\t<div class=\"w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center text-white cursor-pointer hover:bg-cyan-500/20 transition-colors\">
\t\t\t\t\t\tL</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"border-t border-white/10 pt-8 text-center text-gray-500 text-sm\">{{'© 2024 CES - Tous droits réservés'|t}}</div>
\t</div>
</footer>
", "@ces/partials/footer.html.twig", "C:\\laragon\\www\\ces\\themes\\custom\\ces\\templates\\partials\\footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 131];
        static $filters = ["t" => 127, "escape" => 132];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
