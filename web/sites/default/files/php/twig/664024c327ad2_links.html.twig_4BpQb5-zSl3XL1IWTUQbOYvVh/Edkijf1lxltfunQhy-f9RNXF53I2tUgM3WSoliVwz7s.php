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

/* themes/custom/nema_radix6/templates/navigation/links.html.twig */
class __TwigTemplate_b99acfb6be885de2ba3d05342c99364f extends Template
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
        // line 34
        if (($context["links"] ?? null)) {
            // line 36
            $this->loadTemplate("themes/custom/nema_radix6/templates/navigation/links.html.twig", "themes/custom/nema_radix6/templates/navigation/links.html.twig", 36, "2039726763")->display(twig_array_merge($context, ["items" =>             // line 37
($context["links"] ?? null)]));
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["links"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/nema_radix6/templates/navigation/links.html.twig";
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
        return array (  42 => 37,  41 => 36,  39 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/nema_radix6/templates/navigation/links.html.twig", "/var/www/html/web/themes/custom/nema_radix6/templates/navigation/links.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 34, "embed" => 36);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'embed'],
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


/* themes/custom/nema_radix6/templates/navigation/links.html.twig */
class __TwigTemplate_b99acfb6be885de2ba3d05342c99364f___2039726763 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'nav_items' => [$this, 'block_nav_items'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 36
        return "radix:nav";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("radix:nav", "themes/custom/nema_radix6/templates/navigation/links.html.twig", 36);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["links"]);    }

    // line 40
    public function block_nav_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 42
            echo "        <li";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 42), "addClass", ["nav-item"], "method", false, false, true, 42), 42, $this->source), "html", null, true);
            echo ">";
            // line 43
            if (twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 43)) {
                // line 44
                echo "<span";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 44), "text_attributes", [], "any", false, false, true, 44), "addClass", ["nav-link"], "method", false, false, true, 44), 44, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                echo "</span>";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 45
$context["item"], "text_attributes", [], "any", false, false, true, 45)) {
                // line 46
                echo "<span";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "text_attributes", [], "any", false, false, true, 46), "addClass", ["nav-link"], "method", false, false, true, 46), 46, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                echo "</span>";
            } else {
                // line 48
                echo "<span class=\"nav-link\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                echo "</span>";
            }
            // line 50
            echo "</li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/nema_radix6/templates/navigation/links.html.twig";
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
        return array (  182 => 52,  175 => 50,  170 => 48,  163 => 46,  161 => 45,  155 => 44,  153 => 43,  149 => 42,  144 => 41,  140 => 40,  128 => 36,  42 => 37,  41 => 36,  39 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/nema_radix6/templates/navigation/links.html.twig", "/var/www/html/web/themes/custom/nema_radix6/templates/navigation/links.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 41, "if" => 43);
        static $filters = array("escape" => 42);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
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
