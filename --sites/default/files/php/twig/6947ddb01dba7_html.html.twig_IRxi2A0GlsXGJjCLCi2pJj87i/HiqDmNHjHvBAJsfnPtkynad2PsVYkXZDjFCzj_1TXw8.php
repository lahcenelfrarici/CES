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

/* themes/custom/ces/templates/system/html.html.twig */
class __TwigTemplate_f24598aa16e6aaa2efbe043c7247e52c extends Template
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
        // line 29
        $context["body_classes"] = [((        // line 30
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), (( !        // line 31
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass(($context["root_path"] ?? null))))), ((        // line 32
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass(($context["node_type"] ?? null)))) : ("")), ((        // line 33
($context["db_offline"] ?? null)) ? ("db-offline") : (""))];
        // line 36
        yield "<!DOCTYPE html>
<html";
        // line 37
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["html_attributes"] ?? null), "html", null, true);
        yield ">
\t<head>
\t<head-placeholder token=\"";
        // line 39
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["placeholder_token"] ?? null), "html", null, true);
        yield "\">
  <title>";
        // line 40
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, ($context["head_title"] ?? null), " | "));
        yield "</title>
  <css-placeholder token=\"";
        // line 41
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["placeholder_token"] ?? null), "html", null, true);
        yield "\">
  <js-placeholder token=\"";
        // line 42
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["placeholder_token"] ?? null), "html", null, true);
        yield "\">

  ";
        // line 44
        yield from $this->loadTemplate("@olivero/includes/preload.twig", "themes/custom/ces/templates/system/html.html.twig", 44)->unwrap()->yield(CoreExtension::toArray(["olivero_path" => ($context["olivero_path"] ?? null)]));
        // line 45
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["noscript_styles"] ?? null), "html", null, true);
        yield "

  ";
        // line 50
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("cfc/global-css-responsive"), "html", null, true);
        yield "

  ";
        // line 53
        yield "  <script async src=\"https://www.googletagmanager.com/gtag/js?id=G-1ZTKQMZ09X\"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-1ZTKQMZ09X');
  </script>

</head>

\t\t\t\t<body";
        // line 63
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["body_classes"] ?? null)], "method", false, false, true, 63), "html", null, true);
        yield ">
         <div id=\"container\">
    <div class=\"\">
      <div class=\"\">
        <div class=\"tailwind css-myl2ny css-exq74d\">
          <div class=\"bg-gradient-to-br from-slate-950 via-blue-950 to-slate-900 min-h-screen overflow-x-hidden\">
\t\t\t\t\t<!-- Lodaer -->
\t\t\t\t\t";
        // line 311
        yield "
\t\t\t\t\t";
        // line 312
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page_top"] ?? null), "html", null, true);
        yield "

\t\t\t\t\t";
        // line 314
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page"] ?? null), "html", null, true);
        yield "
\t\t\t\t\t";
        // line 315
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page_bottom"] ?? null), "html", null, true);
        yield "

\t\t\t\t\t<js-bottom-placeholder token=\"";
        // line 317
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["placeholder_token"] ?? null), "html", null, true);
        yield "\">";
        // line 318
        yield "\t\t\t\t\t\t";
        // line 333
        yield "                                              </div>
        </div>
      </div>
    </div>
  </div>
\t\t\t\t\t</body>
\t\t\t\t</html>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["logged_in", "root_path", "node_type", "db_offline", "html_attributes", "placeholder_token", "head_title", "olivero_path", "noscript_styles", "attributes", "page_top", "page", "page_bottom"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/ces/templates/system/html.html.twig";
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
        return array (  133 => 333,  131 => 318,  128 => 317,  123 => 315,  119 => 314,  114 => 312,  111 => 311,  101 => 63,  89 => 53,  83 => 50,  77 => 45,  75 => 44,  70 => 42,  66 => 41,  62 => 40,  58 => 39,  53 => 37,  50 => 36,  48 => 33,  47 => 32,  46 => 31,  45 => 30,  44 => 29,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Theme override for the basic structure of a single Drupal page.
 *
 * Variables:
 * - logged_in: A flag indicating if user is logged in.
 * - root_path: The root path of the current page (e.g., node, admin, user).
 * - node_type: The content type for the current node, if the page is a node.
 * - head_title: List of text elements that make up the head_title variable.
 *   May contain one or more of the following:
 *   - title: The title of the page.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site.
 * - page_top: Initial rendered markup. This should be printed before 'page'.
 * - page: The rendered page markup.
 * - page_bottom: Closing rendered markup. This variable should be printed after
 *   'page'.
 * - db_offline: A flag indicating if the database is offline.
 * - placeholder_token: The token for generating head, css, js and js-bottom
 *   placeholders.
 * - olivero_path: Returns the path to an Olivero theme.
 * - noscript_styles: <noscript> content.
 *
 * @see template_preprocess_html()
 */
#}
{%
  set body_classes = [
    logged_in ? 'user-logged-in',
    not root_path ? 'path-frontpage' : 'path-' ~ root_path|clean_class,
    node_type ? 'page-node-type-' ~ node_type|clean_class,
    db_offline ? 'db-offline',
  ]
%}
<!DOCTYPE html>
<html{{html_attributes}}>
\t<head>
\t<head-placeholder token=\"{{ placeholder_token }}\">
  <title>{{ head_title|safe_join(' | ') }}</title>
  <css-placeholder token=\"{{ placeholder_token }}\">
  <js-placeholder token=\"{{ placeholder_token }}\">

  {% include '@olivero/includes/preload.twig' with { olivero_path: olivero_path } only %}
  {{ noscript_styles }}

  {# {% if html_attributes['dir'] == 'rtl' %}
    {{ attach_library('cfc/global-css-rtl') }}
  {% endif %} #}
  {{ attach_library('cfc/global-css-responsive') }}

  {# --- Google Tag Manager (gtag.js) --- #}
  <script async src=\"https://www.googletagmanager.com/gtag/js?id=G-1ZTKQMZ09X\"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-1ZTKQMZ09X');
  </script>

</head>

\t\t\t\t<body{{attributes.addClass(body_classes)}}>
         <div id=\"container\">
    <div class=\"\">
      <div class=\"\">
        <div class=\"tailwind css-myl2ny css-exq74d\">
          <div class=\"bg-gradient-to-br from-slate-950 via-blue-950 to-slate-900 min-h-screen overflow-x-hidden\">
\t\t\t\t\t<!-- Lodaer -->
\t\t\t\t\t{# <style id=\"loader-style\">
\t\t\t\t\t\t#loader {
\t\t\t\t\t\t\tposition: fixed;
\t\t\t\t\t\t\twidth: 100%;
\t\t\t\t\t\t\theight: 100%;
\t\t\t\t\t\t\ttop: 0;
\t\t\t\t\t\t\tleft: 0;
\t\t\t\t\t\t\tbackground: #009681;
\t\t\t\t\t\t\tdisplay: flex;
\t\t\t\t\t\t\tjustify-content: center;
\t\t\t\t\t\t\talign-items: center;
\t\t\t\t\t\t\tz-index: 9999;
\t\t\t\t\t\t}

\t\t\t\t\t\t@keyframes gradient {
\t\t\t\t\t\t\t0% {
\t\t\t\t\t\t\t\tbackground-position: 0 50%;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t50% {
\t\t\t\t\t\t\t\tbackground-position: 100% 50%;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t100% {
\t\t\t\t\t\t\t\tbackground-position: 0 50%;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\t.cube-folding {
\t\t\t\t\t\t\twidth: 50px;
\t\t\t\t\t\t\theight: 50px;
\t\t\t\t\t\t\tdisplay: inline-block;
\t\t\t\t\t\t\t-webkit-transform: rotate(45deg);
\t\t\t\t\t\t\t-moz-transform: rotate(45deg);
\t\t\t\t\t\t\ttransform: rotate(45deg);
\t\t\t\t\t\t\tfont-size: 0;
\t\t\t\t\t\t}

\t\t\t\t\t\t.cube-folding span {
\t\t\t\t\t\t\tposition: relative;
\t\t\t\t\t\t\twidth: 25px;
\t\t\t\t\t\t\theight: 25px;
\t\t\t\t\t\t\t-webkit-transform: scale(1.1);
\t\t\t\t\t\t\t-moz-transform: scale(1.1);
\t\t\t\t\t\t\ttransform: scale(1.1);
\t\t\t\t\t\t\tdisplay: inline-block;
\t\t\t\t\t\t}

\t\t\t\t\t\t.cube-folding span::before {
\t\t\t\t\t\t\tcontent: \"\";
\t\t\t\t\t\t\tbackground-color: white;
\t\t\t\t\t\t\tposition: absolute;
\t\t\t\t\t\t\tleft: 0;
\t\t\t\t\t\t\ttop: 0;
\t\t\t\t\t\t\tdisplay: block;
\t\t\t\t\t\t\twidth: 25px;
\t\t\t\t\t\t\theight: 25px;
\t\t\t\t\t\t\t-moz-transform-origin: 100% 100%;
\t\t\t\t\t\t\t-ms-transform-origin: 100% 100%;
\t\t\t\t\t\t\t-webkit-transform-origin: 100% 100%;
\t\t\t\t\t\t\ttransform-origin: 100% 100%;
\t\t\t\t\t\t\t-webkit-animation: folding 2.5s infinite linear both;
\t\t\t\t\t\t\t-moz-animation: folding 2.5s infinite linear both;
\t\t\t\t\t\t\tanimation: folding 2.5s infinite linear both;
\t\t\t\t\t\t}

\t\t\t\t\t\t.cube-folding .leaf2 {
\t\t\t\t\t\t\t-webkit-transform: rotateZ(90deg) scale(1.1);
\t\t\t\t\t\t\t-moz-transform: rotateZ(90deg) scale(1.1);
\t\t\t\t\t\t\ttransform: rotateZ(90deg) scale(1.1);
\t\t\t\t\t\t}

\t\t\t\t\t\t.cube-folding .leaf2::before {
\t\t\t\t\t\t\t-webkit-animation-delay: 0.3s;
\t\t\t\t\t\t\tanimation-delay: 0.3s;
\t\t\t\t\t\t\tbackground-color: #f2f2f2;
\t\t\t\t\t\t}

\t\t\t\t\t\t.cube-folding .leaf3 {
\t\t\t\t\t\t\t-webkit-transform: rotateZ(270deg) scale(1.1);
\t\t\t\t\t\t\t-moz-transform: rotateZ(270deg) scale(1.1);
\t\t\t\t\t\t\ttransform: rotateZ(270deg) scale(1.1);
\t\t\t\t\t\t}

\t\t\t\t\t\t.cube-folding .leaf3::before {
\t\t\t\t\t\t\t-webkit-animation-delay: 0.9s;
\t\t\t\t\t\t\tanimation-delay: 0.9s;
\t\t\t\t\t\t\tbackground-color: #f2f2f2;
\t\t\t\t\t\t}

\t\t\t\t\t\t.cube-folding .leaf4 {
\t\t\t\t\t\t\t-webkit-transform: rotateZ(180deg) scale(1.1);
\t\t\t\t\t\t\t-moz-transform: rotateZ(180deg) scale(1.1);
\t\t\t\t\t\t\ttransform: rotateZ(180deg) scale(1.1);
\t\t\t\t\t\t}

\t\t\t\t\t\t.cube-folding .leaf4::before {
\t\t\t\t\t\t\t-webkit-animation-delay: 0.6s;
\t\t\t\t\t\t\tanimation-delay: 0.6s;
\t\t\t\t\t\t\tbackground-color: #e6e6e6;
\t\t\t\t\t\t}

\t\t\t\t\t\t@-webkit-keyframes folding {

\t\t\t\t\t\t\t0,
\t\t\t\t\t\t\t10% {
\t\t\t\t\t\t\t\t-webkit-transform: perspective(140px) rotateX(-180deg);
\t\t\t\t\t\t\t\t-moz-transform: perspective(140px) rotateX(-180deg);
\t\t\t\t\t\t\t\ttransform: perspective(140px) rotateX(-180deg);
\t\t\t\t\t\t\t\t-webkit-opacity: 0;
\t\t\t\t\t\t\t\t-moz-opacity: 0;
\t\t\t\t\t\t\t\topacity: 0;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t25%,
\t\t\t\t\t\t\t75% {
\t\t\t\t\t\t\t\t-webkit-transform: perspective(140px) rotateX(0deg);
\t\t\t\t\t\t\t\t-moz-transform: perspective(140px) rotateX(0deg);
\t\t\t\t\t\t\t\ttransform: perspective(140px) rotateX(0deg);
\t\t\t\t\t\t\t\t-webkit-opacity: 1;
\t\t\t\t\t\t\t\t-moz-opacity: 1;
\t\t\t\t\t\t\t\topacity: 1;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t90%,
\t\t\t\t\t\t\t100% {
\t\t\t\t\t\t\t\t-webkit-transform: perspective(140px) rotateY(180deg);
\t\t\t\t\t\t\t\t-moz-transform: perspective(140px) rotateY(180deg);
\t\t\t\t\t\t\t\ttransform: perspective(140px) rotateY(180deg);
\t\t\t\t\t\t\t\t-webkit-opacity: 0;
\t\t\t\t\t\t\t\t-moz-opacity: 0;
\t\t\t\t\t\t\t\topacity: 0;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\t@-moz-keyframes folding {

\t\t\t\t\t\t\t0,
\t\t\t\t\t\t\t10% {
\t\t\t\t\t\t\t\t-webkit-transform: perspective(140px) rotateX(-180deg);
\t\t\t\t\t\t\t\t-moz-transform: perspective(140px) rotateX(-180deg);
\t\t\t\t\t\t\t\ttransform: perspective(140px) rotateX(-180deg);
\t\t\t\t\t\t\t\t-webkit-opacity: 0;
\t\t\t\t\t\t\t\t-moz-opacity: 0;
\t\t\t\t\t\t\t\topacity: 0;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t25%,
\t\t\t\t\t\t\t75% {
\t\t\t\t\t\t\t\t-webkit-transform: perspective(140px) rotateX(0deg);
\t\t\t\t\t\t\t\t-moz-transform: perspective(140px) rotateX(0deg);
\t\t\t\t\t\t\t\ttransform: perspective(140px) rotateX(0deg);
\t\t\t\t\t\t\t\t-webkit-opacity: 1;
\t\t\t\t\t\t\t\t-moz-opacity: 1;
\t\t\t\t\t\t\t\topacity: 1;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t90%,
\t\t\t\t\t\t\t100% {
\t\t\t\t\t\t\t\t-webkit-transform: perspective(140px) rotateY(180deg);
\t\t\t\t\t\t\t\t-moz-transform: perspective(140px) rotateY(180deg);
\t\t\t\t\t\t\t\ttransform: perspective(140px) rotateY(180deg);
\t\t\t\t\t\t\t\t-webkit-opacity: 0;
\t\t\t\t\t\t\t\t-moz-opacity: 0;
\t\t\t\t\t\t\t\topacity: 0;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\t@-ms-keyframes folding {

\t\t\t\t\t\t\t0,
\t\t\t\t\t\t\t10% {
\t\t\t\t\t\t\t\t-webkit-transform: perspective(140px) rotateX(-180deg);
\t\t\t\t\t\t\t\t-moz-transform: perspective(140px) rotateX(-180deg);
\t\t\t\t\t\t\t\ttransform: perspective(140px) rotateX(-180deg);
\t\t\t\t\t\t\t\t-webkit-opacity: 0;
\t\t\t\t\t\t\t\t-moz-opacity: 0;
\t\t\t\t\t\t\t\topacity: 0;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t25%,
\t\t\t\t\t\t\t75% {
\t\t\t\t\t\t\t\t-webkit-transform: perspective(140px) rotateX(0deg);
\t\t\t\t\t\t\t\t-moz-transform: perspective(140px) rotateX(0deg);
\t\t\t\t\t\t\t\ttransform: perspective(140px) rotateX(0deg);
\t\t\t\t\t\t\t\t-webkit-opacity: 1;
\t\t\t\t\t\t\t\t-moz-opacity: 1;
\t\t\t\t\t\t\t\topacity: 1;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t90%,
\t\t\t\t\t\t\t100% {
\t\t\t\t\t\t\t\t-webkit-transform: perspective(140px) rotateY(180deg);
\t\t\t\t\t\t\t\t-moz-transform: perspective(140px) rotateY(180deg);
\t\t\t\t\t\t\t\ttransform: perspective(140px) rotateY(180deg);
\t\t\t\t\t\t\t\t-webkit-opacity: 0;
\t\t\t\t\t\t\t\t-moz-opacity: 0;
\t\t\t\t\t\t\t\topacity: 0;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\t@keyframes folding {

\t\t\t\t\t\t\t0,
\t\t\t\t\t\t\t10% {
\t\t\t\t\t\t\t\t-webkit-transform: perspective(140px) rotateX(-180deg);
\t\t\t\t\t\t\t\t-moz-transform: perspective(140px) rotateX(-180deg);
\t\t\t\t\t\t\t\ttransform: perspective(140px) rotateX(-180deg);
\t\t\t\t\t\t\t\t-webkit-opacity: 0;
\t\t\t\t\t\t\t\t-moz-opacity: 0;
\t\t\t\t\t\t\t\topacity: 0;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t25%,
\t\t\t\t\t\t\t75% {
\t\t\t\t\t\t\t\t-webkit-transform: perspective(140px) rotateX(0deg);
\t\t\t\t\t\t\t\t-moz-transform: perspective(140px) rotateX(0deg);
\t\t\t\t\t\t\t\ttransform: perspective(140px) rotateX(0deg);
\t\t\t\t\t\t\t\t-webkit-opacity: 1;
\t\t\t\t\t\t\t\t-moz-opacity: 1;
\t\t\t\t\t\t\t\topacity: 1;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t90%,
\t\t\t\t\t\t\t100% {
\t\t\t\t\t\t\t\t-webkit-transform: perspective(140px) rotateY(180deg);
\t\t\t\t\t\t\t\t-moz-transform: perspective(140px) rotateY(180deg);
\t\t\t\t\t\t\t\ttransform: perspective(140px) rotateY(180deg);
\t\t\t\t\t\t\t\t-webkit-opacity: 0;
\t\t\t\t\t\t\t\t-moz-opacity: 0;
\t\t\t\t\t\t\t\topacity: 0;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t</style>
\t\t\t\t\t<div class=\"loader-d\" id=\"loader\">

\t\t\t\t\t\t<div class=\"loader-c\">
\t\t\t\t\t\t\t<img src=\"/themes/custom/cfc/CFC/assets/images/loadinggif.gif\" alt=\"drapeau loader\">
\t\t\t\t\t\t\t<div class=\"inner one\"></div>
\t\t\t\t\t\t\t<div class=\"inner two\"></div>
\t\t\t\t\t\t\t<div class=\"inner three\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> #}

\t\t\t\t\t{{ page_top }}

\t\t\t\t\t{{ page }}
\t\t\t\t\t{{ page_bottom }}

\t\t\t\t\t<js-bottom-placeholder token=\"{{ placeholder_token }}\">{# video modal #}
\t\t\t\t\t\t{# <div class=\"modal fade\" id=\"videoModal\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"modal-header border-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Remove border from modal header -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Close button with built-in close icon -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<iframe id=\"videoIframe\" src=\"\" frameborder=\"0\" allowfullscreen></iframe>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> #}
                                              </div>
        </div>
      </div>
    </div>
  </div>
\t\t\t\t\t</body>
\t\t\t\t</html>
", "themes/custom/ces/templates/system/html.html.twig", "C:\\laragon\\www\\ces\\themes\\custom\\ces\\templates\\system\\html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 29, "include" => 44];
        static $filters = ["clean_class" => 31, "escape" => 37, "safe_join" => 40];
        static $functions = ["attach_library" => 50];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include'],
                ['clean_class', 'escape', 'safe_join'],
                ['attach_library'],
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
