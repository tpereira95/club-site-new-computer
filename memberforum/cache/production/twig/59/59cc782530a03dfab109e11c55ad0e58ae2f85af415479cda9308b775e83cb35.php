<?php

/* @paul999_mention/event/overall_header_head_append.html */
class __TwigTemplate_158f65b657b35abc7939d8aac71ab53a10a41e04445e17b57b53a7e269309fee extends Twig_Template
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
        if (((isset($context["UA_AJAX_MENTION_URL"]) ? $context["UA_AJAX_MENTION_URL"] : null) &&  !$this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "INCLUDED_TRIBUTECSS", array()))) {
            // line 2
            $asset_file = "@paul999_mention/tribute.css";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
                $asset->add_assets_version('6');
            }
            $this->getEnvironment()->get_assets_bag()->add_stylesheet($asset);            // line 3
            $value = true;
            $context['definition']->set('INCLUDED_TRIBUTECSS', $value);
        }
        // line 5
        $asset_file = "@paul999_mention/mention.css";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
            $asset->add_assets_version('6');
        }
        $this->getEnvironment()->get_assets_bag()->add_stylesheet($asset);        // line 6
        echo "<style type=\"text/css\">
    .mention {
        color: #";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["MENTION_COLOR"]) ? $context["MENTION_COLOR"] : null), "css");
        echo ";
    }
</style>
";
    }

    public function getTemplateName()
    {
        return "@paul999_mention/event/overall_header_head_append.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 8,  47 => 6,  36 => 5,  32 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@paul999_mention/event/overall_header_head_append.html", "");
    }
}
