<?php

/* acp_thanks_truncate.html */
class __TwigTemplate_ad29c51272badccebe0ec3db0780599843c4bb4f4a8b866dae8ed99a0cbb3c43 extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "acp_thanks_truncate.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a name=\"maincontent\"></a>

<h1>";
        // line 5
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TRUNCATE_THANKS");
        echo "</h1>

<form id=\"acp_thanks_truncate\" method=\"post\" action=\"";
        // line 7
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "\">
\t<fieldset>
\t\t<legend>";
        // line 9
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TRUNCATE_THANKS");
        echo "</legend>
\t\t";
        // line 10
        if ( !(isset($context["S_TRUNCATE"]) ? $context["S_TRUNCATE"] : null)) {
            // line 11
            echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
            // line 12
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARNING");
            echo "</h3>
\t\t\t<p>";
            // line 13
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TRUNCATE_THANKS_EXPLAIN");
            echo "</p>
\t\t</div>
\t\t";
        } else {
            // line 16
            echo "\t\t<div class=\"successbox\">
\t\t\t<h3>";
            // line 17
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFY");
            echo "</h3>
\t\t\t<p>";
            // line 18
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TRUNCATE_THANKS_MSG");
            echo "</p>
\t\t</div>
\t\t";
        }
        // line 21
        echo "\t\t<dl>
\t\t\t<dt>
\t\t\t\t";
        // line 23
        if ( !(isset($context["S_TRUNCATE"]) ? $context["S_TRUNCATE"] : null)) {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_ALLTHANKS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "<br /><br />";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_USERSTHANKS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "<br /><br />";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_POSTSTHANKS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "
\t\t\t\t";
        } else {
            // line 24
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_THANKSEND");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "<br /><br />";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_USERSEND");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "<br /><br />";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_POSTSEND");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        }
        // line 25
        echo "\t\t\t</dt>
\t\t\t<dd>
\t\t\t\t";
        // line 27
        if ( !(isset($context["S_TRUNCATE"]) ? $context["S_TRUNCATE"] : null)) {
            echo (isset($context["ALLTHANKS"]) ? $context["ALLTHANKS"] : null);
            echo "<br /><br />";
            echo (isset($context["USERSTHANKS"]) ? $context["USERSTHANKS"] : null);
            echo "<br /><br />";
            echo (isset($context["POSTSTHANKS"]) ? $context["POSTSTHANKS"] : null);
            echo "
\t\t\t\t";
        } else {
            // line 28
            echo (isset($context["THANKSEND"]) ? $context["THANKSEND"] : null);
            echo "<br /><br />";
            echo (isset($context["USERSEND"]) ? $context["USERSEND"] : null);
            echo "<br /><br />";
            echo (isset($context["POSTSEND"]) ? $context["POSTSEND"] : null);
        }
        // line 29
        echo "\t\t\t</dd>
\t\t</dl>
\t</fieldset>
\t";
        // line 32
        if ( !(isset($context["S_TRUNCATE"]) ? $context["S_TRUNCATE"] : null)) {
            // line 33
            echo "\t<fieldset class=\"submit-buttons\">
\t\t<legend>";
            // line 34
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "</legend>
\t\t<input class=\"button1\" type=\"submit\" id=\"truncate\" name=\"truncate\" value=\"";
            // line 35
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TRUNCATE");
            echo "\" />
\t</fieldset>
\t";
        }
        // line 38
        echo "</form>

";
        // line 40
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_thanks_truncate.html", 40)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_thanks_truncate.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 40,  146 => 38,  140 => 35,  136 => 34,  133 => 33,  131 => 32,  126 => 29,  119 => 28,  109 => 27,  105 => 25,  95 => 24,  82 => 23,  78 => 21,  72 => 18,  68 => 17,  65 => 16,  59 => 13,  55 => 12,  52 => 11,  50 => 10,  46 => 9,  41 => 7,  36 => 5,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "acp_thanks_truncate.html", "");
    }
}
