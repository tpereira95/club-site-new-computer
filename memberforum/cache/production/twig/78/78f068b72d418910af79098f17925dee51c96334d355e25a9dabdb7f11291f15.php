<?php

/* @gfksx_ThanksForPosts/event/viewtopic_body_post_buttons_after.html */
class __TwigTemplate_d296b219ef55c210a0164ac87f9d222c3b56f3392ff3e5aeb6935460c25d7280 extends Twig_Template
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
        if (( !$this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_FIRST_POST_ONLY", array()) || $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_ONLY_TOPICSTART", array()))) {
            // line 2
            if (((((( !$this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_GLOBAL_POST_THANKS", array()) &&  !$this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_POST_ANONYMOUS", array())) && (isset($context["S_FORUM_THANKS"]) ? $context["S_FORUM_THANKS"] : null)) && (isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) &&  !$this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_IS_OWN_POST", array())) && ( !$this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_ALREADY_THANKED", array()) || $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_REMOVE_THANKS", array())))) {
                // line 3
                echo "<li>
\t<a id=\"lnk_thanks_post";
                // line 4
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ID", array());
                echo "\" href=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "THANKS_LINK", array());
                echo "\" title=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "THANK_ALT", array());
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_AUTHOR", array());
                echo "\" class=\"button button-icon-only\">
\t\t<i aria-hidden=\"true\" class=\"icon fa-fw ";
                // line 5
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "THANKS_IMG", array());
                echo "\"></i><span class=\"sr-only\">";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "THANK_ALT_SHORT", array());
                echo "</span>
\t</a>
</li>
";
            }
        }
    }

    public function getTemplateName()
    {
        return "@gfksx_ThanksForPosts/event/viewtopic_body_post_buttons_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gfksx_ThanksForPosts/event/viewtopic_body_post_buttons_after.html", "");
    }
}
