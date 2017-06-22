[{capture append="oxidBlock_pageBody"}]
    [{if $oView->showRDFa()}]
        [{include file="rdfa/rdfa.tpl"}]
    [{/if}]

    [{block name="layout_header"}]
        [{include file="layout/header.tpl"}]
    [{/block}]

    [{assign var="blFullwidth" value=$oViewConf->getViewThemeParam('blFullwidthLayout')}]

    <div id="wrapper" [{if $sidebar}]class="sidebar[{$sidebar}]"[{/if}]>

        <div class="[{if $blFullwidth}]container[{else}]container-fluid[{/if}]">

            <div class="underdog">

                <div class="row">
                    [{if $oView->getClassName()=='start' && $oView->getBanners()|@count > 0}]
                        <div class="col-md-2" style="top: 235px;">
                            <img src="[{$oViewConf->getImageUrl()}]menu_inactivo.png" alt="">
                        </div>
                        <div class="col-md-8">
                            [{include file="widget/slider.tpl"}]
                        </div>
                        <div class="col-md-2" style="top: 235px;">
                            <a href="https://www.facebook.com">
                                <img src="[{$oViewConf->getImageUrl()}]icono_facebook.png" alt="fbChop">
                            </a>
                           <br>
                            <img src="[{$oViewConf->getImageUrl()}]icono_instagram.png" alt="">
                        </div>
                    [{/if}]
                </div>

                <div class="content-box">

                    [{if $oView->getClassName() != "start" && !$blHideBreadcrumb}]
                        [{block name="layout_breadcrumb"}]
                            [{include file="widget/breadcrumb.tpl"}]
                        [{/block}]
                    [{/if}]

                    [{$smarty.capture.loginErrors}]

                    <div class="row">
                        [{if $sidebar && $sidebar != "Right"}]
                            <div class="col-xs-12 col-md-3 [{$oView->getClassName()}]">
                                <div id="sidebar">
                                    <!--[{include file="layout/sidebar.tpl"}]-->
                                </div>
                            </div>
                        [{/if}]

                        <div class="col-xs-12 [{if $sidebar}]col-md-9[{/if}]">

                            <div id="content">
                                [{block name="content_main"}]
                                    [{include file="message/errors.tpl"}]

                                    [{foreach from=$oxidBlock_content item="_block"}]
                                        [{$_block}]
                                    [{/foreach}]
                                [{/block}]
                            </div>

                        </div>

                        [{if $sidebar && $sidebar == "Right"}]
                            <div class="col-xs-12 col-md-3 [{$oView->getClassName()}]">
                                <div id="sidebar">
                                    [{include file="layout/sidebar.tpl"}]
                                </div>
                            </div>
                        [{/if}]
                    </div>

                </div>

            </div>

        </div>

    </div>

    [{include file="layout/footer.tpl"}]

    [{include file="widget/facebook/init.tpl"}]

    <i class="fa fa-chevron-circle-up icon-4x" id="jumptotop"></i>
[{/capture}]
[{include file="layout/base.tpl"}]