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

/* themes/custom/nema_radix6/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_d32b6b70ac4b86fc2b3669cc2423d947 extends Template
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
        // line 16
        $this->loadTemplate("themes/custom/nema_radix6/templates/block/block--system-branding-block.html.twig", "themes/custom/nema_radix6/templates/block/block--system-branding-block.html.twig", 16, "93671373")->display(twig_array_merge($context, ["block_utility_classes" => ["block--system-branding"]]));
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/nema_radix6/templates/block/block--system-branding-block.html.twig";
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
        return array (  39 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/nema_radix6/templates/block/block--system-branding-block.html.twig", "/var/www/html/web/themes/custom/nema_radix6/templates/block/block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("embed" => 16);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['embed'],
                [],
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


/* themes/custom/nema_radix6/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_d32b6b70ac4b86fc2b3669cc2423d947___93671373 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'block_content' => [$this, 'block_block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        return "radix:block";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("radix:block", "themes/custom/nema_radix6/templates/block/block--system-branding-block.html.twig", 16);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["site_name", "site_slogan", "site_logo", "elements"]);    }

    // line 22
    public function block_block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    ";
        // line 24
        $this->loadTemplate("radix:navbar-brand", "themes/custom/nema_radix6/templates/block/block--system-branding-block.html.twig", 24)->display(twig_array_merge($context, ["text" =>         // line 25
($context["site_name"] ?? null), "site_slogan" =>         // line 26
($context["site_slogan"] ?? null), "image" =>         // line 27
($context["site_logo"] ?? null), "width" => "40px", "height" => "auto", "path" => $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"), "alt" => ((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 31
($context["elements"] ?? null), "content", [], "any", false, false, true, 31), "site_name", [], "any", false, false, true, 31)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#markup"] ?? null) : null) . " logo"), "navbar_brand_utility_classes" => ["d-inline-flex", "align-items-center"]]));
        // line 38
        echo "  ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/nema_radix6/templates/block/block--system-branding-block.html.twig";
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
        return array (  146 => 38,  144 => 31,  143 => 27,  142 => 26,  141 => 25,  140 => 24,  138 => 23,  134 => 22,  39 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/nema_radix6/templates/block/block--system-branding-block.html.twig", "/var/www/html/web/themes/custom/nema_radix6/templates/block/block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 24);
        static $filters = array();
        static $functions = array("path" => 30);

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                [],
                ['path']
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
