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

/* themes/custom/ces/templates/navigation/menu--main.html.twig */
class __TwigTemplate_63a8a69f6f7c0f0fd156819095ba95d0 extends Template
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
        // line 54
        yield "
";
        // line 55
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 56
        yield "
<nav class=\"fixed top-6 z-50 transition-all duration-300 left-0 right-0 px-[5%]\" style=\"transform: none;\">
  <div class=\"bg-transparent max-w-7xl mx-auto flex items-center justify-between transition-all duration-300\">

    ";
        // line 61
        yield "    <a href=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        yield "\" class=\"flex items-center gap-3\">
      <img src=\"/";
        // line 62
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/ces/assets/images/logo.png\" alt=\"Logo\" class=\"transition-all duration-300 h-16\">
    </a>

    ";
        // line 66
        yield "    <div class=\"md:flex items-center gap-8 items__menu_principe\">
      ";
        // line 67
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_desktop_menu", $context, 67, $this->getSourceContext())->macro_desktop_menu(...[($context["items"] ?? null)]));
        yield "
    </div>

    ";
        // line 71
        yield "    <button id=\"click_mobile\" class=\"md:hidden text-white\">
      <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
        <path d=\"M4 5h16\"></path>
        <path d=\"M4 12h16\"></path>
        <path d=\"M4 19h16\"></path>
      </svg>
    </button>

    ";
        // line 80
        yield "    <div class=\"show__menu hidden fixed top-24 left-4 right-4 z-40 bg-slate-900/95 backdrop-blur-xl border border-cyan-500/30 rounded-3xl p-6 md:hidden\">
      <div class=\"flex flex-col gap-4\">
        ";
        // line 82
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_mobile_menu", $context, 82, $this->getSourceContext())->macro_mobile_menu(...[($context["items"] ?? null)]));
        yield "
      </div>
    </div>

  </div>
</nav>

";
        // line 128
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "directory", "items"]);        yield from [];
    }

    // line 92
    public function macro_desktop_menu($items = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "items" => $items,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 93
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 94
                yield "    ";
                $context["has_children"] =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 94));
                // line 95
                yield "
    ";
                // line 96
                if (($context["has_children"] ?? null)) {
                    // line 97
                    yield "      <div class=\"relative group\">
        <a href=\"";
                    // line 98
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 98), "html", null, true);
                    yield "\"
           class=\"text-sm flex items-center gap-1 relative
           ";
                    // line 100
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 100)) ? ("text-cyan-400") : ("text-white/70 hover:text-white")));
                    yield "\">
          ";
                    // line 101
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 101), "html", null, true);
                    yield "
          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-4 h-4\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
            <path d=\"m6 9 6 6 6-6\"></path>
          </svg>
          <span class=\"absolute -bottom-1 left-0 h-0.5 bg-cyan-400 transition-all w-0 group-hover:w-full\"></span>
        </a>

        <div class=\"absolute left-0 mt-4 hidden group-hover:block bg-slate-900 rounded-xl p-4 min-w-[200px]\">
          ";
                    // line 109
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 109));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 110
                        yield "            <a href=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "url", [], "any", false, false, true, 110), "html", null, true);
                        yield "\"
               class=\"block py-2 px-3 text-sm text-white/70 hover:text-white hover:bg-white/5 rounded-lg\">
              ";
                        // line 112
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "title", [], "any", false, false, true, 112), "html", null, true);
                        yield "
            </a>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 115
                    yield "        </div>
      </div>
    ";
                } else {
                    // line 118
                    yield "      <a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 118), "html", null, true);
                    yield "\"
         class=\"text-sm relative group
         ";
                    // line 120
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 120)) ? ("text-cyan-400") : ("text-white/70 hover:text-white")));
                    yield "\">
        ";
                    // line 121
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 121), "html", null, true);
                    yield "
        <span class=\"absolute -bottom-1 left-0 h-0.5 bg-cyan-400 transition-all
        ";
                    // line 123
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 123)) ? ("w-full") : ("w-0 group-hover:w-full")));
                    yield "\"></span>
      </a>
    ";
                }
                // line 126
                yield "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 132
    public function macro_mobile_menu($items = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "items" => $items,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 133
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 134
                yield "    ";
                $context["has_children"] =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 134));
                // line 135
                yield "
    ";
                // line 136
                if (($context["has_children"] ?? null)) {
                    // line 137
                    yield "      <div>
        <button class=\"w-full text-left py-3 px-4 rounded-xl flex justify-between
        bg-cyan-500/20 text-cyan-400\">
          ";
                    // line 140
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 140), "html", null, true);
                    yield "
          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-4 h-4\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
            <path d=\"m6 9 6 6 6-6\"></path>
          </svg>
        </button>

        <div class=\"ml-4 mt-2 space-y-2\">
          ";
                    // line 147
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 147));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 148
                        yield "            <a href=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "url", [], "any", false, false, true, 148), "html", null, true);
                        yield "\"
               class=\"block py-2 px-4 text-sm text-white/70 hover:text-white hover:bg-white/5 rounded-xl\">
              ";
                        // line 150
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "title", [], "any", false, false, true, 150), "html", null, true);
                        yield "
            </a>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 153
                    yield "        </div>
      </div>
    ";
                } else {
                    // line 156
                    yield "      <a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 156), "html", null, true);
                    yield "\"
         class=\"text-left py-3 px-4 rounded-xl transition-colors text-white hover:bg-white/5\">
        ";
                    // line 158
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 158), "html", null, true);
                    yield "
      </a>
    ";
                }
                // line 161
                yield "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/ces/templates/navigation/menu--main.html.twig";
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
        return array (  285 => 161,  279 => 158,  273 => 156,  268 => 153,  259 => 150,  253 => 148,  249 => 147,  239 => 140,  234 => 137,  232 => 136,  229 => 135,  226 => 134,  221 => 133,  209 => 132,  199 => 126,  193 => 123,  188 => 121,  184 => 120,  178 => 118,  173 => 115,  164 => 112,  158 => 110,  154 => 109,  143 => 101,  139 => 100,  134 => 98,  131 => 97,  129 => 96,  126 => 95,  123 => 94,  118 => 93,  106 => 92,  99 => 128,  89 => 82,  85 => 80,  75 => 71,  69 => 67,  66 => 66,  60 => 62,  55 => 61,  49 => 56,  47 => 55,  44 => 54,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link URL, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *   - is_expanded: TRUE if the link has visible children within the current
 *     menu tree.
 *   - is_collapsed: TRUE if the link has children within the current menu tree
 *     that are not currently visible.
 *   - in_active_trail: TRUE if the link is in the active trail.
 *
 * @ingroup themeable
 */
#}
{#
{% import _self as menus %}

<ul class=\"navbar-nav ms-auto\">
\t{{ menus.menu_links(items, attributes, 0) }}
</ul>

{% macro menu_links(items, attributes, menu_level) %}
\t{% import _self as menus %}
\t{% for item in items %}
\t\t{% set has_children = item.below is not empty %}

\t\t<li class=\"nav-item{{ has_children ? ' dropdown' : '' }}\">
\t\t\t<a href=\"{{ item.url }}\" class=\"nav-link{{ has_children ? ' dropdown-toggle' : '' }}{{ item.in_active_trail ? ' active' : '' }}\" {% if has_children %} id=\"navbarScrollingDropdown-{{ loop.index }}\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" {% endif %}>
\t\t\t\t{{ item.title }}
\t\t\t\t{% if has_children %}
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"11\" height=\"8\" viewbox=\"0 0 11 8\" fill=\"none\">
\t\t\t\t\t\t<path d=\"M1.2832 2L5.4082 6L9.5332 2\" stroke=\"#000849\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t</svg>
\t\t\t\t{% endif %}
\t\t\t</a>

\t\t\t{% if has_children %}
\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"navbarScrollingDropdown-{{ loop.index }}\">
\t\t\t\t\t{{ menus.menu_links(item.below, attributes, menu_level + 1) }}
\t\t\t\t</ul>
\t\t\t{% endif %}
\t\t</li>

\t{% endfor %}
{% endmacro %} #}

{% import _self as menus %}

<nav class=\"fixed top-6 z-50 transition-all duration-300 left-0 right-0 px-[5%]\" style=\"transform: none;\">
  <div class=\"bg-transparent max-w-7xl mx-auto flex items-center justify-between transition-all duration-300\">

    {# Logo #}
    <a href=\"{{ path('<front>') }}\" class=\"flex items-center gap-3\">
      <img src=\"/{{ directory }}/ces/assets/images/logo.png\" alt=\"Logo\" class=\"transition-all duration-300 h-16\">
    </a>

    {# Desktop menu #}
    <div class=\"md:flex items-center gap-8 items__menu_principe\">
      {{ menus.desktop_menu(items) }}
    </div>

    {# Mobile button #}
    <button id=\"click_mobile\" class=\"md:hidden text-white\">
      <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
        <path d=\"M4 5h16\"></path>
        <path d=\"M4 12h16\"></path>
        <path d=\"M4 19h16\"></path>
      </svg>
    </button>

    {# Mobile menu #}
    <div class=\"show__menu hidden fixed top-24 left-4 right-4 z-40 bg-slate-900/95 backdrop-blur-xl border border-cyan-500/30 rounded-3xl p-6 md:hidden\">
      <div class=\"flex flex-col gap-4\">
        {{ menus.mobile_menu(items) }}
      </div>
    </div>

  </div>
</nav>

{# =========================
   DESKTOP MENU MACRO
   ========================= #}
{% macro desktop_menu(items) %}
  {% for item in items %}
    {% set has_children = item.below is not empty %}

    {% if has_children %}
      <div class=\"relative group\">
        <a href=\"{{ item.url }}\"
           class=\"text-sm flex items-center gap-1 relative
           {{ item.in_active_trail ? 'text-cyan-400' : 'text-white/70 hover:text-white' }}\">
          {{ item.title }}
          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-4 h-4\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
            <path d=\"m6 9 6 6 6-6\"></path>
          </svg>
          <span class=\"absolute -bottom-1 left-0 h-0.5 bg-cyan-400 transition-all w-0 group-hover:w-full\"></span>
        </a>

        <div class=\"absolute left-0 mt-4 hidden group-hover:block bg-slate-900 rounded-xl p-4 min-w-[200px]\">
          {% for child in item.below %}
            <a href=\"{{ child.url }}\"
               class=\"block py-2 px-3 text-sm text-white/70 hover:text-white hover:bg-white/5 rounded-lg\">
              {{ child.title }}
            </a>
          {% endfor %}
        </div>
      </div>
    {% else %}
      <a href=\"{{ item.url }}\"
         class=\"text-sm relative group
         {{ item.in_active_trail ? 'text-cyan-400' : 'text-white/70 hover:text-white' }}\">
        {{ item.title }}
        <span class=\"absolute -bottom-1 left-0 h-0.5 bg-cyan-400 transition-all
        {{ item.in_active_trail ? 'w-full' : 'w-0 group-hover:w-full' }}\"></span>
      </a>
    {% endif %}
  {% endfor %}
{% endmacro %}

{# =========================
   MOBILE MENU MACRO
   ========================= #}
{% macro mobile_menu(items) %}
  {% for item in items %}
    {% set has_children = item.below is not empty %}

    {% if has_children %}
      <div>
        <button class=\"w-full text-left py-3 px-4 rounded-xl flex justify-between
        bg-cyan-500/20 text-cyan-400\">
          {{ item.title }}
          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-4 h-4\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
            <path d=\"m6 9 6 6 6-6\"></path>
          </svg>
        </button>

        <div class=\"ml-4 mt-2 space-y-2\">
          {% for child in item.below %}
            <a href=\"{{ child.url }}\"
               class=\"block py-2 px-4 text-sm text-white/70 hover:text-white hover:bg-white/5 rounded-xl\">
              {{ child.title }}
            </a>
          {% endfor %}
        </div>
      </div>
    {% else %}
      <a href=\"{{ item.url }}\"
         class=\"text-left py-3 px-4 rounded-xl transition-colors text-white hover:bg-white/5\">
        {{ item.title }}
      </a>
    {% endif %}
  {% endfor %}
{% endmacro %}
", "themes/custom/ces/templates/navigation/menu--main.html.twig", "C:\\laragon\\www\\ces\\themes\\custom\\ces\\templates\\navigation\\menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["import" => 55, "macro" => 92, "for" => 93, "set" => 94, "if" => 96];
        static $filters = ["escape" => 62];
        static $functions = ["path" => 61];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'for', 'set', 'if'],
                ['escape'],
                ['path'],
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
