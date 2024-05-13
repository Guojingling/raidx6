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

/* radix:page */
class __TwigTemplate_8b5219fec51d1543576e23fb4ae09729 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_navigation' => [$this, 'block_page_navigation'],
            'page_content' => [$this, 'block_page_content'],
            'page_footer' => [$this, 'block_page_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("sdc/radix--page"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->addAdditionalContext($context, "radix:page"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->validateProps($context, "radix:page"));
        // line 7
        $context["page_attributes"] = ((($context["attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 8
        $context["page_classes"] = twig_array_merge(["page"], ((        // line 11
($context["page_utility_classes"] ?? null)) ?: ([])));
        // line 13
        echo "
<div ";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page_attributes"] ?? null), "addClass", [($context["page_classes"] ?? null)], "method", false, false, true, 14), 14, $this->source), "html", null, true);
        echo ">
\t";
        // line 15
        $this->displayBlock('page_navigation', $context, $blocks);
        // line 18
        echo "
  ";
        // line 19
        $this->displayBlock('page_content', $context, $blocks);
        // line 26
        echo "
\t";
        // line 27
        $this->displayBlock('page_footer', $context, $blocks);
        // line 30
        echo "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "page_utility_classes"]);    }

    // line 15
    public function block_page_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "\t\t";
        $this->loadTemplate("radix:page-navigation", "radix:page", 16)->display($context);
        // line 17
        echo "\t";
    }

    // line 19
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    ";
        $this->loadTemplate("radix:page-content", "radix:page", 20)->display(twig_array_merge($context, ["page_main_utility_classes" => ["py-5"], "page_header_container_utility_classes" => ["mb-3"], "page_content_container_type" => false]));
        // line 25
        echo "  ";
    }

    // line 27
    public function block_page_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "\t\t";
        $this->loadTemplate("radix:page-footer", "radix:page", 28)->display($context);
        // line 29
        echo "\t";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "radix:page";
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
        return array (  105 => 29,  102 => 28,  98 => 27,  94 => 25,  91 => 20,  87 => 19,  83 => 17,  80 => 16,  76 => 15,  70 => 30,  68 => 27,  65 => 26,  63 => 19,  60 => 18,  58 => 15,  54 => 14,  51 => 13,  49 => 11,  48 => 8,  46 => 7,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "radix:page", "themes/contrib/radix/components/page/page.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "block" => 15, "include" => 16);
        static $filters = array("merge" => 11, "escape" => 14);
        static $functions = array("create_attribute" => 7);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'include'],
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
