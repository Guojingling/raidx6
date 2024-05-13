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

/* radix:page-navigation */
class __TwigTemplate_9ac27f45611975bd6c8661ee40aec79d extends Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("sdc/radix--page-navigation"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->addAdditionalContext($context, "radix:page-navigation"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->validateProps($context, "radix:page-navigation"));
        // line 7
        ob_start(function () { return ''; });
        // line 8
        echo "
";
        // line 10
        $this->loadTemplate("radix:page-navigation", "radix:page-navigation", 10, "1697991711")->display(twig_array_merge($context, ["container" => "fixed", "navbar_theme" => "light", "navbar_utility_classes" => ["justify-content-between"]]));
        // line 40
        echo "
";
        $___internal_parse_5_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_5_));
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "radix:page-navigation";
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
        return array (  54 => 7,  50 => 40,  48 => 10,  45 => 8,  43 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "radix:page-navigation", "themes/contrib/radix/components/page-navigation/page-navigation.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 7, "embed" => 10);
        static $filters = array("spaceless" => 7);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'embed'],
                ['spaceless'],
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


/* radix:page-navigation */
class __TwigTemplate_9ac27f45611975bd6c8661ee40aec79d___1697991711 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'branding' => [$this, 'block_branding'],
            'left' => [$this, 'block_left'],
            'right' => [$this, 'block_right'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 10
        return "radix:navbar";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("sdc/radix--page-navigation"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->addAdditionalContext($context, "radix:page-navigation"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->validateProps($context, "radix:page-navigation"));
        // line 10
        $this->parent = $this->loadTemplate("radix:navbar", "radix:page-navigation", 10);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);    }

    // line 18
    public function block_branding($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_branding", [], "any", false, false, true, 19)) {
            // line 20
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_branding", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 22
        echo "  ";
    }

    // line 24
    public function block_left($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_left", [], "any", false, false, true, 25)) {
            // line 26
            echo "      <div class=\"me-auto\">
        ";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_left", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 30
        echo "  ";
    }

    // line 32
    public function block_right($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_right", [], "any", false, false, true, 33)) {
            // line 34
            echo "      <div class=\"ms-auto\">
        ";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_right", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 38
        echo "  ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "radix:page-navigation";
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
        return array (  210 => 38,  204 => 35,  201 => 34,  198 => 33,  194 => 32,  190 => 30,  184 => 27,  181 => 26,  178 => 25,  174 => 24,  170 => 22,  164 => 20,  161 => 19,  157 => 18,  151 => 10,  147 => 1,  140 => 10,  54 => 7,  50 => 40,  48 => 10,  45 => 8,  43 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "radix:page-navigation", "themes/contrib/radix/components/page-navigation/page-navigation.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19);
        static $filters = array("escape" => 20);
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
