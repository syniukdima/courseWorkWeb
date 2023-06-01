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

/* themes/custom/furry/templates/page.html.twig */
class __TwigTemplate_d896a8fe562cea1519ae81dfe5f058be extends Template
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
        // line 45
        echo "<div class=\"layout-container\">

  <header role=\"banner\">
    <div class=\"container\">
      <div class=\"header__inner\">
        ";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
        echo "
        ";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
        echo "
        <div class=\"header__menu-btn\">
          <svg width=\"50px\" height=\"50px\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" stroke=\"#DFF3E4\"><g id=\"SVGRepo_bgCarrier\" stroke-width=\"0\"></g><g id=\"SVGRepo_tracerCarrier\" stroke-linecap=\"round\" stroke-linejoin=\"round\"></g><g id=\"SVGRepo_iconCarrier\"> <path d=\"M4 18L20 18\" stroke=\"#DFF3E4\" stroke-width=\"2\" stroke-linecap=\"round\"></path> <path d=\"M4 12L20 12\" stroke=\"#DFF3E4\" stroke-width=\"2\" stroke-linecap=\"round\"></path> <path d=\"M4 6L20 6\" stroke=\"#DFF3E4\" stroke-width=\"2\" stroke-linecap=\"round\"></path> </g></svg>
        </div>
        ";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_navigation", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
        echo "
      </div>
    </div>
  </header>



  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 64
        echo "
    <div class=\"layout-content\">
      ";
        // line 66
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
        echo "
    </div>";
        // line 68
        echo "
  </main>

  ";
        // line 71
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 71)) {
            // line 72
            echo "    <footer role=\"contentinfo\">
      <div class=\"container\">
        <div class=\"footer__inner\">
          ";
            // line 75
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </footer>
  ";
        }
        // line 80
        echo "
</div>";
        // line 82
        echo "<script>
  const headerMenuBtn = document.querySelector(\".header__menu-btn\");
  const headerMenu = document.querySelector(\".menu\");

  headerMenuBtn.addEventListener(\"click\", (event) => {
    headerMenu.classList.toggle(\"active\")
  })
</script>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/furry/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 82,  96 => 80,  88 => 75,  83 => 72,  81 => 71,  76 => 68,  72 => 66,  68 => 64,  57 => 55,  50 => 51,  46 => 50,  39 => 45,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/furry/templates/page.html.twig", "C:\\xampp\\htdocs\\drupal-10.0.0\\themes\\custom\\furry\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 71);
        static $filters = array("escape" => 50);
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
