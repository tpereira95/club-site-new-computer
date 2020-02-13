<?php

/* admin_activate.txt */
class __TwigTemplate_9f7fb2920d84d9dce865d3038b18982771446a587b3b2d06ab09a647da758f7f extends Twig_Template
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
        echo "Subject: Activate user account

Hello,

The account owned by \"";
        // line 5
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "\" has been deactivated or newly created, you should check the details of this user (if required) and handle it appropriately.

Use this link to view the user's profile:
";
        // line 8
        echo (isset($context["U_USER_DETAILS"]) ? $context["U_USER_DETAILS"] : null);
        echo "

Use this link to activate the account:
";
        // line 11
        echo (isset($context["U_ACTIVATE"]) ? $context["U_ACTIVATE"] : null);
        echo "

";
        // line 13
        echo (isset($context["EMAIL_SIG"]) ? $context["EMAIL_SIG"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin_activate.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 13,  37 => 11,  31 => 8,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin_activate.txt", "");
    }
}
