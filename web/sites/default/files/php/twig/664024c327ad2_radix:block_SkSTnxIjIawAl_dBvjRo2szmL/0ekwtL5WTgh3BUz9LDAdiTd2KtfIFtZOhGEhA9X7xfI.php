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

/* radix:block */
class __TwigTemplate_e4fabc0eee1946cda5b8c15e586d90e5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'block_label' => [$this, 'block_block_label'],
            'block_content' => [$this, 'block_block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("sdc/radix--block"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->addAdditionalContext($context, "radix:block"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->validateProps($context, "radix:block"));
        // line 33
        ob_start(function () { return ''; });
        // line 34
        echo "
";
        // line 35
        $context["block_attributes"] = ((($context["attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 36
        $context["block_html_tag"] = (($context["block_html_tag"]) ?? ("div"));
        // line 37
        echo "
";
        // line 39
        $context["block_classes"] = twig_array_merge(["block", ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 41
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 41), 41, $this->source))), ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 42
($context["plugin_id"] ?? null), 42, $this->source))), ((        // line 43
($context["layout"] ?? null)) ? (("layout--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["layout"] ?? null), 43, $this->source)))) : ("")), ((        // line 44
($context["bundle"] ?? null)) ? (("block--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["bundle"] ?? null), 44, $this->source)))) : ("")), ((        // line 45
($context["id"] ?? null)) ? (("block--" . \Drupal\Component\Utility\Html::getClass(twig_replace_filter($this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 45, $this->source), ["_" => "-"])))) : (""))], ((        // line 46
($context["block_utility_classes"] ?? null)) ?: ([])));
        // line 48
        echo "
";
        // line 50
        $context["block_content_classes"] = twig_array_merge(["block__content"], ((        // line 52
($context["block_content_utility_classes"] ?? null)) ?: ([])));
        // line 54
        echo "
";
        // line 55
        if (($context["block_html_tag"] ?? null)) {
            // line 56
            echo "  <";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_html_tag"] ?? null), 56, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["block_attributes"] ?? null), 56, $this->source), "id"), "addClass", [($context["block_classes"] ?? null)], "method", false, false, true, 56), 56, $this->source), "html", null, true);
            echo ">
  ";
        }
        // line 58
        echo "
  ";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 59, $this->source), "html", null, true);
        echo "
  ";
        // line 60
        $this->displayBlock('block_label', $context, $blocks);
        // line 72
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 72, $this->source), "html", null, true);
        echo "

  ";
        // line 74
        $this->displayBlock('block_content', $context, $blocks);
        // line 81
        echo "
  ";
        // line 82
        if (($context["block_html_tag"] ?? null)) {
            // line 83
            echo "  </";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_html_tag"] ?? null), 83, $this->source), "html", null, true);
            echo ">
";
        }
        // line 85
        echo "
";
        $___internal_parse_7_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_7_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "configuration", "plugin_id", "layout", "bundle", "id", "block_utility_classes", "block_content_utility_classes", "title_prefix", "title_suffix", "label", "title_attributes", "content", "content_attributes"]);    }

    // line 60
    public function block_block_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "    ";
        if (($context["label"] ?? null)) {
            // line 62
            echo "      ";
            // line 63
            $this->loadTemplate("radix:heading", "radix:block", 63)->display(twig_array_merge($context, ["heading_html_tag" => "h2", "content" =>             // line 65
($context["label"] ?? null), "heading_attributes" =>             // line 66
($context["title_attributes"] ?? null), "heading_utility_classes" => ["block__title"]]));
            // line 70
            echo "    ";
        }
        // line 71
        echo "  ";
    }

    // line 74
    public function block_block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        echo "    ";
        if (($context["content"] ?? null)) {
            // line 76
            echo "      <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [($context["block_content_classes"] ?? null)], "method", false, false, true, 76), 76, $this->source), "html", null, true);
            echo ">
        ";
            // line 77
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 77, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 80
        echo "  ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "radix:block";
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
        return array (  159 => 80,  153 => 77,  148 => 76,  145 => 75,  141 => 74,  137 => 71,  134 => 70,  132 => 66,  131 => 65,  130 => 63,  128 => 62,  125 => 61,  121 => 60,  116 => 33,  112 => 85,  106 => 83,  104 => 82,  101 => 81,  99 => 74,  93 => 72,  91 => 60,  87 => 59,  84 => 58,  76 => 56,  74 => 55,  71 => 54,  69 => 52,  68 => 50,  65 => 48,  63 => 46,  62 => 45,  61 => 44,  60 => 43,  59 => 42,  58 => 41,  57 => 39,  54 => 37,  52 => 36,  50 => 35,  47 => 34,  45 => 33,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "radix:block", "themes/contrib/radix/components/block/block.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 33, "set" => 35, "if" => 55, "block" => 60, "include" => 63);
        static $filters = array("merge" => 46, "clean_class" => 41, "replace" => 45, "escape" => 56, "without" => 56, "spaceless" => 33);
        static $functions = array("create_attribute" => 35);

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'set', 'if', 'block', 'include'],
                ['merge', 'clean_class', 'replace', 'escape', 'without', 'spaceless'],
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
