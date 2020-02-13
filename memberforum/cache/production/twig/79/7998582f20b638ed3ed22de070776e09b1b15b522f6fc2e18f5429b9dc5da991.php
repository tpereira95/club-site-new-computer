<?php

/* user_reactivate_account.txt */
class __TwigTemplate_76e4ad28362c59b08b12639a74d4181d722c029a33bad289abe800308f095e3b extends Twig_Template
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
        echo "Subject: Reactivate your account on \"";
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "\"

A board administrator requested that your account be reactivated. Your account is currently inactive.
Please follow the steps listed here to reactivate your account.

Please keep this email for your records. Your account information is as follows:

----------------------------
Username: ";
        // line 9
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "
----------------------------

Your password has been securely stored in our database and cannot be retrieved. In the event that it is forgotten, you will be able to reset it using the email address associated with your account.

Please visit the following link to reactivate your account:

";
        // line 16
        echo (isset($context["U_ACTIVATE"]) ? $context["U_ACTIVATE"] : null);
        echo "

";
        // line 18
        echo (isset($context["EMAIL_SIG"]) ? $context["EMAIL_SIG"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "user_reactivate_account.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 18,  41 => 16,  31 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "user_reactivate_account.txt", "");
    }
}
