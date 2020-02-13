<?php

/* ucp_prefs_view.html */
class __TwigTemplate_f586add1550e15ac05590809681ff7bad1131b1c88fd1ff38dedd27e1a479e71 extends Twig_Template
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
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_header.html", "ucp_prefs_view.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form id=\"ucp\" method=\"post\" action=\"";
        // line 3
        echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
        echo "\"";
        echo (isset($context["S_FORM_ENCTYPE"]) ? $context["S_FORM_ENCTYPE"] : null);
        echo ">

<h2>";
        // line 5
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TITLE");
        echo "</h2>

<div class=\"panel\">
\t<div class=\"inner\">

\t\t<fieldset>
\t\t";
        // line 11
        if ((isset($context["ERROR"]) ? $context["ERROR"] : null)) {
            echo "<p class=\"error\">";
            echo (isset($context["ERROR"]) ? $context["ERROR"] : null);
            echo "</p>";
        }
        // line 12
        echo "\t\t";
        // line 13
        echo "\t\t<dl>
\t\t\t<dt><label for=\"images1\">";
        // line 14
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_IMAGES");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label for=\"images1\"><input type=\"radio\" name=\"images\" id=\"images1\" value=\"1\"";
        // line 16
        if ((isset($context["S_IMAGES"]) ? $context["S_IMAGES"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t\t\t\t<label for=\"images0\"><input type=\"radio\" name=\"images\" id=\"images0\" value=\"0\"";
        // line 17
        if ( !(isset($context["S_IMAGES"]) ? $context["S_IMAGES"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"flash0\">";
        // line 21
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_FLASH");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label for=\"flash1\"><input type=\"radio\" name=\"flash\" id=\"flash1\" value=\"1\"";
        // line 23
        if ((isset($context["S_FLASH"]) ? $context["S_FLASH"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t\t\t\t<label for=\"flash0\"><input type=\"radio\" name=\"flash\" id=\"flash0\" value=\"0\"";
        // line 24
        if ( !(isset($context["S_FLASH"]) ? $context["S_FLASH"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"smilies1\">";
        // line 28
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_SMILIES");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label for=\"smilies1\"><input type=\"radio\" name=\"smilies\" id=\"smilies1\" value=\"1\"";
        // line 30
        if ((isset($context["S_SMILIES"]) ? $context["S_SMILIES"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t\t\t\t<label for=\"smilies0\"><input type=\"radio\" name=\"smilies\" id=\"smilies0\" value=\"0\"";
        // line 31
        if ( !(isset($context["S_SMILIES"]) ? $context["S_SMILIES"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"sigs1\">";
        // line 35
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_SIGS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label for=\"sigs1\"><input type=\"radio\" name=\"sigs\" id=\"sigs1\" value=\"1\"";
        // line 37
        if ((isset($context["S_SIGS"]) ? $context["S_SIGS"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t\t\t\t<label for=\"sigs0\"><input type=\"radio\" name=\"sigs\" id=\"sigs0\" value=\"0\"";
        // line 38
        if ( !(isset($context["S_SIGS"]) ? $context["S_SIGS"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"avatars1\">";
        // line 42
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_AVATARS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label for=\"avatars1\"><input type=\"radio\" name=\"avatars\" id=\"avatars1\" value=\"1\"";
        // line 44
        if ((isset($context["S_AVATARS"]) ? $context["S_AVATARS"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t\t\t\t<label for=\"avatars0\"><input type=\"radio\" name=\"avatars\" id=\"avatars0\" value=\"0\"";
        // line 45
        if ( !(isset($context["S_AVATARS"]) ? $context["S_AVATARS"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>
\t\t";
        // line 48
        if ((isset($context["S_CHANGE_CENSORS"]) ? $context["S_CHANGE_CENSORS"] : null)) {
            // line 49
            echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"wordcensor1\">";
            // line 50
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISABLE_CENSORS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd>
\t\t\t\t\t<label for=\"wordcensor1\"><input type=\"radio\" name=\"wordcensor\" id=\"wordcensor1\" value=\"1\"";
            // line 52
            if ((isset($context["S_DISABLE_CENSORS"]) ? $context["S_DISABLE_CENSORS"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t\t\t<label for=\"wordcensor0\"><input type=\"radio\" name=\"wordcensor\" id=\"wordcensor0\" value=\"0\"";
            // line 53
            if ( !(isset($context["S_DISABLE_CENSORS"]) ? $context["S_DISABLE_CENSORS"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t";
        }
        // line 57
        echo "\t\t";
        // line 58
        echo "\t\t<hr />
\t\t";
        // line 59
        // line 60
        echo "\t\t<dl>
\t\t\t<dt><label>";
        // line 61
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_TOPICS_DAYS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>";
        // line 62
        echo (isset($context["S_TOPIC_SORT_DAYS"]) ? $context["S_TOPIC_SORT_DAYS"] : null);
        echo "</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label>";
        // line 65
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_TOPICS_KEY");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>";
        // line 66
        echo (isset($context["S_TOPIC_SORT_KEY"]) ? $context["S_TOPIC_SORT_KEY"] : null);
        echo "</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label>";
        // line 69
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_TOPICS_DIR");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>";
        // line 70
        echo (isset($context["S_TOPIC_SORT_DIR"]) ? $context["S_TOPIC_SORT_DIR"] : null);
        echo "</dd>
\t\t</dl>
\t\t<hr />
\t\t<dl>
\t\t\t<dt><label>";
        // line 74
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_POSTS_DAYS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>";
        // line 75
        echo (isset($context["S_POST_SORT_DAYS"]) ? $context["S_POST_SORT_DAYS"] : null);
        echo "</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label>";
        // line 78
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_POSTS_KEY");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>";
        // line 79
        echo (isset($context["S_POST_SORT_KEY"]) ? $context["S_POST_SORT_KEY"] : null);
        echo "</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label>";
        // line 82
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_POSTS_DIR");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>";
        // line 83
        echo (isset($context["S_POST_SORT_DIR"]) ? $context["S_POST_SORT_DIR"] : null);
        echo "</dd>
\t\t</dl>
\t\t";
        // line 85
        // line 86
        echo "\t\t</fieldset>

\t</div>
</div>

<fieldset class=\"submit-buttons\">
\t";
        // line 92
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "<input type=\"reset\" value=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
        echo "\" name=\"reset\" class=\"button2\" />&nbsp;
\t<input type=\"submit\" name=\"submit\" value=\"";
        // line 93
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
        echo "\" class=\"button1\" />
\t";
        // line 94
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</fieldset>
</form>

";
        // line 98
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_prefs_view.html", 98)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_prefs_view.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 98,  309 => 94,  305 => 93,  299 => 92,  291 => 86,  290 => 85,  285 => 83,  280 => 82,  274 => 79,  269 => 78,  263 => 75,  258 => 74,  251 => 70,  246 => 69,  240 => 66,  235 => 65,  229 => 62,  224 => 61,  221 => 60,  220 => 59,  217 => 58,  215 => 57,  204 => 53,  196 => 52,  190 => 50,  187 => 49,  185 => 48,  175 => 45,  167 => 44,  161 => 42,  150 => 38,  142 => 37,  136 => 35,  125 => 31,  117 => 30,  111 => 28,  100 => 24,  92 => 23,  86 => 21,  75 => 17,  67 => 16,  61 => 14,  58 => 13,  56 => 12,  50 => 11,  41 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ucp_prefs_view.html", "");
    }
}
