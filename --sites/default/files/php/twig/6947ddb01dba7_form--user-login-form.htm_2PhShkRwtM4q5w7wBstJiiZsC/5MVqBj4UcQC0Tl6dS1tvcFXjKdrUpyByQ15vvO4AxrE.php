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

/* themes/custom/ces/templates/form/form--user-login-form.html.twig */
class __TwigTemplate_160da9713e501d5a37731df09c545473 extends Template
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
        // line 16
        yield "
";
        // line 29
        yield "

<div class=\"container container-md mb-5 pb-6 pt-6\">
    <div class=\"row justify-content-center\">
        <div class=\"col-12 col-md-8 col-xxl-7\">
            <div class=\"card px-md-4 shadow-sm\">
                <div class=\"card-body p-5\">
                    <h1 class=\"text-center mb-5 h2\">";
        // line 36
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Se connecter"));
        yield "</h1>
                    <form ";
        // line 37
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
        yield ">
                        <div class=\"position-relative mb-4\">
                            ";
        // line 39
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "name", [], "any", false, false, true, 39), "html", null, true);
        yield "
                        </div>
                        <div class=\"position-relative mb-4\">
                            ";
        // line 42
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "pass", [], "any", false, false, true, 42), "html", null, true);
        yield "
                            <i toggle=\"#login_pwd\" class=\"fa-solid fa-eye toggle-password\"></i>
                        </div>
                        ";
        // line 56
        yield "
                        <!-- reCAPTCHA -->
                        <div class=\"mb-4 captcha_log\">
                            ";
        // line 59
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "captcha", [], "any", false, false, true, 59), "html", null, true);
        yield "
                        </div>

                        <div class=\"text-center mb-2\">
                            ";
        // line 63
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "form_build_id", [], "any", false, false, true, 63), "html", null, true);
        yield "
                            ";
        // line 64
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "form_id", [], "any", false, false, true, 64), "html", null, true);
        yield "
                            ";
        // line 65
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "actions", [], "any", false, false, true, 65), "submit", [], "any", false, false, true, 65), "html", null, true);
        yield "
                        </div>
                    </form>
                    <hr class=\"my-md-4\">
                    ";
        // line 75
        yield "                </div>
            </div>
        </div>
    </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "element"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/ces/templates/form/form--user-login-form.html.twig";
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
        return array (  104 => 75,  97 => 65,  93 => 64,  89 => 63,  82 => 59,  77 => 56,  71 => 42,  65 => 39,  60 => 37,  56 => 36,  47 => 29,  44 => 16,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Theme override for a login form.
 *
 * Available variables:
 * - form: The form array.
 * - attributes: HTML attributes for the form.
 * - children: Child elements of the form.
 *
 * @see template_preprocess_form()
 *
 * @ingroup themeable
 */
#}

{# <div class=\"login--page-cfc container\">
    {% if messages %}
        <div class=\"messages\">
            {{ messages }}
        </div>
    {% endif %}

    <form{{ attributes }}>
        {{ children }}
    </form>

</div> #}


<div class=\"container container-md mb-5 pb-6 pt-6\">
    <div class=\"row justify-content-center\">
        <div class=\"col-12 col-md-8 col-xxl-7\">
            <div class=\"card px-md-4 shadow-sm\">
                <div class=\"card-body p-5\">
                    <h1 class=\"text-center mb-5 h2\">{{ \"Se connecter\"|t }}</h1>
                    <form {{ attributes }}>
                        <div class=\"position-relative mb-4\">
                            {{ element.name }}
                        </div>
                        <div class=\"position-relative mb-4\">
                            {{ element.pass }}
                            <i toggle=\"#login_pwd\" class=\"fa-solid fa-eye toggle-password\"></i>
                        </div>
                        {# <div class=\"row justify-content-between\">
                            <div class=\"col-auto mb-4\">
                                <div class=\"check-box\">
                                    {{ element.persistent_login }}
                                    <label for=\"switch\" class=\"label-text px-2\">{{ element.persistent_login['#title'] }}</label>
                                </div>
                            </div>
                            <div class=\"col-auto mb-4\">
                                <a href=\"{{ path('user.pass') }}\" class=\"text-danger\"><p>{{ \"Mot de passe oublié?\"|t }}</p></a>
                            </div>
                        </div> #}

                        <!-- reCAPTCHA -->
                        <div class=\"mb-4 captcha_log\">
                            {{ element.captcha }}
                        </div>

                        <div class=\"text-center mb-2\">
                            {{ element.form_build_id }}
                            {{ element.form_id }}
                            {{ element.actions.submit }}
                        </div>
                    </form>
                    <hr class=\"my-md-4\">
                    {# <div class=\"text-center\">
                        <p class=\"text-primary\">{{ \"Vous n'avez pas un compte?\"|t }}</p>
                        <a href=\"{{ path('user.register') }}\" class=\"btn btn-outline-danger\">
                            {{ \"S'inscrire\"|t }} <i class=\"fas fa-chevron-right\"></i>
                        </a>
                    </div> #}
                </div>
            </div>
        </div>
    </div>
</div>
", "themes/custom/ces/templates/form/form--user-login-form.html.twig", "C:\\laragon\\www\\ces\\themes\\custom\\ces\\templates\\form\\form--user-login-form.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["t" => 36, "escape" => 37];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
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
