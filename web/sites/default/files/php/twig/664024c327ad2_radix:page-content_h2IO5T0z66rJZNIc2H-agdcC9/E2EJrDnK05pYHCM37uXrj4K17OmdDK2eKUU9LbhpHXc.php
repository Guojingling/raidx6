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

/* radix:page-content */
class __TwigTemplate_66b20fd02bf75066620f625fe52193c1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_header' => [$this, 'block_page_header'],
            'page_inner_content' => [$this, 'block_page_inner_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("sdc/radix--page-content"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->addAdditionalContext($context, "radix:page-content"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->validateProps($context, "radix:page-content"));
        // line 18
        $context["page_header_container_attributes"] = ((($context["page_header_container_attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 19
        $context["page_content_container_attributes"] = ((($context["page_content_container_attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 20
        echo "
";
        // line 22
        $context["page_main_classes"] = twig_array_merge([], ((($context["page_main_utility_classes"] ?? null)) ?: ([])));
        // line 24
        echo "
";
        // line 25
        $context["header_container_class"] = "";
        // line 26
        if ((null === ($context["page_header_container_type"] ?? null))) {
            // line 27
            echo "  ";
            $context["header_container_class"] = "container";
        } elseif ( !twig_test_empty(        // line 28
($context["page_header_container_type"] ?? null))) {
            // line 29
            echo "  ";
            $context["header_container_class"] = ("container-" . $this->sandbox->ensureToStringAllowed(($context["page_header_container_type"] ?? null), 29, $this->source));
        }
        // line 32
        $context["page_header_container_classes"] = twig_array_merge([        // line 33
($context["header_container_class"] ?? null)], ((        // line 34
($context["page_header_container_utility_classes"] ?? null)) ?: ([])));
        // line 36
        echo "
";
        // line 37
        $context["content_container_class"] = "";
        // line 38
        if ((null === ($context["page_content_container_type"] ?? null))) {
            // line 39
            echo "  ";
            $context["content_container_class"] = "container";
        } elseif ( !twig_test_empty(        // line 40
($context["page_content_container_type"] ?? null))) {
            // line 41
            echo "  ";
            $context["content_container_class"] = ("container-" . $this->sandbox->ensureToStringAllowed(($context["page_content_container_type"] ?? null), 41, $this->source));
        }
        // line 44
        $context["page_content_container_classes"] = twig_array_merge([        // line 45
($context["content_container_class"] ?? null)], ((        // line 46
($context["page_content_container_utility_classes"] ?? null)) ?: ([])));
        // line 48
        echo "
<main";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [($context["page_main_classes"] ?? null)], "method", false, false, true, 49), 49, $this->source), "html", null, true);
        echo ">
\t";
        // line 50
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 50)) {
            // line 51
            echo "\t\t<header class=\"page__header\">
\t\t\t<div ";
            // line 52
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page_header_container_attributes"] ?? null), "addClass", [($context["page_header_container_classes"] ?? null)], "method", false, false, true, 52), 52, $this->source), "html", null, true);
            echo ">
\t\t\t\t";
            // line 53
            $this->displayBlock('page_header', $context, $blocks);
            // line 56
            echo "\t\t\t</div>
\t\t</header>
\t";
        }
        // line 59
        echo "
\t";
        // line 60
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 60)) {
            // line 61
            echo "    <div class=\"page__content\" id=\"main-content\">
      <div ";
            // line 62
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page_content_container_attributes"] ?? null), "addClass", [($context["page_content_container_classes"] ?? null)], "method", false, false, true, 62), 62, $this->source), "html", null, true);
            echo ">
        ";
            // line 63
            $this->displayBlock('page_inner_content', $context, $blocks);
            // line 66
            echo "      </div>
    </div>
  ";
        }
        // line 69
        echo "</main>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page_main_utility_classes", "page_header_container_type", "page_header_container_utility_classes", "page_content_container_type", "page_content_container_utility_classes", "content_attributes", "page"]);    }

    // line 53
    public function block_page_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "\t\t\t\t\t";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        echo "
\t\t\t\t";
    }

    // line 63
    public function block_page_inner_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "          ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
        echo "
        ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "radix:page-content";
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
        return array (  157 => 64,  153 => 63,  146 => 54,  142 => 53,  136 => 69,  131 => 66,  129 => 63,  125 => 62,  122 => 61,  120 => 60,  117 => 59,  112 => 56,  110 => 53,  106 => 52,  103 => 51,  101 => 50,  97 => 49,  94 => 48,  92 => 46,  91 => 45,  90 => 44,  86 => 41,  84 => 40,  81 => 39,  79 => 38,  77 => 37,  74 => 36,  72 => 34,  71 => 33,  70 => 32,  66 => 29,  64 => 28,  61 => 27,  59 => 26,  57 => 25,  54 => 24,  52 => 22,  49 => 20,  47 => 19,  45 => 18,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "radix:page-content", "themes/contrib/radix/components/page-content/page-content.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 18, "if" => 26, "block" => 53);
        static $filters = array("merge" => 22, "escape" => 49);
        static $functions = array("create_attribute" => 18);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['merge', 'escape'],
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
