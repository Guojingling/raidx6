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

/* radix:views-view */
class __TwigTemplate_de7f3538bba2faf2d315b111adede761 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'views_view_wrapper' => [$this, 'block_views_view_wrapper'],
            'views_view_title' => [$this, 'block_views_view_title'],
            'views_header' => [$this, 'block_views_header'],
            'views_filters' => [$this, 'block_views_filters'],
            'views_attachment_before' => [$this, 'block_views_attachment_before'],
            'views_rows' => [$this, 'block_views_rows'],
            'views_pager' => [$this, 'block_views_pager'],
            'views_attachment_after' => [$this, 'block_views_attachment_after'],
            'views_more' => [$this, 'block_views_more'],
            'views_footer' => [$this, 'block_views_footer'],
            'views_feed_icons' => [$this, 'block_views_feed_icons'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("sdc/radix--views-view"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->addAdditionalContext($context, "radix:views-view"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->validateProps($context, "radix:views-view"));
        // line 33
        ob_start(function () { return ''; });
        // line 34
        echo "
";
        // line 36
        $context["views_classes"] = twig_array_merge(["view", ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 38
($context["id"] ?? null), 38, $this->source))), ("view-id-" . $this->sandbox->ensureToStringAllowed(        // line 39
($context["id"] ?? null), 39, $this->source)), ("view-display-id-" . $this->sandbox->ensureToStringAllowed(        // line 40
($context["display_id"] ?? null), 40, $this->source)), ((        // line 41
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 41, $this->source))) : ("")), ((        // line 42
($context["css_name"] ?? null)) ? (("view-" . $this->sandbox->ensureToStringAllowed(($context["css_name"] ?? null), 42, $this->source))) : (""))], ((        // line 43
($context["view_view_utility_classes"] ?? null)) ?: ([])));
        // line 45
        echo "
";
        // line 46
        $context["views_attributes"] = ((($context["attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 47
        $context["views_title_attributes"] = ((($context["views_title_attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 48
        $context["views_header_attributes"] = ((($context["views_header_attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 49
        $context["views_filters_attributes"] = ((($context["views_filters_attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 50
        $context["views_rows_attributes"] = ((($context["views_rows_attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 51
        $context["views_empty_attributes"] = ((($context["views_empty_attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 52
        $context["views_footer_attributes"] = ((($context["views_footer_attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 53
        $context["views_attachment_before_attributes"] = ((($context["views_attachment_before_attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 54
        $context["views_attachment_after_attributes"] = ((($context["views_attachment_after_attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 55
        $context["views_pager_attributes"] = ((($context["views_pager_attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 56
        $context["views_more_attributes"] = ((($context["views_more_attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 57
        $context["views_feed_icons_attributes"] = ((($context["views_feed_icons_attributes"] ?? null)) ?: ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 58
        echo "
";
        // line 60
        $context["views_title_classes"] = twig_array_merge(["view-title"], ((        // line 62
($context["views_title_utility_classes"] ?? null)) ?: ([])));
        // line 64
        echo "
";
        // line 66
        $context["views_header_classes"] = twig_array_merge(["view-header"], ((        // line 68
($context["views_header_utility_classes"] ?? null)) ?: ([])));
        // line 70
        echo "
";
        // line 72
        $context["views_filters_classes"] = twig_array_merge(["view-filters"], ((        // line 74
($context["views_filters_utility_classes"] ?? null)) ?: ([])));
        // line 76
        echo "
";
        // line 78
        $context["views_rows_classes"] = twig_array_merge(["view-content"], ((        // line 80
($context["views_rows_utility_classes"] ?? null)) ?: ([])));
        // line 82
        echo "
";
        // line 84
        $context["views_empty_classes"] = twig_array_merge(["view-empty"], ((        // line 86
($context["views_empty_utility_classes"] ?? null)) ?: ([])));
        // line 88
        echo "
";
        // line 90
        $context["views_footer_classes"] = twig_array_merge(["view-footer"], ((        // line 92
($context["views_footer_utility_classes"] ?? null)) ?: ([])));
        // line 94
        echo "
";
        // line 96
        $context["views_attachment_before_classes"] = twig_array_merge(["attachment", "attachment-before"], ((        // line 99
($context["views_attachment_before_utility_classes"] ?? null)) ?: ([])));
        // line 101
        echo "
";
        // line 103
        $context["views_attachment_after_classes"] = twig_array_merge(["attachment", "attachment-after"], ((        // line 106
($context["views_attachment_after_utility_classes"] ?? null)) ?: ([])));
        // line 108
        echo "
";
        // line 110
        $context["views_pager_classes"] = twig_array_merge(["pager"], ((        // line 112
($context["views_pager_utility_classes"] ?? null)) ?: ([])));
        // line 114
        echo "
";
        // line 116
        $context["views_more_classes"] = twig_array_merge([""], ((($context["views_more_utility_classes"] ?? null)) ?: ([])));
        // line 118
        echo "
";
        // line 120
        $context["views_feed_icons_classes"] = twig_array_merge(["feed-icons"], ((        // line 122
($context["views_feed_icons_utility_classes"] ?? null)) ?: ([])));
        // line 124
        echo "
<div ";
        // line 125
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["views_attributes"] ?? null), "addClass", [($context["views_classes"] ?? null)], "method", false, false, true, 125), 125, $this->source), "html", null, true);
        echo ">
  ";
        // line 126
        $this->displayBlock('views_view_wrapper', $context, $blocks);
        // line 211
        echo "</div>

";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_0_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["id", "display_id", "dom_id", "css_name", "view_view_utility_classes", "attributes", "views_title_utility_classes", "views_header_utility_classes", "views_filters_utility_classes", "views_rows_utility_classes", "views_empty_utility_classes", "views_footer_utility_classes", "views_attachment_before_utility_classes", "views_attachment_after_utility_classes", "views_pager_utility_classes", "views_more_utility_classes", "views_feed_icons_utility_classes", "title_prefix", "title_suffix", "title", "header", "exposed", "attachment_before", "rows", "empty", "pager", "attachment_after", "more", "footer", "feed_icons"]);    }

    // line 126
    public function block_views_view_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 127
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 127, $this->source), "html", null, true);
        echo "
    ";
        // line 128
        $this->displayBlock('views_view_title', $context, $blocks);
        // line 135
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 135, $this->source), "html", null, true);
        echo "

    ";
        // line 137
        $this->displayBlock('views_header', $context, $blocks);
        // line 144
        echo "
    ";
        // line 145
        $this->displayBlock('views_filters', $context, $blocks);
        // line 152
        echo "
    ";
        // line 153
        $this->displayBlock('views_attachment_before', $context, $blocks);
        // line 160
        echo "
    ";
        // line 161
        $this->displayBlock('views_rows', $context, $blocks);
        // line 172
        echo "
    ";
        // line 173
        $this->displayBlock('views_pager', $context, $blocks);
        // line 180
        echo "
    ";
        // line 181
        $this->displayBlock('views_attachment_after', $context, $blocks);
        // line 188
        echo "
    ";
        // line 189
        $this->displayBlock('views_more', $context, $blocks);
        // line 194
        echo "
    ";
        // line 195
        $this->displayBlock('views_footer', $context, $blocks);
        // line 202
        echo "
    ";
        // line 203
        $this->displayBlock('views_feed_icons', $context, $blocks);
        // line 210
        echo "  ";
    }

    // line 128
    public function block_views_view_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 129
        echo "      ";
        if (($context["title"] ?? null)) {
            // line 130
            echo "        <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["views_title_attributes"] ?? null), "addClass", [($context["views_title_classes"] ?? null)], "method", false, false, true, 130), 130, $this->source), "html", null, true);
            echo ">
          ";
            // line 131
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 131, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 134
        echo "    ";
    }

    // line 137
    public function block_views_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 138
        echo "      ";
        if (($context["header"] ?? null)) {
            // line 139
            echo "        <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["views_header_attributes"] ?? null), "addClass", [($context["views_header_classes"] ?? null)], "method", false, false, true, 139), 139, $this->source), "html", null, true);
            echo ">
          ";
            // line 140
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 140, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 143
        echo "    ";
    }

    // line 145
    public function block_views_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 146
        echo "      ";
        if (($context["exposed"] ?? null)) {
            // line 147
            echo "        <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["views_filters_attributes"] ?? null), "addClass", [($context["views_filters_classes"] ?? null)], "method", false, false, true, 147), 147, $this->source), "html", null, true);
            echo ">
          ";
            // line 148
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 148, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 151
        echo "    ";
    }

    // line 153
    public function block_views_attachment_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 154
        echo "      ";
        if (($context["attachment_before"] ?? null)) {
            // line 155
            echo "        <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["views_attachment_before_attributes"] ?? null), "addClass", [($context["views_attachment_before_classes"] ?? null)], "method", false, false, true, 155), 155, $this->source), "html", null, true);
            echo ">
          ";
            // line 156
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 156, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 159
        echo "    ";
    }

    // line 161
    public function block_views_rows($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 162
        echo "      ";
        if (($context["rows"] ?? null)) {
            // line 163
            echo "        <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["views_rows_attributes"] ?? null), "addClass", [($context["views_rows_classes"] ?? null)], "method", false, false, true, 163), 163, $this->source), "html", null, true);
            echo ">
          ";
            // line 164
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 164, $this->source), "html", null, true);
            echo "
        </div>
      ";
        } elseif (        // line 166
($context["empty"] ?? null)) {
            // line 167
            echo "        <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["views_empty_attributes"] ?? null), "addClass", [($context["views_empty_classes"] ?? null)], "method", false, false, true, 167), 167, $this->source), "html", null, true);
            echo ">
          ";
            // line 168
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 168, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 171
        echo "    ";
    }

    // line 173
    public function block_views_pager($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 174
        echo "      ";
        if (($context["pager"] ?? null)) {
            // line 175
            echo "        <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["views_pager_attributes"] ?? null), "addClass", [($context["views_pager_classes"] ?? null)], "method", false, false, true, 175), 175, $this->source), "html", null, true);
            echo ">
          ";
            // line 176
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 176, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 179
        echo "    ";
    }

    // line 181
    public function block_views_attachment_after($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 182
        echo "      ";
        if (($context["attachment_after"] ?? null)) {
            // line 183
            echo "        <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["views_attachment_after_attributes"] ?? null), "addClass", [($context["views_attachment_after_classes"] ?? null)], "method", false, false, true, 183), 183, $this->source), "html", null, true);
            echo ">
          ";
            // line 184
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 184, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 187
        echo "    ";
    }

    // line 189
    public function block_views_more($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 190
        echo "      ";
        if (($context["more"] ?? null)) {
            // line 191
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->addClass($this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 191, $this->source), $this->sandbox->ensureToStringAllowed(($context["views_more_classes"] ?? null), 191, $this->source)), "html", null, true);
            echo "
      ";
        }
        // line 193
        echo "    ";
    }

    // line 195
    public function block_views_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 196
        echo "      ";
        if (($context["footer"] ?? null)) {
            // line 197
            echo "        <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["views_footer_attributes"] ?? null), "addClass", [($context["views_footer_classes"] ?? null)], "method", false, false, true, 197), 197, $this->source), "html", null, true);
            echo ">
          ";
            // line 198
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 198, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 201
        echo "    ";
    }

    // line 203
    public function block_views_feed_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 204
        echo "      ";
        if (($context["feed_icons"] ?? null)) {
            // line 205
            echo "        <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["views_feed_icons_attributes"] ?? null), "addClass", [($context["views_feed_icons_classes"] ?? null)], "method", false, false, true, 205), 205, $this->source), "html", null, true);
            echo ">
          ";
            // line 206
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 206, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 209
        echo "    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "radix:views-view";
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
        return array (  464 => 209,  458 => 206,  453 => 205,  450 => 204,  446 => 203,  442 => 201,  436 => 198,  431 => 197,  428 => 196,  424 => 195,  420 => 193,  414 => 191,  411 => 190,  407 => 189,  403 => 187,  397 => 184,  392 => 183,  389 => 182,  385 => 181,  381 => 179,  375 => 176,  370 => 175,  367 => 174,  363 => 173,  359 => 171,  353 => 168,  348 => 167,  346 => 166,  341 => 164,  336 => 163,  333 => 162,  329 => 161,  325 => 159,  319 => 156,  314 => 155,  311 => 154,  307 => 153,  303 => 151,  297 => 148,  292 => 147,  289 => 146,  285 => 145,  281 => 143,  275 => 140,  270 => 139,  267 => 138,  263 => 137,  259 => 134,  253 => 131,  248 => 130,  245 => 129,  241 => 128,  237 => 210,  235 => 203,  232 => 202,  230 => 195,  227 => 194,  225 => 189,  222 => 188,  220 => 181,  217 => 180,  215 => 173,  212 => 172,  210 => 161,  207 => 160,  205 => 153,  202 => 152,  200 => 145,  197 => 144,  195 => 137,  189 => 135,  187 => 128,  182 => 127,  178 => 126,  173 => 33,  168 => 211,  166 => 126,  162 => 125,  159 => 124,  157 => 122,  156 => 120,  153 => 118,  151 => 116,  148 => 114,  146 => 112,  145 => 110,  142 => 108,  140 => 106,  139 => 103,  136 => 101,  134 => 99,  133 => 96,  130 => 94,  128 => 92,  127 => 90,  124 => 88,  122 => 86,  121 => 84,  118 => 82,  116 => 80,  115 => 78,  112 => 76,  110 => 74,  109 => 72,  106 => 70,  104 => 68,  103 => 66,  100 => 64,  98 => 62,  97 => 60,  94 => 58,  92 => 57,  90 => 56,  88 => 55,  86 => 54,  84 => 53,  82 => 52,  80 => 51,  78 => 50,  76 => 49,  74 => 48,  72 => 47,  70 => 46,  67 => 45,  65 => 43,  64 => 42,  63 => 41,  62 => 40,  61 => 39,  60 => 38,  59 => 36,  56 => 34,  54 => 33,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "radix:views-view", "themes/contrib/radix/components/views-view/views-view.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 33, "set" => 36, "block" => 126, "if" => 129);
        static $filters = array("merge" => 43, "clean_class" => 38, "escape" => 125, "spaceless" => 33, "add_class" => 191);
        static $functions = array("create_attribute" => 46);

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'set', 'block', 'if'],
                ['merge', 'clean_class', 'escape', 'spaceless', 'add_class'],
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
