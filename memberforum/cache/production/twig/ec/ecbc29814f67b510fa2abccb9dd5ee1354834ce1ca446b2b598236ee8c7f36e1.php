<?php

/* privmsg_notify.txt */
class __TwigTemplate_79d45ccde75bf388ee16629cfdfc3ff75835ce97f66ba6a8bc64f464365ebc08 extends Twig_Template
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
        echo "Subject: New private message has arrived

Hello ";
        // line 3
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo ",

You have received a new private message from \"";
        // line 5
        echo (isset($context["AUTHOR_NAME"]) ? $context["AUTHOR_NAME"] : null);
        echo "\" to your account on \"";
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "\" with the following subject:

";
        // line 7
        echo (isset($context["SUBJECT"]) ? $context["SUBJECT"] : null);
        echo "

You can view your new message by clicking on the following link:

";
        // line 11
        echo (isset($context["U_VIEW_MESSAGE"]) ? $context["U_VIEW_MESSAGE"] : null);
        echo "

You have requested that you be notified on this event, remember that you can always choose not to be notified of new messages by changing the appropriate setting in your profile.

";
        // line 15
        echo (isset($context["EMAIL_SIG"]) ? $context["EMAIL_SIG"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "privmsg_notify.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 15,  42 => 11,  35 => 7,  28 => 5,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "privmsg_notify.txt", "");
    }
}
