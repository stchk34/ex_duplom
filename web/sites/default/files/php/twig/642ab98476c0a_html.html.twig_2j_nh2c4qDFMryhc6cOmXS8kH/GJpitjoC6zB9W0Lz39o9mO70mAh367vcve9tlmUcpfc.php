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

/* themes/custom/moldova/templates/layout/html.html.twig */
class __TwigTemplate_d771805629b4cffd752747049d2eb29a extends \Twig\Template
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
        // line 27
        $context["body_classes"] = [0 => ((        // line 28
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 29
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 29, $this->source))))), 2 => ((        // line 30
($context["node_type"] ?? null)) ? (("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 30, $this->source)))) : ("")), 3 => ((        // line 31
($context["db_offline"] ?? null)) ? ("db-offline") : (""))];
        // line 33
        echo "<!DOCTYPE html>
<html";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 34, $this->source), "html", null, true);
        echo ">
<head>
  <head-placeholder token=\"";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 36, $this->source));
        echo "\">
    <title>";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 37, $this->source), " | "));
        echo "</title>
    <css-placeholder token=\"";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 38, $this->source));
        echo "\">
      <js-placeholder token=\"";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 39, $this->source));
        echo "\">
        </head>
<body";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method", false, false, true, 41), 41, $this->source), "html", null, true);
        echo ">
<a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
  ";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        echo "
</a>
";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 45, $this->source), "html", null, true);
        echo "
";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 46, $this->source), "html", null, true);
        echo "
";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 47, $this->source), "html", null, true);
        echo "
<js-bottom-placeholder token=\"";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 48, $this->source));
        echo "\">
  <script src=\"https://kit.fontawesome.com/15466f5df9.js\"
          crossorigin=\"anonymous\" external=\"true\"></script>
</body>
<script type=\"text/javascript\">
  \$(window).bind('load', function () {
    \$('.js-priority-nav').css('opacity', '1');
  });
</script>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/moldova/templates/layout/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 48,  88 => 47,  84 => 46,  80 => 45,  75 => 43,  70 => 41,  65 => 39,  61 => 38,  57 => 37,  53 => 36,  48 => 34,  45 => 33,  43 => 31,  42 => 30,  41 => 29,  40 => 28,  39 => 27,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/moldova/templates/layout/html.html.twig", "/var/www/web/themes/custom/moldova/templates/layout/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 27);
        static $filters = array("clean_class" => 29, "escape" => 34, "raw" => 36, "safe_join" => 37, "t" => 43);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape', 'raw', 'safe_join', 't'],
                []
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
