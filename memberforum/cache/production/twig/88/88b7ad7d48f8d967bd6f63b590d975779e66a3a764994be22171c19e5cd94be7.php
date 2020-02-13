<?php

/* @gfksx_ThanksForPosts/event/viewtopic_body_postrow_post_notices_after.html */
class __TwigTemplate_197cba811b93b79af9a0973e141d78405a0c4f59b7a6cb8bf5b53e07f2b8c9c7 extends Twig_Template
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
        echo "<div id='list_thanks";
        echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ID", array());
        echo "'>
\t";
        // line 2
        if (((($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "THANKS", array()) && $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "THANKS_POSTLIST_VIEW", array())) && ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "THANKS_POST_VIEW_GUESTS", array()) ||  !$this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_POST_ANONYMOUS", array()))) && ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "THANKS_POST_VIEW_ROBOTS", array()) ||  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)))) {
            // line 3
            echo "\t<div class=\"notice\">
\t\t<dl>
\t\t\t";
            // line 5
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_MOD_THANKS", array())) {
                // line 6
                echo "\t\t\t<ul class=\"post-buttons\" style=\"float: left; position: static;\">
\t\t\t\t<li>
\t\t\t\t\t<a id='clear_list_thanks";
                // line 8
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ID", array());
                echo "' href=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_CLEAR_LIST_THANKS_POST", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CLEAR_LIST_THANKS");
                echo "\" class=\"button button-icon-only\" style=\"float:left\"><i aria-hidden=\"true\" class=\"icon fa-fw fa-recycle\"></i><span class=\"sr-only\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CLEAR_LIST_THANKS");
                echo "</span></a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t";
            }
            // line 12
            echo "
\t\t\t<dt>";
            // line 13
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "THANK_TEXT", array());
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_AUTHOR_FULL", array());
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "THANK_TEXT_2", array());
            echo "</dt>
\t\t\t<dd>";
            // line 14
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "THANKS", array());
            echo "</dd>
\t\t</dl>
\t</div>
\t";
        }
        // line 18
        echo "</div>
<div id='div_post_reput";
        // line 19
        echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ID", array());
        echo "'>
\t";
        // line 20
        if (((($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_THANKS_POST_REPUT_VIEW", array()) && $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_REPUT", array())) && ( !$this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_POST_ANONYMOUS", array()) || $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "THANKS_POST_VIEW_GUESTS", array()))) && ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) || $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "THANKS_POST_VIEW_ROBOTS", array())))) {
            // line 21
            echo "\t<div class=\"notice\">
\t\t<dl>
\t\t\t<dt class=\"small\"><strong>";
            // line 23
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPUT");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</strong>&nbsp;";
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_REPUT", array());
            echo "</dt>
\t\t\t<dd>
\t\t\t\t";
            // line 25
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_THANKS_REPUT_GRAPHIC", array())) {
                // line 26
                echo "\t\t\t\t\t";
                $context["STAR_RATING"] = $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "THANKS_REPUT_GRAPHIC_TEXT", array());
                // line 27
                echo "\t\t\t\t\t";
                $this->loadTemplate("@gfksx_ThanksForPosts/partials/star_rating.html", "@gfksx_ThanksForPosts/event/viewtopic_body_postrow_post_notices_after.html", 27)->display($context);
                echo " 
\t\t\t\t";
            }
            // line 29
            echo "\t\t\t</dd>
\t\t</dl>
\t</div>
\t";
        }
        // line 33
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@gfksx_ThanksForPosts/event/viewtopic_body_postrow_post_notices_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 33,  97 => 29,  91 => 27,  88 => 26,  86 => 25,  78 => 23,  74 => 21,  72 => 20,  68 => 19,  65 => 18,  58 => 14,  52 => 13,  49 => 12,  36 => 8,  32 => 6,  30 => 5,  26 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gfksx_ThanksForPosts/event/viewtopic_body_postrow_post_notices_after.html", "");
    }
}
