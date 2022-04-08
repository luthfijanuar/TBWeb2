<?php

/* welcome.html */
class __TwigTemplate_eac5bd087f7d7ce830ba114e3d5059d5d345ccf707b1b3ae165ebebcc76f7e21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout-private.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout-private.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"btn-controls\">
    <div id=\"show-urgent-info\"></div>

    <div class=\"btn-box-row row-fluid\">
        <div class=\"span12\">
            <div class=\"well well-small well-box\">
                <small class=\"pull-right hidden-phone hidden-tablet\">";
        // line 10
        echo twig_escape_filter($this->env, tgl_indo(date("Y-m-d")), "html", null, true);
        echo "</small>
                Selamat datang di <b>e-learning";
        // line 11
        echo twig_escape_filter($this->env, get_pengaturan("nama-sekolah", "value"), "html", null, true);
        echo "</b>
                <br>
                <i class=\"icon icon-map-marker\"></i> Alamat:";
        // line 13
        echo twig_escape_filter($this->env, get_pengaturan("alamat", "value"), "html", null, true);
        // line 14
        if ((!twig_test_empty(get_pengaturan("telp", "value")))) {
            // line 15
            echo "                <i class=\"icon icon-phone\"></i> Telpon:";
            echo twig_escape_filter($this->env, get_pengaturan("telp", "value"), "html", null, true);
        }
        // line 17
        echo "            </div>
        </div>
    </div>";
        // line 21
        if (is_admin()) {
            // line 22
            if (((isset($context["count_mapel_kelas"]) ? $context["count_mapel_kelas"] : null) == 0)) {
                // line 23
                echo "    <div class=\"well well-large well-box\" style=\"border:2px solid #29b7d3;\">
        <b><i class=\"icon-wrench\"></i> Atur data berikut supaya aplikasi e-learing dapat berjalan dengan baik:</b>
        <table class=\"table table-hover\" style=\"margin-top:10px;\">
            <tr>
                <td width=\"30%\">
                    <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, site_url("mapel"), "html", null, true);
                echo "\"><b><i class=\"menu-icon icon-book\"></i> Manajemen Matapelajaran</b></a>
                </td>
                <td>
                    Input semua Matapelajaran yang ada di sekolah
                </td>
            </tr>
            <tr>
                <td width=\"30%\">
                    <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, site_url("kelas"), "html", null, true);
                echo "\"><b><i class=\"menu-icon icon-tasks\"></i> Manajemen Kelas</b></a>
                </td>
                <td>
                    Input semua Kelas yang ada di sekolah
                </td>
            </tr>
            <tr>
                <td width=\"30%\">
                    <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, site_url("kelas/mapel_kelas"), "html", null, true);
                echo "\"><b><i class=\"menu-icon icon-paste\"></i> Matapelajaran Kelas</b></a>
                </td>
                <td>
                    Atur Matapelajaran pada tiap-tiap Kelas
                </td>
            </tr>
        </table>
    </div>";
            }
            // line 53
            echo "
    <div class=\"btn-box-row row-fluid\">
        <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, site_url("siswa/index/1"), "html", null, true);
            echo "\" class=\"btn-box big span3\">
            <i class=\"icon-group\"></i><b>";
            // line 56
            echo twig_escape_filter($this->env, (isset($context["jml_siswa"]) ? $context["jml_siswa"] : null), "html", null, true);
            echo "</b>
            <p class=\"text-muted\">Siswa</p>
        </a>
        <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, site_url("pengajar/index/1"), "html", null, true);
            echo "\" class=\"btn-box big span3\">
            <i class=\"icon-user\"></i><b>";
            // line 60
            echo twig_escape_filter($this->env, (isset($context["jml_pengajar"]) ? $context["jml_pengajar"] : null), "html", null, true);
            echo "</b>
            <p class=\"text-muted\">Pengajar</p>
        </a>
        <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, site_url("siswa/index/0"), "html", null, true);
            echo "\" class=\"btn-box big span3\">
            <i class=\"icon-group\"></i><b>";
            // line 64
            echo twig_escape_filter($this->env, (isset($context["jml_siswa_pending"]) ? $context["jml_siswa_pending"] : null), "html", null, true);
            echo "</b>
            <p class=\"text-muted\">Pending siswa</p>
        </a>
        <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, site_url("pengajar/index/0"), "html", null, true);
            echo "\" class=\"btn-box big span3\">
            <i class=\"icon-user\"></i><b>";
            // line 68
            echo twig_escape_filter($this->env, (isset($context["jml_pengajar_pending"]) ? $context["jml_pengajar_pending"] : null), "html", null, true);
            echo "</b>
            <p class=\"text-muted\">Pending pengajar</p>
        </a>
    </div>

    <div class=\"btn-box-row row-fluid\">
        <div class=\"span6\">
            <div class=\"well well-small well-box\">
                <b><i class=\"icon-bullhorn\"></i> Pengumuman</b>
                <table class=\"table table-striped table-condensed\">";
            // line 78
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pengumuman"]) ? $context["pengumuman"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 79
                echo "                    <tr>
                        <td>";
                // line 80
                echo anchor(("pengumuman/detail/" . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id")), $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "judul"));
                echo "</td>
                    </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                </table>
            </div>

            <div class=\"well well-small well-box\">
                <b><i class=\"icon-signin\"></i> Riwayat login pengguna</b>
                <div id=\"show-last-login-list\"></div>
            </div>
        </div>
        <!--div class=\"span6\">
            <div class=\"well well-small well-box\">
                <div class=\"pull-right\">
                    <a class=\"muted\" href=\"";
            // line 94
            echo twig_escape_filter($this->env, (isset($context["portal_update_link"]) ? $context["portal_update_link"] : null), "html", null, true);
            echo "\" target=\"_tab\">Portal update</a> |
                    <a class=\"muted\" href=\"";
            // line 95
            echo twig_escape_filter($this->env, (isset($context["bug_tracker_link"]) ? $context["bug_tracker_link"] : null), "html", null, true);
            echo "\" target=\"_tab\">Bug tracker</a>
                </div>
                <b><i class=\"icon-bullhorn\"></i> Info Update</b>
                <table class=\"table table-striped table-condensed\" id=\"info-update\"></table>
                <input type=\"hidden\" id=\"info-update-link\" value=\"";
            // line 99
            echo twig_escape_filter($this->env, (isset($context["info_update_link"]) ? $context["info_update_link"] : null), "html", null, true);
            echo "\">
            </div>
        </div-->
    </div>";
        }
        // line 105
        if (is_pengajar()) {
            // line 106
            $context["peraturan"] = get_pengaturan("peraturan-elearning", "value");
            // line 107
            if ((!twig_test_empty((isset($context["peraturan"]) ? $context["peraturan"] : null)))) {
                // line 108
                echo "    <div class=\"btn-box-row row-fluid\">
         <div class=\"span12\">
            <div class=\"well well-small well-box\">
                <b>Peraturan e-learning : </b><br>";
                // line 112
                echo (isset($context["peraturan"]) ? $context["peraturan"] : null);
                echo "
            </div>
         </div>
    </div>";
            }
            // line 117
            echo "
    <div class=\"btn-box-row row-fluid\">
        <div class=\"span6\">
            <div class=\"well well-small well-box\">
                <b><i class=\"icon-bullhorn\"></i> Pengumuman</b>
                <table class=\"table table-striped table-condensed\">";
            // line 123
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pengumuman"]) ? $context["pengumuman"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 124
                echo "                    <tr>
                        <td>";
                // line 125
                echo anchor(("pengumuman/detail/" . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id")), $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "judul"));
                echo "</td>
                    </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "                </table>
            </div>
        </div>
        <div class=\"span6\">
            <div class=\"well well-small well-box\">
                <b><i class=\"icon-signin\"></i> Riwayat login pengguna</b>
                <div id=\"show-last-login-list\"></div>
            </div>
        </div>
    </div>";
        }
        // line 140
        if (is_siswa()) {
            // line 141
            $context["peraturan"] = get_pengaturan("peraturan-elearning", "value");
            // line 142
            if ((!twig_test_empty((isset($context["peraturan"]) ? $context["peraturan"] : null)))) {
                // line 143
                echo "    <div class=\"btn-box-row row-fluid\">
         <div class=\"span12\">
            <div class=\"well well-small well-box\">
                <b>Peraturan e-learning : </b><br>";
                // line 147
                echo (isset($context["peraturan"]) ? $context["peraturan"] : null);
                echo "
            </div>
         </div>
    </div>";
            }
            // line 152
            echo "
    <div class=\"btn-box-row row-fluid\">
        <div class=\"span6\">
            <div class=\"well well-small well-box\">
                <b><i class=\"icon-tasks\"></i> Tugas terbaru</b>
                <table class=\"table table-striped table-condensed\">";
            // line 158
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tugas_terbaru"]) ? $context["tugas_terbaru"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 159
                echo "                    <tr>
                        <td>
                            <a href=\"";
                // line 161
                echo twig_escape_filter($this->env, site_url(("tugas?judul=" . urlencode($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "judul")))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "judul"), "html", null, true);
                echo "</a>
                        </td>
                    </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo "                </table>
            </div>

            <div class=\"well well-small well-box\">
                <b><i class=\"icon-book\"></i> Materi terbaru</b>
                <table class=\"table table-striped table-condensed\">";
            // line 171
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["materi_terbaru"]) ? $context["materi_terbaru"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 172
                echo "                    <tr>
                        <td>
                            <a href=\"";
                // line 174
                echo twig_escape_filter($this->env, site_url(("materi/detail/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"))), "html", null, true);
                echo "\" target=\"_tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "judul"), "html", null, true);
                echo "</a>
                        </td>
                    </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 178
            echo "                </table>
            </div>
        </div>

        <div class=\"span6\">
            <div class=\"well well-small well-box\">
                <b><i class=\"icon-bullhorn\"></i> Pengumuman</b>
                <table class=\"table table-striped table-condensed\">";
            // line 186
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pengumuman"]) ? $context["pengumuman"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 187
                echo "                    <tr>
                        <td>";
                // line 188
                echo anchor(("pengumuman/detail/" . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id")), $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "judul"));
                echo "</td>
                    </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 191
            echo "                </table>
            </div>

            <div class=\"well well-small well-box\">
                <b><i class=\"icon-signin\"></i> Riwayat login pengguna</b>
                <div id=\"show-last-login-list\"></div>
            </div>
        </div>
    </div>";
        }
        // line 201
        echo "
</div>
<!--/#btn-controls-->";
    }

    public function getTemplateName()
    {
        return "welcome.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 201,  346 => 191,  338 => 188,  335 => 187,  331 => 186,  322 => 178,  311 => 174,  307 => 172,  303 => 171,  296 => 165,  285 => 161,  281 => 159,  277 => 158,  270 => 152,  263 => 147,  258 => 143,  256 => 142,  254 => 141,  252 => 140,  240 => 128,  232 => 125,  229 => 124,  225 => 123,  218 => 117,  211 => 112,  206 => 108,  204 => 107,  202 => 106,  200 => 105,  193 => 99,  186 => 95,  182 => 94,  169 => 83,  161 => 80,  158 => 79,  154 => 78,  142 => 68,  138 => 67,  132 => 64,  128 => 63,  122 => 60,  118 => 59,  112 => 56,  108 => 55,  104 => 53,  93 => 44,  82 => 36,  71 => 28,  64 => 23,  62 => 22,  60 => 21,  56 => 17,  52 => 15,  50 => 14,  48 => 13,  43 => 11,  39 => 10,  31 => 4,  28 => 3,);
    }
}
