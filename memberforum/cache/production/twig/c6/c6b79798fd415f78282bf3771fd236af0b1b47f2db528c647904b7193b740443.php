<?php

/* @phpbb_viglink/event/overall_footer_after.html */
class __TwigTemplate_361165b01d2b228ce43a2192bd3f4fad2ecd2d276f2d7644d70a45f7d5e5e917 extends Twig_Template
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
        if ((isset($context["VIGLINK_ENABLED"]) ? $context["VIGLINK_ENABLED"] : null)) {
            // line 2
            echo "<script type=\"text/javascript\">
\tvar vglnk = {
\t\tkey: '";
            // line 4
            echo (isset($context["VIGLINK_API_KEY"]) ? $context["VIGLINK_API_KEY"] : null);
            echo "',
\t\tsub_id: '";
            // line 5
            echo (isset($context["VIGLINK_SUB_ID"]) ? $context["VIGLINK_SUB_ID"] : null);
            echo "'
\t};

\t(function(d, t) {
\t\tvar s = d.createElement(t); s.type = 'text/javascript'; s.async = true;
\t\ts.src = '//cdn.viglink.com/api/vglnk.js';
\t\tvar r = d.getElementsByTagName(t)[0]; r.parentNode.insertBefore(s, r);
\t}(document, 'script'));
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "@phpbb_viglink/event/overall_footer_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@phpbb_viglink/event/overall_footer_after.html", "");
    }
}
