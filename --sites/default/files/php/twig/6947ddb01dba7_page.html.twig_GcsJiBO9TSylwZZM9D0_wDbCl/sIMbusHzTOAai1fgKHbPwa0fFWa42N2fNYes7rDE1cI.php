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

/* themes/custom/ces/templates/system/page.html.twig */
class __TwigTemplate_876ac112c6d494fa59e84e503eafee24 extends Template
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
        // line 48
        yield "

";
        // line 50
        yield from $this->loadTemplate("@ces/partials/header.html.twig", "themes/custom/ces/templates/system/page.html.twig", 50)->unwrap()->yield($context);
        // line 51
        yield "
 <div id=\"container\">
    <div class=\"\">
      <div class=\"\">
        <div class=\"tailwind css-myl2ny css-exq74d\">
          <div class=\"bg-gradient-to-br from-slate-950 via-blue-950 to-slate-900 min-h-screen overflow-x-hidden\">
<!-- Your main content goes here -->
";
        // line 76
        yield "
";
        // line 78
        yield "<!-- Slider Section -->

\t";
        // line 80
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 80)) {
            // line 81
            yield "\t\t";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 81), "html", null, true);
            yield "
\t";
        }
        // line 83
        yield "\t<!--  -->
          </div>
        </div>
      </div>
    </div>
  </div>
\t";
        // line 89
        yield from $this->loadTemplate("@ces/partials/footer.html.twig", "themes/custom/ces/templates/system/page.html.twig", 89)->unwrap()->yield($context);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/ces/templates/system/page.html.twig";
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
        return array (  82 => 89,  74 => 83,  68 => 81,  66 => 80,  62 => 78,  59 => 76,  50 => 51,  48 => 50,  44 => 48,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Olivero's theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template normally located in the
 * core/modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.highlighted: Items for the highlighted region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.content: The main content of the current page.
 * - page.sidebar: Items for the first sidebar.
 * - page.featured_bottom_first: Items for the first featured bottom region.
 * - page.featured_bottom_second: Items for the second featured bottom region.
 * - page.footer_first: Items for the first footer column.
 * - page.footer_second: Items for the second footer column.
 * - page.breadcrumb: Items for the breadcrumb region.
 * - page.social: Items for the social region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}


{% include \"@ces/partials/header.html.twig\" %}

 <div id=\"container\">
    <div class=\"\">
      <div class=\"\">
        <div class=\"tailwind css-myl2ny css-exq74d\">
          <div class=\"bg-gradient-to-br from-slate-950 via-blue-950 to-slate-900 min-h-screen overflow-x-hidden\">
<!-- Your main content goes here -->
{# <section class=\"section--slider banner--wrapper\">
\t\t<div class=\"slider-main\">
\t\t\t<div class=\"wrapper-slider\">
\t\t\t\t{{ page.banner }}
\t\t\t</div>
\t\t</div>
\t\t<div class=\"paragraph-wrapper\">
\t\t\t<div class=\"container\">
\t\t\t\t{% if page.page_title %}
\t\t\t\t\t{{page.page_title}}
\t\t\t\t{% endif %}

\t\t\t\t{% if page.breadcrumb %}
\t\t\t\t\t{{ page.breadcrumb }}
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t</section> #}

{#  **#}
<!-- Slider Section -->

\t{% if page.content %}
\t\t{{ page.content }}
\t{% endif %}
\t<!--  -->
          </div>
        </div>
      </div>
    </div>
  </div>
\t{% include \"@ces/partials/footer.html.twig\" %}
", "themes/custom/ces/templates/system/page.html.twig", "C:\\laragon\\www\\ces\\themes\\custom\\ces\\templates\\system\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["include" => 50, "if" => 80];
        static $filters = ["escape" => 81];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
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
