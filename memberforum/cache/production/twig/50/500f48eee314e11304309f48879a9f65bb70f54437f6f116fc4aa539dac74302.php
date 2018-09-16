<?php

/* acp_avatar_options_upload.html */
class __TwigTemplate_5311039e0d94a552dcba316071e90a12f07a1b1a6d098d8b42e26d96a4ee3e32 extends Twig_Template
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
        echo "<dl>
\t<dt><label for=\"avatar_upload_file\">";
        // line 2
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UPLOAD_AVATAR_FILE");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t<dd><input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"";
        // line 3
        echo (isset($context["AVATAR_UPLOAD_SIZE"]) ? $context["AVATAR_UPLOAD_SIZE"] : null);
        echo "\" /><input type=\"file\" name=\"avatar_upload_file\" id=\"avatar_upload_file\" class=\"inputbox autowidth\" /></dd>
</dl>

";
        // line 6
        if ((isset($context["S_UPLOAD_AVATAR_URL"]) ? $context["S_UPLOAD_AVATAR_URL"] : null)) {
            // line 7
            echo "\t<dl>
\t\t<dt><label for=\"avatar_upload_url\">";
            // line 8
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UPLOAD_AVATAR_URL");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UPLOAD_AVATAR_URL_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input type=\"url\" name=\"avatar_upload_url\" id=\"avatar_upload_url\" value=\"\" class=\"inputbox\" /></dd>
\t</dl>
";
        }
    }

    public function getTemplateName()
    {
        return "acp_avatar_options_upload.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  35 => 7,  33 => 6,  27 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "acp_avatar_options_upload.html", "");
    }
}
