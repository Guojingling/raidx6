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

/* radix:page-title */
class __TwigTemplate_8305cec34c4a29d952c035eb09c28853 extends Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("sdc/radix--page-title"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->addAdditionalContext($context, "radix:page-title"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->validateProps($context, "radix:page-title"));
        // line 23
        ob_start(function () { return ''; });
        // line 24
        echo "
";
        // line 26
        $context["page_title_classes"] = twig_array_merge(["title", "page-title"], ((        // line 29
($context["page_title_utility_classes"] ?? null)) ?: ([])));
        // line 31
        echo "
";
        // line 32
        $context["title_attributes"] = ((($context["title_attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 33
        echo "
";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 34, $this->source), "html", null, true);
        echo "

";
        // line 36
        if (twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["title"] ?? null))))) {
            // line 37
            echo "  ";
            // line 38
            $this->loadTemplate("radix:heading", "radix:page-title", 38)->display(twig_to_array(["heading_html_tag" => "h1", "content" =>             // line 40
($context["title"] ?? null), "display" => ((            // line 41
array_key_exists("display", $context)) ? (_twig_default_filter(($context["display"] ?? null), "")) : ("")), "heading_utility_classes" =>             // line 42
($context["page_title_classes"] ?? null)]));
        }
        // line 46
        echo "
";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 47, $this->source), "html", null, true);
        echo "

";
        $___internal_parse_10_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_10_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page_title_utility_classes", "title_prefix", "title", "display", "title_suffix"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "radix:page-title";
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
        return array (  83 => 23,  77 => 47,  74 => 46,  71 => 42,  70 => 41,  69 => 40,  68 => 38,  66 => 37,  64 => 36,  59 => 34,  56 => 33,  54 => 32,  51 => 31,  49 => 29,  48 => 26,  45 => 24,  43 => 23,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "radix:page-title", "themes/contrib/radix/components/page-title/page-title.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 23, "set" => 26, "if" => 36, "include" => 38);
        static $filters = array("merge" => 29, "escape" => 34, "trim" => 36, "striptags" => 36, "render" => 36, "default" => 41, "spaceless" => 23);
        static $functions = array("create_attribute" => 32);

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'set', 'if', 'include'],
                ['merge', 'escape', 'trim', 'striptags', 'render', 'default', 'spaceless'],
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
