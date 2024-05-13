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

/* radix:navbar */
class __TwigTemplate_ba26b2ac915f1cbb9793f6b9830a211f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'branding' => [$this, 'block_branding'],
            'navbar_toggler' => [$this, 'block_navbar_toggler'],
            'left' => [$this, 'block_left'],
            'right' => [$this, 'block_right'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("sdc/radix--navbar"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->addAdditionalContext($context, "radix:navbar"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->validateProps($context, "radix:navbar"));
        // line 19
        ob_start(function () { return ''; });
        // line 20
        echo "
";
        // line 21
        $context["nav_attributes"] = ((($context["nav_attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 22
        $context["navbar_container_attributes"] = ((($context["navbar_container_attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 23
        echo "
";
        // line 24
        $context["placement"] = (($context["placement"]) ?? (""));
        // line 25
        $context["navbar_expand"] = (($context["navbar_expand"]) ?? ("lg"));
        // line 26
        $context["navbar_theme"] = (($context["navbar_theme"]) ?? (null));
        // line 27
        echo "
";
        // line 29
        $context["navbar_container_classes"] = twig_array_merge([(((null ===         // line 30
($context["navbar_container_type"] ?? null))) ? ("container") : ("")), ((        // line 31
($context["navbar_container_type"] ?? null)) ? (("container" . ((($context["navbar_container_type"] ?? null)) ? (("-" . $this->sandbox->ensureToStringAllowed(($context["navbar_container_type"] ?? null), 31, $this->source))) : ("")))) : (""))], ((        // line 32
($context["navbar_container_utility_classes"] ?? null)) ?: ([])));
        // line 34
        echo "
";
        // line 36
        $context["nav_classes"] = twig_array_merge(["navbar", ((        // line 38
($context["navbar_expand"] ?? null)) ? (("navbar-expand-" . $this->sandbox->ensureToStringAllowed(($context["navbar_expand"] ?? null), 38, $this->source))) : ("")),         // line 39
($context["placement"] ?? null)], ((        // line 40
($context["navbar_utility_classes"] ?? null)) ?: ([])));
        // line 42
        echo "
";
        // line 43
        if (($context["navbar_theme"] ?? null)) {
            // line 44
            echo "  ";
            $context["nav_attributes"] = twig_get_attribute($this->env, $this->source, ($context["nav_attributes"] ?? null), "setAttribute", ["data-bs-theme", ($context["navbar_theme"] ?? null)], "method", false, false, true, 44);
        }
        // line 46
        echo "
<nav ";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["nav_attributes"] ?? null), "addClass", [($context["nav_classes"] ?? null)], "method", false, false, true, 47), 47, $this->source), "html", null, true);
        echo ">
  <div ";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["navbar_container_attributes"] ?? null), "addClass", [($context["navbar_container_classes"] ?? null)], "method", false, false, true, 48), 48, $this->source), "html", null, true);
        echo ">
    ";
        // line 49
        $this->displayBlock('branding', $context, $blocks);
        // line 52
        echo "
    ";
        // line 53
        $this->displayBlock('navbar_toggler', $context, $blocks);
        // line 58
        echo "
    <div class=\"collapse navbar-collapse\">
      ";
        // line 60
        $this->displayBlock('left', $context, $blocks);
        // line 63
        echo "
      ";
        // line 64
        $this->displayBlock('right', $context, $blocks);
        // line 67
        echo "    </div>
  </div>
</nav>

";
        $___internal_parse_6_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_6_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["navbar_container_type", "navbar_container_utility_classes", "navbar_utility_classes", "branding", "left", "right"]);    }

    // line 49
    public function block_branding($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["branding"] ?? null), 50, $this->source), "html", null, true);
        echo "
    ";
    }

    // line 53
    public function block_navbar_toggler($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "      <button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\".navbar-collapse\" aria-controls=\"navbar-collapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
    ";
    }

    // line 60
    public function block_left($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["left"] ?? null), 61, $this->source), "html", null, true);
        echo "
      ";
    }

    // line 64
    public function block_right($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["right"] ?? null), 65, $this->source), "html", null, true);
        echo "
      ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "radix:navbar";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  168 => 65,  164 => 64,  157 => 61,  153 => 60,  146 => 54,  142 => 53,  135 => 50,  131 => 49,  126 => 19,  119 => 67,  117 => 64,  114 => 63,  112 => 60,  108 => 58,  106 => 53,  103 => 52,  101 => 49,  97 => 48,  93 => 47,  90 => 46,  86 => 44,  84 => 43,  81 => 42,  79 => 40,  78 => 39,  77 => 38,  76 => 36,  73 => 34,  71 => 32,  70 => 31,  69 => 30,  68 => 29,  65 => 27,  63 => 26,  61 => 25,  59 => 24,  56 => 23,  54 => 22,  52 => 21,  49 => 20,  47 => 19,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "radix:navbar", "themes/contrib/radix/components/navbar/navbar.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 19, "set" => 21, "if" => 43, "block" => 49);
        static $filters = array("merge" => 32, "escape" => 47, "spaceless" => 19);
        static $functions = array("create_attribute" => 21);

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'set', 'if', 'block'],
                ['merge', 'escape', 'spaceless'],
                ['create_attribute']
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
