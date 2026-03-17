<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    private function layoutView(string $layoutTitle, string $bodyClass = '')
    {
        return view('layout._stub', compact('layoutTitle', 'bodyClass'));
    }

    public function unfixedSidebar()
    {
        return $this->layoutView('Default Sidebar');
    }

    public function fixedSidebar()
    {
        return $this->layoutView('Fixed Sidebar', 'layout-fixed');
    }

    public function fixedHeader()
    {
        return $this->layoutView('Fixed Header', 'layout-fixed');
    }

    public function fixedFooter()
    {
        return $this->layoutView('Fixed Footer', 'layout-fixed layout-footer-fixed');
    }

    public function fixedComplete()
    {
        return $this->layoutView('Fixed Complete', 'layout-fixed layout-footer-fixed');
    }

    public function sidebarMini()
    {
        return $this->layoutView('Sidebar Mini', 'sidebar-mini');
    }

    public function collapsedSidebar()
    {
        return $this->layoutView('Sidebar Mini + Collapsed', 'sidebar-mini sidebar-collapse');
    }

    public function logoSwitch()
    {
        return $this->layoutView('Sidebar Mini + Logo Switch', 'sidebar-mini');
    }

    public function rtl()
    {
        return $this->layoutView('Layout RTL', 'layout-rtl');
    }

    public function customArea()
    {
        return $this->layoutView('Layout + Custom Area');
    }
}
