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

/* radix:nav */
class __TwigTemplate_36616f76327fc1d875cd0a706b560e8e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'nav_items' => [$this, 'block_nav_items'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("sdc/radix--nav"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->addAdditionalContext($context, "radix:nav"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->validateProps($context, "radix:nav"));
        // line 14
        ob_start(function () { return ''; });
        // line 15
        echo "
";
        // line 16
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 18
        $context["alignment_classes"] = ["right" => "justify-content-end", "center" => "justify-content-center", "vertical" => "flex-column", "left" => ""];
        // line 25
        echo "
";
        // line 26
        $context["alignment"] = (((twig_get_attribute($this->env, $this->source, ($context["alignment_classes"] ?? null), ($context["alignment"] ?? null), [], "array", true, true, true, 26) &&  !(null === (($__internal_compile_0 = ($context["alignment_classes"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["alignment"] ?? null)] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["alignment_classes"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["alignment"] ?? null)] ?? null) : null)) : (""));
        // line 27
        echo "
";
        // line 28
        $context["style"] = ((($context["style"] ?? null)) ? (("nav-" . $this->sandbox->ensureToStringAllowed(($context["style"] ?? null), 28, $this->source))) : (""));
        // line 29
        $context["fill"] = ((($context["fill"] ?? null)) ? (("nav-" . $this->sandbox->ensureToStringAllowed(($context["fill"] ?? null), 29, $this->source))) : (""));
        // line 30
        echo "
";
        // line 32
        $context["nav_classes"] = twig_array_merge(["nav",         // line 34
($context["style"] ?? null),         // line 35
($context["alignment"] ?? null),         // line 36
($context["fill"] ?? null)], ((        // line 37
($context["nav_utility_classes"] ?? null)) ?: ([])));
        // line 39
        echo "
";
        // line 40
        if (($context["items"] ?? null)) {
            // line 41
            echo "  <ul";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["nav_classes"] ?? null)], "method", false, false, true, 41), 41, $this->source), "html", null, true);
            echo ">
    ";
            // line 42
            $this->displayBlock('nav_items', $context, $blocks);
            // line 80
            echo "  </ul>
";
        }
        // line 82
        echo "
";
        $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_1_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "nav_utility_classes", "items", "attributes", "nav_link_utility_classes"]);    }

    // line 42
    public function block_nav_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "        ";
            // line 45
            $context["nav_item_classes"] = ["nav-item", ((twig_get_attribute($this->env, $this->source,             // line 47
$context["item"], "in_active_trail", [], "any", false, false, true, 47)) ? ("active") : ("")), (((twig_get_attribute($this->env, $this->source,             // line 48
$context["item"], "is_expanded", [], "any", false, false, true, 48) && twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 48))) ? ("dropdown") : (""))];
            // line 51
            echo "        ";
            // line 52
            $context["nav_link_classes"] = twig_array_merge(["nav-link", ((twig_get_attribute($this->env, $this->source,             // line 54
$context["item"], "in_active_trail", [], "any", false, false, true, 54)) ? ("active") : (""))], ((            // line 55
($context["nav_link_utility_classes"] ?? null)) ?: ([])));
            // line 57
            echo "        ";
            if (is_iterable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 57), "options", [], "any", false, false, true, 57), "attributes", [], "any", false, false, true, 57), "class", [], "any", false, false, true, 57))) {
                // line 58
                echo "          ";
                $context["nav_link_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["nav_link_classes"] ?? null), 58, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 58), "options", [], "any", false, false, true, 58), "attributes", [], "any", false, false, true, 58), "class", [], "any", false, false, true, 58), 58, $this->source));
                // line 59
                echo "        ";
            } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 59), "options", [], "any", false, false, true, 59), "attributes", [], "any", false, false, true, 59), "class", [], "any", false, false, true, 59)) {
                // line 60
                echo "          ";
                $context["nav_link_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["nav_link_classes"] ?? null), 60, $this->source), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 60), "options", [], "any", false, false, true, 60), "attributes", [], "any", false, false, true, 60), "class", [], "any", false, false, true, 60)]);
                // line 61
                echo "        ";
            }
            // line 62
            echo "        <li class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["nav_item_classes"] ?? null), 62, $this->source), " "), "html", null, true);
            echo "\">
          ";
            // line 63
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 63) && twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 63))) {
                // line 64
                echo "            <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
                echo "\" class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter(twig_array_merge($this->sandbox->ensureToStringAllowed(($context["nav_link_classes"] ?? null), 64, $this->source), ["dropdown-toggle"]), " "), "html", null, true);
                echo "\" data-bs-toggle=\"dropdown\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
                echo "</a>
            ";
                // line 65
                if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 65)) {
                    // line 66
                    echo "              ";
                    // line 67
                    $this->loadTemplate("radix:dropdown-menu", "radix:nav", 67)->display(twig_array_merge($context, ["items" => twig_get_attribute($this->env, $this->source,                     // line 68
$context["item"], "below", [], "any", false, false, true, 68)]));
                    // line 71
                    echo "            ";
                }
                // line 72
                echo "          ";
            } else {
                // line 73
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 73)) {
                    // line 74
                    echo "              ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 74), 74, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 74), 74, $this->source), ["class" => ($context["nav_link_classes"] ?? null)]), "html", null, true);
                    echo "
            ";
                }
                // line 76
                echo "          ";
            }
            // line 77
            echo "        </li>
      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "radix:nav";
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
        return array (  204 => 79,  189 => 77,  186 => 76,  180 => 74,  177 => 73,  174 => 72,  171 => 71,  169 => 68,  168 => 67,  166 => 66,  164 => 65,  155 => 64,  153 => 63,  148 => 62,  145 => 61,  142 => 60,  139 => 59,  136 => 58,  133 => 57,  131 => 55,  130 => 54,  129 => 52,  127 => 51,  125 => 48,  124 => 47,  123 => 45,  121 => 44,  103 => 43,  99 => 42,  94 => 14,  90 => 82,  86 => 80,  84 => 42,  79 => 41,  77 => 40,  74 => 39,  72 => 37,  71 => 36,  70 => 35,  69 => 34,  68 => 32,  65 => 30,  63 => 29,  61 => 28,  58 => 27,  56 => 26,  53 => 25,  51 => 18,  49 => 16,  46 => 15,  44 => 14,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "radix:nav", "themes/contrib/radix/components/nav/nav.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 14, "import" => 16, "set" => 18, "if" => 40, "block" => 42, "for" => 43, "include" => 67);
        static $filters = array("merge" => 37, "escape" => 41, "spaceless" => 14, "join" => 62);
        static $functions = array("link" => 74);

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'import', 'set', 'if', 'block', 'for', 'include'],
                ['merge', 'escape', 'spaceless', 'join'],
                ['link']
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
