[{assign var="shop"           value=$oEmailView->getShop()}]
[{assign var="oViewConf"      value=$oEmailView->getViewConfig()}]
[{assign var="sOrderId"       value=$order->getId()}]
[{assign var="oOrderFileList" value=$oEmailView->getOrderFileList($sOrderId)}]

[{include file="email/html/header.tpl" title="DD_DOWNLOADLINKS_HEADING"|oxmultilangassign|cat:" #"|cat:$order->oxorder__oxordernr->value}]

[{block name="email_html_senddownloadlinks_infoheader"}]
    [{oxmultilang ident="EMAIL_SENDDOWNLOADS_GREETING"}] [{$order->oxorder__oxbillsal->value|oxmultilangsal}] [{$order->oxorder__oxbillfname->value}] [{$order->oxorder__oxbilllname->value}],<br>
    <br>
[{/block}]

[{block name="email_html_senddownloadlinks_oxordernr"}][{/block}]

[{if $oOrderFileList}]
    [{block name="email_html_senddownloadlinks_download_header"}]
        <h3 class="underline">[{oxmultilang ident="MY_DOWNLOADS_DESC"}]</h3>
    [{/block}]
    [{block name="email_html_senddownloadlinks_download_link"}]
        [{foreach from=$oOrderFileList item="oOrderFile"}]
            <ul>
                <li>
                    [{if $order->oxorder__oxpaid->value != "0000-00-00 00:00:00" || !$oOrderFile->oxorderfiles__oxpurchasedonly->value}]
                        <a href="[{oxgetseourl ident=$oViewConf->getBaseDir()|cat:"index.php?cl=download" params="sorderfileid="|cat:$oOrderFile->getId()}]">[{$oOrderFile->oxorderfiles__oxfilename->value}]</a> [{$oOrderFile->getFileSize()|oxfilesize}]
                    [{else}]
                        <span>[{$oOrderFile->oxorderfiles__oxfilename->value}]</span>
                        <strong>[{oxmultilang ident="DOWNLOADS_PAYMENT_PENDING"}]</strong>
                    [{/if}]
                </li>
            </ul>
        [{/foreach}]
        <br/>
    [{/block}]
[{/if}]

[{block name="email_html_senddownloadlinks_infofooter"}]
    <p>[{oxmultilang ident="YOUR_TEAM" args=$shop->oxshops__oxname->value}]</p>
    <br/>
[{/block}]

[{block name="email_html_senddownloadlinks_ts"}]
    [{if $oViewConf->showTs("ORDERCONFEMAIL") && $oViewConf->getTsId()}]
        [{assign var="sTSRatingImg" value="https://www.trustedshops.com/bewertung/widget/img/bewerten_"|cat:$oViewConf->getActLanguageAbbr()|cat:".gif"}]
        <h3 class="underline">[{oxmultilang ident="RATE_OUR_SHOP"}]</h3>

        <p>
            <a href="[{$oViewConf->getTsRatingUrl()}]" target="_blank" title="[{oxmultilang ident="TRUSTED_SHOPS_RATINGS"}]">
                <img src="[{$sTSRatingImg}]" border="0" alt="[{oxmultilang ident="WRITE_REVIEW_2"}]" align="middle">
            </a>
        </p>
        <br/>
    [{/if}]
[{/block}]

[{include file="email/html/footer.tpl"}]
