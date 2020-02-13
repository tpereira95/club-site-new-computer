<?php

/* newtopic_notify.txt */
class __TwigTemplate_a2adb57ee2a6b9af02c8db32c5116e13be1d8698cb5a20cbed2ce2c57d963311 extends Twig_Template
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
        echo "Subject: New topic notification - \"";
        echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
        echo "\"

Hello ";
        // line 3
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo ",

You are receiving this notification because you are watching the forum \"";
        // line 5
        echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
        echo "\" at \"";
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "\". This forum has received a new topic";
        if (((isset($context["AUTHOR_NAME"]) ? $context["AUTHOR_NAME"] : null) != "")) {
            echo " by ";
            echo (isset($context["AUTHOR_NAME"]) ? $context["AUTHOR_NAME"] : null);
        }
        echo " since your last visit, \"";
        echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
        echo "\". You can use the following link to view the forum, no more notifications will be sent until you visit the forum.

";
        // line 7
        echo (isset($context["U_FORUM"]) ? $context["U_FORUM"] : null);
        echo "

If you no longer wish to watch this forum you can either click the \"Unsubscribe forum\" link found in the forum above, or by clicking the following link:

";
        // line 11
        echo (isset($context["U_STOP_WATCHING_FORUM"]) ? $context["U_STOP_WATCHING_FORUM"] : null);
        echo "

";
        // line 13
        echo (isset($context["EMAIL_SIG"]) ? $context["EMAIL_SIG"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "newtopic_notify.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 13,  51 => 11,  44 => 7,  30 => 5,  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "newtopic_notify.txt", "");
    }
}
