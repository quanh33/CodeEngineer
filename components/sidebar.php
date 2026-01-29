<aside class="sidebar-wrapper w-full">
    <div class="sidebar-title">Danh mục sản phẩm</div>

    <nav class="sidebar-menu">
        <ul>
            <li x-data="{ open: false }">
                <div class="menu-item-wrap" :class="open ? 'menu-open-lv1' : ''">
                    
                    <a href="danh-muc.php" class="menu-link text-sm">
                        Tubing, Hose & Tube Fittings
                    </a>

                    <span class="menu-toggle-btn" @click.prevent="open = !open">
                        <i class="fa-solid fa-chevron-right menu-arrow" :class="open ? 'rotate-90' : ''"></i>
                    </span>
                </div>

                <ul x-show="open" x-collapse>
                    
                    <li x-data="{ subOpen: false }">
                        <div class="menu-item-wrap" :class="subOpen ? 'menu-open-lv2' : ''">
                            
                            <a href="danh-muc-c2.php" class="menu-link text-sm" style="padding-left: 35px;">
                                Tubing & Hose
                            </a>

                            <span class="menu-toggle-btn" @click.prevent="subOpen = !subOpen">
                                <i class="fa-solid fa-chevron-right menu-arrow" :class="subOpen ? 'rotate-90' : ''" style="font-size: 0.7rem;"></i>
                            </span>
                        </div>

                        <ul x-show="subOpen" x-collapse>
                            <li>
                                <div class="menu-item-wrap">
                                    <a href="danh-muc-c2.php" class="menu-link text-xs" style="padding-left: 50px;">
                                        Braid Chemical Grade Vinyl
                                    </a>
                                    </div>
                            </li>
                            <li>
                                <div class="menu-item-wrap">
                                    <a href="danh-muc-c2.php" class="menu-link text-xs" style="padding-left: 50px;">
                                        Braid Reinforced Polyurethane
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <div class="menu-item-wrap">
                            <a href="danh-muc-c2.php" class="menu-link text-sm" style="padding-left: 35px;">
                                Tubing & Hose Insert Fittings
                            </a>
                        </div>
                    </li>

                </ul>
            </li>

            <li>
                <div class="menu-item-wrap">
                    <a href="danh-muc.php" class="menu-link text-sm">Industrial & Control Valves</a>
                </div>
            </li>

        </ul>
    </nav>
</aside>