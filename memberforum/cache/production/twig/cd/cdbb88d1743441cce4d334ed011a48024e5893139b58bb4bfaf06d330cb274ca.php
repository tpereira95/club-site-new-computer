<?php

/* thanks_results.html */
class __TwigTemplate_876459775dfa18fa45545c5ab6810f1b6d13b9f0fff252ded24f14d0d9cc5e80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->loadTemplate("overall_header.html", "thanks_results.html", 1)->display($context);
        // line 2
        echo "
<h2>";
        // line 3
        echo (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null);
        echo "</h2>

<p><a class=\"arrow-";
        // line 5
        echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
        echo "\" href=\"";
        echo (isset($context["U_THANKS"]) ? $context["U_THANKS"] : null);
        echo "\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("THANKS_BACK");
        echo "\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("THANKS_BACK");
        echo "</a></p>

";
        // line 7
        if (((isset($context["pagination"]) ? $context["pagination"] : null) || (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null))) {
            // line 8
            echo "\t<div class=\"action-bar top\">
\t\t<div class=\"pagination\">
\t\t\t";
            // line 10
            echo (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null);
            echo "
\t\t\t";
            // line 11
            if ((isset($context["pagination"]) ? $context["pagination"] : null)) {
                // line 12
                echo "\t\t\t\t";
                $this->loadTemplate("pagination.html", "thanks_results.html", 12)->display($context);
                // line 13
                echo "\t\t\t";
            } else {
                // line 14
                echo "\t\t\t\t";
                echo "&bull;";
                echo " ";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "
\t\t\t";
            }
            // line 16
            echo "\t\t</div>
\t</div>
";
        }
        // line 19
        echo "
";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["searchresults"]) ? $context["searchresults"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ITEM"]) {
            // line 21
            echo "\t";
            // line 22
            echo "\t<div class=\"search post ";
            if (($this->getAttribute($context["ITEM"], "S_ROW_COUNT", array()) % 2 == 1)) {
                echo "bg1";
            } else {
                echo "bg2";
            }
            if ($this->getAttribute($context["ITEM"], "S_POST_REPORTED", array())) {
                echo " reported";
            }
            echo "\">
\t\t<div class=\"inner\">

\t\t\t<dl class=\"postprofile\">
\t\t\t\t";
            // line 26
            // line 27
            echo "\t\t\t\t<dt class=\"author\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
            echo " ";
            echo $this->getAttribute($context["ITEM"], "POST_AUTHOR_FULL", array());
            echo "</dt>
\t\t\t\t<dd class=\"search-result-date\">";
            // line 28
            echo $this->getAttribute($context["ITEM"], "POST_DATE", array());
            echo "</dd>
\t\t\t\t";
            // line 29
            if ($this->getAttribute($context["ITEM"], "FORUM_ID", array())) {
                // line 30
                echo "\t\t\t\t\t<dd><a href=\"";
                echo $this->getAttribute($context["ITEM"], "U_VIEW_FORUM", array());
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JUMP_TO_FORUM");
                echo "</a></dd>
\t\t\t\t\t<dd><a href=\"";
                // line 31
                echo $this->getAttribute($context["ITEM"], "U_VIEW_TOPIC", array());
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JUMP_TO_TOPIC");
                echo "</a></dd>
\t\t\t\t";
            } else {
                // line 33
                echo "\t\t\t\t\t<dd><a href=\"";
                echo $this->getAttribute($context["ITEM"], "U_VIEW_TOPIC", array());
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JUMP_TO_TOPIC");
                echo "</a></dd>
\t\t\t\t";
            }
            // line 35
            echo "\t\t\t\t";
            // line 36
            echo "\t\t\t</dl>

\t\t\t<div class=\"postbody\">
\t\t\t\t<h3><a href=\"";
            // line 39
            echo $this->getAttribute($context["ITEM"], "U_VIEW_POST", array());
            echo "\">";
            echo $this->getAttribute($context["ITEM"], "POST_SUBJECT", array());
            echo "</a></h3>
\t\t\t\t<div class=\"content\">";
            // line 40
            echo $this->getAttribute($context["ITEM"], "MESSAGE", array());
            echo "</div>
\t\t\t</div>

\t\t\t<ul class=\"searchresults\">
\t\t\t\t<li><a href=\"";
            // line 44
            echo $this->getAttribute($context["ITEM"], "U_VIEW_POST", array());
            echo "\" class=\"arrow-";
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JUMP_TO_POST");
            echo "</a></li>
\t\t\t</ul>
\t\t</div>
\t</div>
\t";
            // line 48
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 50
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t\t<strong>";
            // line 52
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_SEARCH_RESULTS");
            echo "</strong>
\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ITEM'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
";
        // line 57
        if (((isset($context["pagination"]) ? $context["pagination"] : null) || (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null))) {
            // line 58
            echo "\t<div class=\"action-bar bottom\">
\t\t<div class=\"pagination\">
\t\t\t";
            // line 60
            echo (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null);
            echo "
\t\t\t";
            // line 61
            if ((isset($context["pagination"]) ? $context["pagination"] : null)) {
                // line 62
                echo "\t\t\t\t";
                $this->loadTemplate("pagination.html", "thanks_results.html", 62)->display($context);
                // line 63
                echo "\t\t\t";
            } else {
                // line 64
                echo "\t\t\t\t";
                echo "&bull;";
                echo " ";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "
\t\t\t";
            }
            // line 66
            echo "\t\t</div>
\t</div>
";
        }
        // line 69
        echo "
";
        // line 70
        $this->loadTemplate("jumpbox.html", "thanks_results.html", 70)->display($context);
        // line 71
        echo "
";
        // line 72
        $this->loadTemplate("overall_footer.html", "thanks_results.html", 72)->display($context);
    }

    public function getTemplateName()
    {
        return "thanks_results.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 72,  220 => 71,  218 => 70,  215 => 69,  210 => 66,  202 => 64,  199 => 63,  196 => 62,  194 => 61,  190 => 60,  186 => 58,  184 => 57,  181 => 56,  171 => 52,  167 => 50,  163 => 48,  152 => 44,  145 => 40,  139 => 39,  134 => 36,  132 => 35,  124 => 33,  117 => 31,  110 => 30,  108 => 29,  104 => 28,  97 => 27,  96 => 26,  81 => 22,  79 => 21,  74 => 20,  71 => 19,  66 => 16,  58 => 14,  55 => 13,  52 => 12,  50 => 11,  46 => 10,  42 => 8,  40 => 7,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "thanks_results.html", "");
    }
}
