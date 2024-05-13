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

/* radix:navbar-brand */
class __TwigTemplate_59058e57a1b474ff856b40b522ef7c45 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'logo' => [$this, 'block_logo'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("sdc/radix--navbar-brand"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->addAdditionalContext($context, "radix:navbar-brand"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->validateProps($context, "radix:navbar-brand"));
        // line 17
        ob_start(function () { return ''; });
        // line 18
        echo "
";
        // line 19
        $macros["navbar_brand"] = $this->macros["navbar_brand"] = $this;
        // line 20
        $context["navbar_brand_utility_classes"] = twig_join_filter($this->sandbox->ensureToStringAllowed(($context["navbar_brand_utility_classes"] ?? null), 20, $this->source), " ");
        // line 21
        echo "
";
        // line 22
        if (($context["path"] ?? null)) {
            // line 23
            echo "  <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["path"] ?? null), 23, $this->source), "html", null, true);
            echo "\" class=\"navbar-brand ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_brand_utility_classes"] ?? null), 23, $this->source), "html", null, true);
            echo "\" ";
            if ((array_key_exists("text", $context) &&  !twig_test_empty(($context["text"] ?? null)))) {
                echo "aria-label=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 23, $this->source), "html", null, true);
                echo "\"";
            }
            echo ">
    ";
            // line 24
            $this->displayBlock('logo', $context, $blocks);
            // line 43
            echo "  </a>
";
        } else {
            // line 45
            echo "  <span class=\"navbar-brand h1 mb-0 ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_brand_utility_classes"] ?? null), 45, $this->source), "html", null, true);
            echo "\" ";
            if ((array_key_exists("text", $context) &&  !twig_test_empty(($context["text"] ?? null)))) {
                echo "aria-label=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 45, $this->source), "html", null, true);
                echo "\"";
            }
            echo ">
    ";
            // line 46
            if (($context["image"] ?? null)) {
                // line 47
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["navbar_brand"], "macro_image", [($context["image"] ?? null), ($context["width"] ?? null), ($context["height"] ?? null), ($context["alt"] ?? null)], 47, $context, $this->getSourceContext()));
                echo "
    ";
            }
            // line 49
            echo "
    ";
            // line 50
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 50, $this->source), "html", null, true);
            echo "
  </span>
";
        }
        // line 53
        echo "
";
        // line 59
        echo "
";
        $___internal_parse_8_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_8_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "path", "text", "image", "width", "height", "alt", "site_slogan", "src"]);    }

    // line 24
    public function block_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "      <div class=\"navbar-brand__logo\">
        ";
        // line 26
        if (($context["image"] ?? null)) {
            // line 27
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["navbar_brand"], "macro_image", [($context["image"] ?? null), ($context["width"] ?? null), ($context["height"] ?? null), ($context["alt"] ?? null)], 27, $context, $this->getSourceContext()));
            echo "
        ";
        }
        // line 29
        echo "      </div>

      ";
        // line 31
        if ((($context["text"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 32
            echo "        <div class=\"navbar-brand__text d-flex flex-column\">
          ";
            // line 33
            if (($context["text"] ?? null)) {
                // line 34
                echo "            <span>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 34, $this->source), "html", null, true);
                echo "</span>
          ";
            }
            // line 36
            echo "
          ";
            // line 37
            if (($context["site_slogan"] ?? null)) {
                // line 38
                echo "            <span class=\"small text-muted\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 38, $this->source), "html", null, true);
                echo "</span>
          ";
            }
            // line 40
            echo "        </div>
      ";
        }
        // line 42
        echo "    ";
    }

    // line 54
    public function macro_image($__src__ = null, $__width__ = null, $__height__ = null, $__alt__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "src" => $__src__,
            "width" => $__width__,
            "height" => $__height__,
            "alt" => $__alt__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 55
            echo "  ";
            $context["height_attribute"] = (((($context["height"] ?? null) != "auto")) ? ((("height=\"" . $this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 55, $this->source)) . "\"")) : (""));
            // line 56
            echo "
  <img src=\"";
            // line 57
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["src"] ?? null), 57, $this->source), "html", null, true);
            echo "\" width=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("width", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 57, $this->source), 140)) : (140)), "html", null, true);
            echo "\" ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height_attribute"] ?? null), 57, $this->source), "html", null, true);
            echo " alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("alt", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["alt"] ?? null), 57, $this->source), "")) : ("")), "html", null, true);
            echo "\" class=\"me-2\" />
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "radix:navbar-brand";
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
        return array (  190 => 57,  187 => 56,  184 => 55,  168 => 54,  164 => 42,  160 => 40,  154 => 38,  152 => 37,  149 => 36,  143 => 34,  141 => 33,  138 => 32,  136 => 31,  132 => 29,  126 => 27,  124 => 26,  121 => 25,  117 => 24,  112 => 17,  108 => 59,  105 => 53,  99 => 50,  96 => 49,  90 => 47,  88 => 46,  77 => 45,  73 => 43,  71 => 24,  58 => 23,  56 => 22,  53 => 21,  51 => 20,  49 => 19,  46 => 18,  44 => 17,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "radix:navbar-brand", "themes/contrib/radix/components/navbar-brand/navbar-brand.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 17, "import" => 19, "set" => 20, "if" => 22, "block" => 24, "macro" => 54);
        static $filters = array("join" => 20, "escape" => 23, "spaceless" => 17, "default" => 57);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'import', 'set', 'if', 'block', 'macro'],
                ['join', 'escape', 'spaceless', 'default'],
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
