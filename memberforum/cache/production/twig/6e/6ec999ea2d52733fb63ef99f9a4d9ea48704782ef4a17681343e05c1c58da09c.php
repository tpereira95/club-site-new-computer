<?php

/* @gfksx_ThanksForPosts/event/viewtopic_body_postrow_custom_fields_after.html */
class __TwigTemplate_35e7677b80d6143c186f35c4a76419b33b30a5e52375930181c0de663d8489e4 extends Twig_Template
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
        if (((($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "THANKS_COUNTERS_VIEW", array()) && $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "THANKS_POSTLIST_VIEW", array())) && ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "THANKS_POST_VIEW_GUESTS", array()) ||  !$this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_POST_ANONYMOUS", array()))) && ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "THANKS_POST_VIEW_ROBOTS", array()) ||  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)))) {
            // line 2
            echo "<dd class=\"profile-posts\" data-user-give-id=\"";
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_ID", array());
            echo "\">
    <strong>";
            // line 3
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GIVEN");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</strong>
    <a href=\"";
            // line 4
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_GIVE_COUNT_LINK", array());
            echo "\">";
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_GIVE_COUNT", array())) {
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_GIVE_COUNT", array());
            } else {
                echo "0";
            }
            echo "</a>
</dd>
<dd class=\"profile-posts\" data-user-receive-id=\"";
            // line 6
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_ID", array());
            echo "\">
    <strong>";
            // line 7
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RECEIVED");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</strong>
    <a href=\"";
            // line 8
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_RECEIVE_COUNT_LINK", array());
            echo "\">";
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_RECEIVE_COUNT", array())) {
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_RECEIVE_COUNT", array());
            } else {
                echo "0";
            }
            echo "</a>
</dd>
";
        }
    }

    public function getTemplateName()
    {
        return "@gfksx_ThanksForPosts/event/viewtopic_body_postrow_custom_fields_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 8,  46 => 7,  42 => 6,  31 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gfksx_ThanksForPosts/event/viewtopic_body_postrow_custom_fields_after.html", "");
    }
}
