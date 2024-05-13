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

/* radix:heading */
class __TwigTemplate_92eb6747a29b1061074940e4b9d97177 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'heading_content' => [$this, 'block_heading_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("sdc/radix--heading"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->addAdditionalContext($context, "radix:heading"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->validateProps($context, "radix:heading"));
        // line 24
        ob_start(function () { return ''; });
        // line 25
        echo "
";
        // line 26
        $context["heading_html_tag"] = ((array_key_exists("heading_html_tag", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["heading_html_tag"] ?? null), 26, $this->source), "h2")) : ("h2"));
        // line 27
        $context["display"] = (((true &&  !(null === [($context["display"] ?? null)]))) ? ([($context["display"] ?? null)]) : ([]));
        // line 28
        $context["heading_attributes"] = ((($context["heading_attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 29
        $context["heading_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["display"] ?? null), 29, $this->source), ((($context["heading_utility_classes"] ?? null)) ?: ([])));
        // line 30
        echo "
";
        // line 31
        if (($context["title_link"] ?? null)) {
            // line 32
            echo "  ";
            $context["heading_link_attributes"] = twig_get_attribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(), "setAttribute", ["href", ($context["title_link"] ?? null)], "method", false, false, true, 32);
            // line 33
            echo "  ";
            $context["heading_link_classes"] = ((($context["heading_link_utility_classes"] ?? null)) ?: ([]));
        }
        // line 35
        echo "
";
        // line 36
        if (($context["content"] ?? null)) {
            // line 37
            echo "  <";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_html_tag"] ?? null), 37, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading_attributes"] ?? null), "addClass", [($context["heading_classes"] ?? null)], "method", false, false, true, 37), 37, $this->source), "html", null, true);
            echo ">
    ";
            // line 38
            $this->displayBlock('heading_content', $context, $blocks);
            // line 47
            echo "  </";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_html_tag"] ?? null), 47, $this->source), "html", null, true);
            echo ">
";
        }
        // line 49
        echo "
";
        $___internal_parse_11_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_11_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["heading_utility_classes", "title_link", "heading_link_utility_classes", "content"]);    }

    // line 38
    public function block_heading_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "      ";
        if (($context["title_link"] ?? null)) {
            // line 40
            echo "        <a ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading_link_attributes"] ?? null), "addClass", [($context["heading_link_classes"] ?? null)], "method", false, false, true, 40), 40, $this->source), "html", null, true);
            echo ">
          ";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 41, $this->source), "html", null, true);
            echo "
        </a>
      ";
        } else {
            // line 44
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 44, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 46
        echo "    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "radix:heading";
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
        return array (  122 => 46,  116 => 44,  110 => 41,  105 => 40,  102 => 39,  98 => 38,  93 => 24,  89 => 49,  83 => 47,  81 => 38,  74 => 37,  72 => 36,  69 => 35,  65 => 33,  62 => 32,  60 => 31,  57 => 30,  55 => 29,  53 => 28,  51 => 27,  49 => 26,  46 => 25,  44 => 24,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "radix:heading", "themes/contrib/radix/components/heading/heading.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 24, "set" => 26, "if" => 31, "block" => 38);
        static $filters = array("default" => 26, "merge" => 29, "escape" => 37, "spaceless" => 24);
        static $functions = array("create_attribute" => 28);

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'set', 'if', 'block'],
                ['default', 'merge', 'escape', 'spaceless'],
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
