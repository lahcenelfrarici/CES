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

/* themes/custom/ces/templates/navigation/menu--footer.html.twig */
class __TwigTemplate_dc77f97592ae0e52b96e41614d3f5a95 extends Template
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
        // line 23
        yield "


";
        // line 26
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 27
        yield "
";
        // line 28
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_footer_menu", $context, 28, $this->getSourceContext())->macro_footer_menu(...[($context["items"] ?? null), 0]));
        yield "

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "level"]);        yield from [];
    }

    // line 30
    public function macro_footer_menu($items = null, $level = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "items" => $items,
            "level" => $level,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 31
            yield "  ";
            if (($context["items"] ?? null)) {
                // line 32
                yield "    <ul class=\"space-y-2 text-gray-400 text-sm\">
      ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 34
                    yield "        <li>
          <a href=\"";
                    // line 35
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 35), "html", null, true);
                    yield "\"
             class=\"hover:text-cyan-400 transition-colors
             ";
                    // line 37
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 37)) ? ("text-cyan-400") : ("")));
                    yield "\">
            ";
                    // line 38
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 38), "html", null, true);
                    yield "
          </a>

          ";
                    // line 42
                    yield "          ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 42)) {
                        // line 43
                        yield "            ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->getTemplateForMacro("macro_footer_menu", $context, 43, $this->getSourceContext())->macro_footer_menu(...[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 43), (($context["level"] ?? null) + 1)]));
                        yield "
          ";
                    }
                    // line 45
                    yield "        </li>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                yield "    </ul>
  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/ces/templates/navigation/menu--footer.html.twig";
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
        return array (  120 => 47,  113 => 45,  107 => 43,  104 => 42,  98 => 38,  94 => 37,  89 => 35,  86 => 34,  82 => 33,  79 => 32,  76 => 31,  63 => 30,  54 => 28,  51 => 27,  49 => 26,  44 => 23,);
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



{% import _self as menus %}

{{ menus.footer_menu(items, 0) }}

{% macro footer_menu(items, level) %}
  {% if items %}
    <ul class=\"space-y-2 text-gray-400 text-sm\">
      {% for item in items %}
        <li>
          <a href=\"{{ item.url }}\"
             class=\"hover:text-cyan-400 transition-colors
             {{ item.in_active_trail ? 'text-cyan-400' : '' }}\">
            {{ item.title }}
          </a>

          {# Optional sub-menu support #}
          {% if item.below %}
            {{ _self.footer_menu(item.below, level + 1) }}
          {% endif %}
        </li>
      {% endfor %}
    </ul>
  {% endif %}
{% endmacro %}
", "themes/custom/ces/templates/navigation/menu--footer.html.twig", "C:\\laragon\\www\\ces\\themes\\custom\\ces\\templates\\navigation\\menu--footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["import" => 26, "macro" => 30, "if" => 31, "for" => 33];
        static $filters = ["escape" => 35];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for'],
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
