<?php

/* @gfksx_ThanksForPosts/topicrow_rating_body.html */
class __TwigTemplate_2a9b50a09dc0fbce3780c70d56dd8c7fe45ea091ce0b28deeab3d2fbf116b103 extends Twig_Template
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
        if ((($this->getAttribute((isset($context["rating"]) ? $context["rating"] : null), "S_THANKS_TOPIC_REPUT_VIEW", array()) && $this->getAttribute((isset($context["rating"]) ? $context["rating"] : null), "TOPIC_REPUT", array())) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            // line 2
            echo "<span class=\"thanks-topiclist-rating\">
\t";
            // line 3
            if ($this->getAttribute((isset($context["rating"]) ? $context["rating"] : null), "S_THANKS_REPUT_GRAPHIC", array())) {
                // line 4
                echo "\t\t";
                $context["STAR_RATING"] = $this->getAttribute((isset($context["rating"]) ? $context["rating"] : null), "THANKS_REPUT_GRAPHIC_TEXT", array());
                // line 5
                echo "\t\t";
                $this->loadTemplate("@gfksx_ThanksForPosts/partials/star_rating.html", "@gfksx_ThanksForPosts/topicrow_rating_body.html", 5)->display($context);
                echo " 
\t";
            }
            // line 7
            echo "\t";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPUT");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "&nbsp;";
            echo $this->getAttribute((isset($context["rating"]) ? $context["rating"] : null), "TOPIC_REPUT", array());
            echo "
</span>
";
        }
    }

    public function getTemplateName()
    {
        return "@gfksx_ThanksForPosts/topicrow_rating_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gfksx_ThanksForPosts/topicrow_rating_body.html", "");
    }
}
