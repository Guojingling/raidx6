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

/* radix:html */
class __TwigTemplate_5354ece7f7eb70cd4869c0ffc66ea505 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head_start' => [$this, 'block_head_start'],
            'head_end' => [$this, 'block_head_end'],
            'body_start' => [$this, 'block_body_start'],
            'body_end' => [$this, 'block_body_end'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("sdc/radix--html"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->addAdditionalContext($context, "radix:html"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->validateProps($context, "radix:html"));
        // line 26
        ob_start(function () { return ''; });
        // line 27
        echo "
";
        // line 29
        $context["body_classes"] = twig_array_merge([((        // line 30
($context["root_path"] ?? null)) ? (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 30, $this->source)))) : ("path-frontpage")), ((        // line 31
($context["language"] ?? null)) ? (("language--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 31, $this->source)))) : (""))], ((        // line 32
($context["body_utility_classes"] ?? null)) ?: ([])));
        // line 34
        echo "
<!DOCTYPE html>
<html ";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 36, $this->source), "html", null, true);
        echo ">
  <head>
    ";
        // line 38
        $this->displayBlock('head_start', $context, $blocks);
        // line 41
        echo "    <head-placeholder token=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 41, $this->source), "html", null, true);
        echo "\">
    <title>";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 42, $this->source), " | "));
        echo "</title>
    <css-placeholder token=\"";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 43, $this->source), "html", null, true);
        echo "\">
    <js-placeholder token=\"";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 44, $this->source), "html", null, true);
        echo "\">
    ";
        // line 45
        $this->displayBlock('head_end', $context, $blocks);
        // line 48
        echo "  </head>
  <body ";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["body_classes"] ?? null)], "method", false, false, true, 49), 49, $this->source), "html", null, true);
        echo ">
    ";
        // line 50
        $this->displayBlock('body_start', $context, $blocks);
        // line 53
        echo "    ";
        // line 57
        echo "    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        echo "
    </a>

    ";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 61, $this->source), "html", null, true);
        echo "
    ";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 62, $this->source), "html", null, true);
        echo "
    ";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 63, $this->source), "html", null, true);
        echo "

    <js-bottom-placeholder token=\"";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 65, $this->source), "html", null, true);
        echo "\">
    ";
        // line 66
        $this->displayBlock('body_end', $context, $blocks);
        // line 69
        echo "  </body>
</html>

";
        $___internal_parse_3_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_3_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["root_path", "language", "body_utility_classes", "html_attributes", "placeholder_token", "head_title", "attributes", "page_top", "page", "page_bottom", "head_start", "head_end", "body_start", "body_end"]);    }

    // line 38
    public function block_head_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["head_start"] ?? null), 39, $this->source), "html", null, true);
        echo "
    ";
    }

    // line 45
    public function block_head_end($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["head_end"] ?? null), 46, $this->source), "html", null, true);
        echo "
    ";
    }

    // line 50
    public function block_body_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body_start"] ?? null), 51, $this->source), "html", null, true);
        echo "
    ";
    }

    // line 66
    public function block_body_end($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body_end"] ?? null), 67, $this->source), "html", null, true);
        echo "
    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "radix:html";
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
        return array (  174 => 67,  170 => 66,  163 => 51,  159 => 50,  152 => 46,  148 => 45,  141 => 39,  137 => 38,  132 => 26,  126 => 69,  124 => 66,  120 => 65,  115 => 63,  111 => 62,  107 => 61,  101 => 58,  98 => 57,  96 => 53,  94 => 50,  90 => 49,  87 => 48,  85 => 45,  81 => 44,  77 => 43,  73 => 42,  68 => 41,  66 => 38,  61 => 36,  57 => 34,  55 => 32,  54 => 31,  53 => 30,  52 => 29,  49 => 27,  47 => 26,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "radix:html", "themes/contrib/radix/components/html/html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 26, "set" => 29, "block" => 38);
        static $filters = array("merge" => 32, "clean_class" => 30, "escape" => 36, "safe_join" => 42, "t" => 58, "spaceless" => 26);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'set', 'block'],
                ['merge', 'clean_class', 'escape', 'safe_join', 't', 'spaceless'],
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
