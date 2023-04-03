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

/* themes/custom/moldova/templates/layout/page.html.twig */
class __TwigTemplate_8f47340b634d468b109511e926a8112c extends \Twig\Template
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
        // line 1
        echo "<div class=\"page\">
  <header role=\"banner\" class=\"header\">
    <div class=\"moldova-header-wrapper\">
      <div class=\"moldova-logo\">
        ";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "
      </div>
      <div class=\"moldova-header-body\">
        <div class=\"moldova-header-top\">
          <div class=\"moldova-menu-accessibility\">
            ";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "accessibility_menu", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "
          </div>
          <div class=\"moldova-wrapper-header-top\">
            ";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "
            <button id=\"search_action\" class=\"search_action\" type=\"button\">
              <div class=\"animated-icon-search\"><i
                  class=\"fa-solid fa-magnifying-glass\"></i></div>
            </button>
          </div>
        </div>
        <div class=\"moldova-header-bottom\">
          ";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_bottom", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "
          <button type=\"button\" class=\"navbar-toggle collapsed\"
                  data-toggle=\"collapse\" data-target=\"#navbar-collapse\"
                  aria-controls=\"navbar-collapse\" aria-expanded=\"false\"
                  aria-label=\"Toggle navigation\">
            <div class=\"animated-icon\"><span></span><span></span><span></span>
            </div>
          </button>
          <nav class=\"navbar js-priority-nav\">
            ";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
        echo "
          </nav>
        </div>
        <div class=\"moldova-header-bottom-burger\">
          <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
            <div class=\"collapse\" id=\"navbar-collapse\">
              ";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
        echo "
            </div>
          </nav>
        </div>

      </div>
    </div>
  </header>
  ";
        // line 44
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 44)) {
            // line 45
            echo "    <div class=\"highlighted\">
      <aside class=\"";
            // line 46
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 46, $this->source), "html", null, true);
            echo " section clearfix\" role=\"complementary\">
        ";
            // line 47
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
            echo "
      </aside>
    </div>
  ";
        }
        // line 51
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
        echo "
  ";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
        echo "
  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>
    ";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
        echo "
  </main>
  ";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
        echo "
  <footer role=\"contentinfo\">
    <div class=\"footer-wrapper\">
      <div class=\"footer-block-logo\">
        ";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
        echo "
      </div>
      <div class=\"footer-block-info\">
        <div class=\"footer-section-phone\">
          ";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
        echo "
        </div>
        <div class=\"footer-section-address\">
          ";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  </footer>
</div>
<script
  src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\"
  integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\"
  crossorigin=\"anonymous\"></script>
<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"
        integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\"
        crossorigin=\"anonymous\"></script>
<script
  src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js\"
  integrity=\"sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx\"
  crossorigin=\"anonymous\"></script>
<script>(function (d) {
    var s = d.createElement(\"script\");
    s.setAttribute(\"data-account\", \"oqkaS1dBRZ\");
    s.setAttribute(\"src\", \"https://cdn.userway.org/widget.js\");
    (d.body || d.head).appendChild(s);
  })(document)</script>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/moldova/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 68,  148 => 65,  141 => 61,  134 => 57,  129 => 55,  123 => 52,  118 => 51,  111 => 47,  107 => 46,  104 => 45,  102 => 44,  91 => 36,  82 => 30,  70 => 21,  59 => 13,  53 => 10,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/moldova/templates/layout/page.html.twig", "/var/www/web/themes/custom/moldova/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 44);
        static $filters = array("escape" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
