<?php

/* acp_autoresize_body.html */
class __TwigTemplate_c0bac573744a5354ca03bc3e1917378b12aedc9672b5786726388725dd265c0c extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "acp_autoresize_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h1>";
        // line 3
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTORESIZE_TITLE");
        echo "</h1>

<form id=\"acp_board\" method=\"post\" action=\"";
        // line 5
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "\">

\t<fieldset>
\t\t<legend>";
        // line 8
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SETTINGS");
        echo "</legend>

\t\t<dl>
\t\t\t<dt><label for=\"ftc2_autoresize_trigger\">";
        // line 11
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTORESIZE_TRIGGER");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTORESIZE_TRIGGER_DESC");
        echo "</span></dt>
\t\t\t<dd>
\t\t\t\t<label><input id=\"ftc2_autoresize_trigger\" name=\"ftc2_autoresize_trigger\" type=\"radio\" class=\"radio\" value=\"filesize\" ";
        // line 13
        if (((isset($context["FTC2_AUTORESIZE_TRIGGER"]) ? $context["FTC2_AUTORESIZE_TRIGGER"] : null) == "filesize")) {
            echo "checked=\"checked\"";
        }
        echo "/> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTORESIZE_FILESIZE");
        echo "</label>
\t\t\t\t<label><input name=\"ftc2_autoresize_trigger\" type=\"radio\" class=\"radio\" value=\"dimensions\" ";
        // line 14
        if (((isset($context["FTC2_AUTORESIZE_TRIGGER"]) ? $context["FTC2_AUTORESIZE_TRIGGER"] : null) == "dimensions")) {
            echo "checked=\"checked\"";
        }
        echo "/> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTORESIZE_DIMENSIONS");
        echo "</label>
\t\t\t\t<label><input name=\"ftc2_autoresize_trigger\" type=\"radio\" class=\"radio\" value=\"either\" ";
        // line 15
        if (((isset($context["FTC2_AUTORESIZE_TRIGGER"]) ? $context["FTC2_AUTORESIZE_TRIGGER"] : null) == "either")) {
            echo "checked=\"checked\"";
        }
        echo "/> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTORESIZE_EITHER");
        echo "</label>
\t\t\t</dd>
\t\t</dl>

\t\t<dl>
\t\t\t<dt><label for=\"ftc2_autoresize_filesize\">";
        // line 20
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTORESIZE_FILESIZE");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd><input id=\"ftc2_autoresize_filesize\" name=\"ftc2_autoresize_filesize\" type=\"number\" value=\"";
        // line 21
        echo (isset($context["FTC2_AUTORESIZE_FILESIZE"]) ? $context["FTC2_AUTORESIZE_FILESIZE"] : null);
        echo "\" min=\"0\" max=\"999999999999999\"> Bytes</dd>
\t\t</dl>

\t\t<dl>
\t\t\t<dt><label for=\"ftc2_autoresize_width\">";
        // line 25
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTORESIZE_DIMENSIONS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<input id=\"ftc2_autoresize_width\" name=\"ftc2_autoresize_width\" type=\"number\" value=\"";
        // line 27
        echo (isset($context["FTC2_AUTORESIZE_WIDTH"]) ? $context["FTC2_AUTORESIZE_WIDTH"] : null);
        echo "\" min=\"1\" max=\"9999\">
\t\t\t\tx
\t\t\t\t<input name=\"ftc2_autoresize_height\" type=\"number\" value=\"";
        // line 29
        echo (isset($context["FTC2_AUTORESIZE_HEIGHT"]) ? $context["FTC2_AUTORESIZE_HEIGHT"] : null);
        echo "\" min=\"1\" max=\"9999\">
\t\t\t\tpx
\t\t\t</dd>
\t\t</dl>

\t\t<dl>
\t\t\t<dt>
\t\t\t\t<label for=\"ftc2_autoresize_imparams\">";
        // line 36
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTORESIZE_IMPARAMS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br>
\t\t\t\t<span>";
        // line 37
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTORESIZE_IMPARAMS_DESC");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "<br><pre>mogrify ";
        echo (isset($context["FTC2_AUTORESIZE_IMPARAMS"]) ? $context["FTC2_AUTORESIZE_IMPARAMS"] : null);
        echo " ";
        echo (isset($context["FTC2_AUTORESIZE_WIDTH"]) ? $context["FTC2_AUTORESIZE_WIDTH"] : null);
        echo "x";
        echo (isset($context["FTC2_AUTORESIZE_HEIGHT"]) ? $context["FTC2_AUTORESIZE_HEIGHT"] : null);
        echo "&gt; \$image_path</pre></span>
\t\t\t</dt>
\t\t\t<dd><input id=\"ftc2_autoresize_imparams\" name=\"ftc2_autoresize_imparams\" type=\"text\" value=\"";
        // line 39
        echo (isset($context["FTC2_AUTORESIZE_IMPARAMS"]) ? $context["FTC2_AUTORESIZE_IMPARAMS"] : null);
        echo "\" min=\"0\" max=\"255\"></dd>
\t\t</dl>

\t\t<dl>
\t\t\t<dt>
\t\t\t\t<label for=\"ftc2_autoresize_impath\">";
        // line 44
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTORESIZE_IMPATH");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br>
\t\t\t\t<span>";
        // line 45
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTORESIZE_IMPATH_DESC");
        echo "</span>
\t\t\t</dt>
\t\t\t<dd><input id=\"ftc2_autoresize_impath\" name=\"ftc2_autoresize_impath\" type=\"text\" value=\"";
        // line 47
        echo (isset($context["FTC2_AUTORESIZE_IMPATH"]) ? $context["FTC2_AUTORESIZE_IMPATH"] : null);
        echo "\" min=\"1\" max=\"255\"></dd>
\t\t</dl>

\t</fieldset>

\t<fieldset>
\t\t<legend>";
        // line 53
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTORESIZE_DEBUG_TITLE");
        echo "</legend>

\t\t<dl>
\t\t\t<dt><label for=\"ftc2_autoresize_debug\">";
        // line 56
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTORESIZE_DEBUG");
        echo "</label><br><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTORESIZE_DEBUG_DESC");
        echo "</span></dt>
\t\t\t<dd>
\t\t\t\t<label><input id=\"ftc2_autoresize_debug\" name=\"ftc2_autoresize_debug\" type=\"radio\" class=\"radio\" value=\"1\" ";
        // line 58
        if ((isset($context["FTC2_AUTORESIZE_DEBUG"]) ? $context["FTC2_AUTORESIZE_DEBUG"] : null)) {
            echo "checked=\"checked\"";
        }
        echo "/> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t\t\t\t<label><input name=\"ftc2_autoresize_debug\" type=\"radio\" class=\"radio\" value=\"0\" ";
        // line 59
        if ( !(isset($context["FTC2_AUTORESIZE_DEBUG"]) ? $context["FTC2_AUTORESIZE_DEBUG"] : null)) {
            echo "checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>
\t</fieldset>

\t<fieldset class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 65
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
        echo "\" />
\t\t";
        // line 66
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t</fieldset>

</form>

";
        // line 71
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_autoresize_body.html", 71)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_autoresize_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 71,  202 => 66,  198 => 65,  185 => 59,  177 => 58,  170 => 56,  164 => 53,  155 => 47,  150 => 45,  145 => 44,  137 => 39,  125 => 37,  120 => 36,  110 => 29,  105 => 27,  99 => 25,  92 => 21,  87 => 20,  75 => 15,  67 => 14,  59 => 13,  51 => 11,  45 => 8,  39 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "acp_autoresize_body.html", "");
    }
}
