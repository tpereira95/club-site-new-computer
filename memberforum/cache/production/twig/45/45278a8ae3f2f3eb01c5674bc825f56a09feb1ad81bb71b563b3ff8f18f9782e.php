<?php

/* acp_thanks_refresh.html */
class __TwigTemplate_ffbb7bb3b56f0c948876f8ec61a7ee08d0ff0ba9327afc50e6710637fd9a7bd9 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "acp_thanks_refresh.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a name=\"maincontent\"></a>

<h1>";
        // line 5
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("THANKS_REFRESH");
        echo "</h1>

<p>";
        // line 7
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("THANKS_REFRESH_EXPLAIN");
        echo "</p>

<fieldset>
\t<legend>";
        // line 10
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("THANKS_REFRESH");
        echo "</legend>
\t";
        // line 11
        if ( !(isset($context["S_REFRESH"]) ? $context["S_REFRESH"] : null)) {
            // line 12
            echo "\t<div class=\"errorbox\">
\t\t<h3>";
            // line 13
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARNING");
            echo "</h3>
\t\t<p>";
            // line 14
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("THANKS_REFRESH_MSG");
            echo "</p>
\t</div>
\t";
        } else {
            // line 17
            echo "\t<div class=\"successbox\">
\t\t<h3>";
            // line 18
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFY");
            echo "</h3>
\t\t<p>";
            // line 19
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("THANKS_REFRESHED_MSG");
            echo "</p>
\t</div>
\t";
        }
        // line 22
        echo "\t<dl>
\t\t<dt>";
        // line 23
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_POSTS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "<br /><br /><br />";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_POSTSTHANKS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "<br /><br />";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_USERSTHANKS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "<br /><br />";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_ALLTHANKS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "<br /><br /><br />";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_UPDATETHANKS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "<br /><br />";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_DELTHANKS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "<br /><br /><br />";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_POSTSEND");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "<br /><br />";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_USERSEND");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "<br /><br />";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_THANKSEND");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</dt>
\t\t<dd>";
        // line 24
        echo (isset($context["POSTS"]) ? $context["POSTS"] : null);
        echo "<br /><br /><br />";
        echo (isset($context["POSTSTHANKS"]) ? $context["POSTSTHANKS"] : null);
        echo "<br /><br />";
        echo (isset($context["USERSTHANKS"]) ? $context["USERSTHANKS"] : null);
        echo "<br /><br />";
        echo (isset($context["ALLTHANKS"]) ? $context["ALLTHANKS"] : null);
        echo "<br /><br /><br /><span style=\"color:red\">";
        echo (isset($context["UPDATETHANKS"]) ? $context["UPDATETHANKS"] : null);
        echo "</span><br /><br /><span style=\"color:red\">";
        echo (isset($context["DELTHANKS"]) ? $context["DELTHANKS"] : null);
        echo "</span><br /><br /><br /><span style=\"color:green\">";
        echo (isset($context["POSTSEND"]) ? $context["POSTSEND"] : null);
        echo "</span><br /><br /><span style=\"color:green\">";
        echo (isset($context["USERSEND"]) ? $context["USERSEND"] : null);
        echo "</span><br /><br /><span style=\"color:green\">";
        echo (isset($context["THANKSEND"]) ? $context["THANKSEND"] : null);
        echo "</span></dd>
\t</dl>
</fieldset>
";
        // line 27
        if ( !(isset($context["S_REFRESH"]) ? $context["S_REFRESH"] : null)) {
            // line 28
            echo "<form id=\"acp_thanks_refresh\" method=\"post\" action=\"";
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">
\t<fieldset class=\"submit-buttons\">
\t\t<legend>";
            // line 30
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "</legend>
\t\t<input class=\"button1\" type=\"submit\" id=\"refresh\" name=\"refresh\" value=\"";
            // line 31
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REFRESH");
            echo "\" />
\t</fieldset>
</form>
";
        }
        // line 35
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_thanks_refresh.html", 35)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_thanks_refresh.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 35,  145 => 31,  141 => 30,  135 => 28,  133 => 27,  111 => 24,  82 => 23,  79 => 22,  73 => 19,  69 => 18,  66 => 17,  60 => 14,  56 => 13,  53 => 12,  51 => 11,  47 => 10,  41 => 7,  36 => 5,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "acp_thanks_refresh.html", "");
    }
}
