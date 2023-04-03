<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/moldova/templates/form/form.html.twig */
class __TwigTemplate_af9acc356903559cb414607ff5c34a3c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("bootstrap_barrio/form"), "html", null, true);
        echo "
<form";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 14, $this->source), "html", null, true);
        echo ">
  ";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 15, $this->source), "html", null, true);
        echo "
  ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "hasClass", [0 => "user-login-form"], "method", false, false, true, 16)) {
            // line 17
            echo "    <div id=\"authorization-block-login\">
      <p class=\"authorization-message\">";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Authorization through social networks:"));
            echo "</p>
      ";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalBlock("social_auth_login"), "html", null, true);
            echo "
    </div
  ";
        }
        // line 22
        echo "</form>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/moldova/templates/form/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 22,  60 => 19,  56 => 18,  53 => 17,  51 => 16,  47 => 15,  43 => 14,  39 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/moldova/templates/form/form.html.twig", "/var/www/web/themes/custom/moldova/templates/form/form.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 16);
        static $filters = array("escape" => 13, "t" => 18);
        static $functions = array("attach_library" => 13, "drupal_block" => 19);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                ['attach_library', 'drupal_block']
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
