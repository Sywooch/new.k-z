
<div id="gkMenuWrap" class="clear">
    <div id="gkTopMenu">
        <div id="gkTopMenu1">
            <ul class="menu">
                <?php
                foreach($menuItems['1'] as $menuItem){
                    ?>
                    <li>
                        <a href="/<?=$menuItem->link?>"><?=$menuItem->name?></a>
                    </li>
                <?php
                }
                ?>
                <li>
                    <a href="/rss">rss</a>
                </li>
            </ul>
        </div>
        <div id="gkSearch">
            <form action="/" method="post">
                <div class="search">
                    <input autocomplete="off" name="searchword" id="mod-search-searchword" maxlength="20" class="inputbox" size="20" value="Поиск..." onblur="if (this.value=='') this.value='Поиск...';" onfocus="if (this.value=='Поиск...') this.value='';" type="text">
                    <input name="task" value="search" type="hidden">
                    <input name="option" value="com_search" type="hidden">
                    <input name="Itemid" value="9999" type="hidden">
                </div>
            </form>
        </div>
    </div>
    <div id="gkMainMenu" class="clear">
        <div class="gk-menu">
            <ul class="gkmenu level0">
                <li class="first<?=$ct == '' ? ' active' : ''?>">
                    <a href="/" class="first<?=$ct == '' ? ' active' : ''?>" title="главная">
                        <span class="menu-title">главная</span>
                    </a>
                </li>
                <?php
                foreach($menuItems['2'] as $menuItem){
                    ?>
                    <li<?=$ct == $menuItem->link ? ' class="active"' : ''?>>
                        <a<?=$ct == $menuItem->link ? ' class="active"' : ''?> href="/<?=$menuItem->link?>">
                                <span class="menu-title">
                                    <?=$menuItem->name?>
                                </span>
                        </a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
    <div id="gkMiddleMenu" class="clear">
        <ul class="menu">
            <?php
            foreach($menuItems['3'] as $menuItem){
                ?>
                <li>
                    <a href="/<?=$menuItem->link?>"><?=$menuItem->name?></a>
                </li>
            <?php
            }
            ?>
        </ul>
    </div>
    <div id="gkBottomMenu" class="clear">
        <div id="gkBreadcrumb">
            <div class="breadcrumbs">
                <ul>
                    <li class="pathway">Главная</li>
                </ul>
            </div>
        </div>
        <div id="gkTopMenu2">
            <ul class="menu">
                <?php
                foreach($menuItems['4'] as $menuItem){
                    ?>
                    <li>
                        <a href="/<?=$menuItem->link?>"><?=$menuItem->name?></a>
                    </li>
                <?php
                }
                ?>
                <li><a href="/sitemap">sitemap</a></li>
            </ul>
        </div>
    </div>
</div>