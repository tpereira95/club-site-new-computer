<?php

/* @gfksx_ThanksForPosts/event/memberlist_view_content_append.html */
class __TwigTemplate_b98e2b5390d77d517bca5076cd9aef42da00eb1ed53fad9b25bbd28cd9fd2baa extends Twig_Template
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
        $this->loadTemplate("memberlist_view_thanks.html", "@gfksx_ThanksForPosts/event/memberlist_view_content_append.html", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "@gfksx_ThanksForPosts/event/memberlist_view_content_append.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gfksx_ThanksForPosts/event/memberlist_view_content_append.html", "");
    }
}
