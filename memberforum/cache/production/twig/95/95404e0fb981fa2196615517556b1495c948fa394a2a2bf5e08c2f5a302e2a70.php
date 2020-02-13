<?php

/* @gfksx_ThanksForPosts/event/index_body_stat_blocks_after.html */
class __TwigTemplate_499dc7e1b44c6a930359cf9eab45b346beab680c8268434641bea6f7c12250f9 extends Twig_Template
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
        if ((isset($context["S_THANKS_LIST"]) ? $context["S_THANKS_LIST"] : null)) {
            // line 2
            echo "<div class=\"stat-block thanks-list\">
\t<h3><a href=\"";
            // line 3
            echo (isset($context["U_THANKS_LIST"]) ? $context["U_THANKS_LIST"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOP_THANKS_LIST");
            echo "</a></h3>
\t<p>";
            // line 4
            echo (isset($context["THANKS_LIST"]) ? $context["THANKS_LIST"] : null);
            echo "</p>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@gfksx_ThanksForPosts/event/index_body_stat_blocks_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gfksx_ThanksForPosts/event/index_body_stat_blocks_after.html", "");
    }
}
