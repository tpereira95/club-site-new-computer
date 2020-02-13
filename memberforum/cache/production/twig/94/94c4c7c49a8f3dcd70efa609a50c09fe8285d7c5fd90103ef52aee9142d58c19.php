<?php

/* thankslist_body.html */
class __TwigTemplate_21452e299c388ac629dab36df00972e26b3a7098431b9719590be264c879d154 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "thankslist_body.html", 1)->display($context);
        // line 2
        echo "
<h2 class=\"solo\">";
        // line 3
        echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
        echo "</h2>

";
        // line 5
        if (((isset($context["pagination"]) ? $context["pagination"] : null) || (isset($context["TOTAL_USERS"]) ? $context["TOTAL_USERS"] : null))) {
            // line 6
            echo "<div class=\"action-bar top\">
\t<div class=\"pagination\">
\t\t";
            // line 8
            echo (isset($context["TOTAL_USERS"]) ? $context["TOTAL_USERS"] : null);
            echo "
\t\t";
            // line 9
            if ((isset($context["pagination"]) ? $context["pagination"] : null)) {
                // line 10
                echo "\t\t";
                $this->loadTemplate("pagination.html", "thankslist_body.html", 10)->display($context);
                // line 11
                echo "\t\t";
            } else {
                // line 12
                echo "\t\t";
                echo "&bull;";
                echo " ";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "
\t\t";
            }
            // line 14
            echo "\t</div>
</div>
";
        }
        // line 17
        echo "
<div class=\"forumbg forumbg-table\">
\t<div class=\"inner\">

\t\t<table class=\"table1\" cellspacing=\"1\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"name\" data-dfn=\"";
        // line 24
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RANK");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COMMA_SEPARATOR");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
        echo "\">";
        if ((isset($context["S_THANKS"]) ? $context["S_THANKS"] : null)) {
            echo "<span class=\"rank-img\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RANK");
            echo "</span><a href=\"";
            echo (isset($context["U_SORT_USERNAME"]) ? $context["U_SORT_USERNAME"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
            echo "</a>";
        }
        echo "</th>
\t\t\t\t\t<th class=\"posts\">";
        // line 25
        if ((isset($context["S_THANKS"]) ? $context["S_THANKS"] : null)) {
            echo "<a href=\"";
            echo (isset($context["U_SORT_POSTS"]) ? $context["U_SORT_POSTS"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
            echo "</a>";
        } else {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
        }
        echo "</th>
\t\t\t\t\t<th class=\"posts\">";
        // line 26
        if ((isset($context["S_THANKS"]) ? $context["S_THANKS"] : null)) {
            echo "<a href=\"";
            echo (isset($context["U_SORT_THANKS_G"]) ? $context["U_SORT_THANKS_G"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GIVEN");
            echo "</a>";
        } else {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GIVEN");
        }
        echo "</th>
\t\t\t\t\t<th class=\"posts\">";
        // line 27
        if ((isset($context["S_THANKS"]) ? $context["S_THANKS"] : null)) {
            echo "<a href=\"";
            echo (isset($context["U_SORT_THANKS_R"]) ? $context["U_SORT_THANKS_R"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RECEIVED");
            echo "</a>";
        } else {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RECEIVED");
        }
        echo "</th>
\t\t\t\t\t<th class=\"info\">
\t\t\t\t\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["FIELD"]) {
            // line 30
            echo "\t\t\t\t\t\t";
            if ( !$this->getAttribute($context["FIELD"], "S_FIRST_ROW", array())) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COMMA_SEPARATOR");
                echo " ";
            }
            // line 31
            echo "\t\t\t\t\t\t";
            echo $this->getAttribute($context["FIELD"], "PROFILE_FIELD_NAME", array());
            echo "
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['FIELD'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t\t\t\t</th>
\t\t\t\t\t<th class=\"joined\">";
        // line 34
        if ((isset($context["S_THANKS"]) ? $context["S_THANKS"] : null)) {
            echo "<a href=\"";
            echo (isset($context["U_SORT_JOINED"]) ? $context["U_SORT_JOINED"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JOINED");
            echo "</a>";
        } else {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JOINED");
        }
        echo "</th>
\t\t\t\t\t";
        // line 35
        if ((isset($context["S_VIEWONLINE"]) ? $context["S_VIEWONLINE"] : null)) {
            // line 36
            echo "\t\t\t\t\t<th class=\"active\">";
            if ((isset($context["S_THANKS"]) ? $context["S_THANKS"] : null)) {
                echo "<a href=\"";
                echo (isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_ACTIVE");
                echo "</a>";
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_ACTIVE");
            }
            echo "</th>
\t\t\t\t\t";
        }
        // line 38
        echo "\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["memberrow"]) ? $context["memberrow"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["MEMBER"]) {
            // line 42
            echo "\t\t\t\t<tr class=\"";
            if (($this->getAttribute($context["MEMBER"], "S_ROW_COUNT", array()) % 2 == 0)) {
                echo "bg1";
            } else {
                echo "bg2";
            }
            echo "\">
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 44
            if ($this->getAttribute($context["MEMBER"], "RANK_IMG", array())) {
                echo "<span class=\"rank-img\">";
                echo $this->getAttribute($context["MEMBER"], "RANK_IMG", array());
                echo "</span>";
            } else {
                echo "<span class=\"rank-img\">";
                echo $this->getAttribute($context["MEMBER"], "RANK_TITLE", array());
                echo "</span>";
            }
            // line 45
            echo "\t\t\t\t\t\t";
            if (((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null) &&  !(isset($context["S_SELECT_SINGLE"]) ? $context["S_SELECT_SINGLE"] : null))) {
                echo "<input type=\"checkbox\" name=\"user\" value=\"";
                echo $this->getAttribute($context["MEMBER"], "USERNAME", array());
                echo "\" /> ";
            }
            // line 46
            echo "\t\t\t\t\t\t";
            echo $this->getAttribute($context["MEMBER"], "USERNAME_FULL", array());
            echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"posts\">";
            // line 48
            if ($this->getAttribute($context["MEMBER"], "POSTS", array())) {
                echo "<a href=\"";
                echo $this->getAttribute($context["MEMBER"], "U_SEARCH_USER", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_USER_POSTS");
                echo "\">";
                echo $this->getAttribute($context["MEMBER"], "POSTS", array());
                echo "</a>";
            } else {
                echo $this->getAttribute($context["MEMBER"], "POSTS", array());
            }
            echo "</td>
\t\t\t\t\t<td class=\"posts\">";
            // line 49
            if ($this->getAttribute($context["MEMBER"], "GIVENS", array())) {
                echo "<a href=\"";
                echo $this->getAttribute($context["MEMBER"], "U_SEARCH_USER_GIVENS", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_USER_POSTS");
                echo "\">";
                echo $this->getAttribute($context["MEMBER"], "GIVENS", array());
                echo "</a>";
            } else {
                echo $this->getAttribute($context["MEMBER"], "GIVENS", array());
            }
            echo " </td>
\t\t\t\t\t<td class=\"posts\">";
            // line 50
            if ($this->getAttribute($context["MEMBER"], "RECEIVED", array())) {
                echo "<a href=\"";
                echo $this->getAttribute($context["MEMBER"], "U_SEARCH_USER_RECEIVED", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_USER_POSTS");
                echo "\">";
                echo $this->getAttribute($context["MEMBER"], "RECEIVED", array());
                echo "</a>";
            } else {
                echo $this->getAttribute($context["MEMBER"], "RECEIVED", array());
            }
            echo "</td>
\t\t\t\t\t<td class=\"info\">
\t\t\t\t\t\t";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["FIELD"]) {
                // line 53
                echo "\t\t\t\t\t\t<div>";
                echo $this->getAttribute($context["FIELD"], "PROFILE_FIELD_VALUE", array());
                echo "</div>
\t\t\t\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 55
                echo "\t\t\t\t\t\t";
                echo "&nbsp;";
                echo "
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['FIELD'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "\t\t\t\t\t</td>
\t\t\t\t\t<td>";
            // line 58
            echo $this->getAttribute($context["MEMBER"], "JOINED", array());
            echo "</td>
\t\t\t\t\t";
            // line 59
            if ((isset($context["S_VIEWONLINE"]) ? $context["S_VIEWONLINE"] : null)) {
                // line 60
                echo "\t\t\t\t\t<td>";
                echo $this->getAttribute($context["MEMBER"], "VISITED", array());
                echo "&nbsp;";
                echo "</td>
\t\t\t\t\t";
            }
            // line 62
            echo "\t\t\t\t</tr>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 64
            echo "\t\t\t\t<tr class=\"bg1\">
\t\t\t\t\t<td colspan=\"";
            // line 65
            if ((isset($context["S_VIEWONLINE"]) ? $context["S_VIEWONLINE"] : null)) {
                echo "8";
            } else {
                echo "7";
            }
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_MEMBERS");
            echo "</td>
\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['MEMBER'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
</div>

";
        // line 73
        if (((isset($context["pagination"]) ? $context["pagination"] : null) || (isset($context["TOTAL_USERS"]) ? $context["TOTAL_USERS"] : null))) {
            // line 74
            echo "<div class=\"action-bar bottom\">
\t<div class=\"pagination\">
\t\t";
            // line 76
            echo (isset($context["TOTAL_USERS"]) ? $context["TOTAL_USERS"] : null);
            echo "
\t\t";
            // line 77
            if ((isset($context["pagination"]) ? $context["pagination"] : null)) {
                // line 78
                echo "\t\t";
                $this->loadTemplate("pagination.html", "thankslist_body.html", 78)->display($context);
                // line 79
                echo "\t\t";
            } else {
                // line 80
                echo "\t\t";
                echo "&bull;";
                echo " ";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "
\t\t";
            }
            // line 82
            echo "\t</div>
</div>
";
        }
        // line 85
        echo "
";
        // line 86
        $this->loadTemplate("jumpbox.html", "thankslist_body.html", 86)->display($context);
        // line 87
        echo "
";
        // line 88
        $this->loadTemplate("overall_footer.html", "thankslist_body.html", 88)->display($context);
    }

    public function getTemplateName()
    {
        return "thankslist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 88,  363 => 87,  361 => 86,  358 => 85,  353 => 82,  345 => 80,  342 => 79,  339 => 78,  337 => 77,  333 => 76,  329 => 74,  327 => 73,  320 => 68,  305 => 65,  302 => 64,  296 => 62,  289 => 60,  287 => 59,  283 => 58,  280 => 57,  271 => 55,  263 => 53,  258 => 52,  243 => 50,  229 => 49,  215 => 48,  209 => 46,  202 => 45,  192 => 44,  182 => 42,  177 => 41,  172 => 38,  158 => 36,  156 => 35,  144 => 34,  141 => 33,  132 => 31,  126 => 30,  122 => 29,  109 => 27,  97 => 26,  85 => 25,  69 => 24,  60 => 17,  55 => 14,  47 => 12,  44 => 11,  41 => 10,  39 => 9,  35 => 8,  31 => 6,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "thankslist_body.html", "");
    }
}
